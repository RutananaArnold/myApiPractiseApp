<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dd_trial\SignupController;

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

/* Register */  Route::post('register/user',[SignupController::class, 'register']);
/*Retrieving*/   Route::get('retrieve/data',[SignupController::class, 'retrieve']);
/* Retrieve an item */   Route::get('fetch/item',[SignupController::class, 'search']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
