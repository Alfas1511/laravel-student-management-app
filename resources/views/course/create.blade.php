@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.index') }}">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Course</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Add Course</div>
            <div class="card-body">

                <form action="{{ route('courses.store') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Course Name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>Syllabus</label></br>
                    <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
                    <label>Duration</label></br>
                    <input type="text" name="duration" id="duration" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
