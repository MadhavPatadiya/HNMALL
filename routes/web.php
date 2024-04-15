<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login')->with('status', 'Logged In Successfully');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cronjob1', [App\Http\Controllers\cronjobcontroller::class, 'handle']);
Route::get('cronjob2', [App\Http\Controllers\cronjob2controller::class, 'handle']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::middleware(['auth', 'isAdmin'])->post('/user_list/view', [App\Http\Controllers\Admin\UserlistController::class, 'view']);
    Route::middleware(['auth', 'isAdmin'])->get('/user_list/create', [App\Http\Controllers\Admin\UserlistController::class, 'user_form']);

    Route::controller(App\Http\Controllers\Admin\RojMedController::class)->group(function () {
        Route::post('/real_roj_med/view_real_roj_med', 'view_real_roj_med');
        Route::get('/real_roj_med/view_real_roj_med', 'view_real_roj_med2');
        Route::get('/roj_med/{id}/edit', 'edit');
        Route::put('/roj_med/update/{id}', 'update');
        Route::get('/roj_med/{id}/delete', 'delete');


    });
    Route::controller(App\Http\Controllers\Admin\LoanEMIController::class)->group(function () {
        Route::get('/emi/{emi}/destroy', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\FormController::class)->group(function () {
        Route::get('/deposite/{deposites}/destroy', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\DikariController::class)->group(function () {
        Route::get('/dikari/{dikaris}/destroy', 'destroy');
    });
    Route::controller(App\Http\Controllers\Admin\BachatController::class)->group(function () {
        Route::get('/bachat/{bachats}/delete', 'delete');
        Route::get('/bachat/{bachats}/edit', 'edit');
    });

    Route::controller(App\Http\Controllers\Admin\ReceiptController::class)->group(function () {
        Route::get('/report', 'index');
        Route::post('/search', 'search');

        Route::get('/masik-bachat/report', 'masik');
        Route::post('/masik-bachat/search', 'masiksearch');

        Route::get('/fix-deposit/report', 'fix');
        Route::post('/fix-deposit/search', 'fixsearch');

        Route::get('/dikari/report', 'dikari');
        Route::post('/dikari/search', 'dikarisearch');

        Route::get('/emi/report', 'emi');
        Route::post('/emi/search', 'emisearch');

        Route::get('/avak/report', 'avak');
        
        Route::get('/emi/form', 'emiForm');


    });

});
Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/test', [App\Http\Controllers\Admin\DashboardController::class, 'test']);

    // Route::get('/user_list', [App\Http\Controllers\Admin\UserlistController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\MainDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::controller(App\Http\Controllers\Admin\NotifyController::class)->group(function () {
        Route::get('/notification', 'index');

    });

    Route::controller(App\Http\Controllers\Admin\LoanEMIController::class)->group(function () {
        Route::get('/emi', 'index');
        Route::get('/emi/create', 'create');
        Route::post('/emi/save', 'store');
        Route::get('/emi/{emi}/edit', 'edit');
        Route::put('/emi/update/{emi}', 'update');
        Route::get('/emi/{emi}/view', 'view');
        // Route::get('/emi/{emi}/destroy', 'destroy');
        Route::get('/emi/{emi}/emi', 'create_emi_receipt');
        Route::post('/emi/store_emi', 'store_emi');
        Route::get('/emi/{emi}/edit_emi_receipt', 'edit_emi_receipt');
        Route::put('/emi/update_emi_receipt/{emi}', 'update_emi_receipt');
        Route::get('/emi/{emi}/emi_all_receipt', 'emi_all_receipt');
        Route::get('/emi/{emi}/emi_all_receipt_cash', 'emi_all_receipt_cash');
        Route::get('/emi/{emi}/view_emi_receipt', 'view_emi_receipt');
        Route::get('/emi/emi_receipt', 'receipt');
        Route::get('/emi/emi_receipt_cash', 'emi_receipt_cash');
        Route::get('/emi/completed_list', 'completed_list');

    });

    Route::controller(App\Http\Controllers\Admin\FormController::class)->group(function () {

        Route::get('/deposite', 'index');
        Route::get('/deposite/create', 'create');
        Route::post('/deposite/save', 'store');
        Route::get('/deposite/{deposites}/edit', 'edit');
        Route::put('/deposite/update/{deposites}', 'update');
        Route::get('/deposite/{deposites}/view', 'view');
        // Route::get('/deposite/{deposites}/destroy', 'destroy');

        Route::get('/deposite/{deposites}/attachment', 'attachment');
        Route::post('/deposite/storeattachment', 'storeattachment');
        // Route::post('/deposite/attachment/remove/{id}', 'attachmentRemove');

        // Route::get('/deposite/attachment/delete/{id}', 'delete');
        Route::get('/deposite/attachment/delete/{id}', 'delete')->name('attachment.delete');

        // Route::get('/deposite/{deposites}/attachment', 'delete');
        // Route::get('/marketing_quotation/{id}/delete', 'delete');

        Route::get('/deposite/fix_deposite_receipt', 'receipt');
        Route::get('/deposite/{deposites}/view_receipt', 'view_receipt');
        Route::get('/deposite/{deposites}/loan_create', 'loan_create');
        Route::post('/deposite/store_loan_receipt', 'store_loan_receipt');
        Route::get('/deposite/{deposites}/view_loan_receipt', 'view_loan_receipt');
        Route::get('/deposite/{deposites}/loan_receipt', 'loan_receipt');
        Route::get('/deposite/{deposites}/loan_deposite', 'create_loan_deposite');
        Route::post('/deposite/store_loan_deposite', 'store_loan_deposite');
        Route::get('/deposite/{deposites}/view_loan_deposite', 'view_loan_deposite');
        Route::get('/deposite/{deposites}/loan_deposite_receipt', 'loan_deposite_receipt');
        Route::get('/deposite/{deposites}/refund', 'refund');
        Route::post('/deposite/processRefund', 'processRefund');
        Route::get('/deposite/{deposites}/view_refund_loan_receipt', 'view_refund_loan_receipt');
        Route::get('/deposite/{deposites}/loan_interest_statement', 'loan_interest_statement');
        Route::get('/deposite/{deposites}/deactivate_deposite', 'deactivate_deposite');
        Route::post('/deposite/store_deactivate_deposites', 'store_deactivate_deposites');
        Route::get('/deposite/deactivate_list_deposite', 'deactivate_list_deposite');
        Route::get('/deposite/{deposites}/view_completed', 'view_completed');
        Route::get('/deposite/completed_list', 'completed_list');
        Route::get('/deposite/{deposites}/create_double_form', 'create_double_form');

        Route::post('/deposite/processDouble', 'processDouble');

    });

    Route::controller(App\Http\Controllers\Admin\DikariController::class)->group(function () {
        Route::get('/dikari', 'index');
        Route::get('/dikari/create', 'create');
        Route::post('/dikari/save', 'store');
        Route::get('/dikari/{dikaris}/edit', 'edit');
        Route::put('/dikari/update/{dikaris}', 'update');
        Route::get('/dikari/{dikaris}/view', 'view');
        // Route::get('/dikari/{dikaris}/destroy', 'destroy');
        Route::get('/dikari/receipt', 'receipt');
        Route::get('/dikari/{dikari}/view_receipt', 'view_receipt');
        Route::get('/dikari/{dikaris}/create_kariyavar', 'create_kariyavar');
        Route::post('/dikari/store_kariyavar', 'store_kariyavar');
        Route::get('/dikari/{dikaris}/view_kariyavar', 'view_kariyavar');
        Route::get('/dikari/{dikari}/deactivate', 'deactivate');
        Route::post('/dikari/store_deactivate', 'store_deactivate');
        Route::get('/dikari/{dikaris}/view_deactivate', 'view_deactivate');
        Route::get('/dikari/deactivate_list', 'deactivate_list');
        Route::get('/dikari/completed_list', 'completed_list');

    });

    Route::controller(App\Http\Controllers\Admin\BachatController::class)->group(function () {
        Route::get('/bachat', 'index');
        Route::get('/bachat/create', 'create');
        Route::post('/bachat/save', 'store');
        // Route::get('/bachat/{bachats}/edit', 'edit');
        Route::put('/bachat/update/{bachats}', 'update');
        Route::get('/bachat/{bachats}/view', 'view');
        // Route::get('/bachat/{bachats}/delete', 'delete');

    });
    Route::controller(App\Http\Controllers\Admin\BachatReceiptController::class)->group(function () {
        Route::get('/bachat-receipt', 'index');
        Route::get('/bachat-receipt/create', 'create_receipt');
        Route::get('/bachat-receipt/{id}/deactive', 'deactive');
        Route::post('/bachat-receipt/store_deactive', 'store_deactive');
        Route::get('/bachat-receipt/deactive_list', 'deactive_list');
        Route::get('/bachat-receipt/{id}/deactived_receipt', 'deactived_receipt');
        Route::get('/bachat-receipt/{id}/create', 'create');
        Route::get('/bachat-receipt/{id}/create_debit', 'create_debit');
        Route::get('/bachat-receipt/{id}/create_debit125', 'create_debit125');
        Route::get('/bachat-receipt/{id}/convert', 'convert');
        Route::get('/bachat-receipt/{id}/convertInterest', 'convertInterest');
        Route::get('/bachat-receipt/{id}/bachat-receipt', 'index');
        Route::post('/bachat-receipt/save', 'store');
        Route::get('/bachat-receipt/{id}/view', 'view_receipt');
        Route::get('/bachat-receipt/{id}/joining_fees', 'joining_fees');
        Route::post('/bachat-debit-receipt/store', 'storeDebitReceipt');
        Route::get('/debit-receipt/{id}/view', 'viewAllDebitReceipt');
        Route::get('/debit-receipt/{id}/show', 'showDebitReceipt');
        Route::get('/bachat-receipt/{id}/statement', 'statement');
    });

    Route::controller(App\Http\Controllers\Admin\PrintController::class)->group(function () {
        Route::get('/one', 'one');
        Route::get('/two', 'two');
        Route::get('/three', 'three');
        Route::get('/four', 'four');
        Route::get('/dikari_recipt', 'dikari_recipt');
        Route::get('/bachat_recipt', 'bachat_recipt');
        Route::get('/deposite_recipt', 'deposite_recipt');

    });

    Route::controller(App\Http\Controllers\Admin\RojMedController::class)->group(function () {
        Route::get('/roj_med', 'index');
        Route::get('/roj_med/view', 'view');
        Route::post('/roj_med/save', 'store');


    });

});
