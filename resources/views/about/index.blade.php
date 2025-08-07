@extends('layouts.app')


@section('content')
    @include('about.about_us')
    @include('about.what_we_do')
    @include('about.mission-vision')
    @include('about.our-members')
    @include('about.our-team')
    @include('about.pre-registration-form')
    
@endsection
@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
@section('styles')
   <link rel="stylesheet" href="{{ asset('style.css') }}">


@endsection
<!-- @extends('layouts.app')

@section('content')
    @include('about.about_us')
    @include('about.what_we_do')
    @include('about.mission-vision')
    @include('about.our-members')
    @include('about.our-team')
    @include('about.pre-registration-form')
@endsection

@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('style.css') }}">
@endsection -->
