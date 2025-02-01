@extends('layouts.master')

<s>
    @section('title', 'Category')
</s>

@section('content')

    <div class="container-fluid px-4 p-5">
        <div class="card">
            <div class="card-header">
                <h4>
                    View Category
                    <a href={{ url('admin/add-category') }} class="btn btn-primary float-end">New category</a>
                </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/' . $data->image) }}" width="50px" height="50px"
                                        alt="img">
                                </td>
                                <td>{{ $data->status == '1' ? 'hidden' : 'shown' }}</td>
                                <td>
                                    <a href="{{ url('admin/edit-category/'. $data->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-category/'. $data->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
