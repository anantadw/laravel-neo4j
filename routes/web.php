<?php

use App\Http\Controllers\Neo4jController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Neo4jController::class, 'index'])->name('neo4j.index');
Route::post('/', [Neo4jController::class, 'store'])->name('neo4j.store');
