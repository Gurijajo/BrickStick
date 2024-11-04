<!DOCTYPE html>
<html lang="en">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>
<body>
    <nav class="navbar-wrapper">
        <div class="nav container">
            <a href="/" class="logo">BRickStick</a>
            <div class="navbar">
                <ul>
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="{{url('service')}}" class="nav-link">Service</a></li>
                    <li><a href="{{url('gallery')}}" class="nav-link">Gallery</a></li>
                    <li><a href="{{url('about')}}" class="nav-link">About Us</a></li>
                    <li><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                    <li><a href="{{route('christmas')}}" class="nav-link">Christmas</a></li>
                </ul>
                <a href="{{url('booking')}}" class="booking-btn btn">Get a Quote!</a>
            </div>
            <div class="menu-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </nav>
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
