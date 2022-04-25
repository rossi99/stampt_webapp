<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\loyaltyCardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
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

/* POST: Register User */
Route::post('/register', [AuthController::class, 'register']);

/* POST: Login User */
Route::post('/login', [AuthController::class, 'login']);

/* GET: All Users */
Route::get('users', [UserController::class, 'index']);

/* GET: One User */
Route::get('users/{id}', [UserController::class, 'show']);

/* GET: All loyalty Cards */
Route::get('loyaltyCards', [loyaltyCardController::class, 'index']);

/* GET: One loyalty card */
Route::get('loyaltyCards/{id}', [loyaltyCardController::class, 'show']);

/* POST: New loyalty card */
Route::post('loyaltyCards', [loyaltyCardController::class, 'store']);

/* GET: All Wallets */
Route::get('wallets', [WalletController::class, 'index']);

/* GET: One Wallet */
Route::get('wallets/{id}', [WalletController::class, 'show']);
