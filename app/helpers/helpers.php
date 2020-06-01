<?php

//use App\followship;

function isfollowing($id){

    if(\App\followship::where('user1_id', $id)->where('user2_id', auth()->user()->id)->exists()){
        return 'follower';
    } elseif(\App\followship::where('user2_id', $id)->where('user1_id', auth()->user()->id)->exists()) {
        return 'following';
 }else{
     return 'none';
 }

}

?>
