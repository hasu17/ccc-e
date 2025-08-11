@extends('layouts.app')


@section('content')
    @include('home.hero')
    @include('home.who-we-are')
    @include('home.our_partners')
    @include('home.recent-news')
    @include('home.status')
    <!-- @include('home.announcements') -->
    @include('home.contact-us') <!-- just a section -->
@endsection
@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
@section('styles')
   <link rel="stylesheet" href="{{ asset('style.css') }}">


@endsection