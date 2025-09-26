<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\OrganizationController;

Route::resource('organizations', OrganizationController::class);
