<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\loyaltyCardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Auth Routes */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* POST: Register User */
Route::post('/register', [AuthController::class, 'register']);

/* POST: Login User */
Route::post('/login', [AuthController::class, 'login']);

/* GET: All loyalty Cards */
Route::get('loyaltyCards', [loyaltyCardController::class, 'index']);

/* GET: One loyalty card */
Route::get('loyaltyCards/{id}', [loyaltyCardController::class, 'show']);

/* Post: New loyalty card */
Route::post('loyaltyCards', [loyaltyCardController::class, 'store']);
