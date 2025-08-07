<!-- Connect it to the Email -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
<section class="contact-section">
    <div class="contact-form-container">
        <div class="contact-form-wrapper">
            <h2 class="section-title">Send Message</h2>
            <!-- Success Message -->
@if(session('success'))
    <div style="color: white; background-color: green; padding: 10px; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
@endif

<!-- Contact Form -->
<form class="contact-form" method="POST" action="{{ route('contact.submit') }}">

    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="tel" name="phone" placeholder="Phone Number" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="message" placeholder="Write Message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
</form>

        </div>
        <div class="map-placeholder">
            MAP
        </div>
    </div>
</section>

</body>
</html>

