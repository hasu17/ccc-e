@extends('layouts.app')

@section('content')
<div class="news-post-container">
    <img class="news-post-image" src="{{ asset('storage/' . $post->image) }}" alt="">
    <div class="breadcrumb">
        <a href="{{ route('news.index') }}">Home</a> > <span>News</span>
    </div>
    <h1 class="news-post-title">{{ $post->title }}</h1>
    <p class="news-post-body">{{ $post->body }}</p>
</div>
@endsection
