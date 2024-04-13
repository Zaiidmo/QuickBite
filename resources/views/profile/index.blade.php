@extends('layouts.app')')

@section('title', 'QuickBite | Profile')

@section('content')

    <section id="" class="mx-auto overflow-hidden mt-24 mb-4 lg:mt-0 lg:pr-16">
        {{-- Main Section --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 w-full">
            <div class="col-span-1 md:col-span-2 flex mx-4 lg:mx-0 lg:flex-col gap-2 lg:gap-8 ">
                <div class="p-4 w-full lg:p-8 bg-black/40 rounded-lg shadow ">
                    <div class="text-left flex gap-8 items-center">
                        <img class="rounded-2xl w-24 h-24 lg:w-40 lg:h-40 border-4 border-secondary"
                            src="{{ asset('assets/images/avatar.jpg') }}" alt="profile">
                        <div class="flex flex-col lg:gap-4">
                            <h1 class="font-bold dark:text-white text-gray-700 text-2xl">User Name</h1>
                            <p class="dark:text-white text-gray-400">User Email</p>
                            <p class="dark:text-white text-gray-400">+212 666 666666</p>
                            <p class="dark:text-white text-gray-400">Somewhere in the world</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-4 w-full bg-black/40 rounded-lg shadow col-span-1">
                    <h1 class="font-passero text-2xl text-white m-4">
                        Contact Information
                    </h1>
                    <p class="text-white m-4">+212 666 666666</p>
                </div>
            </div>
            <div class="p-8 bg-black/40 mx-4 lg:mx-0 rounded-lg shadow sm:col-span-1 md:col-span-2 ">
                <h1 class="font-passero text-4xl text-center text-white m-4">
                    My <span class="text-secondary">History</span>
                </h1>
                <table class="w-full overflow-auto divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Order No
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Payment
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Invoice
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">John
                                Brown</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JohnBrown@email.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">45</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">45</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M7.5 1.05a.45.45 0 0 1 .45.45v6.914l2.232-2.232a.45.45 0 1 1 .636.636l-3 3a.45.45 0 0 1-.636 0l-3-3a.45.45 0 1 1 .636-.636L7.05 8.414V1.5a.45.45 0 0 1 .45-.45M2.5 10a.5.5 0 0 1 .5.5V12c0 .554.446 1 .996 1h7.005A.999.999 0 0 0 12 12v-1.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-1.999 2H3.996A1.997 1.997 0 0 1 2 12v-1.5a.5.5 0 0 1 .5-.5"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>

                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">Jim
                                Green</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JimGreen@email.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">27</td>

                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">Joe
                                Black</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JoeBlack@email.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">31</td>

                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">Joe
                                Black</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JoeBlack@email.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">31</td>

                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">Joe
                                Black</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JoeBlack@email.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">31</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-8 bg-black/40 mx-4 lg:mx-0 rounded-lg shadow col-span-1 md:col-span-2 lg:col-span-3">
                <h1 class="font-passero text-4xl text-center text-white m-4">
                    <span class="text-secondary">Recommended</span> Meals.
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-16 gap-4">
                        
                    <div
                        class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                        <img src={{ asset('assets/images/quarter_pounder.png') }} alt="quarter_pounder">

                        <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                            Quarter Pounder®* with Cheese
                        </p>
                        <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                            One of Kind &amp; Unique Plants Collection Here at SMKY.
                        </p>
                            <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                $21.00
                            </p>
                    </div>
                    <div
                        class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                        <img src={{ asset('assets/images/quarter_pounder.png') }} alt="quarter_pounder">

                        <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                            Quarter Pounder®* with Cheese
                        </p>
                        <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                            One of Kind &amp; Unique Plants Collection Here at SMKY.
                        </p>
                            <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                $21.00
                            </p>
                    </div>
                    <div
                        class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                        <img src={{ asset('assets/images/quarter_pounder.png') }} alt="quarter_pounder">

                        <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                            Quarter Pounder®* with Cheese
                        </p>
                        <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                            One of Kind &amp; Unique Plants Collection Here at SMKY.
                        </p>
                            <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                $21.00
                            </p>
                    </div>
                    <div
                        class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                        <img src={{ asset('assets/images/quarter_pounder.png') }} alt="quarter_pounder">

                        <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                            Quarter Pounder®* with Cheese
                        </p>
                        <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                            One of Kind &amp; Unique Plants Collection Here at SMKY.
                        </p>
                            <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                $21.00
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
<script src="{{ asset('assets/js/Navigator.js')}}"></script>
@endsection