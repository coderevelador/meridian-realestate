<?php

use App\Http\Controllers\PropertyAminityController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\PropertyStatusController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('frontend/home');
})->name('website-home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// property type route

Route::prefix('property')->group(function () {
    // Type
    Route::get('/type', [PropertyTypeController::class, 'index'])->name('property-type');
    Route::get('/add-type', [PropertyTypeController::class, 'create'])->name('property-type-add');
    Route::post('/store-type', [PropertyTypeController::class, 'store'])->name('property-type-store');
    Route::get('/edit-type/{id}', [PropertyTypeController::class, 'edit'])->name('property-type-edit');
    Route::get('/edit-type/{id}/update', [PropertyTypeController::class, 'update'])->name('property-type-update');
    Route::get('/delete-type/{id}', [PropertyTypeController::class, 'delete'])->name('property-type-delete');
    // Status
    Route::get('/status', [PropertyStatusController::class, 'index'])->name('property-status');
    Route::get('/add-status', [PropertyStatusController::class, 'create'])->name('property-status-add');
    Route::post('/store-status', [PropertyStatusController::class, 'store'])->name('property-status-store');
    Route::get('/edit-status/{id}', [PropertyStatusController::class, 'edit'])->name('property-status-edit');
    Route::get('/edit-status/{id}/update', [PropertyStatusController::class, 'update'])->name('property-status-update');
    Route::get('/delete-status/{id}', [PropertyStatusController::class, 'delete'])->name('property-status-delete');
    // aminity
    Route::get('/aminity', [PropertyAminityController::class, 'index'])->name('property-aminity');
    Route::get('/add-aminity', [PropertyAminityController::class, 'create'])->name('property-aminity-add');
    Route::post('/store-aminity', [PropertyAminityController::class, 'store'])->name('property-aminity-store');
    Route::get('/edit-aminity/{id}', [PropertyAminityController::class, 'edit'])->name('property-aminity-edit');
    Route::get('/edit-aminity/{id}/update', [PropertyAminityController::class, 'update'])->name('property-aminity-update');
    Route::get('/delete-aminity/{id}', [PropertyAminityController::class, 'delete'])->name('property-aminity-delete');
    // Properties
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
    Route::get('/add-properties', [PropertyController::class, 'create'])->name('add-properties');
    Route::post('/store-properties', [PropertyController::class, 'store'])->name('store-properties');
    Route::get('/edit-properties/{id}', [PropertyController::class, 'edit'])->name('edit-properties');
    Route::post('/update-properties/{id}', [PropertyController::class, 'update'])->name('update-properties');
    Route::get('/delete-properties/{id}', [PropertyController::class, 'delete'])->name('delete-properties');

}); 
