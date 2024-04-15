@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ લોન પહોંચ યાદી</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a
                                    href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active"> ફિક્સ ડિપોઝિટ લોન પહોંચ યાદી</li>
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
                            <h4>ફિક્સ ડિપોઝિટ લોન પહોંચ યાદી</h4>
                            <h5>સભ્યપદ નં. {{ $deposite->member_no }}</h5>
                            <h5>શ્રી, {{ $deposite->mr }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        {{-- <th>શ્રી,</th> --}}
                                        <th>લોન રકમ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($loanReceipt as $loanReceipts)
                                        <tr>
                                            <td>{{ $loanReceipts->id }}</td>
                                            <td>{{ $user->where('id','=',$loanReceipts->login_id)->first()->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($loanReceipts->date)) }}</td>
                                            <td>{{ $loanReceipts->total_amount }}</td>
                                            <td><a href="{{ url('admin/deposite/' . $loanReceipts->id . '/view_loan_receipt') }}"
                                                    class="btn btn-primary">પહોંચ</a>
                                            </td>
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
