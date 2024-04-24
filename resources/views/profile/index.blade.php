@extends('layouts.app')')

@section('title', 'QuickBite | Profile')

@section('content')


    <section id="" class="mx-auto max-w-screen-xl overflow-hidden mt-24 mb-4 lg:pr-16">
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
        {{-- Main Section --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 w-full">
            <div class="col-span-1 md:col-span-2 lg:col-span-3 flex mx-4 lg:mx-0 lg:flex-col gap-2 lg:gap-8 ">
                <div class="p-4 w-full lg:p-8 bg-black/40 rounded-lg shadow ">
                    <div class="text-left flex gap-8 items-center">
                        <img class="rounded-2xl w-24 h-24 lg:w-40 lg:h-40 border-4 border-secondary"
                            src="{{ asset('assets/images/avatar.jpg') }}" alt="profile">
                        <div class="flex flex-col lg:gap-4">
                            <h1 class="font-bold dark:text-white text-gray-700 text-2xl">{{ $user->username }}</h1>
                            <p class="dark:text-white text-gray-400">{{ $user->email }}</p>
                            <p class="dark:text-white text-gray-400">{{ $user->phone }}</p>
                            <p class="dark:text-white text-gray-400">{{ $user->address }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-4 w-full bg-black/40 rounded-lg shadow col-span-1">
                    <h1 class="font-passero text-2xl text-white m-4">
                        Contact Information
                    </h1>
                    <p class="text-white m-4">{{ $user->phone }}</p>
                </div>
            </div>
            <div class="p-8 bg-black/40 mx-4 lg:mx-0 rounded-lg shadow sm:col-span-1 md:col-span-2 lg:col-span-3 ">
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
                                Picked By
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-extrabold text-gray-400 uppercase">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($ordersHistory as $order)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $order->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $order->created_at }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $order->total_price }} $</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $order->delivery_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                {{ $order->status }}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $ordersHistory->links()}}

            </div>
            <div class="p-8 bg-black/40 mx-4 lg:mx-0 rounded-lg shadow col-span-1 md:col-span-2 lg:col-span-3 ">
                <h1 class="font-passero text-4xl text-center text-white m-4">
                    <span class="text-secondary">Recommended</span> Meals.
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-16 gap-4">
                        @foreach($recommendedMeals as $meal)
                    <div
                        class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                        <img src={{ asset('storage/uploads/meals/'. $meal->image) }} alt="{{ $meal->name }}">

                        <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                            {{ $meal->name }}
                        </p>
                        <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                            {{ $meal->restaurant->name }}
                        </p>
                            <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                {{ $meal->price }} $
                            </p>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
<script src="{{ asset('assets/js/Navigator.js')}}"></script>
<script src="{{ asset('assets/js/cart.js')}}"></script>
@endsection