@extends('layouts.app')

@section('title', 'QuickBite | Home')

@section('content')
    <section class="w-screen h-screen top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/hero.jpg') }}" alt="hero" class="w-full h-full object-cover" />
            <div class="absolute flex flex-col items-center">
                <h1 class="text-4xl md:text-8xl font-bold font-passero text-center mb-4 text-white ">Welcome to <span
                        class="text-secondary">QuickBite</span></h1>
                <p class="text-lg max-w-4xl font-poppins text-center text-neutral-700 dark:text-neutral-300">where flavour
                    meets
                    speed! Indulge in a whirlwind of taste with our lightning-fast delivery service. From sizzling burgers
                    to
                    crispy fries, we bring your favourite bites straight to your doorstep. Fast, fresh, and full of delight
                    QUICKBITE, your express ticket to a feast on the fly!</p>
                @auth
                <a href="{{ route('meals.index') }}">
                    <button
                        class="mt-12 bg-gradient-to-r from-yellow-300 to-secondary hover:from-yellow-400 font-poppins font-extrabold tracking-wider hover:to-secondary text-black py-3 px-6 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
                        Discover
                    </button>
                </a>

                @else
                <div class="flex gap-8 mt-12">
                    <a href="{{rouet('register')}}" class="inline-block">
                        <button
                            class="bg-gradient-to-r from-yellow-300 to-secondary hover:from-yellow-400 hover:to-secondary text-black font-bold py-3 px-6 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
                            Get Started
                        </button>
                    </a>
                    <a href="{{route('meals.index')}}" class="inline-block">
                        <button
                            class="bg-gradient-to-r from-component to-primary hover:from-component hover:primary text-white font-bold py-3 px-6 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
                            Order Now
                        </button>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </section>
    <section class="text-center">
        <h1 class="my-8 font-passero text-4xl md:text-6xl text-white">Recommended <span class="text-secondary">Tasty</span> Food !</h1>
        <div class="my-24 mx-auto max-w-screen-xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div
                class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                <img src={{ asset('assets/images/quarter_pounder.png') }} alt="quarter_pounder">

                <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                    Quarter Pounder®* with Cheese
                </p>
                <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                    One of Kind &amp; Unique Plants Collection Here at SMKY.
                </p>
                <div class="ordernow flex flex-row justify-between items-center w-full">
                    <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                        $21.00
                    </p>
                    <p
                        class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-secondary  shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn">
                        Order Now
                    </p>
                </div>
            </div>
            <div
                class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    class="w-44 card1img aspect-square text-[#abd373] group-hover:bg-gray-800 text-5xl rounded-full p-2 transition-all duration-300 group-hover:transition-all group-hover:duration-300 group-hover:-translate-y-2 mx-auto"
                    viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 37.712 41.541 c -2.437 -10.14 2.919 -19.609 8.772 -25.137 c -6.221 11.54 -7.41 20.104 -3.461 33.177 l 2.29 -0.854 c -0.882 -2.464 -1.413 -4.873 -1.685 -7.241 c 8.23 -2.355 13.883 -7.209 15.231 -15.926 C 59.796 13.651 52.042 6.72 43.718 0.117 c 3.04 9.758 -11.581 17.964 -10.296 30.949 c 0.271 2.741 0.697 5.33 1.326 7.825"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(127,178,65); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)" stroke-linecap="round"></path>
                        <path
                            d="M 34.069 30.999 c 0.917 -12.923 13.599 -21.098 9.649 -30.883 c 1.394 8.216 -9.771 12.38 -12.663 22.195 c -1.575 5.836 -1.151 11.452 3.693 16.579 C 34.119 36.396 33.937 33.751 34.069 30.999 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(113,156,64); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)" stroke-linecap="round"></path>
                        <polygon points="68.77,61.09 70.46,47.61 43.69,47.61 19.54,47.61 21.23,61.09"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)"></polygon>
                        <polyline points="63.11,61.09 59.5,90 44.01,90 30.5,90 26.89,61.09"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)"></polyline>
                        <polygon points="62.61,65.09 63.11,61.09 26.89,61.09 27.39,65.09"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(145,107,77); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)"></polygon>
                    </g>
                </svg>

                <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                    Pizza
                </p>
                <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                    One of Kind &amp; Unique Plants Collection Here at SMKY.
                </p>
                <div class="ordernow flex flex-row justify-between items-center w-full">
                    <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                        $21.00
                    </p>
                    <p
                        class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-secondary  shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn">
                        Order Now
                    </p>
                </div>
            </div>
            <div
                class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    class="w-44 card1img aspect-square text-[#abd373] group-hover:bg-gray-800 text-5xl rounded-full p-2 transition-all duration-300 group-hover:transition-all group-hover:duration-300 group-hover:-translate-y-2 mx-auto"
                    viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 37.712 41.541 c -2.437 -10.14 2.919 -19.609 8.772 -25.137 c -6.221 11.54 -7.41 20.104 -3.461 33.177 l 2.29 -0.854 c -0.882 -2.464 -1.413 -4.873 -1.685 -7.241 c 8.23 -2.355 13.883 -7.209 15.231 -15.926 C 59.796 13.651 52.042 6.72 43.718 0.117 c 3.04 9.758 -11.581 17.964 -10.296 30.949 c 0.271 2.741 0.697 5.33 1.326 7.825"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(127,178,65); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)" stroke-linecap="round"></path>
                        <path
                            d="M 34.069 30.999 c 0.917 -12.923 13.599 -21.098 9.649 -30.883 c 1.394 8.216 -9.771 12.38 -12.663 22.195 c -1.575 5.836 -1.151 11.452 3.693 16.579 C 34.119 36.396 33.937 33.751 34.069 30.999 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(113,156,64); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)" stroke-linecap="round"></path>
                        <polygon points="68.77,61.09 70.46,47.61 43.69,47.61 19.54,47.61 21.23,61.09"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)"></polygon>
                        <polyline points="63.11,61.09 59.5,90 44.01,90 30.5,90 26.89,61.09"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(160,126,99); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)"></polyline>
                        <polygon points="62.61,65.09 63.11,61.09 26.89,61.09 27.39,65.09"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(145,107,77); fill-rule: nonzero; opacity: 1;"
                            transform="matrix(1 0 0 1 0 0)"></polygon>
                    </g>
                </svg>

                <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                    Pizza
                </p>
                <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                    One of Kind &amp; Unique Plants Collection Here at SMKY.
                </p>
                <div class="ordernow flex flex-row justify-between items-center w-full">
                    <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                        $21.00
                    </p>
                    <p
                        class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-white/10 bg-secondary  shadow-[10px_10px_150px_#ff9f0d] cursor-pointer py-2 px-4 text-sm font-semibold rounded-full butn">
                        Order Now
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section class="bg-component text-center py-12 ">
        <h1 class="font-passero text-6xl text-white">Most <span class="text-secondary">Popular</span> Categories !</h1>
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 mt-16">
            <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
                <div class="w-full h-64 rounded-lg shadow-md">
                    <img src={{ asset('assets/images/hamburger.jpg') }} class="rounded-lg w-full h-full" alt="hamburger">
                </div>

                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                    <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">Hamburger
                    </h3>

                    <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                        <span class="font-bold text-gray-800 dark:text-gray-200">20 Items</span>
                        <button
                            class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Add
                            to cart</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
                <div class="w-full h-64 rounded-lg shadow-md">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="rounded-lg w-full h-full" alt="Pizza">
                </div>

                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                    <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">Pizza</h3>

                    <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                        <span class="font-bold text-gray-800 dark:text-gray-200">123 Items</span>
                        <button
                            class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Add
                            to cart</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
                <div class="w-full h-64 rounded-lg shadow-md">
                    <img src={{ asset('assets/images/BBQ.jpg') }} class="rounded-lg w-full h-full" alt="Pizza">
                </div>

                <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                    <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">BBQ</h3>

                    <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                        <span class="font-bold text-gray-800 dark:text-gray-200">10 Items</span>
                        <button
                            class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Add
                            to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-screen h-screen top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/Testimonials.png') }}" alt="hero" class="w-full h-full object-cover" />
            <div class="absolute w-full py-8  flex flex-col items-center md:justify-around">
                <div class="flex flex-col justify-center">
                    <h1 class="text-5xl font-bold font-passero text-center mb-4 text-white "> Our Valuable Clients</h1>
                    <p class="text-xl max-w-4xl font-passero text-center text-neutral-700 dark:text-neutral-300">What
                        people are saying about us ?</p>
                </div>

                <div class="max-w-screen-lg self-center mx-auto px-8 lg:px-0 text-center">
                    <div
                        class="flex flex-col gap-12 items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                        <div class="flex w-full justify-around text-white">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68"
                                    viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="m16 8l1.43 1.393L11.85 15H24v2H11.85l5.58 5.573L16 24l-8-8z" />
                                    <path fill="currentColor"
                                        d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14m0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4" />
                                </svg>
                            </button>
                            <img class="w-36 lg:w-56 h-36 lg:h-56 border-8 border-secondary rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                alt="profile picture">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68"
                                    viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8z" />
                                    <path fill="currentColor"
                                        d="M16 30a14 14 0 1 1 14-14a14.016 14.016 0 0 1-14 14m0-26a12 12 0 1 0 12 12A12.014 12.014 0 0 0 16 4" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col gap-3 items-center">
                            <cite class="text-xl font-medium text-white">Michael Gough</cite>
                            <cite class="text-sm text-gray-400">CEO at Google</cite>
                        </div>
                    </div>
                    <svg class="w-10 lg:w-20 h-10 lg:h-20 mx-auto mb-3 text-gray-400 dark:text-gray-600"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                    <blockquote>
                        <p class="text-xl lg:text-3xl  italic font-poppins font-medium  text-white">"Flowbite is just
                            awesome. It
                            contains tons of predesigned components and pages starting from login screen to complex
                            dashboard. Perfect choice for your next SaaS application."</p>
                    </blockquote>
                </div>

            </div>
    </section>
    <section class="w-full bg-transparent mt-12">
        <h1 class="my-12 text-3xl lg:text-5xl font-bold font-passero mb-4 text-white text-center">
            Share Your Ideas With Us
        </h1>


        <form class="max-w-screen-xl lg:my-auto lg:mx-auto mx-4">
            <div class="flex gap-12 mb-5">
                <div class="w-1/2">
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-300">Your First Name</label>
                    <input type="text" id="firstname" name="fname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-secondary focus:border-secondary block w-full p-2.5 "
                        placeholder="First Name" required />
                </div>
                <div class="w-1/2">
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Last
                        Name</label>
                    <input type="text" id="lastname" name="lname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-secondary focus:border-secondary block w-full p-2.5 "
                        placeholder="Last Name" required />
                </div>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    Email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-secondary focus:border-secondary block w-full p-2.5 "
                    placeholder="email@example.com" required />
            </div>
            <div class="mb-5">
                <textarea name="message" id="message" placeholder="Your Message Here"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-secondary focus:border-secondary block w-full p-2.5 "
                    rows="5"></textarea>

            </div>
            <button type="submit"
                class="text-black mb-5 bg-secondary  hover:bg-component focus:ring-4 focus:outline-none hover:text-white focus:ring-primary font-medium rounded-2xl text-sm w-full px-5 py-2.5 text-center ">Submit</button>
        </form>

        <div class="max-w-screen-xl lg:mx-auto flex items-center justify-between my-12 mx-4">
            <div class="flex flex-col lg:flex-row gap-4">
                <div class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-14 lg:h-14 w-10 h-10" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13 8a3 3 0 0 1 3 3a1 1 0 0 0 2 0a5 5 0 0 0-5-5a1 1 0 0 0 0 2" />
                        <path fill="currentColor"
                            d="M13 4a7 7 0 0 1 7 7a1 1 0 0 0 2 0a9 9 0 0 0-9-9a1 1 0 0 0 0 2m8.75 11.91a1 1 0 0 0-.72-.65l-6-1.37a1 1 0 0 0-.92.26c-.14.13-.15.14-.8 1.38a9.91 9.91 0 0 1-4.87-4.89C9.71 10 9.72 10 9.85 9.85a1 1 0 0 0 .26-.92L8.74 3a1 1 0 0 0-.65-.72a3.79 3.79 0 0 0-.72-.18A3.94 3.94 0 0 0 6.6 2A4.6 4.6 0 0 0 2 6.6A15.42 15.42 0 0 0 17.4 22a4.6 4.6 0 0 0 4.6-4.6a4.77 4.77 0 0 0-.06-.76a4.34 4.34 0 0 0-.19-.73" />
                    </svg>
                </div>
                <div class="flex flex-col justify-between items-start">
                    <p class="text-sm lg:text-xl max-w-4xl font-extrabold font-poppins text-center text-neutral-100 uppercase">Phone
                    </p>
                    <p class="text-sm lg:text-lg max-w-4xl font-bold font-poppins text-center text-secondary uppercase ">+212
                        524646666</p>
                </div>

            </div>
            <div class="flex justify-between">
                <div class="flex flex-col-reverse items-end lg:flex-row gap-4">
                    <div class="flex flex-col justify-between items-end">
                        <p class="text-sm lg:text-xl max-w-4xl font-extrabold font-poppins text-center text-neutral-100 uppercase">
                            Email</p>
                        <p class="text-sm lg:text-xl max-w-4xl font-bold font-poppins text-center text-secondary uppercase ">
                            Contact@quickbite.com</p>
                    </div>
                    <div class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-14 lg:h-14 w-10 h-10" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </section>  
@endsection
@section('scripts')
<script src={{ asset('assets/js/Navigator.js')}}></script>
@endsection
