@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.index') }}">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Course Details
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Edit Course Details</div>
            <div class="card-body">

                <form action="{{ route('courses.update', $course->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" name="id" id="id" value="{{ $course->id }}" id="id" />
                    <label>Course Name</label></br>
                    <input type="text" name="name" id="name" value="{{ $course->name }}"
                        class="form-control"></br>
                    <label>Syllabus</label></br>
                    <input type="text" name="syllabus" id="syllabus" value="{{ $course->syllabus }}"
                        class="form-control"></br>
                    <label>Duration</label></br>
                    <input type="text" name="duration" id="duration" value="{{ $course->duration }}"
                        class="form-control"></br>
                    <input type="submit" value="Update Course" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
