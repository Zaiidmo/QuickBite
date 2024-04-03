@extends('layouts.app')

@section('title', 'QuickBite | Meals')

@section('content')
    <section class="w-screen h-1/2 top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/meals-index.png') }}" alt="hero" class="w-full object-cover" />
            <div class="absolute flex flex-col items-center  ">
                <div class=" flex flex-col items-center">
                    <h1 class="text-8xl font-bold font-passero text-center mb-4 text-white ">Don't Eat <span
                            class="text-secondary">Less. </span>Just eat <span class="text-secondary">Real</span></h1>
                    <p class="text-lg max-w-4xl font-poppins text-center text-neutral-700 dark:text-neutral-300">where flavour
                        Fun. Fast. Tasty. Delicious.</p>
                </div>
                <div class="w-1/2" id='search-form'>
                    <label
                        class="mx-auto mt-8 relative bg-component min-w-sm w-full flex flex-col md:flex-row items-center justify-center text-white py-2 px-2 rounded-full gap-2 shadow-2xl focus-within:border-gray-300"
                        for="search-bar">
                        <input id="search" type="search" placeholder="Looking For Something Special ... ? " name="search"
                            class="px-6 py-2 w-2/3 rounded-md flex-1 bg-component placeholder:text-secondary" required="">
                        <button type="submit"
                            class="w-1/3 md:w-auto px-6 py-3 bg-primary font-poppins border-secondary text-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-full transition-all">
                            <div class="flex items-center transition-all opacity-1">
                                <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                                    Search
                                </span>
                            </div>
                        </button>
                    </label>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <h1 class="my-8 font-passero text-7xl text-white">Here are our <br><span class="text-secondary">Delightful</span> menus !</h1>
    </section>
@endsection
