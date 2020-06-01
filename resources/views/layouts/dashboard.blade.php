
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Challenge, Win Prizes, Upload Video Challenge">
  <title>Filmoja</title>

  <!-- Favicons -->
<link href="{{asset('demos/filmoja-view/assets/img/favicon.png')}}" rel="icon">
<link href="{{asset('demos/filmoja-view/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">



<link rel="icon" type="image/png" sizes="32x32" href="{{asset('demos/filmoja-view/assets/img/favicon/favicon-32x32.png')}}">
      <!--Bootstrap css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/bootstrap.css')}}">
      <!--Font Awesome css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/font-awesome.min.css')}}">
      <!--Magnific css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/magnific-popup.css')}}">
      <!--Owl-Carousel css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/owl.theme.default.min.css')}}">
      <!--Animate css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/animate.min.css')}}">
      <!--Slicknav css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/slicknav.min.css')}}">
      <!--Site Main Style css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/style.css')}}">
      <!--Responsive css-->
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/responsive.css')}}">


<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/follow/general-style-plugins.css')}}">
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/follow/stylefoll.css')}}">
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/follow/theme-style.css')}}">


  <!-- Bootstrap core CSS -->
<link href="{{asset('demos/filmoja-view/assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
<link href="{{asset('demos/filmoja-view/assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('demos/filmoja-view/assets/css/zabuto_calendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('demos/filmoja-view/assets/lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
<link href="{{asset('demos/filmoja-view/assets/css/dashbstyle.css')}}" rel="stylesheet">
<link href="{{asset('demos/filmoja-view/assets/css/style-responsive.css')}}" rel="stylesheet">
<script src="{{asset('demos/filmoja-view/assets/lib/chart-master/Chart.js')}}"></script>
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/axios-loader.css')}}">
<link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/notiflix-2.1.3.min.css')}}">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">

      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <!--logo start-->
    <a href="{{url('dashboard')}}" class="logo"><b>FILMO<span>JA</span></b></a>

      <!--logo end-->


      <div class="top-menu">

        @include('dashboard.partials.search')

      </div>

    </header>

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
       @include('dashboard.partials.left_sidebar')

    </aside>

  @yield('content')


<!-- Footer Area Start -->
<footer class="filmoja-footer-area">

    <div class="copyright-area">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="copyright-box">
                   <p>2019 © filmoja. All rights reserved - Design by <a href="#" >Themescare</a></p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- Footer Area End -->
</section>
<!-- js placed at the end of the document so the pages load faster -->

<script src="{{asset('demos/filmoja-view/assets/lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('demos/filmoja-view/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('demos/filmoja-view/assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('demos/filmoja-view/assets/lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('demos/filmoja-view/assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('demos/filmoja-view/assets/lib/jquery.sparkline.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('demos/filmoja-view/assets/lib/common-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('demos/filmoja-view/assets/lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('demos/filmoja-view/assets/lib/gritter-conf.js')}}"></script>
<!--script for this page-->
<script src="{{asset('demos/filmoja-view/assets/lib/sparkline-chart.js')}}"></script>
<script src="{{asset('demos/filmoja-view/assets/lib/zabuto_calendar.js')}}"></script>

 <!--Jquery-ui js-->
<script src="{{asset('demos/filmoja-view/assets/js/jquery-ui.min.js')}}"></script>
 <!--Bootstrap js-->
<script src="{{asset('demos/filmoja-view/assets/js/bootstrap.min.js')}}"></script>
 <!--Owl-Carousel js-->
<script src="{{asset('demos/filmoja-view/assets/js/owl.carousel.min.js')}}"></script>
 <!--SlickNav js-->
<script src="{{asset('demos/filmoja-view/assets/js/jquery.slicknav.min.js')}}"></script>
 <!--Magnific js-->
<script src="{{asset('demos/filmoja-view/assets/js/jquery.magnific-popup.min.js')}}"></script>
 <!--Main js-->
<script src="{{asset('demos/filmoja-view/assets/js/main.js')}}"></script>
<script src="{{asset('demos/filmoja-view/assets/js/axios.min.js')}}"></script>
<script src="{{asset('demos/filmoja-view/assets/js/axios-loader.js')}}"></script>
<script src="{{asset('demos/filmoja-view/assets/js/notiflix-2.1.3.min.js')}}"></script>

@yield('scripts')
</body>

@section('scripts')

   <script>

 function processData(selector, action, user_id){
      //we make the function reusable for followers and following
      let user_action = '';
      if(action == 'unfollow'){
        user_action = 'Are you sure you want to stop this user from following you?';
      }else if(action == 'removefollow'){
        user_action = 'Are you sure you want to unfollow this user?';
      }else{
        user_action = 'Are you sure you want to follow this user?';
      }
    Notiflix.Confirm.Show( 'Attention', user_action, 'Yes', 'No', function(){
    axios.get("{{route('userAction')}}",{
        params: {
         action  : action,
         user_id : user_id
        }
    }).then( data => {
        if(action == 'unfollow'){
            $('#followers_show_action').html(data.data);
          //document.location.reload(true);
        }else if(action == 'removefollow'){
            $('#following_show_action').html(data.data);
        }else{
            $('#following_show_action').html(data.data);
        }
        reloadPeople();
    }).catch( error => {
        console.log(error);
    })

    }, function(){
    //No

     });

  }

  function reloadPeople(){

axios.get("{{route('userAction')}}",{
    params: {
     action  : 'reload_people',
    }
}).then( data => {
    $('#searchResult').html(data.data);
}).catch( error => {
    console.log(error);
})

}

function checkNotification(){
    let status = false;
    let notification = $('#notificationCount').val();
    setInterval(function(){
      axios.get("{{route('checkNotification')}}",{
        params : {
            count : notification,
        }
      }).then( data => {
//check if notification coming from the server is greater than the one locally
       if(data.data.data > notification){
        $('#notificationCount').val(data.data.data);
           if(status == false){
               let song = new Audio();
               song.src = "{{asset('demos/filmoja-view/assets/file/just-saying.mp3')}}";
               song.play();
               status = true;
           }
           location.reload();
       }

      }).catch( error => {
          console.log(error);
      })
    }, 4000)
}

checkNotification();

function reloadFollowers(){
    axios.get("{{route('reloadFollowers')}}").then(
        data => {
            $('#followers_show_action').html(data.data);
        }
    )
}

   </script>
</html>
