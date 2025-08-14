<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
@include('components.navbar')
<div class="about-us-page">

    {{-- Hero Section --}}
    <section class="hero-section text-white py-20 px-4 relative">
        <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Overlay for text readability -->
        <div class="container mx-auto relative z-10 text-center">
            <h1 class="text-5xl font-bold mb-4">About Us</h1>
        </div>
        <!-- Breadcrumbs -->
       
<div class="breadcrumbs">
    <a href="{{ route('home') }}" class="hover:underline">Home</a>
    <!-- <span class="font-semibold">About</span> -->
</div>

    </section>

    {{-- Our History Section --}}
    <section class="history-section py-12 px-4 bg-white">
        <div class="container mx-auto max-w-3xl">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Our History</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                The Consortium for Climate Change-Ethiopia (CCC-E) was established in 2009 as the Ethiopian Civil Society Network on Climate Change (ECSCC). A coalition of organizations committed to addressing climate change.
            </p>
            <p class="text-gray-700 leading-relaxed mb-4">
                Initially functioning as an informal network, CCC-E gained legal recognition in November 2010 under the Federal Charities and Societies Agency (CHSA). In 2015, with the implementation of the Civil Societies Proclamation No. 621/2009, CCC-E was re-registered by the Authority for Civil Society Organizations (ACSO) as a local organization, operating under registration number 3305.
            </p>
            <p class="text-gray-700 leading-relaxed">
                Under CCC-E serves as Ethiopia's Designated National Platform (DNP) for the Pan African Climate Justice Alliance (PACJA), connecting Ethiopia's climate efforts to a continental movement.
            </p>
        </div>
    </section>

   
    <!-- Vision, Mission & Core Values Section -->
<!-- Vision, Mission & Core Values Section -->
<section class="vision-mission-section">
    <div class="container top-row">
        <div class="box">
            <div class="icon-placeholder">
                <img src="{{ asset('images/icons/vision-icon.png') }}" alt="Vision Icon">
            </div>
            <h3>VISION</h3>
            <p>
                A sustainable and climate-resilient Ethiopia, where civil society organizations work collaboratively to promote environmental and ensure equitable resource management.
            </p>
        </div>
        <div class="box">
            <div class="icon-placeholder">
                <img src="{{ asset('images/icons/mission-icon.png') }}" alt="Mission Icon">
            </div>
            <h3>MISSION</h3>
            <p>
                To strengthen the capacity of member organizations and foster collaboration, advocacy, and action to combat climate change, promote sustainable natural resource management, and build a resilient future for Ethiopia.
            </p>
        </div>
    </div>

    <!-- Core Values Box (centered below) -->
    <div class="container bottom-row">
        <div class="box core-box">
            <div class="icon-placeholder">
                <img src="{{ asset('images/icons/core-values-icon.png') }}" alt="Core Values Icon">
            </div>
            <h3>CORE VALUES</h3>
            <p>
                Commitment to integrity, inclusivity, transparency, and collaboration in all climate change initiatives.
            </p>
        </div>
    </div>
</section>


    {{-- Ethiopia Map Section (Placeholder) --}}
    <section class="map-section py-12 px-4 bg-white">
        <div class="container mx-auto">
            <div class="bg-gray-200 h-96 flex items-center justify-center rounded-lg shadow-md">
                <span class="text-gray-600 text-xl font-semibold">Ethiopia Map Placeholder</span>
            </div>
        </div>
    </section>
@include('components.footer')
</div>
</body>
</html>


