<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeInformationController;
use App\Http\Controllers\EleveController;

Route::get('/', function () {
    return view('home');
});


Route::get('/batiments', [BatimentController::class, 'index'])->name('batiments.index');
Route::get('/batiments/create', [BatimentController::class, 'create'])->name('batiments.create');
Route::post('/batiments', [BatimentController::class, 'store'])->name('batiments.store');


Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/formations/create', [FormationController::class, 'create'])->name('formations.create');
Route::post('/formations', [FormationController::class, 'store'])->name('formations.store');


Route::get('/type_informations', [TypeInformationController::class, 'index'])->name('type_informations.index');
Route::get('/type_informations/create', [TypeInformationController::class, 'create'])->name('type_informations.create');
Route::post('/type_informations', [TypeInformationController::class, 'store'])->name('type_informations.store');


Route::get('/eleves', [EleveController::class, 'index'])->name('eleves.index');
Route::get('/eleves/create', [EleveController::class, 'create'])->name('eleves.create');
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store');