<?php

use App\Http\Controllers\diploma\web\webController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\team\teamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('home');
});

// home page route get
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // route get team page
    Route::get('/team', [teamController::class, 'team'])->name('team');

    // diploma route get add page
    Route::get('addWebSession', [webController::class, 'index'])->name('add.web');
});
