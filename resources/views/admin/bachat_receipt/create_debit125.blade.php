@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત જમા / ઉપાડ 1.25%</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક બચત
                                    પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત જમા / ઉપાડ 1.25% </li>
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
                            <h5>માસિક બચત જમા / ઉપાડ 1.25% </h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/bachat-debit-receipt/store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label>સભ્યપદ નં.</label>
                                        <input type="text" value="{{ $bachats->member_no }}" class="form-control"
                                            readonly>
                                        <input type="text" name="user_id" value="{{ $bachats->id }}"
                                            class="form-control" readonly style="display:none">
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label>રસીદ નંબર :</label>
                                        <input type="text" name="receipt_no" class="form-control" />
                                    </div> --}}
                                    <div class="col-md-6">
                                        <label>તારીખ.</label>
                                        <input type="date" value="{{ now()->format('Y-m-d') }}" name="member_date"
                                            class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label>શ્રી, </label>
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
                                        <input type="text" value="{{ $bachats->taluk }}" class="form-control"
                                            readonly />
                                    </div>
                                    <div class="col-md-4">
                                        <label>જી.:</label>
                                        <input type="text" value="{{ $bachats->city }}" class="form-control" readonly />
                                    </div>
                                    <div class="col-md-3">
                                        <label>રકમ રૂ :</label>
                                        <input type="number" name="deposit" class="form-control" id="depositField"
                                            readonly />
                                    </div>
                                    <div class="col-md-9">
                                        <label>શબ્દોમાં રૂપિયા:</label>
                                        <input type="text" name="total_amount_words" class="form-control"
                                            id="totalAmountWords" readonly />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-1">
                                            <label>રોકડ ઉપાડ</label>
                                            <input type="number" name="debit_balance" class="form-control" readonly
                                                id="debitBalanceField" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>ચાલુ વ્યાજ</label>
                                        <?php
                                        $total = 0;
                                        $total2 = 0;
                                        ?>
                                        @foreach ($totalInterestForLastMonth as $intrest)
                                            <?php
                                            $total = round($total, 2) + round($intrest->daily_interest, 2);
                                            ?>
                                        @endforeach

                                        @foreach ($currentMonthTotalInterest as $currentInterest)
                                            <?php
                                            $total2 = round($total2, 2) + round($currentInterest->daily_interest, 2);
                                            ?>
                                        @endforeach
                                        <?php
                                        // if ($total > 0) {
                                        //     $finalinterest = $totalInterest->first()->total_interest - $total - $total2;
                                        // } else {
                                        //     $finalinterest = 0;
                                        // }
                                        $finalinterest = round($totalInterest->first()->total_interest, 2) - round($total, 2) - round($total2, 2);
                                        
                                        ?>

                                        <input type="number" value="{{ round($finalinterest, 2) }}" name="old_interest"
                                            id="oldInterest" class="form-control" readonly />

                                    </div>
                                    <div class="col-md-6">
                                        <label>આગલી ભરેલી રકમ</label>
                                        <input type="number" value="{{ $wallet->first()->balance }}"
                                            name="last_cash_deposit" class="form-control" id="nextCashDepositField"
                                            readonly />
                                    </div>
                                    <div class="col-md-6">
                                        <label>+ પાછલા મહિનાનું કુલ વ્યાજ</label>
                                        <input type="number" value="{{ round($total, 2) }}" name="last_month_interest"
                                            id="lastMonthInterest" class="form-control" readonly />
                                    </div>
                                    <div class="col-md-6">
                                        <label>રોકડ આવક </label>

                                        <input type="number" name="cash_income" class="form-control" <?php if ($bachats->percentage == 125) {
                                            echo 'required';
                                        } else {
                                            echo 'readonly';
                                        }
                                        ?>
                                            onkeyup="updateTotalDepositBalance()"id="depositField2" />

                                    </div>
                                    <div class="col-md-6">
                                        <label>= કુલ વ્યાજ </label>
                                        <input type="number" value="{{ round($finalinterest, 2) + round($total, 2) }}"
                                            name="total_interest" class="form-control" readonly
                                            id="totalInterestField" />
                                    </div>

                                    <div class="col-md-6">
                                        <label>ઉપાડેલ જમા વ્યાજ</label>
                                        <input type="number" name="interest_on_withdrawn_deposits" class="form-control"
                                            id="interestOnWithdrawnDepositsField" readonly value="" />
                                    </div>

                                    <div class="col-md-6">
                                        <label>બચેલું જમા વ્યાજ</label>
                                        <input type="number" name="bachelu_vyaj" class="form-control"
                                            id="khata_ma_jamathayelu" readonly />
                                    </div>

                                    <div class="col-md-6">
                                        <label>ખાતામાં જમા થયેલું વ્યાજ</label>
                                        <input type="number" name="" id="khata_ma_jamathayelu2"
                                            class="form-control" readonly />
                                    </div>

                                    <div class="col-md-6">
                                        <label>ઉપાડેલી વ્યાજની રકમ</label>
                                        <input type="number" name="debit_interest" class="form-control"
                                            id="debitInterestField" readonly />
                                    </div>

                                    <div class="col-md-6">
                                        <label>કુલ બાકી જમા રકમ ₹.</label>
                                        <input type="number" name="amount_of_interest_withdrawn" class="form-control"
                                            id="totalDepositBalanceField" readonly />
                                    </div>
                                    {{-- <div class="col-md-2">
                                        <label>2000 X :</label>
                                        <input type="number" name="cash_2000" class="form-control" />
                                    </div> --}}
                                    <div class="col-md-3">
                                        <label>500 X :</label>
                                        <input type="number" name="cash_500" class="form-control" id="cash500Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>200 X :</label>
                                        <input type="number" name="cash_200" class="form-control" id="cash200Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>100 X :</label>
                                        <input type="number" name="cash_100" class="form-control" id="cash100Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>50 X :</label>
                                        <input type="number" name="cash_50" class="form-control" id="cash50Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>20 X :</label>
                                        <input type="number" name="cash_20" class="form-control" id="cash20Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>10 X :</label>
                                        <input type="number" name="cash_10" class="form-control" id="cash10Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>5 X :</label>
                                        <input type="number" name="cash_5" class="form-control" id="cash5Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-3">
                                        <label>1 X :</label>
                                        <input type="number" name="cash_1" class="form-control" id="cash1Notes"
                                            onkeyup="total()" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>જામીનનું નામ:</label>
                                        <input type="text" name="name_of_surety" class="form-control" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>કોનામાં જામીન:</label>
                                        <input type="text" name="whose_bail" class="form-control" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>લોન રકમ:</label>
                                        <input type="number" name="loan_amount" class="form-control" />
                                    </div>
                                </div>
                        </div>
                        <center>
                            <button type="submit" style="width: 130px" class="btn btn-primary but m-3">
                                Submit Form
                                <script>
                                    // Prevent the form from submitting on enter
                                    const form = document.getElementById('myForm');
                                    form.addEventListener('keypress', function(e) {
                                        if (e.keyCode === 13) {
                                            e.preventDefault();
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
            var a = document.getElementById('cash500Notes').value;
            var b = document.getElementById('cash200Notes').value;
            var c = document.getElementById('cash100Notes').value;
            var d = document.getElementById('cash50Notes').value;
            var e = document.getElementById('cash20Notes').value;
            var f = document.getElementById('cash10Notes').value;
            var g = document.getElementById('cash5Notes').value;
            var h = document.getElementById('cash1Notes').value;
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


            document.getElementById('depositField').value = result;
            document.getElementById('depositField2').value = result;

            updateTotalAmountWords();
            updateTotalDepositBalance();
        }

        document.getElementById("debitInterestField").addEventListener("input", function() {
            var debit_interestValue = this.value;

            document.getElementById("interestOnWithdrawnDepositsField").value = debit_interestValue;

            // Calculate and update the total deposit balance
            updateTotalDepositBalance();
        });

        function updateTotalDepositBalance() {

            // Get the value entered in the deposit field

            var depositValue = parseFloat(document.getElementById("depositField").value) || 0;

            // Get the value entered in the next cash deposit field
            var nextCashDepositValue = parseFloat(document.getElementById("nextCashDepositField").value) || 0;

            // Get the value entered in the interest_on_withdrawn_deposits field
            var interestOnWithdrawnDepositsValue = parseFloat(document.getElementById("interestOnWithdrawnDepositsField")
                .value) || 0;

            // Get the value entered in the debitBalanceField
            var debitBalanceValue = parseFloat(document.getElementById("debitBalanceField").value) || 0;

            // Calculate the total deposit balance
            var totalDepositBalance = depositValue + nextCashDepositValue - interestOnWithdrawnDepositsValue -
                debitBalanceValue;

            // Get the value entered in the totalInterestField
            var totalInterestValue = parseFloat(document.getElementById("totalInterestField").value) || 0;

            // Calculate the total deposit balance including totalInterestValue
            var totalDepositBalanceWithInterest = totalDepositBalance + totalInterestValue;

            var khata_ma_jamathayelu = totalInterestValue - interestOnWithdrawnDepositsValue;
            document.getElementById("khata_ma_jamathayelu").value = khata_ma_jamathayelu;
            document.getElementById("khata_ma_jamathayelu2").value = khata_ma_jamathayelu;
            // Update the total deposit balance input field
            document.getElementById("totalDepositBalanceField").value = totalDepositBalanceWithInterest.toFixed(2);
        }

        // deposit and next cash deposit input fields
        document.getElementById("depositField").addEventListener("input", updateTotalDepositBalance);
        document.getElementById("nextCashDepositField").addEventListener("input", updateTotalDepositBalance);

        document.getElementById("depositField").addEventListener("change", updateTotalDepositBalance);
        document.getElementById("nextCashDepositField").addEventListener("change", updateTotalDepositBalance);

        // Add event listener for the debitBalanceField
        document.getElementById("debitBalanceField").addEventListener("input", updateTotalDepositBalance);
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
            var depositValue = parseInt(document.getElementById("depositField").value) || 0;
            var totalAmountWordsField = document.getElementById("totalAmountWords");

            totalAmountWordsField.value = convertToIndianCurrencyWords(depositValue);
        }

        document.getElementById("depositField").addEventListener("input", updateTotalAmountWords);
        document.getElementById("depositField").addEventListener("change", updateTotalAmountWords);

        updateTotalAmountWords();
    </script>

@endsection


{{-- document.getElementById("depositField").addEventListener("input", function() {
    // Get the value entered by the user
    var depositValue = this.value;

    // Update the cash income input field with the deposit value
    document.getElementById("cashIncomeField").value = depositValue;

    // Calculate and update the total deposit balance
    updateTotalDepositBalance();
});

document.getElementById("cash500Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash200Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash100Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash50Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash20Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash10Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash5Notes").addEventListener("input", updateDepositValue);
document.getElementById("cash1Notes").addEventListener("input", updateDepositValue);

// Function to update the "deposit" field based on the entered notes
function updateDepositValue() {
    var cash500Notes = parseInt(document.getElementById("cash500Notes").value) || 0;
    var cash200Notes = parseInt(document.getElementById("cash200Notes").value) || 0;
    var cash100Notes = parseInt(document.getElementById("cash100Notes").value) || 0;
    var cash50Notes = parseInt(document.getElementById("cash50Notes").value) || 0;
    var cash20Notes = parseInt(document.getElementById("cash20Notes").value) || 0;
    var cash10Notes = parseInt(document.getElementById("cash10Notes").value) || 0;
    var cash5Notes = parseInt(document.getElementById("cash5Notes").value) || 0;
    var cash1Notes = parseInt(document.getElementById("cash1Notes").value) || 0;

    var totalDepositValue = cash500Notes * 500 + cash200Notes * 200 + cash100Notes * 100 +
        cash50Notes * 50 + cash20Notes * 20 + cash10Notes * 10 + cash5Notes * 5 + cash1Notes;

    document.getElementById("depositField").value = totalDepositValue;

    // Update the cash income input field with the deposit value
    document.getElementById("cashIncomeField").value = totalDepositValue;

    // Calculate and update the total deposit balance
    updateTotalDepositBalance();
} --}}
