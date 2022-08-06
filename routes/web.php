<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Auth;
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
    return view('admin.index');
})->middleware('admin');



Auth::routes();

// Route::post('/home', [HomeController::class, 'index'])->name('home');

//Admin
Route::get('/admin/dashboard/info', [AdminController::class, 'userInfo'])->name('user-info');
// Route::get('/admin/dashboard', [AdminController::class, 'returnHome'])->name('back');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard')->middleware('admin');
//Admin-Books
Route::get('/admin/books', [BookController::class, 'index'])->name('books')->middleware('admin');
Route::post('/admin/books/add', [BookController::class, 'addBook'])->name('add-book')->middleware('admin');
Route::get('/admin/books/{id}', [BookController::class, 'delBook'])->name('del-book')->middleware('admin');
Route::get('/admin/books/edit/{id}', [BookController::class, 'editBook'])->name('edit-book')->middleware('admin');
Route::post('/admin/books/edit/{id}/save', [BookController::class, 'updateBook'])->name('save-edit')->middleware('admin');

//Admin-Customers
Route::get('/admin/customers', [CustomerController::class, 'showCustomers'])->name('customers')->middleware('admin');

//Admin-Sales
Route::get('/admin/sales', [SalesController::class, 'index'])->name('show-sales')->middleware('admin');




//customer
Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer-dashboard')->middleware('customer');
Route::get('/customer/book/{id}', [CustomerController::class, 'viewBook'])->name('view-book')->middleware('customer');
Route::post('/customer/book/{id}/purchase', [CustomerController::class, 'purchaseBook'])->name('buy-book')->middleware('customer');

//customer-orders
Route::get('/customer/orders', [CustomerController::class, 'viewOrders'])->name('view-orders')->middleware('customer');