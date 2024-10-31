@include('header')
<head>
    <title>{{ $title }}</title>
     @include('schema')
             <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="preload" as="image" href="{{ asset('img/walpaper3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="Enhance your existing brick fireplace with BRickStick's professional brick or stone veneer installation services. Choose from various veneer options to match your style. Contact us to upgrade your fireplace today!">
    <meta name="keywords" content="brick veneer installation, stone veneer installation, fireplace renovation, BRickStick">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<header class="services-header">
    <div class="servicesheader-content">
        <h1>Brick or Stone Veneer Installation on Existing Brick Fireplaces</h1>
        <div class="line"></div>
    </div>
</header>
 
<section class="services">
    
    <div class="services-content">
        <h2>Brick or Stone Veneer Installation on Existing Brick Fireplaces</h2>
        <div class="line"></div>
        <p>Transform your existing brick fireplace with our professional brick or stone veneer installation
            services at BRickStick. Whether you prefer the rustic charm of brick or the timeless
            elegance of stone, our skilled team specializes in enhancing the aesthetic appeal and functionality
            of your fireplace.</p>
            <h3>Why Choose Our Veneer Installation Services?</h3>
    </div>
    
    <div class="services-row">
        
        <div class="services-box">
            <h3>Customized Design</h3>
            <p>Choose from a variety of brick or stone veneer options to match
                your style and preferences.</p>
        </div>
        <div class="services-box">
            <h3>Enhanced Aesthetics</h3>
            <p>Update and modernize your fireplace with a fresh, new look that
                complements your home decor.</p>
        </div>
        <div class="services-box">
            <h3>Quality Craftsmanship</h3>
            <p>Expert installation techniques ensure a seamless and durable
                finish.</p>
        </div>
            <div class="services-box">
                <h3>Increased Value</h3>
                <p>Add value to your home with an upgraded fireplace that stands out.</p>
            </div>
    </div>
    <div class="our-approach">
        <div class="approach-content">
            <h2>Our Approach</h2>
            <p>At BRickStick, we prioritize craftsmanship and customer satisfaction. Our
                experienced installers meticulously plan and execute each project, ensuring minimal disruption
                and maximum satisfaction. Contact us today to schedule a consultation and explore how our
                brick or stone veneer installation can transform your fireplace.</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('img/services-img/fireplacestone.jpg') }}" alt="Brick or Stone Veneer Installation">
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