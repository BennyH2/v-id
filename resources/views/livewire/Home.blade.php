<div>

    <body class="font-rubik dark:bg-dark_primary_bg">

        <!-- Preloader start -->
        <div id="preloader">
            <div class="loader--border"></div>
        </div>
        <!-- Preloader end -->

        <!-- Dark and light button start -->
        <div class="fixed ltr:right-0 rtl:left-0 top-[50%] translate-y-[-50%] z-50">
            <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none" id="light__to--dark">
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
        <!-- Dark and light button end -->

        <!-- Header area start -->
        <header class="absolute w-full left-0 top-0">
            <div class="header__sticky py-5">
                <div class="container mx-auto">
                    <div class="flex justify-between items-center">
                        <div class="logo">
                            <a href="/">
                                <img class="hidden dark:block" src="./assets/images/GAV-logo-v2.png" alt="" width="320" height="50"> <!--Dark Mode-->
                                <img class="dark:hidden" src="./assets/images/GAV-logo-v2.png" alt="" width="320" height="50"> <!--Light Mode-->
                            </a>
                        </div>
                        <div class="flex items-center md:hidden">
                            <nav>
                                <ul class="flex items-center">
                                    <li>
                                        <a href="#home" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Home</a>
                                    </li>
                                    <li>
                                        <a href="#about" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">About</a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="#services" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Services</a>
                                    </li>
                                    <li>
                                        <a href="#portfolio" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Our Work</a>
                                    </li>
                                    <li><a href="#contact" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Contact</a></li>
                                </ul>
                            </nav>
                            <a href="{{ './storage/'.$brochure }}" target="_blank">
                                <button class="flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center ltr:ml-[32px] rtl:mr-[32px] transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                                    <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>
                                    </span>
                                    <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download Brochure</span>
                                </button>
                            </a>

                        </div>
                        <div class="lg:hidden">
                            <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Start Offcanvas header menu -->
                <div class="offcanvas__header lg:hidden dark:bg-gray-800">
                    <div class="offcanvas__inner">
                        <div class="offcanvas__logo">
                            <a class="offcanvas__logo_link" href="index.html">
                                <img class="dark:hidden" src="./assets/images/GAV-logo-v4.png" alt="Grocee Logo" width="140" height="50">
                                <img class="hidden dark:block" src="./assets/images/GAV-logo-v4.png" alt="Grocee Logo" width="140" height="50">
                            </a>
                            <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
                        </div>
                        <nav class="offcanvas__menu">
                            <ul class="offcanvas__menu_ul">
                                <li class="offcanvas__menu_li">
                                    <a class="offcanvas__menu_item dark:text-white" href="#home">Home</a>
                                </li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#about">About</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#services">Services</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#portfolio">Our Work</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#contact">Contact</a></li>
                            </ul>
                            <button class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                                <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </span>
                                <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download Brochure</span>
                            </button>
                        </nav>

                    </div>
                </div>
                <!-- End Offcanvas header menu -->
            </div>
        </header>
        <!-- Header area end -->

        <!-- Main wrapper start -->
        <main>
            <!-- Hero section start -->
            <section class="bg-cover bg-no-repeat bg-center sm:h-full only-md:h-screen lg:min-h-screen flex justify-center items-center overflow-hidden dark:bg-dark_primary_bg dark:border-b dark:border-dark_accent1" id="home" style="background-image:url('./assets/images/hero-background.svg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-blend-mode: hard-light;">
                <div class="container mx-auto flex sm:flex-col items-center justify-center lg:mt-[30px] only-md:mt-[40px] sm:pt-[100px] sm:pb-[70px] bg-opacity-50" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="ltr:xl:pl-[95px] ltr:lg:pl-[50px] ltr:only-md:pl-[40px] rtl:xl:pr-[95px] rtl:lg:pr-[50px] rtl:only-md:pr-[40px] flex-grow sm:mt-[30px] sm:text-center">
                        <span class="text-accent1 text-[24px] font-semibold italic pb-[5px]">YOUR PROFESSIONAL SOURCE FOR</span>
                        <h2 class="lg:text-[60px] only-md:text-[40px] sm:text-[28px] font-bold font-heebo text-heading dark:text-white">AUDIO/VISUAL </br> SOLUTIONS IN HOUSTON</h2>
                    </div>
                </div>
            </section>

            <!-- Hero section end -->

            <!-- About section start -->
            <section class="lg:py-[100px] md:py-[70px] dark:border-b dark:border-dark_accent1" id="about">
                <div class="container mx-auto">
                    <!-- Section title start -->
                    <div class="mb-[35px] lg:mb-[55px]">
                        <div class="max-w-full max-w-full w-full text-center">
                            <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">WHO WE ARE...</span>
                            <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">A team who is committed to provide excellence...
                            </h2>
                        </div>
                    </div>
                    <!-- Section title end -->

                    <div class="testimonial__slider--inner lg:px-[220px] relative">
                        <!-- Slider main container -->
                        <div class="swiper testimonial__slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single slide -->
                                <div class="slider__inner text-center">
                                    <div class="text-[24px] leading-8 text-paragraph dark:text-slate-200 italic mt-[20px] mb-[30px]">
                                        Unwavering in our commitment to excellence, customer service, and innovation, Generations A/V is a Premier Audio/Visual production services company in Houston. Generations A/V consists of two main teams.
                                        <ul>
                                            <li> </br> Event Production Services: an Audio Visual Systems Design and Integration. Our Production Team provides expertise in the field of live events and guides our clients from conception to completion. They provide support for local venues, national tours, private events, and corporate clients. </li>
                                            <li></br> AV Systems team: our team is sought out by clients across Texas for their one of a kind fabrications and seamless integrations, creating a flawless end user experience.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single slide -->


                            </div>
                        </div>
                        <div class="md:hidden">
                            <span class="absolute top-[38%] translate-y-[-50%] left-0 xl:left-[-12%] only-xl:left-[0]  text-accent1">
                                <svg class="w-full only-lg:max-w-[130px] only-xl:max-w-[150px] xl:max-w-[250px] opacity-30" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                </svg>
                            </span>
                            <span class="absolute top-[38%] translate-y-[-50%] right-0 xl:right-[-12%] only-xl:right-[0] text-accent1">
                                <svg class="w-full only-lg:max-w-[130px] only-xl:max-w-[150px] xl:max-w-[250px] opacity-30" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H320c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72zm-256 0c0 66.3-53.7 120-120 120H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section end -->

            <!-- Counter Section -->
            <section class="lg:py-[100px] md:py-[70px]" id="services">
                <div class="container mx-auto" data-module="countup">
                    <!-- Services list start -->
                    <div class="grid gap-[30px] lg:grid-cols-3 grid-cols-1 only-md:grid-cols-2">

                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <line x1="20" y1="8" x2="20" y2="14" />
                                        <line x1="23" y1="11" x2="17" y2="11" />
                                    </svg>
                                </span>
                                <h3 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">+<span data-countup-number="250">250</span></h3>
                                <p class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Workers</p>
                            </div>
                        </div>
                        <!-- Single service end -->

                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                        <line x1="12" y1="8" x2="12" y2="16" />
                                        <line x1="8" y1="12" x2="16" y2="12" />
                                    </svg>
                                </span>
                                <h3 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">+<span data-countup-number="5">5</span></h3>
                                <p class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Years Of Experience</p>
                            </div>
                        </div>
                        <!-- Single service end -->

                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders">
                                        <line x1="4" y1="21" x2="4" y2="14" />
                                        <line x1="4" y1="10" x2="4" y2="3" />
                                        <line x1="12" y1="21" x2="12" y2="12" />
                                        <line x1="12" y1="8" x2="12" y2="3" />
                                        <line x1="20" y1="21" x2="20" y2="16" />
                                        <line x1="20" y1="12" x2="20" y2="3" />
                                        <line x1="1" y1="14" x2="7" y2="14" />
                                        <line x1="9" y1="8" x2="15" y2="8" />
                                        <line x1="17" y1="16" x2="23" y2="16" />
                                    </svg>
                                </span>
                                <h3 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">+<span data-countup-number="3000">3,000</span></h3>
                                <p class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Events</p>
                            </div>
                        </div>
                        <!-- Single service end -->

                    </div>
                    <!-- Services list end -->

                </div>
            </section>
            <!-- Counter section end -->

            <!-- Services section start -->
            <section class="lg:py-[100px] md:py-[70px]" id="services">
                <div class="container mx-auto">
                    <!-- Section title start -->
                    <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                        <div class="max-w-full lg:max-w-[580px]  w-full">
                            <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">Entertainment Services</span>
                            <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">What can we do for you!</h2>
                        </div>
                        <div class="md:grow">
                            <p class="text-[#636363] text-[17px] leading-[28px] lg:max-w-[472px] w-full dark:text-slate-200">Generations A/V is your one-stop-shop for all event production services. From audio and lighting to video and scenic solutions, we help bring your vision to life and create an unforgettable event experience.</p>
                        </div>
                    </div>
                    <!-- Section title end -->

                    <!-- Services list start -->
                    <div class="grid gap-[30px] lg:grid-cols-3 grid-cols-1 only-md:grid-cols-2">

                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders">
                                        <line x1="4" y1="21" x2="4" y2="14" />
                                        <line x1="4" y1="10" x2="4" y2="3" />
                                        <line x1="12" y1="21" x2="12" y2="12" />
                                        <line x1="12" y1="8" x2="12" y2="3" />
                                        <line x1="20" y1="21" x2="20" y2="16" />
                                        <line x1="20" y1="12" x2="20" y2="3" />
                                        <line x1="1" y1="14" x2="7" y2="14" />
                                        <line x1="9" y1="8" x2="15" y2="8" />
                                        <line x1="17" y1="16" x2="23" y2="16" />
                                    </svg>
                                </span>
                                <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Production</h3>
                                <p class="text-[17px] text-[#636363] dark:text-slate-200">At GAV, we provide a wide range of technical services to take your event to the next level. From lighting and audio to video and scenic design, our experienced technicians work closely with you to create a customized solution that meets your unique needs and goals. </p>
                            </div>
                        </div>
                        <!-- Single service end -->

                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                                <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Event Management</h3>
                                <p class="text-[17px] text-[#636363] dark:text-slate-200">Let our team of seasoned veterans take the stress out of organizing and managing your event. We offer customized solutions for all aspects of planning and management, from event design to security. With our expertise, you can create an unforgettable experience for your attendees.</p>
                            </div>
                        </div>
                        <!-- Single service end -->

                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                    </svg> </span>
                                <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Labor Management*</h3>
                                <p class="text-[17px] text-[#636363] dark:text-slate-200">Ensure the success of your event with our experienced and reliable team of stagehands and technicians. From one person to a team of 40, we have you covered. Trust in our expertise and knowledge to ensure your event runs smoothly from start to finish.</p>
                            </div>
                        </div>
                        <!-- Single service end -->


                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
                                        <polygon points="23 7 16 12 23 17 23 7" />
                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
                                    </svg> </span>
                                <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Live Streaming</h3>
                                <p class="text-[17px] text-[#636363] dark:text-slate-200">Connect with audiences beyond your physical space, using multi-camera setups and high-quality audio and video to create a professional and engaging live stream. Whether you're hosting a virtual event, conference, or concert, our experienced team at GAV has the expertise to make your live stream a success. Contact us today to learn more about our live streaming services.</p>
                            </div>
                        </div>
                        <!-- Single service end -->


                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-merge">
                                        <circle cx="18" cy="18" r="3" />
                                        <circle cx="6" cy="6" r="3" />
                                        <path d="M6 21V9a9 9 0 0 0 9 9" />
                                    </svg> </span>
                                <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Custom</h3>
                                <p class="text-[17px] text-[#636363] dark:text-slate-200">Bring your vision to life with our scenic solutions that create unforgettable experiences. Our team of experts provides consulting services, determining feasibility and budget. With custom-built designs, we incorporate cutting-edge interactive technology, immersing your guests in an unforgettable environment. Let us help you design your dream installation.</p>
                            </div>
                        </div>
                        <!-- Single service end -->


                        <!-- Single service start -->
                        <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                            <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                                <span class="bg-accent1 text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-accent1 before:opacity-[0.16]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
                                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                                    </svg> </span>
                                <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Installation</h3>
                                <p class="text-[17px] text-[#636363] dark:text-slate-200">Transform your space with cutting-edge A/V solutions from GAV. Our team of experienced engineers specializes in state-of-the-art installations, from installing TVs to custom-built video walls. We'll work with you to leave a lasting impression on your audience. Don't settle for mediocre A/V experiences!</p>
                            </div>
                        </div>
                        <!-- Single service end -->

                    </div>
                    <!-- Services list end -->

                </div>
            </section>
            <!-- Services section end -->

            <!-- Logo list section start -->
            <section class="py-[70px] lg:py-[100px] border-b-[1px] border-[#DDDDDD] dark:border-dark_accent1">
                <div class="container mx-auto">
                    <div class="relative">
                        <div class="w-full absolute h-[1px] bg-[#DDDDDD] top-[50%] translate-y-[-50%] ltr:left-0 rtl:right-0 2xs:hidden"></div>
                        <div class="flex flex-wrap">
                            <div class="max-w-[25%] 2xs:max-w-[50%] w-full ltr:border-r-[1px] rtl:border-l-[1px] border-[#DDDDDD] dark:border-dark_accent1 client__logo--padding">
                                <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/1.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-1.png" alt="">
                                </div>
                                <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/2.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-2.png" alt="">
                                </div>
                            </div>

                            <div class="max-w-[25%] 2xs:max-w-[50%] w-full ltr:border-r-[1px] rtl:border-l 2xs:border-none border-[#DDDDDD] dark:border-dark_accent1 client__logo--padding">
                                <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/3.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-3.png" alt="">
                                </div>
                                <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/4.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-4.png" alt="">
                                </div>
                            </div>

                            <div class="max-w-[25%] 2xs:max-w-[50%] w-full ltr:border-r-[1px] rtl:border-l border-[#DDDDDD] client__logo--padding dark:border-dark_accent1">
                                <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/5.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-5.png" alt="">
                                </div>
                                <div class="w-full client__logo--padding--inner">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/6.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-6.png" alt="">
                                </div>
                            </div>

                            <div class="max-w-[25%] 2xs:max-w-[50%] w-full client__logo--padding">
                                <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/7.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-7.png" alt="">
                                </div>
                                <div class="w-full client__logo--padding--inner">
                                    <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="./assets/images/logo/8.png" alt="">
                                    <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="./assets/images/logo/dark-log-8.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Logo list section end -->

            <!-- Portfolio section start -->
            <section class="bg-[#EFF3F7] dark:bg-dark_primary_bg pt-[70px] lg:pt-[100px] pb-[40px] lg:pb-[70px] dark:border-t dark:border-b dark:border-dark_accent1" id="portfolio">
                <div class="container mx-auto">
                    <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                        <div class="max-w-full lg:max-w-[580px]  w-full">
                            <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">Our Work</span>
                            <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">Never compromise, See What We Can Do!
                            </h2>
                        </div>
                    </div>

                    <!-- Filter portfolio start -->
                    <div class="isotope--filter">
                        <div class="button-group filters-button-group flex justify-center flex-wrap gap-[30px]">
                            <button class="button is-checked text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter="*">Show All</button>
                            @foreach($categories as $category)
                            <button class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</button>
                            @endforeach
                        </div>
                        <div class="portfolio__grid flex mt-[50px] mx-[-15px]">
                            @foreach($images as $image)
                            <!-- single portfolio start -->
                            <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] {{ $image->categoryClasses }} portfolio__parent" data-category="{{ $image->categoryData }}">
                                <div class="relative overflow-hidden">
                                    <a href="#" class="popup-modal--open">
                                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                                            <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                                                <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
                                                        <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                                                    </svg>
                                                </span>
                                                <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">{{$image->name}}</h3>
                                                <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">{{$image->project}}</span>
                                            </div>
                                        </span>
                                        <div class="w-full portfolio__image--card">
                                            <img class="w-full transition duration-300" src="{{ $image->previewImageUrl }}" alt="{{ $image->name }}">
                                        </div>
                                    </a>

                                    <!-- Portfolio popup start -->
                                    <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                                        <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                                        <!-- Modal content -->
                                        <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                                            <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                                                <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg>
                                                </button>
                                                <h2 class="text-accent1 text-center font-bold">
                                                    {{$image->name}}
                                                </h2>
                                                <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                                    <div class="space-y-2">
                                                        @if($image->project)
                                                        <p class="dark:text-white flex items-center">
                                                            <span class="mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                                </svg>
                                                            </span>
                                                            Project :&nbsp;
                                                            <span class="font-medium"> {{$image->project}}</span>
                                                        </p>
                                                        @endif
                                                        @if($image->credit_to)
                                                        <p class="dark:text-white flex items-center">
                                                            <span class="mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code">
                                                                    <polyline points="16 18 22 12 16 6"></polyline>
                                                                    <polyline points="8 6 2 12 8 18"></polyline>
                                                                </svg>
                                                            </span>
                                                            Credit To :&nbsp;
                                                            <span class="font-medium">{{$image->credit_to}}</span>
                                                        </p>
                                                        @endif
                                                    </div>

                                                    <div class="space-y-2">
                                                        @if($image->client)
                                                        <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                                            <span class="mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                                    <circle cx="12" cy="7" r="4"></circle>
                                                                </svg>
                                                            </span>
                                                            Client :&nbsp; <span class="font-medium">{{$image->client}}</span>
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                @if($image->description)
                                                <p class="dark:text-white font-normal text-[17px]">
                                                    {{$image->description}}
                                                </p>
                                                @endif
                                                <div class="pr-3">
                                                    <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="{{ $image->previewImageUrl }}" alt="{{ $image->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio popup end -->
                                </div>
                            </div>
                            <!-- single portfolio end -->

                            @endforeach

                        </div>
                    </div>
                    <!-- Filter portfolio end -->

                </div>
            </section>
            <!-- Portfolio section end -->

            <!-- Contact form section start -->
            <livewire:contact-form-component />
            <!-- Contact form section end -->
        </main>
        <!-- Main wrapper end -->

        @livewire('footer')

        <!-- Back to top start -->
        <button id="scroll__top" class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
            </svg>
        </button>
        <!-- Back to top end -->



        <!-------- Plugins js ------>

        <!-- Swiper js -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <!-- imagesloaded js -->
        <script src="./assets/js/imagesloaded.pkgd.min.js" defer></script>

        <!-- Isotope js -->
        <script src="./assets/js/isotope.pkgd.min.js" defer></script>

        <!-- Custom js -->
        <script src="./assets/js/script.js" defer></script>
    </body>

</div>