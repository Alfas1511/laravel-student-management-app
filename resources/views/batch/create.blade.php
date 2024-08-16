@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('batches.index') }}">Batches</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Batch</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Add Batch</div>
            <div class="card-body">

                <form action="{{ route('batches.store') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Batch Name</label></br>
                    <input type="text" name="name" id="name" class="form-control"></br>
                    <label>Course Name</label></br>
                    {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br> --}}
                    <select class="form-control" name="course_id" id="course_id">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">
                                {{ $course->name }}</option>
                        @endforeach
                    </select><br>
                    <label>Start Date</label></br>
                    <input type="date" name="start_date" id="start_date" class="form-control"></br>
                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
