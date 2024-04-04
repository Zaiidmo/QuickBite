@extends('layouts.app')

@section('title', 'QuickBite | Meals')

@section('content')
    <section class="text-gray-600 body-font overflow-hidden">

        <div class="container px-5 py-36 mx-auto">
            <div class="flex items-center py-2 overflow-x-auto whitespace-nowrap bg-component w-fit px-8 rounded-full">
                <a href="/" class="text-gray-600 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>

                <a href="meals" class="text-gray-600 dark:text-gray-200 hover:underline">
                    Meals
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>

                <a href="#" class="text-secondary hover:underline">
                    This Meals
                </a>
            </div>

            <div class="lg:w-4/5 mx-auto flex">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64" style="border-radius: 3rem;" src="">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-10 mt-6 lg:mt-0">

                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Name</h1>
                    <p class="text-xl fonct-bold">Price</p>

                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                        <div class="flex">
                            <span class="mr-3">Color</span>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                        </div>
                        <div class="flex ml-6 items-center">
                            <span class="mr-3">Size</span>
                            <div class="relative">
                                <select
                                    class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                    <option>SM</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                                <span
                                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span>Shipping</span>
                        <div>
                            <h3>Free Shipping to Your Location</h3>
                            <p>Delivery Time: 14–17 days</p>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-8">
                        <h3>Quantity</h3>
                        <form action="">
                            <input class="h-6" type="number" id="tentacles" name="tentacles" min="0"
                                max="100" />
                        </form>
                        <p>50 available / 104 sold</p>
                    </div>

                    <div class="flex">
                        {{-- <span class="title-font font-medium text-2xl text-gray-900">$58.00</span> --}}
                        <div class="mt-4 bg-gray-200 rounded-lg	p-4">
                            <h3 class="text-black text-xl text-fontbold">$79.98</h3>
                            <hr class="my-6 border-gray-400 sm:mx-auto dark:border-gray-700 lg:my-8" />
                            <div class="flex justify-items-center justify-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0m0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01M736 480H544V288c0-17.664-14.336-32-32-32s-32 14.336-32 32v192H288c-17.664 0-32 14.336-32 32s14.336 32 32 32h192v192c0 17.664 14.336 32 32 32s32-14.336 32-32V544h192c17.664 0 32-14.336 32-32s-14.336-32-32-32" />
                                </svg>
                                <p>Add shipping insurance for $9( declared value only if the package gets lost, stolen or
                                    damaged.)</p>
                            </div>
                        </div>

                    </div>

                    <div class="flex gap-4 mt-8 justify-center p-0">
                        <button class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
                            <div
                                class="absolute inset-0 w-3 bg-primary transition-all duration-[250ms] ease-out group-hover:w-full">
                            </div>
                            <span class="relative text-black group-hover:text-white">Shop now</span>
                        </button>

                        <form action="" method="POST">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="id" value="#">

                            <button type="submit"
                                class="group relative h-12 w-64 overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div
                                    class="absolute inset-0 w-3 bg-gray-200 transition-all duration-[250ms] ease-out group-hover:w-full">
                                </div>
                                <div class="flex gap-4 px-4">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.75 6.5L9.75 7.5C9.75 9.15685 11.0931 10.5 12.75 10.5C14.4069 10.5 15.75 9.15685 15.75 7.5V6.5"
                                            stroke="#434343" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M21.4165 13.5L20.3069 6.8424C19.9855 4.91365 18.3167 3.5 16.3613 3.5H9.13836C7.183 3.5 5.51424 4.91365 5.19278 6.8424L3.52612 16.8424C3.11976 19.2805 4.99994 21.5 7.47169 21.5H13.7499"
                                            stroke="#434343" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19.75 15.5L19.75 21.5" stroke="#434343" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M22.75 18.5L16.75 18.5" stroke="#434343" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span class="relative text-black group-hover:text-white">Add to basket</span>
                                </div>
                            </button>
                    </div>

                </div>
            </div>


        </div>
    </section>
@endsection
