@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Statement</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat-receipt/create') }}">માસિક
                                    બચત
                                    પહોંચ
                                </a>
                            <li class="breadcrumb-item active">Statement </li>
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
                            <h5>Name:{{ $bachat->mr }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        {{-- <th>સભ્યપદ નં.</th> --}}
                                        <th>તારીખ</th>
                                        {{-- <th>શ્રી,</th> --}}
                                        <th>Daily Interest</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($statements  as $statement)
                                        <tr>
                                            <td>{{ $statement->id }}</td>
                                            {{-- <td>{{ $statements->member_no }}</td> --}}
                                            <td>{{ date('d-m-Y', strtotime($statement->date)) }}</td>
                                            <td>{{ $statement->daily_interest }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No Receipts Available</td>
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
