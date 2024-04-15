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
                                    box-shadow: inset 180px 0 0 0 #000000;
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
                            <div class="col-3">
                                <h5 class="ani">EMI Loan પહોંચ</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>નામ</th>
                                        <th>તારીખ</th>
                                        <th>લોનની રકમ(વ્યાજ સાથે )</th>
                                        <th>લોનની વ્યાજ </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($EMILoan as $EMILoans)
                                        <tr>
                                            <td>{{ $EMILoans->id }}</td>
                                            <td>{{ $EMILoans->member_no }}</td>
                                            <td>{{ $EMILoans->mr }}</td>
                                            <td>{{ $EMILoans->member_date }}</td>
                                            <td>{{ $EMILoans->total_amount_cash }}</td>
                                            <td>{{ $EMILoans->Interest_amount_cash }}</td>
                                            <td>
                                                <a href="{{ url('admin/emi/' . $EMILoans->id . '/view') }}"
                                                    class="btn btn-primary">પહોંચ</a>
                                                <a href="{{ url('admin/emi/' . $EMILoans->id . '/emi') }}"
                                                    class="btn btn-success">લોન પૂરી કરો</a>
                                                <a href="{{ url('admin/emi/' . $EMILoans->id . '/emi_all_receipt_cash') }}"
                                                    class="btn btn-danger">લોન પહોંચ</a>
                                            </td>
                                        </tr>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No Receipts Available</td>
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
