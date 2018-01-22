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

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/no-sidebar', function () {
    return view('no-sidebar');
});

Route::get('/left-sidebar', function () {
    return view('left-sidebar');
});

Route::get('/right-sidebar', function () {
    return view('right-sidebar');
});

Route::resources([
    'member' => 'UserController'
]);
/* Route::get('/', function () {
    return App\User::create([
        'name' => 'Jane',
        'email' => 'john@jane.com',
        'password' => bcrypt('password'),
    ]);
}); */