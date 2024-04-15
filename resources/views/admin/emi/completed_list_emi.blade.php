@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>EMI પ્રાપ્ત
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/emi/emi_receipt') }}">EMI લોન પહોંચ
                                    ની પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">EMI પ્રાપ્ત
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
                                    box-shadow: inset 135px 0 0 0 #000000;
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
                                <h5 class="ani">EMI પ્રાપ્ત
                                </h5>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>નામ</th>
                                        <th>તારીખ </th>
                                        {{-- <th>કુલ લોનની રકમ </th> --}}
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($EMILoan as $EMILoans)
                                        <tr>
                                            <td>{{ $EMILoans->id }}</td>
                                            <td>{{ $EMILoans->member_no }}</td>
                                            <td>{{ $EMILoans->mr }}</td>
                                            <td>{{ date('d-m-Y', strtotime($EMILoans->member_date)) }}</td>
                                            {{-- <td>{{ $EMILoans->loan_amount }}</td> --}}
                                            <td>{{ $EMILoans->status }}</td>
                                            <td>
                                                <a href="{{ url('admin/emi/' . $EMILoans->id . '/view') }}"
                                                    class="btn btn-primary">પહોંચ</a>

                                                <a href="{{ url('admin/emi/' . $EMILoans->id . '/emi_all_receipt') }}"
                                                    class="btn btn-danger">હફ્તાની પહોંચ</a>
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
