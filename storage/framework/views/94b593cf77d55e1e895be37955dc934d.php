<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત ફોર્મ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત ફોર્મ </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>માસિક બચત ફોર્મ</h5>
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            <form id="myForm" action="<?php echo e(url('admin/bachat/save')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" name="member_no" id="validationCustom01"
                                            type="text" value="000<?php echo e($lastBachat->last()->member_no + 0001); ?>" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['member_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">સભ્યપદ તા.</label>
                                        <input class="form1 form-control" name="member_date" id="validationCustom02"
                                            type="date" value="<?php echo e(now()->format('Y-m-d')); ?>" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['member_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom03">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" name="member_image" type="file"
                                            aria-label="file example">
                                        <?php $__errorArgs = ['member_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" name="heir_image_1" type="file"
                                            aria-label="file example">
                                        <?php $__errorArgs = ['heir_image_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom05">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" name="heir_image_2" type="file"
                                            aria-label="file example">
                                        <?php $__errorArgs = ['heir_image_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">શ્રી,</label>
                                        <input class="form1 form-control" name="mr" id="validationCustom06"
                                            list="Name1" type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['mr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <datalist id="Name1">
                                        <?php $__currentLoopData = $lastBachat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastBachats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($lastBachats->mr); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </datalist>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom07">ઉંમર:</label>
                                        <input class="form1 form-control" name="age" id="validationCustom07"
                                            type="number" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom08">ગામ :</label>
                                        <input class="form1 form-control" name="village" id="validationCustom08"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['village'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom09">સરનામુ :</label>
                                        <textarea class="form1 form-control" name="address" id="validationCustom09" type="text"></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom10">સોસાયટી :</label>
                                        <input class="form1 form-control" name="taluk" id="validationCustom10"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['taluk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom13">જિલ્લો :</label>
                                        <input class="form1 form-control" name="city" id="validationCustom14"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom11">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" name="member_business" id="validationCustom11"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['member_business'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom12">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_1" id="validationCustom12"
                                            type="number" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['mobile_no_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom13">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_2" id="validationCustom13"
                                            type="number">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['mobile_no_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom15">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" name="heir_name_1" id="validationCustom15"
                                            type="text">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['heir_name_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom16">ઉંમર:</label>
                                        <input class="form1 form-control" name="age_1" id="validationCustom16"
                                            type="number">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['age_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom17">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" id="validationCustom17" type="text"
                                            name="relationship_with_member_1">
                                        
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        <?php $__errorArgs = ['relationship_with_member_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom18">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" name="heir_name_2" id="validationCustom18"
                                            type="text">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['heir_name_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label">ઉંમર</label>
                                        <input class="form1 form-control" name="age_2" type="number">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['age_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom20">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_2"
                                            id="validationCustom20" type="text">
                                        
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        <?php $__errorArgs = ['relationship_with_member_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="percentage" type="radio"
                                                value="125" id="radio1" style="display: none">
                                            <label class="form-check-label" for="radio1" style="display: none">ફિક્સ
                                                ૧૨-માસ માટે વળતર ૧.૨૫%
                                                લેખે આપવામાં આવશે.</label><br>

                                        </div>
                                    </div>
                                    <div class="mb-3" style="display: none">
                                        <div class="form-check">
                                            <input class="form-check-input" name="percentage" type="radio" checked
                                                value="1" id="radio2">
                                            <label class="form-check-label" for="radio2">અધવચ્ચે ગમે ત્યારે ઉપાડે તો ૧%
                                                લેખે વળતર આપવામાં આવશે.</label>
                                            <?php $__errorArgs = ['percentage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="text-danger"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>


                                    
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom23">સભ્યની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_sign_image">
                                        <?php $__errorArgs = ['member_sign_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom24">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_1">
                                        <?php $__errorArgs = ['heir_sign_image_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom25">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_2">
                                        <?php $__errorArgs = ['heir_sign_image_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom26">એચ.એન.મોલ વતી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="sign_on_behalf_of_jan_jagaruti_image">
                                        <?php $__errorArgs = ['sign_on_behalf_of_jan_jagaruti_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="invalid-feedback">સબમિટ કરતા પહેલા તમારે સંમત થવું આવશ્યક છે.</div>
                                    </div>
                                </div>
                        </div>
                        <center>
                            <button type="submit" style="width: 130px" class="btn btn-primary but m-3">
                                Submit Form
                            </button>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                                // Prevent the form from submitting on enter
                                const form = document.getElementById('myForm');
                                form.addEventListener('keypress', function(e) {
                                    if (e.keyCode === 13) {
                                        e.preventDefault();
                                    }
                                });

                                document.addEventListener('keydown', function(event) {
                                    if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
                                        var form = event.target.form;
                                        var index = Array.prototype.indexOf.call(form, event.target);
                                        form.elements[index + 1].focus();
                                        event.preventDefault();
                                    }
                                });
                            </script>
                        </center>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/bachat/index.blade.php ENDPATH**/ ?>