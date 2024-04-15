@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>આવક/જાવક હિસાબ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/roj_med') }}">આવક/જાવક ની એન્ટ્રી
                                </a>
                            </li>

                            <li class="breadcrumb-item active">આવક/જાવક હિસાબ
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
                            <h4>આવક/જાવક હિસાબ </h4>
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

                                .alert .alert-success {
                                    display: none;
                                }

                            }
                        </style>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>નામ</th>
                                        <th>બનાવનાર</th>
                                        <th>તારિક </th>
                                        <th style="width:15%">કારણ</th>
                                        <th>આવક</th>
                                        <th>જાવક</th>
                                        @if (Auth::user()->role_as == '1')
                                            <th>Action</th>
                                        @else
                                            &nbsp;
                                        @endif

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($RojMed as $RojMeds)
                                        <tr>
                                            <td>{{ $RojMeds->id }}</td>
                                            <td>{{ $RojMeds->name }}</td>
                                            <td>{{ $user->where('id', '=', $RojMeds->login_id)->first()->name }}</td>

                                            <td>{{ date('d-m-Y', strtotime($RojMeds->date)) }}
                                            <td>{{ $RojMeds->reason }}</td>
                                            @if ($RojMeds->cash_type == 'આવક')
                                                <td><b>{{ $RojMeds->amount }}</b></td>
                                            @else
                                                <td>0</td>
                                            @endif
                                            @if ($RojMeds->cash_type == 'જાવક')
                                                <td><b>{{ $RojMeds->amount }}</b></td>
                                            @else
                                                <td>0</td>
                                            @endif

                                            </td>

                                            @if (Auth::user()->role_as == '1')
                                                <td class="n">

                                                    <a href="{{ url('admin/roj_med/' . $RojMeds->id . '/edit') }}"
                                                        class="btn btn-success ">Edit</a>
                                                    <a href="{{ url('admin/roj_med/' . $RojMeds->id . '/delete') }}"
                                                        class="btn btn-danger ">Delete</a>
                                                </td>
                                            @else
                                                &nbsp;
                                            @endif


                                        @empty
                                        <tr>
                                            <td colspan="8">Data Not Available</td>
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
