<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
    return view('orderform');
});

Route::prefix("order")->group(function () {
    Route::post("/", [OrderController::class, "store"])->name("order.store");
    Route::get("/{order:orderId}", [OrderController::class, "show"])->name("order.show");
});

Route::post("/rnw-hook", [OrderController::class, "hook"])->name("order.hook");

include_once __DIR__ . "/auth.php";
