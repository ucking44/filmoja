<div id="following-list" class="row" style="margin: 0;">

    @if($data->count() > 0)

    @foreach($data as $dat)
    <div class="col-xs-6 col-sm-4 nearby_user_wrapper text-center user-data">
    <div class="avatar">
    <img src="{{asset('demos/filmoja-view/assets/img/ui-sam.jpg')}}" alt="Ajani Kafayat Profile Picture">
         <span class="sun_status mini offline" title="13 days ago"></span>
       </div>

    <a href="#" class="user_wrapper_link">{{$dat->user2->name}}</a>
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
