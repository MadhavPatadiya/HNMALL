@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>કરિયાવર માટે</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/dikari/receipt') }}">દીકરીના
                                    કરિયાવર માટેની પહોંચ
                                </a>
                            <li class="breadcrumb-item active">કરિયાવર માટે
                            </li>
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
                            <h5>કરિયાવર માટે</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <form action="{{ url('admin/dikari/store_kariyavar') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" value="{{ $dikari->member_no }}"
                                            id="validationCustom02" type="text " readonly>
                                        <input type="text" name="user_id" value="{{ $dikari->id }}"
                                            class="form1 form-control" readonly style="display:none">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">રસીદ નંબર:</label>
                                        <input class="form1 form-control" name="receipt_no" id="validationCustom02"
                                            type="text"
                                            value="00{{ optional($lastkariyavar->last())->receipt_no + 1 ?? '' }}">


                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">તારીખ.</label>
                                        <input class="form1 form-control" name="date" id="validationCustom02"
                                            type="date" value="{{ now()->format('Y-m-d') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">શ્રી,</label>
                                        <input class="form1 form-control" value="{{ $dikari->mr }}"
                                            id="validationCustom02" type="text " readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">સરનામુ:</label>
                                        <input class="form1 form-control" value="{{ $dikari->address }}"
                                            id="validationCustom02" type="text " readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">ગામ :</label>
                                        <input class="form1 form-control" value="{{ $dikari->village }}"
                                            id="validationCustom02" type="text " readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">તાલુકો :</label>
                                        <input class="form1 form-control" value="{{ $dikari->taluk }}"
                                            id="validationCustom02" type="text" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">જિલ્લો :</label>
                                        <input class="form1 form-control" value="{{ $dikari->city }}"
                                            id="validationCustom02" type="text" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">દિકરીનું નામ :</label>
                                        <input class="form1 form-control" value="{{ $dikari->daughter_name }}"
                                            id="validationCustom02" type="text" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">દિકરીની ઉંમર વર્ષ
                                            :</label>
                                        <input class="form1 form-control" value="{{ $dikari->age_2 }}"
                                            id="validationCustom02" type="text" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">દિકરીની જન્મ તા.
                                            :</label>
                                        <input class="form1 form-control" value="{{ $dikari->birth_date_of_daughter }}"
                                            id="validationCustom02" type="date" readonly>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom02">રકમ મળવાપાત્ર તારીખ :</label>
                                        <input class="form1 form-control" value="{{ $dikari->amount_date }}"
                                            id="validationCustom02" type="date" readonly>
                                    </div> --}}

                                    <div class="col-md-12 ml-4">
                                        <input class="form-check-input" name="kariyavar" id="validationCustom02"
                                            type="radio" value="{{ $dikari->worth_kariyavar }}" readonly>
                                        <label class="form-check-label" style="font-size:23px"
                                            for="validationCustom02">{{ $dikari->worth_kariyavar }}
                                            નું કરિયાવર મળવાપાત્ર</label>
                                    </div>


                                    <div class="col-md-12 ml-4">
                                        <input class="form-check-input" name="kariyavar" id="validationCustom02"
                                            type="radio" value="{{ $dikari->kariyavar_amount }}"readonly>
                                        <label class="form-check-label" style="font-size:23px"
                                            for="validationCustom02">{{ $dikari->kariyavar_amount }} નું રકમ
                                            મળવાપાત્ર</label>
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" style="width: 130px" class="btn btn-primary but m-3">
                                        Submit Form
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
