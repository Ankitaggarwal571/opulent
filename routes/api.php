<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ReportController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [AuthController::class,'login']);
Route::post('/qr-scan', [AuthController::class,'QurScan']);
Route::post('/product-audit', [AuthController::class,'productAudit']);
Route::post('/audit_report_download', [AuthController::class, 'audit_report'])->name('gst_out_report_download');


