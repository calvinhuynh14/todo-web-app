<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ManageController;
Route::get('/', function () {
    return view('login');
});

Route::controller(UserAuthController::class)->group(function () {

    Route::get('/login', 'displayLogin');

    Route::post('/login_attempt', 'authenticate');

    Route::get('/register', 'displayRegister');

    Route::post('/register', 'registerUser');

});

Route::controller(ManageController::class)->group(function () {

    Route::get('/manage', 'displayManage');

});
