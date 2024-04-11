@extends('layouts.app')
@section('title', 'Restaurants')
@section('content')
    <section class="py-36">
        <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <img class="border-2 border-secondary p-8 w-screen rounded-3xl"
                src="data:image/jpeg;base64,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"
                alt="">
        </div>
        <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="flex justify-between ">
                <h1 class="text-4xl font-passero text-white">Restaurant Name</h1>
                <div class="font-buttons w-fit bg-secondary flex justify-between items-center px-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="m426.24 127.72l-10.94 10.94a29.67 29.67 0 0 1-42-42l10.94-10.94L314.52 16l-88 88l-4 12.09l-12.09 4L16 314.52l69.76 69.76l10.94-10.94a29.67 29.67 0 0 1 42 42l-10.94 10.94L197.48 496l194.4-194.4l4-12.09l12.09-4l88-88Zm-208.56 5.43l21.87-21.87l33 33l-21.88 21.87Zm43 43l21.88-21.88l32.52 32.52l-21.88 21.88Zm42.56 42.56l21.88-21.88l32.52 32.52l-21.84 21.93Zm75.57 75.56l-33-33l21.87-21.88l33 33Z" />
                    </svg>
                    <button id="toggle-update-modal">Edit this Restaurant</button>
                </div>
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
                                    <p class="text-white font-poppins text-lg">Owner</p>
                                    <p class="text-white font-poppins text-lg">Email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col gap-8 items-start">
                <h4 class="text-white font-poppins text-xl font-bold tracking-widest">Location</h4>
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
                    <p class="text-white font-poppins w-fit">+212 666 666666</p>
                </div>
                <div class="flex gap-4 items justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z"/></svg>
                    <p class="text-white font-poppins w-fit">contact@restaurant.com</p>
                </div>
            </div>
        </div>

    </section>

    <section class="max-w-screen-xl mx-auto">
        <h1 class="my-4 md:my-8 font-passero text-center text-4xl md:text-7xl text-white">Here is our <br><span
            class="text-secondary">Delightful</span>
        menu !</h1>
    </section>
    {{-- <section id="update-popup" class="hidden">
        <div id="update-popup-container"
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
            <div class="bg-white shadow-md rounded-lg max-w-2xl my-16 w-full">

                <div class="relative bg-black border-2 border-primary rounded-lg shadow">
                    <button id="update-popup-close" type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                            aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                cliprule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close popup</span>
                    </button>

                    <div class="p-5">

                        <div class="text-center">
                            <p class="mb-1 text-2xl font-semibold leading-10 text-subtle">
                                Update The Event
                            </p>
                            <p class="mb-1 text-2xl font-buttons font-semibold leading-10 text-subtle">
                                {{ $event->title }}
                            </p>
                        </div>

                        <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide"
                            action="{{ route('events.update', ['event' => $event]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="flex flex-row justify-between mt-8 gap-8">
                                <div class="w-full">
                                    <label for="Event Title" class="block text-sm text-gray-500 dark:text-gray-300">Event
                                        Title</label>
                                    <input type="text" value="{{ $event->title }}" name="title"
                                        class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                        required />
                                </div>
                                <div class="w-full">
                                    <label for="Event Location"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Category</label>
                                    <select name="category_id"
                                        class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                        required>
                                        <option selected disabled>{{ $event->category->name }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mt-8">
                                <label for="event-description"
                                    class="block text-sm text-gray-500 dark:text-gray-300">Event Description</label>
                                <textarea id="event-description" name="description" placeholder="Let's have fun..."
                                    class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                    required></textarea>
                            </div>


                            <div class="flex flex-row justify-between mt-8 gap-8">
                                <div class="w-full">
                                    <label for="Event date" class="block text-sm text-gray-500 dark:text-gray-300">Event
                                        date</label>
                                    <input type="date" value="{{ $event->date }}" name="date"
                                        class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                                </div>
                                <div class="w-full">
                                    <label for="Event Location"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Event
                                        Location</label>
                                    <input type="text" value="{{ $event->location }}" name="location"
                                        class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                                </div>
                            </div>

                            <div class="flex flex-row justify-between mt-8 gap-8">
                                <div class="w-full">
                                    <label for="Event Capacity"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Event
                                        Capacity</label>
                                    <input type="text" value="{{ $event->capacity }}" name="capacity"
                                        class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                                </div>
                                <div class="w-full">
                                    <label for="Ticket Price"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Ticket
                                        Price</label>
                                    <input type="text" value="$ {{ $event->ticket_price }}" name="ticket_price"
                                        class="block  mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 " />
                                </div>
                                <div class="w-full">
                                    <label for="Reservation Mode"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Reservation Mode</label>
                                    <select name="mode"
                                        class="block mt-2 w-full placeholder-gray-500 rounded-lg border border-gray-200 bg-gray-700 px-5 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"
                                        required>
                                        <option selected disabled>{{ $event->mode }}</option>
                                        <option value="auto">auto</option>
                                        <option value="manual">manual</option>
                                    </select>

                                </div>
                            </div>

                            <div class="mt-8 w-full">
                                <label for="poster" class="block text-sm text-gray-500 dark:text-gray-300">Upload a
                                    Poster</label>
                                <label for="poster"
                                    class="flex flex-col items-center w-full p-5 mt-2 text-center bg-gray-700 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                    </svg>

                                    <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload a
                                        poster</h2>

                                    <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg &
                                        drop your
                                        file JPG, JPEG, PNG. </p> <input name="poster" id="poster" type="file"
                                        class="hidden" required />
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit"
                                class="mt-8 py-2.5 w-full border-2 border-secondary text-lg font-poppins tracking-widest font-bold rounded-lg text-subtle">
                                U P D A T E
                            </button>
                        </form>

                        <form action="{{ route('events.destroy', ['event' => $event]) }}">
                            <button type="submit"
                                class="mt-2 py-2.5 w-full bg-primary text-lg font-poppins tracking-widest font-extrabold rounded-lg text-subtle">
                                D E L E T E
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section> --}}
@endsection
@section('scripts')
@endsection
