<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Home route
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

// Public routes
Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Dashboard route - pastikan ini ada
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Ideas management
    Route::get('/my-ideas', [IdeaController::class, 'myIdeas'])->name('ideas.my');
    Route::resource('ideas', IdeaController::class)->except(['index', 'show']);

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
