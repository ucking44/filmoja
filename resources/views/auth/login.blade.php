@extends('layouts.front')
@section('content')
<!-- Breadcrumb Area Start -->
<section class="filmoja-breadcrumb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcrumb-box">
                <h2>Login</h2>
                <ul>
                   <li><a href="{{ url('/') }}">Home</a></li>
                   <li class="active-breadcromb">Login</li>
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

        @include('includes.alerts')

<form action="{{ route('login') }}" method="POST">
    @csrf

<h2>Login</h2>
<p class="hint-text">Login with your social media account or email address</p>
<div class="social-btn text-center">
 <a href="{{url('login/facebook')}}" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
 <a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
 <a href="{{url('login/google')}}" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
</div>
<div class="or-seperator"><b>or</b></div>

<div class="form-group">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   </div>
<div class="form-group">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   </div>

   <div class="form-group">
       <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Login</button>
   </div>
</form>
<div class="text-center">Forget password? <a href="">Click here</a></div>
</div>

 </section>
 <!-- Login Area End -->
 <!-- Footer Area Start -->
 <footer class="filmoja-footer-area">

@endsection
