@include('header')
<head>
    <title>{{ $title }}</title>
     @include('schema')
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="description" content="BRickStick specializes in comprehensive masonry repair, restoration, and renewal services. Enhance your property's beauty and structural integrity with expert solutions for brick, stone, and concrete surfaces. Contact us for professional masonry maintenance and preservation today!">
    <meta name="keywords" content="masonry repair, masonry restoration, masonry renewal, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicesstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="canonical" href="{{ url()->current() }}">
</head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LJWQ85QW8S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LJWQ85QW8S');
    </script>
<header class="services-header">
    <div class="servicesheader-content">
        <h1>Masonry Repair, Restoration &amp; Renewal Services</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Masonry Repair, Restoration &amp; Renewal Services</h2>
        <div class="line"></div>
        <p>At BRickStick, we specialize in comprehensive masonry repair, restoration, and
            renewal services to preserve and enhance the beauty and structural integrity of your property.
            Whether you have brick, stone, or concrete surfaces, our expert team is dedicated to delivering
            exceptional results.</p>
            <h3>Why Choose Our Masonry Services?</h3>
    </div>
    
    <div class="services-row">
        
        <div class="services-box">
            <h3>Repair &amp; Strengthen</h3>
            <p>Address cracks, chips, and structural issues to ensure safety and longevity.</p>
        </div>
        <div class="services-box">
            <h3>Restore Original Charm</h3>
            <p>Revitalize weathered or damaged masonry to its original
                aesthetic appeal.</p>
        </div>
        <div class="services-box">
            <h3>Custom Solutions</h3>
            <p>Tailor-made approaches to suit your specific masonry needs and
                architectural style.</p>
        </div>
            <div class="services-box">
                <h3>Preserve Value</h3>
                <p>Enhance property value with professional masonry maintenance and
                    preservation.</p>
            </div>
    </div>
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickstick, we combine extensive experience with state-of-the-art techniques to
                provide superior masonry solutions. From historical landmarks to modern buildings, we treat
                each project with precision and care. Contact us today for a consultation and discover how our
                masonry expertise can benefit your property.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/services-img/masonry-repair.webp') }}" alt="Masonry Repair, Restoration & Renewal Services">
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