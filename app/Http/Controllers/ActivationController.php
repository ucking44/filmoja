<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationEmail;
use App\ActivationCode;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activation(ActivationCode $code){
       $code->delete();
       $code->user()->update([
           'active' => true,
       ]);

      return redirect('/login')->withSuccess('Your account have been activated, Please login');
    }

    public function coderesend(Request $request){
       $user = User::whereEmail($request->email)->firstOrFail();

       if($user->userIsActivated()){
           return redirect('/dashboard');
       }

       Mail::to($user)->send(new ActivationEmail($user->userActivationCode));

       return redirect('/login')->withSuccess('Your code has been sent, please check your email');
    }
}
