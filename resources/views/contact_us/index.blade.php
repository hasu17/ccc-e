@extends('layouts.app')


@section('content')
    @include('contact_us.contact') <!-- just a section -->
@endsection
@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
@section('styles')
   <link rel="stylesheet" href="{{ asset('style.css') }}">


@endsection