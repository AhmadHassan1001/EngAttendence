<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendsController;
use App\Models\Friend;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getfriends',[FriendsController::class,'getFriends']);
Route::get('users/{name}', function ($name) {
    $frnd=new Friend;
    $frnd->title=$name;
    frnd->save();
});
Route::put('changestate/{id}',[FriendsController::class,'changeState']);
