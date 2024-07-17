@include('header')
<head>
    <title>{{ $title }}</title>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta name="description" content="Discover our professional paver walkway restoration services at BRickStick. We specialize in restoring cracked, faded, or uneven walkways, enhancing durability and curb appeal. Contact us for personalized solutions today!">
    <meta name="keywords" content="paver walkway restoration, walkway repair, paver sealing, walkway leveling, outdoor space renovation, masonry repair, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>

<header class="services-header">
    <div class="servicesheader-content">
        <h1>Paver Walkway Restoration Services</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Paver Walkway Restoration Services</h2>
        <div class="line"></div>
        <p>At BRickStick, we specialize in restoring paver walkways to their original beauty
            and functionality. Whether your walkway is cracked, faded, or uneven, our dedicated team is
            here to revitalize it with precision and care.</p>
            <h3>Why Choose Our Restoration Services?</h3>
    </div>
    
    <div class="services-row">
        
        <div class="services-box">
            <h3>Comprehensive Solutions</h3>
            <p>From cleaning and repair to sealing and leveling, we handle
                all aspects of paver walkway restoration.</p>
        </div>
        <div class="services-box">
            <h3>Enhanced Aesthetics</h3>
            <p>Restore the charm and curb appeal of your property with
                professionally restored paver walkways.</p>
        </div>
        <div class="services-box">
            <h3>Improved Durability</h3>
            <p>Utilize high-quality materials and techniques to ensure long-
                lasting results.</p>
        </div>
        <div class="services-box">
            <h3>Customized Approach</h3>
            <p>Tailored solutions to meet your specific needs and preferences.</p>
        </div>
    </div>
    
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickstick, we are committed to delivering superior craftsmanship and customer
                satisfaction. Our experienced technicians assess each project meticulously and provide
                personalized restoration plans to achieve optimal results. Contact us today for a consultation and
                discover how our paver walkway restoration expertise can enhance your outdoor space.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/gallery-img/walkway/walkway11.webp') }}" alt="Paver Walkway Restoration">
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