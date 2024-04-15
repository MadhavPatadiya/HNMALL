<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>લોન EMI ફોર્મ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">લોન EMI ફોર્મ </li>
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
                            <h5>લોન EMI ફોર્મ</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>સભ્યપદ તા.</th>
                                        <th>શ્રીમાન:</th>
                                        <th>નંબર</th>
                                        <th>ગામ</th>
                                        <th>જિલ્લો</th>
                                        <th>સોસાયટી</th>

                                        <th class="n">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $EMILoan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EMILoans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($EMILoans->id); ?></td>
                                            <td><?php echo e($EMILoans->member_no); ?></td>
                                            <td><?php echo e($user->where('id', '=', $EMILoans->login_id)->first()->name); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($EMILoans->member_date))); ?></td>
                                            <td><?php echo e($EMILoans->mr); ?></td>
                                            <td><?php echo e($EMILoans->mobile_no_1); ?></td>
                                            <td><?php echo e($EMILoans->village); ?></td>
                                            <td><?php echo e($EMILoans->city); ?></td>
                                            <td><?php echo e($EMILoans->taluk); ?></td>

                                            <td class="n">
                                                <?php if(Auth::user()->role_as == '1'): ?>
                                                    <a href="<?php echo e(url('admin/emi/' . $EMILoans->id . '/edit')); ?>"
                                                        class="btn btn-success">Edit</a>
                                                <?php else: ?>
                                                    &nbsp;
                                                <?php endif; ?>
                                                <a href="<?php echo e(url('admin/emi/' . $EMILoans->id . '/view')); ?>"
                                                    class="btn btn-primary">View</a>
                                                <?php if(Auth::user()->role_as == '1'): ?>
                                                    <a href="<?php echo e(url('admin/emi/' . $EMILoans->id . '/destroy')); ?>"
                                                        onClick="return confirm('શું તમે ખરેખર કાઢી નાખવા માંગો છો?')"
                                                        class="btn btn-danger">Delete</a>
                                                <?php else: ?>
                                                    &nbsp;
                                                <?php endif; ?>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\HNMALL_13-02-2024\resources\views/admin/emi/create.blade.php ENDPATH**/ ?>