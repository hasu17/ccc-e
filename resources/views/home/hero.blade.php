<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hero Section</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
</head>
<body>
    <div class="hero-container">
        <!-- HERO TEXT OVERLAY -->
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Stand Together for Environment</h1>
            <p>Preserve Green Legacy</p>
        </div>
    </div>



    <!-- JavaScript -->
    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('show');
        }
    </script>
</body>
</html>
