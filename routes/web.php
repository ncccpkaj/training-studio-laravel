<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend');
});
Route::post('send-mail', [App\Http\Controllers\FrontendController::class, 'contact_mail_send']);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
