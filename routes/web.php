<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MatcheController;
use App\Http\Controllers\UserlistController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/sadmin', function () {
//     return view('admin.admin');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
// Admin Part
Route::get('userlist', [UserlistController::class, 'index']);
//Admin Part

// Partner metches
Route::get('matches-new', [MatcheController::class, 'index']);
Route::get('matche-preference', [MatcheController::class, 'setPreference']);
Route::post('sendPreference', [MatcheController::class, 'sendPreference'])->name('sendPreference');
Route::get('matches-who-viewed-me', [MatcheController::class, 'viewedme']);
Route::get('matches-viewed-not-contacted', [MatcheController::class, 'viewednot']);
Route::get('matches-premium', [MatcheController::class, 'premium']);
Route::get('matches-shortlisted', [MatcheController::class, 'shortlisted']);
// Partner metches
