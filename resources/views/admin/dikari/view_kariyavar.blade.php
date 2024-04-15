@extends('layouts.admin')


@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>form</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
    </style>
    <style>
        .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
        .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
            margin-left: 0px;
            -webkit-transition: 0.5s;
            transition: 0.5s
        }

        #i2 img {
            margin-left: 0px;

        }

        .container {
            border: 4px solid black;
            border-radius: 40px;
            font-family: 'Noto Serif Gujarati', serif;
        }

        h1 {
            text-align: center;
            font-size: 70px;
            color: black;
            font-weight: 1000;
        }

        .p3 {
            font-size: 20px;
            text-align: center;
            font-weight: 700;
        }

        .h3 {
            display: inline-block;
            padding-top: 4px;
            /* padding-bottom: 4px; */
            padding-left: 10px;
            padding-right: 10px;
            font-size: 22px;
            border-radius: 3px;
            font-weight: 700;
            /* margin-top: 5px; */
            border: 3px solid black;
            /* border-style-left: 3px solid black; */
            border-inline-end-width: 10px;
            border-inline-start-width: 10px;
            font-family: 'Noto Serif Gujarati', serif;
        }

        .bhr-rakam {
            text-align: center;
            margin-bottom: 10px;
        }

        .p2 {
            text-align: end;
        }

        .p3 {
            font-size: 15px;
            text-align: center;
        }

        #heading {
            border-bottom: 4px solid black;
        }

        img {
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .lab-s {
            margin-bottom: 10px;
        }


        .bb {
            border-bottom: 4px solid black;
        }

        .border-t {
            border-top: 1px solid black;
            margin-top: 70px;
        }

        .ru- {
            border-bottom: 1px solid black;
        }

        .c {
            text-align: center;
            border-bottom: 3px solid black;
            padding-bottom: 5px;
        }

        .dis2-member_no {
            border: none;
            border-bottom: 1px solid black;
            width: 68%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-receipt_no {
            border: none;
            border-bottom: 1px solid black;
            width: 62%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-member_date {
            border: none;
            border-bottom: 1px solid black;
            width: 60%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-mr {
            border: none;
            border-bottom: 1px solid black;
            width: 94%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-village {
            border: none;
            border-bottom: 1px solid black;
            width: 68%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-address {
            border: none;
            border-bottom: 1px solid black;
            width: 87%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-taluk {
            border: none;
            border-bottom: 1px solid black;
            width: 60%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }


        .dis2-city {
            border: none;
            border-bottom: 1px solid black;
            width: 60%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }


        .dis2-sign1 {
            border: none;
            border-bottom: 1px solid black;
            width: 51%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-sign2 {
            border: none;
            border-bottom: 1px solid black;
            width: 51%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis-kariyavar {
            border: 3px solid black;
            margin: 2%;
            width: 12%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
            text-align: center;
        }

        .dis2-kariyavar {
            border: 3px solid black;
            margin: 2%;
            width: 12%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
            text-align: center;

        }

        .dis2-daughter_name {
            border: none;
            border-bottom: 1px solid black;
            width: 82%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-birth_date_of_daughter {
            border: none;
            border-bottom: 1px solid black;
            width: 47%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-amount_date {
            border: none;
            border-bottom: 1px solid black;
            width: 45%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-age_2 {
            border: none;
            border-bottom: 1px solid black;
            width: 24%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .sahi {
            border-top: 4px solid black;
        }

        .page-body {
            background-color: white;
        }

        .fonts {
            font-size: 20px;
            font-weight: 800;
        }

        @media only screen and (max-width:600px) {

            h1 {
                text-align: center;
                font-size: 12px;
                border: 1px solid black;
                border-radius: 8px;
                background-color: black;
                color: white;
                margin-bottom: 10px;
                padding-bottom: 0%;
                padding-top: 0%;
            }

            .p3 {
                font-size: 5px;
                text-align: center;
            }

            img {
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
                height: 50px;
                width: 40px;
            }

            .h3 {
                border: 1px solid black;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 5px;
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

    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3>દીકરીના કરિયાવર માટેની યોજના-પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                            data-feather="home"></i></a>
                                </li>

                                <li class="breadcrumb-item active"> <a href="{{ url('admin/dikari/receipt') }}">દીકરીના
                                        કરિયાવર ની પહોંચ

                                    </a>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/dikari/completed_list') }}">કરિયાવર
                                        પ્રાપ્ત
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">દીકરીના કરિયાવર માટેની યોજના-પહોંચ </li>
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

                                        </div>
                                        <div class="row" id="heading">
                                            <div class="col-3" id="i1"> <img
                                                    src="{{ asset('admin/assets/images/image.jpg') }}" height="120px"
                                                    width="90px"></div>

                                            <div class="col-6">
                                                <img src="{{ asset('admin/assets/images/h_n_mall_2.jpg') }}" width="100%">

                                                {{-- <h1>
                                                    <b class="fonts">એચ.એન.મોલ</b>
                                                </h1> --}}
                                                <b class="fonts">
                                                    <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>
                                            </div>
                                            <div class="col-3" id="i2"> <img
                                                    src="{{ asset('admin/assets/images/HN.jpg') }}" height="120px"
                                                    width=""></div>
                                        </div>
                                        <center>
                                            <h3 class="h3 mt-2">દીકરીના કરિયાવર માટેની યોજના-પહોંચ </h3>
                                        </center>

                                        <div class="row">
                                            <div class="col-5">
                                                <label style="width: 100%"><b class="fonts">સભ્યપદ નં. : </b><input
                                                        type="text" class="dis2-member_no" readonly
                                                        value="{{ $dikari->member_no }}">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">રસીદ નંબર :</b><input
                                                        type="text" class="dis2-receipt_no" readonly
                                                        value="{{ $kariyavar->first()->receipt_no }}">
                                                </label>
                                            </div>

                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">તારીખ :</b> <input
                                                        type="date" class="dis2-member_date" readonly
                                                        value="{{ $dikari->member_date }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <label style="width: 100%"> <b class="fonts">શ્રી,</b><input type="text"
                                                        class="dis2-mr" readonly value="{{ $dikari->mr }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">ગામ :</b>
                                                    <input id="row-1" type="text" class="dis2-village" readonly
                                                        value="{{ $dikari->village }}"></label></div>
                                        </div>
                                        <div class="row A">
                                            <div class="col-9">
                                                <label style="width: 100%"><b class="fonts">સરનામુ :</b> <input
                                                        type="text" class="dis2-address" readonly
                                                        value="{{ $dikari->address }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">તાલુકો :</b>
                                                    <input id="row-1" type="text" class="dis2-taluk" readonly
                                                        value="{{ $dikari->taluk }}"></label>
                                            </div>
                                        </div>
                                        <div class="row A">
                                            <div class="col-9">
                                                <b class="fonts">દીકરીનું નામ :</b> <input class="dis2-daughter_name"
                                                    id="row-1" type="text" readonly
                                                    value="{{ $dikari->daughter_name }}">
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">જિલ્લો
                                                        :</b> <input id="row-1" type="text" class="dis2-city"
                                                        readonly value="{{ $dikari->city }}">
                                            </div>
                                        </div>
                                        <div class="row A">

                                            <div class="col-3">
                                                <b class="fonts">દિકરીની ઉંમર વર્ષ :</b> <input class="dis2-age_2"
                                                    id="row-1" type="text" readonly value="{{ $dikari->age_2 }}">
                                            </div>
                                            <div class="col-4">
                                                <b class="fonts">દિકરીની જન્મ તા :</b> <input
                                                    class="dis2-birth_date_of_daughter" id="row-1" type="text"
                                                    readonly value="{{ $dikari->birth_date_of_daughter }}">
                                            </div>
                                            <div class="col-5"><label style="width: 100%"> <b class="fonts">રકમ
                                                        મળવાપાત્ર તારીખ :
                                                    </b><input id="row-1" type="text" class="dis2-amount_date"
                                                        readonly value="{{ $dikari->amount_date }}">
                                            </div>
                                        </div>


                                        <div class="row A">
                                            <center>
                                                <div class="col-8" style="font-weight: bold">
                                                    @if ($dikari->worth_kariyavar == $kariyavar->first()->kariyavar)
                                                        <input type="text" class="dis2-kariyavar" readonly
                                                            value="{{ $kariyavar->first()->kariyavar }}"><b
                                                            class="fonts">નું કરિયાવર મળેલ
                                                            છે.</b><label style="width: 100%"></label>
                                                    @else
                                                        <input type="text" class="dis2-kariyavar" readonly
                                                            value="{{ $kariyavar->first()->kariyavar }}"><b
                                                            class="fonts">નું રકમ મળેલ
                                                            છે.</b><label style="width: 100%"></label>
                                                    @endif
                                                </div>
                                            </center>
                                        </div>

                                        <div class="row sahi">
                                            <div class="col-6 mt-5"><label style="width: 100%"> <b class="fonts">નાણા
                                                        આપનારની સહી :</b>
                                                    <input type="text" class="dis2-sign1"></label>
                                            </div>
                                            <div class="col-6 mt-5"><label style="width: 100%"><b class="fonts">નાણા
                                                        સ્વીકારનારની સહી
                                                        :</b>
                                                    <input type="text" class="dis2-sign2"></label>
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
            </form>
        </div>
    </body>
@endsection
