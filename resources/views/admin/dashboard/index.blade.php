@extends('layouts.admin')


@section('content')
    <style>
        .chart_data_right .card-body .knob-block canvas {
            pointer-events: none;
        }

        .chart_data_left .card-body .chart-main .media,
        .chart_data_right .card-body .chart-main .media {
            padding: 45px 40px;
            background-color: #b3fe85;
            border-right: 1px solid #ecf3fa;
        }
    </style>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row  mt-5">
                    <div class="col-6">
                        <h4 class="f-w-600"><span id="greeting"></span>
                            <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span>
                        </h4>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                        data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 xl-100 chart_data_left box-col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row m-0 chart-main">
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6 masik">
                                    <div class="media align-items-center">
                                        <a href="{{ url('/admin/bachat-receipt/create') }}">
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>{{ $bachats_form->count() }}
                                                    </h4>
                                                    <span> માસિક
                                                        બચત</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                        <a href="{{ url('/admin/deposite/fix_deposite_receipt') }}">
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>{{ $deposite_form->count() }}</h4><span> ફિક્સ
                                                        ડિપોઝિટ</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                        <a href="{{ url('admin/dikari/receipt') }}">
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>{{ $dikari_form->count() }}</h4><span> દીકરીના
                                                        કરિયાવર</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media border-none align-items-center">
                                        <a href="{{ url('/admin/emi/emi_receipt') }}">
                                            <div class="media-body">
                                                <div class="right-chart-content">
                                                    <h4>{{ $loan_emi_form->count() }}</h4><span>લોન</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- total --}}

                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            //Bachat module
                                            $total_bachat = 0;
                                            foreach ($bachat_debit_receipt as $bachat) {
                                                $total_bachat = $total_bachat + $bachat->deposit;
                                            }

                                            // Fix deposite module
                                            $total_amount = 0;
                                            foreach ($deposite_form as $total) {
                                                $total_amount = $total_amount + $total->total_amount;
                                            }
                                            $LoanPayment = 0;
                                            foreach ($LoanPayment3 as $item) {
                                                $LoanPayment = $LoanPayment + $item->amount;
                                            }

                                            //dikari module
                                            $total_kariyavar = 0;
                                            foreach ($dikari_form as $dikari) {
                                                $total_kariyavar = $total_kariyavar + $dikari->fix_amount;
                                            }
                                            //Emi Loan module
                                            $total_loandownpayment = 0;
                                            $total_loan = 0;
                                            foreach ($loan_emi_form as $loan) {
                                                $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                                // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                            }
                                            foreach ($monthly_emi as $eml) {
                                                // $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                                $total_loan = $total_loan + $eml->remaining_loan_amount;
                                            }

                                            $total_income = 0;
                                            foreach ($roj_medincome as $income) {
                                                $total_income = $total_income + $income->amount;
                                            }
                                            $joining_fees = 0;
                                            foreach ($TotalJoiningFee as $item) {
                                                $joining_fees = $joining_fees + $item->total_joining_fee; //+
                                            }

                                            $total = 0;

                                            $total = $total_bachat + $total_amount + $LoanPayment + $total_kariyavar + $total_loandownpayment + $total_loan + $joining_fees;
                                            // $total = $total_bachat + $total_amount + $LoanPayment + $total_kariyavar + $total_loan + $total_income;
                                            echo $total;
                                            if ($total == 0) {
                                                $masik_bahat_total = 1;
                                            } else {
                                                $masik_bahat_total = $total;
                                            }
                                        @endphp

                                        <span class="new-box">100%</span>
                                    </h4>
                                    <span>ટોટલ આવક</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>
                                        @php
                                            //bachat
                                            $total_bachatout = 0;
                                            $total_bachatout2 = 0;
                                            foreach ($bachat_debit_receipt3 as $bachatoutcome) {
                                                $total_bachatout = $total_bachatout + $bachatoutcome->debit_balance + $bachatoutcome->debit_interest;
                                            }
                                            foreach ($masikdeactive as $masikdeactiveoutcome) {
                                                $total_bachatout2 = $total_bachatout2 + round($masikdeactiveoutcome->refund_amount);
                                            }

                                            $bachatjavakk = $total_bachatout + $total_bachatout2;

                                            //Fix Deposite
                                            $total_amount2 = 0;
                                            $totalout = 0;
                                            $deposit_loanReceipt = 0;

                                            foreach ($refunds as $refundout) {
                                                $total_amount2 = $total_amount2 + $refundout->refund_amount;
                                            }
                                            foreach ($loanReceipt as $item) {
                                                $deposit_loanReceipt = $deposit_loanReceipt + $item->total_amount;
                                            }

                                            foreach ($double1 as $outdebit) {
                                                $totalout = $totalout + $outdebit->vyaj_amount;
                                            }
                                            $Fix_deposite_total = $totalout + $total_amount2 + $deposit_loanReceipt;

                                            //dikari
                                            $out_kariyavar = 0;
                                            $dikari_kariyavar_total = 0;

                                            foreach ($deactivates as $outtotal) {
                                                $out_kariyavar = $out_kariyavar + $outtotal->amount;
                                            }

                                            foreach ($dikari_kariyavar as $item) {
                                                $dikari_kariyavar_total = $dikari_kariyavar_total + $item->kariyavar; //-
                                            }
                                            $dikari_total = $out_kariyavar + $dikari_kariyavar_total;

                                            //EMI
                                            $total_loanout = 0;

                                            foreach ($loan_emi_formout->where('loan_type', '=', 'Cash') as $loanout) {
                                                $total_loanout = $total_loanout + $loanout->loan_amount;
                                            }
                                            $total_outcome = 0;

                                            foreach ($roj_medoutcome as $outcome) {
                                                $total_outcome = $total_outcome + $outcome->amount;
                                            }

                                            $total_all_outcome = 0;

                                            $total_all_outcome = $bachatjavakk + $Fix_deposite_total + $dikari_total + $total_loanout + $total_outcome;
                                            // $total_all_outcome = $total_bachatout + $totalout + $out_kariyavar + $total_loanout + $total_outcome;
                                            echo '₹';
                                            echo $total_all_outcome;

                                            if ($total_all_outcome == 0) {
                                                $total_javak = 1;
                                            } else {
                                                $total_javak = $total_all_outcome;
                                            }

                                        @endphp

                                        <span class="new-box">100%</span>
                                    </h4><span>ટોટલ જાવક</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>

                                        @php
                                            $total_income = 0;

                                            foreach ($roj_medincome as $income) {
                                                $total_income = $total_income + $income->amount;
                                            }
                                            echo '₹';
                                            echo $total_income;
                                        @endphp
                                        <span class="new-box">100%</span>
                                    </h4>
                                    <input type="text" style="display: none" id="rojmed_income"
                                        value="{{ $total_income }}">
                                    <span>રોજ મેડ ની આવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>

                                        @php
                                            $total_outcome = 0;

                                            foreach ($roj_medoutcome as $outcome) {
                                                $total_outcome = $total_outcome + $outcome->amount;
                                            }
                                            echo '₹';
                                            echo $total_outcome;

                                        @endphp
                                        <span class="new-box">100%</span>
                                    </h4>
                                    <span>રોજ મેડ ની જાવક</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- આવક --}}

                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>

                                        @php
                                            $total_bachat = 0;
                                            foreach ($bachat_debit_receipt as $bachat) {
                                                $total_bachat = $total_bachat + $bachat->deposit;
                                            }
                                            echo '₹';
                                            echo $total_bachat;
                                        @endphp
                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <input type="text" style="display: none" id="bachat" value="{{ $total_bachat }}">
                                    <span>માસિક બચત આવક</span>

                                </div>

                                <div class="knob-block text-center">
                                    @php

                                        $total_bachat = 0;
                                        foreach ($bachat_debit_receipt as $bachat) {
                                            $total_bachat = $total_bachat + $bachat->deposit;
                                        }
                                        $total = 0;

                                        $total = $total_bachat + $total_amount + $total_kariyavar + $total_loan + $total_income;

                                        $totalP = ($total_bachat * 100) / $masik_bahat_total;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalP) }}"%>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>
                                        @php
                                            $total_amount = 0;
                                            $deposit_LoanPayment = 0;

                                            foreach ($deposite_form as $total) {
                                                $total_amount = $total_amount + $total->total_amount;
                                            }
                                            foreach ($LoanPayment3 as $item) {
                                                $deposit_LoanPayment = $deposit_LoanPayment + $item->amount;
                                            }
                                            echo '₹';
                                            echo $total_amount + $deposit_LoanPayment;

                                        @endphp

                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <input type="text" style="display: none" id="deposite" value="{{ $total_amount }}">
                                    <span>ફિક્સ ડિપોઝિટ આવક</span>

                                </div>
                                <div class="knob-block text-center">
                                    @php

                                        $total_amount = 0;

                                        foreach ($deposite_form as $total) {
                                            $total_amount = $total_amount + $total->total_amount;
                                        }
                                        $total = 0;

                                        $total = $total_bachat + $total_amount + $total_kariyavar + $total_loan + $total_income;

                                        $totalP = ($total_amount * 100) / $masik_bahat_total;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalP) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>

                                        @php
                                            $total_kariyavar = 0;

                                            foreach ($dikari_form as $dikari) {
                                                $total_kariyavar = $total_kariyavar + $dikari->fix_amount;
                                            }
                                            echo '₹';
                                            echo $total_kariyavar;

                                        @endphp

                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <input type="text" style="display: none" id="dikari"
                                        value="{{ $total_kariyavar }}">
                                    <span>દીકરીના કરિયાવર ની આવક </span>
                                </div>
                                <div class="knob-block text-center">

                                    @php

                                        $total_kariyavar = 0;

                                        foreach ($dikari_form as $dikari) {
                                            $total_kariyavar = $total_kariyavar + $dikari->fix_amount;
                                        }
                                        $total = 0;

                                        $total = $total_bachat + $total_amount + $total_kariyavar + $total_loan + $total_income;

                                        $totalP = ($total_kariyavar * 100) / $masik_bahat_total;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalP) }}"%>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>

                                        @php
                                            $total_loandownpayment = 0;
                                            $total_loan = 0;

                                            foreach ($loan_emi_form as $loan) {
                                                $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                                // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                            }

                                            foreach ($monthly_emi as $eml) {
                                                // $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                                $total_loan = $total_loan + $eml->remaining_loan_amount;
                                            }
                                            echo '₹';
                                            echo $total_loan + $total_loandownpayment;

                                        @endphp
                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <input type="text" style="display: none" id="loan"
                                        value="{{ $total_loan }}">
                                    <span>લોન ની આવક </span>
                                </div>
                                <div class="knob-block text-center">
                                    @php

                                        $total_loan = 0;
                                        $total_loandownpayment = 0;

                                        foreach ($loan_emi_form as $loan) {
                                            $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                            // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                        }
                                        foreach ($monthly_emi as $eml) {
                                            // $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                            $total_loan = $total_loan + $eml->remaining_loan_amount;
                                        }
                                        $total_loan_amount = 0;

                                        $total_loan_amount = $total_loan_amount + $total_loan + $total_loandownpayment;

                                        $totalP = ($total_loan_amount * 100) / $masik_bahat_total;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" readonly value="{{ round($totalP) }}"%>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                {{--  આજની આવક --}}
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_bachat = 0;

                                            foreach ($bachat_debit_receipt2 as $bachat) {
                                                $total_bachat = $total_bachat + $bachat->deposit;
                                            }
                                            echo $total_bachat;
                                        @endphp


                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box">{{ $date }}</span>
                                    </h4>
                                    <span> આજની માસિક બચત આવક
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_amount = 0;

                                            foreach ($deposite_form2 as $total) {
                                                $total_amount = $total_amount + $total->total_amount;
                                            }
                                            echo $total_amount;
                                        @endphp

                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box">{{ $date }}</span>
                                    </h4>
                                    <span>આજની ફિક્સ ડિપોઝિટ આવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_kariyavar = 0;

                                            foreach ($dikari_form2 as $dikari) {
                                                $total_kariyavar = $total_kariyavar + $dikari->fix_amount;
                                            }
                                            echo $total_kariyavar;
                                        @endphp

                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box">{{ $date }}</span>
                                    </h4>
                                    <span>આજની દીકરીના કરિયાવર ની આવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_loandownpayment = 0;
                                            $total_loan = 0;

                                            foreach ($loan_emi_form2 as $loan) {
                                                $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                                // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                            }
                                            foreach ($monthly_emi2 as $eml) {
                                                // $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                                $total_loan = $total_loan + $eml->remaining_loan_amount;
                                            }
                                            echo $total_loan + $total_loandownpayment;
                                        @endphp
                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box ">{{ $date }}</span>
                                    </h4>
                                    <span>આજની લોન ની આવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- જાવક --}}

                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_bachatout = 0;
                                            $total_bachatout2 = 0;

                                            foreach ($bachat_debit_receipt3 as $bachatoutcome) {
                                                $total_bachatout = $total_bachatout + $bachatoutcome->debit_balance;
                                            }
                                            foreach ($masikdeactive as $masikdeactiveoutcome) {
                                                $total_bachatout2 = $total_bachatout2 + round($masikdeactiveoutcome->refund_amount);
                                            }
                                            $total_masik_javak = $total_bachatout + $total_bachatout2;
                                            echo $total_masik_javak;

                                        @endphp
                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <span>માસિક બચત જાવક</span>
                                </div>
                                <div class="knob-block text-center">
                                    @php

                                        $total_bachatout = 0;
                                        $total_bachatout2 = 0;

                                        foreach ($bachat_debit_receipt3 as $bachatoutcome) {
                                            $total_bachatout = $total_bachatout + $bachatoutcome->debit_balance;
                                        }
                                        foreach ($masikdeactive as $masikdeactiveoutcome) {
                                            $total_bachatout2 = $total_bachatout2 + round($masikdeactiveoutcome->refund_amount);
                                        }
                                        $total_masik_javak = $total_bachatout + $total_bachatout2;
                                        $total_all_outcome = 0;

                                        $total_all_outcome = $total_bachatout + $totalout + $out_kariyavar + $total_loanout + $total_outcome;

                                        $totalPR = ($total_masik_javak * 100) / $total_javak;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalPR) }}"%>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹
                                        @php
                                            $total_amount2 = 0;
                                            $totalout = 0;
                                            $deposit_loanReceipt = 0;

                                            foreach ($refunds as $refundout) {
                                                $total_amount2 = $total_amount2 + $refundout->refund_amount;
                                            }
                                            foreach ($loanReceipt as $item) {
                                                $deposit_loanReceipt = $deposit_loanReceipt + $item->total_amount;
                                            }

                                            foreach ($double1 as $outdebit) {
                                                $totalout = $totalout + $outdebit->vyaj_amount;
                                            }
                                            $ABC = $totalout + $total_amount2 + $deposit_loanReceipt;

                                            echo $ABC;
                                        @endphp

                                        <span class="new-box">Hot</span>
                                    </h4><span>ફિક્સ ડિપોઝિટ જાવક</span>
                                </div>
                                <div class="knob-block text-center">
                                    @php

                                        $total_amount2 = 0;
                                        $totalout = 0;
                                        $deposit_loanReceipt = 0;

                                        foreach ($refunds as $refundout) {
                                            $total_amount2 = $total_amount2 + $refundout->refund_amount;
                                        }
                                        foreach ($loanReceipt as $item) {
                                            $deposit_loanReceipt = $deposit_loanReceipt + $item->total_amount;
                                        }

                                        foreach ($double1 as $outdebit) {
                                            $totalout = $totalout + $outdebit->vyaj_amount;
                                        }

                                        $total_all_outcome = 0;

                                        $total_all_outcome = $total_bachatout + $totalout + $out_kariyavar + $total_loanout + $total_outcome + $deposit_loanReceipt;

                                        $totalPR = (($total_amount2 + $deposit_loanReceipt + $totalout) * 100) / $total_javak;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalPR) }}"%>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $out_kariyavar = 0;
                                            $dikari_kariyavar_total = 0;

                                            foreach ($deactivates as $outtotal) {
                                                $out_kariyavar = $out_kariyavar + $outtotal->amount;
                                            }

                                            foreach ($dikari_kariyavar as $item) {
                                                $dikari_kariyavar_total = $dikari_kariyavar_total + $item->kariyavar; //-
                                            }
                                            echo $out_kariyavar + $dikari_kariyavar_total;
                                        @endphp

                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <span>દીકરીના કરિયાવર ની જાવક </span>
                                </div>
                                <div class="knob-block text-center">
                                    @php

                                        $out_kariyavar = 0;
                                        $dikari_kariyavar_total = 0;

                                        foreach ($deactivates as $outtotal) {
                                            $out_kariyavar = $out_kariyavar + $outtotal->amount;
                                        }

                                        foreach ($dikari_kariyavar as $item) {
                                            $dikari_kariyavar_total = $dikari_kariyavar_total + $item->kariyavar; //-
                                        }

                                        $total_all_outcome = 0;

                                        $total_all_outcome = $total_bachatout + $totalout + $out_kariyavar + $total_loanout + $total_outcome;

                                        $totalPR = ($out_kariyavar + $dikari_kariyavar_total * 100) / $total_javak;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalPR) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            // $total_loandownpayment = 0;
                                            $total_loanout = 0;

                                            foreach ($loan_emi_formout->where('loan_type', '=', 'Cash') as $loanout) {
                                                $total_loanout = $total_loanout + $loanout->loan_amount;
                                                // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                            }
                                            // foreach ($monthly_emi as $eml) {
                                            //     // $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                            //     $total_loan = $total_loandownpayment + $eml->remaining_loan_amount;
                                            // }
                                            echo $total_loanout;
                                        @endphp

                                        <span class="new-box">Hot</span>
                                    </h4>
                                    <span>લોન ની જાવક </span>
                                </div>
                                <div class="knob-block text-center">
                                    @php

                                        $total_loanout = 0;

                                        foreach ($loan_emi_formout->where('loan_type', '=', 'Cash') as $loanout) {
                                            $total_loanout = $total_loanout + $loanout->loan_amount;
                                            // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                        }
                                        $total_all_outcome = 0;

                                        $total_all_outcome = $total_bachatout + $totalout + $out_kariyavar + $total_loanout + $total_outcome;

                                        $totalPR = ($total_loanout * 100) / $total_javak;
                                    @endphp
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                        data-bgcolor="#eef5fb" value="{{ round($totalPR) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                {{--  આજની જાવક --}}
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_bachatout = 0;
                                            $total_bachatout2 = 0;

                                            foreach ($bachat_debit_receipt4 as $bachatoutcome) {
                                                $total_bachatout = $total_bachatout + $bachatoutcome->debit_balance;
                                            }
                                            foreach ($masikdeactive as $masikdeactiveoutcome) {
                                                $total_bachatout2 = $total_bachatout2 + round($masikdeactiveoutcome->refund_amount);
                                            }
                                            $total_masik_javak = $total_bachatout + $total_bachatout2;

                                            echo $total_masik_javak;
                                        @endphp


                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box">{{ $date }}</span>
                                    </h4>
                                    <span> આજની માસિક બચત જાવક
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $total_amount = 0;
                                            $totalout = 0;
                                            foreach ($refundstoday as $refundout) {
                                                $total_amount = $total_amount + $refundout->refund_amount;
                                            }
                                            foreach ($deposite_formouttoday as $outdebit) {
                                                $totalout = $total_amount + $outdebit->vyaj_amount;
                                            }
                                            echo $totalout;
                                        @endphp

                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box">{{ $date }}</span>
                                    </h4>
                                    <span>આજની ફિક્સ ડિપોઝિટ જાવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            $out_kariyavar = 0;

                                            foreach ($deactivatestoday as $outtotal) {
                                                $out_kariyavar = $out_kariyavar + $outtotal->amount;
                                            }
                                            echo $out_kariyavar;
                                        @endphp

                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box">{{ $date }}</span>
                                    </h4>
                                    <span>આજની દીકરીના કરિયાવર ની જાવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>₹

                                        @php
                                            // $total_loandownpayment = 0;
                                            $total_loanout = 0;

                                            foreach ($loan_emi_formouttoday->where('loan_type', '=', 'Cash') as $loanout) {
                                                $total_loanout = $total_loanout + $loanout->loan_amount;
                                                // $total_loan = $total_loandownpayment + $loan->remaining_loan_amount;
                                            }
                                            // foreach ($monthly_emi as $eml) {
                                            //     // $total_loandownpayment = $total_loandownpayment + $loan->down_payment;
                                            //     $total_loan = $total_loandownpayment + $eml->remaining_loan_amount;
                                            // }
                                            echo $total_loanout;
                                        @endphp
                                        <span style="background: rgb(0, 0, 0);"
                                            class="new-box ">{{ $date }}</span>
                                    </h4>
                                    <span>આજની લોન ની જાવક </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="col-xl-12 xl-100 dashboard-sec box-col-12">
                    <div class="card earning-card">
                        <div class="card-body p-0">
                            <div class="row m-0">
                                <div class="col-xl-3 earning-content p-0">
                                    <div class="row m-0 chart-left">
                                        <div class="col-xl-12 p-0 left_side_earning">
                                            <h4 class="f-w-600"><span id="greeting"></span>
                                                <span class="right-circle"><i
                                                        class="fa fa-check-circle f-14 middle"></i></span>
                                            </h4>
                                        </div>
                                        <div class="col-xl-12 p-0 left_side_earning">
                                            <h5>₹
                                                @php
                                                    // $total = 0;

                                                    // $total = $total_bachat + $total_amount + $total_kariyavar + $total_loan;
                                                    // echo $total;
                                                    $profit = $masik_bahat_total - $total_javak;
                                                    echo $profit;
                                                @endphp


                                            </h5>
                                            <p class="font-roboto">Total Profit</p>
                                        </div>
                                        {{-- <div class="col-xl-12 p-0 left_side_earning">
                                            <h5>$1004.11</h5>
                                            <p class="font-roboto">This Month Profit</p>
                                        </div>
                                        <div class="col-xl-12 p-0 left_side_earning">
                                            <h5>90%</h5>
                                            <p class="font-roboto">This Month Sale</p>
                                        </div> --}}
                                        <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient" hre>Summary</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 p-0">
                                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var bachat = document.getElementById('bachat').value;
            var deposite = document.getElementById('deposite').value;
            var dikari = document.getElementById('dikari').value;
            var loan = document.getElementById('loan').value;
            var rojmed_income = document.getElementById('rojmed_income').value;


            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['માસિક બચત આવક', parseInt(bachat)],
                ['ફિક્સ ડિપોઝિટ આવક', parseInt(deposite)],
                ['દીકરીના કરિયાવર ની આવક', parseInt(dikari)],
                ['લોન ની આવક', parseInt(loan)],
                ['રોજ મેડ ની આવક', parseInt(rojmed_income)]
            ]);


            var options = {
                title: 'My Daily Activities',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

    @livewireStyles
@endsection
