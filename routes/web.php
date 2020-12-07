<?php

use Illuminate\Support\Facades\Route;

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
//  use App\Http\Controllers\Admin\Login;


 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\Auth\LoginController;
Route::group(['prefix' => 'admin'], 

	function () {

    Auth::routes();

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::resource('propertyTypes',App\Http\Controllers\PropertyTypeController::class);
    Route::resource('propertySubTypes', App\Http\Controllers\PropertySubTypeController::class);

Route::resource('bathrooms', App\Http\Controllers\BathroomController::class);

Route::resource('bedrooms', App\Http\Controllers\BedroomController::class);

Route::resource('balconies', App\Http\Controllers\BalconyController::class);

Route::resource('floors', App\Http\Controllers\FloorController::class);
// use App\Http\Controllers\SendQueryController;
Route::resource('sendQueries', App\Http\Controllers\SendQueryController::class);

Route::resource('properties', App\Http\Controllers\PropertyController::class);
Route::post('changeUserStatus',  [App\Http\Controllers\PropertyController::class,'changeUserStatus'])->name('changeUserStatus');
    Route::get('logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

  
   
});

use App\Http\Controllers\PostAdvertisementController;
Route::get('/', [PostAdvertisementController::class,'index']);
Route::post('get_sub_type', [PostAdvertisementController::class,'get_sub_type'])->name('get_sub_type');



Route::resource('post', PostAdvertisementController::class);





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('users', App\Http\Controllers\UsersController::class);

// Route::resource('propertyTypes', App\Http\Controllers\PropertyTypeController::class);


use App\Http\Controllers\SendController;
Route::resource('postquery', App\Http\Controllers\SendController::class);