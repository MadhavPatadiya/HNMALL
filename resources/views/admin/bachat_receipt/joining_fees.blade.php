@extends('layouts.admin')




@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
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
                margin-top: 30px;
            }


            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
            }

            p.p1 {
                margin-bottom: 2px;
            }

            p.p2 {
                margin-bottom: 2px;
            }

            ​.p2 {
                text-align: end;
            }

            .p3 {
                font-size: 17px;
                text-align: center;
                font-weight: 700;
            }

            #w2 {
                font-size: 17px;
            }

            #w3 {
                font-family: 'Noto Serif Gujarati', serif;
                font-size: 17px;

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
                border: 4px solid black;
            }

            #i2 img {
                margin-left: 0px;

            }


            #b7 {
                font-family: 'Noto Serif Gujarati', serif;
                font-size: 30px;
                margin: 4px;
                width: 30px;
                text-align: center;
                justify-content: center;
                border-bottom: 2px solid #000000;
            }

            #heading {
                border-bottom: 4px solid black;
                margin-block-top: 5px;


            }

            .ru- {
                border-bottom: 1px solid black;
                font-weight: 700;
                border-block-end-hight: 60px;


            }

            .h3 {
                border: 3px solid black;
                border-radius: 40px;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 25px;
                padding-right: 25px;
                font-size: 17px;
                font-weight: 700;

            }

            .lab-s {
                margin-bottom: 10px;
            }

            .sahay-b {
                border: 1px solid black;
                margin: 0%;
                height: 25px;
                padding-top: 2px;
                border-radius: 5px;
                margin-left: 60px;
                text-align: center;
            }

            span.d {
                border-bottom: 1px solid black;
            }

            .A {
                border: 1px solid black;
                padding: 6px 0px 6px 4px;
                margin-top: 25px;
            }

            .b {
                border-bottom: 0px solid black;
            }

            .sahi {
                margin-top: 30px;
                text-align: center;
            }

            .l1 {
                border-top: 1px solid black;
                width: 170px;
            }

            .ch-ml {
                margin-left: 30px;
            }

            .custom-line {
                border-top: 3px solid black;
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-member_date {
                border: none;
                border-bottom: 1px solid black;
                width: 76%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-age {
                border: none;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 68%;
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

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-member_business {
                border: none;
                border-bottom: 1px solid black;
                width: 38%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mobile_no_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mobile_no_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 78%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-heir_name_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-heir_name_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-age_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 52%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-age_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 52%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-relationship_with_member_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-relationship_with_member_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .fonts {
                font-size: 20px;
                font-weight: 800;
            }


            @media only screen and (max-width:600px) {
                .p3 {
                    font-size: 10px;
                }

                .lab-s {
                    margin-bottom: 0%;
                    font-size: 7px;
                }

                .s input {
                    border: none;
                    border-bottom: 1px solid black;
                    width: 30px;
                    margin-left: 2px;
                }

                .sahay-b {
                    border: 1px solid black;
                    margin: 0%;
                    height: 13px;
                    border-radius: 5px;
                    margin-left: 0px;
                    font-size: 3px;
                }

                .A {
                    font-size: 6px;
                    padding: 4px 0 0 0;
                    margin-top: 5px;
                }

                .sahi {
                    margin-top: 30px;
                    text-align: center;
                }

                .l1 {
                    border-top: 1px solid black;
                    width: 80px;
                    font-size: 8px;
                }

                .ch-ml {
                    margin-left: 6px;
                    width: 15px;
                    height: 12px;
                }

                .h3 {
                    font-size: 10px;
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


    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3>Joining Fees </h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક
                                        બચત
                                        પહોંચ
                                    </a>
                                <li class="breadcrumb-item active">બચત ખાતું ખોલાવવા પહોંચ </li>
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
                                                    <p class="p3 mt-4">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>
                                            </div>
                                            <div class="col-3" id="i2"> <img
                                                    src="{{ asset('admin/assets/images/HN.jpg') }}" height="120px"
                                                    width=""></div>
                                        </div>
                                        <center>
                                            <h3 class="h3 mt-2"><b class="fonts">બચત ખાતું ખોલાવવા પહોંચ</b></h3>
                                        </center>
                                        <div class="row lab-s s">
                                            <div class="col-9 ">
                                                <label style="width: 100%" id="w2"><b class="fonts"> સભ્યપદ નં.</b> <input
                                                        class="dis-member_no" readonly value="{{ $bachat->member_no }}"
                                                        type="text">
                                                </label>
                                            </div>
                                            <div class="col-3 "><label style="width: 100%" id="w2"><b class="fonts"> તા.:</b><input
                                                        class="dis-member_date" readonly type="date"
                                                        value="{{ $bachat->member_date }}"></label>
                                            </div>
                                        </div>
                                        <div class="row lab-s ">
                                            <div class="col-6">
                                                <label style="width: 100%"> <b class="fonts">શ્રીમાન,</b>
                                                    <input class="dis-mr" readonly type="text"
                                                        value="{{ $bachat->mr }}">
                                                </label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"><b class="fonts"> ઉંમર: </b><input
                                                        class="dis-age" readonly type="text"
                                                        value="{{ $bachat->age }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">ગામ :</b> <input
                                                        class="dis-village" readonly type="text"
                                                        value="{{ $bachat->village }}"></label>
                                            </div>
                                        </div>
                                        <div class="row lab-s">
                                            <div class="col-9"><label style="width: 100%"><b class="fonts">સરનામુ :</b> <input
                                                        class="dis-address" readonly type="text"
                                                        value="{{ $bachat->address }}"></label></div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">તાલુકો :</b> <input
                                                        class="dis-taluk" readonly type="text"
                                                        value="{{ $bachat->taluk }}"></label>
                                            </div>
                                        </div>
                                        <div class="row lab-s">
                                            <div class="col-3"><label style="width: 100%"><b class="fonts">સભ્યનો ધંધો :</b> <input
                                                        class="dis-member_business" readonly type="text"
                                                        value="{{ $bachat->member_business }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">મો :</b> <input
                                                        class="dis-mobile_no_1" readonly type="text"
                                                        value="{{ $bachat->mobile_no_1 }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"><b class="fonts"> મો:</b> <input
                                                        class="dis-mobile_no_2" readonly type="text"
                                                        value="{{ $bachat->mobile_no_2 }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">જીલ્લો:</b> <input
                                                        class="dis-city" readonly type="text"
                                                        value="{{ $bachat->city }}"></label>
                                            </div>
                                        </div>
                                        <div class="row lab-s">
                                            <div class="col-7"><label style="width: 100%"><b class="fonts">વારસદારનું નામ:(1)</b>
                                                    <input class="dis-heir_name_1" readonly type="text"
                                                        value="{{ $bachat->heir_name_1 }}"></label></div>
                                            <div class="col-2"><label style="width: 100%"><b class="fonts">ઉંમર:</b> <input
                                                        class="dis-age_1" readonly type="text"
                                                        value="{{ $bachat->age_1 }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">સબંધ :</b>
                                                    <input class="dis-relationship_with_member_1" readonly type="text"
                                                        value="{{ $bachat->relationship_with_member_1 }}"></label>
                                            </div>
                                        </div>
                                        <div class="row lab-s">
                                            <div class="col-7"><label style="width: 100%"><b class="fonts">વારસદારનું નામ:(૨)</b>
                                                    <input class="dis-heir_name_2" readonly type="text"
                                                        value="{{ $bachat->heir_name_2 }}"></label>
                                            </div>
                                            <div class="col-2"><label style="width: 100%"><b class="fonts">ઉંમર: </b><input
                                                        class="dis-age_2" readonly type="text"
                                                        value="{{ $bachat->age_2 }}"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">સબંધ :</b>
                                                    <input class="dis-relationship_with_member_2" readonly type="text"
                                                        value="{{ $bachat->relationship_with_member_2 }}"></label>
                                            </div>
                                        </div>
                                        <div class="row lab-s bb custom-line" style="text-align:center">
                                            <div class="col-12" id="s1"> <b class="fonts">આપના તરફથી ખાતું ખોલાવવા માટે રૂ </b>
                                                <b id="b7">૨૦૦/-</b></span> <b class="fonts"> રૂ
                                                    શબ્દોમાં</b><b id="b7">બસો રૂપીયા પુરા </b><b class="fonts">રોકડા મળેલ છે.</b>
                                            </div>
                                            {{-- <div class="col-12">
                                                <span class="ru-">

                                            </div> --}}
                                            {{-- <div class="col-3">
                                                <span class="ru-"></span>
                                            </div>
                                            <div class="col-2">
                                                <span></span>
                                            </div> --}}
                                        </div>
                                        <div class="row c custom-line">
                                            <div class="col" id="w3"> <i style='font-size:24px'
                                                    class='fas fa-caret-up'></i> <b class="fonts">સભ્યને રૂપિયાની જરૂરિયાત હોય
                                                    તો
                                                    ૧-માસ
                                                    અગાઉ જાણ કરવાની
                                                    રહેશે.</b></div>
                                        </div>
                                        <div class="row c cb " id="w3">
                                            <div class="col"> <i style='font-size:24px'
                                                    class='fas fa-caret-up'></i><b class="fonts"> સભ્યએ ભરેલી રકમનું વળતર દર મહિને
                                                    ચુકવવામાં આવશે
                                                    અથવા
                                                    તેના ખાતામાં જમા કરવામાં આવશે</b></div>
                                        </div>
                                        <div class="container2">
                                            <div class="row b custom-line">
                                                <div class="col-4 sahi"><label class="l1"> <b style="font-size:17px;">નાણા સ્વીકારનારની
                                                            સહી</b></label>
                                                </div>
                                                <div class="col-4 sahi"><label class="l1"><b style="font-size:17px;"> નાણા આપનારની
                                                            સહી</b></label>
                                                </div>

                                                <div class="col-4 sahi" style="margin-top: 5px;">
                                                    
                                                    <span>{{$user->where('id', '=', $bachat->login_id)->first()->name }} </span><br>
                                                    <label class="l1">
                                                    <b style="font-size:17px;">એચ.એન.મોલ વતી</b></label>
                                                </div>
                                                {{-- <div class="col-4">
                                                    <label style="width: 100%"> <b class="fonts">એચ.એન.મોલ વતી</b>
                                                            
                                                        <input value="{{$user->where('id', '=', $bachat->login_id)->first()->name }}" type="text" class="dis-sign2" readonly>
                                                    </label>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="but">
                                        <center> <button style="width:100px" class="btn btn-sm btn-success but m-3 "
                                                onclick="window.print();return false;">Print</button> </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
@endsection
