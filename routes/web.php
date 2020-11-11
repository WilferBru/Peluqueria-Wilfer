<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;



Route::get('/', [HomeController::class,'welcome'])->name('welcome.index')->middleware('guest');

Route::post('/creando', [HomeController::class,'create'])->name('create')->middleware('guest');

Route::get('/Servicios-Cortes', [HomeController::class,'indexCortes'])->name('service.indexCorte')->middleware('guest');

Route::get('/Registrarse', [ClientController::class,'formCreate'])->name('client.formCreate')->middleware('guest');

Route::get('/Inicio', [HomeController::class,'index'])->name('index')->middleware('auth');

//Cleintes y sus acciones
Route::get('/Clientes', [ClientController::class,'index'])->name('client.index')->middleware('auth');

Route::post('/Crear-Cliente', [ClientController::class,'create'])->name('client.create')->middleware('auth');

Route::delete('/Cliente-borrado/{date}', [ClientController::class,'destroy'])->name('client.destroy')->middleware('auth');
// fin de clientes

// Protafolio

Route::get('/Archivos', [PortfolioController::class,'index'])->name('portfolio.index')->middleware('auth');

Route::get('/Subir-Archivos', [PortfolioController::class,'create'])->name('portfolio.create')->middleware('auth');

Route::post('/Archivos-Subidos', [PortfolioController::class,'store'])->name('portfolio.store')->middleware('auth');

Route::patch('/Archivos-Actualizado/{fact}', [PortfolioController::class,'update'])->name('portfolio.update')->middleware('auth');

Route::patch('/Foto-Actualizado/{fact}', [PortfolioController::class,'updatePhoto'])->name('portfolio.updatePhoto')->middleware('auth');

Route::delete('/Archivo-Borrado/{fact}', [PortfolioController::class,'destroy'])->name('photo.destroy')->middleware('auth');

//Barberos
Route::get('/Barberos', [PortfolioController::class,'indexBarber'])->name('portfolio.barberIndex')->middleware('auth');

Route::post('/Crando-Barbero', [PortfolioController::class,'createBarber'])->name('portfolio.createBarber')->middleware('auth');

Route::patch('/Barbero-Actualizado/{fact}', [PortfolioController::class,'updateBarber'])->name('portfolio.updateBarber')->middleware('auth');

Route::patch('/Foto-Barbero-Actualizado/{fact}', [PortfolioController::class,'updatePhotoBarber'])->name('portfolio.updatePhotoBarber')->middleware('auth');

Route::delete('/Borrar-Barbero/{fact}', [PortfolioController::class,'destroyBarber'])->name('portfolio.destroyBarber')->middleware('auth');

// Fin portafolio

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/');
})->name('dashboard');
