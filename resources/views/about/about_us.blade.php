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
        <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-70 py-3 px-4">
            <div class="container mx-auto text-sm text-gray-200">
                <a href="{{ route('home') }}" class="hover:underline">Home</a> &gt;
                <span class="font-semibold">About</span>
            </div>
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

    {{-- Vision and Mission Section --}}
    <section class="vision-mission-section py-12 px-4 bg-gray-100">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-green-700 mb-4 text-center">VISION</h3>
                <p class="text-gray-700 leading-relaxed text-center">
                    A sustainable and climate-resilient Ethiopia, where civil society organizations work collaboratively to promote environmental and ensure equitable resource management.
                </p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-green-700 mb-4 text-center">MISSION</h3>
                <p class="text-gray-700 leading-relaxed text-center">
                    To strengthen the capacity of member organizations and foster collaboration, advocacy, and action to combat climate change, promote sustainable natural resource management, and build a resilient future for Ethiopia.
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


