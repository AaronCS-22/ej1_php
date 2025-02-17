<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})
->name('main');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/alumnos", [AlumnoController::class, 'index'])
    ->name('alumnos')
    ->middleware('auth');

require __DIR__.'/auth.php';
