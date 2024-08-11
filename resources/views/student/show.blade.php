@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('students.index') }}">Student
                        Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Student Details</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Student Details</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $student->name }}</h5>
                <p class="card-text">Address : {{ $student->address }}</p>
                <p class="card-text">Mobile : {{ $student->mobile }}</p>
                </hr>
            </div>
        </div>
    </div>
@endsection
