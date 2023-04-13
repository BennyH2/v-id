<body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->


    @livewire('menu', ['key' => "staff_menu", 'view' => 'livewire.staffMenu-mobile'])

    <div class="h-full bg-[url({{asset('images/hero-bg-img.png')}})] bg-cover bg-no-repeat bg-center bg-[#DAEEF1] dark:bg-[url('../images/home2-hero-bg-dark.png')] dark:bg-dark_primary_bg md:pb-[90px]">
        <!-- Header area start -->
        <header class="absolute w-full left-0 top-0 py-7">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div class="logo">
                        <a href="/" onclick="goBack()">
                            <img class="hidden dark:block" src="{{ asset('assets/images/GAV-logo-v2.png')}}" alt="Generations A/V Logo" width="320" height="50">
                            <img class="dark:hidden" src="{{ asset('assets/images/GAV-logo-v2.png')}}" alt="Generations A/V Logo" width="320" height="50">
                        </a>
                    </div>
                    <div class="block">
                        <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-full" id="light__to--dark">
                            <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512">
                                <title>Moon</title>
                                <path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512">
                                <title>Sunny</title>
                                <path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z" />
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </header>
        <!-- Header area end -->

        <!-- Main wrapper start -->
        <main>
            <!-- Hero section start -->
            <section class="h-full lg:min-h-screen flex justify-center items-center overflow-hidden" id="home">
                <div class="container mx-auto flex sm:flex-col items-center justify-center sm:pt-[120px] only-md:pt-[150px] md:pb-[50px] lg:pt-[165px] lg:pb-[100px] sm:pb-[70px]">
                    <section class="faq">
                        <ul class="categories">
                            @foreach($faqs->groupBy('category.name') as $categoryName => $faqItems)
                            <li><a class="{{ $loop->first ? 'selected' : '' }}" href="#{{ Str::slug($categoryName) }}">{{ $categoryName }}</a></li>
                            @endforeach
                        </ul>

                        <div class="faq-items">
                            @foreach($faqs->groupBy('category.name') as $categoryName => $faqItems)
                            <ul id="{{ Str::slug($categoryName) }}" class="faq-group">
                                <li class="faq-title">
                                    <h2>{{ $categoryName }}</h2>
                                </li>

                                @foreach($faqItems as $faq)
                                <li>
                                    <a class="trigger" href="#0">{{ $faq->question }}</a>
                                    <div class="faq-content">
                                        <p>{!! $faq->answer !!}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @endforeach
                        </div>
                        <a href="#0" class="cd-close-panel">Close</a>
                    </section>
                </div>
            </section>
            <!-- Hero section end -->
        </main>
        <!-- Main wrapper end -->

        <!-- Footer start -->
        @livewire('footer')
        <!-- Footer end -->
    </div>


    <!-------- Plugins js ------>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <!-- Swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}" defer></script>

    <!-- Isotope js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}" defer></script>

    <!-- Custom js -->
    <script src="{{ asset('assets/js/script.js')}}" defer></script>