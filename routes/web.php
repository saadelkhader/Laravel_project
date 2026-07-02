<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome', ['greeting' => 'Hello',
                             'person' => request('person','world') ]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
