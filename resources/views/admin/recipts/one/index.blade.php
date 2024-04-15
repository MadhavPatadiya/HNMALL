@extends('layouts.admin')


@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
        <title>form</title>
        <style>
            .container {
                border: 1px solid black;
            }

            .row {
                margin-bottom: 8px;
            }

            input {
                border: none;
                border-bottom: 1px solid black;
                width: 160px;
                margin-left: 10PX;
            }

            h2 {
                text-align: center;
            }

            p {
                text-align: center;
            }

            h4 {
                text-align: center;
                border: 1px solid black;
                margin-top: 10px;
                margin-bottom: 10px;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            #col-1 {
                border: 1px solid black;
                border-radius: 10px;
                margin-left: 10px;
                margin-top: 10px;
            }

            #col-2 {
                border: 1px solid black;
                border-radius: 10px;
                margin-left: 13px;
                margin-top: 10px;
            }

            #row-d {
                width: 120%;
            }

            #x {
                width: 130px;
                margin-bottom: 38px;
                margin-top: 6px;
            }

            #bold {
                font-weight: 600;
            }
        </style>
    </head>

    <body>
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
                                    <div class="col-12">
                                        <h2>જન જાગૃતિ ગ્રુપ</h2>
                                        <p>મોરબી રોડ, નવા જકાત નાકા પાસે, રાજકોટ-3 મો. 92392 92692</p>
                                    </div>
                                    <div class="row" id="heading">
                                        <div class="col">
                                            <h4>માસીક બચત</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5"> <label>સભ્યપદ નં. :</label><input type="text"></div>
                                        <div class="col-4"> <label>તારીખ :</label> <input type="date"></div>
                                        <div class="col-3"> <label>ગામ :</label> <input type="text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <label>નામ :</label>
                                            <input type="text">
                                        </div>
                                        <div class="col"> <label>તા. :</label> <input type="text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <label>Sarnamu :</label>
                                            <input type="text">
                                        </div>
                                        <div class="col"> <label>જિલ્લો :</label> <input type="text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"><label>રકમ રૂપિયા :</label> <input type="text"></div>
                                        <div class="col-6 "><label>અંકે રૂપિયા :</label> <input type="text"></div>
                                    </div>
                                    <div class="row" id="row-d">
                                        <div class="col-5" id="col-1">
                                            <div> <label>આગલી રકમ કુલ વ્યાજ :</label> <input id="col-6" type="text">
                                            </div>
                                            <div> <label> + ચાલુ વ્યાજ :</label> <input id="col-6" type="text"></div>
                                            <div> <label> = કુલ વ્યાજ :</label> <input id="col-6" type="text"></div>
                                            <div> <label>ઉપાડેલી વ્યાજ રકમ :<input id="col-6" type="text"></label>
                                            </div>
                                        </div>
                                        <div class="col-5" id="col-2">
                                            <div> <label>આગલી ભરેલી રકમ :</label> <input id="col-6" type="text">
                                            </div>
                                            <div> <label>કુલ જમા રકમ :</label> <input id="col-6" type="text"></div>
                                            <div> <label>ઉપાડેલ રકમ :</label> <input id="col-6" type="text"></div>
                                            <div> <label>કુલ બાકી જમા રકમ :<input id="col-6" type="text"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3" id="bold"><label>૨૦૦૦ X :</label> <input id="x"
                                                type="text"></div>
                                        <div class="col-3" id="bold"><label>૫૦૦ X :</label> <input id="x"
                                                type="text"></div>
                                        <div class="col-3" id="bold"><label>૨૦૦ X :</label> <input id="x"
                                                type="text"></div>
                                        <div class="col-3" id="bold"><label>૧૦૦ X :</label> <input id="x"
                                                type="text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><label>નાણા આપનારની સહી :</label> <input type="text"></div>
                                        <div class="col-6"><label>નાણા સ્વીકારનારની સહી :</label> <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </body>
@endsection
