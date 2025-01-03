<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/test', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function(){
    return redirect()->route('productos');
})->name('home');


Route::middleware('auth')->group(function () {

    Route::get('/productos', function(){
        return Inertia::render('Productos', [
            'currentRoute' => 'productos'
        ]);
    })->name('productos');

    Route::get('/proveedores', function(){
        return Inertia::render('Proveedores', [
            'currentRoute' => 'proveedores'
        ]);
    })->name('proveedores');

    Route::get('/cotizaciones', function(){
        return Inertia::render('Cotizaciones', [
            'currentRoute' => 'cotizaciones'
        ]);
    })->name('cotizaciones');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
