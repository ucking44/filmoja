@extends('layouts.dashboard')
@section('content')

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
    </div>
 </section>
 <!-- Breadcrumb Area End -->
<!--sidebar end-->

<section id="main-content">
 <section class="wrapper">
   <!-- page start-->
   <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">

             <div class="list-group profile-lists sun_side_widget">
     <h3 class="sun_side_widget_title mainpage">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#009da0" d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z"></path></svg> Following           <span>

       </span>
     </h3>
     <div id="following_show_action">
     <div id="following-list" class="row" style="margin: 0;">

@if($following->count() > 0)

@foreach($following as $data)
<div class="col-xs-6 col-sm-4 nearby_user_wrapper text-center user-data">
<div class="avatar">
<img src="{{asset('demos/filmoja-view/assets/img/ui-sam.jpg')}}" alt="Ajani Kafayat Profile Picture">
     <span class="sun_status mini offline" title="13 days ago"></span>
   </div>

<a href="#" class="user_wrapper_link">{{$data->user2->name}}</a>
<div class="user-follow-button">
<span title="unfollow">
<button type="button" class="btn-active btn btn-default btn-sm wo_following_btn" id="wo_useract_btn">
  <i class="fa fa-user"></i>
  <span class="button-text"> Followed</span>
</button>
</span></div>
</div>
@endforeach
@else
<div class="col-md-12 text-center alert">
    <p style="color: red;">You are not currently following anyone.</p>
 </div>

@endif

</div>
</div>
</div>
</div>
</div>
   </div>
 </section>
 <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection
