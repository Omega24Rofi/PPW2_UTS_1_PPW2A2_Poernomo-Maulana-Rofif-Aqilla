<?php

use App\Http\Controllers\mu_player_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mu_player', [mu_player_controller::class, 'index']);
