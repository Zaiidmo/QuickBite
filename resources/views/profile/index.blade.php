@extends('layouts.admin')')

@section('title', 'QuickBite | Profile')

@section('content')

    <section id="" class="mx-auto overflow-hidden pr-16">
        {{-- Main Section --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex flex-col gap-8">
                <div class="p-8 bg-black/40 rounded-lg shadow col-span-1">
                    <div class="text-left flex gap-8">
                        <img class="rounded-2xl w-40 h-40 border-4 border-secondary"
                            src="{{ asset('assets/images/avatar.jpg') }}" alt="profile">
                        <div class="flex flex-col w-full gap-4">
                            <h1 class="font-bold dark:text-white text-gray-700 text-2xl">User Name</h1>
                            <p class="dark:text-white text-gray-400">User Email</p>
                            <p class="dark:text-white text-gray-400">+212 666 666666</p>
                            <p class="dark:text-white text-gray-400">Somewhere in the world</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-black/40 rounded-lg shadow col-span-1">
                    <h1 class="font-passero text-2xl text-white m-4">
                        Contact Information
                    </h1>
                    <p class="text-white m-4">+212 666 666666</p>
                </div>
            </div>
            <div class="p-8 bg-black/40 rounded-lg shadow col-span-2 ">
                <h1 class="font-passero text-4xl text-center text-white m-4">
                    My <span class="text-secondary">History</span>
                </h1>
                <table class="w-full divide-y divide-gray-400">
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
        </div>
    </section>

@endsection
