
<div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
    <p class="centered"><a href="profile.html"><img src="{{asset('demos/filmoja-view/assets/img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
      <h5 class="centered">{{ Auth::user()->name }}</h5>
      <div class="social flex">
      <div> <a href="#"> <img src="{{asset('demos/filmoja-view/assets/img/facebook.png')}}" alt=""> </a> </div>
      <div> <a href="#"> <img src="{{asset('demos/filmoja-view/assets/img/twitter.png')}}" alt=""> </a> </div>
      <div> <a href="#"> <img src="{{asset('demos/filmoja-view/assets/img/s2.png')}}" alt=""> </a> </div>
      <div> <a href="#"> <img src="{{asset('demos/filmoja-view/assets/img/s1.png')}}" alt=""> </a> </div>
      <div> <a href="#"> <img src="{{asset('demos/filmoja-view/assets/img/s3.png')}}" alt=""> </a> </div>
    </div>
      <style type="text/css">
        .social{
          text-align: center;
          margin-bottom: 20px;



        }
        .social div{

        display: inline-block;
        margin: 0 5px;



        }
        .social img{
          width: 25px;
          height: auto;


        }
      </style>


      <li class="mt">
      <a class="active" href="{{route('dashboard')}}">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          </a>
      </li>
     <li>
     <a href="{{url('dashboard/following')}}">
          <i class="fa fa-envelope"></i>
          <span>Following </span>
          <span class="label label-theme pull-right mail-info">{{$following->count()}}</span>
          </a>
      </li>
       <li>
        <a href="{{url('dashboard/follower')}}">
          <i class="fa fa-envelope"></i>
          <span>Followers </span>
        <span class="label label-theme pull-right mail-info">{{$followers->count()}}</span>
          </a>
      </li>
      <li>
        <input type="hidden" id="notificationCount" value="{{$notifications->count()}}">
        <a href="{{url('dashboard/notification')}}">
          <i class="fa fa-envelope"></i>
          <span>Notifications </span>
          <span class="label badge bg-warning pull-right mail-info">{{$notifications->count()}}</span>
          </a>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-cogs"></i>
          <span>Settings</span>
          </a>
        <ul class="sub">
          <li><a href="{{url('dashboard/edit_profile/{$user->id}')}}">Edit Profile</a></li>
          <li><a href="{{url('dashboard/password_change')}}">Change Password</a></li>

        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-book"></i>
          <span>Wallet</span>
          </a>
        <ul class="sub">

          <li><a href="{{url('buy')}}">Depositing</a></li>
          <li><a href="{{url('paying')}}">Paying</a></li>
          <li><a href="{{url('dashboard/pay')}}">Pay</a></li>
          <li><a href="{{url('dashboard/deposit')}}">Deposit</a></li>
          <li><a href="{{url('dashboard/withdraw')}}">Withdraw</a></li>
          <li><a href="{{url('dashboard/coin_amount')}}">Amount of coin</a></li>

        </ul>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
