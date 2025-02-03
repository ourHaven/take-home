<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class ResetWallets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset-wallets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset user wallets based on organization reset interval';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get all users along with their organizations and wallets
        $users = User::with('organization', 'wallet')->get();

        foreach ($users as $user) {
            // Get the reset interval for the user's organization
            $resetInterval = $user->organization->reset_interval_days;

            // Get the last reset date of the user's wallet
            $lastResetAt = $user->wallet->last_reset_at;

            // Check if the wallet needs to be reset (if reset interval has passed)
            if ($lastResetAt === null || Carbon::parse($lastResetAt)->addDays($resetInterval)->isPast()) {
                // Reset wallet balance to 0 and update the last reset time
                $user->wallet->update([
                    'balance' => 0.00, // Reset balance
                    'last_reset_at' => Carbon::now(), // Set last reset time to now
                ]);

                $this->info("Wallet reset for user: {$user->name}");
            }
        }

        $this->info('Wallet reset process completed.');
    }
}
