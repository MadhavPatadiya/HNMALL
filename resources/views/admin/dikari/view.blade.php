@extends('layouts.admin')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin/assets/css/boot.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
        </style>
        <title></title>
        <style>
            .page-body {
                background-color: white;
            }

            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            #w2 {
                font-size: 25px;
                font-weight: 500;
            }

            #w3 {
                font-size: 25px;
                font-weight: 500;
            }

            #g2 {
                padding-left: 0%;
                border: 5px solid black;
            }

            #g1 {
                padding-left: 0%;
                border: 5px solid black;
            }

            #g3 {
                padding-left: 0%;
                border: 5px solid black;
            }


            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
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

            h4 {
                text-align: center;
                border: 1px solid black;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                margin-bottom: 45px;
                margin-top: 20px;
                padding-left: 40px;
                padding-right: 40px;
            }

            .h4 {
                border: 3px solid black;
                border-radius: 10px;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 20px;
                font-weight: 700;
            }

            .border1 {
                height: 200px;
                border: 1px solid black;
                margin-right: 20px;
            }

            .p2 {
                text-align: end;
            }

            #heading {
                border-bottom: 3px solid black;
            }

            img {
                margin-bottom: 10px;
                margin-left: 10px;
            }

            #row-1 {
                border: none;
            }

            .A {
                border-bottom: 3px solid black;
                padding-bottom: 30px;
            }

            .b {
                border-bottom: 3px solid black;
                padding-top: 3px;
            }

            .p3 {
                font-size: 19px;
                text-align: center;
                font-weight: 700;
            }

            .d {
                height: 125px;
            }

            .b-right {
                border-right: 1px solid black;
                text-align: center;
                padding-top: 10px;
            }

            .sahi {
                text-align: center;
                padding-top: 10px;
            }

            #photo {
                text-align: center;
                margin: 30px;
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
            }


            .dis-member_date {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 90%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;
            }

            .dis-age {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 80%;
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
                width: 68%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-member_business {
                border: none;
                border-bottom: 1px solid black;
                width: 50%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }


            .dis-mobile_no_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-mobile_no_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 65%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 68%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-heir_name_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 70%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-age_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-relationship_with_member_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 47%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-daughter_name {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-relationship_with_member_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 47%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-birth_date_of_daughter {
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
                width: 47%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-daughter_sign_image {
                border: none;
                border-bottom: 2px solid black;
                width: 35%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }
            .amount_get{
                border: none;
                border-bottom: 1px solid black;
                width: 7%;
                margin-left: 10PX;
                font-size: 17px;
                font-weight: 800;

            }

            .dis-daughter_sign_image2 {
                border-bottom: 2px solid black;
            }

            .photo1 {
                width: 100%;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .img-fit {
                width: 245px;
                height: 340px;
                object-fit: cover;
                object-position: center;
            }

            .sign2 {
                height: 50px;
                object-position: center;    
            }
            .fonts {
                font-size: 17px;
                font-weight: 800;
            } 


            @media only screen and (max-width:600px) {

                h1 {
                    text-align: center;
                    font-size: 17px;
                    border: 1px solid black;
                    border-radius: 8px;
                    background-color: black;
                    color: white;
                    margin-bottom: 10px;
                    margin-top: 5px;
                    padding-bottom: 0%;
                    padding-top: 0%;
                }

                h4 {
                    text-align: center;
                    border: 1px solid black;
                    display: inline-block;
                    padding-top: 4px;
                    padding-bottom: 4px;
                    margin-bottom: 30px;
                    margin-top: 20px;
                    padding-left: 16px;
                    padding-right: 16px;
                    font-size: 10px;
                }

                .p3 {
                    font-size: 5px;
                    margin-top: 10px;
                }

                img {
                    margin-bottom: 7px;
                    margin-left: 10px;
                    height: 50px;
                    width: 40px;
                }

                .border1 {
                    height: 100px;
                    border: 1px solid black;
                    margin-right: 10px;
                }

                .h4 {
                    border: 1px solid black;
                    display: inline-block;
                    padding-top: 2px;
                    padding-bottom: 2px;
                    padding-left: 20px;
                    padding-right: 20px;
                    font-size: 10px;
                }

                #photo {
                    font-size: 5px;
                    padding-top: 2px;
                }

                .lab-s {
                    font-size: 6px;
                }

                .b {
                    border-bottom: 3px solid black;
                    padding-top: 1px;
                }

                .p3 {
                    font-size: 7px;
                    text-align: center;
                }

                .photo1 {
                    width: 100%;
                }

                .r-f {
                    font-size: 5px;
                }


            }

            @media print {
                .but {
                    display: none;
                }

                .tap-top {
                    display: none !important;
                }

                .card-header {
                    padding: 0px 0px 0px 0px !important;
                    border: 0px 0px 0px 0px !important;
                }

                .page-body {
                    margin: 10px 0px 0px 0px !important;
                }

                /* @page {
                                                                        size: A4;
                                                                    } */
            }
        </style>
    </head>


    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે - View</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i
                                        data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/dikari/create') }}">સભ્યપદ ફોર્મ -
                                    દિકરીના કરિયાવર માટે
                                </a>
                            </li>
                            <li class="breadcrumb-item active">સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે - View </li>
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
                                        <h4 class="h3 mt-4">સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે</h4>
                                    </center>
                                    <div class="row  justify-content-center">

                                    </div>

                                    <div class="row ">

                                        <div class="col-3 "id="photo">

                                            @if ($dikari->member_image)
                                                <img src="{{ asset('uploads/dikari/member_image/' . $dikari->member_image) }}"
                                                    class="img-fit" id="g1" />
                                            @else
                                                <img src="{{ asset('assets/white.png') }}" class="img-fit" id="g1">
                                            @endif

                                            <p class="r-f"><b class="fonts">સભ્યનો ફોટો</b></p>
                                        </div>
                                        <div class="col-3" id="photo">
                                            @if ($dikari->heir_image_1)
                                                <img src="{{ asset('uploads/dikari/heir_image_1/' . $dikari->heir_image_1) }}"
                                                    class="img-fit" id="g2" />
                                            @else
                                                <img src="{{ asset('assets/white.png') }}" class="img-fit" id="g1">
                                            @endif

                                            <p class="r-f"> <b class="fonts">વારસદારનો ફોટો</b></p>
                                        </div>
                                        <div class="col-3" id="photo">
                                            @if ($dikari->daughter_image)
                                                <img src="{{ asset('uploads/dikari/daughter_image/' . $dikari->daughter_image) }}"
                                                    class="img-fit" id="g3" />
                                            @else
                                                <img src="{{ asset('assets/white.png') }}" class="img-fit" id="g1">
                                            @endif

                                            <p class="r-f"> <b class="fonts">દિકરીનો ફોટો</b> </p>
                                        </div>
                                    </div>


                                    <div class="row lab-s mt-5">
                                        <div class="col-4">
                                            <label style="width: 100%" id="w2"><b class="fonts"> સભ્યપદ નં.</b> <input
                                                    class="dis-member_no" readonly type="text"
                                                    value="{{ $dikari->member_no }}">
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <center>
                                                <h3 class="h4">કુલ ભરવા પાત્ર રકમ-૧૦,૦૦૦</h3>
                                            </center>
                                        </div>

                                        <div class="col-4">
                                            <label style="width: 100%" id="w2"><b class="fonts">સભ્યપદ તા.</b> <input
                                                    class="dis-member_date" readonly type="text"
                                                    value="{{ date('d-m-Y', strtotime($dikari->member_date)) }}"></label>
                                        </div>
                                    </div>
                                    <div class="row lab-s mt-2">
                                        <div class="col-6">
                                            <label style="width: 100%"><b class="fonts"> શ્રી, </b><input class="dis-mr" readonly
                                                    type="text" value="{{ $dikari->mr }}"></label>
                                        </div>
                                        <div class="col-2">
                                            <label style="width: 100%"><b class="fonts"> ઉંમર:</b> <input class="dis-age" readonly
                                                    type="text" value="{{ $dikari->age }}"></label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%"><b class="fonts"> ગામ :</b> <input class="dis-village" readonly
                                                    type="text" value="{{ $dikari->village }}"></label>
                                        </div>
                                    </div>
                                    <div class="row lab-s mt-2">
                                        <div class="col-8">
                                            <label style="width: 100%"><b class="fonts">સરનામુ :</b> <input class="dis-address" readonly
                                                    type="text" value="{{ $dikari->address }}"></label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%"><b class="fonts"> સોસાયટી :</b> <input class="dis-taluk" readonly
                                                    type="text" value="{{ $dikari->taluk }}"></label>
                                        </div>

                                    </div>
                                    <div class="row lab-s mt-2">
                                        <div class="col-3">
                                            <label style="width: 100%"><b class="fonts">સભ્યનો ધંધો</b> : <input
                                                    class="dis-member_business" readonly type="text"
                                                    value=" {{ $dikari->member_business }}"></label>

                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"><b class="fonts"> મો :</b> <input class="dis-mobile_no_1"
                                                    readonly type="text" value="{{ $dikari->mobile_no_1 }}"></label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"><b class="fonts"> મો: </b><input class="dis-mobile_no_2" readonly
                                                    type="text" value="{{ $dikari->mobile_no_2 }}"></label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"><b class="fonts"> જીલ્લો : </b><input class="dis-city" readonly
                                                    type="text" value="{{ $dikari->city }}"></label>
                                        </div>
                                    </div>
                                    <div class="row lab-s mt-2">
                                        <div class="col-6">
                                            <label style="width: 100%"><b class="fonts">વારસદારનું નામ:</b> <input
                                                    class="dis-heir_name_1" readonly type="text"
                                                    value="{{ $dikari->heir_name_1 }}"></label>
                                        </div>
                                        <div class="col-2">
                                            <label style="width: 100%"><b class="fonts">ઉંમર:</b> <input class="dis-age_1" readonly
                                                    type="text" value="{{ $dikari->age_1 }}"></label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%"> <b class="fonts">સભ્ય સાથેના સબંધ :</b> <input
                                                    class="dis-relationship_with_member_1" readonly type="text"
                                                    value="{{ $dikari->relationship_with_member_1 }}"></label>
                                        </div>
                                    </div>
                                    <div class="row lab-s mt-2">
                                        <div class="col-8">
                                            <label style="width: 100%"><b class="fonts">દિકરીનું નામ :</b> <input
                                                    class="dis-daughter_name" readonly type="text"
                                                    value="{{ $dikari->daughter_name }}"></label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%"><b class="fonts">સભ્ય સાથેના સબંધ :</b> <input
                                                    class="dis-relationship_with_member_2" readonly type="text"
                                                    value="{{ $dikari->relationship_with_member_2 }}"></label>
                                        </div>
                                    </div>
                                    <div class="row A lab-s mt-2">
                                        <div class="col-5">
                                            <label style="width: 100%">
                                                <b class="fonts">દિકરીની જન્મ તા.:</b> <input class="dis-birth_date_of_daughter" readonly
                                                    type="text"
                                                    value="{{ date('d-m-Y', strtotime($dikari->birth_date_of_daughter)) }}">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%"> <b class="fonts">દિકરીની ઉંમર: </b><input class="dis-age_2"
                                                    readonly type="text" value="{{ $dikari->age_2 }}">
                                            </label>
                                        </div>

                                        <div class="col-4">
                                            <div>
                                                <center>
                                                  
                                                    <label style="width: 100%"> <b class="fonts">દિકરીની
                                                            સહી:</b>
                                                             @if ($dikari->daughter_sign_image)
                                                            <img class="dis-daughter_sign_image" readonly
                                                                src="{{ asset('uploads/dikari/daughter_sign_image/' . $dikari->daughter_sign_image) }}"
                                                                width="150px" class="sign2" />
                                                        @else
                                                        <input
                                                        class="dis-relationship_with_member_2" readonly type="text"
                                                       >
                                                        @endif
                                                    </label>
                                                   
                                                    {{-- <img class="dis-daughter_sign_image" readonly
                                                        src="{{ asset('uploads/dikari/daughter_sign_image/' . $dikari->daughter_sign_image) }}"
                                                        width="150px" /> --}}
                                                </center>
                                            </div>
                                        </div>
                                        <div class="row lab-s">
                                            <div class="col-12">
                                                <label style="width: 100%"> <b class="fonts">૧૮ વર્ષ પૂર્ણ થતાં મળવાપાત્ર રકમ : <input class="amount_get"
                                                    readonly type="text" value="{{ $dikari->kariyavar_amount }}"></b>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row b lab-s mt-2">
                                        <div class="col-12">
                                            <p class="p3">

                                                નિયમો : દીકરીના ૧૮ વર્ષ પૂણ થતા લગ્ન સમય સભ્ય કરિયાવર લેવા ના ઇચ્છતા હોય તો
                                                સર્ટિફિકેટમાં દર્શાવેલ રકમથી<br>૮૦ % રકમ રોકડા આપી નામ કેન્સલ કરાવી
                                                શકાશે.<br>
                                                જે સભ્ય અધવચ્ચેથી ફાઈલ રદ કરાવશે તો ભરેલી રકમના ૧ % લેખે વાળતર સહીત રકમ પરત
                                                આપવામાં આવશે.


                                                {{-- ખાસ નોંધઃ- જે સભ્ય વેલનાથ ગ્રુપમાં જોડાયેલ છે પરંતુ તે સભ્ય
                                                ગૃપમાંથી કોઇપણ જાતની વસ્તુની ખરીદી<br>
                                                કરવા માંગતા ન હોય તો તેને મળવાપાત્ર વળતર સહીતની રોકડ રકમ ૮૦-% જ મળવાપાત્ર
                                                રહેશે. --}}
                                            </p>
                                        </div>
                                    </div>

                                    {{-- <div class="row b ">
                                        <div class="col-12">
                                            <p class="p3">મેં આ ગ્રુપ ના આગલા પાને દર્શાવેલ બધા જ નિયમો વાંચ્યા છે તેમજ
                                                તેને સમજી વિચારીને હું <br>
                                                મારી મરજીથી તેમાં જોડાવું છું તે બદલ હું નીચે સહી કરી આપું છું.</p>
                                        </div>
                                    </div> --}}
                                    <div class="row d">

                                        <div class="col-4 b-right"><label id="w2"><b class="fonts">સભ્યની સહી.</b></label><br>
                                            @if ($dikari->member_sign_image)
                                                <img class="dis-daughter_sign_image2"
                                                    src="{{ asset('uploads/dikari/member_sign_image/' . $dikari->member_sign_image) }}"
                                                    width="150px" class="sign2" />
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            {{-- <img src="{{ asset('uploads/dikari/member_sign_image/' . $dikari->member_sign_image) }}"
                                                width="150px" /> --}}
                                        </div>

                                        <div class="col-4 b-right"><label id="w2"><b class="fonts">વારસદારની સહી</b> </label><br>
                                            @if ($dikari->heir_sign_image_1)
                                                <img class="dis-daughter_sign_image2"
                                                    src="{{ asset('uploads/dikari/heir_sign_image_1/' . $dikari->heir_sign_image_1) }}"
                                                    width="150px" class="sign2" />
                                            @else
                                                <p>&nbsp;</p>
                                            @endif

                                            {{-- <img src="{{ asset('uploads/dikari/heir_sign_image_1/' . $dikari->heir_sign_image_1) }}"
                                                width="150px" /> --}}

                                        </div>

                                        <div class="col-4 sahi"><label id="w2"><b class="fonts">એચ.એન.મોલ વતી</b></label><br>
                                            <label style="font-size:21px;margin: -20px;font-weight:700;" for="">{{$user->where('id', '=', $dikari->login_id)->first()->name }}</label><br>

                                            @if ($dikari->sign_on_behalf_of_jan_jagaruti_image)
                                                <img class="dis-daughter_sign_image2"
                                                    src="{{ asset('uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/' . $dikari->sign_on_behalf_of_jan_jagaruti_image) }}"
                                                    width="150px" class="sign2" />
                                            @else
                                                <p >&nbsp;</p>
                                            @endif
                                            {{-- <img src="{{ asset('uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/' . $dikari->sign_on_behalf_of_jan_jagaruti_image) }}"
                                                width="150px" /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="but">
                                <center> <button style="width:100px" class="btn btn-sm btn-success but m-5 "
                                        onclick="window.print();return false;">Print</button> </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
