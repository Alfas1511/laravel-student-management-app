@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('enrollments.index') }}">Enrollments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Enrollment Details
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Enrollment Details</div>
            <div class="card-body">
                <h5 class="card-title">Enrollment No. : {{ $enrollment->enroll_no }}</h5>
                <p class="card-text">Batch : {{ $enrollment->getBatch->name }}</p>
                <p class="card-text">Student : {{ $enrollment->getStudent->name }}</p>
                <p class="card-text">Join Date : {{ \Carbon\Carbon::parse($enrollment->join_date)->format('d-m-Y') }}</p>
                <p class="card-text">Fee : {{ $enrollment->fee }}</p>
                </hr>
            </div>
        </div>
    </div>
@endsection
