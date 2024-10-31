@include('header')
<head>
    <title>{{ $title }}</title>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="description" content="Enhance your outdoor space with BRickStick's expert patio repair and restoration services. Comprehensive solutions for all types of patio issues. Contact us for professional patio repair today!">
    <meta name="keywords" content="patio repair, brick patio repair, stone patio repair, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="canonical" href="{{ url()->current() }}">
</head>
<header class="services-header">
    <div class="servicesheader-content">
        <h1>Patio Repair and Restoration Services</h1>
        <div class="line"></div>
    </div>
</header>

<section class="services">
    <div class="services-content">
        <h2>Patio Repair and Restoration Services</h2>
        <div class="line"></div>
        <p>At BRickStick, we specialize in comprehensive repair and restoration services for patios made of brick or stone. Our team is dedicated to bringing your outdoor space back to life, ensuring both functionality and aesthetic appeal. Whether your patio has been damaged by weather, wear and tear, or structural issues, we have the expertise to handle it all.</p>
        <h3>Why Choose Our Repair Services?</h3>
    </div>
    
    <div class="services-row">
        <div class="services-box">
            <h3>Comprehensive Solutions</h3>
            <p>From minor crack repairs to complete overhauls, we address all aspects of brick and stone patio restoration, ensuring your outdoor space is safe and visually appealing.</p>
        </div>
        <div class="services-box">
            <h3>Enhanced Safety</h3>
            <p>We focus on repairing and reinforcing your patio to prevent accidents and injuries, providing you with peace of mind.</p>
        </div>
        <div class="services-box">
            <h3>Visual Appeal</h3>
            <p>Our meticulous attention to detail ensures that your patio looks as good as new, enhancing the overall beauty of your property.</p>
        </div>
        <div class="services-box">
            <h3>Durability</h3>
            <p>We use high-quality materials and advanced techniques to provide long-lasting results that withstand the test of time and the elements.</p>
        </div>
    </div>
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickStick, we prioritize quality craftsmanship and customer satisfaction. Our experienced technicians carefully assess each project, providing tailored solutions that meet your specific needs. We pride ourselves on our transparent communication and commitment to delivering outstanding results. Contact us today for a consultation, and let us restore and enhance your patio with precision and care.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/gallery-img/patio/patio2.webp') }}" alt="Patio Repair and Restoration Services">
        </div>
    </div>
</section>

<section class="explore">
    <div class="explore-content">
        <h1>A Real Estate Agent's Best Friend</h1>
        <div class="line"></div>
        <p>Through our experience, we've noticed a common trend in property listings, especially with the outdoor space photos. Often, these pictures are taken from a distance to avoid highlighting any disrepair or moss growth on patios or walkways. By offering small masonry repairs and oxicleaning services, we consistently deliver results that impress buyers, sellers, and listing agents alike.</p>
        <a href="{{ url('about') }}" class="btn explore-btn">About Us</a>
    </div>
</section>

@include('footer')
