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
                <form action="" class="w-full mt-12">
                    <div class="relative flex gap-4 p-1 rounded-full bg-component border-3 border-secondary shadow-md md:p-2">
                        <select class="hidden p-3 rounded-full border border-secondary text-white bg-transparent md:block md:p-3 md:px-8" name="domain" id="domain">
                            <option value="design">FastFood</option>
                            <option value="development">Restaurant</option>
                            <option value="marketing">Marketing</option>
                        </select>
                        <input placeholder="Looking For Something Special ... ? " class="w-full p-2 rounded-full placeholder:text-secondary bg-component " type="text">
                        <button type="button" title="Start buying" class="py-3 rounded-full text-center bg-primary border-2 border-secondary md:px-12">
                            <span class="hidden text-white font-semibold md:block">
Search
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-yellow-900 md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="text-center">
        <h1 class="my-8 font-passero text-7xl text-white">Here are our <br><span class="text-secondary">Delightful</span> menus !</h1>
    </section>
@endsection
