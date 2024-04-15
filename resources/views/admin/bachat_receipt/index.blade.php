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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h5>માસિક બચત જમા પહોંચ {{ $bachat->mr }}</h5>
                            <h5>Member No : {{ $bachat->member_no }}</h5>
                            <h5>Wallet Balance : {{ $wallet->balance }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>રસીદ નંબર :</th>
                                        <th>તારીખ</th>
                                        <th>રકમ રૂ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($BachatReceipt as $BachatReceipts)
                                        <tr>
                                            <td>{{ $BachatReceipts->id }}</td>
                                            <td>{{ $BachatReceipts->receipt_no }}</td>
                                            <td>{{ $BachatReceipts->member_date }}</td>
                                            {{-- <td>{{ $BachatReceipts->mr }}</td> --}}
                                            <td>{{ $BachatReceipts->total_amount }}</td>
                                            <td><a href="{{ url('admin/bachat-receipt/' . $BachatReceipts->id . '/view') }}"
                                                    class="btn btn-primary">View</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No Receipts Available</td>
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
