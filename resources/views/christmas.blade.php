@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="{{ asset('css/christmas.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>
<body>
<div class="hero-section" >
    <div class="snowflakes">
    <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
        <div class="snowflake">❄</div>
    </div>
    <h1 class="title" data-aos="zoom-in">The Curb Appeal Guys Lighting</h1>
    <p class="subtitle" data-aos="fade-in" data-aos-delay="400">May Your Season Be Bright!</p>
    <a href="#services" class="cta-button" data-aos="zoom-in" data-aos-delay="600">Explore Now</a>
</div>

<div class='main-flex'>
<img src="{{ asset('img/homeImage4.jpeg') }}" alt="Maintenance & Support" data-aos="fade-right" class="mainImage">
<img src="{{ asset('img/homeImage5.jpeg') }}" alt="Maintenance & Support" data-aos="fade-left" class="mainImage">
</div>

<div id="services" class="services-section" data-aos="fade-up">
    <h2>Christmas Lights Installation Services</h2>
    <p class="services-intro">Transform your home into a winter wonderland with our expert Christmas lights installation services!</p>
    <div class="service-grid">

        <div class="service-card left" data-aos="fade-up">
            <img src="{{ asset('img/homeImage3.jpeg') }}" alt="Professional Installation" class="service-image">
            <div class="service-info">
                <h3 class="service-name">Installation and maintenance </h3>
                <p class="service-description">We provide professional installation of lights, ensuring safety and aesthetics.
It also includes to check and replace any burned out bulbs or faulty connections during the season</p>
                <a href="#booking" class="buy-button" data-aos="fade-up">Book Now</a>
            </div>
        </div>        

        <div class="service-card left" data-aos="fade-up">
            <img src="{{ asset('img/homeImage2.jpeg') }}" alt="Custom Light Designs" class="service-image">
            <div class="service-info">
                <h3 class="service-name">Bushes trees and walkways </h3>
                <p class="service-description">We also decorating bushes trees and walkways with Christmas lights and it creates more inviting atmosphere for your holiday display</p>
                <a href="#booking" class="buy-button" data-aos="fade-up">Book Now</a>
            </div>
        </div>        

        <div class="service-card left" data-aos="fade-up">
            <img src="{{ asset('img/setup.webp') }}" alt="Maintenance & Support" class="service-image">
            <div class="service-info">
                <h3 class="service-name">Takedown and Storage</h3>
                <p class="service-description">We provide a service for safely taking down lights and storing them for clients until the next season.</p>
                <a href="#booking" class="buy-button" data-aos="fade-up">Book Now</a>
            </div>
        </div>        
    </div>
</div>

<div class='main-flex'>
<img src="{{ asset('img/homeImage6.jpeg') }}" alt="Maintenance & Support" data-aos="fade-right"  class="mainImage">
<img src="{{ asset('img/homeImage7.jpeg') }}" alt="Maintenance & Support" data-aos="fade-left" class="mainImage">
</div>


<div id="booking" class="booking-section" data-aos="fade-up">
    <h2 data-aos="zoom-in">Book Your Installation</h2>
    <p data-aos="zoom-in">Contact us today to schedule your Christmas lights installation!</p>
    <a href="{{ url('booking') }}" class="cta-button" data-aos="zoom-in">Contact Us</a>
</div>

<div class="shining-box" data-aos="fade-up"></div>

@include('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: false,
  });
</script>
</body>
</html>
