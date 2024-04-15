<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>નિષ્ક્રિય એકાઉન્ટ સૂચિ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/dikari/receipt')); ?>">દીકરીના
                                    કરિયાવર માટેની પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">નિષ્ક્રિય એકાઉન્ટ સૂચિ </li>
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
                            <div class="col-12">
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
                                        box-shadow: inset 270px 0 0 0 #000000;
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
                                <h5 class="ani"> નિષ્ક્રિય એકાઉન્ટ સૂચિ</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>સભ્યપદ નં.</th>
                                            <th>બનાવનાર</th>
                                            <th>તારીખ</th>
                                            <th>નામ</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $dikari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dikaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <td><?php echo e($dikaris->id); ?></td>
                                            <td><?php echo e($dikaris->member_no); ?></td>
                                            <td><?php echo e($user->where('id','=',$dikaris->login_id)->first()->name); ?></td>
                                            <td><?php echo e(date('d-m-Y', strtotime($dikaris->amount_date))); ?></td>
                                            <td><?php echo e($dikaris->mr); ?></td>
                                            
                                            <td> <a href="<?php echo e(url('admin/dikari/' . $dikaris->id . '/view_deactivate')); ?>"
                                                    class="btn btn-primary">રદ પહોંચ</a>
                                            </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="5">No Receipts Available</td>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/dikari/deactivate_list.blade.php ENDPATH**/ ?>