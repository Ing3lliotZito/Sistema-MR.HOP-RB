<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 1. Modificamos la ruta dashboard original para redirigir si es Admin
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 2. Agregamos  Panel de Administración
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Acceso no autorizado.');
        }

        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Rutas de Perfil 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';