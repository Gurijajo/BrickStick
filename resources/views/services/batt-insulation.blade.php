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
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expert BATT insulation installation services at BRickStick. Enhance comfort and energy efficiency with fiberglass or mineral wool BATT insulation in walls, ceilings, and floors. Reduce heating costs, enhance acoustic comfort, and choose eco-friendly materials.">
    <meta name="keywords" content="BATT insulation installation, BATT insulation services, fiberglass insulation, mineral wool insulation, thermal performance, acoustic comfort, eco-friendly insulation, BRickStick">
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
            <h1>BATT Insulation Installation Services</h1>
            <div class="line"></div>
        </div>
    </header>

    <section class="services">
        <div class="services-content">
            <h2>BATT Insulation Installation Services</h2>
            <div class="line"></div>
            <p>Enhance the comfort and energy efficiency of your home or business with our expert BATT insulation installation services. BATT insulation, crafted from fiberglass or mineral wool, is a versatile solution known for its thermal performance and cost-effectiveness. At BRickStick, we specialize in professionally installing BATT insulation in walls, ceilings, and floors to maximize your building's insulation capabilities.</p>
            
            <h3>Why Choose Our BATT Insulation?</h3>
        </div>

        <div class="services-row">
            <div class="services-box">
                <h3>Efficient Thermal Barrier</h3>
                <p>Reduce heating and cooling costs year-round.</p>
            </div>
            <div class="services-box">
                <h3>Noise Reduction</h3>
                <p>Enhance acoustic comfort by minimizing sound transmission.</p>
            </div>
            <div class="services-box">
                <h3>Custom Fit</h3>
                <p>Precision-cut BATTs ensure a snug fit around obstructions.</p>
            </div>
            <div class="services-box">
                <h3>Environmentally Friendly</h3>
                <p>Choose eco-conscious materials for sustainable insulation solutions.</p>
            </div>
        </div>

        <div class="our-approach">
            <div class="approach-content">
                <h2>Our Approach</h2>
                <p>At BRickstick, we prioritize quality and customer satisfaction. Our experienced technicians meticulously install BATT insulation to optimize performance and durability, ensuring every corner of your property benefits from improved insulation.</p>
            </div>
            <div class="approach-image">
                <img src="{{ asset('img/services-img/BATTINSULATION.webp') }}" alt="">
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
