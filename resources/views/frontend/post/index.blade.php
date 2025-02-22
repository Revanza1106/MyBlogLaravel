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
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $postitem->name }}</h5>
                                <p class="card-text">Oleh <strong>{{ $postitem->user->name }}</strong></p>
                                <p class="card-text">Dipublish pada: {{ date('d F Y', strtotime($postitem->created_at)) }}</p>
                                <p class="card-text">Kategori: {{ $category->name }}</p>
                                <a href="{{ url('category/' . $category->slug . '/' . $postitem->slug) }}" class="btn btn-primary">Read More</a>
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
                <div class="your-paginate ">
                    {{ $post->links() }}
                    </div>
            </div>
        </div>
    </div>
@endsection
