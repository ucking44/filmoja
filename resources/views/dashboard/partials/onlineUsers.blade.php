<div id="searchResult">
<div class="ds" style="border-radius: 8px;">
    <h4 class="centered mt">RECOMMENDED TO FOLLOW</h4>
    <!-- First Member -->

    @foreach($users as $people)
    <div class="desc">
      <div class="thumb">
      <img class="img-circle" src="{{asset('demos/filmoja-view/assets/img/ui-divya.jpg')}}" width="35px" height="35px">
      </div>
      <div class="details">
        <p>
        <a href="#" style="padding-left: 5px;"><strong>{{$people->name}}</strong></a>

        @if(isfollowing($people->id) == 'following')
        <button onclick="processData('{{$people->id}}', 'removefollow', {{$people->id}})" type="button" class="btn btn-default btn-sm wo_follow_btn pull-right" id="wo_useract_btn" style="">
        <i class="fa fa-user-plus"></i>
        <span class="button-text"> Followed</span>
        </button>
      @elseif(isfollowing($people->id) == 'follower')
        <button onclick="processData('{{$people->id}}', 'unfollow', {{$people->id}})" type="button" class="btn btn-default btn-sm wo_follow_btn pull-right" id="wo_useract_btn" style="">
          <i class="fa fa-user-plus"></i>
          <span class="button-text"> Following</span>
          </button>
      @else

      <button onclick="processData('{{$people->id}}', 'follow', {{$people->id}})" type="button" class="btn btn-default btn-sm wo_follow_btn pull-right" id="wo_useract_btn" style="">
          <i class="fa fa-user-plus"></i>
          <span class="button-text"> Follow</span>
          </button>
      @endif
        </p>
      </div>
    </div>
    @endforeach
    </div>
</div>
