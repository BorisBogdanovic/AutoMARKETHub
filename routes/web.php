<?php

use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use App\Livewire\SingleCar;
use Illuminate\Support\Facades\Route;


Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('register', [\App\Http\Controllers\PageController::class, 'registerView'])->name('registerView');
Route::post('register-user', [\App\Http\Controllers\UserController::class, 'register'])->name('registerUser');
Route::get('forgot-password', [\App\Http\Controllers\AuthController::class, 'forgotPasswordView'])->name('forgot-password-view');
Route::post('forgot-password-logic', [\App\Http\Controllers\AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('reset-password/{token}/{email}', [\App\Http\Controllers\AuthController::class, 'resetPasswordView'])->name('resetPasswordView');
Route::post('reset-password-logic', [\App\Http\Controllers\AuthController::class, 'resetPasswordLogic'])->name('resetPasswordLogic');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/', [\App\Http\Controllers\PageController::class, 'homeView'])->name('homeView');
Route::get('login', [\App\Http\Controllers\PageController::class, 'loginView'])->name('loginView')->middleware('guest');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('my-ads', [\App\Http\Controllers\PageController::class, 'myAdsView'])->name('myAdsView');
    Route::get('settings', [\App\Http\Controllers\PageController::class, 'settingsView'])->name('settingsView');
    Route::get('car-advertisement', [\App\Http\Controllers\CarController::class, 'carAdvertisementView'])->name('carAdvertisementView');
    Route::post('car-advertisement-create', [\App\Http\Controllers\CarController::class, 'CreateCarAdvertisement'])->name('CreateCarAdvertisement');
//    Route::get('car/{car}', [\App\Http\Controllers\CarController::class, 'showSingleCar'])->name('singleCar');

});
Route::middleware(['admin'])->group(function () {
    Route::get('admin-dashboard', [\App\Http\Controllers\PageController::class, 'AdminDashboardView'])->name('AdminDashboardView');
    Route::patch('approve-ad/{car}', [\App\Http\Controllers\CarController::class, 'approveAd'])->name('approveAd');
    Route::delete('delete-ad/{car}', [\App\Http\Controllers\CarController::class, 'deleteAd'])->name('deleteAd');
    Route::delete('delete-user/{user}', [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('deleteUser');
});




    Route::get('/car/{id}', SingleCar::class)->name('livewire.single-car');
    Route::get('/chat',Index::class)->name('chat.index');
    Route::get('/chat/{query}',Chat::class)->name('chat');
















