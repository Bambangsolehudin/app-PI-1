<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'WelcomeController@barangall');


Route::resource('barang', 'BarangController'); 
Route::resource('admin', 'adminController')->middleware('admin'); 
Route::resource('user', 'UserController')->middleware('admin'); 


// Route::get('login-admin', 'BarangController'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('sagara', 'sagaraController');

