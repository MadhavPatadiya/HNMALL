@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ જમા</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a
                                    href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ જમા </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>ફિક્સ ડિપોઝિટ જમા </h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/deposite/store_loan_deposite') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">સભ્યપદ નં.</label>
                                        <input type="text" value="{{ $deposite->member_no }}" class="form1 form-control"
                                            readonly>
                                        <input type="text" name="user_id" value="{{ $deposite->id }}"
                                            class="form1 form-control" readonly style="display:none">
                                    </div>

                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">રસીદ નંબર:</label>
                                        <input
                                            type="text"value="0{{ optional($lastLoanPayment->last())->receipt_no + 1 ?? '' }}"
                                            readonly class="form1 form-control" name="receipt_no">
                                    </div>
                                    <div class="col-10"></div>


                                    <div class="col-2 mt-2">
                                        <label class="label1 form-label">તારીખ.</label>
                                        <input type="date" value="{{ now()->format('Y-m-d') }}"
                                            class="form1 form-control" name="date">
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">શ્રી,</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->mr }}"
                                            readonly>
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">સરનામુ :</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->address }}"
                                            readonly>
                                    </div>

                                    <div class="col-4 mt-2">
                                        <label class="label1 form-label">ગામ :</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->village }}"
                                            readonly>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <label class="label1 form-label">તા. :</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->taluk }}"
                                            readonly>
                                    </div>

                                    <div class="col-4 mt-2">
                                        <label class="label1 form-label">જી. :</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->taluk }}"
                                            readonly>
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">રકમ :</label>
                                        <input type="number" class="form1 form-control" name="amount" id="amount1"
                                            readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">અંકે રૂપિયા :</label>
                                        <input type="text" class="form1 form-control" name="amount_words"
                                            id="amount_words" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">ચાલુ વ્યાજ :</label>
                                        <?php
                                        $totalUnstelledUnpaidInterest = 0;
                                        ?>

                                        @foreach ($totalInterestForLastMonth as $intrest)
                                            @if ($intrest->status === 'unstelled' || $intrest->status === 'unpaid')
                                                <?php
                                                $totalUnstelledUnpaidInterest += round($intrest->interest_amount, 2);
                                                ?>
                                            @endif
                                        @endforeach

                                        <?php
                                        $finalinterest = round($loanTotalInterest->first()->total_interest, 2) - round($totalUnstelledUnpaidInterest, 2);
                                        ?>
                                        <input type="number" class="form1 form-control" name="current_interest"
                                            value="{{ round($finalinterest, 2) }}" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">આગલી બાકી રકમ :</label>
                                        <input type="number" class="form1 form-control" name="due_amount" id="due_amount"
                                            value="{{ $loanTransactions->first()->amount }}" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">+ આગલી રકમનું કુલ વ્યાજ :</label>
                                        <input type="number" class="form1 form-control" name="old_interest"
                                            value="{{ round($totalUnstelledUnpaidInterest, 2) }}" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">રોકડ આવક :</label>
                                        <input type="number" class="form1 form-control" name="amount" id="amount2"
                                            readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">= કુલ વ્યાજ :</label>
                                        <input type="number" class="form1 form-control" name="total_interest"
                                            value="{{ max(0, round($finalinterest, 2) + round($totalUnstelledUnpaidInterest, 2)) }}"
                                            readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">ઉપાડેલ રમક :</label>
                                        <input type="number" class="form1 form-control" name="" readonly>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">જમા વ્યાજની રમક: </label>
                                        <input type="number" class="form1 form-control" name="debit_interest">
                                    </div>
                                    <div class="col-6 mt-2">
                                        <label class="label1 form-label">કુલ બાકી જમા રકમ : </label>
                                        <input type="number" class="form1 form-control" name="remaining_amount"
                                            id="remaining_amount" readonly>
                                    </div>

                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">500 X :</label>
                                        <input type="number" name="cash_500" class="form1 form-control" id="note500"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">200 X :</label>
                                        <input type="number" name="cash_200" class="form1 form-control" id="note200"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">100 X :</label>
                                        <input type="number" name="cash_100" class="form1 form-control" id="note100"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">50 X :</label>
                                        <input type="number" name="cash_50" class="form1 form-control" id="note50"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">20 X :</label>
                                        <input type="number" name="cash_20" class="form1 form-control" id="note20"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">10 X :</label>
                                        <input type="number" name="cash_10" class="form1 form-control" id="note10"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">5 X :</label>
                                        <input type="number" name="cash_5" class="form1 form-control" id="note5"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-3 mt-1">
                                        <label class="label1 form-label">1 X :</label>
                                        <input type="number" name="cash_1" class="form1 form-control" id="note1"
                                            onkeyup="total()" />
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" style="width: 130px" class="btn btn-primary but m-5">
                                        Submit Form
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
        function total() {
            var a = document.getElementById('note500').value;
            var b = document.getElementById('note200').value;
            var c = document.getElementById('note100').value;
            var d = document.getElementById('note50').value;
            var e = document.getElementById('note20').value;
            var f = document.getElementById('note10').value;
            var g = document.getElementById('note5').value;
            var h = document.getElementById('note1').value;
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
            if (!(g)) {
                var g = 0;
            }
            if (!(h)) {
                var h = 0;
            }

            var result = (parseInt(a) * 500) + (parseInt(b) * 200) + (parseInt(c) * 100) + (parseInt(d) * 50) + (parseInt(
                e) * 20) + (parseInt(f) * 10) + (parseInt(g) * 5) + (parseInt(h) * 1);


            document.getElementById('amount1').value = result;
            document.getElementById('amount2').value = result;
            updateRemainingAmount();
        }


        function updateRemainingAmount() {
            var dueAmountField = document.querySelector('input[name="due_amount"]');
            var rokadAavakField = document.getElementById('amount2');
            var notesFields = document.querySelectorAll('.notes-field');
            var remainingAmountField = document.getElementById('remaining_amount');

            var dueAmount = Number(dueAmountField.value) || 0;
            var rokadAavak = Number(rokadAavakField.value) || 0;

            // Calculate total from notes fields
            var totalNotesAmount = Array.from(notesFields).reduce(function(total, notesField) {
                var notesValue = Number(notesField.value) || 0;
                return total + notesValue;
            }, 0);

            // Calculate remaining amount
            var remainingAmount = dueAmount - (rokadAavak + totalNotesAmount);

            remainingAmountField.value = remainingAmount;
            updateTotalAmountWords();
        }

        // Attach event listeners to the notes fields
        var notesFields = document.querySelectorAll('.notes-field');

        notesFields.forEach(function(notesField) {
            notesField.addEventListener('input', total); // Call total() instead of updateRemainingAmount()
        });

        // Attach the event listeners to the input fields
        var dueAmountField = document.querySelector('input[name="due_amount"]');
        var rokadAavakField = document.getElementById('amount2');

        dueAmountField.addEventListener('input', total); // Call total() instead of updateRemainingAmount()
        rokadAavakField.addEventListener('input', total); // Call total() instead of updateRemainingAmount()

        // Initialize the remaining amount on page load
        updateRemainingAmount();
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
            var depositValue = parseInt(document.getElementById("amount1").value) || 0;
            var depositValue = parseInt(document.getElementById("amount2").value) || 0;
            var totalAmountWordsField = document.getElementById("amount_words");

            totalAmountWordsField.value = convertToIndianCurrencyWords(depositValue);
        }

        document.getElementById("amount1").addEventListener("input", updateTotalAmountWords);
        document.getElementById("amount1").addEventListener("change", updateTotalAmountWords);
        document.getElementById("amount2").addEventListener("input", updateTotalAmountWords);
        document.getElementById("amount2").addEventListener("change", updateTotalAmountWords);

        updateTotalAmountWords();
    </script>
@endsection
