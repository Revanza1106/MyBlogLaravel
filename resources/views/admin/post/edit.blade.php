@extends('layouts.master')


@section('title', 'Edit Post')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>
                    Edit Post
                    <a href="{{ url('admin/posts') }}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ url('admin/update-post/' . $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Post</label>
                        <select name="category_id" required class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach ($category as $cateitem)
                                <option value="{{ $cateitem->id }}"
                                    {{ $post->category_id == $cateitem->id ? 'selected' : '' }}>
                                    {{ $cateitem->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for=""> Name </label>
                        <input type="text" name="name" value="{{ $post->name }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for=""> Slug </label>
                        <input type="text" name="slug" value="{{ $post->slug }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="mySummernote" class="form-control" rows="4">{!! $post->description !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Youtube Link</label>
                        <input type="text" name="yt_iframe" value="{{ $post->yt_iframe }}" class="form-control">
                    </div>

                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $post->meta_title }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows='3' class="form-control">{!! $post->meta_description !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword" rows='3' class="form-control">{!! $post->meta_keyword !!}</textarea>
                    </div>
                    <h4>Status</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked' : '' }} />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary float-end"> Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
