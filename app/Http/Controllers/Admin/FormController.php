<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Double;
use App\Models\Refund;
use App\Models\Deposite;
use App\Models\Attachment;
use App\Models\LoanPayment;
use App\Models\LoanReceipt;
use Illuminate\Support\Facades\DB; // Add this at the top of your controller file
use App\Models\LoanInterest;
use Illuminate\Http\Request;
use App\Models\LoanTransaction;
use App\Models\TotalJoiningFee;
use App\Models\FixDepositeWallet;
use App\Models\LoanTotalInterest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RefundRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\DepositeRequest;
use App\Http\Requests\DepositeRequest2;
use App\Http\Requests\DoubleFormRequest;
use App\Http\Requests\LoanPaymentRequest;
use App\Http\Requests\LoanReceiptFormRequest;




class FormController extends Controller
{
    public function index()
    {
        $lastDeposite = Deposite::
        orderBy('id', 'asc')
        ->get();
        $lastDepositeReceiptNo = Deposite::
        orderBy('id', 'asc')
        ->get();

        return view('admin.deposite.index', compact('lastDeposite','lastDepositeReceiptNo'));
    }

    public function create()
    {
        $deposite = Deposite::where('status', '=', 'active')->get();
        $user = User::all();
        return view('admin.deposite.create', compact('deposite', 'user'));
    }

    public function store(DepositeRequest $request)
    {
        $validatedData = $request->validated();

        $lastDeposite = Deposite::
        orderBy('id', 'asc')
        ->get();
        $lastDepositeReceiptNo = Deposite::
        orderBy('id', 'asc')
        ->get();

        $deposite = new Deposite;
        $deposite->member_no  = '000'.(optional($lastDeposite->last())->member_no + 1 ?? '');
        $deposite->receipt_no  = '0'.(optional($lastDepositeReceiptNo->last())->receipt_no + 1 ?? '');
        $deposite->member_date  = $validatedData['member_date'];
        $deposite->maturity_period  = $validatedData['maturity_period'];
        // member_image
        if ($request->hasFile('member_image')) {
            $file = $request->file('member_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/member_image/', $filename);
            $deposite->member_image = $filename;
        }
        // heir_image_1
        if ($request->hasFile('heir_image_1')) {
            $file = $request->file('heir_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_image_1/', $filename);
            $deposite->heir_image_1 = $filename;
        }
        // heir_image_2
        if ($request->hasFile('heir_image_2')) {
            $file = $request->file('heir_image_2');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_image_2/', $filename);
            $deposite->heir_image_2 = $filename;
        }
        $deposite->status = $validatedData['status'];

        $deposite->total_amount  = $validatedData['total_amount'];
        $deposite->words  = $validatedData['words'];
        $deposite->mr  = $validatedData['mr'];
        $deposite->age  = $validatedData['age'];
        $deposite->village  = $validatedData['village'];
        $deposite->address  = $validatedData['address'];
        $deposite->taluk  = $validatedData['taluk'];
        $deposite->member_business  = $validatedData['member_business'];
        $deposite->mobile_no_1  = $validatedData['mobile_no_1'];
        $deposite->mobile_no_2  = $validatedData['mobile_no_2'];
        $deposite->city  = $validatedData['city'];
        $deposite->heir_name_1  = $validatedData['heir_name_1'];
        $deposite->age_1  = $validatedData['age_1'];
        $deposite->relationship_with_member_1  = $validatedData['relationship_with_member_1'];
        $deposite->heir_name_2  = $validatedData['heir_name_2'];
        $deposite->age_2  = $validatedData['age_2'];
        $deposite->relationship_with_member_2  = $validatedData['relationship_with_member_2'];
        $deposite->note  = $validatedData['note'];
        // status
        // $deposite->double_amount = $request->double_amount == true ? '1':'0';
        // $deposite->twice = $request->twice == true ? '1':'0';
        // $deposite->refunded = $request->refunded == true ? '1':'0';

        // vyaj_amount
        $deposite->vyaj_amount  = $validatedData['vyaj_amount'];
        $deposite->vyaj_amount_words  = $validatedData['vyaj_amount_words'];


        //radio buttons
        $deposite->double_amount  = $validatedData['double_amount'];
        //notes
        $deposite->cash_500  = $validatedData['cash_500'];
        $deposite->cash_200  = $validatedData['cash_200'];
        $deposite->cash_100  = $validatedData['cash_100'];
        $deposite->cash_50  = $validatedData['cash_50'];
        $deposite->cash_20  = $validatedData['cash_20'];
        $deposite->cash_1  = $validatedData['cash_1'];

        // member_sign_image
        if ($request->hasFile('member_sign_image')) {
            $file = $request->file('member_sign_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/member_sign_image/', $filename);
            $deposite->member_sign_image = $filename;
        }
        // heir_sign_image_1
        if ($request->hasFile('heir_sign_image_1')) {
            $file = $request->file('heir_sign_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_sign_image_1/', $filename);
            $deposite->heir_sign_image_1 = $filename;
        }
        // heir_sign_image_2
        if ($request->hasFile('heir_sign_image_2')) {
            $file = $request->file('heir_sign_image_2');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_sign_image_2/', $filename);
            $deposite->heir_sign_image_2 = $filename;
        }
        // sign_on_behalf_of_jan_jagaruti_image
        if ($request->hasFile('sign_on_behalf_of_jan_jagaruti_image')) {
            $file = $request->file('sign_on_behalf_of_jan_jagaruti_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/sign_on_behalf_of_jan_jagaruti_image/', $filename);
            $deposite->sign_on_behalf_of_jan_jagaruti_image = $filename;
        }
        $deposite->login_id = Auth::id();
        $deposite->save();

        $fixdepositewallets = new FixDepositeWallet([
            'user_id' => $deposite->id,
            'balance' => $validatedData['total_amount']
        ]);
        $fixdepositewallets->save();



        $loanTotalInterest = new LoanTotalInterest();
        $loanTotalInterest->user_id = $deposite->id;
        $loanTotalInterest->total_interest = 0;
        $loanTotalInterest->save();


        $totalJoiningFee = TotalJoiningFee::first();
        if (!$totalJoiningFee) {
            $totalJoiningFee = new TotalJoiningFee();
        }
        $totalJoiningFee->total_joining_fee += 200;
        $totalJoiningFee->save();


        return redirect('admin/deposite/'.$deposite->id.'/view')->with('message', 'deposite Added Successfully');
    }

    public function destroy($id)
    {
        $deposite = Deposite::findOrFail($id);

        if ($deposite->member_image) {
            Storage::delete('public/uploads/deposite/member_image/' . $deposite->member_image);
        }
        if ($deposite->heir_image_1) {
            Storage::delete('public/uploads/deposite/heir_image_1/' . $deposite->heir_image_1);
        }
        if ($deposite->heir_image_2) {
            Storage::delete('public/uploads/deposite/heir_image_2/' . $deposite->heir_image_2);
        }
        if ($deposite->member_sign_image) {
            Storage::delete('public/uploads/deposite/member_sign_image/' . $deposite->member_sign_image);
        }
        if ($deposite->heir_sign_image_1) {
            Storage::delete('public/uploads/deposite/heir_sign_image_1/' . $deposite->heir_sign_image_1);
        }
        if ($deposite->heir_sign_image_2) {
            Storage::delete('public/uploads/deposite/heir_sign_image_2/' . $deposite->heir_sign_image_2);
        }
        if ($deposite->sign_on_behalf_of_jan_jagaruti_image) {
            Storage::delete('public/uploads/deposite/sign_on_behalf_of_jan_jagaruti_image/' . $deposite->sign_on_behalf_of_jan_jagaruti_image);
        }

        $deposite->delete();

        return redirect('admin/deposite/create')->with('message', 'ફિક્સ ડિપોઝિટ ફોર્મ સફળતાપૂર્વક કાઢી નાખ્યું');
    }


    // public function generateRandomNumber($prefix = '000')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = Deposite::where('member_no', 'like', $prefix . '%')
    //         ->orderBy('member_no', 'desc')
    //         ->first();

    //     // If there are no entries yet with the desired format, start with 1
    //     if (!$lastBachat) {
    //         return $prefix . '01'; // Assuming you want the first number to be 01
    //     }

    //     // Extract the numeric part from the last member_no
    //     $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

    //     // Increment the last number by 1 and format it with leading zeros
    //     $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);

    //     return $prefix . $newNumber;
    // }

    // public function generateRandomNumber01($prefix = '0')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = Deposite::where('receipt_no', 'like', $prefix . '%')
    //         ->orderBy('receipt_no', 'desc')
    //         ->first();

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
        $lastDeposite = Deposite::
                            orderBy('member_no', 'desc')
                            ->get();

        // If there are no entries yet with the desired format, start with 1
        // if (!$lastBachat) {
        //     return $prefix . '01'; // Assuming you want the first number to be 01
        // }

        // Extract the numeric part from the last member_no
        // $lastNumber = intval(substr($lastBachat->member_no, strlen($prefix)));

        // Increment the last number by 1 and format it with leading zeros
        // $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        $newNumber =  $lastDeposite->first()->member_no + 1 ;

        return   $newNumber;
    }

    public function generateRandomNumber1($prefix = '0')
    {
        // Find the last saved entry with the desired format
        $lastDepositeReceiptNo = Deposite::
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
        $newNumber =  $lastDepositeReceiptNo->first()->receipt_no + 1;

        return   $newNumber;
    }


    public function edit($deposite_id)
    {
        $deposite = Deposite::findorfail($deposite_id);

        return view('admin.deposite.edit', compact('deposite'));
    }

    public function update(DepositeRequest2 $request, $deposite_id)
    {
        $validatedData = $request->validated();

        $deposite = Deposite::findorfail($deposite_id);

        // $deposite->member_no  = $validatedData['member_no'];

        // $auto_generated_number = $this->generateRandomNumber01('0');
        // $validatedData['receipt_no'] = $auto_generated_number;

        $deposite->member_date  = $validatedData['member_date'];

        $deposite->maturity_period  = $validatedData['maturity_period'];


        // member_image
        if ($request->hasFile('member_image')) {

            $path = 'public/uploads/deposite/member_image/' . $deposite->member_image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('member_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/member_image/', $filename);
            $deposite->member_image = $filename;
        }

        // heir_image_1
        if ($request->hasFile('heir_image_1')) {

            $path = 'public/uploads/deposite/heir_image_1/' . $deposite->heir_image_1;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_image_1/', $filename);
            $deposite->heir_image_1 = $filename;
        }
        // heir_image_2
        if ($request->hasFile('heir_image_2')) {

            $path = 'public/uploads/deposite/heir_image_2/' . $deposite->heir_image_2;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_image_2');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_image_2/', $filename);
            $deposite->heir_image_2 = $filename;
        }
        $deposite->status = $validatedData['status'];

        $deposite->total_amount  = $validatedData['total_amount'];

        $deposite->words  = $validatedData['words'];

        $deposite->mr  = $validatedData['mr'];

        $deposite->age  = $validatedData['age'];

        $deposite->village  = $validatedData['village'];

        $deposite->address  = $validatedData['address'];

        $deposite->taluk  = $validatedData['taluk'];
        $deposite->member_business  = $validatedData['member_business'];

        $deposite->mobile_no_1  = $validatedData['mobile_no_1'];
        $deposite->mobile_no_2  = $validatedData['mobile_no_2'];

        $deposite->city  = $validatedData['city'];

        $deposite->heir_name_1  = $validatedData['heir_name_1'];
        $deposite->age_1  = $validatedData['age_1'];
        $deposite->relationship_with_member_1  = $validatedData['relationship_with_member_1'];

        $deposite->heir_name_2  = $validatedData['heir_name_2'];
        $deposite->age_2  = $validatedData['age_2'];
        $deposite->relationship_with_member_2  = $validatedData['relationship_with_member_2'];
        $deposite->note  = $validatedData['note'];



        // vyaj_amount
        $deposite->vyaj_amount  = $validatedData['vyaj_amount'];
        $deposite->vyaj_amount_words  = $validatedData['vyaj_amount_words'];

        // radio buttons
        $deposite->double_amount  = $validatedData['double_amount'];

        //notes
        $deposite->cash_500  = $validatedData['cash_500'];
        $deposite->cash_200  = $validatedData['cash_200'];
        $deposite->cash_100  = $validatedData['cash_100'];
        $deposite->cash_50  = $validatedData['cash_50'];
        $deposite->cash_20  = $validatedData['cash_20'];
        $deposite->cash_1  = $validatedData['cash_1'];


        // member_sign_image
        if ($request->hasFile('member_sign_image')) {
            $file = $request->file('member_sign_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/member_sign_image/', $filename);
            $deposite->member_sign_image = $filename;
        }

        // heir_sign_image_1
        if ($request->hasFile('heir_sign_image_1')) {

            $path = 'public/uploads/deposite/heir_sign_image_1/' . $deposite->heir_sign_image_1;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_sign_image_1');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_sign_image_1/', $filename);
            $deposite->heir_sign_image_1 = $filename;
        }

        // heir_sign_image_2
        if ($request->hasFile('heir_sign_image_2')) {

            $path = 'public/uploads/deposite/heir_sign_image_2/' . $deposite->heir_sign_image_2;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('heir_sign_image_2');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/heir_sign_image_2/', $filename);
            $deposite->heir_sign_image_2 = $filename;
        }

        // sign_on_behalf_of_jan_jagaruti_image
        if ($request->hasFile('sign_on_behalf_of_jan_jagaruti_image')) {

            $path = 'public/uploads/deposite/sign_on_behalf_of_jan_jagaruti_image/' . $deposite->sign_on_behalf_of_jan_jagaruti_image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('sign_on_behalf_of_jan_jagaruti_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/deposite/sign_on_behalf_of_jan_jagaruti_image/', $filename);
            $deposite->sign_on_behalf_of_jan_jagaruti_image = $filename;
        }
        $deposite->update();

        return redirect('admin/deposite/'.$deposite->id.'/view')->with('message', 'deposite Updated Successfully');
    }
    public function view($id)
    {
        $deposite = deposite::findorfail($id);
        $user = User::all();

        return view('admin.deposite.view', compact('deposite','user'));
    }


    public function receipt()
    {
        $deposite = Deposite::where('status', '=', 'active')->get();

        // foreach ($deposite as $deposites) {
        //     $maturityDate = Carbon::parse($deposites->maturity_period);
        //     $today = Carbon::now();

        //     if ($today->greaterThanOrEqualTo($maturityDate)) {
        //         $deposites->status = 'complete';
        //         $deposites->save();
        //     }
        // }


        $loanTransactions = LoanTransaction::all();
        $refunds = Refund::all();
        $user = User::all();

        return view('admin.deposite.fix_deposite_receipt', compact('deposite', 'loanTransactions', 'refunds', 'user'));
    }

    public function create_double_form($id)
    {

        $deposite = Deposite::findorfail($id);

        return view('admin.deposite.create_double_form', compact('deposite'));
    }
    public function processDouble(DoubleFormRequest $request)
    {
        $validatedData = $request->validated();
        $double = new Double;
        $double->user_id  = $validatedData['user_id'];
        $double->date  = $validatedData['date'];
        $double->member_date  = $validatedData['member_date'];
        $double->maturity_period  = $validatedData['maturity_period'];
        $double->vyaj_amount  = $validatedData['vyaj_amount'];
        $double->login_id = Auth::id();
        $double->save();

        $deposite = Deposite::findOrFail($validatedData['user_id']);
        $deposite->status = 'complete';
        $deposite->save();


        return redirect('admin/deposite/' . $double->user_id . '/view_completed');
    }
    public function view_completed($id)
    {
        $deposite = deposite::findorfail($id);
        return view('admin.deposite.view_completed', compact('deposite'));
    }

    public function completed_list()
    {
        $deposite = Deposite::where('status', '=', 'complete')->get();
        $user = User::all();

        return view('admin.deposite.completed_list', compact('deposite', 'user'));
    }
    public function deactivate_list_deposite()
    {
        $deposite = Deposite::where('status', '=', 'inactive')->get();
        $user = User::all();

        return view('admin.deposite.deactivate_list_deposite', compact('deposite', 'user'));
    }


    public function view_receipt($id)
    {
        $deposite = deposite::findorfail($id);
        $user = User::all();

        return view('admin.deposite.view_receipt', compact('deposite','user'));
    }

    public function loan_create($id)
    {
        $deposite = deposite::findorfail($id);

        $lastLoanReceipt = LoanReceipt::
        orderBy('id', 'asc')
        ->get();

        return view('admin.deposite.loan_create', compact('deposite','lastLoanReceipt'));
    }

    public  function store_loan_receipt(LoanReceiptFormRequest $request)
    {
        $validatedData = $request->validated();

        $lastLoanReceipt = LoanReceipt::
        orderBy('id', 'asc')
        ->get();

        $user_id = $validatedData['user_id'];

        $fixdepositewallets = FixDepositeWallet::where('user_id', $user_id)->first();

        if (!$fixdepositewallets) {
            // Deposite record is not found
            return redirect()->back()->withErrors('Wallet record not found.');
        }

        $maxLoanAmount = $fixdepositewallets->balance / 2;

        // Ensure the requested loan amount is within the allowed range
        $requestedLoanAmount = $validatedData['total_amount'];

        if ($requestedLoanAmount < 1 || $requestedLoanAmount > $maxLoanAmount) {
            return redirect()->back()->withErrors('Loan amount must be between 1 and ' . $maxLoanAmount);
        }
        $fixdepositewallets->balance -= $requestedLoanAmount;
        $fixdepositewallets->save();

        $loanReceipt = new LoanReceipt();
        $loanReceipt->user_id = $validatedData['user_id'];
        $loanReceipt->yojanano_prakar = $validatedData['yojanano_prakar'];
        $loanReceipt->receipt_no = '0' . (optional($lastLoanReceipt->last())->receipt_no + 1 ?? '0');
        $loanReceipt->date = $validatedData['date'];
        $loanReceipt->total_amount = $validatedData['total_amount'];
        $loanReceipt->total_amount_words = $validatedData['total_amount_words'];
        $loanReceipt->jaminanu_nam = $validatedData['jaminanu_nam'];
        $loanReceipt->mobile_no_3 = $validatedData['mobile_no_3'];
        $loanReceipt->cash_500 = $validatedData['cash_500'];
        $loanReceipt->cash_200 = $validatedData['cash_200'];
        $loanReceipt->cash_100 = $validatedData['cash_100'];
        $loanReceipt->cash_50 = $validatedData['cash_50'];
        $loanReceipt->cash_20 = $validatedData['cash_20'];
        $loanReceipt->cash_1 = $validatedData['cash_1'];
        $loanReceipt->login_id = Auth::id();
        $loanReceipt->save();

        $loanTransaction = new LoanTransaction();
        $loanTransaction->user_id = $validatedData['user_id'];
        $loanTransaction->amount = $requestedLoanAmount;
        $loanTransaction->save();

        return redirect('admin/deposite/' . $loanReceipt->id . '/view_loan_receipt')->with('message', 'Loan Added Successfully');
    }


    // public function generateRandomNumberLoanReceipt($prefix = '0')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = LoanReceipt::where('receipt_no', 'like', $prefix . '%')
    //         ->orderBy('receipt_no', 'desc')
    //         ->first();

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

    public function generateRandomNumberLoanReceipt($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastLoanReceipt = LoanReceipt::
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
        $newNumber =  $lastLoanReceipt->first()->receipt_no + 1;
        return   $newNumber;
    }

    public function view_loan_receipt($id)
    {
        $loanReceipts = LoanReceipt::findOrFail($id);

        $deposite = Deposite::findOrFail($loanReceipts->user_id);

        return view('admin.deposite.view_loan_receipt', compact('deposite', 'loanReceipts'));
    }

    public function loan_receipt($id)
    {
        $deposite = Deposite::findOrFail($id);
        $loanReceipt = LoanReceipt::where('user_id', '=', $id)->get();
        $user = User::all();
        return view('admin.deposite.loan_receipt', compact('deposite', 'loanReceipt', 'user'));
    }

    public function create_loan_deposite($id)
    {

        $deposite = deposite::findorfail($id);

        $loanTransactions = LoanTransaction::where('user_id', '=', $id)->get();
        $loanTotalInterest = LoanTotalInterest::where('user_id', '=', $id)->get();

        $month_ini = date("m", mktime(0, 0, 0, date("m", strtotime("-1 month")), 1, date("Y", strtotime("-1 month"))));
        $month_end = date("Y-m-d", mktime(0, 0, 0, date("m", strtotime("-1 month")), date("t", strtotime("-1 month")), date("Y", strtotime("-1 month"))));


        $totalInterestForLastMonth = LoanInterest::where('user_id', "=", $id)
            ->whereRaw('MONTH(date) = ?', [$month_ini])->get();

        $lastLoanPayment = LoanPayment::
        orderBy('id', 'asc')
        ->get();


        return view('admin.deposite.create_loan_deposite', compact('lastLoanPayment','deposite', 'loanTransactions', 'loanTotalInterest', 'totalInterestForLastMonth'));
    }

    public function store_loan_deposite(LoanPaymentRequest $request)
    {

        $validatedData = $request->validated();

        $lastLoanPayment = LoanPayment::
        orderBy('id', 'asc')
        ->get();


        $loanPayment  = new LoanPayment();
        $loanPayment->user_id = $validatedData['user_id'];
        $loanPayment->receipt_no = '0' . (optional($lastLoanPayment->last())->receipt_no + 1 ?? '');
        $loanPayment->date = $validatedData['date'];
        $loanPayment->amount = $validatedData['amount']; //રકમ
        $loanPayment->amount_words = $validatedData['amount_words']; //અંકે રૂપિયા
        $loanPayment->old_interest = $validatedData['old_interest']; // આગલી રકમનું કુલ વ્યાજ
        $loanPayment->current_interest = $validatedData['current_interest']; //ચાલુ વ્યાજ
        $loanPayment->total_interest = $validatedData['total_interest']; // = કુલ વ્યાજ
        $loanPayment->debit_interest = $validatedData['debit_interest']; // ઉપાડેલી વ્યાજની રમક
        $loanPayment->due_amount = $validatedData['due_amount']; // આગલી બાકી રકમ
        $loanPayment->remaining_amount = $validatedData['remaining_amount']; //કુલ બાકી જમા રકમ
        $loanPayment->cash_500 = $validatedData['cash_500'];
        $loanPayment->cash_200 = $validatedData['cash_200'];
        $loanPayment->cash_100 = $validatedData['cash_100'];
        $loanPayment->cash_50 = $validatedData['cash_50'];
        $loanPayment->cash_20 = $validatedData['cash_20'];
        $loanPayment->cash_10 = $validatedData['cash_10'];
        $loanPayment->cash_5 = $validatedData['cash_5'];
        $loanPayment->cash_1 = $validatedData['cash_1'];
        $loanPayment->login_id = Auth::id();


        $user_id = $validatedData['user_id'];
        $loanTransaction = LoanTransaction::where('user_id', '=', $user_id)->get();
        $loanTransaction->first()->amount -= $validatedData['amount'];
        $loanTransaction->first()->amount -= $validatedData['debit_interest'];

        if ($loanTransaction->first()->amount < 1) {
            $loanTransaction->first()->amount = 0;
        }

        $loanTransaction->first()->save();

        $loanTotalInterest = LoanTotalInterest::where('user_id', '=', $user_id)->get();
        $loanTotalInterest->first()->total_interest -= $validatedData['debit_interest'];
        if ($loanTransaction->first()->amount < 1) {
            $loanTransaction->first()->amount = 0;
            $loanTotalInterest = LoanTotalInterest::where('user_id', '=', $user_id)->get();
            $loanTotalInterest->first()->total_interest = 0;
            $loanTotalInterest->first()->save();
        }

        $loanTotalInterest->first()->save();


        $loanInterests = LoanInterest::where('user_id', $user_id)
            ->whereIn('status', ['unstelled', 'unpaid']) // Select both 'unstelled' and 'unpaid' entries
            ->get();

        // Calculate the total unpaid interest across all 'unstelled' and 'unpaid' entries
        $totalUnpaidInterest = $loanInterests->sum('interest_amount');

        // Get the debit_interest from the input data
        $debitInterest = $validatedData['debit_interest'];

        // Calculate the remaining unpaid interest after deducting debit_interest
        $remainingUnpaidInterest = $totalUnpaidInterest - $debitInterest;

        // Set the status of all existing 'unstelled' and 'unpaid' entries to 'stelled'
        foreach ($loanInterests as $loanInterest) {
            $loanInterest->status = 'stelled';
            $loanInterest->save();
        }

        // If there's remaining unpaid interest, create a new entry
        if ($remainingUnpaidInterest > 0) {
            $newUnpaidInterest = new LoanInterest();
            $newUnpaidInterest->user_id = $user_id;
            $newUnpaidInterest->interest_amount = $remainingUnpaidInterest;
            $newUnpaidInterest->date = now()->toDateString();
            $newUnpaidInterest->status = 'unpaid';
            $newUnpaidInterest->save();
        }

        $loanPayment->save();

        return redirect('admin/deposite/' . $loanPayment->id . '/view_loan_deposite')->with('message', 'Loan payment receipt created successfully');
    }

    // public function generateRandomNumberLoanPayment($prefix = '0')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = LoanPayment::where('receipt_no', 'like', $prefix . '%')
    //         ->orderBy('receipt_no', 'desc')
    //         ->first();

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

    public function generateRandomNumberLoanPayment($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastLoanPayment = LoanPayment::
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
        $newNumber =  $lastLoanPayment->first()->receipt_no + 1 ;

        return   $newNumber;
    }

    public function loan_deposite_receipt($id)
    {
        $deposite = Deposite::findOrFail($id);
        $loanPayment = LoanPayment::where('user_id', '=', $id)->get();
        $user = User::all();
        return view('admin.deposite.loan_deposite_receipt', compact('deposite', 'loanPayment', 'user'));
    }

    public function view_loan_deposite($id)
    {

        $loanPayment = LoanPayment::findOrFail($id);
        $deposite = Deposite::findOrFail($loanPayment->user_id);

        return view('admin.deposite.view_loan_deposite', compact('deposite', 'loanPayment'));
    }

    public function refund($id)
    {
        $deposite = Deposite::findOrFail($id);

        // Check if the user has a loan
        $hasLoan = LoanTransaction::where('user_id', $deposite->id)->exists();

        // Calculate the time difference in months
        $monthsDiff = Carbon::now()->diffInMonths($deposite->member_date);

        if ($hasLoan) {
            // Get the loan amount from the LoanTransaction table
            $loanAmount = LoanTransaction::where('user_id', $deposite->id)->value('amount');

            if ($monthsDiff >= 6) {
                // Calculate refund plus 1% interest per month
                $refundAmount = ($deposite->total_amount - $loanAmount) * (1 + ($monthsDiff * 0.01));
            } else {
                // Calculate refund minus loan amount
                $refundAmount = $deposite->total_amount - $loanAmount;
            }
        } else {
            if ($monthsDiff >= 6) {
                // Calculate refund plus 1% interest per month
                $refundAmount = $deposite->total_amount * (1 + ($monthsDiff * 0.01));
            } else {
                // Full refund
                $refundAmount = $deposite->total_amount;
            }
        }
        return view('admin.deposite.refund', compact('deposite', 'refundAmount'));
    }

    public function processRefund(RefundRequest $request)
    {
        $validatedData = $request->validated();

        // Create a refund record
        $refund = new Refund();
        $refund->user_id = $validatedData['user_id'];
        $refund->date = $validatedData['date'];
        $refund->refund_amount = $validatedData['refund_amount'];
        $refund->jaamin_nam = $validatedData['jaamin_nam'];
        $refund->status = $validatedData['status'];
        $refund->login_id = Auth::id();
        $refund->save();

        $deposite = Deposite::where('id', $refund->user_id)->first();

        if ($deposite) {
            $deposite->status = 'inactive';
            $deposite->save();
        }

        return redirect('admin/deposite/' . $refund->user_id . '/view_refund_loan_receipt');
    }

    public function view_refund_loan_receipt($id)
    {
        $deposite = Deposite::findOrFail($id);
        $refund = Refund::where('user_id', $deposite->id)->get();
        return view('admin.deposite.view_refund_loan_receipt', compact('deposite', 'refund'));
    }

    public function loan_interest_statement($id)
    {
        $loanInterests = LoanInterest::where('user_id', $id)->get();
        $deposite = Deposite::findOrFail($id);

        return view('admin.deposite.loan_interest_statement', compact('loanInterests', 'deposite'));
    }


    public function attachment($id)
    {
        // $attachments = Attachment::findorfail(2);
        // return view('admin.deposite.attachment', compact('attachments'));

        $attachments = Attachment::Where('user_id','=',$id)->get();
        return view('admin.deposite.attachment',compact('attachments','id'));
    }



    public function storeAttachment(Request $request)
    {

        $deposites = Deposite::all();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id' => 'required',
        ]);

        $attachments = new Attachment;
        $attachments->name = $validatedData['name'];
        // $attachments->user_id  = $validatedData['user_id'];
        $attachments->user_id = $validatedData['id'];

        if ($attachments instanceof Attachment) {

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = $validatedData['id'] . '_' . time() . '.' . $ext;

                $file->move('public/uploads/attachment/image/', $filename);
                $attachments->image = $filename;
            }

            $attachments->save();

            return redirect('admin/deposite/'.$attachments->user_id.'/attachment')->with('message', 'Attachment Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Deposite not found');
        }
    }

    public function delete($id)
    {
        $attachment = Attachment::findorfail($id);
        $attachment->delete();

        return redirect('admin/deposite/'.$id.'/attachment')->with('message', 'Attachment Deleted Successfully');
    }


}