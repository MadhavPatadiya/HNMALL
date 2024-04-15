<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>EMI બચત રિપોર્ટ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"><a href="<?php echo e(url('admin/report')); ?>">રિપોર્ટ </li></a>

                            <li class="breadcrumb-item active">EMI બચત રિપોર્ટ </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media print {
                .btn {
                    display: none;
                }

                .sorting {
                    display: none;
                }

                .dataTables_length {
                    display: none;
                }

                .dataTables_filter {
                    display: none;
                }

                .dataTables_info {
                    display: none;
                }

                .dataTables_paginate {
                    display: none;
                }

                .n {
                    display: none;
                }

            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(session('message')): ?>
                        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <h5>EMI બચત રિપોર્ટ</h5>
                                </div>
                                
                            </div>

                        </div>
                        <div class="card-body">
                            

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped " id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>રસીદ નં</th>
                                        <th>તારીખ</th>
                                        <th>સભ્ય નું નામ</th>
                                        <th>લોનનો પ્રકાર</th>
                                        <th>લોનની રકમ</th>
                                        <th>બાકી લોન</th>
                                        <th>હફતો ચૂકવેલ</th>
                                        <th>વ્યાજ ચૂકવેલ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = Session::get('EMIreceipt'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EMIreceipts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td width="2%"><?php echo e($EMIreceipts->id); ?></td>

                                            <td width="10%"><?php echo e(date('d-m-Y', strtotime($EMIreceipts->date))); ?></td>
                                            <td width="10%">
                                                <?php echo e($user->where('id', '=', $EMIreceipts->login_id)->first()->name); ?>

                                            </td>
                                            <?php $__currentLoopData = Session::get('EMILoan')->where('id', '=', $EMIreceipts->user_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EMILoans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td width="20%"><?php echo e($EMILoans->mr); ?></td>
                                                <td width="10%"><?php echo e($EMILoans->loan_type); ?></td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <td width="10%"><?php echo e($EMIreceipts->total_amount); ?></td>
                                            <td width="10%"><?php echo e($EMIreceipts->remaining_loan_amount); ?></td>
                                            <td width="10%"><?php echo e($EMIreceipts->loan_paid); ?></td>
                                            <td width="10%"><?php echo e($EMIreceipts->interest_paid); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <tbody>
                                    <tr>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            <?php echo e(Session::get('total_amount')); ?>

                                        </td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            <?php echo e(Session::get('remaining_loan_amount')); ?></td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            <?php echo e(Session::get('loan_paid')); ?></td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            <?php echo e(Session::get('interest_paid')); ?></td>
                                    </tr>
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/receipt/emi.blade.php ENDPATH**/ ?>