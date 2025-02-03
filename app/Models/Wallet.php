<?php

namespace App\Models;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'balance', 'last_reset_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
