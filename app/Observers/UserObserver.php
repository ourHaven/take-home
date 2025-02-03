<?php

namespace App\Observers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Wallet;

class UserObserver
{
    public function created(User $user)
    {
        Wallet::create([
            'user_id' => $user->id,
            'balance' => 0.00,
            'last_reset_at' => Carbon::now(),
        ]);
    }
}
