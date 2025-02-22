@extends('layouts.app')

@section('content')
    <div class="py-5 center-content">
        <div class="container">
            <div class="category-heading text-center p-3">
                <h1>{!! $post->name !!}</h1>
            </div>
            <div class="mt-3">
                <h6>{{ $post->category->name . '/' . $post->name }}</h6>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            {!! $post->description !!}
                        </div>
                    </div>
                </div>
            @endsection
