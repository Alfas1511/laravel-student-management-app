@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('students.index') }}">Student Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Student</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Create Student</div>
            <div class="card-body">

                <form action="{{ route('students.store') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>Address</label></br>
                    <input type="text" name="address" id="address" class="form-control"></br>
                    <label>Mobile</label></br>
                    <input type="text" name="mobile" id="mobile" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
