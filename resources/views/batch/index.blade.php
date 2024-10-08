@extends('layout')
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Batches</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h2>Batches</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('batches.create') }}" class="btn btn-success btn-sm" title="Add New Batch">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Batch</th>
                                <th>Start Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($batches as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->getCourse->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->start_date)->format('d-m-Y') }}</td>

                                    <td>
                                        <a href="{{ url('/batches/' . $item->id) }}" title="View Student"><button
                                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>
                                        <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit Student"><button
                                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
