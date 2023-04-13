<div>


    <section class="py-[70px] lg:py-[100px] mb-[270px] bg-cover bg-no-repeat bg-center bg-[url('../images/contact-bg.png')] bg-[#ECF1F6] dark:bg-[url('../images/contact-bg-dark.png')] dark:bg-dark_primary_bg" id="contact">
        <div class="container mx-auto">
            <!-- Form wrapper start -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
                <div>
                    <!-- Section title -->
                    <div class="mb-[55px] md:text-center">
                        <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">INQUIRY</span>
                        <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">LET'S CREATE YOUR NEXT AUDIO-VISUAL EXPERIENCE </p>
                        @if (session()->has('message'))
                        <p class="text-accent1 dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full"> {{ session('message') }} </p>
                        @endif
                    </div>
                    <!-- Section title end -->
                    <form wire:submit.prevent="submit">
                        <div class="grid grid-cols-2 gap-7">
                            <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="name" placeholder="Your name" wire:model="name">
                            </div>
                            <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="email" name="email" placeholder="Your email" wire:model="email">
                            </div>
                            <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="phoneNumber" placeholder="Phone Number" wire:model="phone">
                            </div>
                            <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="date" name="date" placeholder="Event Date" wire:model="date">
                            </div>
                            <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="city" name="city" placeholder="City" wire:model="city">
                            </div>
                            <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="state" name="state" placeholder="State" wire:model="state">
                            </div>
                            <div class="col-span-2">
                                <textarea class="w-full bg-white rounded px-5 py-2 h-55 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" name="message" id="" cols="30" rows="10" placeholder="Event Scope..." wire:model="message"></textarea>
                            </div>
                        </div>
                        <button class="btn solid-btn mt-12" type="submit">Send Request</button>
                    </form>
                    <!-- from inner end -->


                </div>

                <div class="ltr:only-md:pl-[30px] ltr:lg:pl-[50px] rtl:only-md:pr-[30px] rtl:lg:pr-[50px] mt-[30px] lg:mt-[150px] md:flex md:gap-[30px] md:flex-wrap">
                    <!-- Single contact info start -->
                    <div class="flex items-center">
                        <div>
                            <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                                <svg width="25" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                            </span>
                        </div>
                        <div class="ltr:pl-6 rtl:pr-6">
                            <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Call Us</h3>
                            <span class="text-primary dark:text-slate-200 text-[22px] md:text-[18px] mt-5"><a href="tel:+8888122757">+888-812-2757</a></span>
                        </div>
                    </div>
                    <!-- Single contact info end -->

                    <!-- Single contact info start -->
                    <div class="flex items-center lg:mt-7">
                        <div>
                            <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </span>
                        </div>
                        <div class="ltr:pl-6 rtl:pr-6">
                            <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Email Us</h3>
                            <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5"><a href="mailto:Information@generationsav.com">Information@generationsav.com</a><br> <a href="mailto:Production@generationsav.com">Production@generationsav.com</a></span>
                        </div>
                    </div>
                    <!-- Single contact info end -->

                    <!-- Single contact info start -->
                    <div class="flex items-center lg:mt-7">
                        <div>
                            <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                                <svg width="32" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                                </svg>
                            </span>
                        </div>
                        <div class="ltr:pl-6 rtl:pr-6">
                            <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Mailing Address</h3>
                            <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">1215 El Dorado Blvd </br> Houston, TX 77062</span>
                        </div>
                    </div>
                    <!-- Single contact info end -->

                    <!-- Single contact info start -->
                    <div class="flex items-center lg:mt-7">
                        <div>
                            <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                                <svg width="32" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                                </svg>
                            </span>
                        </div>
                        <div class="ltr:pl-6 rtl:pr-6">
                            <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Office Address</h3>
                            <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">2400 Central Pkwy #M </br> Houston, TX 77092 </span>
                        </div>
                    </div>
                    <!-- Single contact info end -->

                </div>
            </div>
            <!-- Form wrapper end -->

            <!-- Google map start  -->
            <div class="mb-[-275px] pt-[70px] lg:pt-[100px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3461.915354952737!2d-95.4668230846964!3d29.80898968196857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c68f2a524f3d%3A0xabbddc79b49d1151!2s2400%20Central%20Pkwy%2C%20Houston%2C%20TX%2077092!5e0!3m2!1sen!2sus!4v1679094852149!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Google map send -->

        </div>
    </section>
    <!-- from inner start-->

</div>