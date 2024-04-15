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
            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            #w3 {
                font-size: 18px;
                font-weight: 300px;
            }

            #heading {
                border-bottom: 4px solid black;
                margin-block-top: 5px;

            }

            #i1 img {
                margin-left: 15px;
                border: 4px solid black;
            }

            #i2 img {
                margin-left: 0px;

            }

            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
            }

            .p2 {
                text-align: end;
            }

            .p3 {
                font-size: 20px;
                text-align: center;
                font-weight: 700;
            }

            h1 {
                text-align: center;
                font-size: 22px;
                color: black;
            }

            .h3 {
                border: 3px solid black;
                border-radius: 10px;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 25px;
                padding-right: 25px;
                font-size: 30px;
                font-weight: 700;
            }

            .lab-s {
                margin-bottom: 10px;
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-member_date {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-refund_date {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 91%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-amount {
                border: none;
                border-bottom: 1px solid black;
                width: 78%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-daughter_name {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 89%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn {
                border: none;
                border-bottom: 1px solid black;
                width: 49%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn2 {
                border: none;
                border-bottom: 1px solid black;
                width: 47%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn3 {
                border: none;
                border-bottom: 1px solid black;
                width: 68%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn4 {
                border: none;
                border-bottom: 1px solid black;
                width: 69%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-age_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .sahi {
                margin-top: 10px;
                border-top: 4px solid black;


            }

            .AA {
                border-bottom: 0px solid black;
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
                font-size: 20px;
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
                            <h3>દીકરીના કરિયાવર - રદ કરવાની પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="{{ url('admin/dikari/receipt') }}">દીકરીના
                                        કરિયાવર માટેની પહોંચ
                                    </a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/dikari/deactivate_list') }}">નિષ્ક્રિય
                                        એકાઉન્ટ સૂચિ
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">દીકરીના કરિયાવર - રદ કરવાની પહોંચ </li>
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
                                        <div class="row">
                                            <div class="col-6 mt-2">
                                                <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                                            </div>

                                        </div>
                                        <div class="row" id="heading">
                                            <div class="col-3" id="i1"> <img
                                                    src="{{ asset('admin/assets/images/image.jpg') }}" height="120px"
                                                    width="90px"></div>

                                            <div class="col-6">
                                                <img src="{{ asset('admin/assets/images/h_n_mall_2.jpg') }}" width="100%">
                                                {{-- <h1>h_n_mall
                                                    <b class="fonts">એચ.એન.મોલ</b>
                                                </h1> --}}
                                                <b class="fonts">
                                                    <p class="p3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>
                                            </div>
                                            <div class="col-3" id="i2"> <img
                                                    src="{{ asset('admin/assets/images/HN.jpg') }}" height="120px"
                                                    width=""></div>
                                        </div>
                                        <center>
                                            <h3 class="h3 mt-2">દીકરીના કરિયાવર - રદ કરવાની પહોંચ</h3>
                                        </center>
                                        <div class="row AA">
                                            <div class="col-4"><label style="width: 100%" id="w3"> <b class="fonts">સભ્યપદ નં.</b>
                                                    <input type="text" readonly class="dis-member_no"
                                                        value="{{ $dikari->member_no }}">
                                                </label></div>
                                            <div class="col-4"><label style="width: 100%" id="w3"><b class="fonts">સભ્યપદ
                                                        તા.</b><input type="date" readonly class="dis-member_date"
                                                        value="{{ $dikari->member_date }}"></label>
                                            </div>
                                            <div class="col-4"><label style="width: 100%"
                                                    id="w3"><b class="fonts">તારીખ:</b><input type="date" readonly
                                                        class="dis-refund_date"
                                                        value="{{ $deactivate->first()->deactivate_date }}"></label>
                                            </div>
                                            <div class="col-9">
                                                <label style="width: 100%"> <b class="fonts">શ્રી, :</b>
                                                    <input type="text" readonly class="dis-mr"
                                                        value="{{ $dikari->mr }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label> <b class="fonts">ગામ :</b><input type="text" readonly class="dis-village"
                                                        value="{{ $dikari->village }}">
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <label style="width: 100%"><b class="fonts">સરનામુ:</b><input type="text" readonly
                                                        class="dis-address" value="{{ $dikari->address }}">
                                                </label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">તા. :</b>
                                                    <input type="text" readonly class="dis-taluk"
                                                        value="{{ $dikari->taluk }}"></label>
                                            </div>
                                            <div class="col-9"><label style="width: 100%"><b class="fonts">પરત કરેલી રકમ :</b><input
                                                        type="text" readonly class="dis-amount"
                                                        value="{{ $deactivate->first()->amount }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"><b class="fonts"> જી.: </b><input
                                                        type="text" readonly class="dis-city"
                                                        value="{{ $dikari->city }}"></label>
                                            </div>
                                            <div class="col-6"><label style="width: 100%"><b class="fonts">દિકરીનું નામ:</b><input
                                                        type="text" readonly class="dis-daughter_name"
                                                        value="{{ $dikari->daughter_name }}"></label>
                                            </div>
                                            <div class="col-6"><label style="width: 100%"><b class="fonts">દિકરીની ઉંમર:</b><input
                                                        type="text" readonly class="dis-age_2"
                                                        value="{{ $dikari->age_2 }}"></label>
                                            </div>
                                        </div>

                                        <div class="row sahi ">
                                            <div class="col-6 mt-2"><label id="w3"> <b class="fonts">સભ્યની સહી :</b></label>
                                                <input type="text" class="dis-sn3" readonly>
                                            </div>
                                            <div class="col-6 mt-2"><label id="w3"><b class="fonts">સાક્ષીની સહી:</b></label>
                                                <input type="text" class="dis-sn4" readonly>
                                            </div>
                                            <div class="col-6"><label id="w3"> <b class="fonts">નાણા આપનારની સહી :</b></label>
                                                <input type="text" class="dis-sn" readonly>
                                            </div>
                                            <div class="col-6"><label id="w3"><b class="fonts">નાણા સ્વીકારનારની
                                                        સહી:</b></label>
                                                <input type="text" class="dis-sn2" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center> <button style="width:100px" class="btn btn-sm btn-success but m-3 "
                                    onclick="window.print();return false;">Print</button>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
@endsection
