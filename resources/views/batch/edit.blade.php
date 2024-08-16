@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('batches.index') }}">Batches</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Batch Details
                </li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">Edit Batch Details</div>
            <div class="card-body">

                <form action="{{ route('batches.update', $batch->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" name="id" id="id" value="{{ $batch->id }}" id="id" />
                    <label>Batch Name</label></br>
                    <input type="text" name="name" id="name" value="{{ $batch->name }}"
                        class="form-control"></br>
                    <label>Course Name</label></br>
                    <select class="form-control" name="course_id" id="course_id">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" @if ($course->id == $batch->course_id) selected @endif>
                                {{ $course->name }}</option>
                        @endforeach
                    </select><br>
                    <label>Start Date</label></br>
                    <input type="date" name="start_date" id="start_date" value="{{ $batch->start_date }}"
                        class="form-control"></br>
                    <input type="submit" value="Update Batch" class="btn btn-success"></br>
                </form>

            </div>
        </div>
    </div>
@endsection
