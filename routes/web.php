<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusScheduleController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\FrontendHomeController;

Route::get('/', [FrontendHomeController::class, 'index'])->name('home');
Route::post('/book', [FrontendHomeController::class, 'book'])->name('book');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('operator',[OperatorController::class,'index'])->name('operator.index');
Route::post('operator.store',[OperatorController::class,'store'])->name('operator.store');
Route::get('bus',[BusController::class,'index'])->name('bus.index');
Route::post('bus.store',[BusController::class,'store'])->name('bus.store');
Route::get('source',[SourceController::class,'index'])->name('source.index');
Route::post('source.store',[SourceController::class,'store'])->name('source.store');
Route::get('destination',[DestinationController::class,'index'])->name('destination.index');
Route::post('destination.store',[DestinationController::class,'store'])->name('destination.store');
// Route::resource('bus-schedules', BusScheduleController::class);
Route::get('bus-schedules',[BusScheduleController::class,'index'])->name('bus-schedules.index');
Route::post('bus-schedules.store',[BusScheduleController::class,'store'])->name('bus_schedules.store');


