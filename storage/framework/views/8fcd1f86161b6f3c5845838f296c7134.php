

<?php $__env->startSection('content'); ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin/assets/css/boot.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title></title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Gujarati:wght@100;600;900&display=swap');
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

            .col-3p2 {
                max-width: 30%;
                padding-left: 0%;
            }

            #w2 {
                font-size: 29px;
                font-weight: 900;
            }

            #w3 {
                font-size: 25px;
                font-weight: 500;
            }

            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
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

            .r-f {
                text-align: center;
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

            h1 {
                text-align: center;
                font-size: 70px;
                /* border: 1px solid black; */
                /* border-radius: 20px; */
                /* background-color: black; */
                color: black;
                font-weight: 1000;
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

            #photo {
                text-align: center;
            }

            #photo1 {
                max-width: 34%;
            }

            #photo2 {
                max-width: 34%;


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
                font-size: 23px;
                font-weight: 800;
                text-align: center;
            }

            #row-1 {
                border: none;
            }

            .A {
                margin-bottom: 5px;
            }

            #sahi {
                margin-top: 0px;

            }

            .v-sahi {
                text-align: end;
            }



            .va-p {
                padding-left: 65px;
            }

            .i1 {
                margin-bottom: 8px;
            }

            .f-b {
                font-weight: bold;
                font-size: 12px;
            }

            .border-t {
                border-top: 2px solid black;
                margin-top: 5px;
            }

            .img-fit {
                width: 236px;
                height: 330px;
                object-fit: cover;
                object-position: center;
            }

            .sign1 {
                width: 100px;
                height: 50px;
                object-position: center;
            }

            .sign2 {
                width: 100;
                height: 50px;
                object-position: center;
            }

            .dis-member_no {
                border: 3px solid black;
                border-radius: 10px;
                text-align: center;
                justify-content: center;
                width: 100%;
                margin-left: 7PX;
                font-weight: 900;
                font-size: 40px;

            }

            .dis-member_date {
                border: 3px solid black;
                text-align: center;
                justify-content: center;
                width: 82%;
                border-radius: 10px;
                margin-left: 10PX;
                font-size: 35px;
                font-weight: 900;
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 84%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-age {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 83%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 82%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 55%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-member_business {
                border: none;
                border-bottom: 1px solid black;
                width: 74%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-mobile_no_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 79%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }

            .dis-mobile_no_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 79%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;
            }



            .dis-heir_name_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;

            }

            .dis-age_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 79%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;

            }

            .dis-relationship_with_member_1 {
                border: none;
                border-bottom: 1px solid black;
                width: 33%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;

            }

            .dis-heir_name_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;

            }

            .dis-age_2 {
                border-bottom: 1px solid black !important;
                border: none;
                width: 79%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;

            }

            .dis-relationship_with_member_2 {
                border: none;
                border-bottom: 1px solid black;
                width: 34%;
                margin-left: 10PX;
                font-size: 23px;
                font-weight: 800;

            }

            .fonts {
                font-size: 18px;
            font-weight: 800;
            }

            .offset-1 {
                border-right: 4px solid black;
                margin-left: 0;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .form-check-input[type="radio"][disabled]+label::before {
                background-color: #007bff;
                border-color: #007bff;
            }


            @media only screen and (max-width: 600px) {

                h1 {
                    text-align: center;
                    font-size: 23px;
font-weight: 800;;
                    border: 1px solid black;
                    border-radius: 8px;
                    background-color: black;
                    color: white;
                    margin-bottom: 10px;
                    margin-top: 5px;
                    padding-bottom: 0%;
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

                .border {
                    height: 110px;
                    border: 1px solid black;
                    margin-right: 10px;
                }

                .photo {
                    font-size: 5px;

                }

                #photo1 {
                    margin-left: 20px;
                    padding-left: 3px;
                }

                #photo2 {
                    padding-left: 0px;
                }

                #photo3 {
                    padding-left: 0px;
                }

                .A {
                    font-size: 6px;
                }

                .f-s {
                    font-size: 6px;
                }

                .border-t {
                    font-size: 6px;
                }

                .d {
                    font-size: 1px;
                    text-align: center;
                    padding-top: 2px;
                }

                #sahi {
                    margin-top: 50px;

                }

                .l-1 h5 {
                    font-size: 8px;
                }

                .i1 {
                    width: 65px;
                    margin-bottom: 6px;
                }

                button,
                p> {
                    overflow: visible;
                }

                button,
                select {
                    text-transform: none;
                }

                .r-f {
                    font-size: 4px;
                }

                .h-f {
                    font-size: 4px;
                    margin-bottom: 0px;
                }

                .l-1 {
                    margin top: 0px;
                    font-weight: 500;
                }

                .dis-member_date {
                    border: 1px solid black;
                    text-align: center;
                    justify-content: center;
                    width: 82%;
                    font-size: 5px;
                    margin-left: 2PX;
                }

                .dis-member_no {
                    border: 1px solid black;
                    text-align: center;
                    justify-content: center;
                    width: 100%;
                    font-size: 5px;
                    margin-left: 1PX;
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


            }
        </style>
    </head>

    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3>માસિક બચત ફોર્મ - View</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/bachat/create')); ?>">માસિક બચત
                                        ફોર્મ
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">માસિક બચત ફોર્મ - View </li>
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
                                                    src="<?php echo e(asset('admin/assets/images/image.jpg')); ?>" height="120px"
                                                    width="90px"></div>

                                            <div class="col-6">
                                                <img src="<?php echo e(asset('admin/assets/images/h_n_mall_2.jpg')); ?>" width="100%">

                                                
                                                <b>
                                                    <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>
                                            </div>
                                            <div class="col-3" id="i2"> <img style="background-color:white;"
                                                    src="<?php echo e(asset('admin/assets/images/HN.jpg')); ?>" height="120px"
                                                    width=""></div>
                                        </div>
                                        <center>
                                            <h4 class="h3 mt-4">માસિક બચત ફોર્મ</h4>
                                        </center>

                                        <div class="row mt-3">
                                            <div class="col-3">
                                                <div class="row row-1">
                                                    <div class="col-10">
                                                        <label class="l-1" style="width: 100%">
                                                            <p class="h-f" style="text-align: center" id="w2">
                                                                સભ્યપદ નં.</p>
                                                            <input class="dis-member_no" readonly type="text"
                                                                value="<?php echo e($bachat->member_no); ?>">
                                                        </label>
                                                        <p>

                                                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12"><label class="l-1" style="width: 100%">
                                                            <p class="h-f" style="text-align: center" id="w2">
                                                                સભ્યપદ તા.</p>
                                                            <input class="dis-member_date" readonly type="text"
                                                                value="<?php echo e(date('d/m/Y', strtotime($bachat->member_date))); ?>">
                                                        </label><br>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="row photo justify-content-center">
                                                        <div class="col-3p2" id="photo1">


                                                            <?php if($bachat->member_image = ''): ?>
                                                                <img src="<?php echo e(asset('uploads/bachat/member_image/' . $bachat->member_image)); ?>"
                                                                    class="img-fit" id="g1" />
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('assets/white.png')); ?>" class="img-fit"
                                                                    id="g1">
                                                            <?php endif; ?>

                                                            <p class="r-f"><b class="fonts">સભ્યનો ફોટો</b></p>
                                                        </div>
                                                        <div class="col-3p2" id="photo2">
                                                            <?php if($bachat->heir_image_1): ?>
                                                                <img src="<?php echo e(asset('uploads/bachat/heir_image_1/' . $bachat->heir_image_1)); ?>"
                                                                    class="img-fit" id="g2" />
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('assets/white.png')); ?>" class="img-fit"
                                                                    id="g1">
                                                            <?php endif; ?>
                                                            <p class="r-f"><b class="fonts">વારસદારનો ફોટો</b></p>
                                                        </div>
                                                        <div class="col-3p2" id="photo3">
                                                            <?php if($bachat->heir_image_2): ?>
                                                                <img src="<?php echo e(asset('uploads/bachat/heir_image_2/' . $bachat->heir_image_2)); ?>"
                                                                    class="img-fit" id="g3" />
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('assets/white.png')); ?>" class="img-fit"
                                                                    id="g1">
                                                            <?php endif; ?>
                                                            <p class="r-f"><b class="fonts">વારસદારનો ફોટો</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row A mt-5">
                                            <div class="col-6">
                                                <label style="width: 100%"><b class="fonts">શ્રી,</b> <input
                                                        class="dis-mr" readonly type="text"
                                                        value="<?php echo e($bachat->mr); ?>">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label style="width: 100%"><b class="fonts">ઉંમર:</b><input
                                                        class="dis-age" readonly type="text"
                                                        value="<?php echo e($bachat->age); ?>">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"><b class="fonts">ગામ:</b><input
                                                        class="dis-village" readonly type="text"
                                                        value="<?php echo e($bachat->village); ?>">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row A mt-2">
                                            <div class="col-6">
                                                <label style="width: 100%"> <b class="fonts">સરનામુ :</b>
                                                    <input class="dis-address" readonly type="text"
                                                        value="<?php echo e($bachat->address); ?>">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"> <b class="fonts">સોસાયટી :</b>
                                                    <input class="dis-taluk" readonly type="text"
                                                        value="<?php echo e($bachat->taluk); ?>">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"> <b class="fonts">જીલ્લો :</b>
                                                    <input class="dis-city" readonly type="text"
                                                        value="<?php echo e($bachat->city); ?>"></label>
                                            </div>
                                        </div>
                                        <div class="row A mt-2">
                                            <div class="col-6">
                                                <label style="width: 100%"><b class="fonts">સભ્યનો ધંધો :</b>
                                                    <input class="dis-member_business" readonly type="text"
                                                        value="<?php echo e($bachat->member_business); ?>">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">મો :</b> <input
                                                        class="dis-mobile_no_1" readonly type="text"
                                                        value="<?php echo e($bachat->mobile_no_1); ?>">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label style="width: 100%"><b class="fonts">મો :</b> <input
                                                        class="dis-mobile_no_2" readonly type="text"
                                                        value="<?php echo e($bachat->mobile_no_2); ?>">
                                                </label>
                                            </div>

                                        </div>
                                        <div class="row A mt-2">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">વારસદારનું
                                                        નામ :(૧)</b>
                                                    <input class="dis-heir_name_1" readonly type="text"
                                                        value="<?php echo e($bachat->heir_name_1); ?>">
                                                </label>
                                            </div>
                                            <div class="col-4">
                                                <label style="width: 100%"> <b class="fonts">ઉંમર :</b>
                                                    <input class="dis-age_1" readonly type="text"
                                                        value="<?php echo e($bachat->age_1); ?>">
                                                </label>
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-8">
                                                <label style="width: 100%"><b class="fonts">વારસદારનું
                                                        નામ :(૨)</b>
                                                    <input class="dis-heir_name_2" readonly type="text"
                                                        value="<?php echo e($bachat->heir_name_2); ?>">
                                                </label>
                                            </div>

                                            <div class="col-4">
                                                <label style="width: 100%"> <b class="fonts">ઉંમર :</b>
                                                    <input class="dis-age_2" readonly type="text"
                                                        value="<?php echo e($bachat->age_2); ?>">
                                                </label>
                                            </div>
                                            
                                        </div>
                                        <div class="row a A mt-2">
                                            <div class="col-12 mb-2">
                                                <label style="width: 100%"><b class="fonts">સભ્ય સાથે વારસદારનો
                                                        સબંધ :.(૧)</b> <input class="dis-relationship_with_member_1"
                                                        readonly type="text"
                                                        value="<?php echo e($bachat->relationship_with_member_1); ?>">
                                                    <b class="fonts">(૨)</b><input class="dis-relationship_with_member_2"
                                                        readonly type="text"
                                                        value="<?php echo e($bachat->relationship_with_member_2); ?>">

                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-12">
                                                
                                            </div>
                                        </div>
                                        <div class="row b mt-1">
                                            <div class="col-12" style="text-align: center">
                                                <label id="w2"><b style="font-size: 25px;">આ બચત યોજનામાં સભ્યને ૧% લેખે વળતર ચૂકવવામાં આવશે.</b>                                                       
                                                    <input type="radio" disabled
                                                        <?php echo e($bachat->percentage == '1' ? 'checked' : ''); ?>

                                                        style="display:none;">
                                                </label>
                                            </div>
                                        </div>


                                        
                                        <div class="row b mt-2">
                                            <div class="col-12 mt-1">
                                                <div class="mt-3" id="w3"><b style="font-size: 21px;">દરેક સભ્યએ નીચે જણાવેલ યાદી મુજબ બચતની રકમ ઉપાડવા માટે અગાઉથી ઓફિસે જાણ કરવાની રહેશે.
                                                </b></div>
                                            </div>
                                            <div style="font-size: 15px;" class="col-12 mt-2"
                                                style="text-align: justify"><i style='font-size:24px'
                                                    class='fas fa-caret-up'></i> <b id="w3"> 
                                                    ૧૦૦૦૦ થી ૧૫૦૦૦ ની રકમ ઉપાડવા માટે - ૨ દિવસ અગાઉ ફોનથી લખાવવી.
                                                </b></div>
                                            <div style="font-size: 15px;" class="col-12" style="text-align: justify">
                                                <i style='font-size:24px' class='fas fa-caret-up'></i> <b id="w3">
                                                    ૧૫૦૦૦ થી ૨૫૦૦૦ ની રકમ ઉપાડવા માટે - ૫ દિવસ અગાઉ ફોનથી લખાવવી.
                                                </b>
                                            </div>
                                            <div style="font-size: 15px;" class="col-12 " style="text-align: justify">
                                                <i style='font-size:24px' class='fas fa-caret-up'></i> <b id="w3">
                                                 ૨૫૦૦૦ થી ૪૯000 ની રકમ ઉપાડવા માટે - ૮ દિવસ અગાઉ ફોનથી લખાવવી.
                                                </b>
                                            </div>
                                            <div style="font-size: 15px;" class="col-12 mb-1"
                                                style="text-align: justify"><i style='font-size:24px'
                                                    class='fas fa-caret-up'></i> <b id="w3">૫૦૦૦૦ થી વધુ રકમ ઉપાડવા માટે - ૧૫ દિવસ અગાઉ ફોનથી લખાવવી.
                                                    </b></div>

                                        </div>
                                        
                                        <div class="row b" id="sahi">
                                            <div class="col-6 offset-1">
                                                
                                                <center>
                                                    <?php if($bachat->member_sign_image): ?>
                                                        <img src="<?php echo e(asset('uploads/bachat/member_sign_image/' . $bachat->member_sign_image)); ?>"
                                                            width="100px" class="sign1" /><br>
                                                    <?php else: ?>
                                                        <p>&nbsp;</p>
                                                    <?php endif; ?>
                                                    <label class="border-t" id="w3">
                                                        <b> સભ્યની સહી</b>
                                                    </label>
                                                </center>
                                            </div>
                                            <div class="col-6 v-sahi">
                                                
                                                <center>
                                                    <?php if($bachat->heir_sign_image_1): ?>
                                                        <img src="<?php echo e(asset('uploads/bachat/heir_sign_image_1/' . $bachat->heir_sign_image_1)); ?>"
                                                            width="100px" class="sign2" /><br>
                                                    <?php else: ?>
                                                        <p>&nbsp;</p>
                                                    <?php endif; ?>
                                                    <label class="border-t" id="w3">
                                                        <b> વારસદારની સહી</b>
                                                    </label>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="row" id="sahi">
                                            <div class="col-6 offset-1">
                                                
                                                <center>
                                                    <?php if($bachat->heir_sign_image_2): ?>
                                                        <img src="<?php echo e(asset('uploads/bachat/heir_sign_image_2/' . $bachat->heir_sign_image_2)); ?>"
                                                            width="100px" class="sign1" /><br>
                                                    <?php else: ?>
                                                        <p>&nbsp;</p>
                                                    <?php endif; ?>
                                                    <label class="border-t" id="w3">
                                                        <b> વારસદારની સહી</b>
                                                    </label>
                                                </center>
                                            </div>
                                            <div class="col-6 v-sahi">
                                                
                                                <center style="margin-top: -19px;">
                                                    <?php if($bachat->heir_sign_image_2): ?>
                                                        <img src="<?php echo e(asset('uploads/bachat/heir_sign_image_2/' . $bachat->heir_sign_image_2)); ?>"
                                                            width="100px" class="sign2" /><br>
                                                    <?php else: ?>
                                                        <p>&nbsp;</p>
                                                    <?php endif; ?>
                                                    <label style="font-size: 25px;margin: -20px;font-weight:700;" for=""><?php echo e($user->where('id', '=', $bachat->login_id)->first()->name); ?></label><br>
                                                    <label class="border-t"id="w2" style="font-size:25px">
                                                        એચ.એન.મોલ વતી
                                                    </label>
                                                </center>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/bachat/view.blade.php ENDPATH**/ ?>