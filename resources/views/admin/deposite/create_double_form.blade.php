@extends('layouts.admin')

@section('content')

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ સમાપ્ત </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a
                                    href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ સમાપ્ત
                                </a>
                            </li>
                            <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ રદ કરો </li>
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
                            <h5>ફિક્સ ડિપોઝિટ સમાપ્ત </h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/deposite/processDouble') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                       <label class="label1 form-label">સભ્યપદ નં.</label>
                                        <input type="text" value="{{ $deposite->member_no }}" class="form1 form-control"
                                            readonly>
                                        <input type="hidden" name="user_id" value="{{ $deposite->id }}">
                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                       <label class="label1 form-label">સભ્યપદ તા.</label>
                                        <input type="date" name="member_date" value="{{ $deposite->member_date }}"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                       <label class="label1 form-label">તારીખ</label>
                                        <input type="date" name="date" value="{{ now()->toDateString() }}"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                       <label class="label1 form-label">પાકતિ મુદત</label>
                                        <input type="date" name="maturity_period"
                                            value="{{ $deposite->maturity_period }}" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-6">
                                       <label class="label1 form-label">શ્રી,</label>
                                        <input type="text" value="{{ $deposite->mr }}" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-6">
                                       <label class="label1 form-label">જમા રકમ :</label>
                                        <input type="text" value="{{ $deposite->total_amount }}" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-6">
                                       <label class="label1 form-label">પરત કરવાની રકમ:</label>
                                        <input type="text" name="vyaj_amount" value="{{ $deposite->vyaj_amount }}"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <input style="display: none" name="status" value="inactive">

                                </div>
                                <button type="submit" style="width: 260px" class="btn btn-danger  mt-5">
                                    Withdrawn Your Money Here.
                                </button>

                                <script>
                                    // Prevent the form from submitting on enter
                                    const form = document.getElementById('myForm');
                                    form.addEventListener('keypress', function(e) {
                                        if (e.keyCode === 13) {
                                            e.preventDefault();
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
@endsection
