<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TenantProfileController;
use App\Http\Controllers\Admin\LandlordProfileController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admindashboard');
    //tenants
    Route::get('/tenant', [TenantProfileController::class, 'index'])->name('tenant-index');
    Route::get('/gettenant', [TenantProfileController::class, 'getTenant'])->name('tenant.list');
    Route::get('/tenant/create', [TenantProfileController::class, 'create'])->name('tenant-create');
    Route::post('/tenant', [TenantProfileController::class, 'store'])->name('tenant-store');

    //landlords
    Route::get('/landlord', [LandlordProfileController::class, 'index'])->name('landlord-index');
    Route::get('/landlord/create', [LandlordProfileController::class, 'create'])->name('landlord-create');
    Route::post('/landlord', [LandlordProfileController::class, 'store'])->name('landlord-store');
});
