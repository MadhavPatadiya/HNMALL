<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>નિષ્ક્રિય એકાઉન્ટ સૂચિ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a
                                    href="<?php echo e(url('admin/deposite/fix_deposite_receipt')); ?>">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">નિષ્ક્રિય એકાઉન્ટ સૂચિ
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
                            <style>
                                .ani {
                                    box-shadow: inset 0 0 0 0 #000000;
                                    color: #000000;
                                    padding: 0 .25rem;
                                    margin: 0 -.25rem;
                                    transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
                                }

                                .ani:hover {
                                    color: #fff;
                                    box-shadow: inset 250px 0 0 0 #000000;
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
                                <h5 class="ani">નિષ્ક્રિય એકાઉન્ટ સૂચિ
                                </h5>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>પાકતી મુદત</th>
                                        <th>નામ</th>
                                        <th>જમા રકમ</th>
                                        <th>વળતર સહીતની રકમ</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $deposite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($deposites->id); ?></td>
                                            <td><?php echo e($deposites->member_no); ?></td>
                                            <td><?php echo e($user->where('id','=',$deposites->login_id)->first()->name); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($deposites->member_date))); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($deposites->maturity_period))); ?></td>
                                            <td><?php echo e($deposites->mr); ?></td>
                                            <td><?php echo e($deposites->total_amount); ?></td>
                                            <td><?php echo e($deposites->vyaj_amount); ?></td>
                                            <td><?php echo e($deposites->status); ?></td>
                                            <td><a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/view_receipt')); ?>"
                                                    class="btn btn-primary">પહોંચ</a>
                                                <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/view_refund_loan_receipt')); ?>"
                                                    class="btn btn-primary">રદ પહોંચ</a>
                                                <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/loan_receipt')); ?>"
                                                    class="btn btn-danger">લોન પહોંચ</a>
                                                <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/loan_deposite_receipt')); ?>"
                                                    class="btn btn-danger">લોન જમા પહોંચ</a>
                                                <a href="<?php echo e(url('admin/deposite/' . $deposites->id . '/loan_interest_statement')); ?>"
                                                    class="btn btn-dark">Statement</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="9">No Account's Available</td>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/deposite/deactivate_list_deposite.blade.php ENDPATH**/ ?>