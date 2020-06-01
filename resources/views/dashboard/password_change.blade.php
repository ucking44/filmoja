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
        <style type="text/css">
  .lo .btn-main {
color: #ffffff;
background-color: #4d91ea;
border-color: #4d91ea;
}
.lo .btn-main:hover {
color: #ffffff;
background-color: #2e7be5;
border-color: #2e7be5;
}
</style>
<!--main content start-->
<section id="main-content">
 <section class="wrapper">
   <!-- page start-->
   <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">

    <div class="wo_settings_page sun_sett_page">
<h3 style="text-align: center;">Change Password</h3>

<form class="form-horizontal setting-change-password-form">
<div class="setting-password-alert setting-update-alert"></div>

<!-- Form Name -->
<div class="setting-panel row">
       <!-- Password input-->
 <div class="sun_input col-lg-12">
   <input id="current_password" name="current_password" type="password" class="form-control input-md" placeholder="Current Password">
   <label class="plr15" for="current_password">Current Password</label>
 </div>
       <!-- Password input-->
 <div class="sun_input col-lg-6">
   <input id="new_password" name="new_password" type="password" class="form-control input-md" placeholder="New password">
   <label class="plr15" for="new_password">New password</label>
         </div>
 <!-- Password input-->
 <div class="sun_input col-lg-6">
   <input id="repeat_new_password" name="repeat_new_password" type="password" class="form-control input-md" placeholder="Repeat password">
   <label class="plr15" for="repeat_new_password">Repeat password</label>
 </div>

</div>

<div class="form-group last-sett-btn modal-footer lo" >
 <div class="ball-pulse"><div></div><div></div><div></div></div>
 <button type="submit" class="btn btn-main setting-panel-mdbtn">Save</button>

    </div>
</form>
</div>
</div>


</div>
   </div>
 </section>
 <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
 <!-- Footer Area Start -->


@stop
