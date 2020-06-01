<?php

namespace App\Http\Controllers\Auth;
use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {


        if(!$user->userIsActivated()){
            Auth::logout();

            //return redirect('/login')->withError('You are not yet activated, click here to resend code <a href="'. route('code.resend') .'?email='. $user->email.'">Resend Code</a>');
           return redirect('/login')->withEmail($user->email);

        }

        if(!$user->isUser()){
            return redirect('/login');
        }

    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($service)
    {
        $facebookUser = Socialite::driver($service)->stateless()->user();

         $user = User::where('email', $facebookUser->getEmail())->first();

         if(!$user){

         //add user to db
        $user = User::create([
            'name' => $facebookUser->getName(),
            'email' => $facebookUser->getEmail(),
            'provider_id' => $facebookUser->getId(),
            'username' => $facebookUser->getNickname(),
            'provider' => $service,
            'active' => true,
        ]);

         }

        //login the user
        Auth::login($user);

        if(!$user->isUser()){
            return redirect('/login');
        }

        return redirect('dashboard');

    }


}
