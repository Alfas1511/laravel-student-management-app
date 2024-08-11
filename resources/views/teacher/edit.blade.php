@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('teachers.index') }}">Teacher
                        Applications</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Teacher
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Edit Teacher</div>
            <div class="card-body">

                <form action="{{ route('teachers.update', $teacher->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" name="id" id="id" value="{{ $teacher->id }}" id="id" />
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" value="{{ $teacher->name }}"
                        class="form-control"></br>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address" value="{{ $teacher->address }}"
                        class="form-control"></br>
                    <label>Mobile</label></br>
                    <input type="text" name="mobile" id="mobile" value="{{ $teacher->mobile }}"
                        class="form-control"></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
