<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCC-E</title>
   <link rel="stylesheet" href="{{ asset('style.css') }}">


   

</head>
<body>
 {{-- Include navbar --}}
    @include('components.navbar')
    @yield('content')

    {{-- Scripts Section --}}
    @yield('scripts')
     
    {{-- Include footer --}}
    @include('components.footer')
</body>
</html>
