@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસીક બચત જમા-ઉપાડ પહોંચ યાદી</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક બચત
                                    પહોંચ
                                </a>
                            <li class="breadcrumb-item active">માસીક બચત જમા-ઉપાડ પહોંચ યાદી </li>
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
                            <h5>માસીક બચત જમા-ઉપાડ પહોંચ યાદી {{ $bachat->mr }}</h5>
                            <h5>Member No : {{ $bachat->member_no }}</h5>
                            <h5>Wallet Balance : {{ $wallet->balance }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>રોકડ ઉપાડ</th>
                                        <th>ઉપાડેલી વ્યાજની રકમ રૂ</th>
                                        <th>જમા રકમ રૂ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($bachatDebitReceipt as $bachatDebitReceipts)
                                        <tr>
                                            <td>{{ $bachatDebitReceipts->id }}</td>
                                            <td>{{ $user->where('id','=',$bachatDebitReceipts->login_id)->first()->name }}</td>
                                            {{-- <td>{{ $bachat->member_no }}</td> --}}
                                            <td>{{ date('d-m-Y', strtotime($bachatDebitReceipts->member_date)) }}</td>
                                            <td>{{ $bachatDebitReceipts->debit_balance }}</td>
                                            <td>{{ $bachatDebitReceipts->debit_interest }}</td>
                                            <td>{{ $bachatDebitReceipts->deposit }}</td>
                                            <td><a href="{{ url('admin/debit-receipt/' . $bachatDebitReceipts->id . '/show') }}"
                                                    class="btn btn-primary">View</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">No Receipts Available</td>
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
