<?php

use App\Http\Controllers\API\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ApiController::class, "index"]);
Route::get('/tovarlar', [ApiController::class, "tovarlar"]);
Route::post('/tovarlar', [ApiController::class, "tovarlarPost"]);


Route::controller(ApiController::class)->group(function () {
    
    # Home
    Route::post('/', 'index');

    # Authentification 
    Route::post('/register', 'register');
    Route::post('/login', 'login');

    // Protected Routes
    Route::middleware('auth:sanctum')->group(function ()  {
        Route::post('/logout', 'logout');
        Route::get('/user', 'user');
    });

});
