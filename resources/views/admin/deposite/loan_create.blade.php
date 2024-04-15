@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિસ ડિપોક્ઝીટ લોન પહોંચ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a
                                    href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">ફિસ ડિપોક્ઝીટ લોન પહોંચ </li>
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
                            <h5>ફિસ ડિપોક્ઝીટ લોન પહોંચ</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/deposite/store_loan_receipt') }}" method="POST">
                                @csrf
                                <div class="row g-3">
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
                                        <input type="text"
                                            value="0{{ optional($lastLoanReceipt->last())->receipt_no + 1 ?? '0' }}"
                                            readonly class="form1 form-control" name="receipt_no">
                                    </div>
                                    <div class="col-10"></div>

                                    <div class="col-2">
                                        <label class="label1 form-label">તારીખ.</label>
                                        <input type="date" value="{{ now()->format('Y-m-d') }}"
                                            class="form1 form-control" name="date">
                                    </div>

                                    <div class="col-6">
                                        <label class="label1 form-label">શ્રી,</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->mr }}"
                                            readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="label1 form-label">મો (1).</label>
                                        <input type="text" class="form1 form-control"
                                            value="{{ $deposite->mobile_no_1 }}" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="label1 form-label">મો (2).</label>
                                        <input type="text" class="form1 form-control"
                                            value="{{ $deposite->mobile_no_2 }}" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label class="label1 form-label">સરનામુ :</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->address }}"
                                            readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="label1 form-label">ગામ :</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->village }}"
                                            readonly>
                                    </div>

                                    <div class="col-3">
                                        <label class="label1 form-label">જી.</label>
                                        <input type="text" class="form1 form-control" value="{{ $deposite->taluk }}"
                                            readonly>
                                    </div>



                                    <div class="col-6">
                                        <label class="label1 form-label">રકમ રૂ :</label>
                                        <input type="text" class="form1 form-control" name="total_amount"
                                            id="total_amount" readonly>

                                        <div class="text-muted">Max Loan Amount: <span id="maxLoanAmount">0</span></div>
                                        <p class="text-danger" id="loanAmountError"></p>
                                        <input type="hidden" id="hidden_total_amount"
                                            value="{{ $deposite->total_amount }}">
                                    </div>
                                    <div class="col-6">
                                        <label class="label1 form-label">અંકે રૂપિયા :</label>
                                        <input type="text" class="form1 form-control" name="total_amount_words"
                                            id="totalAmountWords" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">500 X :</label>
                                        <input type="number" name="cash_500" class="form1 form-control" id="note500"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">200 X :</label>
                                        <input type="number" name="cash_200" class="form1 form-control" id="note200"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">100 X :</label>
                                        <input type="number" name="cash_100" class="form1 form-control" id="note100"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">50 X :</label>
                                        <input type="number" name="cash_50" class="form1 form-control" id="note50"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">20 X :</label>
                                        <input type="number" name="cash_20" class="form1 form-control" id="note20"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">1 X :</label>
                                        <input type="number" name="cash_1" class="form1 form-control" id="note1"
                                            onkeyup="total()" />
                                    </div>

                                    <div class="col-4">
                                        <label class="label1 form-label">જામીનનું નામ.</label>
                                        <input type="text" class="form1 form-control" name="jaminanu_nam">
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">યોજનાનો પ્રકાર</label>
                                        <input type="text" class="form1 form-control" name="yojanano_prakar">
                                    </div>
                                    <div class="col-4">
                                        <label class="label1 form-label">મો.</label>
                                        <input type="text" class="form1 form-control" name="mobile_no_3">
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" style="width: 130px" class="btn btn-primary but m-5">
                                        Submit Form
                                    </button>
                                </center>
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

            var totalAmount = parseFloat(document.getElementById('hidden_total_amount').value);
            var maxLoanAmount = (totalAmount / 2).toFixed(2);

            // Get the requested loan amount from the input field
            var requestedLoanAmount = parseFloat(document.getElementById('total_amount').value);

            // Validate the requested loan amount against the maximum allowable loan amount
            if (requestedLoanAmount < 1 || requestedLoanAmount > maxLoanAmount) {
                document.getElementById('loanAmountError').textContent = 'Loan amount must be between 1 and ' +
                    maxLoanAmount;
                return; // Prevent form submission
            } else {
                document.getElementById('loanAmountError').textContent = ''; // Clear any previous error message
            }

            document.getElementById('maxLoanAmount').textContent = maxLoanAmount;

            updateTotalAmountWords()
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
        }

        document.getElementById("total_amount").addEventListener("input", updateTotalAmountWords);
        document.getElementById("total_amount").addEventListener("change", updateTotalAmountWords);

        updateTotalAmountWords();
    </script>
@endsection
