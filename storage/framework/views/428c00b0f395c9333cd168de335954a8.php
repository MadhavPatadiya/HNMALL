<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ ફોર્મ </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ ફોર્મ </li>
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
                            <h5>ફિક્સ ડિપોઝિટ ફોર્મ</h5>
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
                                        <th>Status</th>
                                        <th class="n">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $deposite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($deposites->id); ?></td>
                                            <td><?php echo e($deposites->member_no); ?></td>
                                            <td><?php echo e($user->where('id', '=', $deposites->login_id)->first()->name); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($deposites->member_date))); ?></td>
                                            <td><?php echo e($deposites->mr); ?></td>
                                            <td><?php echo e($deposites->mobile_no_1); ?></td>
                                            <td><?php echo e($deposites->village); ?></td>
                                            <td><?php echo e($deposites->city); ?></td>
                                            <td><?php echo e($deposites->taluk); ?></td>
                                            <td><?php echo e($deposites->status); ?></td>

                                            <td class="n">
                                                <?php if(Auth::user()->role_as == '1'): ?>
                                                    <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/edit')); ?>"
                                                        class="btn btn-success">Edit</a>
                                                <?php else: ?>
                                                    &nbsp;
                                                <?php endif; ?>
                                                <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/view')); ?>"
                                                    class="btn btn-primary">View</a>
                                                <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/attachment')); ?>"
                                                    class="btn btn-info">Attachment</a>
                                                <?php if(Auth::user()->role_as == '1'): ?>
                                                    <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/destroy')); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/deposite/create.blade.php ENDPATH**/ ?>