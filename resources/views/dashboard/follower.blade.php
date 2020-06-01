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
 </section>
 <!-- Breadcrumb Area End -->
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
   MAIN CONTENT
   *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
 <section class="wrapper">
   <!-- page start-->
   <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">

             <div class="list-group profile-lists sun_side_widget">

     <h3 class="sun_side_widget_title mainpage" >
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#8d73cc" d="M16,13C15.71,13 15.38,13 15.03,13.05C16.19,13.89 17,15 17,16.5V19H23V16.5C23,14.17 18.33,13 16,13M8,13C5.67,13 1,14.17 1,16.5V19H15V16.5C15,14.17 10.33,13 8,13M8,11A3,3 0 0,0 11,8A3,3 0 0,0 8,5A3,3 0 0,0 5,8A3,3 0 0,0 8,11M16,11A3,3 0 0,0 19,8A3,3 0 0,0 16,5A3,3 0 0,0 13,8A3,3 0 0,0 16,11Z"></path></svg>  Followers           <span>

       </span>
     </h3>
     <div id="followers_show_action">

     <div id="following-list" class="row" style="margin: 0;">

  @if($followers->count() > 0)

 @foreach($followers as $item)
        <div class="col-xs-6 col-sm-4 nearby_user_wrapper text-center user-data">
        <div class="avatar">
        <img src="{{asset('demos/filmoja-view/assets/img/ui-sam.jpg')}}" alt="Ajani Kafayat Profile Picture">
        <span class="sun_status mini Auth::user()? 'online' : 'offline'" title="13 days ago"></span>
        </div>

    <a href="#" class="user_wrapper_link">{{$item->user1->name}}</a>
        <div class="user-follow-button">

        <button onclick="processData('{{$item->user1->id}}', 'unfollow', {{$item->user1->id}})" type="button" class="btn btn-default btn-sm wo_follow_btn" id="wo_useract_btn">
        <i class="fa fa-user-plus"></i>
        <span class="button-text"> Following</span>
        </button>
        </div>
        </div>
@endforeach
@else
  <div class="col-md-12 text-center alert">
    <p style="color: red;">You currently have no followers.</p>
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

@stop
