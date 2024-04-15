@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>રિપોર્ટ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">રિપોર્ટ</li>
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
                            <h5>રિપોર્ટ</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/search') }}" method="post">
                                @csrf
                                <div class="row mb-5">
                                    <div class="col-2">
                                        <b>બનાવનાર : </b>
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
                                    </div>
                                    <div class="col-2 mt-5">
                                        <b>વિકલ્પ પસંદ કરો : </b>
                                    </div>
                                    <div class="col-8 mt-5">
                                        <div class="form-check radio radio-warning">
                                            <input class="form-check-input" id="radio44" checked type="radio"
                                                name="option" value="option5">
                                            <label class="form-check-label" for="radio44">
                                                <h6><b>આવક/જાવક</b></h6>
                                            </label>
                                        </div>

                                        <div class="form-check radio radio-primary">
                                            <input class="form-check-input" id="radio11" type="radio" name="option"
                                                value="option1">
                                            <label class="form-check-label" for="radio11">
                                                <h6><b>માસિક બચત
                                                        રિપોર્ટ</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-secondary">
                                            <input class="form-check-input" id="radio22" type="radio" name="option"
                                                value="option2">
                                            <label class="form-check-label" for="radio22">
                                                <h6><b>ફિક્સ ડિપોઝિટ</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-success">
                                            <input class="form-check-input" id="radio55" type="radio" name="option"
                                                value="option3">
                                            <label class="form-check-label" for="radio55">
                                                <h6><b>દીકરી રિપોર્ટ</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-info">
                                            <input class="form-check-input" id="radio33" type="radio" name="option"
                                                value="option4">
                                            <label class="form-check-label" for="radio33">
                                                <h6><b>EMI LOAN</b></h6>
                                            </label>
                                        </div>
                                        <div class="form-check radio radio-info">
                                            <input class="form-check-input" id="radio66" type="radio" name="option"
                                                value="option6">
                                            <label class="form-check-label" for="radio66">
                                                <h6><b>EMI Form</b></h6>
                                            </label>
                                        </div>


                                        {{-- <input type="radio" name="option" value="option1"> Option 1
                                        <input type="radio" name="option" value="option2"> Option 2
                                        <input type="radio" name="option" value="option3"> Option 3
                                        <input type="radio" name="option" value="option4"> Option 4 --}}
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="float-end mt-5">
                                        <button type="submit" class="btn btn-primary but"><b>રિપોર્ટ જુઓ</b></button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <div class="row">
                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                    <a class="sidebar-link " href="{{ url('admin/masik-bachat/report') }}">

                                        <div class="card o-hidden">
                                            <div class="bg-primary b-r-4 card-body">
                                                <div class="media static-top-widget">
                                                    <div class="align-self-center text-center"><i data-feather="database"></i>
                                                </div>
                                                    <div class="media-body"><span class="m-0"></span>
                                                        <h4 class="mb-0 counter">માસિક બચત રિપોર્ટ
                                                        </h4><i class="icon-bg" data-feather="file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                    <a class="sidebar-link " href="{{ url('admin/fix-deposit/report') }}">

                                        <div class="card o-hidden">
                                            <div class="bg-danger b-r-4 card-body">
                                                <div class="media static-top-widget">
                                                    <div class="media-body"><span class="m-0"></span>
                                                        <h4 class="mb-0 counter">ફિક્સ ડિપોઝિટ રિપોર્ટ

                                                        </h4><i class="icon-bg" data-feather="file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                    <a class="sidebar-link " href="{{ url('admin/dikari/report') }}">

                                        <div class="card o-hidden">
                                            <div class="bg-primary b-r-4 card-body">
                                                <div class="media static-top-widget">
                                                    <div class="media-body"><span class="m-0"></span>
                                                        <h4 class="mb-0 counter">દીકરી રિપોર્ટ

                                                        </h4><i class="icon-bg" data-feather="file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                    <a class="sidebar-link " href="{{ url('admin/emi/report') }}">

                                        <div class="card o-hidden">
                                            <div class="bg-danger b-r-4 card-body">
                                                <div class="media static-top-widget">
                                                    <div class="media-body"><span class="m-0"></span>
                                                        <h4 class="mb-0 counter">EMI લોન રિપોર્ટ

                                                        </h4><i class="icon-bg" data-feather="file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div> --}}
