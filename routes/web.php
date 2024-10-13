<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home/Welcome', [
        
    ]);
});

Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy', [
        
    ]);
});

Route::get('/anti-fraud-policy', function () {
    return Inertia::render('AntiFraudPolicy', [
        
    ]);
});

Route::get('/referral-agent', function () {
    return Inertia::render('ReferralAgent', [
        
    ]);
});

Route::get('/terms-and-conditions', function () {
    return Inertia::render('TermsandCondition', [
        
    ]);
});

Route::get('/tracking', function () {
    return Inertia::render('Tracking/index', [
        
    ]);
});






Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
