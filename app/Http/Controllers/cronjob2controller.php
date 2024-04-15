<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\Bachat;
use App\Models\TotalInterest;
use App\Models\DailyInterest;


class cronjob2controller extends Controller
{
    public function handle()
    {
        $wallets = Wallet::all();
        $totalDaysInMonth = now()->daysInMonth;

        foreach ($wallets as $wallet) {

            $bachat = Bachat::findOrFail($wallet->user_id);
            $percentage = $bachat->percentage;

            $interest = 0.0;
            if ($percentage == 1 && $bachat->status == 'active') {

                $interestRate = now()->isLastOfMonth() ? (0.01 / $totalDaysInMonth) : (0.01 / $totalDaysInMonth);

                $interest = $wallet->balance * $interestRate;

                // Store the daily interest
                $dailyInterest = new DailyInterest();
                $dailyInterest->date = now()->toDateString();
                $dailyInterest->user_id = $wallet->user_id;
                $dailyInterest->daily_interest = $interest;
                $dailyInterest->save();

                // Calculate and update the total interest for the user
                $totalInterestRecord = TotalInterest::where('user_id', $wallet->user_id)->first();
                if ($totalInterestRecord) {
                    // If the user already has a total interest record, update it
                    $totalInterestRecord->total_interest += $interest;
                    $totalInterestRecord->save();
                } else {
                    // If the user doesn't have a total interest record, create a new one
                    TotalInterest::create([
                        'user_id' => $wallet->user_id,
                        'total_interest' => $interest,
                    ]);
                }
            } else if($percentage == 125){
                $interestRate = now()->isLastOfMonth() ? 0.0125 : (0.0125 / $totalDaysInMonth);

                $interest = $wallet->balance * $interestRate;

                  // Store the daily interest
                $dailyInterest = new DailyInterest();
                $dailyInterest->date = now()->toDateString();
                $dailyInterest->user_id = $wallet->user_id;
                $dailyInterest->daily_interest = $interest;
                $dailyInterest->save();

                // Calculate and update the total interest for the user
                $totalInterestRecord = TotalInterest::where('user_id', $wallet->user_id)->first();
                if ($totalInterestRecord) {
                    // If the user already has a total interest record, update it
                    $totalInterestRecord->total_interest += $interest;
                    $totalInterestRecord->save();
                } else {
                    // If the user doesn't have a total interest record, create a new one
                    TotalInterest::create([
                        'user_id' => $wallet->user_id,
                        'total_interest' => $interest,
                    ]);
                }
            }
        }

        // $this->info('Interest calculated and added successfully.');
    }
}