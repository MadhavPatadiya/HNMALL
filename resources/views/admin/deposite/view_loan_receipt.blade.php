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
            .p1 {
                text-align: center;
                margin-left: 330px;
                font-weight: 700;
                margin-block: 2px;
                font-size: 14px;
            }

            .cip {

                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 10px;
                padding-right: 10px;
                font-size: 22px;
                border-radius: 3px;
                font-weight: 700;
                margin-top: 5px;
                border: 3px solid black;
                border-inline-end-width: 10px;
                border-inline-start-width: 10px;
                font-family: 'Noto Serif Gujarati', serif;
                text-align: center;
                margin-left: 380px;
                font-weight: 700;
                margin-block: -9px;
            }

            #s3 {
                padding-top: 27px;
                padding-left: 46px;
                padding-right: 20px;
                padding-bottom: 56px;
            }

            .cip2 {
                /* text-align: center; */
                font-size: 22px;
                font-weight: 700;
                border: 2px solid black;
                border-radius: 10px;
                text-align: justify;
            }

            .r-f {
                text-align: center;
            }

            .p2 {
                text-align: left;
            }

            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            #i1 img {
                margin-left: 15px;
                border: 4px solid black;
            }

            #i2 img {
                margin-left: 30px;

            }

            .p3 {
                text-align: center;
                font-size: 19px;
                /* border: 1px solid black; */
                /* background-color: black; */
                margin-bottom: 10px;
                margin-right: -55px;
                /* clip-path: polygon(0 0, 100% 0%, 100% 100%, 25% 100%); */
            }

            #w3 {
                font-size: 20px;
                font-weight: 500px;
            }

            .p4 {
                font-size: 15px;
                margin-top: 10px;
                text-align: center;
            }

            .AA {
                margin-top: 5px;
                padding: 15px;
            }


            h1 {
                text-align: center;
                font-size: 59px;
                /* border: 1px solid black; */
                /* border-radius: 20px; */
                /* background-color: black; */
                color: black;
                font-weight: 1000;
            }

            .dis-number {
                border: none;
                border-bottom: 1px solid black;
                width: 39%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;           
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 39%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-receipt_no {
                border: none;
                border-bottom: 1px solid black;
                width: 48%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-yojanano_prakar {
                border: none;
                /* border-bottom: 1px solid black; */
                width: 31%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-date {
                border: none;
                border-bottom: 1px solid black;
                width: 63%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-total_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-total_amount_words {
                border: none;
                border-bottom: 1px solid black;
                width: 81%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 76%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 79%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 85%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 87%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-mobile_no_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-mobile_no_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-jaminanu_nam {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-mobile_no_3 {
                border: none;
                border-bottom: 1px solid black;
                width: 91%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-cash_500 {
                border: none;
                border-bottom: 1px solid black;
                width: 36%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-cash_200 {
                border: none;
                border-bottom: 1px solid black;
                width: 36%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-cash_100 {
                border: none;
                border-bottom: 1px solid black;
                width: 36%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-cash_50 {
                border: none;
                border-bottom: 1px solid black;
                width: 45%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-cash_20 {
                border: none;
                border-bottom: 1px solid black;
                width: 45%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-cash_10 {
                border: none;
                border-bottom: 1px solid black;
                width: 54%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;            
            }

            .dis-loan {
                border: none;
                border-bottom: 2px solid black;
                width: 35%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;                
            }

            .custom-line2 {
                border-top: 4px solid black;
            }

            .custom-line {
                border-bottom: 4px solid black;
            }

            .LL {
                margin-top: 70PX
            }

            .shape {
                padding-right: 0px;
            }

            .photo {
                max-width: 90px !important;
            }

            .number {
                font-weight: 700;
                padding-left: 95px;
            }

            .Add {
                font-weight: 700;
                padding-left: 5px;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .bb {
                border: 4px solid black !important;
                padding: 1px;
            }

            .page-body {
                background-color: white;
            }

            .fonts{
                font-size: 20px;
                font-weight: 800;

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

                .cip {
                    margin-left: 300px;
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
                            <h3>ફિક્સ ડિપોઝીટ લોન પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝીટ પહોંચ
                                    </a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/deposite/' . $deposite->id . '/loan_receipt') }}">ફિક્સ
                                        ડિપોઝીટ લોન પહોંચ યાદી
                                    </a>
                                </li>

                                <li class="breadcrumb-item active">ફિક્સ ડિપોઝીટ લોન પહોંચ </li>
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
                                        {{-- <div class="col mt-1 photo">
                                                <img src="{{ asset('admin/assets/images/image.jpg') }}" height="120px"
                                                    width="90px" class="img">
                                            </div>
                                            <div class="col-md-7 col-sm-4 mt-1 ">
                                                <p class="p1 ml-3">|| શ્રી વેલનાથ કૃપા || &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                    || શ્રી ગણેશાય નમ: ||</p>
                                                {{-- <p class="p2">|| શ્રી ગણેશાય નમ: ||</p> --}}
                                        {{-- <p class="p3">લોનની પહોંચ</p> --}}

                                        {{-- <h1> H.N ગૃહ ઉદ્યોગ</h1>

                                        </div>
                                        <div class="col-md-3 col-sm-1">
                                            <p class="p3">લોનની પહોંચ</p>
                                            <div class="row mt-5">
                                                <p class="number">નંબર: <input type="text" class="dis-number"></p>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mt-2">
                                                <p class="Add">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, ફોન :
                                                    ૨૭૦૮૫૩૫, મો.૯૮૨૪૮ ૯૩૭૪૫ /
                                                    ૯૮૨૪૮ ૩૫૮૦૮</p>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row">
                                                <div class="col"> <img src="{{ asset('admin/assets/images/12345.jpg') }}"
                                                        width="100%" class="img"></div>

                                            </div> --}}
                                        <div class="row ">
                                            <div class="col-6 mt-2">
                                                <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <p class="cip">
                                                    બચત પહોંચ
                                                </p>
                                            </div>
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
                                                    <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>

                                            </div>
                                            <div class="col-4 mt-3" id="i2"> <img
                                                    src="{{ asset('admin/assets/images/HN.jpg') }}" height="100px"
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
                                                        readonly type="text" value="{{ $loanReceipts->receipt_no }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">યોજનાનો પ્રકાર:</b> <input
                                                        class="dis-yojanano_prakar" readonly type="text"
                                                        value="{{ $loanReceipts->yojanano_prakar }}">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">તારીખ. </b><input class="dis-date" readonly
                                                        type="text"
                                                        value="{{ date('d-m-Y', strtotime($loanReceipts->date)) }}">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mt-3  ">
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">રકમ રૂ :</b> <input class="dis-total_amount"
                                                        readonly type="text" value="{{ $loanReceipts->total_amount }}">
                                                </label>
                                            </div>
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">અંકે રૂપિયા :</b> <input
                                                        class="dis-total_amount_words" readonly type="text"
                                                        value="{{ $loanReceipts->total_amount_words }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">સાભ્યનું નામ શ્રી, </b><input class="dis-mr"
                                                        readonly type="text" value="{{ $deposite->mr }}">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">ગામ :</b><input class="dis-village" readonly
                                                        type="text" value="{{ $deposite->village }}">
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
                                                <label style="width: 100%"><b class="fonts">જી.</b><input class="dis-taluk" readonly
                                                        type="text" value="{{ $deposite->city }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label style="width: 100%"><b class="fonts">મો (1).</b><input class="dis-mobile_no_1"
                                                        readonly type="text" value="{{ $deposite->mobile_no_1 }}">
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label style="width: 100%"><b class="fonts">મો (2).</b><input class="dis-mobile_no_2"
                                                        readonly type="text" value="{{ $deposite->mobile_no_2 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label style="width: 100%"><b class="fonts">જામીનનું નામ.</b><input
                                                        class="dis-jaminanu_nam" readonly type="text"
                                                        value="{{ $loanReceipts->jaminanu_nam }}">
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <label style="width: 100%"><b class="fonts">મો.</b><input class="dis-mobile_no_3"
                                                        readonly type="text" value="{{ $loanReceipts->mobile_no_3 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">500 X :</b><input class="dis-cash_500"
                                                        readonly type="text" value="{{ $loanReceipts->cash_500 }}">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">200 X :</b><input class="dis-cash_200"
                                                        readonly type="text" value="{{ $loanReceipts->cash_200 }}">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">100 X :</b><input class="dis-cash_100"
                                                        readonly type="text" value="{{ $loanReceipts->cash_100 }}">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">50 X :</b><input class="dis-cash_50"
                                                        readonly type="text" value="{{ $loanReceipts->cash_50 }}">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">20 X :</b><input class="dis-cash_20"
                                                        readonly type="text" value="{{ $loanReceipts->cash_20 }}">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">1 X :</b><input class="dis-cash_10" readonly
                                                        type="text" value="{{ $loanReceipts->cash_1 }}">
                                                </label>
                                            </div>
                                        </div>


                                        <div class="row mt-2 custom-line2">
                                            <label style="width: 100%" class="LL" id="w3"><b class="fonts">લોન લેનાર
                                                    સહી</b><input class="dis-loan" readonly type="text" value=""
                                                    id="w3"><b class="fonts">H.N. ગૃહ
                                                    ઉદ્યોગ વતી,</b>
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
