

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત પહોંચ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત પહોંચ
                            </li>
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
                            <style>
                                .ani {
                                    box-shadow: inset 0 0 0 0 #FEE0E8;
                                    color: #000000;
                                    padding: 0 .25rem;
                                    margin: 0 -.25rem;
                                    transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
                                }

                                .ani:hover {
                                    color: #fff;
                                    box-shadow: inset 190px 0 0 0 #000000;
                                    ;
                                }

                                /* Presentational styles */
                                .ani {
                                    color: #000000;
                                    font-family: 'Poppins', sans-serif;
                                    font-size: 27px;
                                    font-weight: 500;
                                    line-height: 2;
                                    text-decoration: none;
                                }
                            </style>
                            <div class="col-12">
                                <h5 class="ani">માસિક બચત પહોંચ</h5>
                                <a href="<?php echo e(url('admin/bachat-receipt/deactive_list')); ?>"
                                    class="btn float-end btn-danger ml-2">Deactivate
                                    Account</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>નામ</th>
                                        <th>વ્યાજ</th>
                                        <th class="n">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $bachat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bachats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($bachats->id); ?></td>
                                            <td><?php echo e($bachats->member_no); ?></td>
                                            <td><?php echo e($user->where('id', '=', $bachats->login_id)->first()->name); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($bachats->member_date))); ?></td>
                                            <td><?php echo e($bachats->mr); ?></td>
                                            <td>1%</td>

                                            <td class="n">
                                                <a href="<?php echo e(url('admin/bachat-receipt/' . $bachats->id . '/create_debit')); ?>"
                                                    class="btn btn-success">જમા / ઉપાડ</a>
                                                <a href="<?php echo e(url('admin/debit-receipt/' . $bachats->id . '/view')); ?>"
                                                    class="btn btn-primary">પહોંચ </a>
                                                <a href="<?php echo e(url('admin/bachat-receipt/' . $bachats->id . '/joining_fees')); ?>"
                                                    class="btn btn-dark">Joining Fees</a>
                                                <a href="<?php echo e(url('admin/bachat-receipt/' . $bachats->id . '/statement')); ?>"
                                                    class="btn btn-info">Statements</a>
                                                <a href="<?php echo e(url('admin/bachat-receipt/' . $bachats->id . '/deactive')); ?>"
                                                    class="btn btn-danger">Deactive</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/bachat_receipt/create_receipt.blade.php ENDPATH**/ ?>