<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
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

Route::post("/v1/register",[AuthController::class,'register'])->name('register');
Route::post('/v1/verification',[AuthController::class,'verification'])->name('verification');
Route::post("/v1/login",[AuthController::class,'login'])->name('login');
Route::group(['middleware'=>'auth:api'],function (){
    Route::get("/v1/user",[AuthController::class,'user'])->name('user');
    Route::post('/v1/payment',[PaymentController::class,'stripePayment'])->name('stripePayment');
    Route::get('/v1/success-payment', function (){
        return "payment Successfully done";
    })->name('stripform');

    Route::get('/v1/mylogout',[AuthController::class,'mylogout'])->name('mylogout');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
