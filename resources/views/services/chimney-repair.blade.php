<!DOCTYPE html>
<html lang="en">
<head>
     @include('schema')
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="canonical" href="{{ url()->current() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional chimney repair services at BRickStick. Ensure safety and longevity with our comprehensive chimney cleaning, brick and mortar restoration, and expert inspections. Trust our skilled team for quality craftsmanship and customer satisfaction.">
    <meta name="keywords" content="chimney repair services, chimney cleaning, brick restoration, mortar restoration, chimney inspections, BRickStick">
    <meta name="author" content="BRickStick">
    <title>{{ $title }}</title>
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LJWQ85QW8S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LJWQ85QW8S');
    </script>
<body>
    @include('header')

    <header class="services-header">
        <div class="servicesheader-content">
            <h1>Chimney Repair Services</h1>
            <div class="line"></div>
        </div>
    </header>

    <section class="services">
        <div class="services-content">
            <h2>Chimney Repair Services</h2>
            <div class="line"></div>
            <p>Ensure the safety and longevity of your chimney with our professional chimney repair services at BRickStick. From routine maintenance to extensive repairs, we specialize in addressing a wide range of chimney issues to keep your home or business safe and efficient.</p>
            
            <h3>Why Choose Our Chimney Repair Services?</h3>
        </div>

        <div class="services-row">
            <div class="services-box">
                <h3>Comprehensive Solutions</h3>
                <p>From chimney cleaning to brick and mortar restoration, we handle it all.</p>
            </div>
            <div class="services-box">
                <h3>Quality Craftsmanship</h3>
                <p>Trust our skilled team to deliver lasting results with attention to detail.</p>
            </div>
            <div class="services-box">
                <h3>Safety First</h3>
                <p>Ensure your chimney operates safely with our expert inspections and repairs.</p>
            </div>
            <div class="services-box">
                <h3>Customer Satisfaction</h3>
                <p>We prioritize your satisfaction and strive to exceed your expectations.</p>
            </div>
        </div>

        <div class="our-approach">
            <div class="approach-content">
                <h2>Our Approach</h2>
                <p>At BRickstick, we're committed to excellence in chimney repair. Our certified technicians use advanced techniques and quality materials to restore your chimney's functionality and aesthetic appeal. Contact us today for a consultation and ensure your chimney is in top condition.</p>
            </div>
            <div class="approach-image">
                <img src="{{ asset('img/services-img/chimnay-repair.webp') }}" alt="">
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
