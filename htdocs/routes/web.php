<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show-inventory', 'InventoryController@showInventory');

Route::post('/inventory-add', 'InventoryController@inventory_add')->name('');

Route::get('inventory-add', 'InventoryController@create')->name('inventory_add.create');
Route::post('inventory-add', 'InventoryController@store')->name('inventory_add.store');

