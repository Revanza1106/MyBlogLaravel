@extends('layouts.master')

@section('title', 'Users')


@section('content')

    <div class="container-fluid px-4 p-5">
        <div class="card">
            <div class="card-header">
                <h4>
                    View Users
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Edit</th>
                        </tr>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role_as == '1' ? 'Admin' : 'Users' }}</td>
                                <td>
                                    <a href="{{ url('admin/user/' . $item->id) }}" class="btn btn-success">Edit</a>
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
