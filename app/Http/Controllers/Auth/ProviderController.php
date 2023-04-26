<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Listeners\LogVerifiedUser;
use Illuminate\Support\Str;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try{
            $socialUser = Socialite::driver($provider)->user();
            
            $user = User::where([
                'provider_name' => $provider,
                'provider_id' => $socialUser->id,
            ])->first();

            if(!$user || $user->email == null){
                if(User::where('email', $socialUser->getEmail())->exists()){
                    return redirect('/login')->withErrors(['email' => 'This email uses a different method to login']);
                }
                $password = Str::random(16);
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'username' => User::generateUserName($socialUser->getNickname()),
                    'provider_name' =>$provider,
                    'provider_id' => $socialUser->getId(),
                    'provider_token' => $socialUser->token,
                    'password' => $password
                ]);

                $user->sendEmailVerificationNotification();
                $user->update([
                    'password' => Hash::make($password)
                ]);
            }

            Auth::login($user);
            return redirect('/dashboard');

        }catch(Exception $e){
            return redirect('/login')->withErrors(['email' => 'This provider has no verified email, choose other ways to login!']);;
        }
    }
}
