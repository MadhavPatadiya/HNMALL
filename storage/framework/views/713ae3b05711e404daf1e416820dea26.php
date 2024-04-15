

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>આવક/જાવક હિસાબ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/roj_med')); ?>">આવક/જાવક ની એન્ટ્રી
                                </a>
                            </li>

                            <li class="breadcrumb-item active">આવક/જાવક હિસાબ
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(session('message')): ?>
                        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>આવક/જાવક હિસાબ </h4>
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

                                .alert .alert-success {
                                    display: none;
                                }

                            }
                        </style>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>નામ</th>
                                        <th>બનાવનાર</th>
                                        <th>તારિક </th>
                                        <th style="width:15%">કારણ</th>
                                        <th>આવક</th>
                                        <th>જાવક</th>
                                        <?php if(Auth::user()->role_as == '1'): ?>
                                            <th>Action</th>
                                        <?php else: ?>
                                            &nbsp;
                                        <?php endif; ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $RojMed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $RojMeds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($RojMeds->id); ?></td>
                                            <td><?php echo e($RojMeds->name); ?></td>
                                            <td><?php echo e($user->where('id', '=', $RojMeds->login_id)->first()->name); ?></td>

                                            <td><?php echo e(date('d-m-Y', strtotime($RojMeds->date))); ?>

                                            <td><?php echo e($RojMeds->reason); ?></td>
                                            <?php if($RojMeds->cash_type == 'આવક'): ?>
                                                <td><b><?php echo e($RojMeds->amount); ?></b></td>
                                            <?php else: ?>
                                                <td>0</td>
                                            <?php endif; ?>
                                            <?php if($RojMeds->cash_type == 'જાવક'): ?>
                                                <td><b><?php echo e($RojMeds->amount); ?></b></td>
                                            <?php else: ?>
                                                <td>0</td>
                                            <?php endif; ?>

                                            </td>

                                            <?php if(Auth::user()->role_as == '1'): ?>
                                                <td class="n">

                                                    <a href="<?php echo e(url('admin/roj_med/' . $RojMeds->id . '/edit')); ?>"
                                                        class="btn btn-success ">Edit</a>
                                                    <a href="<?php echo e(url('admin/roj_med/' . $RojMeds->id . '/delete')); ?>"
                                                        class="btn btn-danger ">Delete</a>
                                                </td>
                                            <?php else: ?>
                                                &nbsp;
                                            <?php endif; ?>


                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="8">Data Not Available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/roj_med/view.blade.php ENDPATH**/ ?>