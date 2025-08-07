@extends('layouts.app')


@section('content')
    @include('news-events.news')
    @include('news-events.events')

@endsection
@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
@section('styles')
   <link rel="stylesheet" href="{{ asset('style.css') }}">


@endsection