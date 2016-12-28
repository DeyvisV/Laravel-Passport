<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook()
    {
        $providerUser = Socialite::driver('facebook')->fields(['name', 'first_name', 'last_name', 'email', 'gender', 'birthday', 'verified'])->user();

        return response()->json($providerUser);
    }

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        $providerUser = Socialite::driver('google')->user();

        return response()->json($providerUser);
    }
}
