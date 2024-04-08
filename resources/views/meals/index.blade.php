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
            class="z-40 transition-transform -translate-x-full sm:translate-x-0 rounded-2xl bg-component h-fit  col-span-1 "
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-transparent">
                <ul class="space-y-2 font-medium">
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-lg group text-white hover:bg-primary"
                            aria-controls="category_dropdown" data-collapse-toggle="category_dropdown"
                            onclick="filterByCat()">
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
                            aria-controls="Restaurant_dropdown" data-collapse-toggle="Restaurant_dropdown" onclick="filterByRestau()">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Filter By Restaurant
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="restaurant_dropdown" class="hidden py-2 space-y-2">
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
                            aria-controls="Price_dropdown" data-collapse-toggle="Price_dropdown" onclick="filterByPrice()">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Filter By Price </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="price_dropdown" class="hidden py-2 space-y-2">

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
        <div class="md:col-span-2 lg:col-span-3 p-4">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 md:gap-4">
                <a class="p-2 w-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                    href="#">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-2 border border-indigo-300 bg-component p-2 rounded-lg">
                        <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                        <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                            your
                            students care about.
                        </p>
                        <div class="mt-4">
                            <button type="button"
                                class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">Start
                                Creating</button>
                        </div>
                    </div>
                </a>

                <a class="p-2 w-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                    href="#">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-2 border border-indigo-300 bg-component p-2 rounded-lg">
                        <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                        <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                            your
                            students care about.
                        </p>
                        <div class="mt-4">
                            <button type="button"
                                class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">Start
                                Creating</button>
                        </div>
                    </div>
                </a>

                <a class="p-2 w-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                    href="#">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-2 border border-indigo-300 bg-component p-2 rounded-lg">
                        <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                        <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                            your
                            students care about.
                        </p>
                        <div class="mt-4">
                            <button type="button"
                                class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">Start
                                Creating</button>
                        </div>
                    </div>
                </a>

                <a class="p-2 w-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                    href="#">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-2 border border-indigo-300 bg-component p-2 rounded-lg">
                        <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                        <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                            your
                            students care about.
                        </p>
                        <div class="mt-4">
                            <button type="button"
                                class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">Start
                                Creating</button>
                        </div>
                    </div>
                </a>

                <a class="p-2 w-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                    href="#">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-2 border border-indigo-300 bg-component p-2 rounded-lg">
                        <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                        <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                            your
                            students care about.
                        </p>
                        <div class="mt-4">
                            <button type="button"
                                class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">Start
                                Creating</button>
                        </div>
                    </div>
                </a>

                <a class="p-2 w-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                    href="#">
                    <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                    <div class="mt-2 border border-indigo-300 bg-component p-2 rounded-lg">
                        <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                        <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                            your
                            students care about.
                        </p>
                        <div class="mt-4">
                            <button type="button"
                                class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">Start
                                Creating</button>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </section>
    {{-- <p src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></p> --}}
@endsection
@section('scripts')
    <script>
        const filterByCat = () => {
            document.getElementById('category_dropdown').classList.toggle('hidden');
        };
        const filterByRestau = () => {
            document.getElementById('restaurant_dropdown').classList.toggle('hidden');
        };
        const filterByPrice = () => {
            document.getElementById('price_dropdown').classList.toggle('hidden');
        };
    </script>
@endsection
