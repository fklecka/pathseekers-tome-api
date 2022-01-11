<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalenteController;
use App\Http\Controllers\EinfacheWaffenController;
use App\Http\Controllers\ExotischeWaffenController;
use App\Http\Controllers\KriegswaffenController;
use App\Http\Controllers\LeichteRuestungController;
use App\Http\Controllers\MittelschwereRuestungController;
use App\Http\Controllers\SchwereRuestungController;
use App\Http\Controllers\RuestungExtraController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ZauberController;
use App\Http\Controllers\AuthController;

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

Route::post('/password/email', [ForgotPasswordController::class,'sendResetLinkEmail']);
Route::post('/password/reset', [ResetPasswordController::class,'reset']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Routen für Account
 */

Route::middleware('auth:sanctum')->group(function () {
    Route::put('/account/edit', [AccountController::class, 'editAccount']);
    Route::put('/account/abo', [AccountController::class, 'changeAbo']);
    Route::delete('/account/delete', [AccountController::class, 'deleteAccount']);
});



/**
 * Route für Zauber
 */

 Route::get('/zauber', [ZauberController::class, 'index']);

/**
 * Routen für Waffen
 */
Route::get('/talente', [TalenteController::class, 'index']);
Route::get('/einfachewaffen', [EinfacheWaffenController::class, 'index']);
Route::get('/exotischewaffen', [ExotischeWaffenController::class, 'index']);
Route::get('/kriegswaffen', [KriegswaffenController::class, 'index']);

/**
 * Routen für Rüstungen
 */
Route::get('/leichteruestung', [LeichteRuestungController::class, 'index']);
Route::get('/mittelschwereruestung', [MittelschwereRuestungController::class, 'index']);
Route::get('/schwereruestung', [SchwereRuestungController::class, 'index']);
Route::get('/ruestungextra', [RuestungExtraController::class, 'index']);

/**
 * Routen für Charaktere
 */

Route::middleware('auth:sanctum')->resource('characters', CharacterController::class);