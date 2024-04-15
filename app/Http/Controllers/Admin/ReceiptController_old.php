<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bachat;
use App\Models\BachatDebitReceipt;
use App\Models\Deposite;
use App\Models\Dikari;
use App\Models\EMILoan;
use App\Models\EMIreceipt;
use App\Models\User;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('admin.receipt.index');

    }

    public function masiksearch(Request $request)
    {
        $user = $request->input('login_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $query = BachatDebitReceipt::query();

        $user = User::find($user);

        if ($user) {
            $query->where('login_id', $user->id);
        }

        if ($start_date) {
            $query->whereDate('created_at', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('created_at', '<=', $end_date);
        }

        $deposit = $query->sum('deposit');
        $debit_balance = $query->sum('debit_balance');
        $debit_interest = $query->sum('debit_interest');

        $bachatDebitReceipt = $query->get();

        $bachat = Bachat::all();

        $user = User::all();
        return view('admin.receipt.masik', compact('bachat', 'bachatDebitReceipt', 'deposit', 'debit_balance', 'debit_interest', 'user'));

    }
    public function masik()
    {
        $bachat = Bachat::all();
        $bachatDebitReceipt = BachatDebitReceipt::all();
        $deposit = BachatDebitReceipt::get()->sum('deposit');
        $debit_balance = BachatDebitReceipt::get()->sum('debit_balance');
        $debit_interest = BachatDebitReceipt::get()->sum('debit_interest');
        $user = User::all();

        return view('admin.receipt.masik', compact('bachat', 'bachatDebitReceipt', 'deposit', 'debit_balance', 'debit_interest', 'user'));

    }
    public function fix()
    {
        $deposite = Deposite::all();
        $total_amount = Deposite::get()->sum('total_amount');

        $user = User::all();

        return view('admin.receipt.fix', compact('deposite', 'total_amount', 'user'));
    }

    public function fixsearch(Request $request)
    {
        $user = $request->input('login_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $query = Deposite::query();

        $user = User::find($user);

        if ($user) {
            $query->where('login_id', $user->id);
        }

        if ($start_date) {
            $query->whereDate('created_at', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('created_at', '<=', $end_date);
        }
        $deposite = $query->get();

        // $deposite = Deposite::all();
        $total_amount = $query->sum('total_amount');

        $user = User::all();

        return view('admin.receipt.fix', compact('deposite', 'total_amount', 'user'));

    }

    public function dikari()
    {
        $dikari = Dikari::all();
        $fix_amount = Dikari::get()->sum('fix_amount');

        $user = User::all();

        return view('admin.receipt.dikari', compact('dikari', 'fix_amount', 'user'));
    }

    public function dikarisearch(Request $request)
    {
        $user = $request->input('login_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $query = Dikari::query();

        $user = User::find($user);

        if ($user) {
            $query->where('login_id', $user->id);
        }

        if ($start_date) {
            $query->whereDate('created_at', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('created_at', '<=', $end_date);
        }
        $dikari = $query->get();

        $fix_amount = $query->sum('fix_amount');

        $user = User::all();

        return view('admin.receipt.dikari', compact('dikari', 'fix_amount', 'user'));

    }

    public function emi()
    {
        $EMILoan = EMILoan::all();
        $EMIreceipt = EMIreceipt::all();

        $total_amount = EMIreceipt::get()->sum('total_amount');
        $remaining_loan_amount = EMIreceipt::get()->sum('remaining_loan_amount');
        $loan_paid = EMIreceipt::get()->sum('loan_paid');
        $interest_paid = EMIreceipt::get()->sum('interest_paid');

        $user = User::all();

        return view('admin.receipt.emi', compact('EMILoan', 'EMIreceipt', 'total_amount', 'remaining_loan_amount', 'loan_paid', 'interest_paid', 'user'));

    }

    public function emisearch(Request $request)
    {
        $user = $request->input('login_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $query = EMIreceipt::query();

        $user = User::find($user);

        if ($user) {
            $query->where('login_id', $user->id);
        }

        if ($start_date) {
            $query->whereDate('created_at', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('created_at', '<=', $end_date);
        }
        $EMIreceipt = $query->get();
        $EMILoan = EMILoan::all();

        $total_amount = $query->sum('total_amount');
        $remaining_loan_amount = $query->sum('remaining_loan_amount');
        $loan_paid = $query->sum('loan_paid');
        $interest_paid = $query->sum('interest_paid');

        $user = User::all();

        return view('admin.receipt.emi', compact('EMIreceipt', 'EMILoan', 'total_amount', 'remaining_loan_amount', 'loan_paid', 'interest_paid', 'user'));

    }

}
