


<?php $__env->startSection('content'); ?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>form</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@600;900&display=swap');
        </style>
        <style>
            .container {
                border: 4px solid black;
                font-family: 'Noto Serif Gujarati', serif;
                border-radius: 30px;
            }

            .custom-line {
                border-top: 4px solid black;
            }

            .p2 {
                text-align: end;
            }



            #heading {
                border-bottom: 4px solid black;
                margin-block-top: 4px;
            }

            #w2 {
                font-size: 18px;
            }

            #w3 {
                font-family: 'Noto Serif Gujarati', serif;
                font-size: 20px;

            }

            .h3 {
                border: 4px solid black;
                display: inline-block;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 25px;
                padding-right: 25px;
                font-size: 20px;

                font-weight: 700;

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
                margin-left: 00px;

            }

            .p3 {
                font-size: 20px;
                text-align: center;
                font-weight: 700;
            }

            .p1 {
                text-align: left;
                font-weight: 700;
                margin-block: 2px;
            }


            .lab-s {
                margin-bottom: 10px;
            }

            .dis-member_no {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-member_date {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-refund_date {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-mr {
                border: none;
                border-bottom: 1px solid black;
                width: 91%;
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

            .dis-total_interest {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-refund_amount {
                border: none;
                border-bottom: 1px solid black;
                width: 82%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-village {
                border: none;
                border-bottom: 1px solid black;
                width: 71%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-address {
                border: none;
                border-bottom: 1px solid black;
                width: 89%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-taluk {
                border: none;
                border-bottom: 1px solid black;
                width: 72%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-city {
                border: none;
                border-bottom: 1px solid black;
                width: 75%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn {
                border: none;
                border-bottom: 1px solid black;
                width: 60%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn2 {
                border: none;
                border-bottom: 1px solid black;
                width: 20%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn3 {
                border: none;
                border-bottom: 1px solid black;
                width: 45%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-sn4 {
                border: none;
                border-bottom: 1px solid black;
                width: 66%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .dis-jaamin_nam {
                border: none;
                border-bottom: 1px solid black;
                width: 73%;
                margin-left: 10PX;
                font-size: 20px;
                font-weight: 800;
            }

            .sahi {
                margin-top: 10px;

            }

            .AA {
                border-bottom: 0px solid black;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~.page-body,
            .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper.close_icon~footer {
                margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s
            }

            .page-body {
                background-color: white;
            }

            .fonts {
                font-size: 20px;
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
                            <h3>માસિક બચત રદ પહોંચ</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i
                                            data-feather="home"></i></a>
                                <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/bachat-receipt/create')); ?>">માસિક
                                        બચત પહોંચ

                                    </a>
                                </li>
                                <li class="breadcrumb-item active"> <a
                                        href="<?php echo e(url('admin/bachat-receipt/deactive_list')); ?>">માસિક બચત રદ કરો
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">માસિક બચત રદ પહોંચ</li>
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
                                        <div class="row">
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

                                                
                                                <b>
                                                    <p class="p3 mt-3">બેડી ચોકડી, રેલવે ઓવરબ્રિજ પાસે, રાજકોટ, <br>
                                                        મો.૯૮૨૪૮ ૯૩૭૪૫ / ૯૨૩૯૨ ૯૨૬૯૨ </p>
                                                </b>
                                            </div>
                                            <div class="col-3" id="i2"> <img
                                                    src="<?php echo e(asset('admin/assets/images/HN.jpg')); ?>" height="120px"
                                                    width=""></div>
                                        </div>
                                        <center>
                                            <h3 class="h3 mt-2">માસિક બચત - રદ કરવાની પહોંચ</h3>
                                        </center>
                                        <div class="row AA">
                                            <div class="col-4"><label style="width: 100%" id="w2"> <b
                                                        class="fonts">સભ્યપદ નં.</b>
                                                    <input type="text" readonly class="dis-member_no"
                                                        value="<?php echo e($bachats->member_no); ?>">
                                                </label></div>
                                            <div class="col-4"><label style="width: 100%" id="w2"><b
                                                        class="fonts">સભ્યપદ
                                                        તા.</b><input type="date" readonly class="dis-member_date"
                                                        value="<?php echo e($bachats->member_date); ?>"></label>
                                            </div>
                                            <div class="col-4"><label style="width: 100%" id="w2"><b
                                                        class="fonts">તારીખ:</b><input type="date" readonly
                                                        class="dis-refund_date"
                                                        value="<?php echo e($masikdeactive->first()->deactivate_date); ?>"></label>
                                            </div>
                                            <div class="col-9">
                                                <label style="width: 100%"> <b class="fonts">શ્રી, :</b>
                                                    <input type="text" readonly class="dis-mr"
                                                        value="<?php echo e($bachats->mr); ?>">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label> <b class="fonts">ગામ :</b><input type="text" readonly
                                                        class="dis-village" value="<?php echo e($bachats->village); ?>">
                                                </label>
                                            </div>
                                            <div class="col-9">
                                                <label style="width: 100%"><b class="fonts">સરનામુ:</b><input
                                                        type="text" readonly class="dis-address"
                                                        value="<?php echo e($bachats->address); ?>">
                                                </label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"> <b class="fonts">તા. :</b>
                                                    <input type="text" readonly class="dis-taluk"
                                                        value="<?php echo e($bachats->taluk); ?>"></label>
                                            </div>
                                            <div class="col-5"><label style="width: 100%"><b class="fonts">જમા રકમ
                                                        :</b><input type="text" readonly class="dis-total_amount"
                                                        value="<?php echo e($wallet->balance); ?>"></label>
                                            </div>
                                            <div class="col-4"><label style="width: 100%"><b class="fonts">કુલ વ્યાજ
                                                        :</b><input type="text" readonly class="dis-total_interest"
                                                        value="<?php echo e($totalInterest->total_interest); ?>"></label>
                                            </div>
                                            <div class="col-3"><label style="width: 100%"><b class="fonts"> જી.:</b>
                                                    <input type="text" readonly class="dis-city"
                                                        value="<?php echo e($bachats->city); ?>"></label>
                                            </div>
                                            <div class="col-12"><label style="width: 100%"><b class="fonts">પરત કરવાની
                                                        રકમ:</b><input type="text" readonly class="dis-refund_amount"
                                                        value="<?php echo e($masikdeactive->first()->refund_amount); ?>"></label>
                                            </div>


                                        </div>



                                        <div class="row sahi custom-line">
                                            <div class="col-3 mt-2"><label id="w2"> <b>સભ્યની સહી :</b></label>
                                                <input type="text" class="dis-sn3" readonly>
                                            </div>

                                            <div class="col-4 mt-2"><label id="w2"> <b>નાણા આપનારની સહી
                                                        :</b></label>
                                                <input type="text" class="dis-sn3" readonly>
                                            </div>
                                            <div class="col-5 mt-2"><label id="w2"> <b>એચ.એન.મોલ વતી:</b></label>
                                                <input style="font-size: 18px;" value="<?php echo e($user->where('id', '=', $bachats->login_id)->first()->name); ?>" type="text" class="dis-sn" readonly>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <center> <button style="width:100px" class="btn btn-sm btn-success but m-3 "
                                    onclick="window.print();return false;">Print</button>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/bachat_receipt/deactived_receipt.blade.php ENDPATH**/ ?>