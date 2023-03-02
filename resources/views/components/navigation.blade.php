<!-- Section: Navigation -->
@if (Route::has('login'))
    <nav id="heromenu" class="fixed top-0 flex w-full items-center justify-between text-white focus:text-yellow-300 md:flex-wrap md:justify-start" data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between m-5">

            <!-- Hamburger icon -->
                <div class="flex items-center h-8 w-8 justify-center hamburger-icon lg:hidden" id="burgir" data-te-collapse-init data-te-target="#navbarSupportedContentX" aria-controls="navbarSupportedContentX" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="icon-1" id="a"></div>
                    <div class="icon-2" id="b"></div>
                    <div class="icon-3" id="c"></div>
                    <div class="clear"></div>
                </div>
            <!-- Hamburger icon -->

            <!-- Links -->
            <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto mt-5 lg:mt-0"
                id="navbarSupportedContentX" data-te-collapse-item>
                <ul class="mr-auto flex flex-col lg:flex-row text-3xl lg:space-x-10 lg:space-y-0 space-y-3"
                    data-te-navbar-nav-ref>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-yellow-300 focus:text-yellow-300 disabled:text-black/30 lg:p-2 [&.active]:text-black/90"
                            href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                            Rólunk
                        </a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-yellow-300 focus:text-yellow-300 disabled:text-black/30 lg:p-2 [&.active]:text-black/90"
                            href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                            Áraink
                        </a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-yellow-300 focus:text-yellow-300 disabled:text-black/30 lg:p-2 [&.active]:text-black/90"
                            href="{{ route('login') }}" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">
                            Bejelentkezés
                        </a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-yellow-300 focus:text-yellow-300 disabled:text-black/30 lg:p-2 [&.active]:text-black/90"
                            href="{{ route('register') }}" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">
                            Regisztráció
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Links -->
        </div>
    </nav>

    {{-- 
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Főoldal</a>
        @else
        
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Rólunk</a>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Áraink</a>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kapcsolat</a>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Bejelentkezés</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Regisztráció</a>
            @endif
        @endauth --}}
@endif
<!-- Section: Navigation -->
