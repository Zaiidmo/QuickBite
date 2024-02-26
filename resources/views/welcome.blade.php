@extends('layouts.app')

@section('title', 'QuickBite | Home')

@section('content')
    <section class="w-screen h-screen top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/hero.jpg') }}" alt="hero" class="w-full h-full object-cover" />
            <div class="absolute flex flex-col items-center">
                <h1 class="text-8xl font-bold font-passero text-center mb-4 text-white ">Welcome to <span
                        class="text-secondary">QuickBite</span></h1>
                <p class="text-lg max-w-4xl font-poppins text-center text-neutral-700 dark:text-neutral-300">where flavour
                    meets
                    speed! Indulge in a whirlwind of taste with our lightning-fast delivery service. From sizzling burgers
                    to
                    crispy fries, we bring your favourite bites straight to your doorstep. Fast, fresh, and full of delight
                    QUICKBITE, your express ticket to a feast on the fly!</p>
                <div class="flex gap-8 mt-12">
                    <button
                        class="bg-gradient-to-r from-yellow-300 to-secondary hover:from-yellow-400 hover:to-secondary text-black font-bold py-3 px-6 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
                        Get Started
                    </button>
                    <button
                        class="bg-gradient-to-r from-component to-primary hover:from-component hover:primary text-white font-bold py-3 px-6 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
                        Order Now
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <h1 class="my-8 font-passero text-6xl text-white">Recommended <span class="text-secondary">Tasty</span> Food !</h1>
        <div class="my-24 mx-auto max-w-screen-xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
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
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-16">
            <div class="relative overflow-hidden w-60 h-80 rounded-3xl cursor-pointer text-2xl font-bold bg-secondary">
                <div class="z-10 absolute w-full h-full peer"></div>
                <div
                    class="absolute peer-hover:-top-20 peer-hover:-left-16 peer-hover:w-[140%] peer-hover:h-[140%] -top-32 -left-16 w-32 h-44 rounded-full bg-yellow-200 transition-all duration-500">
                </div>
                <div
                    class="absolute flex text-xl text-center items-end justify-end peer-hover:right-0 peer-hover:rounded-b-none peer-hover:bottom-0 peer-hover:items-center peer-hover:justify-center peer-hover:w-full peer-hover:h-full -bottom-32 -right-16 w-36 h-44 rounded-full bg-yellow-200 transition-all duration-500">
                    Total Number Of Products : 66
                </div>
                <div class="w-full h-full items-center justify-center flex uppercase">
                    Category
                </div>
            </div>
        </div>
    </section>
@endsection
