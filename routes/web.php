<?php

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $users = User::all();

    dd(Cache::get('users'));

    return view('welcome');
});
