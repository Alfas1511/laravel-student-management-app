@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('batches.index') }}">Batches</a></li>
                <li class="breadcrumb-item active" aria-current="page">Batch Details
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Batch Details</div>
            <div class="card-body">
                <h5 class="card-title">Batch Name : {{ $batch->name }}</h5>
                <p class="card-text">Course : {{ $batch->getCourse->name }}</p>
                <p class="card-text">Start Date : {{ \Carbon\Carbon::parse($batch->start_date)->format('d-m-Y') }}</p>
                </hr>
            </div>
        </div>
    </div>
@endsection
