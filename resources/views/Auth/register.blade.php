@extends('layouts.app')

@section('title', 'QuickBite | Register')

@section('content')
<section class="h-screen relative font-poppins ">
    {{-- <img class="w-full h-full relative" src="{{ asset('assets/images/background.jpg') }}" alt="Cover"> --}}
    <div class="min-h-screen bg-component flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-secondary -top-5 -left-16 z-0 transform rotate-45 hidden md:block"></div>
        <div class="absolute w-48 h-48 rounded-xl bg-secondary -bottom-6 -right-10 transform rotate-12 hidden md:block"></div>
        <div class="py-12 px-12 backdrop-blur-sm bg-secondary rounded-2xl shadow-xl z-20">
          <div>
            <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
            <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an account to enjoy all the services without any ads for free!</p>
          </div>
          <div class="space-y-4">
            <input type="text" placeholder="Email Addres" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
            <input type="text" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
          </div>
          <div class="text-center mt-6">
            <button class="w-full py-2 text-xl text-white bg-purple-400 rounded-lg hover:bg-purple-500 transition-all">Create Account</button>
            <p class="mt-4 text-sm">Already Have An Account? <span class="underline  cursor-pointer"> Sign In</span></p>
          </div>
        </div>
        <div class="w-40 h-40 absolute bg-secondary rounded-full top-0 right-12 hidden md:block"></div>
        <div class="w-20 h-40 absolute bg-secondary rounded-full bottom-20 left-10 transform rotate-45 hidden md:block"></div>
      </div>
      
</section>
@endsection 