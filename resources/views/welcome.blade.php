@extends('layouts.app')

@section('title', 'QuickBite | Home')

@section('content')
    <section class="w-screen h-screen top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/hero.jpg') }}" alt="hero" class="w-full h-full object-cover" />
            <div class="absolute">
                <h1 class="text-8xl font-bold font-passero text-center mb-4 text-white ">Welcome to <span
                        class="text-secondary">QuickBite</span></h1>
                <p class="text-lg max-w-4xl font-poppins text-center text-neutral-700 dark:text-neutral-300">where flavour meets
                    speed! Indulge in a whirlwind of taste with our lightning-fast delivery service. From sizzling burgers to
                    crispy fries, we bring your favourite bites straight to your doorstep. Fast, fresh, and full of delight
                    QUICKBITE, your express ticket to a feast on the fly!</p>
            </div>
            </div>
    </section>
@endsection
