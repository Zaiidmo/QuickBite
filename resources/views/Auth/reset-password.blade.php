@extends('layouts.noFooterMaster')

@section('title', 'QuickBite | Reset Password')

@section('content')
    <section class="overflow-hidden h-screen relative font-poppins ">
        {{-- <img class="w-full h-full relative" src="{{ asset('assets/images/background.jpg') }}" alt="Cover"> --}}
        <div class="min-h-screen bg-component flex justify-center items-center">
            <div class="absolute w-60 h-60 rounded-xl bg-secondary -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
            </div>
            <div class="absolute w-48 h-48 rounded-xl bg-secondary -bottom-6 -right-10 transform rotate-12 hidden md:block">
            </div>
            {{-- Modal --}}
            <div
                class="p-12 w-full max-w-lg text-center max-h-full bg-primary border-2 border-secondary rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="text-3xl text-white font-passero font-bold text-center tracking-wider mb-4 ">
                        Reseting Password ... </h1>
                    <p class="text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide">Please provide the demanded credentials</p>
                </div>
                {{--  Form --}}
                @if (session('success'))
                    <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative "
                        role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative "
                        role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('password-reset.send')}}" method="POST" class="flex text-start flex-col gap-4">
                    @csrf
                    <div class="flex  flex-col gap-2">
                        <label class="text-white" for="username">Email</label>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 16">
                                        <path
                                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                        <path
                                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                    </svg>
                                </div>
                                <input type="text" name="email" id="email"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="email@quickbite.com">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                            <label class="text-white" for="password">New Password</label>
                            
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70 text-gray-300">
                                        <path fill-rule="evenodd"
                                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" name = "password" id="password"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="********">
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="self-center w-1/2 py-2 text-xl text-white bg-primary border-2 rounded-xl hover:text-black hover:bg-secondary hover:border-secondary uppercase font-extrabold transition-all">S e n d</button>
                </form>
            </div>
            <div class="w-40 h-40 absolute bg-secondary rounded-full top-0 right-12 hidden md:block"></div>
            <div class="w-20 h-40 absolute bg-secondary rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
            </div>
        </div>

    </section>
@endsection

@section('scripts')
<script src="{{asset('assets/js/Navigator.js')}}"></script>
@endsection