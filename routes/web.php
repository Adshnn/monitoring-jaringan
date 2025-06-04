<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SheetdbController;

Route::get('/', [SheetdbController::class, 'getharian']);
Route::get('/get', [SheetdbController::class, 'getharian']);

Route::get('/1', function () {
    return view('copywelcome');
});
