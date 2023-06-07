<?php

use App\Http\Controllers\Api\AgreementController;
use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\ChaptersController;
use App\Http\Controllers\Api\FavortesController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\LastReadController;
use App\Http\Controllers\Api\ReviewsController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ViewsController;
use App\Http\Controllers\IdeamartController;
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
Route::get('/example', function (Request $request) {
    return response()->json(['message' => 'This is an example API endpoint']);
});
Route::post('caascomplete/',[IdeamartController::class,'cassNoti'])->name('caascomplete');


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // your authenticated routes here
    Route::apiResource('agreements',AgreementController::class);
    Route::apiResource('books',BooksController::class);
    Route::apiResource('chapters',ChaptersController::class);
    Route::apiResource('favorites',FavortesController::class);
    Route::apiResource('invoices',InvoiceController::class);
    Route::apiResource('lasread',LastReadController::class);
    Route::apiResource('reviews',ReviewsController::class);
    Route::apiResource('user',UserController::class);
    Route::apiResource('views',ViewsController::class);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
