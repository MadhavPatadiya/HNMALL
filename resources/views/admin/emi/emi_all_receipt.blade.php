@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>EMI જમા પહોંચ યાદી </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/emi/emi_receipt') }}">EMI લોન પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">EMI જમા પહોંચ યાદી </li>
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
                            <h4>EMI જમા પહોંચ યાદી </h4>
                            <h5>સભ્યપદ નં. {{ $EMILoan->member_no }}</h5>
                            <h5>શ્રી, {{ $EMILoan->mr }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>કુલ લોનની રકમ</th>
                                        {{-- <th>Monthly EMI</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($EMIreceipt as $EMIreceipts)
                                        <tr>
                                            <td>{{ $EMIreceipts->id }}</td>
                                            <td>{{ $user->where('id', '=', $EMIreceipts->login_id)->first()->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($EMIreceipts->date)) }}</td>
                                            <td>{{ $EMIreceipts->total_amount }}</td>
                                            {{-- <td>{{ $EMIreceipts->remaining_loan_amount }}</td> --}}
                                            <td><a href="{{ url('admin/emi/' . $EMIreceipts->id . '/view_emi_receipt') }}"
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
