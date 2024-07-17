<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expert indoor and outdoor fireplace construction services at BRickStick. Elevate your living space with functional and stylish fireplaces tailored to enhance your home. Comprehensive solutions from design to installation, utilizing quality materials and professional expertise.">
    <meta name="keywords" content="fireplace construction, indoor fireplace, outdoor fireplace, fireplace design, fireplace installation, BRickStick">
    <meta name="author" content="BRickStick">
    <title>{{ $title }}</title>
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<body>
    @include('header')

    <header class="services-header">
        <div class="servicesheader-content">
            <h1>Indoor and Outdoor Fireplace Construction</h1>
            <div class="line"></div>
        </div>
    </header>

    <section class="services">
        <div class="services-content">
            <h2>Indoor and Outdoor Fireplace Construction</h2>
            <div class="line"></div>
            <p>Elevate your living space with BRickStick's expert indoor and outdoor fireplace construction services. Whether you envision a cozy indoor hearth or a captivating outdoor fire feature, our skilled team specializes in creating functional and stylish fireplaces tailored to enhance your home.</p>
            
            <h3>Why Choose Our Services?</h3>
        </div>

        <div class="services-row">
            <div class="services-box">
                <h3>Comprehensive Solutions</h3>
                <p>From initial design concepts to final installation, we provide full-service fireplace construction.</p>
            </div>
            <div class="services-box">
                <h3>Custom Designs</h3>
                <p>Personalize your fireplace with a range of materials and styles to complement your interior or outdoor space.</p>
            </div>
            <div class="services-box">
                <h3>Quality Materials</h3>
                <p>Utilize premium materials and craftsmanship for durability, safety, and aesthetic appeal.</p>
            </div>
            <div class="services-box">
                <h3>Professional Expertise</h3>
                <p>Our experienced team ensures precise construction and adherence to building codes for reliable performance.</p>
            </div>
        </div>

        <div class="our-approach">
            <div class="approach-content">
                <h2>Our Approach</h2>
                <p>At BRickStick, we are committed to delivering excellence in fireplace construction. Whether for indoor warmth or outdoor ambiance, our meticulous planning and attention to detail guarantee superior results. Contact us today to discuss your fireplace project and discover how we can transform your living spaces.</p>
            </div>
            <div class="approach-image">
                <img src="{{ asset('img/services-img/fireplace.webp') }}" alt="">
            </div>
        </div>
    </section>

    <section class="explore">
        <div class="explore-content">
            <h1>A Real Estate Agent's Best Friend</h1>
            <div class="line"></div>
            <p>Through our experience, we've noticed a common trend in property listings, especially with the front-of-house photos. Often, these pictures are taken from a distance to avoid highlighting any disrepair or moss growth on stairs or walkways. By offering small masonry repairs and oxicleaning services, we consistently deliver results that impress buyers, sellers, and listing agents alike.</p>
            <a href="{{ url('about') }}" class="btn explore-btn">About Us</a>
        </div>
    </section>

    @include('footer')
</body>
</html>
