@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('teachers.index') }}">Teacher
                        Applications</a></li>
                <li class="breadcrumb-item active" aria-current="page">Teacher Details
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Teacher Details</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $teacher->name }}</h5>
                <p class="card-text">Address : {{ $teacher->address }}</p>
                <p class="card-text">Mobile : {{ $teacher->mobile }}</p>
                </hr>
            </div>
        </div>
    </div>
@endsection
