@include('header')
<head>
    <title>{{ $title }}</title>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta name="description" content="Experience seamless project delivery with BRickStick's design-build services. From conceptualization to completion, we manage both design and construction phases efficiently. Contact us to learn more!">
    <meta name="keywords" content="design-build services, integrated design and construction, collaborative planning, cost efficiency, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<header class="services-header">
    <div class="servicesheader-content">
        <h1>Design-Build Services</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Design-Build Services</h2>
        <div class="line"></div>
        <p>Experience seamless project delivery with our comprehensive design-build services at BRickStick. As your single point of contact throughout the entire process, we streamline
            the collaboration between design and construction to provide you with a cohesive and efficient
            building experience.</p>
            <h3>Why Choose Our Design-Build Services?</h3>
    </div>
    
    <div class="services-row">
        
        <div class="services-box">
            <h3>Integrated Design and Construction</h3>
            <p>From conceptualization to completion, our team
                manages both the design and construction phases of your project.</p>
        </div>
        <div class="services-box">
            <h3>Collaborative Planning</h3>
            <p>Work closely with our architects, engineers, and construction
                professionals to ensure your vision is translated into a practical and aesthetically pleasing
                design.</p>
        </div>
        <div class="services-box">
            <h3>Cost and Time Efficiency</h3>
            <p>Eliminate delays and cost overruns with our streamlined
                approach, where design decisions are informed by construction expertise.</p>
        </div>
            <div class="services-box">
                <h3>Quality Assurance</h3>
                <p>Maintain high standards of craftsmanship and attention to detail
                    throughout every stage of the project.</p>
            </div>
    </div>
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickstick,we have a proven track record of delivering successful design-build
                projects across Boston,MA. Whether you&#39;re planning a residential, commercial, or
                industrial project, trust our experienced team to bring your vision to life with efficiency and
                excellence.
                Contact us today to learn more about how our design-build services can meet your project needs
                and exceed your expectations.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/services-img/design-build.jpg') }}" alt="Design-Build Services">
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