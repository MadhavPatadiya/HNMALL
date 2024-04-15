@extends('layouts.admin')

@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>form</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
        </style>
        <style>
            .AA {
                margin-top: 5px;
                padding: 15px;
            }

            .p3 {
                text-align: center;
                font-size: 15px;
                /* border: 1px solid black; */
                /* background-color: black; */
                margin-bottom: 10px;
                margin-right: -55px;
            }

            .p1 {
                text-align: center;
                margin-left: 330px;
                font-weight: 700;
                margin-block: 2px;
                font-size: 15px;

            }

            #s3 {
                padding-top: 27px;
                padding-left: 46px;
                padding-right: 20px;
                padding-bottom: 56px;
            }

            h1 {
                text-align: center;
                font-size: 50px;
                /* border: 1px solid black; */
                /* border-radius: 20px; */
                /* background-color: black; */
                color: black;
                font-weight: 1000;
            }

            #i1 img {
                margin-left: 15px;
                border: 4px solid black;
            }

            #i2 img {
                margin-left: 30px;

            }

            .cip {

                display: inline-block;
                font-size: 15px;
                border-radius: 3px;
                border: 3px solid black;
                border-inline-end-width: 10px;
                border-inline-start-width: 10px;
                text-align: center;
                margin-left: 0%;
                font-weight: 700;
                margin-block: -9px;
            }

            #w3 {
                font-size: 20px;
                font-weight: 500px;
            }

            .cip2 {
                /* text-align: center; */
                font-size: 22px;
                font-weight: 700;
                border: 2px solid black;
                border-radius: 10px;
                text-align: justify;
            }

            .bb {
                border: 3px solid black !important;
                padding: 1px;
            }

            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            #col-1 {
                border: 1px solid black;
                border-radius: 10px;
                margin-left: 10px;
                margin-top: 10px;
            }

            #col-2 {
                border: 1px solid black;
                border-radius: 10px;
                margin-left: 13px;
                margin-top: 10px;
                
            }

            #row-d {
                width: 120%;
            }

            .brd {
                border-top: 3px solid black;
                padding: 40px 10px 0px 10px;
            }

            .dis-member_no {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 39%;
                margin-left: 10PX;
            }

            .dis-receipt_no {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 48%;
                margin-left: 10PX;
            }

            .dis-date {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 63%;
                margin-left: 10PX;
            }

            .dis-village {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
            }

            .dis-mr {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 92%;
                margin-left: 10PX;
            }

            .dis-taluk {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 82%;
                margin-left: 10PX;
            }

            .dis-address {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 85%;
                margin-left: 10PX;
            }

            .dis-city {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 87%;
                margin-left: 10PX;
            }

            .dis-amount {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
            }

            .dis-amount_words {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 81%;
                margin-left: 10PX;
            }

            .dis-old_interest {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 50%;
                margin-left: 10PX;
            }

            .dis-current_interest {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
            }

            .dis-total_interest {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
            }

            .dis-debit_interest {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-due_amount {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-amount2 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
            }

            .dis-upadelRakam {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
            }

            .dis-remaining_amount {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 57%;
                margin-left: 10PX;
            }

            .dis-cash_500 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-cash_200 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-cash_100 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-cash_50 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
            }

            .dis-cash_20 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
            }

            .dis-cash_10 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
            }

            .dis-cash_5 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
            }

            .dis-cash_1 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
            }

            .dis-sign1 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 2px solid black;
                width: 44%;
                margin-left: 10PX;
            }

            .dis-sign2 {
                border: none;
                font-size: 17px;
                font-weight: 800;
                border-bottom: 2px solid black;
                width: 38%;
                margin-left: 10PX;
            }

            .footer {
                margin-left: 0%;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .page-body {
                background-color: white;
            }
            .fonts {
                font-size: 18px;
                font-weight: 800;
            }

            @media only screen and (max-width:1250px) {
                label {
                    font-size: 11px;
                }

            }

            @media only screen and (max-width:1064px) {
                label {
                    font-size: 7px;
                }

            }

            @media only screen and (max-width:768px) {
                label {
                    font-size: 7px;
                }

                .dis-member_no {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 34%;
                    margin-left: 10PX;
                }

                .dis-date {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 50%;
                    margin-left: 10PX;
                }

                .dis-village {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 61%;
                    margin-left: 10PX;
                }

                .dis-mr {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 88%;
                    margin-left: 10PX;
                }

                .dis-taluk {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 71%;
                    margin-left: 10PX;
                }

                .dis-address {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 79%;
                    margin-left: 10PX;
                }

                .dis-city {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 76%;
                    margin-left: 10PX;
                }

                .dis-amount {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 52%;
                    margin-left: 10PX;
                }

                .dis-amount_words {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 73%;
                    margin-left: 10PX;
                }

                .dis-old_interest {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 26%;
                    margin-left: 10PX;
                }

                .dis-current_interest {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 55%;
                    margin-left: 10PX;
                }

                .dis-total_interest {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 57%;
                    margin-left: 10PX;
                }

                .dis-debit_interest {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 42%;
                    margin-left: 10PX;
                }

                .dis-due_amount {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 42%;
                    margin-left: 10PX;
                }

                .dis-amount2 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 58%;
                    margin-left: 10PX;
                }

                .dis-upadelRakam {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 56%;
                    margin-left: 10PX;
                }

                .dis-remaining_amount {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 37%;
                    margin-left: 10PX;
                }

                .dis-cash_500 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 34%;
                    margin-left: 10PX;
                }

                .dis-cash_200 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 34%;
                    margin-left: 10PX;
                }

                .dis-cash_100 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 34%;
                    margin-left: 10PX;
                }

                .dis-cash_50 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 42%;
                    margin-left: 10PX;
                }

                .dis-cash_20 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 42%;
                    margin-left: 10PX;
                }

                .dis-cash_10 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 42%;
                    margin-left: 10PX;
                }

                .dis-cash_5 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 51%;
                    margin-left: 10PX;
                }

                .dis-cash_1 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 51%;
                    margin-left: 10PX;
                }

                .dis-sign1 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 36%;
                    margin-left: 10PX;
                }

                .dis-sign2 {
                    border: none;
                font-size: 17px;
                font-weight: 800;
                    border-bottom: 1px solid black;
                    width: 28%;
                    margin-left: 10PX;
                }

            }
            @media print {

                .btn {
                    display: none;
                }

                .tap-top {
                    display: none !important;
                }

                .page-body {
                    margin: 10px 0px 0px 0px !important;
                }

                /* .cip {
                    margin-left: 300px;
                } */

            }
        </style>

    </head>

    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3>ફિક્સ ડિપોઝિટ લોનની પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ પહોંચ
                                    </a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/deposite/' . $deposite->id . '/loan_deposite_receipt') }}">ફિક્સ
                                        ડિપોઝિટ જમા પહોંચ યાદી

                                    </a>
                                </li>

                                <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ જમા પહોંચ </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <form>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="">
                                <div class="">
                                    <div class="container bb">
                                        <div class="row ">
                                            <div class="col-6 mt-2">
                                                <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                                            </div>
                                            {{-- <div class="col-6 mt-2">
                                                <p class="cip mt-2">
                                                    બચત પહોંચ
                                                </p>
                                            </div> --}}
                                        </div>
                                        <div class="row" id="heading">
                                            <div class="col-2" id="i1"> <img
                                                    src="{{ asset('admin/assets/images/image.jpg') }}" height="120px"
                                                    width="90px"></div>

                                            <div class="col-6">
                                                <img src="{{ asset('admin/assets/images/h_n_mall_2.jpg') }}" width="100%">

                                                {{-- <h1>
                                                    <b class="fonts">એચ.એન.મોલ</b>
                                                </h1> --}}
                                                <b class="fonts">
                                                    <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ,
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>

                                            </div>
                                            <div class="col-4" id="i2"> <p class="cip mt-2">
                                                લોન જમા પહોંચ
                                            </p><img
                                                    src="{{ asset('admin/assets/images/HN.jpg') }}" height="90px"
                                                    width="">
                                            </div>
                                            {{-- <div class="col-3" id="s3">
                                                <p class="cip2">
                                                    રસીદ નં:
                                                </p>
                                            </div> --}}

                                            {{-- <div class="col-3" id="cip2">
                                                રસીદ નંબર:
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="container AA">
                                        <div class="row mt-3 mb-2 custom-line">
                                            <div class="col-3">
                                                <label style="width: 100%" id="w3"><b class="fonts">સભ્યપદ નં. </b><input
                                                        class="dis-member_no" readonly type="text"
                                                        value="{{ $deposite->member_no }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">રસીદ નંબર:</b> <input class="dis-receipt_no"
                                                        readonly type="text" value="{{ $loanPayment->receipt_no }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">તારીખ.</b> <input class="dis-date" readonly
                                                        type="text"
                                                        value="{{ date('d-m-Y', strtotime($loanPayment->date)) }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">ગામ :</b><input class="dis-village" readonly
                                                        type="text" value="{{ $deposite->village }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">શ્રી, </b><input class="dis-mr" readonly
                                                        type="text" value="{{ $deposite->mr }}">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">તા. :</b><input class="dis-taluk" readonly
                                                        type="text" value="{{ $deposite->taluk }}">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">સરનામુ :</b> <input class="dis-address"
                                                        readonly type="text" value="{{ $deposite->address }}">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">જી.</b><input class="dis-city" readonly
                                                        type="text" value="{{ $deposite->city }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">રકમ રૂ : </b><input class="dis-amount"
                                                        readonly type="text" value="{{ $loanPayment->amount }}">
                                                </label>
                                            </div>
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">અંકે રૂપિયા :</b> <input
                                                        class="dis-amount_words" readonly type="text"
                                                        value="{{ $loanPayment->amount_words }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" id="row-d">
                                            <div class="col-5" id="col-1">
                                                <div class="mt-2">
                                                    <label style="width: 100%"><b class="fonts">આગલી રકમનું કુલ વ્યાજ :</b><input
                                                            class="dis-old_interest" readonly type="text"
                                                            value="{{ $loanPayment->old_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">+ ચાલુ વ્યાજ :</b><input
                                                            class="dis-current_interest" readonly type="text"
                                                            value="{{ $loanPayment->current_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">= કુલ વ્યાજ :</b><input
                                                            class="dis-total_interest" readonly type="text"
                                                            value="{{ $loanPayment->total_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">જમા વ્યાજની રમક: </b><input
                                                            class="dis-debit_interest" readonly type="text"
                                                            value="{{ $loanPayment->debit_interest }}">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-5" id="col-2">
                                                <div class="mt-2">
                                                    <label style="width: 100%"><b class="fonts">આગલી બાકી રકમ </b>:<input
                                                            class="dis-due_amount" readonly type="text"
                                                            value="{{ $loanPayment->due_amount }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">રોકડ આવક :</b><input class="dis-amount2"
                                                            readonly type="text" value="{{ $loanPayment->amount }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">ઉપાડેલ રમક :</b><input
                                                            class="dis-upadelRakam" readonly type="text"
                                                            value="">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">કુલ બાકી જમા રકમ :</b> <input
                                                            class="dis-remaining_amount" readonly type="text"
                                                            value="{{ $loanPayment->remaining_amount }}">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">500 X: </b><input
                                                        class="dis-cash_500" readonly type="text"
                                                        value="{{ $loanPayment->cash_500 }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">200 X: </b><input
                                                        class="dis-cash_200" readonly type="text"
                                                        value="{{ $loanPayment->cash_200 }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">100 X </b>:<input
                                                        class="dis-cash_100" readonly type="text"
                                                        value="{{ $loanPayment->cash_100 }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">50 X :</b><input
                                                        class="dis-cash_50" readonly type="text"
                                                        value="{{ $loanPayment->cash_50 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">20 X :</b><input
                                                        class="dis-cash_20" readonly type="text"
                                                        value="{{ $loanPayment->cash_20 }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">10 X :</b><input
                                                        class="dis-cash_10" readonly type="text"
                                                        value="{{ $loanPayment->cash_10 }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">5 X :</b><input
                                                        class="dis-cash_5" readonly type="text"
                                                        value="{{ $loanPayment->cash_5 }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%" class="font-weight-bold"><b class="fonts">1 X :</b><input
                                                        class="dis-cash_1" readonly type="text"
                                                        value="{{ $loanPayment->cash_1 }}">
                                                </label>
                                            </div>
                                        </div>


                                        <div class="custom-line"></div>
                                        <div class="row mt-2 brd">
                                            <div class="col-6">
                                                <label style="width: 100%" id="w3"><b class="fonts">નાણા આપનારની સહી :</b><input
                                                        class="dis-sign1" readonly type="text" value="">
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label style="width: 100%" id="w3"><b class="fonts">નાણા સ્વીકારનારની સહી :</b>
                                                    <input class="dis-sign2" readonly type="text" value="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                                                    
                                    <center> <button style="width:100px" class="btn btn-sm btn-success but m-3 "
                                            onclick="window.print();return false;">Print</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </body>
@endsection
