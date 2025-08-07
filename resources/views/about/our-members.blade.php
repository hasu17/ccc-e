<!-- @extends('layouts.app')

@section('title', 'Our Members') {{-- Good practice to set the page title --}}

@section('content')
<div class="our-members-page">

    {{-- Hero Section --}}
    <section class="hero bg-cover bg-center text-white p-10" style="background-image: url('/images/members-bg.jpg')">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Our Members</h1>
            <a href="#" class="btn bg-green-700 text-white px-4 py-2 mt-4 inline-block">Request for Membership</a>
            <div class="breadcrumbs mt-4 text-sm">
                <a href="{{ route('home') }}">Home</a> &rarr;
                <a href="{{ route('about.index') }}">About</a> &rarr; {{-- Assuming 'about.index' is the main about page --}}
                <span class="text-gray-300">Our Members</span>
            </div>
        </div>
    </section>

    {{-- Members Grid --}}
    <section class="members-section py-10 bg-gray-50">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            {{--
                This loop expects a $members variable to be passed from the controller.
                Make sure your route or controller passes this data, e.g.,
                return view('About Us.our-members', compact('members'));
            --}}
            @foreach ($members as $member)
                <div class="member-card text-center">
                    <a href="{{ $member['link'] }}" target="_blank">
                        <div class="w-full h-40 bg-gray-200 flex items-center justify-center">
                            <img src="{{ $member['logo'] }}" alt="Logo" class="h-20 object-contain">
                        </div>
                    </a>
                    <div class="bg-green-800 text-white py-2 mt-2 font-semibold">
                        {{ $member['name'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection -->
<!-- 
@extends('layouts.app')

@section('title', 'Our Members')

@section('content')
<div class="our-members-page">

    {{-- Hero Section --}}
    <section class="hero bg-cover bg-center text-white py-16" style="background-image: url('/images/members-bg.jpg')">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Our Members</h1>
            <a href="#" class="bg-green-700 hover:bg-green-800 text-white py-2 px-4 rounded">
                Request for Membership
            </a>
            <div class="mt-4 text-sm text-white/70">
                <a href="{{ route('home') }}">Home</a> →
                <a href="{{ route('about.index') }}">About</a> →
                <span class="text-white">Our Members</span>
            </div>
        </div>
    </section>

    {{-- Members Grid --}}
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($members as $member)
                <div class="text-center">
                    <a href="{{ $member['link'] }}" target="_blank">
                        <div class="h-40 bg-gray-200 flex items-center justify-center">
                            <img src="{{ $member['logo'] }}" alt="Logo" class="h-20 object-contain" />
                        </div>
                    </a>
                    <div class="bg-green-800 text-white py-2 mt-2 font-semibold">
                        {{ $member['name'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection -->
