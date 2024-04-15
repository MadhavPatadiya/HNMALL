@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે - સુધારો</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/dikari/create') }}">સભ્યપદ ફોર્મ -
                                    દિકરીના કરિયાવર માટે
                                </a>
                            </li>
                            <li class="breadcrumb-item active">સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે - સુધારો </li>
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
                            <h5>સભ્યપદ ફોર્મ - દિકરીના કરિયાવર માટે</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/dikari/update/' . $dikari->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">સભ્યનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_image">
                                        @if ($dikari->member_image)
                                            <img src="{{ asset('uploads/dikari/member_image/' . $dikari->member_image) }}"
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
                                            name="heir_image_1">
                                        @if ($dikari->heir_image_1)
                                            <img src="{{ asset('uploads/dikari/heir_image_1/' . $dikari->heir_image_1) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('heir_image_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">દિકરીનો ફોટો</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="daughter_image">
                                        @if ($dikari->daughter_image)
                                            <img src="{{ asset('uploads/dikari/daughter_image/' . $dikari->daughter_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('daughter_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    {{-- <center><h4 class="h4">કુલ ભરવા પાત્ર રકમ-૧૦,૦૦૦</h4></center> --}}
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom01">સભ્યપદ નં.</label>
                                        <input class="form1 form-control" name="member_no" id="validationCustom01"
                                            type="text" value="{{ $dikari->member_no }}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <label style="display: none" class="label1 form-label" for="validationCustom01">રસીદ
                                            નંબર:</label>
                                        <input style="display: none" class="form1 form-control" name="receipt_no"
                                            id="validationCustom01" type="text" value="{{ $dikari->receipt_no }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('receipt_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <label style="display: none" class="label1 form-label"
                                            for="validationCustom01">Status</label>
                                        <input style="display: none" class="form1 form-control" name="status"
                                            id="validationCustom01" type="text" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom02">સભ્યપદ તા.</label>
                                        <input class="form1 form-control" name="member_date" id="validationCustom02"
                                            type="date" value="{{ $dikari->member_date }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom06">શ્રી,</label>
                                        <input class="form1 form-control" name="mr" id="validationCustom06"
                                            type="text" value="{{ $dikari->mr }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mr')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom07">ઉંમર:</label>
                                        <input class="form1 form-control" name="age" id="validationCustom07"
                                            type="number" value="{{ $dikari->age }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom08">ગામ :</label>
                                        <input class="form1 form-control" name="village" id="validationCustom08"
                                            type="text" value="{{ $dikari->village }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('village')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom09">સરનામુ :</label>
                                        <textarea class="form1 form-control" name="address" id="validationCustom09" type="text">{{ $dikari->address }}</textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom10">સોસાયટી :</label>
                                        <input class="form1 form-control" name="taluk" id="validationCustom10"
                                            type="text" placeholder="Taluk" value="{{ $dikari->taluk }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom14">જીલ્લો :</label>
                                        <input class="form1 form-control" name="city" id="validationCustom14"
                                            type="text" placeholder="City" value="{{ $dikari->city }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom11">સભ્યનો ધંધો :</label>
                                        <input class="form1 form-control" name="member_business" id="validationCustom11"
                                            type="text" value="{{ $dikari->member_business }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('member_business')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom12">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_1" id="validationCustom12"
                                            type="number" value="{{ $dikari->mobile_no_1 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom13">મો :</label>
                                        <input class="form1 form-control" name="mobile_no_2" id="validationCustom13"
                                            type="number" value="{{ $dikari->mobile_no_2 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('mobile_no_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom15">વારસદારનું નામ:</label>
                                        <input class="form1 form-control" name="heir_name_1" id="validationCustom15"
                                            type="text" value="{{ $dikari->heir_name_1 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('heir_name_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="label1 form-label" for="validationCustom16">ઉંમર:</label>
                                        <input class="form1 form-control" name="age_1" id="validationCustom16"
                                            type="number" value="{{ $dikari->age_1 }}">
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
                                            value="{{ $dikari->relationship_with_member_1 }}">
                                        {{-- <select class="form-select" name="relationship_with_member_1"
                                            id="validationCustom17" value="{{ $dikari->relationship_with_member_1 }}">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Husband</option>
                                            <option>Wife</option>
                                        </select> --}}
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        @error('relationship_with_member_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom15">દિકરીનું નામ :</label>
                                        <input class="form1 form-control" name="daughter_name" id="validationCustom15"
                                            type="text" value="{{ $dikari->daughter_name }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('daughter_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom20">સભ્ય સાથેના સબંધ
                                            :</label>
                                        <input class="form1 form-control" name="relationship_with_member_2"
                                            id="validationCustom20" type="text"
                                            value="{{ $dikari->relationship_with_member_2 }}">
                                        {{-- <select class="form-select" name="relationship_with_member_2"
                                            id="validationCustom20" value="{{ $dikari->relationship_with_member_2 }}">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>...</option>
                                        </select> --}}
                                        <div class="invalid-feedback">કૃપા કરીને સભ્ય સાથે માન્ય સંબંધ પસંદ કરો.</div>
                                        @error('relationship_with_member_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom17">દિકરીની જન્મ
                                            તારીખ:</label>
                                        <input class="form1 form-control" name="birth_date_of_daughter"
                                            id="validationCustom17" type="date"
                                            value="{{ $dikari->birth_date_of_daughter }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('birth_date_of_daughter')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label"> દિકરીની ઉંમર:</label>
                                        <input class="form1 form-control" name="age_2" type="number"
                                            value="{{ $dikari->age_2 }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('age_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom19">દિકરીનો સહી </label>
                                        <input class="form1 form-control" name="daughter_sign_image" type="file"
                                            aria-label="file example">
                                        @if ($dikari->daughter_sign_image)
                                            <img src="{{ asset('uploads/dikari/daughter_sign_image/' . $dikari->daughter_sign_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        {{-- <img src="{{ asset('uploads/dikari/daughter_sign_image/' . $dikari->daughter_sign_image) }}"
                                            width="60px" height="60px" /> --}}
                                        @error('daughter_sign_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom23">સભ્યની સહી.</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="member_sign_image">
                                        @if ($dikari->member_sign_image)
                                            <img src="{{ asset('uploads/dikari/member_sign_image/' . $dikari->member_sign_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        {{-- <img src="{{ asset('uploads/dikari/member_sign_image/' . $dikari->member_sign_image) }}"
                                            width="60px" height="60px" /> --}}
                                        @error('member_sign_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom24">વારસદારની સહી</label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="heir_sign_image_1">
                                        @if ($dikari->heir_sign_image_1)
                                            <img src="{{ asset('uploads/dikari/heir_sign_image_1/' . $dikari->heir_sign_image_1) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        {{-- <img src="{{ asset('uploads/dikari/heir_sign_image_1/' . $dikari->heir_sign_image_1) }}"
                                            width="60px" height="60px" /> --}}
                                        @error('heir_sign_image_1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="validationCustom26">એચ.એન.મોલ વતી </label>
                                        <input class="form1 form-control" type="file" aria-label="file example"
                                            name="sign_on_behalf_of_jan_jagaruti_image">
                                        @if ($dikari->sign_on_behalf_of_jan_jagaruti_image)
                                            <img src="{{ asset('uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/' . $dikari->sign_on_behalf_of_jan_jagaruti_image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        {{-- <img src="{{ asset('uploads/dikari/sign_on_behalf_of_jan_jagaruti_image/' . $dikari->sign_on_behalf_of_jan_jagaruti_image) }}"
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

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
