<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class OAuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();
        $user = User::create($data);
        return response()->json(['user' => $user], 201);
    }

    public function userProfile(Request $request)
    {
        $user = $request->user();
        return response()->json(['user' => $user], 200);
    }
}
