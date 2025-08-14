<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nav Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
  <!-- <a href="{{ route('contact.page') }}">Contact</a> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
</head>
<body>
        <!-- NAVIGATION -->
        <nav class="navbar">
    
            <div class="nav-container">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
                <ul class="nav-links" id="navLinks">
                     <li><a href="{{ route('home') }}">Home</a></li>

        <li class="dropdown">
              <a href="{{ route('about.index') }}">About &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('about.about_us') }}">About Us</a></li>
                     <li><a href="{{ route('about.what-we-do') }}">What We Do</a></li>

                   <li><a href="#">Our Team</a></li>
                    <li><a href="#">Our Members</a></li>
                </ul>
        </li>
        <li class="dropdown">
<a href="{{ route('news-events.index') }}">News & Events &#9662; </a>

            <ul class="dropdown-menu">
<li><a href="{{ route('news.index') }}">News</a></li>
<li><a href="{{ route('events.index') }}">Events</a></li>
            </ul>
        </li>

                    <li class="dropdown">
    <a href="#">Resources  &#9662;</a>
    <ul class="dropdown-menu">
        <li><a href="#">Reports</a></li>
        <li><a href="#">Publications</a></li>
        <li><a href="#">Media</a></li>
    </ul>
</li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Opportunities</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact</a></li>

                </ul>
                <!-- Hamburger -->
                <div class="hamburger" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            
        </nav>



    <!-- JavaScript -->
    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('show');
        }
    </script>
</body>
</html>
