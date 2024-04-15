<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KariyavarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\FormController::class)->group(function () {

        Route::get('/deposite', 'index');
        Route::get('/deposite/create','create');
        Route::post('/deposite/save', 'store');
        Route::get('/deposite/{deposites}/edit', 'edit');
        Route::put('/deposite/update/{deposites}','update');
        Route::get('/deposite/{deposites}/view','view');

    });

    Route::controller(App\Http\Controllers\Admin\DikariController::class)->group(function () {
        Route::get('/dikari', 'index');
        Route::get('/dikari/create', 'create');
        Route::post('/dikari/save', 'store');
        Route::get('/dikari/{dikaris}/edit', 'edit');
        Route::put('/dikari/update/{dikaris}','update');
        Route::get('/dikari/{dikaris}/view','view');
    });


    Route::controller(App\Http\Controllers\Admin\BachatController::class)->group(function () {
        Route::get('/bachat', 'index');
        Route::get('/bachat/create', 'create');
        Route::post('/bachat/save', 'store');
        Route::get('/bachat/{bachats}/edit', 'edit');
        Route::put('/bachat/update/{bachats}','update');
        Route::get('/bachat/{bachats}/view','view');

    });
    Route::controller(App\Http\Controllers\Admin\BachatReceiptController::class)->group(function () {
        Route::get('/bachat-receipt', 'index');
        Route::get('/bachat-receipt/create', 'create_receipt');
        Route::get('/bachat-receipt/{id}/create', 'create');
        Route::get('/bachat-receipt/{id}/create_debit', 'create_debit');
        Route::get('/bachat-receipt/{id}/bachat-receipt', 'index');
        Route::post('/bachat-receipt/save', 'store');
        Route::get('/bachat-receipt/{id}/view','view_receipt');
        Route::get('/bachat-receipt/{id}/joining_fees','joining_fees');
        Route::post('/bachat-debit-receipt/store', 'storeDebitReceipt');
        Route::get('/debit-receipt/{id}/show', 'showDebitReceipt');
        Route::get('/debit-receipt/{id}/view', 'viewAllDebitReceipt');
    });


    Route::controller(App\Http\Controllers\Admin\PrintController::class)->group(function () {
        Route::get('/one', 'one');
        Route::get('/two','two');
        Route::get('/three','three');
        Route::get('/four','four');
        Route::get('/dikari_recipt','dikari_recipt');
        Route::get('/bachat_recipt','bachat_recipt');
        Route::get('/deposite_recipt','deposite_recipt');

    });

});
