@extends('layouts.app')
@section('title', 'Yoru Manga')
@section('meta_description', 'Yoru Manga')
@section('meta_keyword', 'Yoru Manga')

@section('content')


<div class=" py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel carousel owl-theme" aria-label="Category Carousel">
                    @foreach ($all_catgories as $all_cate_item)
                        <div class="item" role="group" aria-label="Category Item">
                            <a href="{{ url('Category/'.$all_cate_item->slug) }}" class="text-decoration-none text-black" aria-label="{{ $all_cate_item->name }}">
                                <div class="card book-card">
                                    <div class="book-cover">
                                        <img src="{{ asset('uploads/category/' . $all_cate_item->image) }}" alt="{{ $all_cate_item->name }}" aria-hidden="true">
                                    </div>
                                    <div class="card-body text-center">
                                        <h4>{{ $all_cate_item->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
