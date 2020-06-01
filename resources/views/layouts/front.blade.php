<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title>Filmoja</title>
      <!-- Favicon -->
   <link rel="icon" type="image/png" sizes="32x32" href="{{asset('demos/filmoja-view/assets/img/favicon/favicon-32x32.png')}}">
      <!--Bootstrap css-->
   <link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/bootstrap.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
      <!--Font Awesome css-->
   <link rel="stylesheet" href="{{asset('demos/filmoja-view/assets/css/fontawesome.all.min.css')}}">
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
   </head>
   <body>

         <!-- Main Header Area Start -->
         <div class="main-header-area">
            <div class="container" >
               <div class="row " style="margin: 0;">
                  <div class="col-lg-2" style="padding: 0;">
                     <div class="site-logo">
                     <a href="{{url('/')}}">
                        <img style="max-width: 70%;" src="{{asset('demos/filmoja-view/assets/img/logo.png')}}" alt="filmoja" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="filmoja-responsive-menu"></div>
                     <!-- Responsive Menu End -->
                  </div>
                  <div class="col-lg-7" style="padding: 0;">
                     <div class="header-main-search hide-mobile">
                        <form>
                           <input type="search" placeholder="Search...">
                           <button type="submit">
                           <i class="fa fa-search"></i>
                           </button>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-3" style="padding: 0;">
                     <div class="mainmenu">
                        <nav>
                           <ul id="responsive_navigation">
                              <!-- Mobile Search Start -->
                              <li class="header-main-search hide-desktop">
                                 <form>
                                    <input type="search" placeholder="Search...">
                                    <button type="submit">
                                    <i class="fa fa-search"></i>
                                    </button>
                                 </form>
                              </li>
                              <!-- Mobile Search End -->
                              <li class="white"><a href="#">How it works</a></li>





                              <li class="active bw"><a href="{{ route('login') }}" style="color: black;">Login</a></li>

                              <li class="bw">
                                 <a href="{{ route('register') }}">Sign up</a>

                              </li>


                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Main Header Area End -->
      </header>
      <!-- Header Area End -->

     @yield('content')

         <div class="copyright-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="copyright-box">
                        <p>2020 © Filmoja. All rights reserved - Design by <a href="#">Psalmzy</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
      <!--Jquery js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="{{asset('demos/filmoja-view/assets/js/jquery-3.0.0.min.js')}}"></script>
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
    <script src="{{asset('demos/filmoja-view/assets/js/Dammie.js')}}"></script>

    @yield('scripts')
   </body>
</html>
