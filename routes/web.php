<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);

// Redirect for homepage
Route::get('', fn() => to_route('jobs.index'));
