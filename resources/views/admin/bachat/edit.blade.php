@extends('layouts.admin')


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>માસિક બચત ફોર્મ - સુધારો
                        </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/bachat/create') }}">માસિક બચત ફોર્મ
                                </a>
                            </li>
                            <li class="breadcrumb-item active">માસિક બચત ફોર્મ - સુધારો
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
                            <h5>માસિક બચત ફોર્મ - સુધારો
                            </h5>
                        </div>
                        <div class="card-body">
                            <form id="myForm" action="{{ url('admin/bachat/update/' . $bachat->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" name="member_no" id="validationCustom01"
                                            type="text" value="{{ $bachat->member_no }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">તારીખ</label>
                                        <input class="form1 form-control" name="member_date" id="validationCustom02"
                                            type="date" value="{{ $bachat->member_date }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom03">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" name="member_image" type="file"
                                            aria-label="file example">
                                        @if ($bachat->member_image)
                                            <img src="{{ asset('uploads/bachat/member_image/' . $bachat->member_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('member_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom04">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" name="heir_image_1" type="file"
                                            aria-label="file example">
                                        @if ($bachat->heir_image_1)
                                            <img src="{{ asset('uploads/bachat/heir_image_1/' . $bachat->heir_image_1) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('heir_image_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom05">વારસદારનો ફોટો</label>
                                        <input class="form1 form-control" name="heir_image_2" type="file"
                                            aria-label="file example">
                                        @if ($bachat->heir_image_2)
                                            <img src="{{ asset('uploads/bachat/heir_image_2/' . $bachat->heir_image_2) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('heir_image_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">શ્રી,</label>
                                        <input class="form1 form-control" name="mr" id="validationCustom06"
                                            type="text" value="{{ $bachat->mr }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mr')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom07">ઉંમર:</label>
                                        <input class="form1 form-control" name="age" id="validationCustom07"
                                            type="number" value="{{ $bachat->age }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom08">ગામ :</label>
                                        <input class="form1 form-control" name="village" id="validationCustom08"
                                            type="text" value="{{ $bachat->village }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('village')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom09">સરનામુ :</label>
                                        <textarea class="form1 form-control" name="address" id="validationCustom09" type="text">{{ $bachat->address }}</textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom10">સોસાયટી :</label>
                                        <input class="form1 form-control" name="taluk" id="validationCustom10"
                                            type="text" placeholder="Taluk" value="{{ $bachat->taluk }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('taluk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom14">જીલ્લો :</label>
                                        <input class="form1 form-control" name="city" id="validationCustom14"
                                            type="text" placeholder="City" value="{{ $bachat->city }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom11">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" name="member_business" id="validationCustom11"
                                            type="text" value="{{ $bachat->member_business }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_business')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom12">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_1" id="validationCustom12"
                                            type="number" value="{{ $bachat->mobile_no_1 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom13">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_2" id="validationCustom13"
                                            type="number" value="{{ $bachat->mobile_no_2 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom15">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" name="heir_name_1" id="validationCustom15"
                                            type="text" value="{{ $bachat->heir_name_1 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('heir_name_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom16">ઉંમર:</label>
                                        <input class="form1 form-control" name="age_1" id="validationCustom16"
                                            type="number" value="{{ $bachat->age_1 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom17">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_1"
                                            id="validationCustom17" type="text"
                                            value="{{ $bachat->relationship_with_member_1 }}">
                                        {{-- <select class="form-select" name="relationship_with_member_1"
                                            id="validationCustom17" value="{{ $bachat->relationship_with_member_1 }}">
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
                                            type="text" value="{{ $bachat->heir_name_2 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('heir_name_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label">ઉંમર</label>
                                        <input class="form1 form-control" name="age_2" type="number"
                                            value="{{ $bachat->age_2 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom20">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_2"
                                            id="validationCustom20" type="text"
                                            value="{{ $bachat->relationship_with_member_2 }}">
                                        {{-- <select class="form-select" name="relationship_with_member_2"
                                            id="validationCustom20" value="{{ $bachat->relationship_with_member_2 }}">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>...</option>
                                        </select> --}}
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        @error('relationship_with_member_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" name="percentage" type="radio"
                                                value="125" id="radio1"
                                                {{ $bachat->percentage == '125' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="radio1">નિશ્ચિત 12-મહિનાના સમયગાળા માટે
                                                પ્રતિ લેખ 1.25%ના દરે વળતર ચૂકવવામાં આવશે.</label><br>
                                            @error('percentage')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" name="percentage" type="radio"
                                                value="1" id="radio2"
                                                {{ $bachat->percentage == '1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="radio2">અડધા વચ્ચેના કોઈપણ સમયે ઉપાડના
                                                કિસ્સામાં, લેખના 1% વળતર આપવામાં આવશે.</label>
                                            @error('percentage')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3">
                                        <div class="form-check">
                                            <div class="checkbox p-0">
                                                <input class="form-check-input" name="percentage_1_25"
                                                    id="invalidCheck21" type="checkbox"
                                                    {{ $bachat->percentage_1_25 == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="invalidCheck21">નિશ્ચિત 12-મહિનાના
                                                    સમયગાળા માટે પ્રતિ લેખ 1.25%ના દરે વળતર ચૂકવવામાં આવશે.</label><br />
                                                @error('percentage_1_25')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                <input class="form-check-input" name="percentage_1" id="invalidCheck22"
                                                    type="checkbox" {{ $bachat->percentage_1 == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="invalidCheck22">અડધા વચ્ચેના કોઈપણ
                                                    સમયે ઉપાડના કિસ્સામાં, લેખના 1% વળતર આપવામાં આવશે.</label>
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
                                        @if ($bachat->member_sign_image)
                                            <img src="{{ asset('uploads/bachat/member_sign_image/' . $bachat->member_sign_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif

                                        {{-- <img src="{{ asset('uploads/bachat/member_sign_image/' . $bachat->member_sign_image) }}"
                                            width="60px" height="60px" /> --}}

                                        @error('member_sign_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom24">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_1">
                                        @if ($bachat->heir_sign_image_1)
                                            <img src="{{ asset('uploads/bachat/heir_sign_image_1/' . $bachat->heir_sign_image_1) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        {{-- <img src="{{ asset('uploads/bachat/heir_sign_image_1/' . $bachat->heir_sign_image_1) }}"
                                            width="60px" height="60px" /> --}}

                                        @error('heir_sign_image_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom25">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_2">
                                        @if ($bachat->heir_sign_image_2)
                                            <img src="{{ asset('uploads/bachat/heir_sign_image_2/' . $bachat->heir_sign_image_2) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif

                                        {{-- <img src="{{ asset('uploads/bachat/heir_sign_image_2/' . $bachat->heir_sign_image_2) }}"
                                            width="60px" height="60px" /> --}}
                                        @error('heir_sign_image_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom26">એચ.એન.મોલ વતી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="sign_on_behalf_of_jan_jagaruti_image">
                                        @if ($bachat->sign_on_behalf_of_jan_jagaruti_image)
                                            <img src="{{ asset('uploads/bachat/sign_on_behalf_of_jan_jagaruti_image/' . $bachat->sign_on_behalf_of_jan_jagaruti_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif

                                        {{-- <img src="{{ asset('uploads/bachat/sign_on_behalf_of_jan_jagaruti_image/' . $bachat->sign_on_behalf_of_jan_jagaruti_image) }}"
                                            width="60px" height="60px" /> --}}

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
                                <button type="submit" class="btn btn-primary float-end">Update Form</button>
                            </form>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
