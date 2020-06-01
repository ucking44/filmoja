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
 <section class="wrapper" >
   <!-- page start-->

    <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10" style="padding-top: 0;">

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



   <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     <div class="wo_settings_page sun_sett_page">
  <h3 style="text-align: center;">Withdraw Cash</h3>

<form class="setting-general-form form-horizontal" method="post">
<div class="setting-general-alert setting-update-alert"></div>

<!-- Text input-->
<div class="setting-panel row" style="padding-bottom: 0;">


 <div class="sun_input col-lg-6">
   <input name="amount" type="text" class="form-control input-md" placeholder="Username">
   <label class="plr15" for="amount">Amount</label>

 </div>

 <div class="sun_input col-lg-3">
   <select id="currency" name="currency" class="form-control" style="margin-top: 0;">
           <option  data-subtext="United Arab Emirates dirham" value="">AED</option>
                 <option  data-subtext="Argentine peso" value="">ARS</option>
                 <option  data-subtext="Australian dollar" value="">AUD</option>
                 <option  data-subtext="Bangladeshi taka" value="">BDT</option>
                 <option  data-subtext="Bulgarian lev" value="">BGN</option>
                 <option  data-subtext="Brazilian real" value="">BRL</option>
                 <option  data-subtext="Canadian dollar" value="">CAD</option>
                 <option  data-subtext="Swiss franc" value="">CHF</option>
                 <option  data-subtext="Chilean peso" value="">CLP</option>
                 <option  data-subtext="Chinese yuan" value="">CNY</option>
                 <option  data-subtext="Czech koruna" value="">CZK</option>
                 <option  data-subtext="Danish krone" value="">DKK</option>
                 <option  data-subtext="Egyptian pound" value="">EGP</option>
                 <option  data-subtext="Euro" value="">EUR</option>
                 <option  data-subtext="British pound" value="">GBP</option>
                 <option  data-subtext="Georgian lari" value="">GEL</option>
                 <option  data-subtext="Ghanaian cedi" value="">GHS</option>
                 <option  data-subtext="Hong Kong dollar" value="">HKD</option>
                 <option  data-subtext="Croatian kuna" value="">HRK</option>
                 <option  data-subtext="Hungarian forint" value="">HUF</option>
                 <option  data-subtext="Indonesian rupiah" value="">IDR</option>
                 <option  data-subtext="Israeli shekel" value="">ILS</option>
                 <option  data-subtext="Indian rupee" value="">INR</option>
                 <option  data-subtext="Japanese yen" value="">JPY</option>
                 <option  data-subtext="Kenyan shilling" value="">KES</option>
                 <option  data-subtext="South Korean won" value="">KRW</option>
                 <option  data-subtext="Sri Lankan rupee" value="">LKR</option>
                 <option  data-subtext="Moroccan dirham" value="">MAD</option>
                 <option  data-subtext="Mexican peso" value="">MXN</option>
                 <option  data-subtext="Malaysian ringgit" value="">MYR</option>
                 <option  data-subtext="Nigerian naira" selected="selected" value="">NGN</option>
                 <option  data-subtext="Norwegian krone" value="">NOK</option>
                 <option  data-subtext="Nepalese rupee" value="">NPR</option>
                 <option  data-subtext="New Zealand dollar" value="">NZD</option>
                 <option  data-subtext="Peruvian nuevo sol" value="">PEN</option>
                 <option  data-subtext="Philippine peso" value="">PHP</option>
                 <option  data-subtext="Pakistani rupee" value="">PKR</option>
                 <option  data-subtext="Polish złoty" value="">PLN</option>
                 <option  data-subtext="Romanian leu" value="">RON</option>
                 <option  data-subtext="Russian rouble" value="">RUB</option>
                 <option  data-subtext="Swedish krona" value="">SEK</option>
                 <option  data-subtext="Singapore dollar" value="">SGD</option>
                 <option  data-subtext="Thai baht" value="">THB</option>
                 <option  data-subtext="Turkish lira" value="">TRY</option>
                 <option  data-subtext="Ukrainian hryvnia" value="">UAH</option>
                 <option  data-subtext="Ugandan shilling" value="">UGX</option>
                 <option  data-subtext="Vietnamese dong" value="">VND</option>
                 <option  data-subtext="South African rand" value="">ZAR</option>
                 </optgroup>
             </select>
   <label class="plr15" for="country">Currency</label>
 </div>

 <div class="clear"></div>

 <div class="sun_input col-lg-6">
   <select id="paymentmethod" name="paymentmethod" class="form-control" style="margin-top: 0;">

                  <option value="">Select Payment Method</option>
             <option>Paypal</option>
             <option>Bank Accounts</option>
             <option>Stripe</option>
             <option>Paystack</option>
                 </optgroup>
             </select>
   <label class="plr15" for="country">Payment Method</label>
 </div>

 <div class="sun_input col-lg-5" style="padding: 5px;">
   <p class="text-muted mt-4">Transactions fees: <span>10.00 % </span></p>
 </div>

</div>




<div class="form-group last-sett-btn modal-footer lo">
 <div class="ball-pulse"><div></div><div></div><div></div></div><br>
  <button type="submit" class="btn btn-main setting-panel-mdbtn kk" id="update_user_data" style="">Withdraw history</button>

 <button type="submit" class="btn btn-main setting-panel-mdbtn " id="update_user_data" >Continue</button>
    </div><br>
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
@media only screen and (min-width: 1170px) {
.kk{
float: left;
}
}

</style>
</form>
</div>



</div>
   </div>

<!-- desposit history


    <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">

       <div class="content-panel">
         <h4><i class="fa fa-angle-right"></i> Deposit History</h4>
         <section id="unseen">
           <table class="table table-bordered table-striped table-condensed">
             <thead>
               <tr>


                 <th class="numeric">Trx</th>
                 <th class="numeric">Date</th>
                 <th class="numeric">Payment method</th>
                 <th class="numeric">Amount</th>
                 <th class="numeric">Status</th>

               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>TRX-156705898536</td>
                 <td class="numeric">25th july 2020</td>
                 <td class="numeric">Stripe</td>
                 <td class="numeric">3695 NGN</td>
                 <td class="numeric"><span class="badge badge-success">Success</span></td>
                 <style type="text/css">
                   .badge-success {
                     color: #fff;
                     background-color: #28a745;
                     }
                     .badge-warning {
                     color: #212529;
                     background-color: #ffc107;
}
                 </style>

               </tr>
               <tr>
                 <<td>TRX-156705898536</td>
                 <td class="numeric">25th july 2020</td>
                 <td class="numeric">Paystack</td>
                 <td class="numeric">3695 NGN</td>
                 <td class="numeric"><span class="badge badge-warning">Pending</span></td>

               </tr>
               <tr>
                 <td>TRX-156705898536</td>
                 <td class="numeric">25th july 2020</td>
                 <td class="numeric">Paypal</td>
                 <td class="numeric">3695 NGN</td>
                 <td class="numeric"><span class="badge badge-success">Success</span></td>
               </tr>
               <tr>
                 <td>TRX-156705898536</td>
                 <td class="numeric">25th july 2020</td>
                 <td class="numeric">Bank Transfer</td>
                 <td class="numeric">3695 NGN</td>
                 <td class="numeric"><span class="badge badge-warning">Pending</span></td>
               </tr>
               <tr>
                <td>TRX-156705898536</td>
                 <td class="numeric">25th july 2020</td>
                 <td class="numeric">Paystack</td>
                 <td class="numeric">3695 NGN</td>
                 <td class="numeric"><span class="badge badge-success">Success</span></td>
               </tr>

             </tbody>
           </table>
         </section>
       </div>



     </div></div>



-->
 </section>
 <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


@stop
