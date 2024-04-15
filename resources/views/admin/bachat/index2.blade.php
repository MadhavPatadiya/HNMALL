@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત ફોર્મ</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત ફોર્મ </li>
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
                            <h5>માસિક બચત ફોર્મ</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/bachat/save') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" name="member_no" id="validationCustom01"
                                            type="text" value="000{{ $lastBachat->last()->member_no + 0001 }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">સભ્યપદ તા.</label>
                                        <input class="form1 form-control" name="member_date" id="validationCustom02"
                                            type="date" value="{{ now()->format('Y-m-d') }}" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom03">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" name="member_image" type="file"
                                            aria-label="file example">
                                        @error('member_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" name="heir_image_1" type="file"
                                            aria-label="file example">
                                        @error('heir_image_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom05">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" name="heir_image_2" type="file"
                                            aria-label="file example">
                                        @error('heir_image_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">શ્રી,</label>
                                        <input class="form1 form-control" name="mr" id="validationCustom06"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mr')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom07">ઉંમર:</label>
                                        <input class="form1 form-control" name="age" id="validationCustom07"
                                            type="number" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom08">ગામ :</label>
                                        <input class="form1 form-control" name="village" id="validationCustom08"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('village')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom09">સરનામુ :</label>
                                        <textarea class="form1 form-control" name="address" id="validationCustom09" type="text"></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom10">સોસાયટી :</label>
                                        <input class="form1 form-control" name="taluk" id="validationCustom10"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('taluk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom13">જિલ્લો :</label>
                                        <input class="form1 form-control" name="city" id="validationCustom14"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom11">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" name="member_business" id="validationCustom11"
                                            type="text" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_business')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom12">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_1" id="validationCustom12"
                                            type="number" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom13">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_2" id="validationCustom13"
                                            type="number">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom15">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" name="heir_name_1" id="validationCustom15"
                                            type="text">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('heir_name_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom16">ઉંમર:</label>
                                        <input class="form1 form-control" name="age_1" id="validationCustom16"
                                            type="number">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom17">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" id="validationCustom17" type="text"
                                            name="relationship_with_member_1">
                                        {{-- <select class="form-select" name="relationship_with_member_1"
                                            id="validationCustom17">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Husband</option>
                                            <option>Wife</option>
                                        </select> --}}
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        @error('relationship_with_member_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom18">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" name="heir_name_2" id="validationCustom18"
                                            type="text">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('heir_name_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label">ઉંમર</label>
                                        <input class="form1 form-control" name="age_2" type="number">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom20">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_2"
                                            id="validationCustom20" type="text">
                                        {{-- <select class="form-select" name="relationship_with_member_2"
                                            id="validationCustom20">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>...</option>
                                        </select> --}}
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        @error('relationship_with_member_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="percentage" type="radio"
                                                value="125" id="radio1" style="display: none">
                                            <label class="form-check-label" for="radio1" style="display: none">ફિક્સ
                                                ૧૨-માસ માટે વળતર ૧.૨૫%
                                                લેખે આપવામાં આવશે.</label><br>

                                        </div>
                                    </div>
                                    <div class="mb-3" style="display: none">
                                        <div class="form-check">
                                            <input class="form-check-input" name="percentage" type="radio" checked
                                                value="1" id="radio2">
                                            <label class="form-check-label" for="radio2">અધવચ્ચે ગમે ત્યારે ઉપાડે તો ૧%
                                                લેખે વળતર આપવામાં આવશે.</label>
                                            @error('percentage')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- <div class="mb-3">
                                        <div class="form-check">
                                            <div class="checkbox p-0">
                                                <input class="form-check-input" name="percentage_1_25"
                                                    id="invalidCheck21" type="radio">
                                                <label class="form-check-label" for="invalidCheck21">ફિક્સ ૧૨-માસ માટે
                                                    વળતર ૧.૨૫% લેખે આપવામાં આવશે.
                                                </label><br />
                                                @error('percentage_1_25')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                <input class="form-check-input" name="percentage_1" id="invalidCheck22"
                                                    type="radio">
                                                <label class="form-check-label" for="invalidCheck22">અધવચ્ચે ગમે ત્યારે
                                                    ઉપાડે તો ૧% લેખે વળતર આપવામાં આવશે.
                                                </label>
                                                @error('percentage_1')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom23">સભ્યની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_sign_image">
                                        @error('member_sign_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom24">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_1">
                                        @error('heir_sign_image_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom25">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_2">
                                        @error('heir_sign_image_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom26">એચ.એન.મોલ વતી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="sign_on_behalf_of_jan_jagaruti_image">
                                        @error('sign_on_behalf_of_jan_jagaruti_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="invalid-feedback">સબમિટ કરતા પહેલા તમારે સંમત થવું આવશ્યક છે.</div>
                                    </div>
                                </div>
                        </div>
                        <center>
                            <button type="submit" style="width: 130px" class="btn btn-primary but m-3">
                                Submit Form
                            </button>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                        </center>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection
