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

            .p1 {
                text-align: left;
            }

            .p2 {
                text-align: end;
            }

            .p3 {
                font-size: 15px;
                margin-top: 10px;
            }

            #heading {
                border-bottom: 3px solid black;
            }

            img {
                margin-bottom: 10px;
                margin-left: 10px;
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
            }

            h4{
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

            #photo {
                text-align:center;
            }

            .a {
                border-bottom: 3px solid black;
            }

            .b {
                border-bottom: 3px solid black;
            }

            .c {
                border-bottom: 3px solid black;
            }

            .d {
                font-size: 18px;
                text-align: center;
            }

            #row-1 {
                border: none;
            }

            .A {
                margin-bottom: 10px;
            }

            #sahi {
                margin-top: 80px;

            }

            .v-sahi {
                text-align: end;
            }

            .border-t {
                border-top: 2px solid black;

            }
            .va-p{
                padding-left: 65px;
            }
        .i1{
            margin-bottom: 8px;
        }

            @media only screen and (max-width: 600px) {

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

            .border {
                height: 110px;
                border: 1px solid black;
                margin-right: 10px;
            }
            #photo {
                margin-right: 10px;
                font-size: 4px;
            }

            .A{
                font-size:6px;
            }
            .f-s{
                font-size:6px;
            }
            .border-t {
                font-size:6px;
            }
            .d {
                font-size: 5px;
                text-align: center;
                padding-top:2px;
            }
            #sahi {
                margin-top: 50px;

            }
            .l-1 h5{
                font-size:8px;
            }
            .i1{
                width:65px;
                margin-bottom: 6px;
            }
            button,
            input {
                overflow: visible;
            }

            button,
            select {
                text-transform: none;
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
                        <h1> જન જાગૃતિ ગ્રુપ</h1>
                        <p class="p3">મોરબી રોડ, નવા જકાત નાકા પાસે, રાજકોટ-૩, ફોન : ૨૭૦૮૫૩૫, મો.૯૮૨૪૮ ૯૩૭૪</p>
                    </div>
                </div>
                <center> <h4>બચત સભાપદ ફોર્મ</h4></center>

                <div class="row">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="col-12"><label class="l-1">
                                    <h5>સભ્યપદ નં.</h5>
                            </label><br><input class="i1" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="col-12"><label class="l-1">
                                    <h5>સભ્યપદ તા.</h5>
                            </label ><br><input class="i1" type="date"></div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-3 border"></div>
                            <div class="col-3 border"></div>
                            <div class="col-3 border"></div>
                        </div>

                        <div class="row">
                            <div class="col-3" id="photo">
                                <p>સભ્યનો ફોટો</p>
                            </div>
                            <div class="col-3" id="photo">
                                <p>વારસદારનો ફોટો</p>
                            </div>
                            <div class="col-3" id="photo">
                                <p class="va-p">વારસદારનો ફોટો</p>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="row A">
                    <div class="col-6"><label>શ્રીમાન,</label> <input id="row-1" type="text"></div>
                    <div class="col-3"><label>ઉંમર</label> <input id="row-1" type="text"></div>
                    <div class="col-3"><label>ગામ:</label> <input id="row-1" type="text"></div>
                </div>
                <div class="row A">
                    <div class="col-5"><label>સરનામુ :</label> <input id="row-1" type="text"></div>
                    <div class="col-4"><label>શેરી નં-</label> <input id="row-1" type="text"></div>
                    <div class="col-2"><label> તા. : </label> <input id="row-1" type="text"></div>
                </div>
                <div class="row A">
                    <div class="col-3"><label>સભ્યનો ધંધો:</label> <input id="row-1" type="text"></div>
                    <div class="col-3"><label>મો:</label> <input id="row-1" type="text"></div>
                    <div class="col-3"><label>મો:</label> <input id="row-1" type="text"></div>
                    <div class="col-3"><label>જી.:</label> <input id="row-1" type="text"></div>
                </div>
                <div class="row A">
                    <div class="col-5"><label>વારસદારનું નામ:(1)</label> <input id="row-1" type="text"></div>
                    <div class="col-3"><label>ઉંમર :</label> <input id="row-1" type="text"></div>
                    <div class="col-4"><label>સભ્ય સાથેના સબંધ :</label> <input id="row-1" type="text"></div>
                </div>
                <div class="row a A ">
                    <div class="col-5"><label>વારસદારનું નામ(2)</label> <input id="row-1" type="text"></div>
                    <div class="col-3 "><label>ઉંમર :</label> <input id="row-1" type="text"></div>
                    <div class="col-4 mb-5 "><label>સભ્ય સાથેના સબંધ :</label> <input id="row-1" type="text"></div>
                </div>
                <div class="row">
                    <div class="col-8"><label>
                            <h6 class="f-s">->ફિક્સ ૧૨-માસ માટે વળતર ૧.૨૫% લેખે આપવામાં આવશે.</h6>
                        </label></div>
                    <div class="col-4"> <input type="checkbox"></div>
                </div>
                <div class="row b">
                    <div class="col-8"><label>
                            <h6 class="f-s">-> અધવચ્ચે ગમે ત્યારે ઉપાડે તો ૧% લેખે વળતર આપવામાં આવશે.</h6>
                        </label></div>
                    <div class="col-4"> <input type="checkbox"></div>
                </div>
                <div class="row b ">
                    <div class="col-12 mt-1">
                        <h6 class="f-s">સભય ને ગમેત્યારે પૈસા ની જરૂર હોય તો ઓફિસે ફોને કરીને અગાવથી જાણ કરવાની રહેશે.</h6>
                    </div>
                    <div class="col-12 f-s"> > જો રૂ.૧૦૦૦૦-/ સુધી રકમ લેવાની હોય તો ૨-દિવસ અગાવ જાણ કરવાની રહેશે.</div>
                    <div class="col-12 f-s"> > જો રૂ.૨૫૦૦૦-/ સુધી રકમ લેવાની હોય તો ૫-દિવસ અગાવ જાણ કરવાની રહેશે.</div>
                    <div class="col-12 f-s"> > જો રૂ.૫૦૦૦૦-/ સુધી રકમ લેવાની હોય તો ૧૦-દિવસ અગાવ જાણ કરવાની રહેશે.</div>
                    <div class="col-12 f-s mb-1"> > જો રૂ.૧,૦૦,૦૦૦-/સુધી રકમ લેવાની હોય તો 15-દિવાસ આગવ જન કરવાની રહેશે.</div>
                </div>
                <div class="row b">
                    <div class="col-12">
                        <h6 class="d">
                            મેં આ ગ્રુપ ના આગલા પાને દર્શાવેલ બધા જ નિયમો વાંચ્યા છે તેમજ તેને સમજી વિચારીને હું
                            મારી મરજીથી તેમાં જોડાવું છું  <br> તે બદલ હું નીચે સહી કરી આપું છું.
                        </h6>
                    </div>
                </div>
                <div class="row b" id="sahi">
                    <div class="col-7 offset-1"><label class="border-t"> સભ્યની સહી</label></div>
                    <div class="col-3 v-sahi"><label class="border-t"> વારસદારની સહી</label></div>
                </div>
                <div class="row" id="sahi">
                    <div class="col-7 offset-1"><label class="border-t">વારસદારની સહી</label></div>
                    <div class="col-3 v-sahi"><label class="border-t">જનજાગૃતિ ગુપ વતી</label></div>
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
