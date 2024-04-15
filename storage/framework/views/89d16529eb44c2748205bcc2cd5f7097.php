


<?php $__env->startSection('content'); ?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>form</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
        </style>
    </head>
    <style>
        .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
        .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
            margin-left: 0px;
            -webkit-transition: 0.5s;
            transition: 0.5s
        }

        .container {
            border: 4px solid black;
            font-family: 'Noto Serif Gujarati', serif;
            border-radius: 30px;
        }

        #w3 {
            font-size: 20px;
            font-weight: 500px;
        }

        #heading {
            border-bottom: 4px solid black;
            margin-block-top: 5px;

        }

        .p1 {
            text-align: left;
            font-weight: 700;
            margin-block: 2px;
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

        .bhr-rakam {
            text-align: center;
            margin-bottom: 10px;
        }

        .p2 {
            text-align: end;
        }

        .p3 {
            font-size: 20px;
            text-align: center;
            font-weight: 700;
        }

        .lab-s {
            margin-bottom: 10px;
        }

        .bb {
            border-bottom: 3px solid black;
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
            width: 84%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-member_date {
            border: none;
            border-bottom: 1px solid black;
            width: 62%;
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
            width: 70%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .custom-line {
            border-top: 4px solid black;
            /* padding: 5px; */
        }

        .dis2-address {
            border: none;
            border-bottom: 1px solid black;
            width: 88%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-loan_amount {
            border: none;
            border-bottom: 1px solid black;
            width: 72%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-taluk {
            border: none;
            border-bottom: 1px solid black;
            width: 61%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-total_amount {
            border: none;
            border-bottom: 1px solid black;
            width: 70%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-emi_paid {
            border: none;
            border-bottom: 1px solid black;
            width: 70%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-total_paid {
            border: none;
            border-bottom: 1px solid black;
            width: 73%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-total {
            border: none;
            border-bottom: 1px solid black;
            width: 57%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-remaining_amount {
            border: none;
            border-bottom: 1px solid black;
            width: 50%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-sign1 {
            border: none;
            border-bottom: 1px solid black;
            width: 54%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-sign2 {
            border: none;
            border-bottom: 1px solid black;
            width: 50%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }
        .dis2-sign3 {
            border: none;
            border-bottom: 1px solid black;
            width: 70%;
            /* margin-left: 10PX; */
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-city {
            border: none;
            border-bottom: 1px solid black;
            width: 65%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }



        .dis2-product_name {
            border: none;
            border-bottom: 1px solid black;
            width: 67%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-price {
            border: none;
            border-bottom: 1px solid black;
            width: 84%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .dis2-down_payment {
            border: none;
            border-bottom: 1px solid black;
            width: 72%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }





        .dis2-Interest_amount {
            border: none;
            border-bottom: 1px solid black;
            width: 75%;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
        }

        .fonts {
            font-size: 20px;
            font-weight: 800;
        }


        #row-d {
            width: 120%;
        }

        #col-1 {
            border: 2px solid black;
            border-radius: 10px;
            margin-left: 10PX;
            font-size: 20px;
            font-weight: 800;
            margin-top: 10px;
        }

        .sahi {
            /* border-top: 2px solid black; */
        }

        .page-body {
            background-color: white;
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
                            <h3>EMI જમા
                                પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i
                                            data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/emi/emi_receipt')); ?>">EMI લોન
                                        પહોંચ
                                    </a>
                                </li>

                                <li class="breadcrumb-item active"> <a
                                        href="<?php echo e(url('admin/emi/' . $EMILoan->id . '/emi_all_receipt')); ?>">EMI જમા
                                        પહોંચ
                                        યાદી
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">EMI જમા
                                    પહોંચ </li>
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
                                                    src="<?php echo e(asset('admin/assets/images/image.jpg')); ?>" height="120px"
                                                    width="90px"></div>

                                            <div class="col-6">
                                                <img src="<?php echo e(asset('admin/assets/images/h_n_mall_2.jpg')); ?>" width="100%">

                                                
                                                <b class="fonts">
                                                    <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>
                                            </div>
                                            <div class="col-3" id="i2"> <img
                                                    src="<?php echo e(asset('admin/assets/images/HN.jpg')); ?>" height="120px"
                                                    width=""></div>
                                        </div>
                                        <center>
                                            <h3 class="h3 mt-2">EMI લોન-પહોંચ</h3>
                                        </center>
                                        <div class="row">
                                            <div class="col-9">
                                                <label style="width: 100%" id="w3"><b class="fonts">સભ્યપદ નં.
                                                        :</b><input type="text" class="dis2-member_no" readonly
                                                        value="<?php echo e($EMILoan->member_no); ?>">
                                                </label>
                                            </div>

                                            <div class="col-3">
                                                <label style="width: 100%" id="w3"><b class="fonts">તારીખ :
                                                    </b><input type="date" class="dis2-member_date" readonly
                                                        value="<?php echo e($EMIreceipt->date); ?>">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 mt-2 mb-2">
                                                <label style="width: 100%"> <b class="fonts">શ્રી,</b><input type="text"
                                                        class="dis2-mr" readonly value="<?php echo e($EMILoan->mr); ?>"></label>
                                            </div>
                                            <div class="col-3 mt-2 mb-2"><label style="width: 100%"><b class="fonts"> ગામ :
                                                    </b><input id="row-1" type="text" class="dis2-village" readonly
                                                        value="<?php echo e($EMILoan->village); ?>"></label></div>
                                        </div>
                                        <div class="row custom-line">
                                            <div class="col-9 mt-2 mb-2">
                                                <label style="width: 100%"><b class="fonts">સરનામુ: </b><input
                                                        type="text" class="dis2-address" readonly
                                                        value="<?php echo e($EMILoan->address); ?>"></label>
                                            </div>

                                            <div class="col-3 mt-2 mb-2"><label style="width: 100%"> <b
                                                        class="fonts">તાલુકો :</b> <input id="row-1" type="text"
                                                        class="dis2-taluk" readonly value="<?php echo e($EMILoan->taluk); ?>"></label>
                                            </div>
                                        </div>
                                        <div class="col-9 mt-2 mb-2">
                                            <label style="width: 120%"><b class="fonts">નૉૅધ :</b><input
                                                    type="text" class="dis2-address" readonly
                                                    value="<?php echo e($EMIreceipt->note); ?>"></label>
                                        </div>

                                        
                                        
                                        

                                        
                                        <div class="row mb-2" id="row-d">


                                            <div class="col-5" id="col-1">
                                                <div class="mt-2">
                                                    <label style="width: 100%"> <b class="fonts">EMI ચૂકવેલ :</b>
                                                        <input id="row-1" type="text" class="dis2-emi_paid" readonly
                                                            value="<?php echo e($EMIreceipt->loan_paid); ?>">
                                                    </label>
                                                </div>
                                                <div>
                                                    <label style="width: 100%"><b class="fonts"> વ્યાજ ચૂકવેલ :</b>
                                                        <input class="dis2-total_amount" id="row-1" type="text"
                                                            readonly value="<?php echo e($EMIreceipt->interest_paid); ?>">
                                                    </label>
                                                </div>

                                                <div class="mb-2">
                                                    <label style="width: 100%"> <b class="fonts">કુલ ચૂકવેલ :</b>
                                                        <input id="row-1" type="text" class="dis2-total_paid"
                                                            readonly value="<?php echo e($EMIreceipt->remaining_loan_amount); ?>">
                                                    </label>
                                                </div>
                                                


                                            </div>

                                            <div class="col-5" id="col-1">
                                                <div class="mt-2">
                                                    <label style="width: 100%"><b class="fonts"> લોનની રકમ :</b> <input
                                                            id="row-1" type="text" class="dis2-loan_amount"
                                                            readonly value="<?php echo e($EMILoan->loan_amount); ?>">
                                                    </label>
                                                </div>

                                                <div>
                                                    <label style="width: 100%"> <b class="fonts">લોન ની બચેલી રકમ :</b>
                                                        <input id="row-1" type="text" class="dis2-total" readonly
                                                            value="<?php echo e($EMIreceipt->total_amount); ?>">
                                                    </label>
                                                </div>

                                                <div class="mb-2">
                                                    <label style="width: 100%"> <b class="fonts">બાકીની કુલ લોનની રકમ
                                                            :</b>
                                                        <input id="row-1" type="text"
                                                            class="dis2-remaining_amount" readonly
                                                            value="<?php echo e($EMIWallet->first()->total_amount); ?>">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row sahi custom-line">
                                            <div class="col-3 mt-5"><label style="width: 100%" id="w3"><b
                                                        class="fonts"> નાણા
                                                        આપનારની સહી :
                                                    </b> </label>
                                                    
                                            </div>
                                            <div class="col-3 mt-5"><label style="width: 100%" id="w3"><b
                                                        class="fonts">નાણા
                                                        સ્વીકારનારની સહી
                                                        :</b></label>
                                                    
                                            </div>
                                            <div class="col-6 mt-5"><label id="w3"><b
                                                        class="fonts">એચ.એન.મોલ વતી:</b></label>
            <input value="<?php echo e($user->where('id', '=', $EMIreceipt->login_id)->first()->name); ?>" type="text" class="dis2-sign2" readonly>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/emi/view_emi_receipt.blade.php ENDPATH**/ ?>