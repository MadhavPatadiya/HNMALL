{{-- @extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Attachment</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Attachment </li>
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
                            <h5>Attachment</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form id="myForm" action="{{ url('admin/deposite/storeattachment') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label class="label1 form-label" for="name">Image Name</label>
                                        <input class="form1 form-control" name="name" id="name"
                                            type="text" value="{{ $attachment->name }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="image">Attachment</label>
                                        <input class="form1 form-control" name="image" id="image"
                                            type="file">
                                        @if ($attachment->image)
                                            <img src="{{ asset('uploads/attachment/image/' . $attachment->image) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" style="width: 130px;position: absolute; top: 13px;"
                                            class="btn btn-primary but m-3">
                                            Submit Form
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection --}}

{{-- @extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Attachment</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Attachment </li>
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
                            <h5>Attachment</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <form id="myForm" action="{{ url('admin/deposite/storeattachment') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label class="label1 form-label" for="name">Image Name</label>
                                        <input class="form1 form-control" name="name" id="name" type="text"
                                            value="{{ old('name') }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="image">Attachment</label>
                                        <input class="form1 form-control" name="image" id="image" type="file">
                                        @if (old('image'))
                                            <img src="{{ asset('uploads/attachment/image/' . old('image')) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" style="width: 130px;position: absolute; top: 13px;"
                                            class="btn btn-primary but m-3">
                                            Submit Form
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection --}}



@extends('layouts.admin')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
@section('content')
    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Attachment List</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active"> <a href="{{ url('admin/deposite/create') }}">ફિક્સ ડિપોઝિટ ફોર્મ

                                </a>
                            </li>

                            <li class="breadcrumb-item active">Attachment List </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- ... (existing code) ... -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card" style>
                        <div class="card-header">
                            <h5>Attachment List</h5>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <form id="myForm" action="{{ url('admin/deposite/storeattachment') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label class="label1 form-label" for="name">Image Name</label>
                                        <input class="form1 form-control" name="name" id="name" type="text"
                                            value="{{ old('name') }}">
                                            <input style="display:none;" class="form1 form-control" value="{{$id}}" name="id" id="id" type="text"
                                            value="{{ old('name') }}">
                                        <div class="valid-feedback">Looks good!</div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label1 form-label" for="image">Attachment</label>
                                        <input class="form1 form-control" name="image" id="image" type="file">
                                        @if (old('image'))
                                            <img src="{{ asset('uploads/attachment/image/' . old('image')) }}"
                                                width="60px" height="60px" />
                                        @else
                                            <p>&nbsp;</p>
                                        @endif
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" style="width: 130px;position: absolute; top: 13px;"
                                            class="btn btn-primary but m-3">
                                            Submit Form
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                            <div class="card-body">
                                <table class="table table-bordered table-striped" id="example1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attachments as $attachment)
                                            <tr>
                                                <td>{{ $attachment->id }}</td>
                                                <td>{{ $attachment->name }}</td>
                                                <td>
                                                    <button type="button" class="btn" data-toggle="modal"
                                                        data-target="#exampleModalLong{{ $attachment->id }}">

                                                        <img src="{{ asset('uploads/attachment/image/' . $attachment->image) }}"
                                                            width="60px" height="60px" />
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalLong{{ $attachment->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal
                                                                        title</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="{{ asset('uploads/attachment/image/' . $attachment->image) }}"
                                                                        width="100%"/>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    {{-- <button type="button" class="btn btn-primary">Save
                                                                        changes</button> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    {{--
                                                    <a href="{{ url('/deposite/{deposites}/attachment')}}"
                                                        class="action-btn btn btn-danger" type="button">
                                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this attachment?')">Delete</button>
                                                    </a> --}}
                                                    <form action="{{ route('attachment.delete', ['id' => $attachment->id]) }}"
                                                        method="post" onsubmit="return confirm('Are you sure you want to delete this attachment?')">
                                                        @csrf
                                                        @method('get')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- <form action="{{ url('admin/deposite/attachmentRemove') }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this attachment?')">Delete</button>
    </form> --}}
