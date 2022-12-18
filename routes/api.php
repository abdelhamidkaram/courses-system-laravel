<?php

use App\Http\Controllers\api\auth\LoginController as AuthLoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\api\auth;
use App\Http\Controllers\api\auth\ProfileController;
use App\Services\UserServices;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
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

Route::prefix('auth')->group(function () {

    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [AuthLoginController::class, 'login']);


});

Route::middleware(['auth:sanctum'])->group(function (){
     Route::prefix('profile')->group(function()
     {
         Route::get('/',[ ProfileController::class , 'index']);
         Route::post('/edit',[ ProfileController::class , 'edit']);
         Route::delete('/delete',[ ProfileController::class , 'delete']);
         
     });



});
