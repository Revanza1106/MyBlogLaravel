@extends('layouts.app')

@section('content')
    <div class="py-5 center-content">
        <div class="container">
            <div class="category-heading text-center p-3">
                <h1>{{ $category->name }}</h1>
            </div>

            <div class="row justify-content-center">
                @forelse ($post as $postitem)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="book-card">
                            <a href="{{ url('Category/' . $category->slug . '/' . $postitem->slug) }}">
                                <img src="{{ $category->image  }}" alt="{{ $postitem->name }}" class="book-cover">
                            </a>
                            <div class="book-info">
                                <a href="{{ url('Category/' . $category->slug . '/' . $postitem->slug) }}" class="text-decoration-none text-dark">
                                    <h4 class="fw-bold">{{ $postitem->name }}</h4>
                                </a>
                                <p class="mb-1">Oleh <strong>{{ $postitem->user->name}}</strong></p>
                                <p class="publish-time">Dipublish pada: {{ date('d F Y', strtotime($postitem->created_at)) }}</p>
                                <span class="category-badge">Kategori: {{ $category->name }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="card card-shadow mt-4">
                            <div class="card-body text-center">
                                <h2>Not Available</h2>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
