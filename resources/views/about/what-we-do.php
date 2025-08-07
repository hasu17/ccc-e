<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What We Do </title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
@include('components.navbar')
<div class="about-us-page">

    {{-- Hero Section --}}
   <section id="what-we-do" class="what-we-do-section">
  <div class="container">
    <h2 class="section-title">What We Do</h2>
    <p class="section-description">
      We are committed to empowering communities through digital education and technology.
    </p>

    <div class="what-we-do-grid">
      <div class="card">
        <img src="/images/edu-access.png" alt="Education Access">
        <h3>Enhancing Education Access</h3>
        <p>We provide digital tools and platforms to improve access to education in underserved areas.</p>
      </div>

      <div class="card">
        <img src="/images/digital-skills.png" alt="Digital Skills">
        <h3>Building Digital Skills</h3>
        <p>Our training programs equip youth and educators with essential digital skills for the future.</p>
      </div>

      <div class="card">
        <img src="/images/innovation.png" alt="Innovation Support">
        <h3>Supporting Innovation</h3>
        <p>We support research, innovation, and local solutions through digital transformation initiatives.</p>
      </div>
    </div>
  </div>
</section>

@include('components.footer')
</div>
</body>
</html>


