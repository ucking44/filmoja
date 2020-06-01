@extends('layouts.dashboard')
@section('content')

<section class="filmoja-breadcrumb-area section_70">
    <div class="container">
       <div class="row">
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
<!--main content start-->
<section id="main-content">
 <section class="wrapper">
   <!-- page start-->
   <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     <div class="wo_settings_page sun_sett_page">
  <h3 style="text-align: center;">Deposit</h3>

<form class="setting-general-form form-horizontal" method="POST" action="{{ route('pay') }}">
    @csrf
<div class="setting-general-alert setting-update-alert"></div>
<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
</div>
<div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
</div>
<div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name">
</div>
<input type="hidden" name="amount" value="4500" />
<input type="hidden" name="description" value="Flutterwave Jersey" />
<button type="submit" class="btn btn-primary">Checkout and Pay</button>

<!-- Text input-->
<div class="setting-panel row" style="padding-bottom: 0;">


 {{-- <div class="sun_input col-lg-6">
   <input name="amount" type="text" class="form-control input-md" placeholder="Username">
   <label class="plr15" for="amount">Amount</label>

 </div> --}}

 {{-- <div class="sun_input col-lg-3">
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
 </div> --}}

 <div class="clear"></div>




</div>




  {{-- <div class="form-group last-sett-btn modal-footer lo">
 <div class="ball-pulse"><div></div><div></div><div></div></div><br>
  <button type="submit" class="btn btn-main setting-panel-mdbtn kk" id="update_user_data" style="">Deposit history</button>

 <button type="submit" class="btn btn-main setting-panel-mdbtn " id="update_user_data" >Continue</button>
    </div><br> --}}
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


 </section>
 <!-- /wrapper -->
</section>


@stop




