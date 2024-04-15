@extends('layouts.admin')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin/assets/css/boot.css">
        <title></title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
        </style>
        <style>
            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            #w2 {
                font-size: 20px;
                font-weight: 500;
            }

            #heading {
                border-bottom: 4px solid black;
                margin-block-top: 5px;

            }

            .custom-line {
                border-top: 4px solid black;
                margin: 3px;
            }

            .h4 {
                border: 3px solid black;
                border-radius: 30px;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 25px;
                padding-right: 25px;
                font-size: 30px;
                font-weight: 700;
            }


            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
            }

            .r-f {
                /* text-align: center; */
            }

            .p2 {
                text-align: end;
            }

            .p3 {
                font-size: 20px;
                text-align: center;
                font-weight: 700;
            }

            #heading {
                border-bottom: 3px solid black;
            }

            #i1 img {
                margin-left: 15px;
                border: 4px solid black;
            }

            #i2 img {
                margin-left: 0px;

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

            #w3 {
                font-size: 22px;
                font-weight: 400;
            }

            h4 {
                text-align: center;
                border: 1px solid black;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                margin-bottom: 35px;
                margin-top: 20px;
                padding-left: 40px;
                padding-right: 40px;
            }

            .border {
                height: 200px;
                border: 1px solid black;
                margin-right: 20px;
            }

            .r-f {
                text-align: center;
                padding-right: 30px;
            }

            .img-fit {
                width: 90%;
                height: 230px;
                object-fit: cover;
                object-position: center;
            }

            #photo1 {
                max-width: 30%
            }

            .dis-no {
                border-radius: 10px;
                width: 49%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
                text-align: center;
            }

            .dis-yojanano_prakar {
                border-radius: 10px;
                width: 35%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
                text-align: center;

            }

            .dis-amount {
                border: none;
                border-bottom: 1px solid black;
                width: 50%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-words {
                border: none;
                border-bottom: 1px solid black;
                width: 80%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-date {
                border: none;
                border-bottom: 1px solid black;
                width: 70%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 80%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-age {
                border: none;
                border-bottom: 1px solid black;
                width: 78%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 79%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 85%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mobile_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 80%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mobile_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 87%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-hier_name {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-memeber_relation {
                border: none;
                border-bottom: 1px solid black;
                width: 51%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-paisa {
                border: none;
                border-bottom: 1px solid black;
                width: 62%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-member_date {
                border: none;
                border-bottom: 1px solid black;
                width: 12%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-total_amount_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 12%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-words_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 47%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-maturity_period_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 20%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            #g1 {
                padding-left: 0%;
                border: 5px solid black;
            }

            .dis-vyaj_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 20%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-vyaj_amount_words {
                border: none;
                border-bottom: 1px solid black;
                width: 44%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }
            .fonts {
                font-size: 20px;
                font-weight: 800;
            }
            .fonts2 {
                font-size: 30px;
                font-weight: 800;
            }

            .A {
                border-bottom: 3px solid black;

            }

            .b {
                border-bottom: 0px solid black;
            }

            .sahi {
                margin-top: 90px;
                text-align: center;
            }

            .l1 {
                border-top: 2px solid black;
                width: 170px;
            }

            .page-body {
                background-color: white;
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
            }
        </style>
    </head>

    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3>રિફંડ રકમ ફોર્મ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ
                                        ડિપોઝિટ પહોંચ

                                    </a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="{{ url('admin/deposite/completed_list') }}">રિફંડ
                                        એકાઉન્ટ સૂચિ

                                    </a>
                                </li>
                                <li class="breadcrumb-item active">રિફંડ રકમ ફોર્મ </li>
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
                                            <div class="col-6 mt-1">
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
                                            <h4 class="h4 mt-2">રિફંડ રકમ ફોર્મ</h4>
                                        </center>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="row photo justify-content">
                                                    <div class="col-3" id="photo1">
                                                        @if ($deposite->member_image)
                                                            <img src="{{ asset('uploads/deposite/member_image/' . $deposite->member_image) }}"
                                                                width="150px" class="img-fit" id="g1" />
                                                        @else
                                                        <img src="{{ asset('assets/white.png') }}" class="img-fit"
                                                        id="g1">
                                                @endif
                                                        <p class="r-f" id="w3"><b class="fonts">સભ્યનો ફોટો</b></p>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label style="width: 100%" id="w3"><b class="fonts">સભ્યપદ નં.
                                                                        :</b> <input class="dis-no" readonly type="text"
                                                                        value="{{ $deposite->member_no }}">
                                                                </label>
                                                                <label class="mt-3" style="width: 100%"
                                                                    id="w3"><b class="fonts">કુલ ભરેલી રકમ: રૂ</b>
                                                                    <input class="dis-amount" readonly type="text"
                                                                        value="{{ $deposite->total_amount }}">
                                                                </label>

                                                            </div>
                                                            <div class="col-6">
                                                                <label style="width: 100%" id="w3"><b class="fonts">યોજનાનો પ્રકાર
                                                                        :</b> <input class="dis-yojanano_prakar" readonly
                                                                        type="text" value="ડબલ રિફંડ">
                                                                </label>
                                                                <label class="mt-3" style="width: 100%"
                                                                    id="w3"><b class="fonts">તારીખ :
                                                                    </b><input class="dis-date" readonly type="text"
                                                                        value="{{ date('d/m/Y', strtotime($deposite->maturity_period)) }}">
                                                                </label>
                                                            </div>
                                                            <div class="col-12">
                                                                <label style="width: 100%" id="w3"><b class="fonts">રકમ શબ્દોમાં
                                                                        :</b>
                                                                    <input class="dis-words" readonly type="text"
                                                                        value="{{ $deposite->words }}">
                                                                </label>
                                                            </div>
                                                            <center class="mt-5" id="w3" style="font-size:30px"><b class="fonts2">(&nbsp;સભ્યની &nbsp; વિગત
                                                                &nbsp;)</b></center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                     
                                            <div class="col-8 mt-2">
                                                <label style="width: 100%"><b class="fonts">સભ્યનું નામ :</b> <input class="dis-mr"
                                                        readonly type="text" value="{{ $deposite->mr }}">
                                                </label>
                                            </div>
                                            <div class="col-4 mt-2">
                                                <label style="width: 100%"><b class="fonts">ગામ :</b><input class="dis-village" readonly
                                                        type="text" value="{{ $deposite->village }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8 mt-2">
                                                <label style="width: 100%"><b class="fonts">સરનામું:</b> <input class="dis-address"
                                                        readonly type="text" value="{{ $deposite->address }}">
                                                </label>
                                            </div>
                                            <div class="col-4 mt-2">
                                                <label style="width: 100%"><b class="fonts">જિલ્લા: </b><input class="dis-city" readonly
                                                        type="text" value="{{ $deposite->city }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mt-2">
                                                <label style="width: 100%"><b class="fonts">મોં (1) : </b><input class="dis-mobile_1"
                                                        readonly type="text" value="{{ $deposite->mobile_no_1 }}">
                                                </label>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <label style="width: 100%"><b class="fonts">(2) :</b><input class="dis-mobile_2"
                                                        readonly type="text" value="{{ $deposite->mobile_no_1 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8 mt-2">
                                                <label style="width: 100%"><b class="fonts">વારસદારનું નામ :</b> <input
                                                        class="dis-hier_name" readonly type="text"
                                                        value="{{ $deposite->heir_name_1 }}">
                                                </label>
                                            </div>
                                            <div class="col-4 mt-2">
                                                <label style="width: 100%"><b class="fonts">ઉંમર :</b><input class="dis-age" readonly
                                                        type="text" value="{{ $deposite->age_1 }}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row A">
                                            <div class="col-4 mt-2 mb-3">
                                                <label style="width: 100%"><b class="fonts">સભ્યનો સંબંધ :</b> <input
                                                        class="dis-memeber_relation" readonly type="text"
                                                        value="{{ $deposite->relationship_with_member_1 }}">
                                                </label>
                                            </div>
                                            <div class="col-8 mt-2 mb-3">
                                                <label style="width: 100%"><b class="fonts">પૈસા પરત આપવાનું કારણ :</b><input
                                                        class="dis-paisa" readonly type="text" value="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mt-3">
                                                <label style="width: 100%"><b class="fonts">આ યોજનામાં તા.</b> <input
                                                        class="dis-member_date" readonly type="text"
                                                        value="{{ date('d/m/Y', strtotime($deposite->member_date)) }}">
                                                    <b class="fonts"> રૂ.</b>
                                                    <input class="dis-total_amount_2" readonly type="text"
                                                        value="{{ $deposite->total_amount }}"><b class="fonts">(અંકે રૂ.<input
                                                            class="dis-words_2" readonly type="text"
                                                            value="{{ $deposite->words }}">)</b>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mt-2">
                                                <label style="width: 100%"><b class="fonts">ગ્રુપમાં ભરપાઈ કરેલ હતા તે આજ રોજની તા.</b>
                                                    <input class="dis-maturity_period_2" readonly type="text"
                                                        value="{{ date('d/m/Y', strtotime($deposite->maturity_period)) }}"><b class="fonts">રોજ
                                                        વળતર સહિત</b>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mt-2">
                                                <label style="width: 100%"><b class="fonts">રૂ. </b><input class="dis-vyaj_amount"
                                                        readonly type="text"
                                                        value="{{ $deposite->vyaj_amount }}"><b class="fonts">(અંકે રૂ.
                                                        <input class="dis-vyaj_amount_words" readonly type="text"
                                                            value="{{ $deposite->vyaj_amount_words }}">)પરત આપવામાં આવેલ
                                                        છે.</b>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row A">
                                            <div class="col mt-2">
                                                <label style="width: 100%"><b class="fonts"> 
                                                    <center>ઉપરોકત રકમ વળતર
                                                        સહીત મને પુરેપુરી મળી ગયલ છે.તે બદલ હું સહી કરી આપું છું. <br> 
                                                        તેમજ આ યોજનામાંથી રાજીખુશીથી મારુ નામ રદ કરાવું છું</b>
                                                    </center>
                                                        
                                                </label>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col mt-2">
                                                <label style="width: 100%">તે બદલ હું સહી કરી આપું છું. તેમજ આ
                                                    યોજનામાંથી
                                                    રાજીખુશીથી મારુ નામ રદ કરાવું છું
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mt-5">
                                                <label style="width: 100%">નોંધ નં .(1) - રેશનકાર્ડ
                                                    ઝેરોક્ષ,આધારકાર્ડ
                                                    ઝેરોક્ષ, સભ્યનો ફોટો
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row A">
                                            <div class="col mt-2">
                                                <label style="width: 100%">નોંધ નં .(2) -
                                                </label>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="custom-line"></div> --}}
                                        <div class="row b">
                                            <div class="col-4 sahi"><label class="l1" id="w2"> <b class="fonts">સભ્યની
                                                        સહી</b></label>
                                            </div>
                                            <div class="col-4 sahi"><label class="l1" id="w2"><b class="fonts">સાક્ષીની
                                                        સહી</b></label>
                                            </div>
                                            <div class="col-4 sahi"><label class="l1" id="w2"> <b class="fonts">એચ.એન.મોલ
                                                        વતી</b></label>
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
            </form>
        </div>
    </body>
@endsection
