@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a
                        href="{{ route('enrollments.index') }}">Enrollments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Enrollment</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Add Enrollment</div>
            <div class="card-body">

                <form action="{{ route('enrollments.store') }}" method="post">
                    {!! csrf_field() !!}
                    <label>Enrollment No.</label></br>
                    <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>

                    <label>Batch</label></br>
                    <select class="form-control" name="batch_id" id="batch_id">
                        <option value="">Select Batch</option>
                        @foreach ($batches as $batch)
                            <option value="{{ $batch->id }}">
                                {{ $batch->name }}</option>
                        @endforeach
                    </select><br>

                    <label>Student</label></br>
                    <select class="form-control" name="student_id" id="student_id">
                        <option value="">Select Student</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">
                                {{ $student->name }}</option>
                        @endforeach
                    </select><br>

                    <label>Join Date</label></br>
                    <input type="date" name="join_date" id="join_date" class="form-control"></br>

                    <label>Fee</label></br>
                    <input type="text" name="fee" id="fee" class="form-control"></br>

                    <input type="submit" value="Save" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
