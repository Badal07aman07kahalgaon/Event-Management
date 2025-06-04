<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::resource('events', EventController::class);
Route::get('/', function () {
    return redirect()->route('events.index');
});
