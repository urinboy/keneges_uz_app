<?php

use App\Http\Controllers\AnketaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {

        Route::controller(PageController::class)
            ->middleware(['auth', 'verified'])
            ->group(function () {
                Route::get('/', 'index')->name('home');
                Route::get('/dashboard', 'dashboard')->name('dashboard');
                Route::get('/blocks', 'blocks')->name('blocks');
            });

        Route::middleware(['auth'])->group(function () {
            Route::resource('/anketa', AnketaController::class);

            # Routes for User Profile
            Route::controller(ProfileController::class)->name('profile.')->group(function () {
                Route::get('/profile', 'edit')->name('edit');
                Route::patch('/profile', 'update')->name('update');
                Route::delete('/profile', 'destroy')->name('destroy');
            });
        });

        require __DIR__ . '/auth.php';
    });
