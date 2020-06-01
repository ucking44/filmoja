@extends('layouts.dashboard')
@section('content')
<!-- Breadcrumb Area Start -->
<section class="filmoja-breadcrumb-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="breadcrumb-box" style="height: 250px;"><br><br><br><br>
                <h2>Upload Cover Picture</h2>
                <div class="upload-btn-wrapper dd">
                   <button class="btn" style="padding: 7px 12px;">Upload</button>
                     <input type="file" name="myfile" />
                 </div>


<style type="text/css">

</style>
             </div>
          </div>
       </div>
    </div>
 </section>

 <!-- Breadcrumb Area End -->
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
   MAIN CONTENT
   *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
 <section class="wrapper bz">
   <div class="row">
     <div class="col-lg-9 main-chart" style=" padding-right: 0 !important;">
      <div>
      <ul class="nav nav-tabs" style="margin: 0 15px; border-radius: 8px;">

<li class="active"><a data-toggle="tab" href="#home">Watchlist</a></li>
<li> <a data-toggle="tab" href="#menu1">Explore</a></li>
<li><a  href="{{url('dashboard/upload_challenge')}}">Upload</a></li>


<style type="text/css">
.nav-tabs li{
margin-right: auto;
margin-left: auto;
}
</style>

</ul></div><br><br>

<script type="text/javascript">
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
var dropdowns = document.getElementsByClassName("dropdown-content");
var i;
for (i = 0; i < dropdowns.length; i++) {
 var openDropdown = dropdowns[i];
 if (openDropdown.classList.contains('show')) {
   openDropdown.classList.remove('show');
 }
}
}
}
</script>

<style type="text/css">
/* Dropdown Button */
.dropbtn {
background-color: transparent;
color: #555;
padding: 10px;

border: none;
cursor: pointer;
text-decoration:none;
line-height: 1.42857143;
border: 1px solid transparent;
border-radius: 4px 4px 0 0;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
 text-decoration: none;
background-color: #eee;
cursor: default;
border: 1px solid #ddd;
border-bottom-color: transparent;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
float: right;
text-align: center;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 4;

}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>


<div class="tab-content" >
<div id="home" class="tab-pane fade in active">
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
                                  <img src="demos/filmoja-view/assets/img/todo/4.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/5.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/6.jpg" alt="Thmubnail">
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
<div id="menu1" class="tab-pane fade">
<!--~~~~~ Start Todo Item ~~~~~-->
                  <div class="col-lg-4 col-md-6">
                      <div class="todo-item">
                          <div class="todo-thumbnail-area">
                              <figure class="item-thumb">
                                  <img src="demos/filmoja-view/assets/img/todo/1.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/2.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/3.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/4.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/5.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/6.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/4.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/5.jpg" alt="Thmubnail">
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
                                  <img src="demos/filmoja-view/assets/img/todo/6.jpg" alt="Thmubnail">
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
     <!-- /col-lg-9 END SECTION MIDDLE -->
     <!-- **********************************************************************************************************************************************************
         RIGHT SIDEBAR CONTENT
         *********************************************************************************************************************************************************** -->

     <div class="col-lg-3" style="margin-bottom: 130px; padding-right: 25px; padding-left: 20px;">

        {{-- <div id="space">
        <br><br><br><br><br><br><br><br>
        </div> --}}

       <div class="ds" style="border-radius: 8px;">
       <!-- RECENT ACTIVITIES SECTION -->
       <h4 class="centered " >#TRENDS</h4>
       <!-- First Activity -->
       <div class="desc">
         <div class="thumb">
           <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
         </div>
         <div class="details">
           <p>
             <muted>Just Now</muted>
             <br/>
             <a href="#">Paul Rudd</a> purchased an item.<br/>
           </p>
         </div>
       </div>
       <!-- Second Activity -->
       <div class="desc">
         <div class="thumb">
           <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
         </div>
         <div class="details">
           <p>
             <muted>2 Minutes Ago</muted>
             <br/>
             <a href="#">James Brown</a> subscribed to your newsletter.<br/>
           </p>
         </div>
       </div>
       <!-- Third Activity -->
       <div class="desc">
         <div class="thumb">
           <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
         </div>
         <div class="details">
           <p>
             <muted>3 Hours Ago</muted>
             <br/>
             <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
           </p>
         </div>
       </div>
       <!-- Fourth Activity -->
       <div class="desc">
         <div class="thumb">
           <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
         </div>
         <div class="details">
           <p>
             <muted>7 Hours Ago</muted>
             <br/>
             <a href="#">Brando Page</a> purchased a year subscription.<br/>
           </p>
         </div>
       </div>
       <br> </div> <br><br>
       <style type="text/css">
         .details a{
           color: black;
         }

       </style>
      <!-- USERS ONLINE SECTION -->
  @include('dashboard.partials.onlineUsers', compact('users'))

     </div>
     <!-- /col-lg-3 -->
     <div class="col-lg-2"></div>
   </div>
   <!-- /row -->
 </section>
</section>
<style type="text/css">
 .wo_follow_btn {
background: linear-gradient(to right,#4ecdc4 0,#4ecdc4 100%)!important;
}
</style>
<!--main content end-->

@endsection
