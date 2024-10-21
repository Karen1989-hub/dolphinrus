<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\PriznakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin',[AuthController::class,'getLoginPage'])->name("getLoginPage");
Route::get('user_logout',[AuthController::class,'user_logout'])->name("user_logout");
Route::post('login',[AuthController::class,'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('getMarketingListPage',[MarketingController::class,'getMarketingListPage'])->name('getMarketingListPage');
    Route::get('getPriznaksListPage',[MarketingController::class,'getPriznaksListPage'])->name('getPriznaksListPage');
    Route::post('editPriznakByProduct',[PriznakController::class,'editPriznakByProduct'])->name('editPriznakByProduct');
    Route::get('getCreatePriznakPage',[PriznakController::class,'getCreatePriznakPage'])->name('getCreatePriznakPage');
    Route::post('addPriznakOption',[PriznakController::class,'addPriznakOption'])->name('addPriznakOption');
    Route::get('getPriznakSinglePage/{priznak_id}',[PriznakController::class,'getPriznakSinglePage'])->name('getPriznakSinglePage');
});