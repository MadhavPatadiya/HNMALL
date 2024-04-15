<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\RojMedFormRequest;
use App\Models\RojMed;
use App\Models\TotalJoiningFee;

// Bachat module
use App\Models\BachatDebitReceipt;
use App\Models\Bachat;
use App\Models\masikDeactive;
// Fix deposite module
use App\Models\Deposite;
use App\Models\LoanReceipt;
use App\Models\LoanPayment;
use App\Models\Double;
use App\Models\Refund;
// Dikari module
use App\Models\Dikari;
use App\Models\kariyavar;
use App\Models\Deactivate;

// EMI Loan module
use App\Models\EMILoan;
use App\Models\EMIreceipt;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RojMedController extends Controller
{
    public function index()
    {
        return view('admin.roj_med.index');
    }

    public function store(RojMedFormRequest $request)
    {
        $validatedData = $request->validated();
        $RojMed = new RojMed;
        $RojMed->name  = $validatedData['name'];
        $RojMed->date  = $validatedData['date'];
        $RojMed->reason  = $validatedData['reason'];
        $RojMed->cash_type  = $validatedData['cash_type'];
        $RojMed->amount  = $validatedData['amount'];
        $RojMed->login_id = Auth::id();
        $RojMed->save();
        return redirect('admin/roj_med/view')->with('message','Roj Med Added Successfully');
    }

    public function view(){

        $RojMed = RojMed::all();
        $user = User::all();
        return view('admin.roj_med.view',compact('RojMed','user'));

    }

    public function view_real_roj_med(Request $request){

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        // Fetch data based on the selected dates


        $RojMed = RojMed::whereBetween('date', [$startDate, $endDate])->get();
        $TotalJoiningFee = TotalJoiningFee::whereBetween('created_at', [$startDate, $endDate])->get();

        // Bachat module
        $bachat = Bachat::whereBetween('member_date', [$startDate, $endDate])->get();
        $bachat_debit_receipt = BachatDebitReceipt::whereBetween('member_date', [$startDate, $endDate])->get();
        $masikdeactive = masikDeactive::whereBetween('deactivate_date', [$startDate, $endDate])->get();


        // Fix deposite module
        $deposite_form = Deposite::whereBetween('member_date', [$startDate, $endDate])->get();
        $loanReceipt = LoanReceipt::whereBetween('date', [$startDate, $endDate])->get(); //deposite ma loan levani receipt
        $LoanPayment = LoanPayment::whereBetween('date', [$startDate, $endDate])->get(); //deposite ma loan bharo receipt
        $double = Double::whereBetween('date', [$startDate, $endDate])->get();
        $Refund = Refund::whereBetween('date', [$startDate, $endDate])->get();

        // Dikari module
        $dikari_form = Dikari::whereBetween('member_date', [$startDate, $endDate])->get(); // 10000 fix amount
        $dikari_kariyavar = kariyavar::whereBetween('date', [$startDate, $endDate])->get();
        $Deactivate = Deactivate::whereBetween('deactivate_date', [$startDate, $endDate])->get();

        // Emi Loan module
        $loan_emi_form = EMILoan::whereBetween('member_date', [$startDate, $endDate])->get();

        $EMIreceipt = EMIreceipt::whereBetween('date', [$startDate, $endDate])->get();

        // Calculate totals

        return view('admin.roj_med.view_real_roj_med',compact('RojMed','bachat_debit_receipt', 'bachat', 'masikdeactive',
        'Deactivate','dikari_form','loan_emi_form','double','TotalJoiningFee','deposite_form','EMIreceipt','startDate','endDate','Deactivate','loanReceipt','LoanPayment','dikari_kariyavar','Refund'));

    }
    public function view_real_roj_med2(){

        // Fetch data based on the selected dates


        $RojMed = RojMed::all();
        $TotalJoiningFee = TotalJoiningFee::all();
        $startDate = "";
        $endDate = "";
        // Bachat module
        $bachat = Bachat::all();
        $bachat_debit_receipt = BachatDebitReceipt::all();
        $masikdeactive = masikDeactive::all();

        // Fix deposite module
        $deposite_form = Deposite::all();
        $loanReceipt = LoanReceipt::all(); //deposite ma loan levani receipt
        $LoanPayment = LoanPayment::all(); //deposite ma loan bharo receipt
        $double = Double::all(); //deposite ma loan bharo receipt
        $Refund = Refund::all(); //deposite ma loan bharo receipt

        // Dikari module
        $dikari_form = Dikari::all(); // 10000 fix amount
        $dikari_kariyavar = kariyavar::all(); // 10000 fix amount
        $Deactivate = Deactivate::all(); // 10000 fix amount

        // Emi Loan module
        $loan_emi_form = EMILoan::all();

        $EMIreceipt = EMIreceipt::all();

        // Calculate totals

        return view('admin.roj_med.view_real_roj_med',compact('RojMed','bachat_debit_receipt', 'bachat', 'masikdeactive',
        'Deactivate','dikari_form','loan_emi_form','double','TotalJoiningFee','deposite_form','EMIreceipt','startDate','endDate','Deactivate','loanReceipt','LoanPayment','dikari_kariyavar','Refund'));

    }
}