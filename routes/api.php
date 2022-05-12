<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Quote;

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

//Routes for general section
Route::get('/quotes_api', [ApiController::class, 'quote']);
Route::post('/quotes_api', [ApiController::class, 'quote_insert']);
Route::put('/quotes_api/{id}', [ApiController::class, 'quote_update']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
