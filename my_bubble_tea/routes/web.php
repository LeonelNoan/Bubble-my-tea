<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\OrderController;



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

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Ajout de toute mes routes //
route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
Route::get('/products', [TeaController::class, 'index'])->name('admin.products');
Route::post('/createTea', [TeaController::class, 'store'])->name('admin.createTea');
Route::delete('/teas/{tea}', [TeaController::class, 'destroy'])->name('admin.teas.destroy');
Route::get('/updateTea/{tea}', [TeaController::class, 'info'])->name('admin.updateTea');
Route::put('/teas/{tea}', [TeaController::class, 'update'])->name('admin.teas.update');
Route::get('/createTea', function () {
    return view('admin.createTea');
})->name('create');

//route::get('/Teashop', [ProductController::class, 'ProductList']);


route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

route::get('/Teashop', [HomeController::class, 'teashop']);

//route::get('/show_order', [HomeController::class, 'showOrder']);

route::get('/view_category', [AdminController::class, 'view_category']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

//alex routes
Route::get('/teas', [TeaController::class, 'allteas'])->name('allTeas');
Route::post('/addToCart', [TeaController::class, 'addToCart'])->name('addToCart');
Route::post('/storeOrder', [OrderController::class, 'storeOrder'])->name('storeOrder');
