<div>
  <!-- Footer start -->
  <footer class="py-[50px] bg-cover bg-no-repeat bg-center bg-[url('../images/footer-bg.png')] bg-[#EFF3F7] dark:bg-[url('../images/footer-bg-dark.png')] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex">
                        <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">Generations Audio Visual © {!! now()->format('Y') !!} <span class="px-[3px] text-paragraph dark:text-white">
                    </div>
                    <div class="flex items-center justify-end gap-8 sm:justify-center sm:mt-[15px]">

                        <a href="#" class="popup-modal--open text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px] popup-modal--open" data-modal="#terms-modal">Terms & Condition</a>
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
                                        Terms & Condition
                                    </h2>
                                    <div class="grid grid-cols-1 my-6 dark:text-white font-normal text-[17px]">
                                       {!! $terms_conditions !!}
                                </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="popup-modal--open text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px] popup-modal--open" data-modal="#policy-modal"> Privacy Policy</a>
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
                                    privacy policy
                                    </h2>
                                    <div class="grid grid-cols-1 my-6 dark:text-white font-normal text-[17px]">
                                        {!! $privacy_policy !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->
</div>
