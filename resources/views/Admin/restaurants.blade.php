@extends('layouts.admin')

@section('title', 'Admin | Users Management')

@section('content')
    @role('super-admin')
        <section id="all" class="mx-auto overflow-hidden sm:mx-4 lg:pr-16">
            <h1 class=" text-center font-passero text-6xl text-white mb-12">
                Restaurants Management
            </h1>
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
            <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
                <table class="w-full divide-y divide-gray-400 text-center">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Restaurant Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Joined At
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Owned by
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Meals
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Income
                            </th>

                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $restaurant->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $restaurant->created_at }} </td>
                                <td scope="row"
                                    class="flex items-center justify-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="ps-3 text-left">
                                        <div class="text-base font-semibold">{{ $restaurant->user->username }}</div>
                                        <div class="font-normal text-gray-500">{{ $restaurant->user->email }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">249</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">180 $ /Month</td>

                                <td class="px-4 py-4  text-sm whitespace-nowrap">
                                    <div class="flex justify-evenly ">

                                        <button class="text-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 20 20">
                                                <path fill="currentColor"
                                                    d="m9.129 0l1.974.005c.778.094 1.46.46 2.022 1.078c.459.504.7 1.09.714 1.728h5.475a.69.69 0 0 1 .686.693a.689.689 0 0 1-.686.692l-1.836-.001v11.627c0 2.543-.949 4.178-3.041 4.178H5.419c-2.092 0-3.026-1.626-3.026-4.178V4.195H.686A.689.689 0 0 1 0 3.505c0-.383.307-.692.686-.692h5.47c.014-.514.205-1.035.554-1.55C7.23.495 8.042.074 9.129 0m6.977 4.195H3.764v11.627c0 1.888.52 2.794 1.655 2.794h9.018c1.139 0 1.67-.914 1.67-2.794zM6.716 6.34c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.726 0c.38 0 .686.31.686.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.728 0c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.685.692a.689.689 0 0 1-.686-.692v-8.05a.69.69 0 0 1 .686-.692M9.176 1.382c-.642.045-1.065.264-1.334.662c-.198.291-.297.543-.313.768l4.938-.001c-.014-.291-.129-.547-.352-.792c-.346-.38-.73-.586-1.093-.635z" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    @endrole
    <section id="all" class="mx-auto overflow-hidden sm:mx-4 lg:pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Restaurants Management
        </h1>

        <div class="group relative w-fit mb-4 flex justify-center items-center text-zinc-600 text-sm font-bold">
            {{-- <div
                class="absolute opacity-0 group-hover:opacity-100 group-hover:-translate-y-[150%] -translate-y-[300%] duration-500 group-hover:delay-500 skew-y-[20deg] group-hover:skew-y-0 shadow-md">
                <div class="bg-lime-200 flex items-center gap-1 p-2 rounded-md">
                    <svg fill="none" viewBox="0 0 24 24" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"
                        class="stroke-zinc-600">
                        <circle stroke-linejoin="round" r="9" cy="12" cx="12"></circle>
                        <path stroke-linejoin="round" d="M12 3C12 3 8.5 6 8.5 12C8.5 18 12 21 12 21"></path>
                        <path stroke-linejoin="round" d="M12 3C12 3 15.5 6 15.5 12C15.5 18 12 21 12 21"></path>
                        <path stroke-linejoin="round" d="M3 12H21"></path>
                        <path stroke-linejoin="round" d="M19.5 7.5H4.5"></path>
                        <g filter="url(#filter0_d_15_556)">
                            <path stroke-linejoin="round" d="M19.5 16.5H4.5"></path>
                        </g>
                        <defs>
                            <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="3"
                                width="17" y="16" x="3.5" id="filter0_d_15_556">
                                <feFlood result="BackgroundImageFix" flood-opacity="0"></feFlood>
                                <feColorMatrix result="hardAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                    type="matrix" in="SourceAlpha"></feColorMatrix>
                                <feOffset dy="1"></feOffset>
                                <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" type="matrix">
                                </feColorMatrix>
                                <feBlend result="effect1_dropShadow_15_556" in2="BackgroundImageFix" mode="normal">
                                </feBlend>
                                <feBlend result="shape" in2="effect1_dropShadow_15_556" in="SourceGraphic" mode="normal">
                                </feBlend>
                            </filter>
                        </defs>
                    </svg>
                    <span>Uiverse.io</span>
                </div>
                <div
                    class="shadow-md bg-lime-200 absolute bottom-0 translate-y-1/2 left-1/2 translate-x-full rotate-45 p-1">
                </div>
                <div
                    class="rounded-md bg-white group-hover:opacity-0 group-hover:scale-[115%] group-hover:delay-700 duration-500 w-full h-full absolute top-0 left-0">
                    <div
                        class="border-b border-r border-white bg-white absolute bottom-0 translate-y-1/2 left-1/2 translate-x-full rotate-45 p-1">
                    </div>
                </div>
            </div> --}}
            <button onclick="displayCreateModal()"
                class="shadow-md text-white flex items-center group-hover:gap-2 bg-gradient-to-br from-black/40 to-secondary p-3 rounded-full cursor-pointer duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                </svg>
                <span class="text-[0px] group-hover:text-sm duration-300">Create a Restaurant</span>
            </button>
        </div>


        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Restaurant Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Joined At
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Owned by
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Meals
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Income
                        </th>

                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($ownedRestaurants as $ownedRestaurant)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $ownedRestaurant->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $ownedRestaurant->created_at }}
                            </td>
                            <td scope="row"
                                class="flex items-center justify-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="ps-3 text-left">
                                    <div class="text-base font-semibold">{{ $ownedRestaurant->user->username }}</div>
                                    <div class="font-normal text-gray-500">{{ $ownedRestaurant->user->email }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">249</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">180 $ /Month</td>

                            <td class="px-4 py-4  text-sm whitespace-nowrap">
                                <div class="flex justify-evenly items-center ">
                                    <div class="group relative w-fit">
                                        <button class="text-secondary" onclick="displayUpdatePopup()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 48 48">
                                                <g fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="4">
                                                    <path stroke-linecap="round"
                                                        d="M42 26v14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h14" />
                                                    <path fill="currentColor" d="M14 26.72V34h7.317L42 13.308L34.695 6z" />
                                                </g>
                                            </svg>
                                        </button>
                                        <span
                                            class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                    z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                    group-hover:scale-100">Edit
                                        </span>
                                    </div>

                                    <div class="group relative w-fit">
                                        <button class="text-orange-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                                            </svg>
                                        </button>
                                        <span
                                            class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                    z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                    group-hover:scale-100">Closed
                                        </span>
                                    </div>

                                    <div class="group relative w-fit">
                                        <button class="text-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 20 20">
                                                <path fill="currentColor"
                                                    d="m9.129 0l1.974.005c.778.094 1.46.46 2.022 1.078c.459.504.7 1.09.714 1.728h5.475a.69.69 0 0 1 .686.693a.689.689 0 0 1-.686.692l-1.836-.001v11.627c0 2.543-.949 4.178-3.041 4.178H5.419c-2.092 0-3.026-1.626-3.026-4.178V4.195H.686A.689.689 0 0 1 0 3.505c0-.383.307-.692.686-.692h5.47c.014-.514.205-1.035.554-1.55C7.23.495 8.042.074 9.129 0m6.977 4.195H3.764v11.627c0 1.888.52 2.794 1.655 2.794h9.018c1.139 0 1.67-.914 1.67-2.794zM6.716 6.34c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.726 0c.38 0 .686.31.686.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.728 0c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.685.692a.689.689 0 0 1-.686-.692v-8.05a.69.69 0 0 1 .686-.692M9.176 1.382c-.642.045-1.065.264-1.334.662c-.198.291-.297.543-.313.768l4.938-.001c-.014-.291-.129-.547-.352-.792c-.346-.38-.73-.586-1.093-.635z" />
                                            </svg>
                                        </button>
                                        <span
                                            class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                    z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                    group-hover:scale-100">Delete
                                        </span>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>

    <section id="updatePopup" class=" relative  hidden">
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
            <div class="absolute bg-black/50 backdrop-blur-xl border-2 border-primary rounded-lg overflow-scroll shadow">
                <button id="updatePopup-close" onclick="closeUpdatePopup()" type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                        aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            cliprule="evenodd"></path>
                    </svg>
                </button>
                storingRestaurant
                <div class="p-5">

                    @foreach ($ownedRestaurants as $restaurant)
                        <div class="text-center">
                            <p class="mb-1 text-2xl font-semibold leading-10 text-white font-passero">
                                Edit Restaurant
                            </p>
                        </div>
                        <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide" action=""
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-row justify-between mt-8 gap-8">
                                <div class="w-full">
                                    <label for="Event Title"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Restaurant
                                        Name</label>
                                    <input type="text" value="{{ $restaurant->name }}" name="name"
                                        class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white "
                                        required />
                                </div>
                            </div>

                            <div class="mt-8">
                                <label for="description" class="block text-sm text-gray-500 dark:text-gray-300">Restaurant
                                    Description</label>
                                <textarea id="description" name="description" placeholder="A tiny bio of what this is about .!"
                                    class="block mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 text-xs px-5 py-2.5 text-white "
                                    required></textarea>
                            </div>

                            <div class="flex flex-row justify-between mt-8 gap-8">
                                <div class="w-full">
                                    <label for="adress"
                                        class="block text-sm text-white dark:text-gray-300">Address</label>
                                    <input type="text" name="location"
                                        class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-white"
                                        value="{{ $restaurant->address }}" />
                                </div>
                                <div class="w-full">
                                    <label for="phone"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Phone</label>
                                    <input type="phone" name="phone"
                                        class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 "
                                        value="{{ $restaurant->phone }}" />
                                </div>
                                <div class="w-full">
                                    <label for="email"
                                        class="block text-sm text-gray-500 dark:text-gray-300">Email</label>
                                    <input type="email" name="email"
                                        class="block  text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 "
                                        value="{{ $restaurant->email }}" />
                                </div>

                            </div>

                            <div class="mt-8 w-full">
                                <label for="cover" class="block text-sm text-gray-500 dark:text-gray-300">Upload a
                                    cover</label>
                                <label for="cover"
                                    class="flex flex-col text-xs items-center w-full p-5 mt-2 text-center bg-secondary/60 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-300">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                    </svg>

                                    <h2 class="mt-1 font-medium tracking-wide text-gray-300">Upload a
                                        cover</h2>

                                    <p class="mt-2 text-xs tracking-wide text-gray-300">Upload or darg &
                                        drop your
                                        file JPG, JPEG, PNG. </p> <input name="cover" id="cover" type="file"
                                        class="hidden" value="{{ $restaurant->cover }}" />
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit"
                                class="mt-8 py-2.5 w-full bg-primary border-2 text-white border-secondary hover:bg-secondary hover:border-primary hover:text-black text-lg font-poppins tracking-widest font-extrabold rounded-full">
                                U P D A T E
                            </button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

    <section id="createModal" class=" relative  hidden">
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
            <div class="absolute bg-black/50 backdrop-blur-xl border-2 border-primary rounded-lg overflow-scroll shadow">
                <button id="createModal-close" onclick="closeCreateModal()" type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                        aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            cliprule="evenodd"></path>
                    </svg>
                </button>

                <div class="p-5">

                    <div class="text-center">
                        <p class="mb-1 text-2xl font-semibold leading-10 text-white font-passero">
                            Add new Restaurant
                        </p>
                    </div>

                    <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide" action="{{ route('restaurants.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        
                        <div class="flex flex-row justify-between mt-8 gap-8">
                            <div class="w-full">
                                <label for="Event Title" class="block text-sm text-gray-500 dark:text-gray-300">Restaurant
                                    Name</label>
                                <input type="text" placeholder="Pizza's House" name="name"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white "
                                 />
                            </div>
                        </div>

                        <div class="mt-8">
                            <label for="description" class="block text-sm text-gray-500 dark:text-gray-300">Restaurant
                                Description</label>
                            <textarea id="description" name="description" placeholder="A tiny bio of what this is about .!"
                                class="block mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 text-xs px-5 py-2.5 text-white "
                            ></textarea>
                        </div>

                        <div class="flex flex-row justify-between mt-8 gap-8">
                            <div class="w-full">
                                <label for="address" class="block text-sm text-white dark:text-gray-300">Address</label>
                                <input type="text" name="address"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-white"
                                    placeholder="... ?" />
                            </div>
                            <div class="w-full">
                                <label for="phone" class="block text-sm text-gray-500 dark:text-gray-300">Phone</label>
                                <input type="phone" name="phone"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 "
                                    placeholder="06 ** ******" />
                            </div>
                            <div class="w-full">
                                <label for="email" class="block text-sm text-gray-500 dark:text-gray-300">Email</label>
                                <input type="email" name="email"
                                    class="block  text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-subtle focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 "
                                    placeholder="contact@restau.com" />
                            </div>

                        </div>

                        <div class="mt-8 w-full">
                            <label for="cover" class="block text-sm text-gray-500 dark:text-gray-300">Upload a
                                cover</label>
                            <label for="cover"
                                class="flex flex-col text-xs items-center w-full p-5 mt-2 text-center bg-secondary/60 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>

                                <h2 class="mt-1 font-medium tracking-wide text-gray-300">Upload a
                                    cover</h2>

                                <p class="mt-2 text-xs tracking-wide text-gray-300">Upload or drag &
                                    drop your
                                    file JPG, JPEG, PNG. </p> <input name="cover" id="cover" type="file"
                                    class="hidden" />
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="mt-8 py-2.5 w-full bg-primary border-2 text-white border-secondary hover:bg-secondary hover:border-primary hover:text-black text-lg font-poppins tracking-widest font-extrabold rounded-full">
                            C R E A T E
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script>
        function displayCreateModal() {
            const modal = document.getElementById('createModal');
            modal.classList.remove('hidden');
        }

        function closeCreateModal() {
            const modal = document.getElementById('createModal');
            modal.classList.add('hidden');
        }

        document.addEventListener("keydown", function(event) {
            const modal = document.getElementById('createModal');
            if (event.keyCode === 27) {
                modal.classList.add('hidden');
            }
        });

        function displayUpdatePopup() {
            const modal = document.getElementById('updatePopup');
            modal.classList.remove('hidden');
        }

        function closeUpdatePopup() {
            const modal = document.getElementById('updatePopup');
            modal.classList.add('hidden');
        }

        document.addEventListener("keydown", function(event) {
            const modal = document.getElementById('updatePopup');
            if (event.keyCode === 27) {
                modal.classList.add('hidden');
            }
        });
    </script>
@endsection
