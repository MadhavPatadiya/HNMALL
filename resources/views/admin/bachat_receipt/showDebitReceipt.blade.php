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
            .page-body {
                background-color: white;
            }

            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            .container2 {
                font-family: 'Noto Serif Gujarati', serif;
                margin-top: 20px;
            }

            .custom-line {
                border-bottom: 4px solid black;
            }

            #heading {
                border-bottom: 4px solid black;
                margin-block-top: 5px;
            }

            #w2 {
                font-size: 17px;
            }

            #w3 {
                font-family: 'Noto Serif Gujarati', serif;
                font-size: 17px;

            }

            .h3 {
                border-bottom: 4px solid black;
                border-left: 4px solid black;
                border-right: 4px solid black;
                border-radius: 35px;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 25px;
                padding-right: 25px;
                font-size: 17px;
                font-weight: 700;
            }

            h1 {

                text-align: center;
                font-size: 70px;
                /* border: 1px solid black; */
                /* border-radius: 20px; */
                /* background-color: black; */
                color: black;
                font-weight: 1000;

            }

            #i1 img {
                margin-left: 15px;
                margin-top: 15px;
                border: 4px solid black;
            }

            #i2 img {
                margin-top: 0px;
                margin-left: 50px;

            }

            .p3 {
                font-size: 13px;
                text-align: center;
                font-weight: 700;
            }

            .p1 {
                margin-right: -5%;
                font-weight: 700;
                margin-block: 2px;
            }

            .row {
                margin-bottom: 2px;
            }

            input {
                border: none;
                border-bottom: 1px solid black;
                width: 160px;
                margin-left: 10PX;
            }

            h5 {
                text-align: center;
                text: bold;
                font-weight: 600;

            }

            p {
                text-align: center;
            }

            .h5 {
                text-align: center;
                border: 1px solid black;
                margin-top: 10px;
                margin-bottom: 10px;
                padding-top: 3px;
                padding-bottom: 3px;
            }

            #col-1 {
                border: 2px solid black;
                border-radius: 10px;
                margin-left: 10px;
                margin-top: 10px;
            }

            #col-2 {
                border: 2px solid black;
                border-radius: 10px;
                margin-left: 13px;
                margin-top: 10px;
            }

            #row-d {
                width: 120%;
            }

            #row-e {
                width: 86%;
            }

            #row-f {
                border-bottom: 4px solid black;
            }

            #z {
                border-bottom: 2px solid black;
            }

            .m-5 {
                margin-left: 18rem !important;
            }

            .add {
                margin-bottom: 0px;
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 40%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-receipt_no {
                border: none;
                border-bottom: 1px solid black;
                width: 42%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-date {
                border: none;
                border-bottom: 1px solid black;
                width: 56%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 91%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 87%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 76%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-deposit {
                border: none;
                border-bottom: 1px solid black;
                width: 74%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-total_amount_words {
                border: none;
                border-bottom: 1px solid black;
                width: 80%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-debit_balance {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-debit_total_amount_words {
                border: none;
                border-bottom: 1px solid black;
                width: 80%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-old_interest {
                border: none;
                border-bottom: 1px solid black;
                width: 49% !important;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-khata_ma_jamathayelu {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-khata_ma_jamathayelu2 {
                border: none;
                border-bottom: 1px solid black;
                width: 46%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-last_month_interest {
                border: none;
                border-bottom: 1px solid black;
                width: 41%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-total_interest {
                border: none;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-debit_interest {
                border: none;
                border-bottom: 1px solid black;
                width: 53%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-old_interest2 {
                border: none;
                border-bottom: 1px solid black;
                width: 72%;
                margin: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-last_cash_deposit {
                border: none;
                border-bottom: 1px solid black;
                width: 54%;
                margin: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_income {
                border: none;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-interest_on_withdrawn_deposits {
                border: none;
                border-bottom: 1px solid black;
                width: 59%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-amount_of_interest_withdrawn {
                border: none;
                border-bottom: 1px solid black;
                width: 51%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_500 {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
            }

            .dis-cash_200 {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
            }

            .dis-cash_100 {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_50 {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_20 {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_10 {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_5 {
                border: none;
                border-bottom: 1px solid black;
                width: 69%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-cash_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 69%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-sign1 {
                border: none;
                border-bottom: 1px solid black;
                width: 34%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-sign2 {
                border: none;
                border-bottom: 1px solid black;
                width: 34%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-note {
                border: none;
                border-bottom: 1px solid black;
                width: 94%;
                margin-left: 10PX;
                font-size: 15px;
                font-weight: 800;

            }

            .dis-loan_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 50%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-whose_bail {
                border: none;
                border-bottom: 1px solid black;
                width: 50%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }


            .m-5 {
                margin-left: 5rem !important;
            }

            .HN {
                font-size: 50px;
                font-weight: 500;
            }

            .logo {
                height: 90px;
                width: 170px;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .shree {
                margin-left: 161px;
            }

            .fonts {
                font-size: 17px;
                font-weight: 800;
            }

            @media print {
                .but {
                    display: none;
                }

                .tap-top {
                    display: none !important;
                }


                .page-body {
                    margin: 10px 0px 0px 0px !important;
                }

            }
        </style>
    </head>

    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3>માસિક બચત જમા-ઉપાડ પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક
                                        બચત
                                        પહોંચ
                                    </a>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/debit-receipt/' . $bachats->id . '/view') }}">માસિક
                                        બચત જમા-ઉપાડ પહોંચ યાદી

                                    </a>
                                <li class="breadcrumb-item active">માસિક બચત જમા-ઉપાડ પહોંચ </li>
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
                                    <div class="container">

                                        <div class="row" id="heading">
                                            <div class="col-3" id="i1"> <img
                                                    src="{{ asset('admin/assets/images/image.jpg') }}" height="110px"
                                                    width="90px"></div>

                                            <div class="col-6">
                                                <div class="row shree">
                                                    <div class="col-6 mt-2">
                                                        <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <img src="{{ asset('admin/assets/images/h_n_mall_2.jpg') }}"
                                                        width="100%">

                                                    {{-- <div class="HN">
                                                            <b class="fonts">એચ.એન.મોલ</b>
                                                        </div> --}}
                                                    <b class="fonts">
                                                        <center>
                                                            <div class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ,
                                                                મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </div>
                                                        </center>
                                                    </b>
                                                </div>

                                            </div>
                                            <div class="col-3" id="i2">
                                                <div class="row h3"><b class="fonts">બચત ખાતાની પહોંચ</b></div>
                                                <div class="row logo"><img style="background-color:white;"
                                                        src="{{ asset('admin/assets/images/HN.jpg') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <center>
                                            <h3 class="h3"><b class="fonts">બચત ખાતાની પહોંચ</b></h3>
                                        </center> --}}
                                        <div class="row">
                                            <div class="col-3 mt-2">
                                                <label style="width: 100%" id="w2"><b class="fonts">રસીદ નંબર
                                                        :</b><input type="text" readonly class="dis-receipt_no"
                                                        value="{{ $bachatDebitReceipt->receipt_no }}">
                                                </label>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <label style="width: 100%" id="w2"><b class="fonts">સભ્યપદ નં.
                                                        :</b><input type="text" readonly class="dis-member_no"
                                                        value="{{ $bachats->member_no }}">
                                                </label>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <label style="width: 100%" id="w2"><b class="fonts">તારીખ :
                                                    </b><input type="date" readonly class="dis-date"
                                                        value="{{ $bachatDebitReceipt->member_date }}">
                                                </label>
                                            </div>
                                            <div class="col-3 mt-2"> <label style="width: 100%"><b class="fonts">ગામ
                                                        :</b><input type="text" readonly class="dis-village"
                                                        value="{{ $bachats->village }}"></label></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">શ્રી, :</b>
                                                    <input type="text" readonly class="dis-mr"
                                                        value="{{ $bachats->mr }}">
                                                </label>
                                            </div>
                                            <div class="col-4"> <label style="width: 100%"><b class="fonts">તાલુકો :</b>
                                                    <input type="text" readonly class="dis-taluk"
                                                        value="{{ $bachats->taluk }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">સરનામુ :</b>
                                                    <input type="text" readonly class="dis-address"
                                                        value="{{ $bachats->address }}">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">જીલ્લો :</b> <input
                                                        type="text" readonly class="dis-city"
                                                        value="{{ $bachats->city }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">રકમ રૂ :</b> <input
                                                        type="text" readonly class="dis-deposit"
                                                        value="{{ $bachatDebitReceipt->deposit }}">
                                                </label>
                                            </div>
                                            <div class="col-8 ">
                                                <label style="width: 100%"><b class="fonts">શબ્દોમાં રૂપિયા :</b> <input
                                                        type="text" readonly class="dis-total_amount_words"
                                                        value="{{ $bachatDebitReceipt->deposit ? $bachatDebitReceipt->total_amount_words : null }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">રોકડ ઉપાડ : </b><input
                                                        type="text" readonly class="dis-debit_balance"
                                                        value="{{ $bachatDebitReceipt->debit_balance }}">
                                                </label>
                                            </div>
                                            <div class="col-8 ">
                                                <label style="width: 100%"><b class="fonts">શબ્દોમાં રૂપિયા :</b> <input
                                                        type="text" readonly class="dis-debit_total_amount_words"
                                                        value="{{ $bachatDebitReceipt->debit_balance ? $bachatDebitReceipt->debit_total_amount_words : null }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" id="row-d">
                                            <div class="col-5" id="col-1">
                                                <div>
                                                    <label style="width: 100%"><b class="fonts">ચાલુ વ્યાજ:</b> <input
                                                            id="col-6" type="text" readonly
                                                            class="dis-old_interest2"
                                                            value="{{ $bachatDebitReceipt->old_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">+ પાછલા મહિનાનું કુલ
                                                            વ્યાજ :</b> <input id="col-6" type="text" readonly
                                                            class="dis-last_month_interest"
                                                            value="{{ $bachatDebitReceipt->last_month_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">= કુલ વ્યાજ :</b> <input
                                                            id="col-6" type="text" readonly
                                                            class="dis-total_interest"
                                                            value="{{ $bachatDebitReceipt->total_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts"> બચેલું જમા વ્યાજ :</b>
                                                        <input id="col-6" type="text" readonly
                                                            class="dis-khata_ma_jamathayelu"
                                                            value="{{ $bachatDebitReceipt->total_interest - $bachatDebitReceipt->debit_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">ઉપાડેલી વ્યાજની રકમ
                                                            :</b> <input id="col-6" type="text" readonly
                                                            class="dis-debit_interest"
                                                            value="{{ $bachatDebitReceipt->debit_interest }}">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-5" id="col-2">
                                                <div class="dis-chaluVyaj"> <label style="width: 100%"><b
                                                            class="fonts">આગલી ભરેલી રકમ
                                                            :</b>
                                                        <input id="col-6" type="text" readonly
                                                            class="dis-last_cash_deposit"
                                                            value="{{ $bachatDebitReceipt->last_cash_deposit }}"></label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">રોકડ આવક :</b> <input
                                                            id="col-6" type="text" readonly
                                                            class="dis-cash_income"
                                                            value="{{ $bachatDebitReceipt->cash_income }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">ઉપાડેલ જમા વ્યાજ :
                                                        </b><input id="col-6" type="text" readonly
                                                            class="dis-interest_on_withdrawn_deposits"
                                                            value="{{ $bachatDebitReceipt->interest_on_withdrawn_deposits }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">ખાતામાં જમા થયેલું વ્યાજ
                                                            :</b> <input id="col-6" type="text" readonly
                                                            class="dis-khata_ma_jamathayelu2"
                                                            value="{{ $bachatDebitReceipt->total_interest - $bachatDebitReceipt->debit_interest }}">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts"> કુલ બાકી જમા રકમ ₹. :
                                                        </b><input id="col-6" type="text" readonly
                                                            class="dis-amount_of_interest_withdrawn"
                                                            value="{{ $bachatDebitReceipt->amount_of_interest_withdrawn }}">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3" id="bold">
                                                <label style="width: 100%"> <b class="fonts">500 X :</b><input
                                                        id="x" type="text" readonly class="dis-cash_500"
                                                        value="{{ $bachatDebitReceipt->cash_500 }}">
                                                </label>
                                            </div>
                                            <div class="col-3" id="bold">
                                                <label style="width: 100%"> <b class="fonts">200 X :</b><input
                                                        id="x" type="text" readonly class="dis-cash_200"
                                                        value="{{ $bachatDebitReceipt->cash_200 }}">
                                                </label>
                                            </div>
                                            <div class="col-3" id="bold">
                                                <label style="width: 100%"> <b class="fonts">100 X :</b><input
                                                        id="x" type="text" readonly class="dis-cash_100"
                                                        value="{{ $bachatDebitReceipt->cash_100 }}">
                                                </label>
                                            </div>
                                            <div class="col-3" id="bold">
                                                <label style="width: 100%"> <b class="fonts">50 X :</b><input
                                                        id="x" type="text" readonly class="dis-cash_50"
                                                        value="{{ $bachatDebitReceipt->cash_50 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row justify-content-around" id="row-f">
                                            <div class="col-3 " id="bold">
                                                <label style="width: 100%"> <b class="fonts">20 X :</b><input
                                                        id="y" type="text" readonly class="dis-cash_20"
                                                        value="{{ $bachatDebitReceipt->cash_20 }}">
                                                </label>
                                            </div>
                                            <div class="col-3 " id="bold">
                                                <label style="width: 100%"> <b class="fonts">10 X :</b><input
                                                        id="y" type="text" readonly class="dis-cash_10"
                                                        value="{{ $bachatDebitReceipt->cash_10 }}">
                                                </label>
                                            </div>
                                            <div class="col-3" id="bold"><label style="width: 100%"><b
                                                        class="fonts">5 X
                                                        :</b><input id="y" readonly class="dis-cash_5"
                                                        type="text" value="{{ $bachatDebitReceipt->cash_5 }}">
                                                </label>
                                            </div>
                                            <div class="col-3" id="bold">
                                                <label style="width: 100%"><b class="fonts">1 X :</b> <input
                                                        id="y" type="text" readonly class="dis-cash_1"
                                                        value="{{ $bachatDebitReceipt->cash_1 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row mt-2 custom-line">
                                            <div class="col-12" id="row-g">
                                                <label style="width: 100%"><b class="fonts">નૉૅધ :</b> <input
                                                        type="text" readonly class="dis-note"
                                                        value="{{ $bachatDebitReceipt->note }}">
                                                </label>
                                            </div>
                                            {{-- <div class="col-4" id="row-g">
                                                <label style="width: 100%"><b class="fonts">લોન રકમ:</b> <input
                                                        id="z" type="text" readonly class="dis-loan_amount"
                                                        value="{{ $bachatDebitReceipt->loan_amount }}">
                                                </label>
                                            </div>
                                            <div class="col-4" id="row-g">
                                                <label style="width: 100%"> <b class="fonts">કોનામાં જામીન:</b> <input
                                                        id="z"type="text" readonly class="dis-whose_bail"
                                                        value="{{ $bachatDebitReceipt->whose_bail }}">
                                                </label>
                                            </div> --}}
                                        </div>

                                        <div class="container2">
                                            <div class="row">
                                                <div class="col-4"><label style="width: 100%" id="w3"> <b
                                                            class="fonts">નાણા
                                                            આપનારની સહી :</b>
                                                        <input type="text" class="dis-sign1" readonly></label>
                                                </div>
                                                <div class="col-4">
                                                    <label style="width: 100%" id="w3"> <b class="fonts">નાણા
                                                            સ્વીકારનારની સહી
                                                            :</b>
                                                            
                                                        <input value="" type="text" class="dis-sign2" readonly>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label style="width:150%"> <b class="fonts">એચ.એન.મોલ વતી</b>
                                                            
                                                        <input value="{{$user->where('id', '=', $bachatDebitReceipt->login_id)->first()->name }}" type="text" class="dis-sign2" readonly>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
            </form>
        </div>
    </body>
@endsection
