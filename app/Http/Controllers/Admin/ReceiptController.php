<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bachat;
use App\Models\BachatDebitReceipt;
use App\Models\Deposite;
use App\Models\Dikari;
use App\Models\EMILoan;
use App\Models\EMIreceipt;
use App\Models\RojMed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReceiptController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin.receipt.index', compact('user'));

    }
    public function search(Request $request)
    {
        $user = $request->input('login_id');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $user = User::find($user);

        if ($request->has('option')) {
            $selectedOption = $request->input('option');

            // Check the value of the selected option
            if ($selectedOption === 'option1') {

                $query = BachatDebitReceipt::query();

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

                Session::put('deposit', $deposit);
                Session::put('debit_balance', $debit_balance);
                Session::put('debit_interest', $debit_interest);
                Session::put('bachatDebitReceipt', $bachatDebitReceipt);
                Session::put('bachat', $bachat);

                return redirect('admin/masik-bachat/report');
            } elseif ($selectedOption === 'option2') {

                $query = Deposite::query();

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
                $total_amount = $query->sum('total_amount');

                // Store the data in the session
                Session::put('deposite', $deposite);
                Session::put('total_amount', $total_amount);
                Session::put('user', $user);
                return redirect('admin/fix-deposit/report');

            } elseif ($selectedOption === 'option3') {

                $query = Dikari::query();

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

                Session::put('dikari', $dikari);
                Session::put('fix_amount', $fix_amount);
                Session::put('user', $user);

                return redirect('admin/dikari/report');

            } elseif ($selectedOption === 'option4') {

                $query = EMIreceipt::query();

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

                Session::put('EMIreceipt', $EMIreceipt);
                Session::put('total_amount', $total_amount);
                Session::put('remaining_loan_amount', $remaining_loan_amount);
                Session::put('loan_paid', $loan_paid);
                Session::put('interest_paid', $interest_paid);
                Session::put('EMILoan', $EMILoan);
                Session::put('user', $user);

                $user = User::all();

                return redirect('admin/emi/report');

            } elseif ($selectedOption === 'option5') {

                $query = RojMed::query();

                if ($user) {
                    $query->where('login_id', $user->id);
                }

                if ($start_date) {
                    $query->whereDate('date', '>=', $start_date);
                }

                if ($end_date) {
                    $query->whereDate('date', '<=', $end_date);
                }
                $rojMed = $query->get();

                // $rojMed = RojMed::all();

                Session::put('rojMed', $rojMed);
                Session::put('user', $user);

                $user = User::all();

                return redirect('admin/avak/report');

            } elseif ($selectedOption === 'option6') {

                $query = EMILoan::query();

                if ($user) {
                    $query->where('login_id', $user->id);
                }

                if ($start_date) {
                    $query->whereDate('created_at', '>=', $start_date);
                }

                if ($end_date) {
                    $query->whereDate('created_at', '<=', $end_date);
                }

                $emi = $query->get();
                $price = $query->sum('price');
                $down_payment = $query->sum('down_payment');
                $loan_amount = $query->sum('loan_amount');

                // Store the data in the session
                Session::put('emi', $emi);
                Session::put('price', $price);
                Session::put('down_payment', $down_payment);
                Session::put('loan_amount', $loan_amount);
                Session::put('user', $user);
                return redirect('admin/emi/form');
            }
        }

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
    
        public function emiForm()
    {
        $emi = EMILoan::all();

        $price = EMILoan::get()->sum('price');
        $down_payment = EMILoan::get()->sum('down_payment');
        $loan_amount = EMILoan::get()->sum('loan_amount');

        $user = User::all();

        return view('admin.receipt.emiform', compact('emi', 'loan_amount', 'down_payment', 'price', 'user'));

    }


    public function avak()
    {
        $rojMed = RojMed::all();

        $total_amount = RojMed::get()->sum('amount');

        $user = User::all();

        return view('admin.receipt.avak', compact('rojMed', 'total_amount', 'user'));

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
