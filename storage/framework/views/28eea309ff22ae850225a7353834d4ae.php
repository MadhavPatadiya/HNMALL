<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ રદ કરો</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a
                                    href="<?php echo e(url('admin/deposite/fix_deposite_receipt')); ?>">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ રદ કરો </li>
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
                            <h5>ફિક્સ ડિપોઝિટ લોન પહોંચ</h5>
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            <form id="myForm" action="<?php echo e(url('admin/deposite/processRefund')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">સભ્યપદ નં.</label>
                                        <input type="text" value="<?php echo e($deposite->member_no); ?>" class="form1 form-control"
                                            readonly>
                                        <input type="hidden" name="user_id" value="<?php echo e($deposite->id); ?>">

                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">સભ્યપદ તા.</label>
                                        <input type="date" value="<?php echo e($deposite->member_date); ?>" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">Refund Date</label>
                                        <input type="date" name="date" value="<?php echo e(now()->toDateString()); ?>"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="label1 form-label">શ્રી,</label>
                                        <input type="text" value="<?php echo e($deposite->mr); ?>" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="label1 form-label">જમા રકમ :</label>
                                        <input type="text" value="<?php echo e($deposite->total_amount); ?>" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="label1 form-label">જામીનનું નામ:</label>
                                        <input type="text" name="jaamin_nam" class="form1 form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="label1 form-label">પરત કરવાની રકમ:</label>
                                        <input type="text" name="refund_amount" value="<?php echo e($refundAmount); ?>"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <input style="display: none" name="status" value="inactive">

                                </div>
                                <button type="submit" style="width: 260px" class="btn btn-danger  mt-5">
                                    Process Refund and Deactivate
                                </button>

                                <script>
                                    // Prevent the form from submitting on enter
                                    const form = document.getElementById('myForm');
                                    form.addEventListener('keypress', function(e) {
                                        if (e.keyCode === 13) {
                                            e.preventDefault();
                                        }
                                    });
                                </script>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/deposite/refund.blade.php ENDPATH**/ ?>