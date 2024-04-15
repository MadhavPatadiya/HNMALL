<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Wallet;
use App\Models\Bachat;
use App\Models\TotalInterest;
use App\Models\DailyInterest;


class CalculateMonthlyInterest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'interest:calculate-monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate monthly interest for each user\'s wallet at 1.25%.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $wallets = Wallet::all();

        foreach ($wallets as $wallet) {

            $bachat = Bachat::findOrFail($wallet->user_id);
            $percentage = $bachat->percentage;

            $interest = 0.0;
            if ($percentage == 125) {

                $interestRate = 0.0125; // 1.25%

                $interest = $wallet->balance * $interestRate;
                $dailyInterest = new DailyInterest();
                $dailyInterest->date = now()->toDateString();
                $dailyInterest->user_id = $wallet->user_id;
                $dailyInterest->daily_interest = $interest;
                $dailyInterest->save();
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

            // Store the daily interest


            // Calculate and update the total interest for the user

        }

        $this->info('1.25% Interest added successfully.');
    }
}