<?php

use Illuminate\Support\Facades\Route;
use App\Models\Phonebookstore;
use App\Http\Controllers\PhonebookstoreController;

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

//Route::get('/', function () {
    //return view('insert');
//});

Route::redirect('/', '/phonebookstore');
Route::resource('phonebookstore',PhonebookstoreController::class);
