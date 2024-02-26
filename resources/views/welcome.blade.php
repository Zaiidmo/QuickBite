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
@endsection
