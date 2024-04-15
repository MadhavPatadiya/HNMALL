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
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક બચત
                                    પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત રદ કરો </li>
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
                            <h5>માસિક બચત રદ કરો</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/bachat-receipt/store_deactive') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-10">
                                    </div>
                                    <div class="col-md-2">
                                        <label>સભ્યપદ નં.</label>
                                        <input type="text" value="{{ $bachats->member_no }}" class="form-control"
                                            readonly>
                                        <input style="display: none" type="text" name="user_id"
                                            value="{{ $bachats->id }}" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-10">
                                    </div>

                                    <div class="col-md-2">
                                        <label>સભ્યપદ તા.</label>
                                        <input type="text" value="{{ $bachats->member_date }}" class="form-control"
                                            readonly>
                                    </div>
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <label class="label1 form-label">Refund Date</label>
                                        <input type="date" name="deactivate_date" value="{{ now()->toDateString() }}"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>શ્રી,</label>
                                        <input type="text" value="{{ $bachats->mr }}" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>જમા રકમ :</label>
                                        <input type="text" value="{{ $wallet->balance }}" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>કુલ વ્યાજ :</label>
                                        <input type="text" value="{{ $totalInterest->total_interest }}"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>પરત કરવાની રકમ :</label>
                                        <input type="text" name="refund_amount" class="form-control">
                                    </div>
                                    <center>
                                        <button type="submit" style="width: 260px" class="btn btn-danger mt-5">
                                            રદ કરો
                                        </button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
