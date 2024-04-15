<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Wallet;
use App\Models\Bachat;
use App\Models\TotalInterest;
use App\Models\DailyInterest;

class CalculateInterest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:calculate-interest';
    protected $signature = 'calculate:interest';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';
    protected $description = 'Calculate and add 1% interest to user wallets.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $wallets = Wallet::all();
        $totalDaysInMonth = now()->daysInMonth;

        foreach ($wallets as $wallet) {

            $bachat = Bachat::findOrFail($wallet->user_id);
            $percentage = $bachat->percentage;

            $interest = 0.0;
            if ($percentage == 1) {

                $interestRate = now()->isLastOfMonth() ? 0.01 : (0.01 / $totalDaysInMonth);

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

        $this->info('Interest calculated and added successfully.');
    }
}

        //     $bachat = Bachat::findOrFail($wallet->user_id);
        //     $percentage_1 = $bachat->percentage_1 == true ? '1':'0';
        //     $percentage_1_25 = $bachat->percentage_1_25 == true ? '1':'0';

        //     $interest = 0.0;
        //     $per = 0;
        //     if ($percentage_1 == 1) {

        //         $per = 1;

        //     } else if ($percentage_1_25 == 1) {

        //         $per = 1.25;
        //     }
        //     $lastDateOfThisMonth = strtotime('last day of this month');

        //     $lastDay = date('d', $lastDateOfThisMonth);
        //     $lastDay = $per / $lastDay;


        //     $interest = ($lastDay * $wallet->balance ) /100;
