<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\NavigationController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('/', function () {
    abort(404);
});

// Frontend
Route::namespace('App\Http\Controllers\Frontend')->group(function () {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@update')->name('profile.update');
    Route::get('/asep-dan-nurhayati', 'InvitationController@index')->name('invitation');
});


Auth::routes();
// Admin
Route::middleware('auth', 'isActive')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('guests', GuestController::class)->except('show');
        Route::get('/application-settings', [SettingController::class, 'index'])->name('setting');
        Route::post('/application-settings', [SettingController::class, 'update'])->name('setting.update');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::resource('roles', RoleController::class);
        Route::resource('navigations', NavigationController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('users', UserController::class);
    });

Route::middleware('guest')
    ->group(function () {
        Route::get('admin/login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
        Route::post('admin/login', [AdminLoginController::class, 'adminLogin']);
    });
