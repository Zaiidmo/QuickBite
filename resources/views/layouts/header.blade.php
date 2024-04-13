<header class="absolute w-screen">
    <nav class="fixed w-full top-0 z-50 border-b border-gray-700 backdrop-blur-sm bg-black/40 rounded-b-2xl  flexflex-wrap items-center justify-between  py-2 shadow-dark-mild lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full max-w-screen-xl mx-auto flex-wrap items-center h-20 justify-between px-3">
            <div>
                <a class="mx-2 my-1 flex items-center text-white  focus:text-white lg:mb-0 lg:mt-0 hover:text-secondary"
                    href="/">
                    <img class="mr-2" src={{ asset('assets/images/logo.png') }} style="height: 40px" alt="QuickBite" />
                    <div>
                        <p class="font-passero text-3xl ">QuickBite</p>
                        {{-- <span>Delivering Delight, One Bite at a Time!</span> --}}
                    </div>
                </a>
            </div>

            <!-- Hamburger button for mobile view -->
            <button id="Hamburger" data-twe-collapse-toggle
                class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 "
                type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
                aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
        </div>
        <!-- Collapsible navbar container -->
        <div id="ScreenNavigator"
            class="hidden top-0 right-0 w-0 h-screen bg-black/40 backdrop-blur-xl overflow-hidden ">
            <div
                class="md:max-w-screen-xl md:mx-auto w-screen h-screen md:w-full flex flex-col gap-8 justify-center items-center ">
                <div
                    class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                    <a href="/">HOME</a>
                </div>
                <div
                    class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                    <a href="/">Meals</a>
                </div>
                <div
                    class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                    <a href="/">Restaurants</a>
                </div>
                @auth
                    <div
                        class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                        <a href="/">My Cart</a>
                    </div>
                    <div
                        class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                        <a href="/">Dashboard</a>
                    </div>
                @endauth
                <div class="flex flex-col md:flex-row gap-4 ">
                    @auth
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit"
                                class="flex items-center gap-2 border-b-4 border-secondary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-200 hover:text-black focus:text-white focus:outline-none focus:ring-0 active:text-white motion-reduce:transition-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                                </svg>
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block rounded-full border-4 border-secondary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-200 hover:text-white focus:text-white focus:outline-none focus:ring-0 active:text-white motion-reduce:transition-none">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="inline-block rounded-full border-4 border-secondary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-200 hover:text-white focus:text-white focus:outline-none focus:ring-0 active:text-white motion-reduce:transition-none">
                            Get Started Now
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>
