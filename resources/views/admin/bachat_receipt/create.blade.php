@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Default</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Default </li>
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
                            <h5>માસિક બચત જમા પહોંચ</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/bachat-receipt/save') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label>સભ્યપદ નં.</label>
                                        <input type="text" value="{{ $bachats->member_no }}" class="form-control"
                                            readonly>
                                        <input type="text" name="user_id" value="{{ $bachats->id }}"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>રસીદ નંબર :</label>
                                        <input type="text" name="receipt_no" class="form-control"
                                            value="{{ $formattedReceiptNumber }}" readonly />
                                    </div>
                                    <div class="col-md-6">
                                        <label>તારીખ</label>
                                        <input type="date" value="{{ now()->format('Y-m-d') }}" name="member_date"
                                            class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label>શ્રીમાન, </label>
                                        <input type="text" value="{{ $bachats->mr }}" class="form-control" readonly />
                                    </div>
                                    <div class="col-md-12">
                                        <label>સરનામુ:</label>
                                        <input type="text" value="{{ $bachats->address }}" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="col-md-4">
                                        <label>ગામ :</label>
                                        <input type="text" value="{{ $bachats->village }}" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="col-md-4">
                                        <label>તા.:</label>
                                        <input type="text" value="{{ $bachats->taluk }}" class="form-control" readonly />
                                    </div>
                                    <div class="col-md-4">
                                        <label>જી.:</label>
                                        <input type="text" value="{{ $bachats->city }}" class="form-control" readonly />
                                    </div>
                                    <div class="col-md-3">
                                        <label>રકમ રૂ :</label>
                                        <input type="number" name="total_amount" class="form-control" id="total_amount"
                                            readonly />
                                    </div>
                                    <div class="col-md-9">
                                        <label>શબ્દોમાં રૂપિયા:</label>
                                        <input type="text" name="total_amount_words" class="form-control"
                                            id="totalAmountWords" readonly />
                                    </div>
                                    {{-- <div class="col-md-2">
                                        <label>2000 X :</label>
                                        <input type="number" name="cash_2000" class="form-control" />
                                    </div> --}}
                                    <div class="col-md-3">
                                        <label>500 X :</label>
                                        <input type="number" name="cash_500" class="form-control" id="note500"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>200 X :</label>
                                        <input type="number" name="cash_200" class="form-control" id="note200"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>100 X :</label>
                                        <input type="number" name="cash_100" class="form-control" id="note100"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>50 X :</label>
                                        <input type="number" name="cash_50" class="form-control" id="note50"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>20 X :</label>
                                        <input type="number" name="cash_20" class="form-control" id="note20"
                                            onkeyup="total()" />
                                    </div>
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

            var result = (parseInt(a) * 500) + (parseInt(b) * 200) + (parseInt(c) * 100) + (parseInt(d) * 50) + (parseInt(
                e) * 20);


            document.getElementById('total_amount').value = result;
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










    {{-- <script>
        document.getElementById("note500").addEventListener("input", updateTotalAmount);
        document.getElementById("note200").addEventListener("input", updateTotalAmount);
        document.getElementById("note100").addEventListener("input", updateTotalAmount);
        document.getElementById("note50").addEventListener("input", updateTotalAmount);
        document.getElementById("note20").addEventListener("input", updateTotalAmount);

        // Function to update the total amount based on the entered notes
        function updateTotalAmount() {
            var note500 = parseInt(document.getElementById("note500").value) || 0;
            var note200 = parseInt(document.getElementById("note200").value) || 0;
            var note100 = parseInt(document.getElementById("note100").value) || 0;
            var note50 = parseInt(document.getElementById("note50").value) || 0;
            var note20 = parseInt(document.getElementById("note20").value) || 0;

            var totalAmount = note500 * 500 + note200 * 200 + note100 * 100 + note50 * 50 + note20 * 20;
            document.getElementById("total_amount").value = totalAmount;

            // Convert total amount to words and update the input field
            document.getElementById("total_amount_words").value = getIndianCurrencyWords(totalAmount);




        }
    </script>

     --}}

@endsection
