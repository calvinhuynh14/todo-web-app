<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

Route::get('/', function () {
    return view('login');
});

Route::controller(UserAuthController::class)->group(function () {

    Route::get('/register', 'displayRegister');

    Route::post('/register', 'registerUser');


});
