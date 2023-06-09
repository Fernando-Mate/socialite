<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(){

        return Socialite::driver('google')->redirect();

    }

    public function callbackGoogle(){

    try {

        $google_user = Socialite::driver('google')->user();

        $user = User::where('google_id', $google_user->getId())->first();

        if(!$user){
            $new_user = User::create([
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'google_id' => $google_user->getId()
            ]);

            Auth::login($new_user);

            return redirect()->intended('https://www.google.com/');

        }
        else{
            Auth::login($user);
        }
    } catch (\Throwable $th) {
        dd('something went wrong!'. $th->getMessage());
    }

    }

    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback(){
        $user = Socialite::driver('facebook')->stateless()->user();
        $this->createOrUpdateUser($user, 'facebook');
        return redirect()->intended('https://www.google.com/');
    }

    public function createOrUpdateUser($data, $provider){
        $user = User::where('email', $data->email)->first();

        if($user){
            $user->update([
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar
            ]);
        }else{
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar

            ]);
        }

        Auth::login($user);
    }
}
