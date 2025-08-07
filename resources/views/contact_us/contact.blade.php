<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_Us</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
   
  
</head>
<body>
    
@include('components.navbar')
<section class="hero-contact-us" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
    <h1>Contact Us</h1>
</section>

<section class="contact-info-cards">
    <div class="card">
        <div class="card-icon">
            <img src="{{ asset('images/icons/location.svg') }}" alt="Location Icon">
        </div>
        <h3>Our Office Location</h3>
        <p>Luwum Street, Opposite Grand Corner,<br>Kampala, Uganda</p>
    </div>
    <div class="card">
        <div class="card-icon">
            <img src="{{ asset('images/icons/mail.svg') }}" alt="Email Icon">
        </div>
        <h3>Email Us</h3>
        <p>You can send us email at<br>info@orgname.com</p>
    </div>
    <div class="card">
        <div class="card-icon">
            <img src="{{ asset('images/icons/phone.svg') }}" alt="Phone Icon">
        </div>
        <h3>Call Us</h3>
        <p>You can also call us at<br>+256 776 250 647</p>
    </div>
</section>

<section class="contact-form-section">
    <div class="form-container">
        <form class="contact-form" method="post" action="#">
            <div class="form-grid">
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email-address">Email Address</label>
                    <input type="email" id="email-address" placeholder="Enter Your Email Address" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" required>
                        <option value="">Select Country</option>
                        <option value="ethiopia">Ethiopia</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" id="phone-number" placeholder="(+251)" required>
                </div>
                <div class="form-group message-group">
                    <label for="message">Message</label>
                    <textarea id="message" rows="5" placeholder="Write Message" required></textarea>
                </div>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
            @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif
        </form>
    </div>
</section>

<section class="map-section">
    <div class="map-placeholder">
        MAP
    </div>
</section>
@include('components.footer')
</body>
</html>