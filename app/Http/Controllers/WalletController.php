<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function show($id)
    {
        $user = User::with('wallet')->findOrFail($id);

        return response()->json([
            'wallet' => $user->wallet
        ]);
    }
}
