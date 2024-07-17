@include('header')
<head>
    <title>{{ $title }}</title>
    <meta name="robots" content="index, follow">
    <link rel="preload" as="image" href="{{ asset('img/service-img/design-build.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/gallerystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <meta name="description" content="Explore the recent works of BRickStick, showcasing our expertise in masonry, chimney repair, stone veneer installation, and more. Discover our innovative solutions and commitment to excellence through our gallery of completed projects.">
    <meta name="keywords" content="recent works, masonry repair, chimney repair, stone veneer, fireplace construction, walkway restoration, stair repair, basement services, BATT insulation, design build, stone wall construction, BRickStick">
</head>
<header class="gallery-header">
    <div class="galleryheader-content">
        <h1>Gallery</h1>
        <div class="line"></div>
    </div>
</header>

<section class="gallery">
    <div class="gallery-content">
        <h2>Recent Works</h2>
        <div class="line"></div>
        <p>Explore our recent achievements and see how BRickStick is pushing boundaries. From innovative design concepts to flawless execution, each project showcases our commitment to excellence and creativity. Dive into our portfolio and witness the impact of our solutions.</p>
    </div>
    <div class="gallery-wrapper" id="gallery-wrapper">
        <div class="gallery-container">
            <div class="image-links">
                <span class="gallery-link link-active" data-name="all">All Images</span>
                <span class="gallery-link" data-name="masonry">Masonry</span>
                <span class="gallery-link" data-name="chimney">Chimney</span>
                <span class="gallery-link" data-name="fireplace">Fireplace</span>
                <span class="gallery-link" data-name="stairs">Stairs</span>
                <span class="gallery-link" data-name="walkway">Walkway</span>
                <span class="gallery-link" data-name="basement">Basement</span>
                <span class="gallery-link" data-name="design-build">Design-Build</span>
                <span class="gallery-link" data-name="batt-insulation">BATT Insulation</span>
                <span class="gallery-link" data-name="stone-wall">Stone Wall</span>
            </div>
            <div class="image-wrapper"> 
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace1.webp') }}" alt="Fireplace 1" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace2.webp') }}" alt="Fireplace 2" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace3.webp') }}" alt="Fireplace 3" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace4.webp') }}" alt="Fireplace 4" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace5.webp') }}" alt="Fireplace 5" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace6.webp') }}" alt="Fireplace 6" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace7.webp') }}" alt="Fireplace 7" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace8.webp') }}" alt="Fireplace 8" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/fireplace9.webp') }}" alt="Fireplace 9" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/stone-table1.webp') }}" alt="Stone Table 1" loading="lazy"> </div>
                <div class="recent-img" data-name="fireplace"><img src="{{ asset('img/gallery-img/fireplace/water!.webp') }}" alt="Water!" loading="lazy"> </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway1.webp') }}" alt="Walkway 1"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway2.webp') }}" alt="Walkway 2"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway3.webp') }}" alt="Walkway 3"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway4.webp') }}" alt="Walkway 4"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway5.webp') }}" alt="Walkway 5"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway6.webp') }}" alt="Walkway 6"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway7.webp') }}" alt="Walkway 7"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway8.webp') }}" alt="Walkway 8"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway9.webp') }}" alt="Walkway 9"loading="lazy">   </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway10.webp') }}" alt="Walkway 10"loading="lazy" > </div>
                <div class="recent-img" data-name="walkway"><img src="{{ asset('img/gallery-img/walkway/walkway11.webp') }}" alt="Walkway 11" loading="lazy" > </div>
                <div class="recent-img" data-name="stone-wall"><img src="{{ asset('img/gallery-img/stone-wall/stone-wall1.webp') }}" alt="Stone Wall 1" loading="lazy"> </div>
                <div class="recent-img" data-name="stone-wall"><img src="{{ asset('img/gallery-img/stone-wall/stone-wall2.webp') }}" alt="Stone Wall 2" loading="lazy"> </div>
                <div class="recent-img" data-name="stone-wall"><img src="{{ asset('img/gallery-img/stone-wall/stone-wall3.webp') }}" alt="Stone Wall 3" loading="lazy"> </div>
                <div class="recent-img" data-name="stone-wall"><img src="{{ asset('img/gallery-img/stone-wall/stone-wall4.webp') }}" alt="Stone Wall 4" loading="lazy"> </div>
                <div class="recent-img" data-name="stone-wall"><img src="{{ asset('img/gallery-img/stone-wall/stone-wall5.webp') }}" alt="Stone Wall 5" loading="lazy"> </div>
                <div class="recent-img" data-name="stone-wall"><img src="{{ asset('img/gallery-img/stone-wall/stone-wall6.webp') }}" alt="Stone Wall 6" loading="lazy"> </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs1.webp') }}" alt="Stairs 1" loading="lazy"> </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs2.webp') }}" alt="Stairs 2" loading="lazy"> </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs3.webp') }}" alt="Stairs 3" loading="lazy"> </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs4.webp') }}" alt="Stairs 4" loading="lazy"> </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs5.webp') }}" alt="Stairs 5" loading="lazy">  </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs6.webp') }}" alt="Stairs 6" loading="lazy"> </div>
                <div class="recent-img" data-name="stairs"><img src="{{ asset('img/gallery-img/stairs/stairs7.webp') }}" alt="Stairs 7" loading="lazy"> </div>
                <div class="recent-img" data-name="masonry"><img src="{{ asset('img/gallery-img/masonry-cleaning/masonry1.webp') }}" alt="Masonry 1" loading="lazy"> </div>
                <div class="recent-img" data-name="masonry"><img src="{{ asset('img/gallery-img/masonry-cleaning/masonry2.webp') }}" alt="Masonry 2" loading="lazy"> </div>
                <div class="recent-img" data-name="masonry"><img src="{{ asset('img/gallery-img/masonry-cleaning/masonry3.webp') }}" alt="Masonry 3" loading="lazy"> </div>
                <div class="recent-img" data-name="masonry"><img src="{{ asset('img/gallery-img/masonry-cleaning/masonry-cleaning.webp') }}" alt="Masonry Cleaning" loading="lazy"> </div>
            </div>
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
        <a href="{{ url('about') }}" class="btn explore-btn">About Us</a>
    </div>
</section>

@include('footer')
