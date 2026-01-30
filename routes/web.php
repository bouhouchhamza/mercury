<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GroupController;

Route::get('/', function () {
    return redirect()->route('contacts.index');
});
Route::resource('groups',GroupController::class);
Route::resource('contacts', ContactController::class);


