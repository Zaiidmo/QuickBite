<header class="absolute w-screen">
    <nav class="fixed w-full top-0 z-50 backdrop-blur-sm bg-black/40 rounded-b-2xl items-center justify-between  py-2 shadow-dark-mild lg:py-4"
        data-te-navbar-ref>
        <div id="navbar" class="flex lg:w-full max-w-screen-xl lg:mx-auto flex-wrap items-center h-20 justify-between px-3 transition-all duration-300 ease-in-out">            <div>
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
                    class="block border-0 bg-transparent px-2 text-black/40 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 "
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
            class="hidden fixed z-50 top-0 pt-0 rounded-lg p-8 right-0 h-screen overflow-hidden  overflow-y-auto">

            <div class="flex w-full justify-center rounded-lg items-center border-x border-secondary ">
                <h1 class="text-4xl lg:my-5 my-3  md:text-7xl font-bold font-passero text-center  text-white ">
                    My
                    <span class="text-secondary ">
                        Cart
                    </span>
                </h1>
            </div>
            @auth
                <div class="flex flex-col justify-center gap-4 border border-secondary w-full overflow-hidden overflow-y-auto rounded-xl bg-black/40 backdrop-blur-xl p-8">
                    <p class="font-poppins text-gray-400"> -- Please select your desired quantity --</p>
                    <div id="items" class="flex flex-col justify-center mb-8 gap-4">
                        
                        {{--  Cart Content To Be Filles --}}
                        
                    </div>
                    <div id="bottomCart" class="flex justify-around items-center gap-8">
                        <div class="group  relative w-fit">
                            <button id="clear-cart" class="text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607l1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4a2 2 0 0 0 0-4h7a2 2 0 1 0 0 4a2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0a1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0M7.354 5.646L8.5 6.793l1.146-1.147a.5.5 0 0 1 .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 8.207L7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5L6.646 6.354a.5.5 0 1 1 .708-.708" />
                                </svg>
                            </button>
                            <span
                                class="absolute -top-14 left-[50%] -translate-x-[50%] 
                        z-20 origin-left scale-0 px-3 w-fit rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                        group-hover:scale-100">Clear_Cart
                            </span>
                        </div>
                        <form action="/ordering" class="w-1/2" method="POST" onsubmit="handleSubmit()">
                            @csrf
                            <div id="form-inputs" class="hidden">
                                {{-- Cart Data --}}
                            </div>
                            <button type="submit" id="checkout"
                                class="bg-secondary w-full hover:opacity-50 text-black font-poppins font-extrabold rounded-full px-4 py-2 border-2 border-primary">
                                Checkout
                            </button>
                        </form>
                        <div class="flex items-center gap-4">
                            <span id="total" class="text-white font-poppins text-xl"></span>
                        </div>
                    </div>
                </div>
            @else
                <div
                    class=" bg-black/40 backdrop-blur-xl border border-secondary  p-8 flex w-full items-center justify-center pt-12">
                    <div class="flex flex-col gap-4 items-center">
                        <h1 class="text-4xl font-bold font-passero text-center text-white ">
                            Your Cart is Empty
                        </h1>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-secondary" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M22.73 22.73L1.27 1.27L0 2.54l4.39 4.39l2.21 4.66l-1.35 2.45c-.16.28-.25.61-.25.96a2 2 0 0 0 2 2h7.46l1.38 1.38c-.5.36-.84.95-.84 1.62a2 2 0 0 0 2 2c.67 0 1.26-.33 1.62-.84L21.46 24zM7.42 15a.25.25 0 0 1-.25-.25l.03-.12l.9-1.63h2.36l2 2zm8.13-2c.75 0 1.41-.41 1.75-1.03l3.58-6.47c.08-.16.12-.33.12-.5a1 1 0 0 0-1-1H6.54zM7 18a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                        </svg>
                        <a href="{{ route('login') }}"
                            class="inline-block rounded-full border-4 hover:text-black border-secondary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-200  focus:text-white focus:outline-none focus:ring-0 active:text-white motion-reduce:transition-none">
                            Login to Add Items
                        </a>
                    </div>
                </div>
            @endauth



        </div>
    </nav>
</header>
