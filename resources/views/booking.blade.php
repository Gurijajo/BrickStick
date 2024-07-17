<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get a quote for masonry repair, chimney services, insulation, and more with BRickStick. Schedule your service today.">
    <meta name="keywords" content="Get a quote, masonry services, chimney repair, insulation services, BRickStick">
    <meta name="author" content="BRickStick">
    <title>{{ $title }}</title>
    <link href="{{ asset('css/bookingstyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="preload" as="image" href="{{ asset('img/service-img/design-build.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
</head>
<body>
    @include('header')

    <header class="booking-header">
        <div class="bookingheader-content">
            <h1>Get a Quote</h1>
            <div class="line"></div>
        </div>
    </header>

    <section class="booking-page">
        <div class="bookingtext-content">
            <h2>BOOK YOUR SERVICE TODAY</h2>
            <div class="line"></div>
            <p>Ready to get started? Contact us now to schedule your service and experience our professional expertise firsthand. Whether it's masonry repair, chimney services, insulation, or any other specialty, we're here to meet your needs promptly and efficiently.</p>
        </div>
        <div class="contact-container">
            <div class="contact-contactInfo">
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-clock"></i></div>
                    <div class="contact-text">
                        <h3>New Payments</h3>
                        <p>
                            <img src="{{ asset('img/content-img/googlepay.svg') }}" alt="Google Pay">
                            <img src="{{ asset('img/content-img/applepay.svg') }}" alt="Apple Pay">
                            <img src="{{ asset('img/content-img/visa.svg') }}" alt="Visa">
                            <img src="{{ asset('img/content-img/mastercard.svg') }}" alt="Mastercard">
                            <img src="{{ asset('img/content-img/amex.svg') }}" alt="American Express">
                        </p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-clock"></i></div>
                    <div class="contact-text">
                        <h3>Available</h3>
                        <p>We are Available 24/7 hours</p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-credit-card"></i></div>
                    <div class="contact-text">
                        <h3>Affordable</h3>
                        <p>Payment With Cash or Card</p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-map"></i></div>
                    <div class="contact-text">
                        <h3>Distance</h3>
                        <p>We will come 150 miles away and fix your problem</p>
                    </div>
                </div>
            </div>
            @include('_messages')
            <div class="booking-Form">
                <form method="post" action="send-mail">
                    {{ csrf_field() }}
                    <div class="booking-inputBox">
                        <input type="text" id="firstname" name="firstname" required>
                        <span>First Name</span>
                    </div>
                    <div class="booking-inputBox">
                        <input type="text" id="lastname" name="lastname" required>
                        <span>Last Name</span>
                    </div>
                    <div class="booking-inputBox">
                        <input type="email" id="email" name="email" required>
                        <span>Email</span>
                    </div>
                    <div class="booking-inputBox">
                        <input type="text" id="phoneNumber" name="phoneNumber" required>
                        <span>Phone Number</span>
                    </div>
                    <div class="booking-inputBox">
                        <input type="text" id="address" name="address" required>
                        <span>Address</span>
                    </div>
                    <div class="parent-inputbox">
                        <div class="booking-inputBox">
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="booking-inputBox">
                            <select id="categorySelect" name="categorySelect">
                                <option value="Category Select">Category Select</option>
                                <option value="Masonry Repair, Restoration & Chimney Repair Services">Masonry Repair, Restoration & Chimney Repair Services</option>
                                <option value="Masonry Cleaning and Sealing">Masonry Cleaning and Sealing</option>
                                <option value="Front Stairs Brick or Stone we Repair it all">Front Stairs Brick or Stone we Repair it all</option>
                                <option value="Paver Walkway Restoration is our specialty">Paver Walkway Restoration is our specialty</option>
                                <option value="Brickstone Stone veneer installation on existing Brick fireplaces">Brickstone Stone veneer installation on existing Brick fireplaces</option>
                                <option value="Precast concrete stair makeovers">Precast concrete stair makeovers</option>
                                <option value="Chimney Repair Services">Chimney Repair Services</option>
                                <option value="Basement Batt Insulation">Basement Batt Insulation</option>
                                <option value="Design Build Services">Design Build Services</option>
                                <option value="other" class="other">Other...</option>
                            </select>
                        </div>
                    </div>
                    <div class="booking-inputBox">
                        <div id="otherInputDiv" class="hidden">
                            <input type="text" id="otherCategory" name="otherCategory">
                            <span for="otherCategory">Please specify:</span>
                        </div>
                    </div>
                    <div class="booking-inputBox">
                        <textarea name="message" id="message" required></textarea>
                        <span>Type Your Message</span>
                    </div>
                    <div class="booking-inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="explore">
        <div class="explore-content">
            <h1>A Real Estate Agent's Best Friend</h1>
            <div class="line"></div>
            <p>Through our experience, we've noticed a common trend in property listings, especially with the front-of-house photos. Often, these pictures are taken from a distance to avoid highlighting any disrepair or moss growth on stairs or walkways. By offering small masonry repairs and oxicleaning services, we consistently deliver results that impress buyers, sellers, and listing agents alike.</p>
            <a href="{{ url('about') }}" class="btn explore-btn">About Us</a>
        </div>
    </section>

    @include('footer')

</body>
</html>
