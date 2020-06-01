<div id="following-list" class="row" style="margin: 0;">

    @if($data2->count() > 0)

   @foreach($data2 as $item2)
          <div class="col-xs-6 col-sm-4 nearby_user_wrapper text-center user-data">
          <div class="avatar">
          <img src="{{asset('demos/filmoja-view/assets/img/ui-sam.jpg')}}" alt="Ajani Kafayat Profile Picture">
              <span class="sun_status mini offline" title="13 days ago"></span>
          </div>

      <a href="#" class="user_wrapper_link">{{$item2->user1->name}}</a>
          <div class="user-follow-button">

          <button onclick="processData('{{$item2->user1->id}}', 'unfollow', {{$item2->user1->id}})" type="button" class="btn btn-default btn-sm wo_follow_btn" id="wo_useract_btn">
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
