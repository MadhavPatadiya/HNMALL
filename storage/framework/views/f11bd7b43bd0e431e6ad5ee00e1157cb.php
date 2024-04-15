

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>રિપોર્ટ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">રિપોર્ટ</li>
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
                            <h5>રિપોર્ટ</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(url('admin/search')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-5">
                                    <div class="col-2">
                                        <b>બનાવનાર : </b>
                                    </div>
                                    <div class="col-4">
                                        <select name="login_id" class="form-control">
                                            <option>Select Username</option>

                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($users->id); ?>"><?php echo e($users->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row abc">
                                    <div class="col-2"><b>તારીખ પસંદ કરો : </b></div>
                                    <div class="col-4">
                                        <input type="date" class="form-control" value="<?php echo e(now()->format('Y-m-d')); ?>"
                                            name="start_date">
                                    </div>
                                    <div class="col-4"><input type="date"class="form-control"
                                            value="<?php echo e(now()->format('Y-m-d')); ?>" name="end_date">
                                    </div>
                                    <div class="col-2">
                                    </div>
                                    <div class="col-2 mt-5">
                                        <b>વિકલ્પ પસંદ કરો : </b>
                                    </div>
                                    <div class="col-8 mt-5">
                                        <div class="form-check radio radio-warning">
                                            <input class="form-check-input" id="radio44" checked type="radio"
                                                name="option" value="option5">
                                            <label class="form-check-label" for="radio44">
                                                <h6><b>આવક/જાવક</b></h6>
                                            </label>
                                        </div>

                                        <div class="form-check radio radio-primary">
                                            <input class="form-check-input" id="radio11" type="radio" name="option"
                                                value="option1">
                                            <label class="form-check-label" for="radio11">
                                                <h6><b>માસિક બચત
                                                        રિપોર્ટ</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-secondary">
                                            <input class="form-check-input" id="radio22" type="radio" name="option"
                                                value="option2">
                                            <label class="form-check-label" for="radio22">
                                                <h6><b>ફિક્સ ડિપોઝિટ</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-success">
                                            <input class="form-check-input" id="radio55" type="radio" name="option"
                                                value="option3">
                                            <label class="form-check-label" for="radio55">
                                                <h6><b>દીકરી રિપોર્ટ</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-info">
                                            <input class="form-check-input" id="radio33" type="radio" name="option"
                                                value="option4">
                                            <label class="form-check-label" for="radio33">
                                                <h6><b>EMI LOAN</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-info">
                                            <input class="form-check-input" id="radio66" type="radio" name="option"
                                                value="option6">
                                            <label class="form-check-label" for="radio66">
                                                <h6><b>EMI Form</b></h6>
                                            </label>
                                        </div>


                                        
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="float-end mt-5">
                                        <button type="submit" class="btn btn-primary but"><b>રિપોર્ટ જુઓ</b></button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/receipt/index.blade.php ENDPATH**/ ?>