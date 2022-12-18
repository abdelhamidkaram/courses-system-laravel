<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\auth\ProfileController;
use App\Http\Controllers\LinkController;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', function () {
            Debugbar::info('info');
            return view('welcome');
        })->name('/');
        Auth ::routes(['verify'=>true]);
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
        Route::get('/profile' , [ProfileController::class , 'index'])->name('profile');
        Route::post('/profile/update' , [ProfileController::class , 'update'])->name('update-user');
        Route::post('/' , [AddressController::class , 'index'])->name('add-address');
        Route::post('/profile/upload-profile-photo' , [ProfileController::class ,'addProfilePhoto'])->name('edit-photo');
        Route::post('/profile/add-links' , [LinkController::class , 'index'])->name('add-links');

    }
);


Route::get('test' , function(){
    $user = User::find(11);
   return $user->billingAddress;
   
});