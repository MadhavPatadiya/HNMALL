@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>ખાતું રદ કરો </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/dikari/receipt') }}">દીકરીના
                                    કરિયાવર માટેની પહોંચ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">ખાતું રદ કરો </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>ખાતું રદ કરો </h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <form action="{{ url('admin/dikari/store_deactivate') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="row">

                                    <input type="text" name="user_id" value="{{ $dikari->id }}" class="form1 form-control"
                                        readonly style="display:none">
                                    <div class="col-md-8 mt-2">
                                    </div>


                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label"> સભ્યપદ નં.</label>
                                        <input type="text" value="{{ $dikari->member_no }}" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-md-8 mt-2">
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label">સભ્યપદ તા.</label>
                                        <input type="text" value="{{ $dikari->member_date }}" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="label1 form-label"> શ્રી,</label>
                                        <input type="text" value="{{ $dikari->mr }}" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="label1 form-label"> સરનામુ :</label>
                                        <input type="text" value="{{ $dikari->address }}" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label">ગામ :</label>
                                        <input type="text" value="{{ $dikari->village }}" class="form1 form-control" readonly>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label">તાલુકો :</label>
                                        <input type="text" value="{{ $dikari->taluk }}" class="form1 form-control" readonly>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label">જીલ્લો :</label>
                                        <input type="text" value="{{ $dikari->city }}" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label">દિકરીનું નામ :</label>
                                        <input type="text" value="{{ $dikari->daughter_name }}" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label">સભ્ય સાથેના સબંધ :</label>
                                        <input type="text" value="{{ $dikari->relationship_with_member_2 }}"
                                            class="form1 form-control" readonly>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label class="label1 form-label"> દિકરીની ઉંમર:</label>
                                        <input type="text" value="{{ $dikari->age_2 }}" class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="label1 form-label"> દિકરીની જન્મ તારીખ:</label>
                                        <input type="date" value="{{ $dikari->birth_date_of_daughter }}"
                                            class="form1 form-control" readonly>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="label1 form-label"> રકમ મળવાપાત્ર તારીખ:</label>
                                        <input type="date" value="{{ $dikari->amount_date }}" class="form1 form-control"
                                            readonly>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label" for="validationCustom02">Deactivation Date</label>
                                        <input class="form1 form-control" name="deactivate_date" id="validationCustom02"
                                            type="date" value="{{ now()->format('Y-m-d') }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('deactivate_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label" for="validationCustom02">Amount</label>
                                        <input class="form1 form-control" name="amount" id="validationCustom02" type="text">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('amount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" style="width: 230px" class="btn btn-primary but m-3">
                                        Account Deactivation
                                    </button>
                                </center>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
