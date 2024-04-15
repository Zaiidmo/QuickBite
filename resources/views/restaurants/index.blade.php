@extends('layouts.app')

@section('title', 'QuickBite | Restaurants')

@section('content')
<section class="w-screen h-[50vh] lg:h-1/2 top-1">
    <div class="w-full h-full flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/meals-index.png') }}" alt="hero" class="w-full h-full object-cover" />
        <div class="absolute flex flex-col items-center  ">
            <div class=" flex flex-col items-center">
                <h1 class="text-4xl md:text-6xl font-bold font-passero text-center mb-4 text-white ">Discover Culinary <span
                        class="text-secondary">Wonders: </span>Where Every Bite Tells a <span class="text-secondary">Story</span></h1>
            </div>
            <form action="" class="w-1/2 mt-12">
                <div
                    class="relative flex gap-4 p-1 rounded-full bg-component border-3 border-secondary shadow-md md:p-2">
                    <input placeholder="Looking For Someone Special ... ? "
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
            class="text-secondary">Good</span>
        Restaurant !</h1>
</section>
<section >
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 my-16">
        @foreach($restaurants as $restaurant)
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 rounded-lg shadow-md">
                <img src="{{ asset('storage/uploads/restaurants/' . $restaurant->cover) }}" alt="Restaurant Banner " class="rounded-lg w-full h-full" alt="hamburger">
            </div>

            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">{{ $restaurant->name}}
                </h3>

                <div class="flex items-center justify-center px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <a href="{{ route('restaurants.show', $restaurant)}}">
                        <button
                            class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">View Details</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
@section('scripts')
<script src="{{asset('assets/js/Navigator.js')}}"></script>
@endsection