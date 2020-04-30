<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// 1: Public Routes



// 2: Route Group for Guests uesrs only
Route::group([ 'middleware' => ['guest:api'] ], function () {
    // TODO
});

// 3: Route Group for authenticated uesrs only
Route::group([ 'middleware' => ['auth:api'] ], function () {

    // Register New User
    Route::post('register', 'Auth\RegisterController@register');
    
});

