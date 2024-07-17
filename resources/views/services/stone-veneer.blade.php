@include('header')
<head>
    <title>{{ $title }}</title>
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta name="description" content="Transform your home's foundation with BRickStick's expert stone veneer installation services. Enhance your property's appeal with durable, stylish stone veneer options. Contact us for customized stone veneer solutions!">
    <meta name="keywords" content="stone veneer installation, foundation stone veneer, stone veneer services, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>

<header class="services-header">
    <div class="servicesheader-content">
        <h1>Adding Stone Veneer to Foundation</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Adding Stone Veneer to Foundation</h2>
        <div class="line"></div>
        <p>Enhance your home's appeal with BRickStick's expert stone veneer installation services for foundations. 
            Whether modernizing or adding rustic charm, our skilled team specializes in transforming foundations 
            into durable and stylish features.</p>
            <h3>Why Choose Our Stone Veneer Services?</h3>
    </div>
    
    <div class="services-row">
        
        <div class="services-box">
            <h3>Comprehensive Solutions</h3>
            <p> From initial consultation to final installation, we offer complete stone veneer solutions.</p>
        </div>
        <div class="services-box">
            <h3>Enhanced Aesthetics</h3>
            <p>Update your property with a fresh, timeless design or restore its original appeal with stone veneer.</p>
        </div>
        <div class="services-box">
            <h3>Durability and Safety</h3>
            <p>Utilize premium materials and techniques for lasting results and improved structural integrity.</p>
        </div>
            <div class="services-box">
                <h3>Customized Designs</h3>
                <p>Tailor-made solutions to complement your home's architectural style and personal preferences.</p>
            </div>
    </div>
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickStick, we're dedicated to excellence in craftsmanship and customer satisfaction. 
                Our experienced team carefully plans each project, ensuring precise installation and superior results. 
                Contact us today for a consultation and discover how our stone veneer services can enhance your home's exterior.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/service-img/stone-veener.webp') }}" alt="Adding Stone Veneer to Foundation">
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
