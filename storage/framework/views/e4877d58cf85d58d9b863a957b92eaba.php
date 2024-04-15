<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસીક બચત જમા-ઉપાડ પહોંચ યાદી</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/bachat-receipt/create')); ?>">માસિક બચત
                                    પહોંચ
                                </a>
                            <li class="breadcrumb-item active">માસીક બચત જમા-ઉપાડ પહોંચ યાદી </li>
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
                            <h5>માસીક બચત જમા-ઉપાડ પહોંચ યાદી <?php echo e($bachat->mr); ?></h5>
                            <h5>Member No : <?php echo e($bachat->member_no); ?></h5>
                            <h5>Wallet Balance : <?php echo e($wallet->balance); ?></h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>રોકડ ઉપાડ</th>
                                        <th>ઉપાડેલી વ્યાજની રકમ રૂ</th>
                                        <th>જમા રકમ રૂ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $bachatDebitReceipt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bachatDebitReceipts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($bachatDebitReceipts->id); ?></td>
                                            <td><?php echo e($user->where('id','=',$bachatDebitReceipts->login_id)->first()->name); ?></td>
                                            
                                            <td><?php echo e(date('d-m-Y', strtotime($bachatDebitReceipts->member_date))); ?></td>
                                            <td><?php echo e($bachatDebitReceipts->debit_balance); ?></td>
                                            <td><?php echo e($bachatDebitReceipts->debit_interest); ?></td>
                                            <td><?php echo e($bachatDebitReceipts->deposit); ?></td>
                                            <td><a href="<?php echo e(url('admin/debit-receipt/' . $bachatDebitReceipts->id . '/show')); ?>"
                                                    class="btn btn-primary">View</a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="6">No Receipts Available</td>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/bachat_receipt/viewAllDebitReceipt.blade.php ENDPATH**/ ?>