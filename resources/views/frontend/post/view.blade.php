@extends('layouts.app')

@section('content')
    <div class="py-5 center-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-7 mb-4">
                    <div class="">
                        <div class="card-body">
                            <h1>{!! $post->name !!}</h1>
                            <h6>{{ $post->category->name . '/' . $post->name }}</h6>
                            {!! $post->description !!}
                        </div>
                    </div>
                </div>
            @endsection
