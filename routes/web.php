<?php

use App\Events\SiteVisited;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    SiteVisited::broadcast();
    return view('welcome');
});
