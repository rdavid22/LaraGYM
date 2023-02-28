<!-- Section: Navigation -->
@if (Route::has('login'))

        <nav
        class="fixed top-0 flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-6">
          <div class="flex items-center">
            <button class="mr-2 border-0 bg-transparent py-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden" type="button" data-te-collapse-init data-te-target="#navbarSupportedContentX" aria-controls="navbarSupportedContentX" aria-expanded="false" aria-label="Toggle navigation">
              <span class="[&>svg]:w-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </span>
            </button>
          </div>
          <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContentX" data-te-collapse-item>
            <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
              <li data-te-nav-item-ref>
                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                  href="#!"
                  data-te-nav-link-ref
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  >Rólunk</a
                >
              </li>
              <li data-te-nav-item-ref>
                <a
                  class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                  href="#!"
                  data-te-nav-link-ref
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  >Áraink</a
                >
              </li>
              <li data-te-nav-item-ref>
                <a
                  class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                  href="{{ route('login') }}"
                  data-te-nav-link-ref
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  >Bejelentkezés</a
                >
              </li>
              <li data-te-nav-item-ref>
                <a
                  class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                  href="{{ route('register') }}"
                  data-te-nav-link-ref
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  >Regisztráció</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>


        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Főoldal</a>
        @else
        
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Rólunk</a>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Áraink</a>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kapcsolat</a>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Bejelentkezés</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Regisztráció</a>
            @endif
        @endauth
   
@endif
<!-- Section: Navigation -->