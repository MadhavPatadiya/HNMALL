<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EMIloanFormRequest2;
use App\Http\Requests\EMIloanFormRequest;
use App\Http\Requests\EMIreceiptFormRequest;
use App\Models\EMILoan;
use App\Models\EMIreceipt;
use App\Models\EMIWallet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoanEMIController extends Controller
{
    public function index()
    {
        // $prefix = '000';
        // $auto_number = $this->generateRandomNumber($prefix);
        $lastEMILoan = EMILoan::
            orderBy('id', 'asc')
            ->get();

        return view('admin.emi.index', compact('lastEMILoan'));
    }

    public function create()
    {
        $EMILoan = EMILoan::all();
        $user = User::all();
        return view('admin.emi.create', compact('EMILoan', 'user'));
    }

    public function store(EMIloanFormRequest $request)
    {
        $validatedData = $request->validated();
        $lastEMILoan = EMILoan::
            orderBy('id', 'asc')
            ->get();
        $EMILoan = new EMILoan;

        $EMILoan->member_no = '000' . $lastEMILoan->last()->member_no + 1;
        $EMILoan->member_date = $validatedData['member_date'];
        $EMILoan->status = $validatedData['status'];

        //member_image
        if ($request->hasFile('member_image')) {
            $file = $request->file('member_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/member_image/', $filename);
            $EMILoan->member_image = $filename;
        }
        // heir_image
        if ($request->hasFile('heir_image')) {
            $file = $request->file('heir_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/heir_image/', $filename);
            $EMILoan->heir_image = $filename;
        }

        $EMILoan->mr = $validatedData['mr'];
        $EMILoan->age = $validatedData['age'];
        $EMILoan->village = $validatedData['village'];
        $EMILoan->address = $validatedData['address'];
        $EMILoan->taluk = $validatedData['taluk'];
        $EMILoan->city = $validatedData['city'];
        $EMILoan->note = $validatedData['note'];

        $EMILoan->member_business = $validatedData['member_business'];
        $EMILoan->mobile_no_1 = $validatedData['mobile_no_1'];
        $EMILoan->mobile_no_2 = $validatedData['mobile_no_2'];

        $EMILoan->jaminu_nam = $validatedData['jaminu_nam'];
        $EMILoan->mobile_no_3 = $validatedData['mobile_no_3'];
        $EMILoan->jamin_member_no = $validatedData['jamin_member_no'];

        $EMILoan->loan_type = $validatedData['loan_type']; //

        //product
        $EMILoan->product_name = $validatedData['product_name'];
        $EMILoan->price = $validatedData['price'];
        $EMILoan->down_payment = $validatedData['down_payment'];
        $EMILoan->loan_amount = $validatedData['loan_amount']; //
        // $EMILoan->loan_time_period  = $validatedData['loan_time_period'];
        // $EMILoan->Interest_amount  = $validatedData['Interest_amount']; //
        // $EMILoan->total_amount  = $validatedData['total_amount'];
        // $EMILoan->monthly_emi  = $validatedData['monthly_emi'];

        //cash
        // $EMILoan->loan_amount_cash  = $validatedData['loan_amount_cash']; //
        // $EMILoan->loan_time_period_cash  = $validatedData['loan_time_period_cash']; //
        // $EMILoan->Interest_amount_cash  = $validatedData['Interest_amount_cash']; //
        // $EMILoan->total_amount_cash  = $validatedData['total_amount_cash']; //
        // $EMILoan->monthly_emi_cash  = $validatedData['monthly_emi_cash']; //

        $EMILoan->member_sign_image = $validatedData['member_sign_image'] ?? '';
        $EMILoan->jamin_sign_image = $validatedData['jamin_sign_image'] ?? '';
        $EMILoan->jjg_sign_image_2 = $validatedData['jjg_sign_image_2'] ?? '';

        if ($request->hasFile('member_sign_image')) {
            $file = $request->file('member_sign_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/member_sign_image/', $filename);
            $EMILoan->member_sign_image = $filename;
        }

        // jamin_sign_image
        if ($request->hasFile('jamin_sign_image')) {
            $file = $request->file('jamin_sign_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/jamin_sign_image/', $filename);
            $EMILoan->jamin_sign_image = $filename;
        }

        // jjg_sign_image_2
        if ($request->hasFile('jjg_sign_image_2')) {
            $file = $request->file('jjg_sign_image_2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/jjg_sign_image_2/', $filename);
            $EMILoan->jjg_sign_image_2 = $filename;
        }
        $EMILoan->login_id = Auth::id();
        $EMILoan->save();

        $emiWallet = new EMIWallet([
            'user_id' => $EMILoan->id,
            'total_amount' => $validatedData['loan_amount'],
            // 'total_amount_cash' => $validatedData['total_amount_cash']
        ]);
        $emiWallet->save();

        return redirect('admin/emi/' . $EMILoan->id . '/view')->with('message', 'EMILoan Added Successfully');
    }

    public function destroy($id)
    {
        // Find the dikari by its ID
        $EMILoan = EMILoan::findOrFail($id);

        if ($EMILoan->member_image) {
            Storage::delete('public/uploads/emi/member_image/' . $EMILoan->member_image);
        }
        if ($EMILoan->heir_image) {
            Storage::delete('public/uploads/emi/heir_image/' . $EMILoan->heir_image);
        }

        if ($EMILoan->member_sign_image) {
            Storage::delete('public/uploads/emi/member_sign_image/' . $EMILoan->member_sign_image);
        }
        if ($EMILoan->jamin_sign_image) {
            Storage::delete('public/uploads/emi/jamin_sign_image/' . $EMILoan->jamin_sign_image);
        }
        if ($EMILoan->jjg_sign_image_2) {
            Storage::delete('public/uploads/emi/jjg_sign_image_2/' . $EMILoan->jjg_sign_image_2);
        }

        $EMILoan->delete();
        return redirect('admin/emi/create')->with('message', 'EMI ફોર્મ સફળતાપૂર્વક કાઢી નાખ્યું');

    }
    // public function generateRandomNumber($prefix = '000')
    // {
    //     // Find the last saved entry with the desired format
    //     $lastBachat = EMILoan::where('member_no', 'like', $prefix . '%')
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
    public function generateRandomNumber($prefix = '000')
    {
        // Find the last saved entry with the desired format
        $lastEMILoan = EMILoan::
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
        $newNumber = $lastEMILoan->first()->member_no + 1;

        return $newNumber;
    }

    public function edit($EMILoan_id)
    {
        $EMILoan = EMILoan::findorfail($EMILoan_id);

        return view('admin.emi.edit', compact('EMILoan'));
    }
    public function update(EMIloanFormRequest2 $request, $EMILoan_id)
    {
        $validatedData = $request->validated();
        $EMILoan = EMILoan::findorfail($EMILoan_id);

        $EMILoan->member_no = $validatedData['member_no'];
        $EMILoan->member_date = $validatedData['member_date'];
        $EMILoan->status = $validatedData['status'];

        //member_image
        if ($request->hasFile('member_image')) {
            $file = $request->file('member_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/member_image/', $filename);
            $EMILoan->member_image = $filename;
        }
        // heir_image
        if ($request->hasFile('heir_image')) {
            $file = $request->file('heir_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/heir_image/', $filename);
            $EMILoan->heir_image = $filename;
        }

        $EMILoan->mr = $validatedData['mr'];
        $EMILoan->age = $validatedData['age'];
        $EMILoan->village = $validatedData['village'];
        $EMILoan->address = $validatedData['address'];
        $EMILoan->taluk = $validatedData['taluk'];
        $EMILoan->city = $validatedData['city'];
        $EMILoan->note = $validatedData['note'];

        $EMILoan->member_business = $validatedData['member_business'];
        $EMILoan->mobile_no_1 = $validatedData['mobile_no_1'];
        $EMILoan->mobile_no_2 = $validatedData['mobile_no_2'];

        $EMILoan->jaminu_nam = $validatedData['jaminu_nam'];
        $EMILoan->mobile_no_3 = $validatedData['mobile_no_3'];
        $EMILoan->jamin_member_no = $validatedData['jamin_member_no'];

        $EMILoan->product_name = $validatedData['product_name'];
        $EMILoan->price = $validatedData['price'];
        $EMILoan->down_payment = $validatedData['down_payment'];
        $EMILoan->loan_amount = $validatedData['loan_amount'];

        // $EMILoan->total_amount  = $validatedData['total_amount'];
        // $EMILoan->loan_time_period  = $validatedData['loan_time_period'];
        // $EMILoan->monthly_emi  = $validatedData['monthly_emi'];

        $EMILoan->member_sign_image = $validatedData['member_sign_image'] ?? '';
        $EMILoan->jamin_sign_image = $validatedData['jamin_sign_image'] ?? '';
        $EMILoan->jjg_sign_image_2 = $validatedData['jjg_sign_image_2'] ?? '';

        if ($request->hasFile('member_sign_image')) {
            $file = $request->file('member_sign_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/member_sign_image/', $filename);
            $EMILoan->member_sign_image = $filename;
        }

        // jamin_sign_image
        if ($request->hasFile('jamin_sign_image')) {
            $file = $request->file('jamin_sign_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/jamin_sign_image/', $filename);
            $EMILoan->jamin_sign_image = $filename;
        }

        // jjg_sign_image_2
        if ($request->hasFile('jjg_sign_image_2')) {
            $file = $request->file('jjg_sign_image_2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('public/uploads/emi/jjg_sign_image_2/', $filename);
            $EMILoan->jjg_sign_image_2 = $filename;
        }

        $EMILoan->update();

        $emiWallet = EMIWallet::where('user_id', $EMILoan->id)->firstOrFail();
        $emiWallet->total_amount = $validatedData['loan_amount'];
        $emiWallet->update();

        return redirect('admin/emi/' . $EMILoan->id . '/view')->with('message', 'EMILoan Updated Successfully');
    }
    public function view($id)
    {
        $EMILoan = EMILoan::findorfail($id);
        $user = User::all();

        return view('admin.emi.view', compact('EMILoan', 'user'));
    }

    public function receipt()
    {
        $emiWallet = EMIWallet::all();
        $EMILoan = EMILoan::where('status', '=', 'active')->get();
        $user = User::all();
        return view('admin.emi.emi_receipt', compact('EMILoan', 'emiWallet', 'user'));
    }
    public function emi_receipt_cash()
    {
        $EMILoan = EMILoan::where('loan_type', '=', '2')->get();
        return view('admin.emi.emi_receipt_cash', compact('EMILoan'));
    }
    public function emi_all_receipt($id)
    {

        $EMILoan = EMILoan::findOrFail($id);
        $EMIreceipt = EMIreceipt::where('user_id', '=', $id)->get();
        $user = User::all();
        return view('admin.emi.emi_all_receipt', compact('EMILoan', 'EMIreceipt', 'user'));

    }
    public function emi_all_receipt_cash($id)
    {

        $EMILoan = EMILoan::findOrFail($id);
        $EMIreceipt = EMIreceipt::where('user_id', '=', $id)->get();
        $user = User::all();

        return view('admin.emi.emi_all_receipt_cash', compact('EMILoan', 'EMIreceipt', 'user'));

    }

    public function create_emi_receipt($id)
    {

        $EMILoan = EMILoan::findorfail($id);
        $emiWallet = EMIWallet::where('user_id', $id)->first();
        return view('admin.emi.create_emi_receipt', compact('EMILoan', 'emiWallet'));
    }

    public function store_emi(EMIreceiptFormRequest $request)
    {
        $validatedData = $request->validated();

        $emiWallet = EMIWallet::where('user_id', $validatedData['user_id'])->first();

        if ($emiWallet) {
            // Subtract remaining_loan_amount from total_amount
            $emiWallet->total_amount -= $validatedData['loan_paid'];
            // $emiWallet->total_amount_cash -= $validatedData['remaining_loan_amount_cash'];

            // Check if total_amount is zero
            if ($emiWallet->total_amount <= 0) {
                // Find the associated EMI loan record and update status
                $EMILoan = EMILoan::where('id', $emiWallet->user_id)->first();
                if ($EMILoan) {
                    $EMILoan->status = 'Finished';
                    $EMILoan->save();
                }
            }

            // Save the updated EMIWallet record
            $emiWallet->save();
        }

        $EMIreceipt = new EMIreceipt();
        $EMIreceipt->user_id = $validatedData['user_id'];
        $EMIreceipt->date = $validatedData['date'];
        $EMIreceipt->note = $validatedData['note'];
        $EMIreceipt->total_amount = $validatedData['total_amount'];
        $EMIreceipt->remaining_loan_amount = $validatedData['remaining_loan_amount'];
        $EMIreceipt->interest_paid = $validatedData['interest_paid'];
        $EMIreceipt->loan_paid = $validatedData['loan_paid'];
        $EMIreceipt->login_id = Auth::id();

        $EMIreceipt->save();

        return redirect('admin/emi/' . $EMIreceipt->id . '/view_emi_receipt');
    }

    public function completed_list()
    {
        $EMILoan = EMILoan::where('status', '=', 'Finished')->get();

        return view('admin.emi.completed_list_emi', compact('EMILoan'));
    }

    public function view_emi_receipt($id)
    {

        $EMIreceipt = EMIreceipt::findOrFail($id);
        $EMILoan = EMILoan::findOrfail($EMIreceipt->user_id);
        $EMIWallet = EMIWallet::where('user_id', '=', $EMIreceipt->user_id)->get();
        $user = User::all();

        return view('admin.emi.view_emi_receipt', compact('EMIreceipt', 'EMILoan', 'EMIWallet', 'user'));
    }

}
