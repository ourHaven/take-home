<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:organizations,name',
            'reset_interval_days' => 'required|integer|min:1'
        ]);

        $organization = Organization::create($request->all());

        return response()->json(['message' => 'Organization created', 'organization' => $organization], 201);
    }

    public function updateResetInterval(Request $request, $id)
    {
        $request->validate([
            'reset_interval_days' => 'required|integer|min:1'
        ]);

        $organization = Organization::findOrFail($id);
        $organization->update(['reset_interval_days' => $request->reset_interval_days]);

        return response()->json(['message' => 'Reset interval updated', 'organization' => $organization]);
    }
}
