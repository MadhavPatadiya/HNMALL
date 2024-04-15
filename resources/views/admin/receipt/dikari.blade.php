@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>દીકરીના બચત રિપોર્ટ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"><a href="{{ url('admin/report') }}">રિપોર્ટ </li></a>

                            <li class="breadcrumb-item active">દીકરીના બચત રિપોર્ટ </li>
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
                                    <h5>દીકરીના બચત રિપોર્ટ</h5>
                                </div>
                                {{-- <div class="col-2">
                                    <a href="{{ url('admin/dikari/report') }}" class="btn btn-primary but float-end"><b>ટોટલ
                                            રિપોર્ટ</b></a>
                                </div> --}}
                            </div>

                        </div>
                        <div class="card-body">
                            {{-- <form id="dateForm" action="{{ url('admin/dikari/search') }}" method="post">
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
                                        <input type="date" class="form-control" name="start_date">
                                        value="{{ now()->format('Y-m-d') }}"
                                    </div>
                                    <div class="col-4"><input type="date"class="form-control" name="end_date">
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
                                        <th>બનાવનાર</th>
                                        <th>સભ્ય નું નામ</th>
                                        <th>ફિક્સ જમા રકમ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Session::get('dikari') as $dikaris)
                                        <tr>
                                            <td width="2%">{{ $dikaris->id }}</td>
                                            <td width="10%">{{ $dikaris->receipt_no }}</td>
                                            <td width="10%">{{ date('d-m-Y', strtotime($dikaris->member_date)) }}</td>
                                            <td width="10%">
                                                {{ $user->where('id', '=', $dikaris->login_id)->first()->name }}</td>
                                            <td width="20%">{{ $dikaris->mr }}</td>
                                            <td width="10%">{{ $dikaris->fix_amount }}</td>
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
                                            {{ Session::get('fix_amount') }}
                                        </td>
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
