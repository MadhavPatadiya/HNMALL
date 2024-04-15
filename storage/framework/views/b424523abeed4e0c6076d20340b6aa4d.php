


<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>લોન EMI ફોર્મ - સુધારો </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/emi/create')); ?>">લોન EMI ફોર્મ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">લોન EMI ફોર્મ - સુધારો </li>
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
                            <h5>લોન EMI ફોર્મ - સુધારો </h5>
                        </div>
                        <div class="card-body">

                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <form id="myForm" action="<?php echo e(url('admin/emi/update/' . $EMILoan->id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row g-3">
                                    <div class="col-md-8">
                                    </div>

                                    <div class="col-md-4">
                                        <input style="display: none" name="status" value="active">

                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_no" value="<?php echo e($EMILoan->member_no); ?>" readonly>
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
                                    <div class="col-md-8">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ તારીખ.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_date" value="<?php echo e($EMILoan->member_date); ?>">
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
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_image">
                                        <?php if($EMILoan->member_image): ?>
                                            <img src="<?php echo e(asset('uploads/emi/member_image/' . $EMILoan->member_image)); ?>"
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
                                            name="heir_image">
                                        <?php if($EMILoan->heir_image): ?>
                                            <img src="<?php echo e(asset('uploads/emi/heir_image/' . $EMILoan->heir_image)); ?>"
                                                width="60px" height="60px" />
                                        <?php else: ?>
                                            <p>&nbsp;</p>
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['heir_image'];
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
                                        <label class="label1 form-label" for="validationCustom01">શ્રી,</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mr" value="<?php echo e($EMILoan->mr); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">ઉંમર:</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="age" value="<?php echo e($EMILoan->age); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">ગામ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="village" value="<?php echo e($EMILoan->village); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">સરનામુ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="address" value="<?php echo e($EMILoan->address); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">સોસાયટી :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="taluk" value="<?php echo e($EMILoan->taluk); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">જિલ્લો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="city" value="<?php echo e($EMILoan->city); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_business" value="<?php echo e($EMILoan->member_business); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">મો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mobile_no_1" value="<?php echo e($EMILoan->mobile_no_1); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">મો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mobile_no_2" value="<?php echo e($EMILoan->mobile_no_2); ?>">
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
                                        <label class="label1 form-label" for="validationCustom01">જામીનું નામ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="jaminu_nam" value="<?php echo e($EMILoan->jaminu_nam); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['jaminu_nam'];
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
                                        <label class="label1 form-label" for="validationCustom01">મો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mobile_no_3" value="<?php echo e($EMILoan->mobile_no_3); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['mobile_no_3'];
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
                                        <label class="label1 form-label" for="validationCustom01">જામીન સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="jamin_member_no" value="<?php echo e($EMILoan->jamin_member_no); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['jamin_member_no'];
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
                                        <label class="label1 form-label" for="validationCustom01">Loan Type:</label>
                                        <input class="form1 form-control" id="loan_type" type="text" name="loan_type"
                                            value="<?php echo e($EMILoan->loan_type); ?>" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['loan_type'];
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
                                    <div class="col-md-4"
                                        style="<?php echo e($EMILoan->product_name === null ? 'display: none;' : ''); ?>">
                                        <label class="label1 form-label" for="validationCustom01">Product Name:</label>
                                        <input class="form1 form-control" id="product_name_product" type="text"
                                            name="product_name" value="<?php echo e($EMILoan->product_name); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['product_name'];
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
                                        <label class="label1 form-label" for="validationCustom01">કિંમત :</label>
                                        <input class="form1 form-control" id="price_product" type="text"
                                            oninput="calculateTotalAmount()" name="price"
                                            value="<?php echo e($EMILoan->price); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['price'];
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
                                    <div class="col-md-4"
                                        style="<?php echo e($EMILoan->down_payment === null ? 'display: none;' : ''); ?>">
                                        <label class="label1 form-label" for="validationCustom01">ડાઉન પેમેન્ટ :</label>
                                        <input class="form1 form-control" id="down_payment_product" type="text"
                                            oninput="calculateTotalAmount()" name="down_payment"
                                            value="<?php echo e($EMILoan->down_payment); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['down_payment'];
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
                                        <label class="label1 form-label" for="validationCustom01">લોનની રકમ :</label>
                                        <input class="form1 form-control" id="loan_amount_product" type="text"
                                            name="loan_amount" value="<?php echo e($EMILoan->loan_amount); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['loan_amount'];
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
                                    
                                    

                                    
                                    
                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <label class="label1 form-label" for="validationCustom06">સભ્યની સહી</label>
                                            <input class="form1 form-control" type="file" aria-label="file example"
                                                name="member_sign_image">
                                            <?php if($EMILoan->member_sign_image): ?>
                                                <img src="<?php echo e(asset('uploads/emi/member_sign_image/' . $EMILoan->member_sign_image)); ?>"
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
                                        <div class="col-md-4 mt-3">
                                            <label class="label1 form-label" for="validationCustom06">વારજામીન સહી</label>
                                            <input class="form1 form-control" type="file" aria-label="file example"
                                                name="jamin_sign_image">
                                            <?php if($EMILoan->jamin_sign_image): ?>
                                                <img src="<?php echo e(asset('uploads/emi/jamin_sign_image/' . $EMILoan->jamin_sign_image)); ?>"
                                                    width="60px" height="60px" />
                                            <?php else: ?>
                                                <p>&nbsp;</p>
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['jamin_sign_image'];
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
                                        <div class="col-md-4 mt-3">
                                            <label class="label1 form-label" for="validationCustom06">એચ.એન.મોલ
                                                વતી</label>
                                            <input class="form1 form-control" type="file" aria-label="file example"
                                                name="jjg_sign_image_2">
                                            <?php if($EMILoan->jjg_sign_image_2): ?>
                                                <img src="<?php echo e(asset('uploads/emi/jjg_sign_image_2/' . $EMILoan->jjg_sign_image_2)); ?>"
                                                    width="60px" height="60px" />
                                            <?php else: ?>
                                                <p>&nbsp;</p>
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['jjg_sign_image_2'];
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
                                        
                                    <div class="col-md-8">
                                        <label class="label1 form-label" for="validationCustom01">નૉૅધ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="note" value="<?php echo e($EMILoan->note); ?>">
                                        <div class="valid-feedback">Looks good!</div>
                                        <?php $__errorArgs = ['note'];
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
        function calculateTotalAmount() {
            var price_product = document.getElementById("price_product").value;
            var down_payment_product = document.getElementById("down_payment_product").value;

            var loan = price_product - down_payment_product;
            document.getElementById('loan_amount_product').value = loan.toFixed(2);



            // var loan_type = document.getElementById("loan_type").value;
            // if (loan_type === "Product") {
            //     var price = parseFloat(document.getElementById('price_product').value) || 0;
            //     var downPayment = parseFloat(document.getElementById('down_payment_product').value) || 0;

            //     var loanAmount = price - downPayment;

            //     document.getElementById('loan_amount_product').value = loanAmount.toFixed(2);
            //     $('#ABC').show();
            //     $('#ABCC').show();
            //     $('#ABCCC').show();
            //     $('#loan_amount_hide').show();

            // } else if (loan_type === "Cash") {
            //     var price = parseFloat(document.getElementById('price_product').value) || 0;
            //     var downPayment = parseFloat(document.getElementById('down_payment_product').value) || 0;

            //     var loanAmount = price - downPayment;

            //     document.getElementById('loan_amount_product').value = loanAmount.toFixed(2);
            //     $('#ABC').hide();
            //     $('#ABCC').hide();
            //     $('#ABCCC').hide();
            //     $('#loan_amount_hide').hide();

            // }
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\HNMALL_13-02-2024\resources\views/admin/emi/edit.blade.php ENDPATH**/ ?>