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

Route::get('/', function () {
    return view('welcome');
});

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

Route::get('contactanos', function () {
    $correo = new ContactanosMailable;

    Mail::to('carloskael32@gmail.com')->send($correo);
    return "mensaje enviado";
});