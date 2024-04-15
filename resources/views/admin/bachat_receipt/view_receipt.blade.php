@extends('layouts.admin')


@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> </title>
        <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
        <style>
            .container {
                border: 1px solid black;
            }

            .p1 {
                text-align: left;
            }

            .p2 {
                text-align: end;
            }

            .p3 {
                font-size: 12px;
                text-align: center;
                border-bottom: 3px solid black;
                padding-bottom: 10px;
            }

            h1 {
                text-align: center;
                font-size: 22px;
                color: black;
            }

            .h3 {
                border: 2px solid black;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 50px;
                padding-right: 50px;
                font-size: 20px;
            }

            #bold {
                font-weight: 600;
            }



            #x {
                border-bottom: 1px solid black;
                margin-top: 0%;
            }

            .A {
                margin-bottom: 8px;
            }

            .sahi {
                margin-top: 10px;
            }


            .custom-line {
                border-top: 3px solid black;
                margin: 20px 0;
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 55%;
                margin-left: 10PX;
            }

            .dis-receipt_no {
                border: none;
                border-bottom: 1px solid black;
                width: 47%;
                margin-left: 10PX;
            }

            .dis-member_date {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 86%;
                margin-left: 10PX;

            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 88%;
                margin-left: 10PX;
            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 70%;
                margin-left: 10PX;
            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 78%;
                margin-left: 10PX;
            }

            .dis-total_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 87%;
                margin-left: 10PX;

            }

            .dis-total_amount_words {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
            }

            .dis-cash_500 {
                border: none;
                border-bottom: 1px solid black;
                width: 61%;
                margin-left: 10PX;
            }

            .dis-cash_200 {
                border: none;
                border-bottom: 1px solid black;
                width: 63%;
                margin-left: 10PX;
            }

            .dis-cash_100 {
                border: none;
                border-bottom: 1px solid black;
                width: 40%;
                margin-left: 10PX;
            }

            .dis-cash_50 {
                border: none;
                border-bottom: 1px solid black;
                width: 45%;
                margin-left: 10PX;
            }

            .dis-cash_20 {
                border: none;
                border-bottom: 1px solid black;
                width: 47%;
                margin-left: 10PX;
            }

            .dis-sign1 {
                border: none;
                border-bottom: 1px solid black;
                width: 51%;
                margin-left: 10PX;
            }

            .dis-sign2 {
                border: none;
                border-bottom: 1px solid black;
                width: 55%;
                margin-left: 10PX;
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


            @media only screen and (max-width:600px) {
                .p3 {
                    font-size: 10px;
                }

                .h3 {
                    border: 2px solid black;
                    display: inline-block;
                    padding-top: 4px;
                    padding-bottom: 4px;
                    padding-left: 40px;
                    padding-right: 40px;
                    font-size: 15px;
                }

                .sb {
                    border-bottom: 1px solid black;
                    width: 30%;
                }


                .d {
                    width: 57px;
                }

                #bold {
                    font-size: 8px;
                }

                .A {
                    margin-bottom: 0%;
                }

                .sahi {
                    font-size: 9px;
                    margin-bottom: 0%;
                }

                .sn {
                    border-bottom: 1px solid black;
                    width: 35px;
                }

                .dis-member_no {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 55%;
                    margin-left: 10PX;
                }

                .dis-receipt_no {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 55%;
                    margin-left: 10PX;
                }

                .dis-member_date {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 68%;
                    margin-left: 10PX;
                }

                .dis-mr {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 86%;
                    margin-left: 10PX;

                }

                .dis-address {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 87%;
                    margin-left: 10PX;
                }

                .dis-village {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 75%;
                    margin-left: 10PX;
                }

                .dis-taluk {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 78%;
                    margin-left: 10PX;
                }

                .dis-city {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 81%;
                    margin-left: 10PX;
                }

                .dis-total_amount {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 87%;
                    margin-left: 10PX;

                }

                .dis-total_amount_words {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 86%;
                    margin-left: 10PX;

                }

                .dis-cash_500 {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 66%;
                    margin-left: 10PX;
                }

                .dis-cash_200 {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 69%;
                    margin-left: 10PX;
                }

                .dis-cash_100 {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 49%;
                    margin-left: 10PX;
                }

                .dis-cash_50 {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 55%;
                    margin-left: 10PX;
                }

                .dis-cash_20 {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 55%;
                    margin-left: 10PX;
                }
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


    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Default</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Default </li>
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
                                    <div class="row ">
                                        <div class="col-6 mt-2">
                                            <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <p class="p2">|| શ્રી ગણેશાય નમ ||</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ asset('admin/assets/images/h_n_mall_2.jpg') }}" width="100%">

                                            {{-- <h1> H.N. ગૃહ ઉદ્યોગ</h1> --}}
                                        </div>
                                        <div class="col-12">
                                            <p class="p3 mt-4"> બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ,
                                                ફોન : ૨૭૦૮૫૩૫, મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row A">
                                        <div class="col-4">
                                            <label style="width: 100%">સભ્યપદ નં. :<input type="text" readonly
                                                    class="dis-member_no" value="{{ $bachat->member_no }}">
                                            </label>
                                        </div>

                                        <div class="col-4">
                                            <center>
                                                <h3 class="h3"> પહોંચ </h3>
                                            </center>
                                        </div>

                                        <div class="col-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label style="width: 100%">રસીદ નંબર: <input type="text" readonly
                                                            class="dis-receipt_no" value="{{ $BachatReceipt->receipt_no }}">
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <label style="width: 100%">તારીખ : <input type="date"
                                                            class="dis-member_date" readonly
                                                            value="{{ $BachatReceipt->member_date }}">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-line"></div>
                                    <div class="row A">
                                        <div class="col-9">
                                            <label style="width: 100%"> શ્રી માન, : <input type="text" readonly
                                                    class="dis-mr" value="{{ $bachat->mr }}">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"> ગામ : <input id="row-1" type="text" readonly
                                                    class="dis-village" value="{{ $bachat->village }}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row A">
                                        <div class="col-9">
                                            <label style="width: 100%">સરનામુ: <input type="text" readonly
                                                    class="dis-address" value="{{ $bachat->address }}">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"> તા. : <input id="row-1" type="text" readonly
                                                    class="dis-taluk" value="{{ $bachat->taluk }}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row A">
                                        <div class="col-9">
                                            <label style="width: 100%">રકમ રૂ : <input type="text" readonly
                                                    class="dis-total_amount" value="{{ $BachatReceipt->total_amount }}">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"> જી.: <input id="row-1" type="text" readonly
                                                    class="dis-city" value="{{ $bachat->city }}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row A">
                                        <div class="col">
                                            <label style="width: 100%">શબ્દોમાં રૂપિયા : <input type="text" readonly
                                                    class="dis-total_amount_words"
                                                    value="{{ $BachatReceipt->total_amount_words }}">
                                            </label>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-12">
                                            <h4>Wallet Balance: <input type="text" name="wallet_balance"
                                                    value="{{ $wallet[0]->balance }}" readonly></h4>

                                        </div>
                                    </div> --}}

                                    <div class="row" id="x">
                                        {{-- <div class="col-2" id="bold"><label> ૨૦૦૦ X : <input type="text" readonly
                                                    class="dis" value="{{ $BachatReceipt->cash_2000 }}"></label>
                                        </div> --}}
                                        <div class="col-3" id="bold"><label style="width: 100%">૫૦૦ X : <input
                                                    type="text" readonly class="dis-cash_500"
                                                    value="{{ $BachatReceipt->cash_500 }}"></label>
                                        </div>
                                        <div class="col-3" id="bold"><label style="width: 100%">૨૦૦ X : <input
                                                    type="text" readonly class="dis-cash_200"
                                                    value="{{ $BachatReceipt->cash_200 }}"></label>
                                        </div>
                                        <div class="col-2" id="bold"><label style="width: 100%">૧૦૦ X : <input
                                                    type="text" readonly class="dis-cash_100"
                                                    value="{{ $BachatReceipt->cash_100 }}"></label>
                                        </div>
                                        <div class="col-2" id="bold"><label style="width: 100%"> ૫૦ X : <input
                                                    type="text" readonly class="dis-cash_50"
                                                    value="{{ $BachatReceipt->cash_50 }}"></label>
                                        </div>
                                        <div class="col-2" id="bold"><label style="width: 100%">૨૦ X : <input
                                                    type="text" readonly class="dis-cash_20"
                                                    value="{{ $BachatReceipt->cash_20 }}"></label>
                                        </div>
                                        <div class="custom-line"></div>

                                        <div class="row sahi">
                                            <div class="col-6"><label style="width: 100%">નાણા સ્વીકારનારની સહી: <input
                                                        type="text" class="dis-sign1" readonly></label>

                                            </div>
                                            <div class="col-6"><label style="width: 100%"> નાણા આપનારની સહી :<input
                                                        type="text" class="dis-sign2" readonly></label>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="but">
                                <center> <button style="width:100px" class="btn btn-sm btn-success but m-3"
                                        onclick="window.print();return false;">Print</button> </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </body>
@endsection
