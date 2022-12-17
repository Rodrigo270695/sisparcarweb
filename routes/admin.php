<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RolsController;
use App\Http\Controllers\Admin\VehiclesController;
use App\Http\Controllers\Admin\RatesController;
use App\Http\Controllers\Admin\EntriesController;
use Illuminate\Support\Facades\Route;

route::get('',[AdminController::class, 'index'])->name('admin.index');
Route::resource('rols', RolsController::class)->names('admin.rols');
Route::resource('vehicles', VehiclesController::class)->names('admin.vehicles');
Route::resource('rates', RatesController::class)->names('admin.rates');
Route::resource('entries', EntriesController::class)->names('admin.entries');

?>
