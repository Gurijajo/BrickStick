@include('header')
<head>
    <title>{{ $title }}</title>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta name="description" content="Discover BRickStick's expert stone-wall repair and new construction services. We specialize in enhancing both the beauty and structural integrity of properties with skilled craftsmanship and quality materials. Contact us for customized stone-wall solutions today!">
    <meta name="keywords" content="stone-wall repair, new construction services, stone masonry, stone wall restoration, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>

<header class="services-header">
    <div class="servicesheader-content">
        <h1>Stone-Wall Repair and New Construction Services</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Stone-Wall Repair and New Construction Services</h2>
        <div class="line"></div>
        <p>At BRickStick, we specialize in expert stone-wall repair and new construction services designed to enhance both the beauty and structural integrity of your property. Whether repairing existing stone walls or constructing new ones, our dedicated team ensures precision and durability.</p>
        <h3>Why Choose Our Services?</h3>
    </div>
    
    <div class="services-row">
        <div class="services-box">
            <h3>Expert Craftsmanship</h3>
            <p>Skilled in both traditional and modern techniques for superior stone-wall construction and repair.</p>
        </div>
        <div class="services-box">
            <h3>Customized Designs</h3>
            <p>Create bespoke stone walls tailored to complement your property's unique style and architecture.</p>
        </div>
        <div class="services-box">
            <h3>Quality Materials</h3>
            <p>Utilize high-quality stone and materials for lasting beauty and resilience.</p>
        </div>
        <div class="services-box">
            <h3>Comprehensive Solutions</h3>
            <p>From foundation repair to new wall construction, we provide full-service solutions to meet your needs.</p>
        </div>
    </div>
    
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickStick, we approach each stone-wall project with meticulous attention to detail and a commitment to 
                exceeding client expectations. Our tailored approach ensures your satisfaction from concept to completion. 
                Contact us today to discuss your stone-wall needs and explore how we can enhance your outdoor space.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/services-img/stone-wall.webp') }}" alt="Stone-Wall Repair and New Construction Services">
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