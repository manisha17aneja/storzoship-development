<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
/**
 * Login Using Facebook
 */
 public function loginUsingFacebook()
 {
    return Socialite::driver('facebook')->redirect();
 }

 public function callbackFromFacebook()
 {
  try {
       $user = Socialite::driver('facebook')->fields(['id','first_name', 'last_name','email'])->user();

       $saveUser = User::updateOrCreate([
           'facebook_id' => $user->getId(),
       ],[
           'first_name' => $user->user['first_name'],
           'last_name' => $user->user['last_name'],
           'email' => $user->getEmail(),
           'password' => Hash::make($user->getName().'@'.$user->getId()),
           'type' => 3,
            ]);

       Auth::loginUsingId($saveUser->id);

       return redirect()->route('home');
       } catch (\Throwable $th) {
          throw $th;
       }
   }
}