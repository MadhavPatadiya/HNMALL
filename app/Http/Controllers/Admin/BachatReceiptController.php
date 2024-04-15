<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bachat;
use App\Models\Wallet;
use App\Models\User;
use App\Models\DailyInterest;
use App\Models\TotalInterest;
use App\Models\BachatReceipt;
use App\Models\BachatDebitReceipt;
use App\Models\Statement;
use App\Models\masikDeactive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BachatReceiptFromRequest;
use App\Http\Requests\BachatDebitReceiptFormRequest;
use App\Http\Requests\masikDeactiveRequest;
use Illuminate\Support\Facades\Auth;



class BachatReceiptController extends Controller
{
    public function index($id)
    {
        $BachatReceipt = BachatReceipt::where('user_id',$id)->get();
        $bachat = Bachat::findorFail($id);
        $wallet = Wallet::where('user_id',$id)->first();

        return view('admin.bachat_receipt.index', compact('BachatReceipt','bachat', 'wallet'));
    }

    public function create($id)
    {
        $bachats = Bachat::findOrFail($id);
        $lastReceipt = BachatReceipt::orderBy('id', 'desc')->first();

        // If there are no existing receipt records, start with 1
        $nextReceiptNumber = $lastReceipt ? ($lastReceipt->receipt_no + 1) : 1;

        $formattedReceiptNumber = str_pad($nextReceiptNumber, 5, '0', STR_PAD_LEFT);

        return view('admin.bachat_receipt.create',compact('bachats', 'formattedReceiptNumber'));
    }


    public function create_receipt()
    {
        $bachat = Bachat::where('status', '=', 'active')->get();

        $user = User::all();

        return view('admin.bachat_receipt.create_receipt', compact('bachat','user'));
    }


    public function store(BachatReceiptFromRequest $request)
    {
        $validatedData = $request->validated();

        $user_id = $validatedData['user_id'];

        $wallet = Wallet::where('user_id', $validatedData['user_id'])->first();

        $interest = $wallet ? $wallet->balance * 0.01 : 0;
        $walletBalanceAfterInterest = $wallet ? $wallet->balance + $interest : $validatedData['total_amount'];

        if ($wallet) {
            $wallet->balance += $validatedData['total_amount'];
            $wallet->save();
        } else {
            $wallet = new Wallet();
            $wallet->user_id = $validatedData['user_id'];
            $wallet->balance = $validatedData['total_amount'];
            $wallet->save();
        }


        DailyInterest::create([
            'date' => now()->toDateString(),
            'user_id' => $validatedData['user_id'],
            'daily_interest' => $interest,
        ]);

        $totalInterestRecord = TotalInterest::where('user_id', $validatedData['user_id'])->first();

        if ($totalInterestRecord) {
            $totalInterest = $totalInterestRecord->total_interest;
        } else {
            $totalInterest = 0;
        }

        $BachatReceipt = new BachatReceipt();
        $BachatReceipt->user_id = $validatedData['user_id'];
        $BachatReceipt->member_date = $validatedData['member_date'];
        $BachatReceipt->receipt_no = $validatedData['receipt_no'];
        $BachatReceipt->total_amount = $validatedData['total_amount'];
        $BachatReceipt->total_amount_words = $validatedData['total_amount_words'];
        // $BachatReceipt->cash_2000 = $validatedData['cash_2000'];
        $BachatReceipt->cash_500 = $validatedData['cash_500'];
        $BachatReceipt->cash_200 = $validatedData['cash_200'];
        $BachatReceipt->cash_100 = $validatedData['cash_100'];
        $BachatReceipt->cash_50 = $validatedData['cash_50'];
        $BachatReceipt->cash_20 = $validatedData['cash_20'];
        $BachatReceipt->save();

           if (!$totalInterestRecord) {
            TotalInterest::create([
                'user_id' => $validatedData['user_id'],
                'total_interest' => 0,
            ]);
        }
           $dailyInterest = $wallet->dailyInterests->sum('daily_interest');

        return redirect('admin/bachat-receipt/' . $BachatReceipt->id . '/view')
            ->with('message', 'Bachat Receipt Added Successfully');
    }

    public function create_debit($id)
    {
        $bachats = Bachat::findOrFail($id);

        $totalInterest = TotalInterest::where('user_id','=',$id)->get();
        $wallet = Wallet::where('user_id','=',$id)->get();

        $month_ini = date("m", mktime(0, 0, 0, date("m", strtotime("-1 month")), 1, date("Y", strtotime("-1 month"))));
        $month_end = date("Y-m-d", mktime(0, 0, 0, date("m", strtotime("-1 month")), date("t", strtotime("-1 month")), date("Y", strtotime("-1 month"))));

        $totalInterestForLastMonth= DailyInterest::where('user_id',"=", $id)
            ->whereRaw('MONTH(date) = ?', [$month_ini])->get();

        $current_month = date('m');
        $start_date = date('Y-m-01');
        $end_date = date('Y-m-d');

        $currentMonthTotalInterest= DailyInterest::where('user_id',"=", $id)
        ->whereRaw('MONTH(date) = ?',[$current_month])->get();

        $prefix = '0';
        $auto_number = $this->generateRandomNumber($prefix);
        $lastBachat = BachatDebitReceipt::
        orderBy('id', 'asc')
        ->get();


        return view('admin.bachat_receipt.create_debit',compact('lastBachat','bachats', 'totalInterest', 'wallet', 'totalInterestForLastMonth','currentMonthTotalInterest'));
    }

    public function storeDebitReceipt(BachatDebitReceiptFormRequest $request)
    {
        $validatedData = $request->validated();

        // $auto_generated_number = $this->generateRandomNumber('0');
        // $validatedData['receipt_no'] = $auto_generated_number;



        $bachatDebitReceipt = new BachatDebitReceipt();
        $bachatDebitReceipt->user_id = $validatedData['user_id'];

        $debitInterest = $validatedData['debit_interest'];
        $deposit = $validatedData['deposit'];
        $debitBalance = $validatedData['debit_balance'];
        $user_id = $validatedData['user_id'];

        $wallet = Wallet::where('user_id', $user_id)->first();
        if ($wallet) {
            if ($debitBalance > $wallet->balance) {
                return redirect()->back()->withErrors('You do not have enough balance to withdraw.');
            }

            $wallet->balance -= $debitBalance;
            $wallet->balance += $deposit;
            $wallet->save();
        }


        // Check if 'debit_interest' is present in the validated data and greater than 0
        if (isset($validatedData['debit_interest']) && $validatedData['debit_interest'] >= 0) {

            // DailyInterest::where('user_id', $user_id)->delete();

            $totalInterest = TotalInterest::where('user_id', $user_id)->get()->first();

            if ($totalInterest) {
                // Debit the 'debit_interest' from the total interest
                // $remainingInterest = $totalInterest->total_interest - $validatedData['debit_interest'];
                $remainingInterest = $totalInterest->total_interest - $validatedData['total_interest'];

                // Check if the remaining interest is greater than or equal to 0
                if ($remainingInterest >= 0) {
                    // Add the remaining interest directly to the wallet balance
                    $wallet->balance += $request->bachelu_vyaj;
                    $totalInterest->total_interest =  $remainingInterest;
                    $totalInterest->save();

                } else {
                    return redirect()->back()->withErrors('You do not have that much interest to withdraw.');
                }
                $wallet->save();
            }
        }
        $lastBachat = BachatDebitReceipt::
        orderBy('id', 'asc')
        ->get();

        $bachatDebitReceipt = new BachatDebitReceipt();
        $bachatDebitReceipt->user_id = $validatedData['user_id'];
        $bachatDebitReceipt->receipt_no = '0'.$lastBachat->last()->receipt_no + 1;
        $bachatDebitReceipt->member_date = $validatedData['member_date'];
        $bachatDebitReceipt->deposit = $validatedData['deposit'];
        $bachatDebitReceipt->total_amount_words = $validatedData['total_amount_words'];
        $bachatDebitReceipt->debit_balance = $validatedData['debit_balance'];
        $bachatDebitReceipt->debit_total_amount_words = $validatedData['debit_total_amount_words'];
        $bachatDebitReceipt->old_interest = $validatedData['old_interest'];
        $bachatDebitReceipt->last_month_interest = $validatedData['last_month_interest'];
        $bachatDebitReceipt->total_interest = $validatedData['total_interest'];
        $bachatDebitReceipt->debit_interest = $validatedData['debit_interest'];
        $bachatDebitReceipt->last_cash_deposit = $validatedData['last_cash_deposit'];
        $bachatDebitReceipt->cash_income = $validatedData['cash_income'];
        $bachatDebitReceipt->interest_on_withdrawn_deposits = $validatedData['interest_on_withdrawn_deposits'];
        $bachatDebitReceipt->amount_of_interest_withdrawn = $validatedData['amount_of_interest_withdrawn'];
        $bachatDebitReceipt->cash_500 = $validatedData['cash_500'];
        $bachatDebitReceipt->cash_200 = $validatedData['cash_200'];
        $bachatDebitReceipt->cash_100 = $validatedData['cash_100'];
        $bachatDebitReceipt->cash_50 = $validatedData['cash_50'];
        $bachatDebitReceipt->cash_20 = $validatedData['cash_20'];
        $bachatDebitReceipt->cash_10 = $validatedData['cash_10'];
        $bachatDebitReceipt->cash_5 = $validatedData['cash_5'];
        $bachatDebitReceipt->cash_1 = $validatedData['cash_1'];
        $bachatDebitReceipt->note = $validatedData['note'];
        $bachatDebitReceipt->login_id = Auth::id();

        $bachatDebitReceipt->save();

        $startDate = date('Y-m-01');
        $endDate = date('Y-m-d');

        $dailyInterest = DailyInterest::where('user_id', $user_id)->get();


        foreach($dailyInterest as $daily){
            $statement = Statement::create([
                'date'=>$daily->date,
                'user_id'=>$daily->user_id,
                'daily_interest'=>$daily->daily_interest,
                'updated_at'=>$daily->updated_at,
                'created_at'=>$daily->created_at,
            ]);
        }
        DailyInterest::where('user_id', $user_id)->delete();

        return redirect('admin/debit-receipt/' . $bachatDebitReceipt->id . '/show')
            ->with('message', 'Bachat Debit Receipt added successfully');

    }

    // public function generateRandomNumber($prefix = '0')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = BachatDebitReceipt::where('receipt_no', 'like', $prefix . '%')
    //                         ->orderBy('receipt_no', 'desc')
    //                         ->first();

    //     // If there are no entries yet with the desired format, start with 1
    //     if (!$lastBachat) {
    //         return $prefix . '01'; // Assuming you want the first number to be 01
    //     }

    //     // Extract the numeric part from the last member_no
    //     $lastNumber = intval(substr($lastBachat->receipt_no, strlen($prefix)));

    //     // Increment the last number by 1 and format it with leading zeros
    //     $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);

    //     return $prefix . $newNumber;
    // }

    public function generateRandomNumber($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastBachat = BachatDebitReceipt::
                            orderBy('receipt_no', 'desc')
                            ->get();

        // If there are no entries yet with the desired format, start with 1
        // if (!$lastBachat) {
        //     return $prefix . '01'; // Assuming you want the first number to be 01
        // }

        // Extract the numeric part from the last member_no
        // $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

        // Increment the last number by 1 and format it with leading zeros
        // $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        $newNumber =  $lastBachat->first()->receipt_no + 1 ;

        return   $newNumber;
    }


    public function statement($id)
    {
        $statements = Statement::where('user_id', $id)->get();
        $bachat = Bachat::findOrFail($id);

        return view('admin.bachat_receipt.statement', compact('statements','bachat'));
    }

    public function create_debit125($id)
    {
        $bachatDebitReceipt = BachatDebitReceipt::where('user_id','=',$id)->get();

        if (count($bachatDebitReceipt) > 0) {

        $bachat = Bachat::findorFail($id);
        $wallet = Wallet::where('user_id',$id)->first();
        $bachats = Bachat::findOrFail($id);
             return view('admin.bachat_receipt.convert', compact('bachat','wallet','bachats'));
        } else {
            $bachats = Bachat::findOrFail($id);

            $totalInterest = TotalInterest::where('user_id','=',$id)->get();
            $wallet = Wallet::where('user_id','=',$id)->get();


            $month_ini = date("m", mktime(0, 0, 0, date("m", strtotime("-1 month")), 1, date("Y", strtotime("-1 month"))));
            $month_end = date("Y-m-d", mktime(0, 0, 0, date("m", strtotime("-1 month")), date("t", strtotime("-1 month")), date("Y", strtotime("-1 month"))));

            $totalInterestForLastMonth= DailyInterest::where('user_id',"=", $id)
                ->whereRaw('MONTH(date) = ?', [$month_ini])->get();

            $current_month = date('m');
            $start_date = date('Y-m-01');
            $end_date = date('Y-m-d');

            $currentMonthTotalInterest= DailyInterest::where('user_id',"=", $id)
            ->whereRaw('MONTH(date) = ?',[$current_month])->get();



            return view('admin.bachat_receipt.create_debit125', compact('bachats', 'totalInterest', 'wallet', 'totalInterestForLastMonth','currentMonthTotalInterest','bachatDebitReceipt'));
        }


    }

    public function view_receipt($id)
    {
        $BachatReceipt = BachatReceipt::findOrFail($id);

        $bachat = Bachat::findorFail($BachatReceipt->user_id);
        $wallet = Wallet::where('user_id',$BachatReceipt->user_id)->get();

        return view('admin.bachat_receipt.view_receipt', compact('BachatReceipt','bachat'),compact('wallet'));
    }

    public function joining_fees($id)
    {
        $bachat = Bachat::findorFail($id);
        $user = User::all();

       return view('admin.bachat_receipt.joining_fees', compact( 'bachat','user'));
    }

    public function viewAllDebitReceipt($id)
    {
        $bachatDebitReceipt =  BachatDebitReceipt::where('user_id','=',$id)->get();
        $bachat = Bachat::findorFail($id);
        $wallet = Wallet::where('user_id',$id)->first();
        $user = User::all();


        return view('admin.bachat_receipt.viewAllDebitReceipt', compact('bachatDebitReceipt','bachat','wallet','user'));
    }
    public function showDebitReceipt($id)
    {

        $bachatDebitReceipt =  BachatDebitReceipt::findOrFail($id);

        $bachats = Bachat::findOrFail($bachatDebitReceipt->user_id);
        $user = User::all();

        return view('admin.bachat_receipt.showDebitReceipt', compact('bachats','bachatDebitReceipt','user'));
    }

    public function convert($id){
        $bachat = Bachat::findorFail($id);
        $wallet = Wallet::where('user_id',$id)->first();
        $bachats = Bachat::findOrFail($id);


        return view('admin.bachat_receipt.convert', compact('bachat','wallet','bachats'));

    }

    public function convertInterest($user_id) {

        $dailyInterest = DailyInterest::where('user_id', $user_id)->get();
        $wallet = Wallet::where('user_id',$user_id)->get();

        $per = ($wallet->first()->balance * 1)/100;
        $totalInterest = 0;
        foreach($dailyInterest as $dailyInterests){

            // $date = 0;
            $date = $dailyInterests->date;
            // $a = $date->modify('last day of this month');

            $carbon = Carbon::createFromFormat('Y-m-d', $date);
            $a = $carbon->modify('last day of this month');


            $b = round($per, 2)/ round($a->format('d'), 2);

            $dailyInterests->daily_interest =  $b;

            $dailyInterests->update();

            $totalInterest =  round($dailyInterests->daily_interest, 2) + round($totalInterest , 2);
            $Interest = TotalInterest::where('user_id', $user_id)->get();
            $Interest->first()->total_interest =   $totalInterest;
            $Interest->first()->update();

            $bachat = Bachat::findOrFail($dailyInterest->first()->user_id);
            $percentage = $bachat->percentage;

            if($percentage == 125) {
                $bachat->percentage = 1;
                $bachat->update();
            }

            }
        // dd($a);
        return redirect('admin/bachat-receipt/' .$user_id . '/create_debit');
    }


    public function deactive($id)
    {
        $bachats = Bachat::findorFail($id);
        $user = User::all();
        $wallet = Wallet::where('user_id',$id)->first();
        $totalInterest = TotalInterest::where('user_id','=',$id)->first();


        return view('admin.bachat_receipt.deactive', compact('bachats','user','wallet','totalInterest'));
    }

    public function store_deactive(masikDeactiveRequest $request)
    {
        $validatedData = $request->validated();

        $masikdeactive = new masikDeactive();
        $masikdeactive->user_id = $validatedData['user_id'];
        $masikdeactive->deactivate_date = $validatedData['deactivate_date'];
        $masikdeactive->refund_amount = $validatedData['refund_amount'];
        $masikdeactive->login_id = Auth::id();
        $masikdeactive->save();

        $bachats = Bachat::where('id', $masikdeactive->user_id)->first();

        if ($bachats) {
            $bachats->status = 'inactive';
            $bachats->save();
        }

        // $wallet = Wallet::where('user_id', $masikdeactive->user_id)->first();
        // if ($wallet) {
        //     $wallet->balance = 0;
        //     $wallet->save();
        // }


        // $totalInterest = TotalInterest::where('user_id', $masikdeactive->user_id)->get()->first();
        // if ($totalInterest) {
        //     $totalInterest->total_interest = 0;
        //     $totalInterest->save();
        // }

        return redirect('admin/bachat-receipt/create');
    }

    public function deactive_list()
    {
        $bachats = Bachat::where('status', '=', 'inactive')->get();
        $user = User::all();

        return view('admin.bachat_receipt.deactive_list', compact('bachats', 'user'));
    }


    public function deactived_receipt($id)
    {
        $bachats = Bachat::findOrFail($id);
        $masikdeactive = masikDeactive::where('user_id', $bachats->id)->get();
        $wallet = Wallet::where('user_id', $bachats->id)->first();
        $totalInterest = TotalInterest::where('user_id', $bachats->id)->get()->first();
        $user = User::all();

        return view('admin.bachat_receipt.deactived_receipt', compact('bachats', 'masikdeactive','wallet','totalInterest','user'));

    }
}