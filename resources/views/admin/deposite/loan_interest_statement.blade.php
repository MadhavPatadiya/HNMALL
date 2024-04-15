@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Statement
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a
                                    href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Statement
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h5>Statement</h5>
                            <h5>Name:{{ $deposite->mr }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>તારીખ</th>
                                        <th>માસિક વ્યાજ</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($loanInterests  as $loanInterest)
                                        <tr>
                                            <td>{{ $loanInterest->id }}</td>
                                            <td>{{ date('d-m-Y', strtotime($loanInterest->date)) }}</td>
                                            <td>{{ $loanInterest->interest_amount }}</td>
                                            <td>{{ $loanInterest->status }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No Receipts Available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
