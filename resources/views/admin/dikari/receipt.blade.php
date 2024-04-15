@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>દીકરીના કરિયાવર ની પહોંચ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">દીકરીના કરિયાવર ની પહોંચ
                            </li>
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
                            <div class="col-12">
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
                                        box-shadow: inset 270px 0 0 0 #000000;
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
                                <h5 class="ani"> દીકરીના
                                    કરિયાવર ની પહોંચ</h5>

                                <a href="{{ url('admin/dikari/deactivate_list') }}"
                                    class="btn float-end btn-danger ml-2">Deactivate
                                    Account</a>
                                <a href="{{ url('admin/dikari/completed_list') }}"
                                    class="btn float-end btn-primary">Complete
                                    Account</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>નામ</th>
                                        <th>તારીખ</th>
                                        <th>કરિયાવર મળવા તારીખ</th>
                                        <th class="n">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dikari as $dikaris)
                                        <td>{{ $dikaris->id }}</td>
                                        <td>{{ $dikaris->member_no }}</td>
                                        <td>{{ $user->where('id', '=', $dikaris->login_id)->first()->name }}</td>
                                        <td>{{ $dikaris->mr }}</td>
                                        <td>{{ date('d-m-Y', strtotime($dikaris->member_date)) }}</td>
                                        <td>{{ $dikaris->amount_date }}</td>
                                        <td class="n"> <a
                                                href="{{ url('admin/dikari/' . $dikaris->id . '/view_receipt') }}"
                                                class="btn btn-primary">પહોંચ</a>

                                            @php
                                                $matchingKariyavar = $Kariyavar->firstWhere('user_id', $dikaris->id);
                                                $currentDate = date('Y-m-d');
                                            @endphp
                                            @if ($currentDate >= $dikaris->amount_date)
                                                @if ($matchingKariyavar)
                                                    <a href="{{ url('admin/dikari/' . $dikaris->id . '/view_kariyavar') }}"
                                                        class="btn btn-success">kariyavar પહોંચ</a>
                                                @else
                                                    <a href="{{ url('admin/dikari/' . $dikaris->id . '/create_kariyavar') }}"
                                                        class="btn btn-danger">kariyavar</a>
                                                @endif
                                            @endif
                                            <a href="{{ url('admin/dikari/' . $dikaris->id . '/deactivate') }}"
                                                class="btn btn-danger">Deactivate</a>

                                            {{-- @if (Auth::user()->role_as == '1')
                                                <a href="{{ url('admin/dikari/' . $dikaris->id . '/deactivate') }}"
                                                    class="btn btn-danger">Deactivate</a>
                                            @else
                                                &nbsp;
                                            @endif --}}
                                        </td>
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
