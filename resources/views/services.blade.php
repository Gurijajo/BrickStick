<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <title>{{ $title }}</title>
     @include('schema')
             <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="canonical" href="{{ url()->current() }}">

    <meta name="robots" content="index, follow">
    <meta name="description" content="Discover the power of innovation with BRickStick. From seamless project management to cutting-edge technology solutions, we redefine excellence in masonry repair, chimney services, stone veneer installation, and more.">
    <meta name="keywords" content="masonry repair, chimney repair services, stone veneer installation, masonry cleaning and sealing, paver walkway restoration, brick stairs repair, concrete stair makeover, basement services, BATT insulation, design build services, stone-wall repair, new construction services, BRickStick">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/servicestyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="preload" as="image" href="{{ asset('img/service-img/design-build.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
</head>

<header class="service-header">
    <div class="serviceheader-content">
        <h1>Services</h1>
        <div class="line"></div>
    </div>
</header>

<section class="service">
    <div class="service-content">
        <h2>Our Features & Services</h2>
        <div class="line"></div>
        <p>Discover the power of innovation with BRickStick. From seamless project management to cutting-edge technology solutions, we redefine excellence. Our commitment to quality ensures your success every step of the way. Explore our services tailored to elevate your business and drive growth. Join us on the journey to excellence.</p>
    </div>

    <div class="service-row">
        <div class="service-box">
            <img src="{{ asset('img/service-img/masonry.webp') }}"  alt="Masonry Repair">
            <h3>Masonry Repair, Restoration & Renewal</h3>
            <p>Our skilled team expertly handles all masonry repairs, ensuring the longevity and beauty of your structure. From restoring historic buildings to renewing modern facades, we provide top-notch service with meticulous attention to detail.</p>
            <a href="{{ url('services/masonry-repair') }}" title="Read more about our masonry repair, restoration, and renewal services." class="btn service-button">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/chimney.webp') }}" alt="Chimney Repair">
            <h3>Chimney Repair Services</h3>
            <p>Our team specializes in comprehensive chimney repair services, ensuring safety and functionality. From minor repairs to complete restorations, we handle all aspects with precision and care. Trust us to maintain the integrity and appearance of your chimney, enhancing your home's value and safety.</p>
            <a href="{{ url('services/chimney-repair') }}" class="btn service-button" title="Learn about our chimney repair services, from minor fixes to complete restorations.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/cleaning.webp') }}" alt="Masonry Cleaning and Sealing">
            <h3>Masonry Cleaning and Sealing</h3>
            <p>Our experts provide thorough masonry cleaning and sealing services to protect and enhance your structure. We remove dirt, stains, and pollutants, then apply a high-quality sealant. This ensures long-lasting beauty and durability, safeguarding your masonry against weather and wear.</p>
            <a href="{{ url('services/masonry-cleaning') }}" class="btn service-button" title="Discover our masonry cleaning and sealing services to enhance and protect your structure.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/gallery-img/stairs/stairs8.webp') }}" alt="Front Stairs Repair">
            <h3>Front Stairs Brick or Stone Repair</h3>
            <p>We specialize in repairing brick or stone front stairs, restoring their beauty and safety. Our skilled team addresses all issues, from minor cracks to major structural damage. Trust us to enhance your home's curb appeal and ensure long-lasting durability.</p>
            <a href="{{ url('services/stairs') }}" class="btn service-button" title="Read about our front stairs brick or stone repair services to improve both beauty and safety.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/walkway.webp') }}" alt="Paver Walkway Restoration">
            <h3>Paver Walkway Restoration</h3>
            <p>The paver restoration process starts with an oxiclean foam bath for proper marination. The existing pavers are pressure washed with a turbo nozzle, removing all moss, dirt, and failing polymeric sand.</p>
            <a href="{{ url('services/walkway') }}" class="btn service-button" title="Explore our paver walkway restoration process to rejuvenate your outdoor pathways.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/fireplace-stone.webp') }}" alt="Stone Veneer Installation on Brick Fireplaces">
            <h3>Stone Veneer Installation on Brick Fireplaces</h3>
            <p>We hand-select and process stone veneers before installation. This process includes oxicleaning the stone veneer and then washing with a zero-degree pressure washer tip.</p>
            <a href="{{ url('services/fireplace') }}" class="btn service-button" title="Find out about our stone veneer installation services for brick fireplaces.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/stair-makeover.webp') }}" alt="Precast Concrete Stair Makeovers">
            <h3>Precast Concrete Stair Makeovers</h3>
            <p>Transform your precast concrete stairs with our expert makeovers. We repair, refinish, and enhance their appearance, ensuring safety and style. Our skilled team uses high-quality materials and techniques to deliver durable, attractive results that elevate the look of your property.</p>
            <a href="{{ url('services/stair-makeover') }}" class="btn service-button" title="Discover our precast concrete stair makeovers for improved safety and aesthetics.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/basement.webp') }}" alt="Basement Services">
            <h3>Basement Services</h3>
            <p>Our comprehensive basement services include finishing and repairs. We transform unused spaces into functional areas that add value to your home. Rely on our expertise to enhance your basement's safety, comfort, and aesthetic appeal, ensuring long-term satisfaction and usability.</p>
            <a href="{{ url('services/basement') }}" class="btn service-button" title="Explore our basement services for finishing and repairs to enhance your home's value.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/insulation.webp') }}" alt="BATT Insulation">
            <h3>BATT Insulation</h3>
            <p>Crafted from fiberglass or mineral wool, these pre-cut panels offer superior thermal insulation, effectively minimizing heat transfer and optimizing energy efficiency across various building applications.</p>
            <a href="{{ url('services/batt-insulation') }}" class="btn service-button" title="Learn about our BATT insulation services for improved thermal efficiency.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/design-build.webp') }}" alt="Design Build Services">
            <h3>Design Build Services</h3>
            <p>Our design-build services seamlessly integrate architectural design with construction expertise, ensuring efficient project delivery from concept to completion. Streamlined communication and a unified team approach enhance efficiency and client satisfaction.</p>
            <a href="{{ url('services/design-build') }}" class="btn service-button" title="Discover our design-build services for a streamlined project delivery from concept to completion.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/stone-veener.webp') }}" alt="Adding Stone Veneer to Foundation">
            <h3>Adding Stone Veneer to Foundation</h3>
            <p>Transform your foundation with the timeless elegance of stone veneer. Our expert installation seamlessly blends durability with aesthetic appeal, enhancing curb appeal and increasing the value of your property.</p>
            <a href="{{ url('services/stone-veneer') }}" class="btn service-button" title="Find out how our stone veneer can enhance your foundation's appearance and durability.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/construction.webp') }}" alt="Indoor and Outdoor Fireplace Construction">
            <h3>Indoor and Outdoor Fireplace Construction</h3>
            <p>Expertly crafted indoor hearths and outdoor fireplaces tailored to elevate your spaces with warmth and style. Our designs combine functionality and aesthetic appeal, creating inviting focal points for year-round enjoyment.</p>
            <a href="{{ url('services/const-fireplace') }}" class="btn service-button" title="Explore our indoor and outdoor fireplace construction services for warmth and style.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/service-img/stone-wall.webp') }}" alt="Stone-wall Repair and New Construction">
            <h3>Stone-wall Repair and New Construction Service</h3>
            <p>Transform your outdoor spaces with precision stone-wall repair and new construction services. Our dedicated team combines skilled craftsmanship with top-tier materials to create stunning, durable stone walls that enhance the beauty and value of your property. Explore customized solutions that bring your vision to life.</p>
            <a href="{{ url('services/stone-wall') }}" class="btn service-button" title="Read more about our stone-wall repair and new construction services for enhanced outdoor spaces.">Read More</a>
        </div>
        <div class="service-box">
            <img src="{{ asset('img/gallery-img/patio/patio1.webp') }}" alt="Patio Design and Construction">
            <h3>Patio Design and Construction Service</h3>
            <p>Enhance your outdoor living space with our expert patio design and construction services. Our team specializes in creating beautiful, functional patios tailored to your unique style and needs. Using premium materials and innovative designs, we ensure your patio becomes a favorite spot for relaxation and entertainment.</p>
            <a href="{{ url('services/patio') }}" class="btn service-button">Read More</a>
        </div>
        <div class="service-box">
             <img src="{{ asset('img/service-img/railing-repair.webp') }}" alt="Railing Repair and Restoration">
            <h3>Railing Repair and Restoration Service</h3>
            <p>Upgrade the safety and aesthetic appeal of your property with our specialized railing repair and restoration services. Our expert team is dedicated to fixing and revitalizing railings, ensuring they are both functional and visually appealing. We use high-quality materials and advanced techniques to restore your railings to their best condition, enhancing the safety and charm of your home or business.</p>
            <a href="{{ url('services/railing-repair') }}" class="btn service-button">Read More</a>
</div>

    </div>
</section>

<section class="explore">
    <div class="explore-content">
        <h1>A Real Estate Agent's Best Friend</h1>
        <div class="line"></div>
        <p>Through our experience, we've noticed a common trend in property listings, especially with the front-of-house photos. Often, these pictures are taken from a distance to avoid highlighting any disrepair or moss growth on stairs or walkways. By offering small masonry repairs and oxicleaning services, we consistently deliver results that impress buyers, sellers, and listing agents alike.</p>
        <a href="{{ url('about') }}" class="btn explore-btn" title="Learn more about BRickStick and how we can enhance your property value.">About Us</a>
    </div>
</section>

@include('footer')
