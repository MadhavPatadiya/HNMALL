<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>હાફતો પૂરો કરો</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="<?php echo e(url('admin/emi/emi_receipt')); ?>">EMI લોન પહોંચ

                                </a>
                            </li>
                            <li class="breadcrumb-item active">હાફતો પૂરો કરો </li>
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
                            <h5>હાફતો પૂરો કરો</h5>
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-warning">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                            <form id="myForm" action="<?php echo e(url('admin/emi/store_emi')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-md-8">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="number"
                                            value="<?php echo e($EMILoan->member_no); ?>" readonly name="member_no" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        <input type="text" name="user_id" value="<?php echo e($EMILoan->id); ?>"
                                            class="form1 form-control" readonly style="display:none">
                                    </div>
                                    <div class="col-md-8">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom03">તારીખ.</label>
                                        <input class="form1 form-control" id="validationCustom03" type="date"
                                            value="<?php echo e(now()->format('Y-m-d')); ?>" name="date">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">શ્રી,</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->mr); ?>" name="mr" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">ઉંમર :</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->age); ?>" name="age" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">ગામ :</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->village); ?>" name="village" readonly>
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <label class="label1 form-label" for="validationCustom03">સરનામુ :</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->address); ?>" name="address" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">તાલુકો :</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->taluk); ?>" name="taluk" readonly>
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <label class="label1 form-label" for="validationCustom03">નૉૅધ :</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                           name="note">
                                        </label>
                                    </div>

                                    <div style=" font-size: 25px; font-weight: 500;">Loan</div>
                                    <div class="col-4"
                                        style="<?php echo e($EMILoan->product_name === null ? 'display: none;' : ''); ?>">
                                        <label class="label1 form-label" for="validationCustom03">Product Name :</label>
                                        <input class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->product_name); ?>" name="product_name" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">કિંમત :</label> <input
                                            class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->price); ?>" name="price" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4"
                                        style="<?php echo e($EMILoan->down_payment === null ? 'display: none;' : ''); ?>">
                                        <label class="label1 form-label" for="validationCustom03">ડાઉન પેમેન્ટ :</label>
                                        <input class="form1 form-control" id="validationCustom03" type="text"
                                            value="<?php echo e($EMILoan->down_payment); ?>" name="down_payment" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">લોન ની બચેલી રકમ
                                            :</label>
                                        <input class="form1 form-control" type="text"
                                            value="<?php echo e($emiWallet->total_amount); ?>" name="total_amount" readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">બાકીની કુલ લોનની રકમ
                                            :</label>
                                        <input class="form1 form-control" id="total_amount" type="text"
                                            value="<?php echo e($emiWallet->total_amount); ?>" name="reamining_total_amount"
                                            readonly>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">હફતો ભરો :</label>
                                        <input class="form1 form-control" id="remaining_loan" type="text"
                                            oninput="calculateTotalAmount()" name="loan_paid" required>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">વ્યાજ :</label> <input
                                            class="form1 form-control" id="interest_paid" type="text"
                                            oninput="calculateTotalAmount()" name="interest_paid" required>
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label" for="validationCustom03">હફતો + વ્યાજ :</label>
                                        <input class="form1 form-control" id="loan_amount" type="text" readonly
                                            name="remaining_loan_amount">
                                        </label>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const totalAmountField = document.getElementById('total_amount');
            const remainingLoanField = document.getElementById('remaining_loan');

            // Store the original total amount
            const originalTotalAmount = parseFloat(totalAmountField.value);

            // Add event listener to the remaining loan field
            remainingLoanField.addEventListener('input', function() {
                const remainingLoan = parseFloat(this.value);

                if (!isNaN(remainingLoan)) {
                    totalAmountField.value = (!isNaN(originalTotalAmount) ? (originalTotalAmount -
                        remainingLoan).toFixed(2) : '');
                } else {
                    totalAmountField.value = (!isNaN(originalTotalAmount) ? originalTotalAmount.toFixed(2) :
                        '');
                }
            });
        });

        function calculateTotalAmount() {
            // Get values from the input fields
            var interest_paid = parseFloat(document.getElementById('interest_paid').value) || 0;
            var remaining_loan = parseFloat(document.getElementById('remaining_loan').value) || 0;

            // Calculate the loan amount
            var loanAmount = interest_paid + remaining_loan;

            // Update the loan amount field
            document.getElementById('loan_amount').value = loanAmount.toFixed(2);
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u806064127/domains/hnmall.co.in/public_html/resources/views/admin/emi/create_emi_receipt.blade.php ENDPATH**/ ?>