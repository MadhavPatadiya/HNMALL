<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>EMI જમા પહોંચ યાદી </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/emi/emi_receipt')); ?>">EMI લોન પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">EMI જમા પહોંચ યાદી </li>
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
                            <h4>EMI જમા પહોંચ યાદી </h4>
                            <h5>સભ્યપદ નં. <?php echo e($EMILoan->member_no); ?></h5>
                            <h5>શ્રી, <?php echo e($EMILoan->mr); ?></h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>કુલ લોનની રકમ</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $EMIreceipt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $EMIreceipts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($EMIreceipts->id); ?></td>
                                            <td><?php echo e($user->where('id', '=', $EMIreceipts->login_id)->first()->name); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($EMIreceipts->date))); ?></td>
                                            <td><?php echo e($EMIreceipts->total_amount); ?></td>
                                            
                                            <td><a href="<?php echo e(url('admin/emi/' . $EMIreceipts->id . '/view_emi_receipt')); ?>"
                                                    class="btn btn-primary">પહોંચ</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="4">No Receipts Available</td>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/emi/emi_all_receipt.blade.php ENDPATH**/ ?>