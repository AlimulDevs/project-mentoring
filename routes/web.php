<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [Controller::class, "index"]);
Route::get("/createIndex", [Controller::class, "createIndex"]);
Route::post("/create", [Controller::class, "create"]);
Route::get("/delete/{id}", [Controller::class, "delete"]);
