@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>નિષ્ક્રિય એકાઉન્ટ સૂચિ
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            <li class="breadcrumb-item active"> <a
                                    href="{{ url('admin/deposite/fix_deposite_receipt') }}">ફિક્સ ડિપોઝિટ પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">નિષ્ક્રિય એકાઉન્ટ સૂચિ
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
                                    box-shadow: inset 250px 0 0 0 #000000;
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
                                <h5 class="ani">નિષ્ક્રિય એકાઉન્ટ સૂચિ
                                </h5>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>સભ્યપદ નં.</th>
                                        <th>બનાવનાર</th>
                                        <th>તારીખ</th>
                                        <th>પાકતી મુદત</th>
                                        <th>નામ</th>
                                        <th>જમા રકમ</th>
                                        <th>વળતર સહીતની રકમ</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($deposite as $deposites)
                                        <tr>
                                            <td>{{ $deposites->id }}</td>
                                            <td>{{ $deposites->member_no }}</td>
                                            <td>{{ $user->where('id','=',$deposites->login_id)->first()->name }}</td>
                                            <td>{{ date('d-m-Y', strtotime($deposites->member_date)) }}</td>
                                            <td>{{ date('d-m-Y', strtotime($deposites->maturity_period)) }}</td>
                                            <td>{{ $deposites->mr }}</td>
                                            <td>{{ $deposites->total_amount }}</td>
                                            <td>{{ $deposites->vyaj_amount }}</td>
                                            <td>{{ $deposites->status }}</td>
                                            <td><a href="{{ url('admin/deposite/' . $deposites->id . '/view_receipt') }}"
                                                    class="btn btn-primary">પહોંચ</a>
                                                <a href="{{ url('admin/deposite/' . $deposites->id . '/view_refund_loan_receipt') }}"
                                                    class="btn btn-primary">રદ પહોંચ</a>
                                                <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_receipt') }}"
                                                    class="btn btn-danger">લોન પહોંચ</a>
                                                <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_deposite_receipt') }}"
                                                    class="btn btn-danger">લોન જમા પહોંચ</a>
                                                <a href="{{ url('admin/deposite/' . $deposites->id . '/loan_interest_statement') }}"
                                                    class="btn btn-dark">Statement</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">No Account's Available</td>
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
