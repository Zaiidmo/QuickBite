@extends('layouts.app')

@section('title', 'QuickBite | Meals')

@section('content')
    <section class="w-screen h-[50vh] lg:h-1/2 top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/meals-index.png') }}" alt="hero" class="w-full h-full object-cover" />
            <div class="absolute flex flex-col items-center  ">
                <div class=" flex flex-col items-center">
                    <h1 class="text-4xl md:text-8xl font-bold font-passero text-center mb-4 text-white ">Don't Eat <span
                            class="text-secondary">Less. </span>Just eat <span class="text-secondary">Real</span></h1>
                    <p class="text-lg max-w-4xl font-poppins text-center text-neutral-700 dark:text-neutral-300">where
                        flavour
                        Fun. Fast. Tasty. Delicious.</p>
                </div>
                <form action="" class="w-1/2 mt-12">
                    <div
                        class="relative flex gap-4 p-1 rounded-full bg-component border-3 border-secondary shadow-md md:p-2">
                        <input placeholder="Looking For Something Special ... ? "
                            class="w-full p-2 rounded-full placeholder:text-secondary bg-component " type="text">
                        <button type="button" title="Start buying"
                            class="py-3 rounded-full text-center bg-primary border-2 border-secondary md:px-12">
                            <span class="hidden text-white font-semibold md:block">
                                Search
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-yellow-900 md:hidden"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="text-center pb-12 border-b">
        <h1 class="my-4 md:my-8 font-passero text-4xl md:text-7xl text-white">Here are our <br><span
                class="text-secondary">Delightful</span>
            menus !</h1>
    </section>
    <section class="max-w-screen-xl  mx-auto gap-4 mt-8 text-center grid grid-cols-1 md:grid-cols-3  lg:grid-cols-4">
        <div id="sidebar-multi-level-sidebar"
            class="hidden z-40 transition-transform -translate-x-full sm:translate-x-0 rounded-2xl bg-component h-fit  col-span-1 "
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-transparent">
                <ul class="space-y-2 font-medium">
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-lg group text-white hover:bg-primary"
                            aria-controls="category_dropdown" data-collapse-toggle="category_dropdown">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Filter By Category </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="category_dropdown" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group  text-white hover:border hover:border-2-primary">Pizza</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group  text-white hover:border hover:border-2-primary">Burger</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group  text-white hover:border hover:border-2-primary">Breakfasts</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="space-y-2 font-medium">
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-lg group text-white hover:bg-primary"
                            aria-controls="Restaurant_dropdown" data-collapse-toggle="Restaurant_dropdown">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Filter By Restaurant
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="Restaurant_dropdown" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group  text-white hover:border hover:border-2-primary">Youcode</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group  text-white hover:border hover:border-2-primary">Djaj</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group  text-white hover:border hover:border-2-primary">Hoooot</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="space-y-2 font-medium">
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-lg group text-white hover:bg-primary"
                            aria-controls="Price_dropdown" data-collapse-toggle="Price_dropdown">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Filter By Price </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="Price_dropdown" class="hidden py-2 space-y-2">

                            <div class="relative mb-6">
                                <label for="labels-range-input" class="sr-only">Price_range</label>
                                <input id="labels-range-input" type="range" value="1000" min="100"
                                    max="1500" class="w-fit h-2 rounded-lg appearance-none cursor-pointer ">
                                <span class="text-sm text-gray-400 absolute start-0 -bottom-6">Min
                                    ($100)</span>
                                <span class="text-sm text-gray-400 absolute end-0 -bottom-6">Max
                                    ($1500)</span>
                            </div>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- component -->
        <div class="md:col-span-2 lg:col-span-3 lg:pt-24 p-4">
            <div class="grid gap-14 lg:grid-cols-3 md:grid-cols-2 md:gap-4 md:gap-y-24">
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
                <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                    <div
                        class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="w-full h-full rounded-full" alt="Pizza">
                    </div>
                    <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                    <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                    <div class="flex justify-between mt-8">
                        <p class="px-4 font-bold text-secondary">22.00 $</p>
                        <button class="text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                    <div
                        class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="w-full h-full rounded-full" alt="Pizza">
                    </div>
                    <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                    <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                    <div class="flex justify-between mt-8">
                        <p class="px-4 font-bold text-secondary">22.00 $</p>
                        <button class="text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                    <div
                        class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="w-full h-full rounded-full" alt="Pizza">
                    </div>
                    <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                    <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                    <div class="flex justify-between mt-8">
                        <p class="px-4 font-bold text-secondary">22.00 $</p>
                        <button class="text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
@endsection
