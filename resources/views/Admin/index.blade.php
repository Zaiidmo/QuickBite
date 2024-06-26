@extends('layouts.admin')

@section('title', 'QuickBite | Admin')

@section('content')

    @role('super-admin')
        <section id="statistics">
            <div class="grid gap-6 mb-8 mx-4 md:grid-cols-2 lg:max-w-screen-2xl lg:ml-auto  lg:pr-16 xl:grid-cols-4">
                <div class="grid gap-6 grid-cols-1 md:grid-cols-2 col-span-1 md:col-span-2">
                    <div
                        class="min-w-0 h-fit shadow-xs overflow-hidden font-passero border-2 border-secondary backdrop-blur-sm bg-black/40 rounded-2xl">
                        <div class="p-4 flex flex-col w-full items-start ">
                            <div class="flex justify-between w-full items-center border-b-2 pb-2 mr-4 border-secondary">
                                <div class="p-3 rounded-full text-black bg-secondary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 1.25a4.75 4.75 0 1 0 0 9.5a4.75 4.75 0 0 0 0-9.5M8.75 6a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M18 3.25a.75.75 0 0 0 0 1.5c1.377 0 2.25.906 2.25 1.75S19.377 8.25 18 8.25a.75.75 0 0 0 0 1.5c1.937 0 3.75-1.333 3.75-3.25S19.937 3.25 18 3.25M6.75 4A.75.75 0 0 0 6 3.25c-1.937 0-3.75 1.333-3.75 3.25S4.063 9.75 6 9.75a.75.75 0 0 0 0-1.5c-1.376 0-2.25-.906-2.25-1.75S4.624 4.75 6 4.75A.75.75 0 0 0 6.75 4" />
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M12 12.25c-1.784 0-3.434.48-4.659 1.297c-1.22.814-2.091 2.02-2.091 3.453c0 1.433.871 2.64 2.091 3.453c1.225.816 2.875 1.297 4.659 1.297c1.784 0 3.434-.48 4.659-1.297c1.22-.814 2.091-2.02 2.091-3.453c0-1.433-.872-2.64-2.091-3.453c-1.225-.816-2.875-1.297-4.659-1.297M6.75 17c0-.776.472-1.57 1.423-2.204c.947-.631 2.298-1.046 3.827-1.046c1.53 0 2.88.415 3.827 1.046c.951.634 1.423 1.428 1.423 2.204c0 .776-.472 1.57-1.423 2.204c-.947.631-2.298 1.046-3.827 1.046c-1.53 0-2.88-.415-3.827-1.046C7.222 18.57 6.75 17.776 6.75 17"
                                            clip-rule="evenodd" />
                                        <path fill="currentColor"
                                            d="M19.267 13.84a.75.75 0 0 1 .894-.573c.961.211 1.828.592 2.472 1.119c.643.526 1.117 1.25 1.117 2.114c0 .865-.474 1.588-1.117 2.114c-.644.527-1.51.908-2.472 1.119a.75.75 0 0 1-.322-1.466c.793-.173 1.426-.472 1.844-.814c.418-.342.567-.677.567-.953c0-.276-.149-.61-.567-.953c-.418-.342-1.051-.64-1.844-.814a.75.75 0 0 1-.572-.894M3.84 13.267a.75.75 0 1 1 .32 1.466c-.792.173-1.425.472-1.843.814c-.418.342-.567.677-.567.953c0 .276.149.61.567.953c.418.342 1.051.64 1.844.814a.75.75 0 0 1-.322 1.466c-.962-.211-1.828-.592-2.472-1.119C.724 18.088.25 17.364.25 16.5c0-.865.474-1.588 1.117-2.114c.644-.527 1.51-.908 2.472-1.119" />
                                    </svg>
                                </div>
                                <p class="mb-2 text-xl font-medium  uppercase text-gray-600 dark:text-gray-400">
                                    Users
                                </p>
                            </div>
                            <div class="w-full py-0 text-center">
                                <p class="text-3xl text-gray-700 dark:text-gray-200">
                                    {{ $usersCount }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="min-w-0 h-fit shadow-xs overflow-hidden font-passero border-2 border-secondary backdrop-blur-sm bg-black/40 rounded-2xl">
                        <div class="p-4 flex flex-col w-full items-start ">
                            <div class="flex justify-between w-full items-center border-b-2 pb-2 mr-4 border-secondary">
                                <div class="p-3 rounded-full text-black bg-secondary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4.325 9h15.35l-.85-3H5.2zM16.8 11H7.225l-.275 2h10.1zM4 20l1.225-9H3q-.5 0-.788-.4t-.162-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.2 9h-2l-.675-5H6.675L6 20z" />
                                    </svg>
                                </div>
                                <p class="mb-2 text-xl font-medium  uppercase text-gray-600 dark:text-gray-400">
                                    Restaurants
                                </p>
                            </div>
                            <div class="w-full py-0 text-center">
                                <p class="text-3xl text-gray-700 dark:text-gray-200">
                                    {{ $restaurantsCount }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="min-w-0 h-fit shadow-xs overflow-hidden font-passero border-2 border-secondary backdrop-blur-sm bg-black/40 rounded-2xl">
                        <div class="p-4 flex flex-col w-full items-start ">
                            <div class="flex justify-between w-full items-center border-b-2 pb-2 mr-4 border-secondary">
                                <div class="p-3 rounded-full text-black bg-secondary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="m445.588 56l-.026 384.352c6.881 11.323 14 15.677 19.97 15.648c5.924-.028 12.967-4.434 19.714-15.418L466.82 244.27l-.215-2.391l1.475-1.906c21.174-27.169 28.573-74.108 22.533-113.81c-3.02-19.852-9.342-37.82-18.195-50.522c-7.424-10.652-16.28-17.447-26.828-19.641zm-372.375.004l-.016 67.127l-12.56-.016V56.008H46.332l.002 67.11H33.756v-67.11h-14.57v103.228c-.001 11.417 6.23 17.748 16.04 21.662l4.06 1.622l-.09 4.37c-2 84.57-3.977 169.139-5.962 253.708C40.074 451.79 47.1 456.028 52.95 456s12.87-4.377 19.623-15.432q-3.474-126.821-6.941-253.644l-.12-4.4l4.073-1.606c10.324-4.106 17.039-11.074 17.039-21.676V56.004h-13.41zM256 95A161 161 0 0 0 95 256a161 161 0 0 0 161 161a161 161 0 0 0 161-161A161 161 0 0 0 256 95" />
                                    </svg>
                                </div>
                                <p class="mb-2 text-xl font-medium  uppercase text-gray-600 dark:text-gray-400">
                                    Meals
                                </p>
                            </div>
                            <div class="w-full py-0 text-center">
                                <p class="text-3xl text-gray-700 dark:text-gray-200">
                                    {{ $mealsCount }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="min-w-0 h-fit shadow-xs overflow-hidden font-passero border-2 border-secondary backdrop-blur-sm bg-black/40 rounded-2xl">
                        <div class="p-4 flex flex-col w-full items-start ">
                            <div class="flex justify-between w-full items-center border-b-2 pb-2 mr-4 border-secondary">
                                <div class="p-3 rounded-full text-black bg-secondary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                        <g fill="none" stroke="currentColor" stroke-width="4">
                                            <path stroke-linejoin="round" d="M6 15h36l-2 27H8z" clip-rule="evenodd" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 19V6h16v13" />
                                            <path stroke-linecap="round" d="M16 34h16" />
                                        </g>
                                    </svg>
                                </div>
                                <p class="mb-2 text-xl font-medium  uppercase text-gray-600 dark:text-gray-400">
                                    Orders
                                </p>
                            </div>
                            <div class="w-full py-0 text-center">
                                <p class="text-3xl text-gray-700 dark:text-gray-200">
                                    {{ $ordersCount }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <canvas id="earnings_chart"
                        class="w-full h-full rounded-lg backdrop-blur-xl bg-black/40 border-2 border-secondary text-white"></canvas>
                </div>
            </div>
        </section>
        <section id="statistics_tables"
            class="font-poppins mx-4 grid grid-cols-1 lg:grid-cols-3 gap-6 mt-16 lg:max-w-screen-2xl lg:mx-auto lg:pr-16 mb-24">
            <div
                class="flex flex-col w-full backdrop-blur-sm bg-black/40 border-2 border-secondary rounded-lg overflow-x-auto p-1.5 align-middle col-span-1">
                <h1 class="font-passero text-2xl text-white m-4">
                    Top <span class="text-secondary">Customers</span>
                </h1>
                <table class="divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Orders
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($topUsers as $topUser)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $topUser->username }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $topUser->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $topUser->orders_count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div
                class="flex flex-col   backdrop-blur-sm bg-black/40 border-2 border-secondary rounded-lg  overflow-x-auto p-1.5 align-middle col-span-2">
                <h1 class="font-passero text-2xl text-white m-4">
                    Top <span class="text-secondary">Restaurants</span>
                </h1>
                <table id="topRestaurantsTable" class="divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Owner
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Meals
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Total Sold
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($topRestaurants as $topRestaurant)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                    {{ $topRestaurant->restaurant_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $topRestaurant->owner_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $topRestaurant->total_meals }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $topRestaurant->total_orders }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-span-3 grid grid-cols-4 gap-4">
                <div
                    class="flex flex-col w-full backdrop-blur-sm  bg-black/40 border-2 border-secondary rounded-lg overflow-x-auto p-1.5 align-middle col-span-1">
                    <h1 class="font-passero text-2xl text-white m-4">
                        Recent <span class="text-secondary">Orders</span>
                    </h1>
                    <div class="max-h-72 overflow-y-auto">
                        <table class="divide-y divide-gray-400">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Order N
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">By
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($lastOrders as $lastOrder)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                            #{{ $lastOrder->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                            {{ $lastOrder->user->username }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                            {{ $lastOrder->total_price }} $</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex w-full h-full flex-col gap-4 col-span-1 md:col-span-2">
                    <div class=" w-[100%]">
                        <canvas id="restau_chart"
                            class="w-full font-passero h-full rounded-lg backdrop-blur-xl bg-black/40 border-2 border-secondary text-white"></canvas>
                    </div>

                </div>

                <div
                    class="flex flex-col w-full h-fit backdrop-blur-sm bg-black/40 border-2 border-secondary rounded-lg overflow-x-auto p-1.5 align-middle col-span-1">
                    <h1 class="font-passero text-2xl text-white m-4">
                        Top <span class="text-secondary">Meals</span>
                    </h1>
                    <table class="divide-y divide-gray-400">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Meal
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Presented By
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">Purshased
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#5594</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JohnBrown
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">23 $</td>

                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#6666</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JimGreen
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">27 $</td>

                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#2000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JoeBlack
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">31 $</td>

                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#2000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JoeBlack
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">31 $</td>

                            </tr>

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#2000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">JoeBlack
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">31 $</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    @endrole

    @role('restaurant-owner')
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mx-4">
            <div class="grid gap-6 grid-cols-1 col-span-1">
                <div
                    class="min-w-0 h-full shadow-xs overflow-hidden font-passero border-2 border-secondary backdrop-blur-sm bg-black/40 rounded-2xl">
                    <div class="p-4 flex flex-col justify-between h-full w-full">
                        <div class="flex justify-between w-full items-center border-b-2 pb-2 mr-4 border-secondary">
                            <div class="p-3 rounded-full text-black bg-secondary ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4.325 9h15.35l-.85-3H5.2zM16.8 11H7.225l-.275 2h10.1zM4 20l1.225-9H3q-.5 0-.788-.4t-.162-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.2 9h-2l-.675-5H6.675L6 20z" />
                                </svg>
                            </div>
                            <p class="mb-2 text-xl font-medium  uppercase text-gray-600 dark:text-gray-400">
                                Restaurants
                            </p>
                        </div>
                        <div class="w-full text-center">
                            <p class="text-4xl text-gray-700 dark:text-gray-200">
                                3
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="min-w-0 h-full shadow-xs overflow-hidden font-passero border-2 border-secondary backdrop-blur-sm bg-black/40 rounded-2xl">
                    <div class="p-4 flex flex-col justify-between h-full w-full">
                        <div class="flex justify-between w-full items-center border-b-2 pb-2 mr-4 border-secondary">
                            <div class="p-3 rounded-full text-black bg-secondary ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-width="4">
                                        <path stroke-linejoin="round" d="M6 15h36l-2 27H8z" clip-rule="evenodd" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 19V6h16v13" />
                                        <path stroke-linecap="round" d="M16 34h16" />
                                    </g>
                                </svg>
                            </div>
                            <p class="mb-2 text-xl font-medium  uppercase text-gray-600 dark:text-gray-400">
                                Income
                            </p>
                        </div>
                        <div class="w-full text-center">
                            <p class="text-4xl text-gray-700 dark:text-gray-200">
                                500 $
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col w-full backdrop-blur-sm bg-black/40 border-2 border-secondary rounded-lg overflow-x-auto p-1.5 align-middle col-span-1 lg:col-span-2">
                <h1 class="font-passero text-2xl text-white m-4">
                    Gain by <span class="text-secondary">Restaurant</span>
                </h1>
                <table class="divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Shipped Orders
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Income
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

            <div
                class="flex flex-col w-full backdrop-blur-sm bg-black/40 border-2 border-secondary rounded-lg overflow-x-auto p-1.5 align-middle col-span-2 lg:col-span-3">
                <h1 class="font-passero text-2xl text-white m-4">
                    Top <span class="text-secondary">Riders</span>
                </h1>
                <table class="divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Contact
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Shipped Orders
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
    @endrole
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.getElementById('collapse_btn').addEventListener('click', function() {
            document.getElementById('dropdown-example').classList.toggle('hidden')
        })
    </script>
    {{-- Earnings Chart --}}
    <script>
        // Get the canvas element
        var ctx = document.getElementById('earnings_chart').getContext('2d');

        // Define the data for the chart
        var data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                'November', 'December'
            ],
            datasets: [{
                label: 'Earnings ($)',
                backgroundColor: 'rgb(255, 194, 68)',
                borderColor: 'rgb(255, 194, 68)',
                data: [2000, 2500, 1800, 3200, 3500, 3800, 3000, 4000, 3800, 3600, 3200, 3000],
                color: 'white',
            }]
        };

        // Configure the options for the chart
        var options = {
            scales: {
                y: {
                    beginAtZero: false // Allow the y-axis to start at zero
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'white'
                    }
                }
            }
        };

        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>


    {{-- Restaurants Chart --}}
    <script>
        function updateChartWithTableData() {
        const labels = [];
        const values = [];
        const tableRows = document.querySelectorAll('#topRestaurantsTable tbody tr');
        tableRows.forEach(row => {
            const columns = row.querySelectorAll('td');
            labels.push(columns[0].innerText);
            values.push(parseInt(columns[3].innerText));
        });

        // Update the chart with the extracted data
        restaurantChart.data.labels = labels;
        restaurantChart.data.datasets[0].data = values;

        // Update the chart
        restaurantChart.update();
    }

    // Chart data
    var restaurantData = {
        labels: ['Restaurant A', 'Restaurant B', 'Restaurant C', 'Restaurant D', 'Restaurant E', 'Restaurant F', 'Restaurant G'],
        datasets: [{
            data: [300, 450, 600, 800, 550, 200, 400],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Chart options
    var restaurantOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Most Seller Restaurants',
                font: {
                    size: 18,
                    weight: 'bold',
                    family: 'passero'
                }
            }
        }
    };

    // Create the bar chart
    var restaurantChart = new Chart(document.getElementById('restau_chart'), {
        type: 'bar',
        data: restaurantData,
        options: restaurantOptions
    });

    // Call the function to extract data from the table and update the chart
    updateChartWithTableData();
    </script>
@endsection
