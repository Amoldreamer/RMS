<?php

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

Route::get('home', function () {
    return view('home');
});

Route::get('slider', function () {
    return view('slider');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('login', function () {
    return view('login');
});

Route::get('contact', function () {
    return view('contact');
});

// Route::get( "restaurant1", function () {
//     return view('restaurant1');
// });

// Route::get('restaurant2', function () {
//     return view('restaurant2');
// });

// Route::get('restaurant3', function () {
//     return view('restaurant3');
// });

// Route::get('restaurant4', function () {
//     return view('restaurant4');
// });

// Route::get('restaurant5', function () {
//     return view('restaurant5');
// });

Route::post('login','LoginController@index');

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::get('logout', 'LogoutController@index');

Route::get('add_restaurant', function(){
    return view('add_restaurant');
});

Route::post('delete', 'DeleteController@index');

Route::get('cities', function(){
    return view('cities');
});

Route::resource('restaurant','ResourceController');