<header class="absolute w-screen">
    <nav class="fixed w-full top-0 z-50 border-b border-gray-700 backdrop-blur-sm bg-black/40 rounded-b-2xl flexflex-wrap items-center justify-between  py-2 shadow-dark-mild lg:py-4"
        data-te-navbar-ref>
        <div class="flex max-w-screen-xl mx-auto flex-wrap items-center h-20 justify-between px-3">
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
            <div class="flex justify-end gap-3 items-center h-full">

                <button id="Cart" data-twe-collapse-toggle
                    class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 "
                    type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
                    aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- cart icon -->
                    <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M12.28 6H1.72a1 1 0 0 0-1 1.2l1.1 5.5a1 1 0 0 0 1 .8h8.36a1 1 0 0 0 1-.8l1.1-5.5a1 1 0 0 0-1-1.2M9 2.5L11 6M3 6l2-3.5" />
                        </svg>
                    </span>
                </button>

                <button id="Hamburger" data-twe-collapse-toggle
                    class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 "
                    type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
                    aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="[&>svg]:w-7 [&>svg]:stroke-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3 4h18v2H3zm0 7h12v2H3zm0 7h18v2H3z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        {{-- Collapsible navbar container --}}

        <div id="ScreenNavigator"
            class="hidden top-0 right-0 w-0 h-screen bg-black/40 backdrop-blur-xl overflow-hidden ">
            <div
                class="md:max-w-screen-xl md:mx-auto w-screen h-screen md:w-full flex flex-col gap-8 justify-center items-center ">


                @auth
                    @role('super-admin', 'admin', 'restaurant-owner')
                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </div>

                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('mealsManagement') }}">Meals</a>
                        </div>
                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('restaurantsManagement') }}">Restaurants</a>
                        </div>
                    @else
                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('home') }}">HOME</a>
                        </div>
                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('meals') }}">Meals</a>
                        </div>
                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('restaurants') }}">Restaurants</a>
                        </div>
                        <div
                            class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                            <a href="{{ route('profile') }}">Profile</a>
                        </div>
                    @endrole
                @else
                    <div
                        class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                        <a href="{{ route('home') }}">HOME</a>
                    </div>
                    <div
                        class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                        <a href="{{ route('meals') }}">Meals</a>
                    </div>
                    <div
                        class="font-passero uppercase tracking-widest text-4xl md:text-7xl text-white hover:text-secondary border-b border-secondary">
                        <a href="{{ route('restaurants') }}">Restaurants</a>
                    </div>
                @endauth

                {{-- Authentication Buttons --}}
                <div class="flex flex-col md:flex-row gap-4 ">
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
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

        {{--  Collapsible Cart --}}

        <div id="ScreenCart"
            class="hidden rounded-lg top-0 p-8  right-0 h-screen bg-black/40 backdrop-blur-xl overflow-hidden overflow-y-auto">

            <h1
                class="text-4xl mt-8 md:text-7xl w-full font-bold font-passero text-center mb-4 pb-4 border-b-2 border-secondary text-white ">
                My
                <span class="text-secondary ">
                    Cart
                </span>
            </h1>

            <div id="items" class="flex flex-col justify-center gap-4 mt-12 ">

                <div id="item" >
                    <div class="bg-component gap-4 lg:gap-0 p-6 shadow-lg rounded-full flex items-start lg:items-center md:justify-between flex-col md:flex-row">
                        <div class="flex  gap-2 justify-between">
                            <div class=""> <img class="shadow sm:w-12 sm:h-12 w-14 h-14 rounded-full bg-gray-100"
                                    src="" alt="Avatar" />
                            </div>
                            <div>
                                <h1 class="text-xl font-medium text-white">Link</h1>
                                <p class="text-gray-400">Restaurant</p>
                            </div>
                        </div>
                        
                        <!-- Input Number -->
                       <div class="flex justify-between items-center gap-8">
                            <div class=" input max-w-48 w-fit font-extrabold text-white py-2 px-3 border-2 border-secondary rounded-full bg-primary text-center flex justify-evenly items-center">
                                <button id="minus" class="minus bg-transparent px-2 py-0 text-2xl">-</button>
                                <span class="num text-lg border-x px-2">01</span>
                                <button id="plus" class="plus bg-transparent px-2 py-0 text-2xl">+</button>
                            </div>
    
                            <span class="bg-secondary hover:opacity-75 text-black font-poppins rounded-full px-4 py-2"> 45 $
                            </span>
                       </div>
                    </div>
                </div>

            </div>



        </div>
    </nav>
</header>
