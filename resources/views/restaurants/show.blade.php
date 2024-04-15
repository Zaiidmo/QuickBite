@extends('layouts.app')
@section('title', 'Restaurants')
@section('content')
    <section class="py-36">
        @if ($errors->any())
                <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul class="list-disc mt-2 ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <img class="border-2 border-secondary p-8 w-screen rounded-3xl" src="{{ asset('storage/uploads/restaurants/' . $restaurant->cover) }}"
                alt="Cover">
        </div>
        <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="flex justify-between ">
                <h1 class="text-4xl font-passero text-white">{{ $restaurant->name }}</h1>
                {{-- <div class="font-buttons w-fit bg-secondary flex justify-between items-center px-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="m426.24 127.72l-10.94 10.94a29.67 29.67 0 0 1-42-42l10.94-10.94L314.52 16l-88 88l-4 12.09l-12.09 4L16 314.52l69.76 69.76l10.94-10.94a29.67 29.67 0 0 1 42 42l-10.94 10.94L197.48 496l194.4-194.4l4-12.09l12.09-4l88-88Zm-208.56 5.43l21.87-21.87l33 33l-21.88 21.87Zm43 43l21.88-21.88l32.52 32.52l-21.88 21.88Zm42.56 42.56l21.88-21.88l32.52 32.52l-21.84 21.93Zm75.57 75.56l-33-33l21.87-21.88l33 33Z" />
                    </svg>
                    <button id="toggle-update-modal">Edit this Restaurant</button>
                </div> --}}
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-8 lg:p-6 max-w-screen-xl mx-auto">
            <div class="col-span-1 flex flex-col gap-8 items-start">
                <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Working Hours</h4>
                <div class="flex flex-col gap-4 justify-between">
                    <div class="flex justify-start items-center  gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#ffffff"
                                d="M22 2.25h-3.25V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25H2a2 2 0 0 0-2 1.999v17.75a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4.249a2 2 0 0 0-2-1.999M22.5 22a.5.5 0 0 1-.499.5H2a.5.5 0 0 1-.5-.5V4.25a.5.5 0 0 1 .5-.499h3.25v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751H22a.5.5 0 0 1 .499.499z" />
                            <path fill="#ffffff"
                                d="M5.25 9h3v2.25h-3zm0 3.75h3V15h-3zm0 3.75h3v2.25h-3zm5.25 0h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3zm5.25 7.5h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3z" />
                        </svg>
                        <p class="text-white font-poppins text-lg">24/7</p>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col gap-8 items-start">
                <div class="flex flex-col gap-4 justify-between">
                    <div class="flex flex-col gap-8 items-start">
                        <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Owned By</h4>
                        <div class="flex flex-col gap-4 justify-between">
                            <div class="flex justify-start items-center  gap-4">
                                <img class="rounded-full w-12 h-12 border-2 border-secondary"
                                    src="{{ asset('assets/images/avatar.jpg') }}" alt="User photo">
                                <div class="flex flex-col justify-between">
                                    <p class="text-white font-poppins text-lg">{{ $restaurant->user->username }}</p>
                                    <p class="text-white font-poppins text-lg">{{ $restaurant->user->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col gap-8 items-start">
                <h4 class="text-white font-poppins text-xl font-bold tracking-widest">{{ $restaurant->address }}</h4>
                <div class="flex gap-4 items justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <g fill="none" fill-rule="evenodd">
                            <path
                                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path fill="#ffffff"
                                d="M12 2a9 9 0 0 1 9 9c0 3.074-1.676 5.59-3.442 7.395a20.441 20.441 0 0 1-2.876 2.416l-.426.29l-.2.133l-.377.24l-.336.205l-.416.242a1.874 1.874 0 0 1-1.854 0l-.416-.242l-.52-.32l-.192-.125l-.41-.273a20.638 20.638 0 0 1-3.093-2.566C4.676 16.589 3 14.074 3 11a9 9 0 0 1 9-9m0 2a7 7 0 0 0-7 7c0 2.322 1.272 4.36 2.871 5.996a18.03 18.03 0 0 0 2.222 1.91l.458.326c.148.103.29.199.427.288l.39.25l.343.209l.289.169l.455-.269l.367-.23c.195-.124.405-.263.627-.417l.458-.326a18.03 18.03 0 0 0 2.222-1.91C17.728 15.361 19 13.322 19 11a7 7 0 0 0-7-7m0 3a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 2a2 2 0 1 0 0 4a2 2 0 0 0 0-4" />
                        </g>
                    </svg>
                    <p class="text-white font-poppins w-fit">shihaja</p>
                </div>
            </div>
            <div class="col-span-1 flex flex-col gap-8 text-white items-start">
                <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Contact</h4>
                <div class="flex gap-4 items justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                    </svg>
                    <p class="text-white font-poppins w-fit">{{ $restaurant->phone }}</p>
                </div>
                <div class="flex gap-4 items justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
                    </svg>
                    <p class="text-white font-poppins w-fit">{{ $restaurant->email }}</p>
                </div>
            </div>
        </div>

    </section>

    <section class="max-w-screen-xl mx-auto">
        <h1 class="my-4 md:my-8 font-passero text-center text-4xl md:text-7xl text-white">Here is our <br><span
                class="text-secondary">Delightful</span>
            menu !</h1>
        <hr class="my-2 text-secondary">
    </section>
    <section class="max-w-screen-xl  mx-auto gap-4 mt-8 text-center grid grid-cols-1 md:grid-cols-3  lg:grid-cols-4">
        <div id="sidebar-multi-level-sidebar"
            class="z-40 transition-transform -translate-x-full sm:translate-x-0 rounded-2xl bg-component h-fit  col-span-1 "
            aria-label="Sidebar">
            <div class="h-full pl-3 py-4 overflow-y-auto bg-transparent">
                <ul class="space-y-2 font-medium">
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                    <li>
                        <button type="button"
                            class="flex border-2-b font-poppins font-bold border-secondary items-center w-full p-2 transition duration-75 rounded-l-lg group text-white hover:bg-primary">
                            Category 1
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- component -->
        <div class="md:col-span-2 lg:col-span-3 p-4">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 md:gap-4">
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="p-2 w-fit h-fit border border-indigo-300 rounded-2xl hover:shadow-md hover:shadow-secondary flex flex-col items-center"
                        href="#">
                        <img src={{ asset('assets/images/Pizza.jpg') }} class="shadow rounded-lg overflow-hidden border">
                        <div class="mt-2 border w-full border-indigo-300 bg-component p-2 rounded-lg">
                            <h4 class="font-bold font-poppins text-secondary text-xl">Pizza Pepperoni</h4>
                            {{-- <p class="mt-2 font-poppins text-white">Create Exercises for any subject with the topics you and
                                your
                                students care about.
                            </p> --}}
                            <div class="mt-4">
                                <button type="button"
                                    class="font-poppins border-2 border-secondary inline-flex items-center rounded-full  bg-primary px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-secondary hover:text-black hover:border-primary">23 $</button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </section>
    
@endsection
@section('scripts')
<script src="{{asset('assets/js/Navigator.js')}}"></script>
@endsection
