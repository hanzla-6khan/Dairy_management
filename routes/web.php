<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiltyController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShopSaleController;
use App\Http\Controllers\CashInputController;
use App\Http\Controllers\SubAssistController;
use App\Http\Controllers\AdminpannleController;

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
    return view('welcome');
});

Auth::routes(['verify' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth:web')->group(function () {


    Route::get('employee', [EmployeeController::class, 'index'])->name('Employee.index');
    Route::post('employee', [EmployeeController::class, 'store'])->name('Employee.store');


    Route::get('admin', [AdminpannleController::class, 'index'])->name('admin-panel');


    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

    Route::get('/assets', [CustomerController::class, 'index'])->name('assets.index');


    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');


    Route::get('/show_customers', [CustomerController::class, 'show'])->name('customers.show');


    Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');


    Route::get('/getSubAssets/{assetId}', [CustomerController::class, 'getSubAssets'])->name('get.sub.assets');



    Route::get('/assets_item', [AssetsController::class, 'index'])->name('assets.index');


    Route::get('/assets_item/create', [AssetsController::class, 'create'])->name('customers.create');

    Route::post('/assets_item/store', [AssetsController::class, 'store'])->name('assets_item.store');


    // ===============subassits =============

    Route::get('/sub_assets_item', [SubAssistController::class, 'index'])->name('suba_ssets_item.index');

    Route::post('/sub_assets_item/store', [SubAssistController::class, 'store'])->name('sub_assets_item.store');


    Route::get('/bilties', [BiltyController::class, 'index'])->name('bilties.index');
    Route::get('/bilties/create', [BiltyController::class, 'create'])->name('bilties.create');

    Route::post('/bilties', [BiltyController::class, 'store'])->name('bilties.store');

    Route::put('/bilties/{bilties}', [BiltyController::class, 'update'])->name('bilties.update');
    Route::get('/bilties/show', [BiltyController::class, 'show'])->name('bilties.show');
    Route::get('/bilties/{id}/edit', [BiltyController::class, 'edit'])->name('bilties.edit');
    Route::delete('/bilties/{id}', [BiltyController::class, 'destroy'])->name('bilties.destroy');








});


Route::group(['prefix' => 'shopsale', 'as' => 'shopsale.', 'middleware' => 'auth:web'], function () {
    Route::get('/', [ShopSaleController::class, 'index'])->name('index');
    Route::get('create', [ShopSaleController::class, 'create'])->name('create');
    Route::post('store', [ShopSaleController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ShopSaleController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ShopSaleController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ShopSaleController::class, 'delete'])->name('delete');
});
Route::group(['prefix' => 'cashinput', 'as' => 'cashinput.', 'middleware' => 'auth:web'], function () {
    Route::get('/', [CashInputController::class, 'index'])->name('index');
    Route::get('create', [CashInputController::class, 'create'])->name('create');
    Route::post('store', [CashInputController::class, 'store'])->name('store');
    Route::get('edit/{id}', [CashInputController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [CashInputController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [CashInputController::class, 'delete'])->name('delete');
});

Route::get("verification/verify", function () {
    redirect('/home');
})->name("verification.verify");



Route::post('/timeout/logout', function () {
    Auth::logout();
    return response()->json(['message' => 'Logged out']);
})->name('tlogout');

// Route::middleware('auth:web')->resource('employee', EmployeeController::class)->only(['index', 'store']);
