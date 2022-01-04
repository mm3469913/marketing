<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.home');
})->name('home');

// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
// ], function () {


    
//     Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {

//         Route::get('profile',function () {
//             return "you are wlacom";});
//     });
//     Route::group(['namespace' => 'Site', 'middleware' => 'guest'], function () {

//     });


// });