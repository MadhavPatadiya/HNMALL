<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે </li>
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
                            <h5>સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે</h5>
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <form action="<?php echo e(url('admin/dikari/save')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_image">
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
                                        <label class="label1 form-label" for="validationCustom06">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_image_1">
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
                                        <label class="label1 form-label" for="validationCustom06">દિકરીનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="daughter_image">
                                        <?php $__errorArgs = ['daughter_image'];
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
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" name="member_no" id="validationCustom01"
                                            type="text" value="000<?php echo e($lastDikari->last()->member_no + 0001); ?>" readonly>
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
                                        <label style="display: none" class="label1 form-label" for="validationCustom01">રસીદ
                                            નંબર:</label>
                                        <input style="display: none" class="form1 form-control" name="receipt_no"
                                            id="validationCustom01" type="text"
                                            value="0<?php echo e($lastDikariReceiptNo->last()->receipt_no + 1); ?>" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['receipt_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <label style="display: none" class="label1 form-label"
                                            for="validationCustom01">Status</label>
                                        <input style="display: none" class="form1 form-control" name="status"
                                            id="validationCustom01" type="text" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['status'];
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
                                            type="date" value="<?php echo e(now()->format('Y-m-d')); ?>">
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
                                        <?php $__currentLoopData = $lastDikari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastDikaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($lastDikaris->mr); ?></option>
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
                                        <textarea class="form1 form-control" name="address" id="validationCustom09" type="text" required></textarea>
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
                                        <label class="label1 form-label" for="validationCustom14">જીલ્લો :</label>
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
                                            type="text" required>
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
                                            type="number" required>
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
                                        <input class="form1 form-control" name="relationship_with_member_1"
                                            id="validationCustom17" type="text" required>
                                        
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
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom15">દિકરીનું નામ :</label>
                                        <input class="form1 form-control" name="daughter_name" id="validationCustom15"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['daughter_name'];
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
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom17">દિકરીની જન્મ
                                            તારીખ:</label>
                                        <input class="form1 form-control" name="birth_date_of_daughter" id="birthDate"
                                            type="date" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['birth_date_of_daughter'];
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
                                        <label class="label1 form-label">રકમ મળવાપાત્ર તારીખ:</label>
                                        <input class="form1 form-control" name="amount_date" id="amount_date"
                                            type="text" readonly>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="label1 form-label">દિકરીની ઉંમર:</label>
                                        <input class="form1 form-control" name="age_2" id="daughter_age"
                                            type="text" readonly>
                                    </div>


                                    <div class="col-md-5">
                                        <label class="label1 form-label">રકમ નું કરિયાવર મળવાપાત્ર:</label>
                                        <input class="form1 form-control" name="worth_kariyavar" id="field_1"
                                            type="text" readonly>
                                    </div>

                                    <div class="col-md-5">
                                        <label class="label1 form-label">રકમ મળવાપાત્ર:</label>
                                        <input class="form1 form-control" name="kariyavar_amount" id="field_2"
                                            type="text" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label">કુલ ભરવા પાત્ર રકમ:</label>
                                        <input class="form1 form-control" name="fix_amount" value="10000"
                                            type="text" readonly>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="label1 form-label">શબ્દોમાં રૂપિયા:</label>
                                        <input class="form1 form-control" name="fix_amount_word"
                                            value="Ten Thousand Rupees Only" type="text" readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom19">દિકરીનો સહી </label>
                                        <input class="form1 form-control" name="daughter_sign_image" type="file"
                                            aria-label="file example">
                                        <?php $__errorArgs = ['daughter_sign_image'];
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
                                        <label class="label1 form-label" for="validationCustom23">સભ્યની સહી.</label>
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
                                <center>
                                    <button type="submit" style="width: 130px" class="btn btn-primary but m-3">
                                        Submit Form
                                    </button>
                                </center>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const daughterBirthDateInput = document.getElementById('birthDate');
            const daughterAge18DateInput = document.getElementById('amount_date');
            const daughterAgeInput = document.getElementById('daughter_age');
            const field1Input = document.getElementById('field_1');
            const field2Input = document.getElementById('field_2');

            daughterBirthDateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                const currentDate = new Date();

                // Calculate age
                const age = currentDate.getFullYear() - selectedDate.getFullYear();

                // Calculate date when 18
                selectedDate.setFullYear(selectedDate.getFullYear() + 18);
                if (!isNaN(selectedDate.getTime())) {
                    const formattedDate = selectedDate.toISOString().split('T')[0];
                    daughterAge18DateInput.value = formattedDate;
                } else {
                    daughterAge18DateInput.value = '';
                }

                // Set age
                daughterAgeInput.value = age;

                // Calculate field values based on age
                let field1Value = 0;
                let field2Value = 0;

                if (age === 6) {
                    field1Value = 45000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 7) {
                    field1Value = 42000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 8) {
                    field1Value = 38000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 9) {
                    field1Value = 34000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 10) {
                    field1Value = 30000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 11) {
                    field1Value = 26000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 12) {
                    field1Value = 23000;
                    field2Value = 0.8 * field1Value;
                } else if (age === 13) {
                    field1Value = 20000;
                    field2Value = 0.8 * field1Value;
                }


                // Set field values
                field1Input.value = field1Value;
                field2Input.value = field2Value;
            });
        });
    </script>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const daughterBirthDateInput = document.getElementById('birthDate');
            const daughterAge18DateInput = document.getElementById('amount_date');
            const daughterAgeInput = document.getElementById('daughter_age');

            daughterBirthDateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                const currentDate = new Date();

                // Calculate age
                const age = currentDate.getFullYear() - selectedDate.getFullYear();

                // Calculate date when 18
                selectedDate.setFullYear(selectedDate.getFullYear() + 18);
                if (!isNaN(selectedDate.getTime())) {
                    const formattedDate = selectedDate.toISOString().split('T')[0];
                    daughterAge18DateInput.value = formattedDate;
                } else {
                    daughterAge18DateInput.value = '';
                }

                // Set age
                daughterAgeInput.value = age;
            });
        });
    </script>
    

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const daughterBirthDateInput = document.getElementById('birthDate');
            const daughterAge18DateInput = document.getElementById('amount_date');

            daughterBirthDateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                selectedDate.setFullYear(selectedDate.getFullYear() + 18);

                if (!isNaN(selectedDate.getTime())) {
                    const formattedDate = selectedDate.toISOString().split('T')[0];
                    daughterAge18DateInput.value = formattedDate;
                } else {
                    daughterAge18DateInput.value = '';
                }
            });
        });
    </script>
    

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const birthDateInput = document.getElementById('birthDate');
            birthDateInput.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                const currentDate = new Date();
                const minDate = new Date(currentDate.getFullYear() - 13, currentDate.getMonth(), currentDate
                    .getDate());
                const maxDate = new Date(currentDate.getFullYear() - 5, currentDate.getMonth(), currentDate
                    .getDate());

                if (selectedDate >= minDate && selectedDate <= maxDate) {
                    // Valid date
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    // Invalid date
                    this.classList.remove('is-valid');
                    this.classList.add('is-invalid');
                }
            });
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/dikari/index.blade.php ENDPATH**/ ?>