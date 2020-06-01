@extends('layouts.front')
@section('content')

<!-- Breadcrumb Area Start -->
<section class="filmoja-breadcrumb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcrumb-box">
                <h2>Sign up</h2>
                <ul>
                   <li><a href="{{url('/') }}">Home</a></li>
                   <li class="active-breadcromb">Sign up</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Breadcrumb Area End -->
 <!-- Login Area Start -->
 <section class="filmoja-login-area section_70" style="background-color: #f1ebeb9e;">




    <div class="signup-form kk">
<form action="{{ route('register') }}" method="POST">
    @csrf
<h2>Create an Account</h2>
<p class="hint-text">Sign up with your social media account or email address</p>
<div class="social-btn text-center">
<a href="{{url('login/facebook')}}" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
 <a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
 <a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
</div>
<div class="or-seperator"><b>or</b></div>
   <div class="form-group">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   </div>

   <div class="form-group">
    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" autofocus>

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
  </div>

<div class="form-group">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address" autocomplete="email">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   </div>

<div class="form-group">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   </div>
<div class="form-group">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
   </div>

   <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">
    {{ __('Sign Up') }}
</button>
   {{-- <div class="form-group">
       <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
   </div> --}}
</form>
<div class="text-center">Already have an account? <a href="{{route('login')}}">Login here</a></div>
</div>

 </section>
 <!-- Login Area End -->
 <!-- Footer Area Start -->
 <footer class="filmoja-footer-area">



@endsection
