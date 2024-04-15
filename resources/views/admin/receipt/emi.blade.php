@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>EMI બચત રિપોર્ટ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"><a href="{{ url('admin/report') }}">રિપોર્ટ </li></a>

                            <li class="breadcrumb-item active">EMI બચત રિપોર્ટ </li>
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
                            <div class="row">
                                <div class="col-10">
                                    <h5>EMI બચત રિપોર્ટ</h5>
                                </div>
                                {{-- <div class="col-2">
                                    <a href="{{ url('admin/masik-bachat/report') }}"
                                        class="btn btn-primary but float-end"><b>ટોટલ
                                            રિપોર્ટ</b></a>
                                </div> --}}
                            </div>

                        </div>
                        <div class="card-body">
                            {{-- <form id="dateForm" action="{{ url('admin/emi/search') }}" method="post">
                                @csrf
                                <div class="row mb-5">
                                    <div class="col-2">
                                        <b>Username : </b>
                                    </div>
                                    <div class="col-4">
                                        <select name="login_id" class="form-control">
                                            <option>Select Username</option>

                                            @foreach ($user as $users)
                                                <option value="{{ $users->id }}">{{ $users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row abc">
                                    <div class="col-2"><b>તારીખ પસંદ કરો : </b></div>
                                    <div class="col-4">
                                        <input type="date" class="form-control" value="{{ now()->format('Y-m-d') }}"
                                            name="start_date">
                                    </div>
                                    <div class="col-4"><input type="date"class="form-control"
                                            value="{{ now()->format('Y-m-d') }}" name="end_date">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary but"><b>રિપોર્ટ જુઓ</b></button>
                                    </div>
                                </div>

                            </form> --}}

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped " id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>રસીદ નં</th>
                                        <th>તારીખ</th>
                                        <th>સભ્ય નું નામ</th>
                                        <th>લોનનો પ્રકાર</th>
                                        <th>લોનની રકમ</th>
                                        <th>બાકી લોન</th>
                                        <th>હફતો ચૂકવેલ</th>
                                        <th>વ્યાજ ચૂકવેલ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach (Session::get('EMIreceipt') as $EMIreceipts)
                                        <tr>
                                            <td width="2%">{{ $EMIreceipts->id }}</td>

                                            <td width="10%">{{ date('d-m-Y', strtotime($EMIreceipts->date)) }}</td>
                                            <td width="10%">
                                                {{ $user->where('id', '=', $EMIreceipts->login_id)->first()->name }}
                                            </td>
                                            @foreach (Session::get('EMILoan')->where('id', '=', $EMIreceipts->user_id) as $EMILoans)
                                                <td width="20%">{{ $EMILoans->mr }}</td>
                                                <td width="10%">{{ $EMILoans->loan_type }}</td>
                                            @endforeach

                                            <td width="10%">{{ $EMIreceipts->total_amount }}</td>
                                            <td width="10%">{{ $EMIreceipts->remaining_loan_amount }}</td>
                                            <td width="10%">{{ $EMIreceipts->loan_paid }}</td>
                                            <td width="10%">{{ $EMIreceipts->interest_paid }}</td>
                                        </tr>
                                    @endforeach


                                <tbody>
                                    <tr>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style="text-align: center; background-color:rgb(10, 246, 10)"></td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            {{ Session::get('total_amount') }}
                                        </td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            {{ Session::get('remaining_loan_amount') }}</td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            {{ Session::get('loan_paid') }}</td>
                                        <td style=" background-color:rgb(10, 246, 10); font-size: 18px; font-weight: 800;">
                                            {{ Session::get('interest_paid') }}</td>
                                    </tr>
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#example').DataTable({
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var title = column.header().textContent;

                        // Create input element and add event listener
                        $('<input type="text" style="width:100%"  placeholder="Search ' + title + '" />')
                            .appendTo($(column.header()).empty())
                            .on('keyup change clear', function() {
                                if (column.search() !== this.value) {
                                    column.search(this.value).draw();
                                }
                            });
                    });
            },
        });
    </script>
@endsection
