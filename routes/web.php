<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    return view('home');
});

Route::get('/show_employee',[EmployeeController::class, 'showEmployees']);

Route::get('/create',[EmployeeController::class, 'createIndex']);
Route::post('/create',[EmployeeController::class, 'createEmployee']);

Route::get('/edit/{id}',[EmployeeController::class, 'editIndex']);
Route::put('/edit/{id}',[EmployeeController::class, 'update']);

Route::get('/delete/{id}',[EmployeeController::class, 'delete']);