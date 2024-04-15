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

        .border1 {
            height: 200px;
            border: 1px solid black;
            margin-right: 60px;
        }
       .photo{
        text-align: center;
       }
       #photo1{
        margin-left: 190px;
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
            border: 1px solid black;
            display: inline-block;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 25px;
            padding-right: 25px;
            font-size: 17px;
            margin-bottom: 20px;
        }
        h5{
            font-size: 13px;
        }
        .row-1 {
            text-align: center;
        }

        .l-1 {
            margin-bottom: 0;
        }

        .i1 {
            margin-bottom: 6px;
            width: 50%;
        }

        #row-1 {
            border: none;
        }

        .bharel-ru {
            width: 120px;
            height: 30px;
            margin-left: 20px;
        }
        .lab-s{
            margin-bottom: 10px;
        }
       .A{
        border:1px solid black;
        padding: 6px 0px 6px 4px;

       }
       .b{
        margin-top: 13px;
        border-top: 3px solid black;
       }
       .p4{
padding-top: 5px;
text-align: center;

       }
       .border-t {
            border-top: 1px solid black;
            margin-top: 80px;
        }
        #sahi{
            border-top: 3px solid black;
        }
        .s-sahi{
            text-align: end;
        }

        .ch-ml{
            margin-left: 30px;
        }
        @media only screen and (max-width:600px){
            .border1{
            height:110px;
            border: 1px solid black;
            margin-right: 10px;
            margin-bottom: 2px;
        }
        .p3{
            font-size:10px;
        }
        .i1 {
            width: 100%;
            height:17px;
        }

        h5{
            font-size: 10px;
        }
        .bharel-ru {
            width: 40px;
            height: 20px;
            margin-left: 0%;
            margin-RIGHT: 0%;
        }
        .lab-s{
            margin-bottom: 0%;
            font-size:7px;
        }
        .b{
        margin-top: 10px;

       }
       .A{
        font-size: 6px;
        padding:4px 0 0 0;

       }
       .p4{
        font-size: 10px;
        margin-bottom: 0%;
       }
       .ch-ml{
            margin-left: 6px;
            width:15px;
            height:12px;
        }
        .border1{
            height:110px;
            border: 1px solid black;
            margin-right: 10px;
            margin-bottom: 2px;
        }

.row-1{
    height:35px;
}
.photo{
    font-size: 5px;

       }
       #photo1{
    margin-left: 30px;
    padding-left: 55px;
       }
      #photo2{
        padding-left: 30px;
      }
    .f-a{
        font-size:10px;
    }
    #sahi{
        font-size: 10px;
    }
    .s-sahi{
            text-align: end;
        }
      .v{
        margin-bottom: 0%;
        margin-top: 14px;
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
                                        <h1> જન જાગૃતિ ગ્રુપ </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="p3">મોરબી રોડ, નવા જકાત નાકા પાસે, રાજકોટ-૩, ફોન : ૨૭૦૮૫૩૫, મો.૯૮૨૪૮ ૯૩૭૪ </p>
                                    </div>
                                </div>
                                <center>
                                    <h3 class="h3">સભ્યપદ ફોર્મ - ફિક્સ ડિપોઝિટ </h3>
                                </center>

                                <div class="row">
                                    <div class="col-3 ">
                                        <div class="row row-1">
                                            <div class="col-12"><label class="l-1">
                                                    <h5> સભ્યપદ નં.</h5>
                                                </label><br><input class="i1" type="text"></div>
                                        </div>
                                        <div class="row row-1">
                                            <div class="col-12"><label class="l-1">
                                                    <h5> સભ્યપદ તા.</h5>
                                                </label><br><input class="i1" type="date"></div>
                                        </div>
                                        <div class="row row-1">
                                            <div class="col-12"><label class="l-1">
                                                    <h5> પાકતિ મુદત</h5>
                                                </label><br><input class="i1" type="date"></div>
                                        </div>
                                    </div>

                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-3 border1 "></div>
                                            <div class="col-3 border1 "></div>
                                            <div class="col-3 border1 "></div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="row photo justify-content-center">
                                            <div class=" col-3" id="photo1">
                                                <p>સભ્યનો ફોટો</p>
                                            </div>
                                            <div class= "col-3" id="photo2">
                                                <p> વારસદારનો ફોટો</p>
                                            </div>
                                            <div class="col-3" id="photo3">
                                                <p> વારસદારનો ફોટો</p>
                                            </div>
                                        </div>

                                <div class="row lab-s">
                                    <div class="col-4"> <label class="rakam">કુલ ભરેલ રકમ : </label> <input class="bharel-ru" type="text"> </div>
                                    <div class="col-8 "> <label class="rakam"> શબ્દોમાં </label> <input id="row-1" type="text"></div>
                                </div>
                                <div class="row lab-s v">
                                    <div class="col-4"> <label>વળતર સહીત ની મળવાપાત્ર રકમ : </label> <input type="text" id="row-1"></div>
                                    <div class="col-8"> <label> અંકે રૂ.</label> <input id="row-1" type="text"></div>
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
                                    <div class="col-5"><label>વારસદારનું નામ:(1)</label> <input id="row-1" type="text"></div>
                                    <div class="col-3"><label>ઉંમર:</label> <input id="row-1" type="text"></div>
                                    <div class="col-4"><label> સભ્ય સાથેના સબંધ :</label> <input id="row-1" type="text"></div>
                                </div>
                                <div class="row lab-s">
                                    <div class="col-5"><label>વારસદારનું નામ:(૨)</label> <input id="row-1" type="text"></div>
                                    <div class="col-3"><label>ઉંમર:</label> <input id="row-1" type="text"></div>
                                    <div class="col-4"><label> સભ્ય સાથેના સબંધ :</label> <input id="row-1" type="text"></div>
                                </div>

                                <div class="A">
                                <div class="row ">
                                    <div class="col-6"><label> ૫૦૦૦ થી ૨૪૦૦૦ સુધીની રકમ ભરનાર સભ્ય માટે</label> </div>
                                    <div class="col-6"><label> > ૪ વર્ષ અને ૯-માસ માં ડબલ પરત આપવામાં આવશે.</label> <input class="ch-ml " type="checkbox"></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><label> ૨૫૦૦૦ થી ૪૯૦૦૦ સુધીની રકમ ભરનાર સભ્ય માટે</label> </div>
                                    <div class="col-6"><label> > ૪ વર્ષ અને ૭-માસ માં ડબલ પરત આપવામાં આવશે.</label> <input  class="ch-ml"type="checkbox"> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><label> ૫૦૦૦૦ થી વધુ રકમ ભરનાર સભ્ય માટે</label></div>
                                    <div class="col-6"><label> > ૪ વર્ષ અને ૫-માસ માં ડબલ પરત આપવામાં આવશે.</label> <input class="ch-ml" type="checkbox"></div>
                                </div>
                    </div>
                                <div class="row b">
                                    <div class="col-12">
                                        <p class="p4">મેં આ ગ્રુપ ના આગલા પાને દર્શાવેલ બધા જ નિયમો વાંચ્યા છે તેમજ તેને સમજી વિચારીને હું
                                            <br>
                                            મારી મરજીથી તેમાં જોડાવું છું તે બદલ હું નીચે સહી કરી આપું છું.</p3>
                                    </div>
                                </div>
                                <div class="row b" id="sahi">
                                    <div class="col-7 offset-1"><label class="border-t">સભ્યની સહી.</label></div>
                                    <div class="col-3 s-sahi"><label class="border-t"> સાક્ષી ની સહી</label></div>
                                </div>
                                <div class="row" id="sahi">
                                    <div class="col-7 offset-1"><label class="border-t">વારસદારની સહી </label></div>
                                    <div class="col-3 s-sahi"><label class="border-t">મેનેજર ની સહી</label></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </form>
</div>


@endsection
