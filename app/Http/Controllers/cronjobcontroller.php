<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\Bachat;
use App\Models\Deposite;
use App\Models\TotalInterest;
use App\Models\DailyInterest;
use App\Models\LoanInterest;
use App\Models\LoanTransaction;
use App\Models\LoanTotalInterest;
use App\Models\LoanPayment;


class cronjobcontroller extends Controller
{
    public function handle()
    {
        // Calculate interest for today
        $dailyInterestRate = 0.02; // 2% monthly
        $loans = LoanTransaction::all();
        // $totalDaysInMonth = now()->daysInMonth;


        foreach ($loans as $loan) {

            $deposite = Deposite::find($loan->user_id);

            // Check if the Deposite status is active before processing
            if ($deposite && $deposite->status === 'active') {

                $interestAmount = $loan->amount * $dailyInterestRate;

                $loan->amount += $interestAmount;
                $loan->save();

                $loanInterest = new LoanInterest();
                $loanInterest->user_id = $loan->user_id;
                $loanInterest->interest_amount = $interestAmount;
                $loanInterest->date = now()->toDateString();
                $loanInterest->save();

                $loanTotalInterest = LoanTotalInterest::where('user_id', $loan->user_id)->first();
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
            }
        }
    }
}





 // public function handle()
    // {
    //     $wallets = Wallet::all();


    //     foreach ($wallets as $wallet) {

    //         $bachat = Bachat::findOrFail($wallet->user_id);
    //         $percentage = $bachat->percentage;


    //         $interest = 0.0;
    //         if ($percentage == 125) {

    //             $interestRate = 0.0125; // 1.25%

    //             $interest = $wallet->balance * $interestRate;
    //             $dailyInterest = new DailyInterest();
    //             $dailyInterest->date = now()->toDateString();
    //             $dailyInterest->user_id = $wallet->user_id;
    //             $dailyInterest->daily_interest = $interest;
    //             $dailyInterest->save();
    //             $totalInterestRecord = TotalInterest::where('user_id', $wallet->user_id)->first();
    //             if ($totalInterestRecord) {
    //                 // If the user already has a total interest record, update it
    //                 $totalInterestRecord->total_interest += $interest;
    //                 $totalInterestRecord->save();
    //             } else {
    //                 // If the user doesn't have a total interest record, create a new one
    //                 TotalInterest::create([
    //                     'user_id' => $wallet->user_id,
    //                     'total_interest' => $interest,
    //                 ]);
    //             }
    //         }

    //         // Store the daily interest


    //         // Calculate and update the total interest for the user

    //     }

    //     // return redirect()->back()->withErrors('You do not have that much interest to withdraw.');
    // }
