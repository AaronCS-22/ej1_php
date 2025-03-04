<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

ROUTE::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("alumnos", AlumnoController::class);

//Route::get("/alumnos",[AlumnoController::class, "index"])
//    ->name("alumnos")
//    ->middleware("auth");
//;

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


require __DIR__.'/auth.php';
