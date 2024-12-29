<?php

use Illuminate\Support\Facades\Route;



Route::get('/', fn() => view('layouts.app'));
Route::get('/login', fn() => view('layouts.login'));