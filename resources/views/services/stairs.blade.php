@include('header')
<head>
    <title>{{ $title }}</title>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta name="description" content="Restore safety, functionality, and aesthetic appeal to your front stairs with BRickStick's expert brick or stone repair services. Comprehensive solutions for all types of stair issues. Contact us for professional front stairs repair today!">
    <meta name="keywords" content="front stairs repair, brick stairs repair, stone stairs repair, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<header class="services-header">
    <div class="servicesheader-content">
        <h1>Front Stairs Brick or Stone Repair Services</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Front Stairs Brick or Stone Repair Services</h2>
        <div class="line"></div>
        <p>At BRickStick, we specialize in expert repair services for front stairs made of brick
            or stone. Whether your stairs are worn from weathering or have structural damage, our skilled
            team is committed to restoring their safety, functionality, and aesthetic appeal.</p>
            <h3>Why Choose Our Repair Services??</h3>
    </div>
    
    <div class="services-row">
        
        <div class="services-box">
            <h3>Comprehensive Solutions</h3>
            <p>From minor repairs to complete restoration, we handle all
                types of brick and stone stair issues.</p>
        </div>
        <div class="services-box">
            <h3>Enhanced Safety</h3>
            <p>Ensure your front stairs are safe and sturdy with our professional
                repairs.</p>
        </div>
        <div class="services-box">
            <h3>Visual Appeal</h3>
            <p>Restore the charm and beauty of your property with meticulous attention
                to detail.</p>
        </div>
            <div class="services-box">
                <h3>Durability</h3>
                <p>Use of high-quality materials and techniques to ensure long-lasting results.</p>
            </div>
    </div>
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickstick, we prioritize quality craftsmanship and customer satisfaction. Our
                experienced technicians assess each project individually and provide tailored solutions to meet
                your specific needs. Contact us today for a consultation and let us repair and enhance your front
                stairs with precision and care.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/gallery-img/stairs/stairs1.webp') }}" alt="Front Stairs Brick or Stone Repair Services">
        </div>
    </div>
</section>

<section class="explore">
    <div class="explore-content">
        <h1>A Real Estate Agent's Best Friend</h1>
        <div class="line"></div>
        <p>Through our experience, we've noticed a common trend in property listings, especially with the front-of-house photos. 
            Often, these pictures are taken from a distance to avoid highlighting any disrepair or moss growth on stairs or walkways.
            By offering small masonry repairs and oxicleaning services, we consistently deliver results that impress buyers, sellers, and listing agents alike.</p>
        <a href="{{url('about')}}" class="btn explore-btn">About Us</a>
    </div>
</section>

@include('footer')