<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use KingFlamez\Rave\Rave;
//use KingFlamez\Rave\Facades\Rave;
use Rave;
use App\Notification;
use App\Followship;


class RaveController extends Controller
{
    public function paying()
    {
        $notifications = notification::where('user_id', auth()->user()->id)->get();
        $followers = followship::where('user2_id', auth()->user()->id)->get();
        $following = followship::where('user1_id', auth()->user()->id)->get();
        return view('pay', compact('notifications', 'followers', 'following'));
    }

    public function initialize()
    {
        Rave::initialize(route('callback'));
    }

    public function callback()
    {
        $data = Rave::verifyTransaction(request()->txref);

        dd($data);
    }
}
