<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>એચ.એન.મોલ</title>
    <link rel="icon" href="<?php echo e(asset('admin/assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/favicon.png')); ?>" type="image/x-icon">
    <title>એચ.એન.મોલ</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/font-awesome.css')); ?>">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/icofont.css')); ?>">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/themify.css')); ?>">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/flag-icon.css')); ?>">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/feather-icon.css')); ?>">

    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/scrollbar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/chartist.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/date-picker.css')); ?>">
    <!-- Plugins css Ends-->

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/vendors/bootstrap.css')); ?>">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/style.css')); ?>">
    <link id="color" rel="stylesheet" href="<?php echo e(asset('admin/assets/css/color-1.css')); ?>" media="screen">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/assets/css/responsive.css')); ?>">

    

    <!--Styles -->
    <link href="<?php echo e(asset('admin/assets/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('admin/assets/css/boot.css')); ?>" rel="stylesheet">

    <style>
       /* .form1 {
    display: block;
    width: 100%;
    height: calc(3.2rem + 7px);
    padding-left:10px;
    font-size: x-large;
    line-height: 2.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}


        .label1 {
           display: inline-block;
             font-size:25px;
        }
 */

        @media print {
            .page-header {
                display: none;
                width: 100% !important;
            }

            .sidebar-wrapper {
                display: none;
                width: 100% !important;
            }

            .footer {
                display: none;
                width: 100% !important;
            }

            .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
                margin-left: 0;
            }
        }
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body onload="startTime()">

    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page Header Start-->
        <div class="page-header">
            <?php echo $__env->make('layouts.inc.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page Header Ends -->
        </div>

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <?php echo $__env->make('layouts.inc.admin.slidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page Sidebar Ends-->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- footer start-->
            <?php echo $__env->make('layouts.inc.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- footer end-->


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#example1').DataTable({
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var title = column.header().textContent;

                        // Create input element and add event listener
                        $('<input type="text" style="width:100%"  placeholder="Search ' + title + '" />')
                            .appendTo($(column.header()).empty())
                            .on('keyup change clear', function() {
                                if (column.search() !== this.value) {
                                    column.search(this.value).draw();
                                }
                            });
                    });
            },
        });
    </script>

    <!-- latest jquery-->
    <script src="<?php echo e(asset('admin/assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <!-- feather icon js-->
    <script src="<?php echo e(asset('admin/assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
    <!-- scrollbar js-->
    <script src="<?php echo e(asset('admin/assets/js/scrollbar/simplebar.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/scrollbar/custom.js')); ?>"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo e(asset('admin/assets/js/config.js')); ?>"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo e(asset('admin/assets/js/sidebar-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/chart/chartist/chartist.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/chart/knob/knob.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/chart/knob/knob-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/dashboard/default.js')); ?>"></script>
    
    <script src="<?php echo e(asset('admin/assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/typeahead/handlebars.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/typeahead/typeahead.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/typeahead-search/handlebars.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script>
        $('#example').DataTable({
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var title = column.header().textContent;

                        // Create input element and add event listener
                        $('<input type="text" style="width:100%"  placeholder="Search ' + title + '" />')
                            .appendTo($(column.header()).empty())
                            .on('keyup change clear', function() {
                                if (column.search() !== this.value) {
                                    column.search(this.value).draw();
                                }
                            });
                    });
            },
        });
    </script>


    <script src="<?php echo e(asset('admin/assets/js/script.js')); ?>"></script>
    
    <!-- login js-->
    <!-- Plugin used-->

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH D:\XAMPP\htdocs\HNMALL_13-02-2024\resources\views/layouts/admin.blade.php ENDPATH**/ ?>