<?php

use App\Http\Controllers\ConversationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParticipantsController;
use App\Models\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("/login ",[LoginController::class,'authenticate']);
Route::post("/register",[LoginController::class,'register']);
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::resource('/conv',ConversationController::class);
    Route::resource('/participants',ParticipantsController::class);
});
