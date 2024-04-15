<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Default</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/bachat-receipt/create')); ?>">માસિક બચત
                                    પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત રદ કરો </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>માસિક બચત રદ કરો</h5>
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            <form id="myForm" action="<?php echo e(url('admin/bachat-receipt/store_deactive')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-md-10">
                                    </div>
                                    <div class="col-md-2">
                                        <label>સભ્યપદ નં.</label>
                                        <input type="text" value="<?php echo e($bachats->member_no); ?>" class="form-control"
                                            readonly>
                                        <input style="display: none" type="text" name="user_id"
                                            value="<?php echo e($bachats->id); ?>" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-10">
                                    </div>

                                    <div class="col-md-2">
                                        <label>સભ્યપદ તા.</label>
                                        <input type="text" value="<?php echo e($bachats->member_date); ?>" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">Refund Date</label>
                                        <input type="date" name="deactivate_date" value="<?php echo e(now()->toDateString()); ?>"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>શ્રી,</label>
                                        <input type="text" value="<?php echo e($bachats->mr); ?>" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>જમા રકમ :</label>
                                        <input type="text" value="<?php echo e($wallet->balance); ?>" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>કુલ વ્યાજ :</label>
                                        <input type="text" value="<?php echo e($totalInterest->total_interest); ?>"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>પરત કરવાની રકમ :</label>
                                        <input type="text" name="refund_amount" class="form-control">
                                    </div>
                                    <center>
                                        <button type="submit" style="width: 260px" class="btn btn-danger mt-5">
                                            રદ કરો
                                        </button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/bachat_receipt/deactive.blade.php ENDPATH**/ ?>