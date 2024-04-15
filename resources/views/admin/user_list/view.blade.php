@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>રોજ મેડ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">રોજ મેડ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>રોજ મેડ</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <style>
                                @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
                            </style>
                            <style>
                                @media print {
                                    .abc {
                                        display: none;
                                    }

                                    .but {
                                        display: none;
                                    }
                                }
                            </style>
                            <form id="dateForm" action="{{ url('admin/user_list/view') }}" method="post">
                                @csrf
                                <div class="row abc">
                                    <div class="col-2"><b>તારીખ પસંદ કરો : </b></div>
                                    <div class="col-4">
                                        <input type="date" class="form-control" name="start_date"
                                            value="{{ $startDate }}">
                                    </div>
                                    <div class="col-4"><input type="date"class="form-control" name="end_date"
                                            value="{{ $endDate }}">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary but">Show Data</button>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-2">
                                        <b>Username : </b>
                                    </div>
                                    <div class="col-4">
                                        <select name="user" class="form-control">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-5">

                                <table class="table table-bordered table-striped" id="example11">
                                    <thead>
                                        <tr>
                                            <th
                                                style="font-size: 25px; font-weight: 800; text-align: center; background-color: rgb(84, 249, 84);">
                                                આવક</th>
                                            <th
                                                style="font-size: 25px; font-weight: 800; text-align: center; background-color: rgb(246, 77, 77)
                                                ;">
                                                જાવક</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        // Bachat module
                                        $deposite_totals = 0;
                                        $rokad_upad_totals = 0;
                                        $masikdeactive_totals = 0;

                                        // Fix deposite module
                                        $deposite_form_amount = 0;
                                        $deposit_loanReceipt = 0;
                                        $deposit_LoanPayment = 0;
                                        $deposit_double = 0;
                                        $deposit_Refund = 0;

                                        //dikari module
                                        $dikari_form_amount = 0;
                                        $dikari_kariyavar_total = 0;
                                        $dikari_deactivate_total = 0;

                                        //Emi Loan module
                                        $EMIreceipt_amount = 0;
                                        $loan_emi_form_amount = 0;
                                        $total_loandownpayment = 0;

                                        //આવક / જાવક MOdule
                                        $RojMed_amount = 0;
                                        $RojMed_amount2 = 0;

                                        //joining fees
                                        $joining_fees = 0;

                                        // Bachat module
                                        foreach ($bachat_debit_receipt as $item) {
                                            $deposite_totals = $deposite_totals + $item->deposit; //+
                                            $rokad_upad_totals = $rokad_upad_totals + $item->debit_balance + $item->debit_interest; //-
                                        }

                                        foreach ($masikdeactive as $item) {
                                            $masikdeactive_totals = $masikdeactive_totals + $item->refund_amount; //-
                                        }

                                        $masik_javak = $rokad_upad_totals + $masikdeactive_totals;

                                        // Fix deposite module
                                        foreach ($deposite_form as $item) {
                                            $deposite_form_amount = $deposite_form_amount + $item->total_amount; //+
                                        }
                                        foreach ($loanReceipt as $item) {
                                            $deposit_loanReceipt = $deposit_loanReceipt + $item->total_amount; //-
                                        }
                                        foreach ($LoanPayment as $item) {
                                            $deposit_LoanPayment = $deposit_LoanPayment + $item->amount; //+
                                        }
                                        foreach ($double as $item) {
                                            $deposit_double = $deposit_double + $item->vyaj_amount; //-
                                        }
                                        foreach ($Refund as $item) {
                                            $deposit_Refund = $deposit_Refund + $item->refund_amount; //-
                                        }

                                        $fix_deposit_total = $deposite_form_amount + $deposit_LoanPayment; //+

                                        $deposit_javak = $deposit_loanReceipt + $deposit_Refund + $deposit_double; //-
                                        //dikari module
                                        foreach ($dikari_form as $item) {
                                            $dikari_form_amount = $dikari_form_amount + $item->fix_amount; //+
                                        }
                                        foreach ($dikari_kariyavar as $item) {
                                            $dikari_kariyavar_total = $dikari_kariyavar_total + $item->kariyavar; //-
                                        }
                                        foreach ($Deactivate as $item) {
                                            $dikari_deactivate_total = $dikari_deactivate_total + $item->amount; //-
                                        }
                                        $dikari_total = $dikari_kariyavar_total + $dikari_deactivate_total; //-

                                        //Emi Loan module
                                        foreach ($EMIreceipt as $item) {
                                            $EMIreceipt_amount = $EMIreceipt_amount + $item->remaining_loan_amount; //+
                                        }
                                        foreach ($loan_emi_form as $item) {
                                            $total_loandownpayment = $total_loandownpayment + $item->down_payment;
                                            // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                        }
                                        $total2 = $EMIreceipt_amount + $total_loandownpayment;
                                        foreach ($loan_emi_form->where('loan_type', '=', 'Cash') as $item) {
                                            $loan_emi_form_amount = $loan_emi_form_amount + $item->loan_amount; //-
                                        }
                                        //આવક / જાવક MOdule

                                        foreach ($RojMed->where('cash_type', '=', 'આવક') as $item) {
                                            $RojMed_amount = $RojMed_amount + $item->amount; //+
                                        }

                                        foreach ($RojMed->where('cash_type', '=', 'જાવક') as $item) {
                                            $RojMed_amount2 = $RojMed_amount2 + $item->amount; //-
                                        }
                                        // Joining Fees

                                        // foreach ($TotalJoiningFee as $item) {
                                        //     $joining_fees = $joining_fees + $item->total_joining_fee; //+
                                        // }

                                        $Enteries_bachat = count($bachat);
                                        $bachat_joining = $Enteries_bachat * 200;

                                        $Enteries_deposite = count($deposite_form);
                                        $deposite_joining = $Enteries_deposite * 200;

                                        $Enteries_dikari = count($dikari_form);
                                        $dikari_joining = $Enteries_dikari * 251;

                                        $joining_fees = $bachat_joining + $deposite_joining + $dikari_joining;

                                        $aavak_total = $deposite_totals + $fix_deposit_total + $dikari_form_amount + $total2 + $RojMed_amount + $joining_fees;

                                        $javak_total = $masik_javak + $deposit_javak + $dikari_total + $loan_emi_form_amount + $RojMed_amount2;

                                        $grand_total = $aavak_total - $javak_total;
                                        ?>

                                        <tr>
                                            <td><b>માસિક બચત આવક : {{ $deposite_totals }}</b> </td>
                                            <td><b>માસિક બચત જાવક : {{ $masik_javak }}</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>ફિક્સ ડિપોઝીટ આવક : {{ $fix_deposit_total }} </b></td>
                                            <td><b>ફિક્સ ડિપોઝીટ જાવક : {{ $deposit_javak }}</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>દીકરી કરિયાવર આવક : {{ $dikari_form_amount }} </b></td>
                                            <td><b>દીકરી કરિયાવર જાવક : {{ $dikari_total }}</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Emi લોન આવક : {{ $total2 }} </b></td>
                                            <td><b>Emi લોન જાવક : {{ $loan_emi_form_amount }}</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>ઓફિસ આવક : {{ $RojMed_amount }} </b></td>
                                            <td><b>ઓફિસ જાવક : {{ $RojMed_amount2 }}</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>કુલ જોડાવાની ફી : {{ $joining_fees }}</b></td>
                                            {{-- <td><b>કુલ જાવક : </b>{{ $javak_total }}</td> --}}
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;"><b>કુલ આવક : {{ $aavak_total }}</b></td>
                                            <td style="text-align: center;"><b>કુલ જાવક : {{ $javak_total }}</b></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" style="text-align: center; background-color:grey">
                                                <b>ગ્રાન્ડ ટોટલ : {{ $grand_total }}</b>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>

                            <div class="but">
                                <center> <button style="width:100px" class="btn btn-sm btn-success but m-3 "
                                        onclick="window.print();return false;">Print</button>
                                </center>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
