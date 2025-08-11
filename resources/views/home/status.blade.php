<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
    <title>Status</title>
</head>
<body>
    
<section class="status-section"> <!-- Renamed from status-bar for clarity -->
    <div class="status-container">
        <div class="status-item">
            <h3 class="counter" data-target="+10000">0</h3>
            <p>Tree plant</p>
        </div>
        <div class="status-item">
            <h3 class="counter" data-target="+5000">0</h3>
            <p>Beneficiaries</p>
        </div>
        <div class="status-item">
            <h3 class="counter" data-target="10">0</h3>
            <p>Projects</p>
        </div>
        <div class="status-item">
            <h3 class="counter" data-target="15">0</h3>
            <p>Regions</p>
        </div>
        <div class="status-item">
            <h3 class="counter" data-target="+41">0</h3>
            <p>Members</p>
        </div>
        <div class="status-item">
            <h3 class="counter" data-target="50">0</h3>
            <p>Woreda/Zone</p>
        </div>
    </div>
</section>

<script>
    // Your JavaScript for the counter animation
    const counters = document.querySelectorAll('.counter');

    const animateCounter = (entry) => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 100; // Adjust for animation speed

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    requestAnimationFrame(updateCount); // Use requestAnimationFrame for smoother animation
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
            observer.unobserve(counter); // Stop observing once animation starts
        }
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(animateCounter);
    }, {
        threshold: 0.5 // Trigger when 50% of the element is visible
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });
</script>

</body>
</html>