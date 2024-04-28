<?php

use Illuminate\Support\Facades\Route;
use App\Models\Train;

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

    //dd(Train::all());
    $trains = Train::all();

    return view('welcome', compact('trains'));
});
