<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="Expert masonry repair and restoration services by BRickStick. Specializing in chimney repair, paver walkway restoration, and masonry cleaning. Contact us today!">
    <meta name="keywords" content="BRickStick, masonry repair, chimney repair, masonry cleaning, paver walkway restoration, stone veneer installation, design-build services">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="preload" as="image" href="{{ asset('img/service-img/design-build.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    @include('header')
</head>
<body> 
    <header class="home-header">
        <div class="header-content">
            <h2>Your Expert in Masonry Repair and Restoration</h2>
            <div class="line"></div>
            <h1>BRickStick</h1>
            <a href="booking" class="btn header-btn">Get a Quote!</a>
        </div>
    </header>

    <section class="home-service"> 
        <div class="title">
            <h1>Our Services</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="home-service-img"><img src="{{ asset('img/gallery-img/walkway/walkway11.webp') }}" alt="Paver Walkways"></div>
                <h4>Paver Walkways</h4>
                <p>At BRickStick, our approach is precise: we focus only on areas needing attention, akin to a dentist treating decay. After pinpointing damaged mortar, we meticulously clean with Oxiclean to ensure optimal adhesion between old and new materials, transforming curb appeal dramatically. Using polymer-modified mortar applied via a mortar or grout bag sets us apart; unlike traditional methods, it enhances durability and aesthetics immediately. Unlike competitors, we avoid harmful acid washing, completing our process swiftly—often within a day—without compromising existing bricks' integrity.</p>
                <a href="{{ url('services') }}" class="btn home-btn">More Services</a>
            </div>
            <div class="col">
                <div class="home-service-img"><img src="{{ asset('img/gallery-img/stairs/stairs3.webp') }}" alt="Stairs"></div>
                <h4>Stairs</h4>
                <p>The paver restoration process at BRickStick starts with an oxiclean foam bath to properly marinate the existing pavers, followed by pressure washing with a turbo nozzle. This process removes all moss, dirt, and failing polymeric sand from the complete depth of the paver. We then replace, repair, and re-level the areas that are not performing properly. The best polymeric sand your money can buy is added to the joints. After applying water, the new polymeric sand dries hard, ensuring the pavers stay in place and remain moss and weed-free for years to come.</p>
                <a href="{{ url('services') }}" class="btn home-btn">More Services</a>
            </div>
        </div>
    </section>

    <section class="home-scroller">
        <div class="scroller" data-speed="fast">
            <ul class="tag-list scroller__inner">
                <li class="tag-item"><img src="{{ asset('img/content-img/stairs.svg') }}" alt="Stairs"> Stairs</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/fireplace.svg') }}" alt="Fireplace"> Fireplace</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/Brick.svg') }}" alt="Masonry"> Masonry</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/stone-path.svg') }}" alt="Stone Path"> Stone Path</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/design-build.svg') }}" alt="Design-Build"> Design-Build</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/stairs.svg') }}" alt="Stairs"> Stairs</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/fireplace.svg') }}" alt="Fireplace"> Fireplace</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/Brick.svg') }}" alt="Masonry"> Masonry</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/stone-path.svg') }}" alt="Stone Path"> Stone Path</li>
                <li class="tag-item"><img src="{{ asset('img/content-img/design-build.svg') }}" alt="Design-Build"> Design-Build</li>
            </ul>
        </div>
    </section>

    <section class="home-gallery">
        <div class="row">
            <div class="col content-col">
                <h1>What We Do Best</h1>
                <div class="line"></div>
                <p>Masonry repair of all types. We clean &amp; repair old stairs and walkways.
                    We combine expert level masonry repair with the power of oxiclean. The final product often
                    times exceeds the customers expectations.
                    In other words BRickStick makes it great AGAIN.</p>
                <a href="{{ url('gallery') }}" class="btn gallery-button">Gallery</a>
            </div>
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="{{ asset('img/gallery-img/walkway/walkway9.webp') }}" alt="Walkway Restoration">
                    <img src="{{ asset('img/gallery-img/walkway/walkway10.webp') }}" alt="Walkway Restoration">
                    <img src="{{ asset('img/gallery-img/walkway/walkway8.webp') }}" alt="Walkway Restoration">
                    <img src="{{ asset('img/gallery-img/masonry-cleaning/masonry-cleaning.webp') }}" alt="Masonry Cleaning">
                </div>
            </div>
        </div>
    </section>

    <section class="home-sales">
        <ul class="service-list">
            <li><i class="bi bi-clock"></i><span>24/7 Hours Online</span></li>
            <li><i class="bi bi-credit-card
"></i><span>Card Payment</span></li>
            <li><i class="bi bi-radar"></i><span>Fast Work</span></li>
            <li><i class="bi bi-map"></i><span>150MI Range</span></li>
        </ul>
    </section>

    <section class="explore">
        <div class="explore-content">
            <h1>A Real Estate Agent's Best Friend</h1>
            <div class="line"></div>
            <p>Through our experience, we've noticed a common trend in property listings, especially with the front-of-house photos. 
                Often, these pictures are taken from a distance to avoid highlighting any disrepair or moss growth on stairs or walkways.
                By offering small masonry repairs and oxicleaning services, we consistently deliver results that impress buyers, sellers, and listing agents alike.</p>
            <a href="{{ url('about') }}" class="btn explore-btn">About Us</a>
        </div>
    </section>

    @include('footer')
</body>
</html>
