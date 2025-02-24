@extends('layouts.app')
@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")

@section('content')
    <div class="py-5 center-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">

                            <h1>{!! $post->name !!}</h1>
                            <h6>{{ $post->category->name . '/' . $post->name }}</h6>

                            {{-- <div class="advertisement mb-4 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Iklan 1</h5>
                                        <p class="card-text">Tempat untuk iklan Anda di bawah judul.</p>
                                        <img src="https://via.placeholder.com/728x90" alt="Iklan" class="img-fluid">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="post-content">
                                {!! $post->description !!}
                            </div>

                            {{-- <div class="advertisement mt-4 text-center">
                                <div class="card">  
                                    <div class="card-body">
                                        <h5 class="card-title">Iklan 3</h5>
                                        <p class="card-text">Tempat untuk iklan Anda di akhir paragraf.</p>
                                        <img src="https://via.placeholder.com/728x90" alt="Iklan" class="img-fluid">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h4>Latest Posts</h4>
                                </div>
                                <div class="card-body">
                                    @foreach ($latest_posts as $latest_post_item)
                                        <a href="{{ url('category/' . $latest_post_item->category->slug . '/' . $latest_post_item->slug) }}"
                                            class="text-decoration-none">
                                            <h6>{{ $latest_post_item->name }}</h6>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
