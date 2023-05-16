    <div>
      <!-- Menu nav start -->
      <div class="md:hidden">
        <nav>
          <ul>
          @if(auth()->check())
            @foreach ($menu as $item)
            <li class="mt-5">
              <a href="{{ $item['url'] }}" @if($item['blank']) target="_blank" @endif class="menu__nav--item bg-accent1 w-11 h-11 rounded-full text-white flex items-center justify-center relative transition-all duration-400">
                <span class="relative z-10 flex justify-between">
                  @if(isset($item['icon']) && !empty($item['icon']))
                  <x-icon class="h-16" width="25px" fill="currentColor" name="{{ $item['icon'] }}"></x-icon>
                  @endif
                </span>
                <span class="absolute bg-accent1 h-11 rounded-[30px] ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none py-[13px] px-7 flex items-center font-bold ltr:right-3 rtl:left-3 transition-all duration-300 opacity-0 font-heebo text-[16px] invisible">{{ $item['title'] }}</span>
              </a>
            </li>
            @endforeach
            <li class="mt-5">
              <a href="faq" class="menu__nav--item bg-accent1 w-11 h-11 rounded-full text-white flex items-center justify-center relative transition-all duration-400">
                <span class="relative z-10 flex justify-between">
                  <x-icon class="h-16" width="25px" fill="currentColor" name="heroicon-o-information-circle"></x-icon>
                </span>
                <span class="absolute bg-accent1 h-11 rounded-[30px] ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none py-[13px] px-7 flex items-center font-bold ltr:right-3 rtl:left-3 transition-all duration-300 opacity-0 font-heebo text-[16px] invisible">FAQ</span>
              </a>
            </li>
            @endif
            @if(!auth()->check())
            <li class="mt-5">
              <a href="{{ route('login') }}" class="menu__nav--item bg-accent1 w-11 h-11 rounded-full text-white flex items-center justify-center relative transition-all duration-400">
                <span class="relative z-10 flex justify-between">
                  <x-icon class="h-16" width="25px" fill="currentColor" name="heroicon-o-user"></x-icon>
                </span>
                <span class="absolute bg-accent1 h-11 rounded-[30px] ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none py-[13px] px-7 flex items-center font-bold ltr:right-3 rtl:left-3 transition-all duration-300 opacity-0 font-heebo text-[16px] invisible">Login</span>
              </a>
            </li>
            @endif
          </ul>
        </nav>
      </div>
      <!-- Menu nav end -->
    </div>