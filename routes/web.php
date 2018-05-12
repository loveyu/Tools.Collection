<?php

use Illuminate\Support\Facades\Route;

/** @uses \App\Http\Controllers\Web\Welcome::index() */
Route::get('/', 'Web\Welcome@index');