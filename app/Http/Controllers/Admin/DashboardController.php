<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bachat;
use App\Models\Wallet;
use App\Models\User;
use App\Models\DailyInterest;
use App\Models\TotalInterest;
use App\Models\BachatReceipt;
use App\Models\BachatDebitReceipt;
use App\Models\Statement;
use Carbon\Carbon;
use App\Http\Requests\BachatReceiptFromRequest;
use App\Http\Requests\BachatDebitReceiptFormRequest;
use App\Models\LoanInterest;
use App\Models\LoanTransaction;
use App\Models\LoanTotalInterest;
use App\Models\LoanPayment;



class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function test()
    {
     // Calculate interest for today
     $dailyInterestRate = 0.02; // 2% monthly
     $loans = LoanTransaction::all();
     // $totalDaysInMonth = now()->daysInMonth;


     foreach ($loans as $loan) {
         $interestAmount = $loan->amount * $dailyInterestRate;

         $loan->amount += $interestAmount;
         $loan->save();

         $loanInterest = new LoanInterest();
         $loanInterest->user_id = $loan->id;
         $loanInterest->interest_amount = $interestAmount;
         $loanInterest->date = now()->toDateString();
         $loanInterest->save();

         $loanTotalInterest = LoanTotalInterest::where('user_id', $loanInterest->user_id)->first();
         if ($loanTotalInterest) {
             // If the user already has a total interest record, update it
             $loanTotalInterest->total_interest += $interestAmount;
             $loanTotalInterest->save();
         } else {
             // If the user doesn't have a total interest record, create a new one
             LoanTotalInterest::create([
                 'user_id' =>  $loanInterest->user_id,
                 'total_interest' => $interestAmount,
             ]);
         }


         $unstelledInterests = LoanInterest::where('status', 'unstelled')->get();

         foreach ($unstelledInterests as $unstelledInterest) {
             // Retrieve the debit_interest from the loan_payment table
             $debitInterest = LoanPayment::where('user_id', $unstelledInterest->user_id)->value('debit_interest');

             // Check if there's an unpaid interest
             $unpaidInterest = $unstelledInterest->interest_amount - $debitInterest;

             if ($unpaidInterest > 0) {
                 // Create a new entry for the unpaid interest
                 $newUnpaidInterest = new LoanInterest();
                 $newUnpaidInterest->user_id = $unstelledInterest->user_id;
                 $newUnpaidInterest->interest_amount = $unpaidInterest;
                 $newUnpaidInterest->date = now()->toDateString();
                 $newUnpaidInterest->status = 'unpaid';
                 $newUnpaidInterest->save();
             }

             // Update the status of the current entry
             $unstelledInterest->status = 'stelled';
             $unstelledInterest->save();

                    dd($unstelledInterests);
                }
            }
        }
    }





    // $unstelledInterests = LoanInterest::where('status', 'unstelled')->get();

    // foreach ($unstelledInterests as $unstelledInterest) {
    //     // Retrieve the debit_interest from the loan_payment table
    //     $debitInterest = LoanPayment::where('user_id', $unstelledInterest->user_id)->value('debit_interest');

    //     // Check if there's an unpaid interest
    //     $unpaidInterest = $unstelledInterest->interest_amount - $debitInterest;

    //     if ($unpaidInterest > 0) {
    //         // Create a new entry for the unpaid interest
    //         $newUnpaidInterest = new LoanInterest();
    //         $newUnpaidInterest->user_id = $unstelledInterest->user_id;
    //         $newUnpaidInterest->interest_amount = $unpaidInterest;
    //         $newUnpaidInterest->date = now()->toDateString();
    //         $newUnpaidInterest->status = 'unpaid';
    //         $newUnpaidInterest->save();
    //     }

    //     // Update the status of the current entry
    //     $unstelledInterest->status = 'stelled';
    //     $unstelledInterest->save();
    // }
