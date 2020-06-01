
@extends('layouts.front')

@section('content')
<section id="main">
    <!-- Slider Area Start -->
    <section class="filmoja-slider-area fix">
      <div id="sidebar" class="sidenav_twitter">
          <div class="search_tweet">
                <form>
                  <button type="submit">
                      <i class="fa fa-search"></i>
                      </button>
                   <input type="search" placeholder="">

                </form>
          </div>
          <div class="twitter-trends">
  <div class="twitter-trends_header">
      <h3>Trends for you</h3>
  </div>


  <hr>
  <div class="twitter-trends_content">
      <div>
          <p>Trending in NIgeria</p>
          <h3>Funke Akindele</h3>
          <p>32.3K Tweets</p>
      </div>
      <div>
          <button type="submit">
              <i class="fa fa-angle-down"></i>
              </button>
      </div>
  </div><hr>
  <div class="twitter-trends_content">
      <div>
          <p>Trending in NIgeria</p>
          <h3>#Kemi</h3>
          <p>32.3K Tweets</p>
      </div>
      <div>
          <button type="submit">
              <i class="fa fa-angle-down"></i>
              </button>
      </div>
  </div>
  <hr>
  <div class="twitter-trends_content">
      <div>
          <p>Trending in NIgeria</p>
          <h3>#Covid-19</h3>
          <p>32.3K Tweets</p>
      </div>
      <div>
          <button type="submit">
              <i class="fa fa-angle-down"></i>
              </button>
      </div>
  </div>


          </div>
        </div>
      <div class="filmoja-slide owl-carousel">
         <div class="filmoja-main-slide slide-item-2">
            <div class="filmoja-main-caption">
               <div class="filmoja-caption-cell">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="slider-content-holder">
                              <div class="slider-text">
                                 <h4>Join</h4>
                                 <h2>A Video Challenge  <br> Contest</h2>
                                 <p class="release-slider">Win Amazing Prizes</p>
                              </div>
                              <div class="slider-play">
                                 <a class="popup-youtube" href="#">
                                 <i class="fa fa-play"></i> Enter Contest!!
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="filmoja-main-slide slide-item-5">
            <div class="filmoja-main-caption">
               <div class="filmoja-caption-cell">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="slider-content-holder">
                              <div class="slider-text">
                                 <h4>Join</h4>
                                 <h2>A Video Challenge <br> Contest</h2>
                                 <p class="release-slider">Win Amazing Prizes</p>
                              </div>
                              <div class="slider-play">
                                <a class="popup-youtube" href="#">
                                 <i class="fa fa-play"></i> Enter Contest!!
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="filmoja-main-slide slide-item-3">
            <div class="filmoja-main-caption">
               <div class="filmoja-caption-cell">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="slider-content-holder">
                              <div class="slider-text">
                                 <h4>Join</h4>
                                 <h2>A Video Challenge <br> Contest</h2>
                                 <p class="release-slider">Win Amazing Prizes</p>
                              </div>
                              <div class="slider-play">
                                <a class="popup-youtube" href="#">
                                 <i class="fa fa-play"></i> Enter Contest!!
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>


   </section>
   <!-- Slider Area End -->
   <!-- Top Movies Area Start -->

   <section class="filmoja-top-movies-area section_70" style="padding-bottom: 40px;">
      <div class="container">

             <div class="col-md-12">
               <div class="filmoja-heading">
                  <h2>How It <span> Works </span></h2>
               </div>
            </div>

           <div class="card-group">
<div class="card">

<img src="{{asset('demos/filmoja-view/assets/img/a.png')}}" class="card-img-top" alt="...">

</div>

<div class="card">
<img src="{{asset('demos/filmoja-view/assets/img/b.png')}}" class="card-img-top" alt="...">

</div>

<div class="card">
<img src="{{asset('demos/filmoja-view/assets/img/c.png')}}" class="card-img-top" alt="...">

</div>
</div>


          </div>
        </section>

        <style type="text/css">
          .card{
           margin-left: 20px;
           margin-right: 20px;
          }
        </style>


   <section class="filmoja-top-movies-area section_70" style="padding-top: 20px; background-color: #f5f5f5;">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
               <div class="filmoja-heading">
                  <h2>Explore <span>  </span></h2>
               </div>
            </div>
            <!--~~~~~ Start Section title ~~~~~-->

             </div><!--./ row -->

             <div class="row">
                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/1.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                     <a href="#" class="">
                                             <i class="fa fa-star" style="font-size: 15px;"></i>
                                         </a>

                                 </div>
                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->

                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->

                     <div class="news-side-text ">
                        <h4>

                        <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="nightlife">easy</a></span>


                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->

                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item status-closed">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/2.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">

                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->

                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->

                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                          <div class="news-side-text ">
                        <h4>



                        <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="restaurant">Inter.</a></span>

                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->

                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/3.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">

                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                        <div class="news-side-text ">
                        <h4>



                         <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="fitness">Hard</a></span>

                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->

                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/4.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">
                                 <div class="todo-type-cat">
                                     <a href="#" class="">
                                             <i class="fa fa-star" style="font-size: 15px;"></i>
                                         </a>

                                 </div>
                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                         <div class="news-side-text ">
                        <h4>



                         <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="nightlife">easy</a></span>

                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->

                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item status-closed">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/5.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">

                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                         <div class="news-side-text ">
                        <h4>



                        <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="restaurant">Inter.</a></span>

                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->
<style type="text/css">
.save .fa{
   color:white;

}
.save .fa:hover{
   color: #ffa424;
}

</style>
                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/6.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">
                                 <div class="todo-type-cat">
                                     <a href="#" class="">
                                             <i class="fa fa-star" style="font-size: 15px;"></i>
                                         </a>

                                 </div>
                                 <div class="todo-meta-bottom">


                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                         <div class="news-side-text ">
                        <h4>


                        <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="fitness">Hard</a></span>

                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->




                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/4.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">

                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                         <div class="news-side-text ">
                        <h4>



                         <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="nightlife">easy</a></span>


                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->

                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item status-closed">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/5.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">
                                <div class="todo-type-cat">
                                     <a href="#" class="">
                                             <i class="fa fa-star" style="font-size: 15px;"></i>
                                         </a>

                                 </div>
                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                         <div class="news-side-text ">
                        <h4>




                         <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="restaurant">Inter.</a></span>


                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->

                 <!--~~~~~ Start Todo Item ~~~~~-->
                 <div class="col-lg-4 col-md-6">
                     <div class="todo-item">
                         <div class="todo-thumbnail-area">
                             <figure class="item-thumb">
                             <img src="{{asset('demos/filmoja-view/assets/img/todo/6.jpg')}}" alt="Thmubnail">
                             </figure><!--./ item-thumb -->
                             <div class="todo-overlay-info">

                                 <div class="todo-meta-bottom">

                                     <div class="save">
                                         <a href="#" class="">
                                             <i class="fa fa-heart"></i>
                                         </a>
                                     </div><!--./ save -->
                                     <div class=" save share" style="float: right;">
                                         <a href="#" class="">
                                             <i class="fa fa-paper-plane" style="color: #ffa424;"></i>
                                         </a>
                                     </div><!--./ share -->
                                 </div><!--./ todo-meta-bottom -->
                             </div><!--./ section-header -->
                         </div><!--./ todo-overlay-info -->
                         <div class="news-side-text ">
                        <h4>




                         <span style="font-size: 14px;"> <a href="#"><i class="fa fa-thumbs-up" style="color: #ec7532;"></i> 56 &nbsp; &nbsp;</a></span>
                         <span style="font-size: 16px;"><a href="#">#Make-up Contest &nbsp; &nbsp; </a></span> <span class="todo-type-cat" ><a href="#" class="fitness">Hard</a></span>

                       </h4>


                     </div>
                     </div>
                 </div><!--~./ end todo item ~-->


            </div>
         </div>

      </div>

   </section>
   <!-- Theater Area End -->

   <!-- Quote Area Start -->
   <section class="filmoja-quote-area section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="quote-box">
                  <h4>Alert!!!</h4>
                  <h3>Win Amazing Prizes,</h3>
                  <h3 style="font-size: 40px;">Participating in a contest</h3>
                  <a href="#" class="mouse-icon hidden-sm"><span class="wheel"><i class="fa fa-long-arrow-down"></i></span></a><br>
                  <button class="btn btn-primary"> <a href="#" style="color: white;"> Click here now</a> </button>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Quote Area End -->

</section>




<!-- Footer Area Start -->
<footer id="footer" class="filmoja-footer-area">
   <div class="footer-top-area section_70">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="single-footer-widget">
                  <a href="#"><img src="demos/filmoja-view/assets/img/footer_logo.png" alt="footer logo" /></a>
                  <p>5th Avenue st, manhattan</p>
                  <p>New York, NY 10001</p>
                  <div class="footer-contact">
                     <p>mail us: <a href="#">support@flixgo.com</a></p>
                     <p>call us: <a href="#">+1 (800) 234-5678</a></p>
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-sm-6">
               <div class="single-footer-widget">
                  <h3>quick links</h3>
                  <ul>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>about filmoja</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>Rewards</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>contest</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>Pricing Plan</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>Terms & Conditions</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>Privacy policy</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="single-footer-widget">
                  <h3>account</h3>
                  <ul>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>My Account</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>Watchlist</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>Collections</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right"></i>User Guide</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
