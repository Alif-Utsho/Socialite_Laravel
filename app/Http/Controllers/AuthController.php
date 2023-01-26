<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function facebookLogin(){
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback(){
        $user = Socialite::driver('facebook')->user();
        if($user){
            $req->session()->put('user', $user);
            return redirect()->route('auth.get');
        }
        return redirect()->route('login.get');
    }

    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        if($user){
            $req->session()->put('user', $user);
            return redirect()->route('auth.get');
        }
        return redirect()->route('login.get');
    }
}
