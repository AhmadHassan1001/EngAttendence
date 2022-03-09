<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendsController extends Controller
{
    //
    public function getFriends(){
        $friends=Friend::all();
        return response()->json(['status'=>'success','friends'=>$friends]);
    }
    public function changeState($id){
        $friend=Friend::find($id);
        $friend->alive=!($friend->alive);
        $friend->save();
        return response()->json(['status'=>'success','friend'=>$friend]);
    }
}
