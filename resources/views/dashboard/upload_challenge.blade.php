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
               <div class="col-md-10 singlecol wo-create-forms">
 <div class="wo_settings_page">


    <form class="form form-horizontal create-article-form" method="post" id="insert-blog" action="https://swirge.com/create-blog/#">
     <div class="setting-panel row">
     <br>

       <div class="create_blog_area_acombo">
       <div class="form-group th-alert col-sm-7">
         <div class="col-md-12">
           <div class="main prv-img pointer" id="select-img" data-block="thumdrop-zone">
             <div class="thumbnail-rendderer">
               <div>
                 <h4 class="bold">Drop Video Here</h4>
                 <div class="error-text-renderer"></div>
                 <div>
                   <span>OR</span>
                   <p>Browse To Upload</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-5 no-padding-right">
         <div class="form-group col-lg-12">
         <label class="col-md-12" for="blog_category">Challenge Category</label>
         <div class="col-md-12">
           <select name="blog_category" class="form-control" id="blog_category">
             <option value="0">
             Easy                  </option>
                               <option value="2">
             Intermidiate                 </option>
                               <option value="3">
            Hard                 </option>

                             </select>
         </div>
       </div>
       <div class="form-group col-lg-12">
         <label class="col-md-12" for="blog_tags">Tags</label>
         <div class="col-md-12">
           <div class="bootstrap-tagsinput"><input type="text" placeholder="Example #football"></div>
         </div>
       </div>
                  </div>
       </div>


       <input type="file" class="hidden" id="thumbnail" name="thumbnail" accept="image/*">
     </div>


     <div class="setting-update-alert" id="blog-alert"></div>

     <div class="form-group last-sett-btn modal-footer lo">
       <div class="ball-pulse"><div></div><div></div><div></div></div>
        <button type="submit" class="btn btn-main setting-panel-mdbtn" id="update_user_data">Upload</button>
     </div>

   </form></div></div>

</div>
</div>



   </div>
<style type="text/css">
  .lo .btn-main {
color: #ffffff;
background-color: #4d91ea;
border-color: #4d91ea;
}
.lo .btn-main:hover {
color: #ffffff;
background-color: #2e7be5 !important;
border-color: #2e7be5;
}
</style>


 </section>
 <!-- /wrapper -->
</section>
@stop
