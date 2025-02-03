<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'organization_id' => 'nullable|exists:organizations,id',
            'joined_at' => 'required|date',
            'password' => 'required|string|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'organization_id' => $request->organization_id,
            'joined_at' => $request->joined_at,
            'password' => Hash::make($request->password),
        ]);

        // Create wallet for the user
        Wallet::create([
            'user_id' => $user->id,
            'balance' => 0,
            'last_reset_at' => now(),
        ]);

        return response()->json(['message' => 'User created', 'user' => $user], 201);
    }
}
