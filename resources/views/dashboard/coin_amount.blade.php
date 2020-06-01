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
<h3 style="text-align: center;">Amount of Coin</h3>

   <div class="list-group wo_ads_wallet page-margin">
   <div class="row ml0 mr0">
   <div class="col-sm-6 col-md-6 my_wallet text-center">
     <div class="form-group w100">
       <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-wallet" width="24" height="24" viewBox="0 0 24 24" fill="#77442B"><path d="M21,18V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H19A2,2 0 0,1 21,5V6H12C10.89,6 10,6.9 10,8V16A2,2 0 0,0 12,18M12,16H22V8H12M16,13.5A1.5,1.5 0 0,1 14.5,12A1.5,1.5 0 0,1 16,10.5A1.5,1.5 0 0,1 17.5,12A1.5,1.5 0 0,1 16,13.5Z"></path></svg>
       <div class="col-md-12">
         <label class="col-md-12 bold">Current Coin balance</label>
         <h2>
           <span></span>
           <b>332.40</b>
         </h2>
       </div>
     </div>
     <div class="w100">
       <label class="col-md-12"></label>
       <div class="col-md-12">
         <button data-toggle="modal" data-target="#send_money_modal" class="btn btn-default">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg> Exchange to cash</button>
       </div>
     </div>
   </div>

<div class="col-sm-6 col-md-6 my_wallet text-center">
     <div class="form-group w100">
      <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-wallet" width="24" height="24" viewBox="0 0 24 24"><path fill="#3f51b5" d="M5,6H23V18H5V6M14,9A3,3 0 0,1 17,12A3,3 0 0,1 14,15A3,3 0 0,1 11,12A3,3 0 0,1 14,9M9,8A2,2 0 0,1 7,10V14A2,2 0 0,1 9,16H19A2,2 0 0,1 21,14V10A2,2 0 0,1 19,8H9M1,10H3V20H19V22H1V10Z"></path></svg>
       <div class="col-md-12">
         <label class="col-md-12 bold">Current Cash balance</label>
         <h2>
           <span>₦</span>
           <b>3320.40</b>
         </h2>
       </div>
     </div>
     <div class="w100">
       <label class="col-md-12"></label>
       <div class="col-md-12">
         <button data-toggle="modal" data-target="#send_money_modal" class="btn btn-default">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg> Exchange to coin</button>
       </div>
     </div>
   </div>
 </div> </div>

</div>


</div>
   </div>
 </section>
 <!-- /wrapper -->
</section>


@stop
