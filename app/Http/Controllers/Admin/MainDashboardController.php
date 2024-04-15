<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Bachat;
use App\Models\Dikari;
use App\Models\kariyavar;
use App\Models\Deposite;
use App\Models\LoanPayment;
use App\Models\EMILoan;
use App\Models\BachatDebitReceipt;
use App\Models\masikDeactive;
use App\Models\EMIreceipt;
use Illuminate\Support\Carbon;
use App\Models\Refund;
use App\Models\Deactivate;
use App\Models\Double;
use App\Models\RojMed;
use App\Models\LoanReceipt;
use App\Models\TotalJoiningFee;


use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    public function index(){


        $bachats_form = Bachat::all();
        $dikari_form = Dikari::all();
        $loan_emi_form = EMILoan::all();
        $deposite_form = Deposite::all();
        $bachat_debit_receipt = BachatDebitReceipt::all();
        $monthly_emi = EMIreceipt::all();
        $date = now()->format('Y-m-d');

        $todayDate = Carbon::now()->format('Y-m-d');

        $masikdeactive = masikDeactive::whereDate('created_at',$todayDate)->get();

        $bachat_debit_receipt2 = BachatDebitReceipt::whereDate('created_at',$todayDate)->get();
        $deposite_form2 = Deposite::whereDate('created_at',$todayDate)->get();
        $LoanPayment2 = LoanPayment::whereDate('created_at',$todayDate)->get();
        $dikari_form2 = Dikari::whereDate('created_at',$todayDate)->get();
        $dikari_kariyavar2 = kariyavar::whereDate('created_at',$todayDate)->get();
        $loan_emi_form2 = EMILoan::whereDate('created_at',$todayDate)->get();
        $monthly_emi2 = EMIreceipt::whereDate('created_at',$todayDate)->get();
        $bachat_debit_receipt4 =BachatDebitReceipt::whereDate('created_at',$todayDate)->get();
        $refundstoday =Refund::whereDate('created_at',$todayDate)->get();
        $double2 =Double::whereDate('created_at',$todayDate)->get();
        $deposite_formouttoday = Deposite::whereDate('created_at',$todayDate)->get();
        $deactivatestoday = Deactivate::whereDate('created_at',$todayDate)->get();
        $loan_emi_formouttoday =EMILoan::whereDate('created_at',$todayDate)->get();



      $bachat_debit_receipt3 = BachatDebitReceipt::all();
      $refunds = Refund::all();
      $deposite_formout =Deposite::all();
      $double1 =Double::all();
      $dikari_kariyavar = kariyavar::all();
      $loanReceipt = LoanReceipt::all();
      $deactivates = Deactivate::all();
      $loan_emi_formout = EMILoan::all();
      $LoanPayment3 = LoanPayment::all();
      $TotalJoiningFee = TotalJoiningFee::all();


      $roj_medincome = RojMed::where('cash_type','=','આવક')->get();
      $roj_medoutcome = RojMed::where('cash_type','=','જાવક')->get();



        return view('admin.dashboard.index',compact('bachats_form','dikari_form','bachat_debit_receipt2','deposite_form2','dikari_form2','masikdeactive'
        ,'loan_emi_form','deposite_form','bachat_debit_receipt','monthly_emi','date','loan_emi_form2','monthly_emi2','bachat_debit_receipt3'
        ,'bachat_debit_receipt4','refunds','deposite_formout','deactivates','loan_emi_formout','refundstoday','deposite_formouttoday','deactivatestoday',
        'loan_emi_formouttoday','roj_medincome','roj_medoutcome','loanReceipt','double2','double1','dikari_kariyavar','dikari_kariyavar2','LoanPayment2'),compact('LoanPayment3','TotalJoiningFee'));
    }
}
