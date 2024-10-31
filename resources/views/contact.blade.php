<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <title>{{ $title }}</title>
     @include('schema')
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact BRickStick for masonry repair, chimney repair, and masonry cleaning services in Westborough. Get in touch for inquiries, questions, or feedback.">
    <meta name="keywords" content="BRickStick contact, masonry repair Westborough, chimney repair contact, masonry cleaning services">
    <link rel="stylesheet" href="{{ asset('css/contactstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="preload" as="image" href="{{ asset('img/service-img/design-build.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="canonical" href="{{ url()->current() }}">
</head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LJWQ85QW8S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LJWQ85QW8S');
    </script>
<body>
    <header class="contact-header">
        <div class="contactheader-content">
            <h1>Contact Us</h1>
            <div class="line"></div>
        </div>
    </header>

    <section class="contactus">
        <div class="contact-content">
            <h2>Get in Touch</h2>
            <div class="line"></div>
            <p>Feel free to get in touch with us for any inquiries, questions, or feedback. At BRickStick, we're dedicated to providing you with exceptional service and solutions tailored to your needs. Whether you're looking to repair, restore, or renew, we're here to help!</p>
        </div>
        <div class="contact-container">
            <div class="contact-contactInfo">
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                    <div class="contact-text">
                        <h3>Address</h3>
                        <p>5231 HomeStead BLVD <br>Westborough, MA, USA, <br> 01581</p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                    <div class="contact-text">
                        <h3>Email</h3>
                        <p>brickstickmasonry@gmail.com</p>
                        <p>Brick@thecurbappealguys.com</p>
                        <p>Dima@thecurbappealguys.com</p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon"><i class="bi bi-telephone"></i></div>
                    <div class="contact-text">
                        <h3>Phone</h3>
                        <p>(774) 462-1027<br>
                        (774) 463-6458</p>
                    </div>
                </div>
            </div>
            @include('_messages')
            <div class="contact-Form">
                <form method="post" action="contact-mail">
                    {{ csrf_field() }}
                    <h2>Send Message</h2>
                    <div class="contact-inputBox">
                        <input type="text" name="fullname" id="fullname" required>
                        <span>Full Name</span>
                    </div>
                    <div class="contact-inputBox">
                        <input type="email" name="email" id="email" required>
                        <span>Email</span>
                    </div>
                    <div class="contact-inputBox">
                        <input type="text" id="phoneNumber" name="phoneNumber" required>
                        <span>Phone Number</span>
                    </div>
                    <div class="contact-inputBox">
                        <textarea name="message" id="message" required></textarea>
                        <span>Type Your Message</span>
                    </div>
                    <div class="contact-inputBox">
                        <input type="submit" value="Send">
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
