@extends('layouts.master')

@section('title', 'Category')


@section('content')

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('admin/delete-category') }}" method="POST">
                    @csrf

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Category with its Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="category_delete_id" id="category_id">
                        <h5>Are you sure want to Delete this Category with all its Posts. ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

                <table id="myDataTable" class="table table-bordered">
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
                                    <a href="{{ url('admin/edit-category/' . $data->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('admin/delete-category/'. $data->id) }}" class="btn btn-danger">Delete</a> --}}
                                    <button type="button" class="btn btn-danger deleteCategoryBtn"
                                        value="{{ $data->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            // $('.deleteCategoryBtn').click(function(e) {
            $(document).on('click', 'deleteCategoryBtn', function(e) {
                e.preventDefault();

                var category_id = $(this).val();
                $('#category_id').val(category_id);
                $('#deleteModal').modal('show');
            })
        })
    </script>
@endsection
