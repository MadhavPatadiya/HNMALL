@extends('layouts.admin')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/css/boot.css">
    <title></title>
    <style>
        .container {
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            border: 1px solid black;
            border-radius: 20px;
            background-color: black;
            color: white;
            margin-bottom: 10px;
            padding-bottom: 12px;
            padding-top: 5px;
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
            border: 1px solid black;
            display: inline-block;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 20px;
            padding-right: 20px;
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
            font-size: 15px;
            text-align: center;
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
#photo{
    text-align: center;
}
        @media only screen and (max-width:600px) {

            h1 {
            text-align: center;
            font-size: 18px;
            border: 1px solid black;
            border-radius: 8px;
            background-color: black;
            color: white;
            margin-bottom: 10px;
            margin-top: 5px;
            padding-bottom: 0%;
            padding-top: 0%;
        }
        h4{
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
            width:40px;
        }
        .border1{
            height:100px;
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
        #photo{
       font-size: 5px;
              padding-top: 2px;
        }
        .lab-s{
            font-size:6px;
        }
        .b {
            border-bottom: 3px solid black;
            padding-top: 1px;
        }

        .p3 {
            font-size: 7px;
            text-align: center;
        }
        }
    </style>
</head>


<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Default</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
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
                <div class="card">
                    <div class="card-header">
                        <div class="row ">
                            <div class="col-6 mt-1">
                                <p class="p1">|| શ્રી વેલનાથ કૃપા ||</p>
                            </div>
                            <div class="col-6 mt-1">
                                <p class="p2">|| શ્રી ગણેશાય નમ ||</p>
                            </div>
                        </div>
                        <div class="row" id="heading">
                            <div class="col-3"> <img src="assets/images/image.jpg" height="120px" width="90px"></div>
                            <div class="col-6">
                                <h1> જન જાગૃતિ ગ્રુપ </h1>
                                <p class="p3">મોરબી રોડ, નવા જકાત નાકા પાસે, રાજકોટ-૩, ફોન : ૨૭૦૮૫૩૫, મો.૯૮૨૪૮ ૯૩૭૪ </p>
                            </div>
                        </div>
                        <center>
                            <h3>સભ્યપદ ફોર્મ - દિકરીના કરીયાવર માટે</h3>
                        </center>
                        <div class="row  justify-content-center">
                            <div class="col-2 mr-5 border1"></div>
                            <div class="col-2 mr-5 ml-5 border1"></div>
                            <div class="col-2 mr-5 ml-5 border1"></div>
                        </div>

                        <div class="row justify-content-center">

                            <div class="col-2 mr-5"id="photo">
                                <p>સભ્યનો ફોટો</p>
                            </div>
                            <div class="col-2 mr-5 ml-5" id="photo">
                                <p> વારસદારનો ફોટો</p>
                            </div>
                            <div class="col-2 mr-5 ml-5" id="photo">
                                <p> દિકરીનો ફોટો </p>
                            </div>
                        </div>

                        <center>
                            <h3 class="h4">કુલ ભરવા પાત્ર રકમ-૧૦,૦૦૦</h3>
                        </center>
                        <div class="row lab-s">
                            <div class="col-8"> <label> સભ્યપદ નં.</label> <input id="row-1" type="text"></div>
                            <div class="col-4"> <label>સભ્યપદ તા.</label> <input id="row-1" type="date"></div>
                        </div>
                        <div class="row lab-s ">
                            <div class="col-6"><label> શ્રીમાન, </label> <input id="row-1" type="text"></div>
                            <div class="col-3 "><label> ઉંમર:</label> <input id="row-1" type="text"></div>
                            <div class="col-3"><label> ગામ :</label> <input id="row-1" type="text"></div>
                        </div>
                        <div class="row lab-s">
                            <div class="col-9"><label>સરનામુ :</label> <input id="row-1" type="text"></div>
                            <div class="col-3"><label> તા. : </label> <input id="row-1" type="text"></div>
                        </div>
                        <div class="row lab-s">
                            <div class="col-3"><label>સભ્યનો ધંધો :</label> <input id="row-1" type="text"></div>
                            <div class="col-3"><label> મો :</label> <input id="row-1" type="text"></div>
                            <div class="col-3"><label> મો:</label> <input id="row-1" type="text"></div>
                            <div class="col-3"><label> જી.: </label> <input id="row-1" type="text"></div>
                        </div>
                        <div class="row lab-s">
                            <div class="col-6"><label>વારસદારનું નામ:</label> <input id="row-1" type="text"></div>
                            <div class="col-2"><label>ઉંમર:</label> <input id="row-1" type="text"></div>
                            <div class="col-4"><label> સભ્ય સાથેના સબંધ :</label> <input id="row-1" type="text"></div>
                        </div>
                        <div class="row lab-s">
                            <div class="col-8"><label>દિકરીનું નામ :</label> <input id="row-1" type="text"></div>
                            <div class="col-4 "><label> સભ્ય સાથેના સબંધ :</label> <input id="row-1" type="text"></div>
                        </div>
                        <div class="row A lab-s">
                            <div class="col-8"><label>દિકરીની જન્મ તા.:</label> <input id="row-1" type="text"></div>
                            <div class="col-2"><label> ઉંમર વર્ષ:</label> <input id="row-1" type="text"></div>
                            <div class="col-2 "><label> દિકરીનો સહી </label> <input id="row-1" type="text"></div>
                        </div>
                        <div class="row b lab-s">
                            <div class="col-12">
                                <p class="p3"> ખાસ નોંધઃ- જે સભ્ય વેલનાથ ગ્રુપમાં જોડાયેલ છે પરંતુ તે સભ્ય ગૃપમાંથી કોઇપણ જાતની વસ્તુની ખરીદી<br>
                                     કરવા માંગતા ન હોય તો તેને મળવાપાત્ર વળતર સહીતની રોકડ રકમ ૮૦-% જ મળવાપાત્ર રહેશે.

                            </p></div>
                        </div>

                        <div class="row b">
                            <div class="col-12">
                                <p class="p3">મેં આ ગ્રુપ ના આગલા પાને દર્શાવેલ બધા જ નિયમો વાંચ્યા છે તેમજ તેને સમજી વિચારીને હું <br>
                                    મારી મરજીથી તેમાં જોડાવું છું તે બદલ હું નીચે સહી કરી આપું છું.</p3>
                            </div>
                        </div>
                        <div class="row d">
                            <div class="col-4 b-right"><label>સભ્યની સહી.</label></div>
                            <div class="col-4 b-right"><label>વારસદારની સહી </label></div>
                            <div class="col-4 sahi"><label>જનજાગૃતિ ગુપ વતી</label></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    @endsection
