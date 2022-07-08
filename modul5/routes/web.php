<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TicketController;

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
    return view('user.content');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('news', function () {
    return view('user.news');
});

Route::get('ticketView', function () {
    return view('user.ticketView');
});

Route::get('login', [UserController::class, 'loginView'])->middleware('guest');
Route::post('login', [UserController::class, 'loginProcess']);

Route::get('customer', [CustomerController::class, 'show']);
Route::get('customerAdd', [CustomerController::class, 'add']);
Route::post('customer', [CustomerController::class, 'addProcess']);
Route::delete('customer/delete/{id}', [CustomerController::class, 'delete']);

Route::get('ticket', [TicketController::class, 'show']);
Route::get('ticketView', [TicketController::class, 'showUser']);
Route::get('ticketAdd', [TicketController::class, 'add']);
Route::post('ticket', [TicketController::class, 'addProcess']);
Route::delete('ticket/delete/{id}', [TicketController::class, 'delete']);
Route::get('ticket/edit/{id}', [TicketController::class, 'edit']);
Route::patch('ticket/{id}', [TicketController::class, 'editProcess']);

Route::get('employee', [EmployeeController::class, 'show']);
Route::get('employeeAdd', [EmployeeController::class, 'add']);
Route::post('employee', [EmployeeController::class, 'addProcess']);
Route::delete('employee/delete/{id}', [TicketController::class, 'delete']);

