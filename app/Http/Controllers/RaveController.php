<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use KingFlamez\Rave\Rave;
//use KingFlamez\Rave\Facades\Rave;
use Rave;
use App\Notification;
use App\Followship;
use Illuminate\Support\Facades\Auth;

class RaveController extends Controller
{
    public function buying()
    {
        $notifications = notification::where('user_id', auth()->user()->id)->get();
        $followers = followship::where('user2_id', auth()->user()->id)->get();
        $following = followship::where('user1_id', auth()->user()->id)->get();
        $user = Auth::user();
        $currency = "NGN";
        $country = "NG";
        $amount = "";
        return view('buy', compact('notifications', 'followers', 'following', 'user', 'currency', 'country', 'amount'));
    }

    public function initialize() {
        //This initializes payment and redirects to the payment gateway
        //The initialize method takes the parameter of the redirect URL
        Rave::initialize(route('callback'));
    }

    public function callback() {
        // This verifies the transaction and takes the parameter of the transaction reference
        $data = Rave::verifyTransaction(request()->txref);
        //dd($data);

        $chargeResponsecode = $data->data->chargecode;
        $chargeAmount = $data->data->amount;
        $chargeCurrency = $data->data->currency;

        $amount = "";
        $currency = "NGN";

        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
        // transaction was successful...
        // please check other things like whether you already gave value for this ref
        // if the email matches the customer who owns the product etc
        //Give Value and return to Success page

            return redirect('/success');

        } else {
            //Dont Give Value and return to Failure page

            return redirect('/failed');
        }

        // dd($data->data);
    }

    public function success()
    {
        $notifications = notification::where('user_id', auth()->user()->id)->get();
        $followers = followship::where('user2_id', auth()->user()->id)->get();
        $following = followship::where('user1_id', auth()->user()->id)->get();
        $user = Auth::user();
        return view('success', compact('notifications', 'followers', 'following', 'user'));

    }

    public function failed()
    {
        $notifications = notification::where('user_id', auth()->user()->id)->get();
        $followers = followship::where('user2_id', auth()->user()->id)->get();
        $following = followship::where('user1_id', auth()->user()->id)->get();
        $user = Auth::user();
        return view('failed', compact('notifications', 'followers', 'following', 'user'));

    }

}
