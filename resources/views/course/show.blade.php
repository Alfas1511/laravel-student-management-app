@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.index') }}">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Course Details
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Course Details</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $course->name }}</h5>
                <p class="card-text">Syllabus : {{ $course->syllabus }}</p>
                <p class="card-text">Duration : {{ $course->duration }}</p>
                </hr>
            </div>
        </div>
    </div>
@endsection
