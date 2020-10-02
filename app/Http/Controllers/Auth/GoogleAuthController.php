<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirectToProvider() 
    {
        return Socialite::driver('google')->redirect();

    }

    public function handleProviderCallback() 
    {

        
        

        try {

            $user = Socialite::driver('google')->user();
            $googleuser = User::where('email' , $user->email)->first();
            if ($googleuser) {
                auth()->loginUsingId($googleuser->id);
            } else {
                $newUser = User::create([
                    'name' => $user->name ,
                    'email' => $user->email,
                    'password' => bcrypt(Str::random(16))
                ]);
                auth()->loginUsingId($newUser->id);
            }
            alert()->success('ورود با موفقیت انجام شد', 'خوش آمدید');
            return redirect('/');
            
        } catch (\Exception $e) {
            return 'error';
        }
        
    }
}
