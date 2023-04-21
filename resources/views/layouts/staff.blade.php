<!DOCTYPE html>
<html lang="en" class="scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generations Audio Visual ~ Staff</title>

    <!-- Basic SEO meta tags -->
    <meta name="description" content="Generations A/V provides top-quality audio/visual services and support for your events in Houston. Contact us today to learn more.">
    <meta name="keywords" content="Generations A/V, audio/visual, Houston, events">
    <meta name="author" content="Benny Haynes">

    <!-- Open Graph meta tags (for social media sharing) -->
    <meta property="og:title" content="Generations A/V - Audio/Visual Solutions in Houston">
    <meta property="og:description" content="Generations A/V provides top-quality audio/visual services and support for your events in Houston.">
    <meta property="og:image" content="{{asset('images/favicon/GAV-Favicon.svg')}}">
    <meta property="og:url" content="https://generationsav.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card meta tags (for social media sharing) -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Generations A/V - Audio/Visual Solutions in Houston">
    <meta name="twitter:description" content="Generations A/V provides top-quality audio/visual services and support for your events in Houston. Contact us today to learn more.">
    <meta name="twitter:image" content="{{asset('images/favicon/GAV-Favicon.svg')}}">

    <!-- Other SEO elements -->
    <link rel="canonical" href="http://www.generationsav.com/">
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon/GAV-Favicon.svg')}}">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/mobilemenu.css')}}" />
    <!-- <link rel="stylesheet" href="./assets/css/glightbox.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Tailwind css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/staff.css') }}">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
            document.getElementById("light__to--dark")?.classList.add("dark--version");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.documentElement.classList.remove("dark");
            document.getElementById("light__to--dark")?.classList.remove("dark--version");
        }
    </script>
</head>

<body>
    {{ $slot }}
</body>
<footer>
    @livewireScripts
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src="{{ asset('assets/js/staff.js')}}" defer></script>
</footer>