@extends('layouts.app')

@section('title', 'QuickBite | Meals')

@section('content')
    <section class="text-gray-600 font-poppins body-font overflow-hidden max-w-screen-xl mx-auto">

        <div class="container px-5 py-36 mx-auto">
            <div
                class="flex mb-8 items-center py-2 overflow-x-auto whitespace-nowrap bg-component w-fit px-8 font-bold rounded-full">
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

            <div class="mb-8 gap-8 flex flex-col md:flex-row ">
                <div class="flex flex-col gap-2 w-full lg:w-1/2">
                    <img alt="item" class="lg:h-auto h-64 rounded-lg" src={{ asset('storage/uploads/meals/' . $meal->image) }}>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                        <img alt="item" class="rounded-lg" src={{ asset('assets/images/Pizza.jpg') }}>
                        <img alt="item" class=" rounded-lg" src={{ asset('assets/images/Pizza.jpg') }}>
                        <img alt="item" class=" rounded-lg" src={{ asset('assets/images/Pizza.jpg') }}>
                        <img alt="item" class=" rounded-lg" src={{ asset('assets/images/Pizza.jpg') }}>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full h-fit rounded-3xl lg:p-10 mt-6 lg:mt-0">

                    <h1 class="text-secondary text-3xl font-extrabold mb-2">{{ $meal->name }}</h1>
                    <p class="text-xl text-gray-400 ">{{ $meal->restaurant->name }}</p>
                    <hr class="my-8">
                    <div class="flex gap-4 mb-8">
                        <p class="text-gray-400">{{ $meal->description }}</p>
                    </div>

                    <hr>

                    <div class="flex gap-4 mt-8 justify-between items-center p-0">
                        <span class="title-font font-medium text-2xl text-gray-400">$ {{ $meal->price }}</span>

                        <button
                            class="group relative h-12 w-fit overflow-hidden rounded-lg bg-primary text-white hover:text-primary text-lg shadow">
                            <div
                                class="absolute inset-0 w-3 bg-secondary transition-all duration-[250ms] ease-out group-hover:w-full">
                            </div>
                            <div class="relative flex gap-4 px-4 items-center text-center w-fit ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 9V6H8V4h3V1h2v3h3v2h-3v3zM7 22q-.825 0-1.412-.587T5 20q0-.825.588-1.412T7 18q.825 0 1.413.588T9 20q0 .825-.587 1.413T7 22m10 0q-.825 0-1.412-.587T15 20q0-.825.588-1.412T17 18q.825 0 1.413.588T19 20q0 .825-.587 1.413T17 22M1 4V2h3.275l4.25 9h7l3.9-7H21.7l-4.4 7.95q-.275.5-.737.775T15.55 13H8.1L7 15h12v2H7q-1.125 0-1.713-.975T5.25 14.05L6.6 11.6L3 4z" />
                                </svg>
                                <span class="relative">Add To Cart</span>

                            </div>
                        </button>

                    </div>

                </div>
            </div>

            <div class="">
                <div>
                    <h1 class="text-white text-4xl font-poppins">Description</h1>
                    <hr class="my-6">
                    <p class="text-gray-400 leading-loose col-span-2">{{ $meal->description }}
                    </p>
                </div>
                <div class="flex flex-col justify-between mt-32 items-center">
                    <h1 class="text-white text-6xl font-passero">Related products</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-16 gap-4">
                        
                        @foreach ($restaurants as $restaurantItem)
                        <div
                            class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                            <img src="{{ asset('storage/uploads/meals/' . $restaurantItem->image ) }}" alt="{{$restaurantItem->name}}">

                            <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                                {{ $restaurantItem->name }}
                            </p>
                                <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                    $ {{ $restaurantItem->price }}
                                </p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="{{asset('assets/js/Navigator.js')}}"></script>
@endsection