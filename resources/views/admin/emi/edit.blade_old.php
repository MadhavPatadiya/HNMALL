@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>લોન EMI ફોર્મ - સુધારો </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/emi/create') }}">લોન EMI ફોર્મ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">લોન EMI ફોર્મ - સુધારો </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>લોન EMI ફોર્મ - સુધારો </h5>
                        </div>
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <form id="myForm" action="{{ url('admin/emi/update/' . $EMILoan->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row g-3">
                                    <div class="col-md-8">
                                    </div>

                                    <div class="col-md-4">
                                        <input style="display: none" name="status" value="active">

                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_no" value="{{ $EMILoan->member_no }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-8">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ તારીખ.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_date" value="{{ $EMILoan->member_date }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_image">
                                        @if ($EMILoan->member_image)
                                            <img src="{{ asset('uploads/emi/member_image/' . $EMILoan->member_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('member_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_image">
                                        @if ($EMILoan->heir_image)
                                            <img src="{{ asset('uploads/emi/heir_image/' . $EMILoan->heir_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('heir_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">શ્રી,</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mr" value="{{ $EMILoan->mr }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mr')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">ઉંમર:</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="age" value="{{ $EMILoan->age }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">ગામ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="village" value="{{ $EMILoan->village }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('village')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સરનામુ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="address" value="{{ $EMILoan->address }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સોસાયટી :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="taluk" value="{{ $EMILoan->taluk }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('taluk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">જિલ્લો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="city" value="{{ $EMILoan->city }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="member_business" value="{{ $EMILoan->member_business }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_business')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">મો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mobile_no_1" value="{{ $EMILoan->mobile_no_1 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">મો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mobile_no_2" value="{{ $EMILoan->mobile_no_2 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">જામીનું નામ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="jaminu_nam" value="{{ $EMILoan->jaminu_nam }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('jaminu_nam')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">મો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="mobile_no_3" value="{{ $EMILoan->mobile_no_3 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_3')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">જામીન સભ્યપદ નં.</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="jamin_member_no" value="{{ $EMILoan->jamin_member_no }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('jamin_member_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">Loan Type:</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="loan_type" value="{{ $EMILoan->loan_type }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('loan_type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4"
                                        style="{{ $EMILoan->product_name === null ? 'display: none;' : '' }}">
                                        <label class="label1 form-label" for="validationCustom01">Product Name:</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="product_name" value="{{ $EMILoan->product_name }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('product_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">કિંમત :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="price" value="{{ $EMILoan->price }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('price')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4"
                                        style="{{ $EMILoan->down_payment === null ? 'display: none;' : '' }}">
                                        <label class="label1 form-label" for="validationCustom01">ડાઉન પેમેન્ટ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="down_payment" value="{{ $EMILoan->down_payment }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('down_payment')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">લોનની રકમ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="loan_amount" value="{{ $EMILoan->loan_amount }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('loan_amount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">લોનની રકમ + વ્યાજ
                                            :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="total_amount" value="{{ $EMILoan->total_amount }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('total_amount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div> --}}
                                    {{-- <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">લોનનો સમયગાળો :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="loan_time_period" value="{{ $EMILoan->loan_time_period }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('loan_time_period')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div> --}}

                                    {{-- <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">વ્યાજ :</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="Interest_amount" value="{{ $EMILoan->Interest_amount }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('Interest_amount')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div> --}}
                                    {{-- <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom01">માસિક EMI:</label>
                                        <input class="form1 form-control" id="validationCustom01" type="text"
                                            name="monthly_emi" value="{{ $EMILoan->monthly_emi }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('monthly_emi')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <label class="label1 form-label" for="validationCustom06">સભ્યની સહી</label>
                                            <input class="form1 form-control" type="file" aria-label="file example"
                                                name="member_sign_image">
                                            @if ($EMILoan->member_sign_image)
                                                <img src="{{ asset('uploads/emi/member_sign_image/' . $EMILoan->member_sign_image) }}"
                                                    width="60px" height="60px" />
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            @error('member_sign_image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="label1 form-label" for="validationCustom06">વારજામીન સહી</label>
                                            <input class="form1 form-control" type="file" aria-label="file example"
                                                name="jamin_sign_image">
                                            @if ($EMILoan->jamin_sign_image)
                                                <img src="{{ asset('uploads/emi/jamin_sign_image/' . $EMILoan->jamin_sign_image) }}"
                                                    width="60px" height="60px" />
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            @error('jamin_sign_image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="label1 form-label" for="validationCustom06">એચ.એન.મોલ
                                                વતી</label>
                                            <input class="form1 form-control" type="file" aria-label="file example"
                                                name="jjg_sign_image_2">
                                            @if ($EMILoan->jjg_sign_image_2)
                                                <img src="{{ asset('uploads/emi/jjg_sign_image_2/' . $EMILoan->jjg_sign_image_2) }}"
                                                    width="60px" height="60px" />
                                            @else
                                                <p>&nbsp;</p>
                                            @endif
                                            @error('jjg_sign_image_2')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary float-end" type="submit">Update form</button>
                                <script>
                                    // Prevent the form from submitting on enter
                                    const form = document.getElementById('myForm');
                                    form.addEventListener('keypress', function(e) {
                                        if (e.keyCode === 13) {
                                            e.preventDefault();
                                        }
                                    });
                                    document.addEventListener('keydown', function(event) {
                                        if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
                                            var form = event.target.form;
                                            var index = Array.prototype.indexOf.call(form, event.target);
                                            form.elements[index + 1].focus();
                                            event.preventDefault();
                                        }
                                    });
                                </script>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
