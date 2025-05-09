@extends('layouts.master')

@section('title', 'Posts')


@section('content')

    <div class="container-fluid px-4 p-5">
        <div class="card">
            <div class="card-header">
                <h4>
                    View Posts
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Posts</a>
                </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Post Name</th>
                            <th>status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/edit-post/' . $item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-post/' . $item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection
