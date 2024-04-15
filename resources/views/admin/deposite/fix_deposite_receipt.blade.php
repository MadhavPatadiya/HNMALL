@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ફિક્સ ડિપોઝિટ પહોંચ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">ફિક્સ ડિપોઝિટ પહોંચ </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media print {
                .btn {
                    display: none;
                }

                .sorting {
                    display: none;
                }

                .dataTables_length {
                    display: none;
                }

                .dataTables_filter {
                    display: none;
                }

                .dataTables_info {
                    display: none;
                }

                .dataTables_paginate {
                    display: none;
                }

                .n {
                    display: none;
                }

            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <style>
                                .ani {
                                    box-shadow: inset 0 0 0 0 #000000;
                                    color: #000000;
                                    padding: 0 .25rem;
                                    margin: 0 -.25rem;
                                    transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
                                }

                                .ani:hover {
                                    color: #fff;
                                    box-shadow: inset 220px 0 0 0 #000000;
                                }

                                /* Presentational styles */
                                .ani {
                                    color: #000000;
                                    font-family: 'Poppins', sans-serif;
                                    font-size: 27px;
                                    font-weight: 500;
                                    line-height: 2;
                                    text-decoration: none;
                                }
                            </style>
                            <div class="col-12">
                                <h5 class="ani">ફિક્સ ડિપોઝિટ પહોંચ</h5>
                                <a href="{{ url('admin/deposite/deactivate_list_deposite') }}"
                                    class="btn float-end btn-danger ml-2">Deactivate
                                    Account</a>
                                <a href="{{ url('admin/deposite/completed_list') }}"
                                    class="btn float-end btn-primary">Withdrawn
                                    Account</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>પાકતી મુદત</th>
                                        <th>નામ</th>
                                        <th>Status</th>
                                        <th class="n">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($deposite as $deposites)
                                        <tr>
                                            <td>{{ $deposites->id }}</td>
                                            <td>{{ $deposites->member_no }}</td>
                                            <td>{{ $user->where('id', '=', $deposites->login_id)->first()->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($deposites->member_date)) }}</td>
                                            <td>{{ date('d-m-Y', strtotime($deposites->maturity_period)) }}</td>
                                            <td>{{ $deposites->mr }}</td>
                                            <td>{{ $deposites->status }}</td>
                                            <td class="n"> <a
                                                    href="{{ url('admin/deposite/' . $deposites->id . '/view_receipt') }}"
                                                    class="btn btn-primary">પહોંચ</a>


                                                @php
                                                    $loanTransactionsForUser = $loanTransactions->where('user_id', $deposites->id);
                                                    $loanTransactionCount = $loanTransactionsForUser->count();
                                                    $refundEntryExists = !$refunds->where('user_id', $deposites->id)->isEmpty();
                                                @endphp
                                                @if (now()->gte($deposites->maturity_period))
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/create_double_form') }}"
                                                        class="btn btn-primary">Withdrawn</a>
                                                @endif

                                                @if ($refundEntryExists)
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/view_refund_loan_receipt') }}"
                                                        class="btn btn-primary">રદ પહોંચ</a>
                                                @elseif ($loanTransactionCount > 0)
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_receipt') }}"
                                                        class="btn btn-danger">લોન પહોંચ</a>
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_deposite') }}"
                                                        class="btn btn-success">લોન જમા</a>
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_deposite_receipt') }}"
                                                        class="btn btn-danger">લોન જમા પહોંચ</a>
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/refund') }}"
                                                        class="btn btn-dark">રદ કરો</a>

                                                    {{-- @if (Auth::user()->role_as == '1')
                                                        <a href="{{ url('admin/deposite/' . $deposites->id . '/refund') }}"
                                                            class="btn btn-dark">રદ કરો</a>
                                                    @else
                                                        &nbsp;
                                                    @endif --}}
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_interest_statement') }}"
                                                        class="btn btn-dark">Statement</a>
                                                @else
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_create') }}"
                                                        class="btn btn-danger">લોન</a>
                                                    <a href="{{ url('admin/deposite/' . $deposites->id . '/refund') }}"
                                                        class="btn btn-dark">રદ કરો</a>

                                                    {{-- @if (Auth::user()->role_as == '1')
                                                        <a href="{{ url('admin/deposite/' . $deposites->id . '/refund') }}"
                                                            class="btn btn-dark">રદ કરો</a>
                                                    @else
                                                        &nbsp;
                                                    @endif --}}
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">No Receipts Available</td>
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
