<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn about BRickStick, specializing in masonry repair with over 200 projects completed. Discover our commitment to quality and customer satisfaction.">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/aboutstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="preload" as="image" href="{{ asset('img/service-img/design-build.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/explore-walpaper.webp') }}">
</head>
<body>
    <header class="about-head">
        <div class="aboutheader-content">
            <h1>About Us</h1>
            <div class="line"></div>
        </div>
    </header>

    <div class="about-header">
        <h1>About Us</h1>
        <div class="line"></div>
        <p>BRick Mabie is a 2001 graduate of job corps with a degree in cement masonry. He has done
            over 200 masonry repair projects of various sizes and scopes. He formerly did business as
            BRick Mabie Masonry. He has demonstrated the ability to bring a value to our customers for
            5 years in the masonry repair business. A competent mason with a desire to bring the highest
            amount of curb appeal for the budget and price point. Enjoys restoring old churches for the
            community with eagle scouts. BRickstick believes in giving back in this way.</p>
    </div>

    <div class="about-wrapper">
        <section class="about">
            <div class="about-image">
                <img src="{{ asset('img/content-img/knocking.webp') }}" alt="How We Got Started-Door to Door Sales Model">
            </div>
            <div class="about-content">
                <h2>How We Got Started-Door to Door Sales Model</h2>
                <p>Curb appeal plays a crucial role in property projects, focusing on what's visible from the street. Before starting any project, we prioritize two main factors. First, we assess if we can offer a cost-effective solution to the identified issues. Second, we evaluate the overall maintenance and appeal of the property. From our experience, achieving success hinges on providing value-driven solutions while ensuring the property maintains a high standard of curb appeal. This approach not only enhances attractiveness but also increases property value effectively.</p>
            </div>
        </section>
        <section class="about2">
            <div class="about-content">
                <h2>How we provide value</h2>
                <p>At BrickStick, our competitive advantage lies in our lean overhead, which allows us to offer competitive pricing across the board. Our focus is clear: Repair, Restore, and Renew—this is our specialty.

                    A significant portion of our work involves tackling those small, hard-to-quote repair jobs. While others may recommend tearing down and rebuilding, at , we stand by our commitment to Repair, Restore, and Renew. It's not just what we do; it's all we do.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('img/content-img/value.webp') }}" alt="How We Provide Value">
            </div>
        </section>
    </div>

    <div class="about-ceo">
        <h3><i class="bi bi-quote"></i></h3>
        <h2>BrickStick specializes in the fine art of curb appeal.
            Curb appeal definition: The visual attractiveness of a home or business as seen from the
            street.
            Let us make your front stairs and walkway Great AGAIN.
            We are not curb appeal guys. We are THE Curb Appeal Guys.</h2>
        <div class="author">
            <img src="{{ asset('img/content-img/author.webp') }}" alt="CEO Photo">
        </div>
    </div>

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
