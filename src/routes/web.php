<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


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
    return view('welcome');
});

Route::get('/store', function () {
    Redis::set('Bankok','Krung Thep');
});

Route::get('/retrieve', function () {
    return Redis::get('Bankok');
});

// Test Mailhog
Route::get('/send-email', function() {
    Mail::to('Nutthanun@local.dev')->send(new TestMail);
});
