<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>લોન EMI ફોર્મ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">લોન EMI ફોર્મ </li>
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
                            <h5>લોન EMI ફોર્મ</h5>
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <form id="myForm" action="<?php echo e(url('admin/emi/save')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-md-8">
                                    </div>
                                    <input style="display: none" name="status" value="active">

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="number"
                                            value="000<?php echo e($lastEMILoan->last()->member_no + 0001); ?>" readonly
                                            name="member_no">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-8">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom03">સભ્યપદ તારીખ.</label>
                                        <input class="form1 form-control" id="validationCustom03" type="date"
                                            value="<?php echo e(now()->format('Y-m-d')); ?>" name="member_date">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_image">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_image">
                                    </div>


                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">શ્રી,</label>
                                        <input class="form1 form-control" id="validationCustom02" type="text"
                                            list="Name1" name="mr" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <datalist id="Name1">
                                        <?php $__currentLoopData = $lastEMILoan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastEMILoans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($lastEMILoans->mr); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </datalist>


                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">ઉંમર:</label>
                                        <input class="form1 form-control" id="validationCustom04" type="number"
                                            name="age" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">ગામ :</label>
                                        <input class="form1 form-control" id="validationCustom04" type="text"
                                            name="village" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom05">સરનામુ :</label>
                                        <input class="form1 form-control" id="validationCustom05" type="text"
                                            name="address" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સોસાયટી :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            name="taluk" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">જિલ્લો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            name="city" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="text"
                                            name="member_business" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">મો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="number"
                                            name="mobile_no_1" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">મો :</label>
                                        <input class="form1 form-control" id="validationCustom06" type="number"
                                            name="mobile_no_2">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>


                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">જામીનું નામ :</label>
                                        <input class="form1 form-control" id="validationCustom02" type="text"
                                            name="jaminu_nam" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">મો :</label>
                                        <input class="form1 form-control" id="validationCustom04" type="number"
                                            name="mobile_no_3" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">જામીન સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom04" type="text"
                                            name="jamin_member_no" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">Select Loan:</label>
                                        <select class="form-select" id="loan_type" onchange="calculateTotalAmount()"
                                            name="loan_type" required>
                                            <option>Product</option>
                                            <option>Cash</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-4 mt-2" id="ABC">
                                        <label class="label1 form-label" for="validationCustom04">Product Name
                                            :</label>
                                        <input class="form1 form-control" id="product_name_product" type="text"
                                            name="product_name">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="row">

                                        <div class="col-4 mt-2">
                                            <label class="label1 form-label" for="validationCustom04">કિંમત :</label>
                                            <input class="form1 form-control" id="price_product" type="number"
                                                name="price" oninput="calculateTotalAmount()">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                        <div class="col-md-4 mt-2" id="ABCC">
                                            <label class="label1 form-label" for="validationCustom04">ડાઉન પેમેન્ટ
                                                :</label>
                                            <input class="form1 form-control" id="down_payment_product" type="number"
                                                name="down_payment" oninput="calculateTotalAmount()">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                        <div class="col-md-4 mt-2" id="loan_amount_hide">
                                            <label class="label1 form-label" for="validationCustom02">લોનની રકમ </label>
                                            <input class="form1 form-control" id="loan_amount_product" type="text"
                                                name="loan_amount" readonly>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        
                                        
                                        


                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_sign_image">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label" for="validationCustom06">જામીન સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="jamin_sign_image">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label" for="validationCustom06">એચ.એન.મોલ વતી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="jjg_sign_image_2">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-8 mt-2">
                                        <label class="label1 form-label" for="validationCustom06">નૉૅધ :</label>
                                        <input class="form1 form-control" type="text" aria-label="file example"
                                            name="note">
                                    </div>
                                    
                                </div>

                                <center>
                                    <button type="submit" style="width: 130px" class="btn btn-primary but m-5">
                                        Submit Form
                                    </button>

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
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function calculateTotalAmount() {
            var loan_type = document.getElementById("loan_type").value;
            if (loan_type === "Product") {
                var price = parseFloat(document.getElementById('price_product').value) || 0;
                var downPayment = parseFloat(document.getElementById('down_payment_product').value) || 0;

                var loanAmount = price - downPayment;

                document.getElementById('loan_amount_product').value = loanAmount.toFixed(2);
                $('#ABC').show();
                $('#ABCC').show();
                $('#ABCCC').show();
                $('#loan_amount_hide').show();

            } else if (loan_type === "Cash") {
                var price = parseFloat(document.getElementById('price_product').value) || 0;
                var downPayment = parseFloat(document.getElementById('down_payment_product').value) || 0;

                var loanAmount = price - downPayment;

                document.getElementById('loan_amount_product').value = loanAmount.toFixed(2);
                $('#ABC').hide();
                $('#ABCC').hide();
                $('#ABCCC').hide();
                $('#loan_amount_hide').hide();

            }
        }
    </script>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/emi/index.blade.php ENDPATH**/ ?>