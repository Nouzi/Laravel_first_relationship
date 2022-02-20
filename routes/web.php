<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPanel;
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

Route::get('/', [MainPanel::class, 'index' ]);

/*Route::get("/trieda/{id}", [MainPanel::class, 'show']);*/