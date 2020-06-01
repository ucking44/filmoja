<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Followship;
use App\Notification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            if(Auth::check()){//if user is logged in
                //where the user is following me
                $followers = followship::where('user2_id', auth()->user()->id)->get();
                //where i am following any user in user2_id
                $following = followship::where('user1_id', auth()->user()->id)->get();
                $notifications = notification::where('user_id', auth()->user()->id)->get();
                $users = User::where('id', '!=', auth()->id())->get();
                $user = Auth::user();
        return view('dashboard.index', compact('followers', 'following', 'notifications', 'users', 'user'));

        }else{

            return view('index');

        }
}

    public function followin(){

          if(Auth::check()){
            $notifications = notification::where('user_id', auth()->user()->id)->get();
            $followers = followship::where('user2_id', auth()->user()->id)->get();
            $following = followship::where('user1_id', auth()->user()->id)->get();
            return view('dashboard.following', compact('following', 'followers', 'notifications'));
          }

    }

    public function follower(){

        if(Auth::check()){
          $notifications = notification::where('user_id', auth()->user()->id)->get();
          $followers = followship::where('user2_id', auth()->user()->id)->get();
          $following = followship::where('user1_id', auth()->user()->id)->get();
          return view('dashboard.follower', compact('following', 'followers', 'notifications'));
        }

  }

  public function checkNotification(){
    $notification = notification::where('user_id', auth()->user()->id)->get();
    return response()->json(['data' => $notification->count()]);
    }

  public function userAction(Request $request){
    if($request->action == 'unfollow'){
      if(followship::where('user2_id', auth()->user()->id)->where('user1_id', '!=', auth()->user()->id)->exists()){// check if it exists
         $data = followship::where('user1_id', '!=', auth()->user()->id)->where('user2_id', auth()->user()->id)->first();
         $data->delete();
         $data2 = followship::where('user1_id', '!=', auth()->user()->id)->where('user2_id', auth()->user()->id)->get();
         return response()->view('dashboard.partials.followers-action', compact('data2'));
      }else{
          return response()->json(['data' => 'Sorry unable to process data'], 422);
       }
         }elseif($request->action == 'removefollow'){
           if(followship::where('user1_id', auth()->user()->id)->where('user2_id', '!=', auth()->user()->id)->exists()){// check if it exists
               $data = followship::where('user1_id', auth()->user()->id)->where('user2_id', '!=', auth()->user()->id)->first();
               $data->delete();
               $data = followship::where('user1_id', auth()->user()->id)->where('user2_id', '!=', auth()->user()->id)->get();
               return response()->view('dashbord.partials.following-action', compact('data'));
            }else{
                return response()->json(['data' => 'Sorry unable to process data']);
             }
         }elseif($request->action == 'reload_people'){
           $user = User::get();
           return response()->view('dashboard.partials.people-reload', compact('user'));
         } elseif($request->action == 'follow') {
       //since we are following, we have to create a new record in the followship table
       //where the user1_id is the auth_user_id and user2_id is the user we are following
       if(followship::where('user1_id', auth()->user()->id)->where('user2_id', $request->id)->exists()){
           return response()->json(['data' => 'Sorry unable to perform action'], 422);
       }else{
       //create a new notification class instance
       $uname = Auth::user()->name;
       $notify = new notification();
       $notify->user_id = $request->user_id;
       $notify->title = 'You have a new Follower';
       $notify->content = $uname .' started following you';
       $notify->save();

       //create a new followship class instance
       $data = new followship();
       $data->user1_id = auth()->user()->id;
       $data->user2_id = $request->user_id;
       $data->save();
       $data = followship::where('user1_id', auth()->user()->id)->where('user2_id', '!=', auth()->user()->id)->get();
       return response()->view('dashboard.partials.following-action', compact('data'));
       }
         }else{
             return response()->json(['data' => 'Sorry unable to perform action'], 422);
         }

   }


   public function reloadFollowers(){
    $data2 = followship::where('user2_id', auth()->user()->id)->get();
    return response()->view('dashboard.partials.followers-action', compact('data2'));
}



}
