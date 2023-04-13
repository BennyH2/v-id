  <div>
  <body class="font-rubik dark:bg-dark_primary_bg">
    @csrf
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
              <a href="#" onclick="goBack()">
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
          <div class="container mx-auto flex sm:flex-col items-center justify-center  sm:pt-[120px] only-md:pt-[150px] md:pb-[50px] lg:pt-[165px] lg:pb-[100px] sm:pb-[70px]">

            <!-- Profile content and nav start -->
            <div class="flex items-center ltr:xl:pl-[65px] ltr:lg:pl-[50px] ltr:only-md:pl-[40px] rtl:xl:pr-[65px] rtl:lg:pr-[50px] rtl:only-md:pr-[40px] flex-grow sm:mt-[30px] sm:text-center">

              <!-- profile content start -->
              <div class="grow">
                <span class="text-accent1 text-[24px] font-semibold italic pb-[5px]">HELLO I'M</span>
                <h2 class="lg:text-[60px] only-md:text-[40px] sm:text-[28px] font-bold font-heebo text-heading dark:text-white">{{$staff->name}} </h2>
                <h3 class="font-heebo font-normal text-primary dark:text-white">{{$position}} At Generations A/V </h3>
                <p class="lg:text-[20px] md:text-[16px] text-paragraph dark:text-slate-200 lg:mt-[18px] md:mt-[15px]">@if(auth()->check())extra Information can be added here <br> if wanted.@endif</p>
                <div class="mt-7">
                @if(auth()->check())
                  <button wire:click.prevent="vcard" class="sm:mx-auto flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                    <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                      </svg>
                    </span>
                    <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download VCard</span>
                  </button>
                @endif


                </div>
              </div>
              <!-- profile content end -->

              @livewire('menu', ['key' => "staff_menu", 'view' => 'livewire.staffMenu-desktop'])

            </div>
            <!-- Profile content and nav end -->

            <!-- Profile media start -->
            <div class="max-w-[405px] order-first">
              <div class="relative after:bg-white after:w-full after:bottom-0 after:left-0 after:content[''] after:h-[75%] after:absolute after:rounded-xl">
                <!-- Profile image start -->
                <div class="text-center pb-6 relative z-10 sm:px-4 lg:px-11">
                  <div class="pb-5">
                    <img class="md:w-[250px] md:h-[250px] lg:w-[290px] lg:h-[290px] rounded-full mx-auto border border-accent1 p-1" src="{{$staff->staff_prints->getFirstMedia('staff_print')->getUrl()}}" alt="">
                  </div>
                  <h4 class="text-primary">{{$staff->name}}</h4>
                  <span>{{$position}}</span>
                </div>
                <!-- Profile image end -->

                <!-- Profile contact info  start -->
                <div class="border-t border-[#ddd] py-6 px-12 z-10 relative">
                  <!-- Single contact start -->
                  <div class="flex items-center">
                    <span class="border border-accent1 text-accent1 w-9 h-9 rounded-full flex items-center justify-center">
                      <svg class="max-w-5" width="16" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                      </svg>
                    </span>
                    <span class="ltr:pl-4 rtl:pr-4 text-[18px]">
                      <a class="hover:text-accent1" href="tel:+{{$staff->phone}}">{{$staff->phone}}</a>
                    </span>
                  </div>
                  <!-- Single contact -->

                  <!-- Single contact start -->
                  <div class="flex items-center mt-5">
                    <span class="border border-accent1 text-accent1 w-9 h-9 rounded-full flex items-center justify-center">
                      <svg class="max-w-5" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                      </svg>
                    </span>
                    <span class="ltr:pl-4 rtl:pr-4 text-[18px]">
                      <a class="hover:text-accent1 overflow-hidden" style="text-overflow: ellipsis; white-space: nowrap;" href="mailto:{{$staff->email}}">{{$staff->email}}</a>
                    </span>
                  </div>
                  <!-- Single contact -->
                </div>
                <!-- Profile contact info  end -->

              </div>
            </div>
            <!-- Profile media start -->

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
    </div>