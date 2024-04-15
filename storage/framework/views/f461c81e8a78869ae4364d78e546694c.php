<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>સભાપદ ફોર્મ-ફિક્સ ડિપોઝિટ - સુધારો</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/deposite/create')); ?>">સભાપદ
                                    ફોર્મ-ફિક્સ ડિપોઝિટ
                                </a>
                            </li>

                            <li class="breadcrumb-item active">સભાપદ ફોર્મ-ફિક્સ ડિપોઝિટ - સુધારો </li>
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
                            <h5>સભાપદ ફોર્મ-ફિક્સ ડિપોઝિટ - સુધારો</h5>
                        </div>
                        <div class="card-body">

                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <form id="myForm" action="<?php echo e(url('admin/deposite/update/' . $deposite->id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row g-3">

                                    <div class="col-md-4">
                                        <input style="display: none" name="status" value="active">

                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_no" value="<?php echo e($deposite->member_no); ?>" readonly>
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
                                        <input style="display: none" class="form1 form-control" id="validationCustom01"
                                            type="number" value="<?php echo e($deposite->receipt_no); ?>" readonly name="receipt_no">
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

                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom03">સભ્યપદ તારીખ.</label>
                                        <input class="form1 form-control" id="validationCustom" type="date"
                                            name="member_date" value="<?php echo e($deposite->member_date); ?>">
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
                                        <label class="label1 form-label" for="validationCustom03">પાકતી મુદત</label>
                                        <input class="form1 form-control" id="maturity_period" type="date"
                                            name="maturity_period" value="<?php echo e($deposite->maturity_period); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['maturity_period'];
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
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_image">
                                        <?php if($deposite->member_image): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/member_image/' . $deposite->member_image)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
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
                                        <?php if($deposite->heir_image_1): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/heir_image_1/' . $deposite->heir_image_1)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
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
                                        <label class="label1 form-label" for="validationCustom06">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_image_2">
                                        <?php if($deposite->heir_image_2): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/heir_image_2/' . $deposite->heir_image_2)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
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
                                        <label class="label1 form-label" for="validationCustom02">શ્રી,</label>
                                        <input class="form1 form-control" id="validationCustom02" type="text"
                                            name="mr" value="<?php echo e($deposite->mr); ?>">
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

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">ઉંમર:</label>
                                        <input class="form1 form-control" id="validationCustom04" type="number"
                                            name="age" value="<?php echo e($deposite->age); ?>">
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
                                        <label class="label1 form-label" for="validationCustom04">ગામ :</label>
                                        <input class="form1 form-control" id="validationCustom04" type="text"
                                            name="village" value="<?php echo e($deposite->village); ?>">
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
                                        <label class="label1 form-label" for="validationCustom05">સરનામુ :</label>
                                        <input class="form1 form-control" id="validationCustom05" type="text"
                                            name="address" value="<?php echo e($deposite->address); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">સોસાયટી :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            placeholder="Taluko" name="taluk" value="<?php echo e($deposite->taluk); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">જિલ્લો. :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            placeholder="City" name="city" value="<?php echo e($deposite->city); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            name="member_business" value="<?php echo e($deposite->member_business); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">મો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="number"
                                            name="mobile_no_1" value="<?php echo e($deposite->mobile_no_1); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">મો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="number"
                                            name="mobile_no_2" value="<?php echo e($deposite->mobile_no_2); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            name="heir_name_1" value="<?php echo e($deposite->heir_name_1); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">ઉંમર:</label>
                                        <input class="form1 form-control" id="validationCustom06" type="number"
                                            name="age_1" value="<?php echo e($deposite->age_1); ?>">
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
                                        <label class="label1 form-label" for="validationCustom04">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_1"
                                            id="validationCustom04" type="text"
                                            value="<?php echo e($deposite->relationship_with_member_1); ?>">
                                        
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            name="heir_name_2" value="<?php echo e($deposite->heir_name_2); ?>">
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
                                        <label class="label1 form-label" for="validationCustom06">ઉંમર:</label>
                                        <input class="form1 form-control" id="validationCustom06" type="number"
                                            name="age_2" value="<?php echo e($deposite->age_2); ?>">
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
                                        <label class="label1 form-label" for="validationCustom04">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_2"
                                            id="validationCustom04" type="text"
                                            value="<?php echo e($deposite->relationship_with_member_2); ?>">
                                        
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                    </div>
                                    

                                    <div class="col-12">
                                        <label class="label1 form-label" for="validationCustom04">નૉૅધ :</label><br>
                                        
                                        <input class="form1 form-control" id="validationCustom02" type="text"
                                            name="note" value="<?php echo e($deposite->note); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">કુલ રકમ</label>
                                        <input class="form1 form-control" id="total_amount" type="text"
                                            name="total_amount" value="<?php echo e($deposite->total_amount); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['total_amount'];
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
                                        <label class="label1 form-label" for="validationCustom02">શબ્દો</label>
                                        <input class="form1 form-control" type="text" id="totalAmountWords"
                                            name="words" value="<?php echo e($deposite->words); ?>" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['words'];
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

                                    <div class="col-md-12">
                                        <label class="label1 form-label" for="validationCustom06">
                                            <div class="input-group ml-2">
                                                <span class="input-group-text">વડતર સાહિત્ય ની મડવા પત્ર રકમ રૂપિયા</span>
                                                <input id="vyaj_amount" class="form1 form-control" name="vyaj_amount"
                                                    value="<?php echo e($deposite->vyaj_amount); ?>" readonly>
                                                <span class="input-group-text">/- અંકે રૂપિયા</span><input
                                                    class="form1 form-control col-12" id="double_amount_words"
                                                    name="vyaj_amount_words" value="<?php echo e($deposite->vyaj_amount_words); ?>"
                                                    readonly style="width: 100%">
                                            </div>
                                        </label>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <div class="radio p-0">
                                                <input class="form-check-input" type="radio" name="double_amount"
                                                    id="option1" value="option1" onclick="return false"
                                                    <?php echo e($deposite->double_amount === 'option1' ? 'checked' : ''); ?>>
                                                <label class="form-check-label" style="font-size:23px"
                                                    for="option1">૫૦૦૦ થી ૨૪૦૦૦ સુધીની રકમ
                                                    ભરનાર સભ્ય માટે > ૪-વર્ષ અને ૯-માસ માં ડબલ પરત આપવામાં આવશે.</label>

                                            </div>
                                            <div class="radio p-0">
                                                <input class="form-check-input" type="radio" name="double_amount"
                                                    id="option2" value="option2" onclick="return false"
                                                    <?php echo e($deposite->double_amount === 'option2' ? 'checked' : ''); ?>>
                                                <label class="form-check-label" style="font-size:23px"
                                                    for="option2">૨૫૦૦૦ થી ૪૯૦૦૦ સુધીની રકમ
                                                    ભરનાર સભ્ય માટે > ૪-વર્ષ અને ૭-માસ માં ડબલ પરત આપવામાં આવશે.</label>

                                            </div>
                                            <div class="radio p-0">
                                                <input class="form-check-input" type="radio" name="double_amount"
                                                    id="option3" value="option3" onclick="return false"
                                                    <?php echo e($deposite->double_amount === 'option3' ? 'checked' : ''); ?>>
                                                <label class="form-check-label" style="font-size:23px"
                                                    for="option3">૫૦૦૦૦ થી વધુ રકમ ભરનાર સભ્ય
                                                    માટે > ૪-વર્ષ અને ૫-માસ માં ડબલ પરત આપવામાં આવશે</label>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="label1 form-label" for="validationCustom06">500 X :</label>
                                            <input class="form1 form-control" type="number" id="note500"
                                                onkeyup="total()" name="cash_500" value="<?php echo e($deposite->cash_500); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label1 form-label" for="validationCustom06">200 X :</label>
                                            <input class="form1 form-control" type="number" id="note200"
                                                onkeyup="total()" name="cash_200" value="<?php echo e($deposite->cash_200); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label1 form-label" for="validationCustom06">100 X :</label>
                                            <input class="form1 form-control" type="number" id="note100"
                                                onkeyup="total()" name="cash_100" value="<?php echo e($deposite->cash_100); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label1 form-label" for="validationCustom06">50 X :</label>
                                            <input class="form1 form-control" type="number" id="note50"
                                                onkeyup="total()" name="cash_50" value="<?php echo e($deposite->cash_50); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label1 form-label" for="validationCustom06">20 X :</label>
                                            <input class="form1 form-control" type="number" id="note20"
                                                onkeyup="total()" name="cash_20" value="<?php echo e($deposite->cash_20); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="label1 form-label" for="validationCustom06">1 X :</label>
                                            <input class="form1 form-control" type="number" id="note1"
                                                onkeyup="total()" name="cash_1" value="<?php echo e($deposite->cash_1); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_sign_image">
                                        <?php if($deposite->member_sign_image): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/member_sign_image/' . $deposite->member_sign_image)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
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
                                        <label class="label1 form-label" for="validationCustom06">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_1">
                                        <?php if($deposite->heir_sign_image_1): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/heir_sign_image_1/' . $deposite->heir_sign_image_1)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>

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
                                        <label class="label1 form-label" for="validationCustom06">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_2">
                                        <?php if($deposite->heir_sign_image_2): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/heir_sign_image_2/' . $deposite->heir_sign_image_2)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
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
                                        <label class="label1 form-label" for="validationCustom06">એચ.એન.મોલ વતી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="sign_on_behalf_of_jan_jagaruti_image">
                                        <?php if($deposite->sign_on_behalf_of_jan_jagaruti_image): ?>
                                            <img src="<?php echo e(asset('uploads/deposite/sign_on_behalf_of_jan_jagaruti_image/' . $deposite->sign_on_behalf_of_jan_jagaruti_image)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
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
                                <button class="btn btn-primary float-end" type="submit">Update form</button>
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

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        function total() {
            var a = document.getElementById('note500').value;
            var b = document.getElementById('note200').value;
            var c = document.getElementById('note100').value;
            var d = document.getElementById('note50').value;
            var e = document.getElementById('note20').value;
            var f = document.getElementById('note1').value;
            if (!(a)) {
                var a = 0;
            }
            if (!(b)) {
                var b = 0;
            }
            if (!(c)) {
                var c = 0;
            }
            if (!(d)) {
                var d = 0;
            }
            if (!(e)) {
                var e = 0;
            }
            if (!(f)) {
                var f = 0;
            }

            var result = (parseInt(a) * 500) + (parseInt(b) * 200) + (parseInt(c) * 100) + (parseInt(d) * 50) + (parseInt(
                e) * 20) + (parseInt(f) * 1);


            document.getElementById('total_amount').value = result;
            updateTotalAmountWords()

            var option1 = document.getElementById('option1');
            var option2 = document.getElementById('option2');
            var option3 = document.getElementById('option3');

            if (result <= 24999) {
                option1.checked = true;
            } else if (result >= 25000 && result <= 49999) {
                option2.checked = true;
            } else if (result >= 50000) {
                option3.checked = true;
            }

            // Calculate maturity period based on total_amount
            var startDateInput = document.getElementById('validationCustom');
            var maturityPeriodInput = document.getElementById('maturity_period');
            var maturityPeriod = 0; // Default value

            if (result < 24999) {
                maturityPeriod = 9; // 9 months
            } else if (result >= 25000 && result <= 49999) {
                maturityPeriod = 7; // 7 months
            } else if (result >= 50000) {
                maturityPeriod = 5; // 5 months
            }

            // Calculate maturity date and set the value
            var startDate = new Date(startDateInput.value);
            var maturityDate = new Date(startDate);
            maturityDate.setFullYear(startDate.getFullYear() + 4);
            maturityDate.setMonth(startDate.getMonth() + maturityPeriod);

            maturityPeriodInput.value = maturityDate.toISOString().split('T')[0];


        }
    </script>

    <script>
        function convertToIndianCurrencyWords(amount) {
            const ones = {
                0: "Zero",
                1: "One",
                2: "Two",
                3: "Three",
                4: "Four",
                5: "Five",
                6: "Six",
                7: "Seven",
                8: "Eight",
                9: "Nine",
                10: "Ten",
                11: "Eleven",
                12: "Twelve",
                13: "Thirteen",
                14: "Fourteen",
                15: "Fifteen",
                16: "Sixteen",
                17: "Seventeen",
                18: "Eighteen",
                19: "Nineteen",
            };

            const prefixes = {
                2: "Twenty",
                3: "Thirty",
                4: "Forty",
                5: "Fifty",
                6: "Sixty",
                7: "Seventy",
                8: "Eighty",
                9: "Ninety",
            };

            function toWords(number) {
                if (number === 0) {
                    return ones[number];
                }

                var words = "";
                var crore = Math.floor(number / 10000000);
                number %= 10000000;
                var lakh = Math.floor(number / 100000);
                number %= 100000;
                var thousand = Math.floor(number / 1000);
                number %= 1000;
                var hundred = Math.floor(number / 100);
                number %= 100;

                if (crore > 0) {
                    words += ones[crore] + " Crore ";
                }

                if (lakh > 0) {
                    words += ones[lakh] + " Lakh ";
                }

                if (thousand > 0) {
                    words += ones[thousand] + " Thousand ";
                }

                if (hundred > 0) {
                    words += ones[hundred] + " Hundred ";
                }

                if (number > 0) {
                    if (words !== "") {
                        words += "and ";
                    }
                    if (number < 20) {
                        words += ones[number];
                    } else {
                        words += prefixes[Math.floor(number / 10)];
                        if (number % 10 !== 0) {
                            words += " " + ones[number % 10];
                        }
                    }
                }
                return words;
            }

            const crores = Math.floor(amount / 10000000);
            amount -= crores * 10000000;

            const lakhs = Math.floor(amount / 100000);
            amount -= lakhs * 100000;

            const thousands = Math.floor(amount / 1000);
            amount -= thousands * 1000;

            const hundreds = Math.floor(amount / 100);
            amount -= hundreds * 100;

            let amountInWords = "";

            if (crores > 0) {
                amountInWords += toWords(crores) + " Crore ";
            }

            if (lakhs > 0) {
                amountInWords += toWords(lakhs) + " Lakh ";
            }

            if (thousands > 0) {
                amountInWords += toWords(thousands) + " Thousand ";
            }

            if (hundreds > 0) {
                amountInWords += toWords(hundreds) + " Hundred ";
            }

            if (amount > 0) {
                amountInWords += toWords(amount);
            }

            return amountInWords.trim() + " Rupees Only";
        }

        function updateTotalAmountWords() {
            var depositValue = parseInt(document.getElementById("total_amount").value) || 0;
            var totalAmountWordsField = document.getElementById("totalAmountWords");

            totalAmountWordsField.value = convertToIndianCurrencyWords(depositValue);


            var doubleAmount = depositValue * 2;
            var doubleAmountField = document.getElementById("vyaj_amount");
            doubleAmountField.value = doubleAmount.toFixed(2);
            var doubleAmountWordsField = document.getElementById("double_amount_words");
            doubleAmountWordsField.value = convertToIndianCurrencyWords(doubleAmount);

        }

        document.getElementById("total_amount").addEventListener("input", updateTotalAmountWords);
        document.getElementById("total_amount").addEventListener("change", updateTotalAmountWords);

        updateTotalAmountWords();
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/deposite/edit.blade.php ENDPATH**/ ?>