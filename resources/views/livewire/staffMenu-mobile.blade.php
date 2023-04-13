    <div>
    <!-- Mobile Menu nav start -->
    <div class="md:block hidden fixed z-[98] bg-white dark:bg-dark_accent1 py-4 px-4 w-full mx-auto bottom-0 shadow-[0_0_25px_0_rgba(196,206,213,0.5)] dark:shadow-[-10px_0_20px_0_rgba(0,0,0,0.1)]">
      <nav>
        <ul class="flex justify-around items-center">
        @foreach ($menu as $item)
          <li>
            <a href="{{ $item['url'] }}" @if($item['blank']) target="_blank" @endif class="mobile--menu__nav--item bg-accent1 w-11 h-11 rounded-full text-white flex items-center justify-center relative transition-all duration-400">
              <span class="relative z-10">
              @if(isset($item['icon']) && !empty($item['icon']))
                  <x-icon class="h-16" width="25px" fill="currentColor" name="{{ $item['icon'] }}"></x-icon>
                  @endif              </span>
            </a>
          </li>
        @endforeach
        <li>
            <a href="#" class="mobile--menu__nav--item bg-accent1 w-11 h-11 rounded-full text-white flex items-center justify-center relative transition-all duration-400">
              <span class="relative z-10">
              <x-icon class="h-16" width="25px" fill="currentColor" name="heroicon-o-information-circle"></x-icon>
             </span>
            </a>
          </li>
        @if(!auth()->check())
        <li>
            <a href="{{ route('login') }}" class="mobile--menu__nav--item bg-accent1 w-11 h-11 rounded-full text-white flex items-center justify-center relative transition-all duration-400">
              <span class="relative z-10">
              <x-icon class="h-16" width="25px" fill="currentColor" name="heroicon-o-user"></x-icon>
             </span>
            </a>
          </li>
        @endif
        </ul>
      </nav>
    </div>
    <!-- Mobile Menu nav end -->
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
    </div>
