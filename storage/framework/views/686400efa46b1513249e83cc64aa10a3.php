

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ બચત રિપોર્ટ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"><a href="<?php echo e(url('admin/report')); ?>">રિપોર્ટ </li></a>

                            <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ બચત રિપોર્ટ </li>
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
                            <div class="row">
                                <div class="col-10">
                                    <h5>ફિક્સ ડિપોઝિટ બચત રિપોર્ટ</h5>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            

                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped " id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>નામ</th>
                                        <th>બનાવનાર</th>
                                        <th>તારિક </th>
                                        <th style="width:30%">કારણ</th>
                                        <th>આવક</th>
                                        <th>જાવક</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $countAavak = 0;
                                        $countJavak = 0;
                                    ?>

                                    <?php $__currentLoopData = Session::get('rojMed'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rojMeds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($rojMeds->id); ?></td>
                                            <td><?php echo e($rojMeds->name); ?></td>
                                            <td>
                                                <?php echo e($user->where('id', '=', $rojMeds->login_id)->first()->name); ?></td>

                                            <td><?php echo e(date('d-m-Y', strtotime($rojMeds->date))); ?></td>
                                            <td><?php echo e($rojMeds->reason); ?></td>
                                            <?php if($rojMeds->cash_type == 'આવક'): ?>
                                                <td><b><?php echo e($rojMeds->amount); ?></b></td>
                                                <?php $countAavak +=  $rojMeds->amount; ?>
                                            <?php else: ?>
                                                <td>0</td>
                                            <?php endif; ?>
                                            <?php if($rojMeds->cash_type == 'જાવક'): ?>
                                                <td><b><?php echo e($rojMeds->amount); ?></b></td>
                                                <?php $countJavak +=  $rojMeds->amount; ?>
                                            <?php else: ?>
                                                <td>0</td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)">
                                            <span style="font-size: 18px; font-weight: 800"> કુલ (આવક - જાવક):
                                                <?php echo e($countAavak - $countJavak); ?></span>
                                        </td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            <?php echo e($countAavak); ?>

                                        </td>
                                        <td
                                            style="text-align: center; background-color:rgb(10, 246, 10);font-size: 18px; font-weight: 800">
                                            <?php echo e($countJavak); ?>

                                        </td>
                                    </tr>
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#example').DataTable({
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var title = column.header().textContent;

                        // Create input element and add event listener
                        $('<input type="text" style="width:100%"  placeholder="Search ' + title + '" />')
                            .appendTo($(column.header()).empty())
                            .on('keyup change clear', function() {
                                if (column.search() !== this.value) {
                                    column.search(this.value).draw();
                                }
                            });
                    });
            },
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/receipt/avak.blade.php ENDPATH**/ ?>