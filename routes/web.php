<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SheetdbController;


//page welcome
Route::get('/', [SheetdbController::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/1', function () {
    return view('copywelcome');
});

