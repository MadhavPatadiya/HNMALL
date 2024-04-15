@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત વ્યાજ બદલો
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક
                                    બચત
                                    પહોંચ
                                </a>
                            <li class="breadcrumb-item active">માસિક બચત વ્યાજ બદલો
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
                            <h5>(1%) એક ટકા માં નાખો</h5>
                            <h5>Name: {{ $bachat->mr }}</h5>
                            <h5>Member No : {{ $bachat->member_no }}</h5>
                            <h5>Wallet Balance : {{ $wallet->balance }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <th>
                                    <h4>માસિક બચત વ્યાજ બદલો</h4>
                                </th>
                                <tbody>
                                    <tr>
                                        <th>
                                            <input type="radio" disabled>
                                            ->ફિક્સ ૧૨-માસ માટે વળતર ૧.૨૫% લેખે આપવામાં આવશે.
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <input type="radio" checked>
                                            -> અધવચ્ચે ગમે ત્યારે ઉપાડે તો ૧% લેખે વળતર આપવામાં આવશે.
                                        </th>
                                    </tr>
                                    <th>
                                        <a href="{{ url('admin/bachat-receipt/' . $bachats->id . '/convertInterest') }}"
                                            class="btn btn-danger">(1%) એક ટકા માં નાખો</a>
                                    </th>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
