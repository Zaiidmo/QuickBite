@extends('layouts.app')

@section('title', 'QuickBite | Profile')

@section('content')


    <section id="" class="mx-auto max-w-screen-xl overflow-hidden mt-24 mb-4 lg:pr-16">
        {{-- @if (session('success'))
            <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative "
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative " role="alert">
                {{ session('error') }}
            </div>
        @endif --}}
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
                        @foreach ($ordersHistory as $order)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $order->id }}
                                </td>
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
                {{ $ordersHistory->links() }}

            </div>
            <div class="p-8 bg-black/40 mx-4 lg:mx-0 rounded-lg shadow sm:col-span-1 md:col-span-2 lg:col-span-3 ">
                <h1 class="font-passero text-4xl text-center text-white m-4">
                    Currently Placed <span class="text-secondary">Orders</span>
                </h1>
                <table class="w-full text-center overflow-auto divide-y divide-gray-400">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Order No
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($placedOrders as $placed)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $placed->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $placed->total_price }} $
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                    {{ $placed->status }}
                                </td>
                                <td class="text-sm text-black">
                                    <div class="flex gap-2 items-center justify-center">
                                        <div class="group relative w-fit h-fit">
                                            <form action="{{ route('order.kill', $placed) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="cancel-order" class="text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M3 16.74L7.76 12L3 7.26L7.26 3L12 7.76L16.74 3L21 7.26L16.24 12L21 16.74L16.74 21L12 16.24L7.26 21zm9-3.33l4.74 4.75l1.42-1.42L13.41 12l4.75-4.74l-1.42-1.42L12 10.59L7.26 5.84L5.84 7.26L10.59 12l-4.75 4.74l1.42 1.42z" />
                                                    </svg>
                                                </button>
                                            </form>
                                            <span
                                                class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                        z-20 origin-left scale-0 px-3 w-fit rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                        group-hover:scale-100">Cancel
                                                Order
                                            </span>
                                        </div>
                                        <div class="group relative w-fit h-fit">
                                            <button data-placed-id="{{ $placed->id }}" 
                                                class="view-details text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 32 32">
                                                    <path fill="currentColor"
                                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68M16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25" />
                                                    <path fill="currentColor"
                                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6m0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4" />
                                                </svg>
                                            </button>
                                            <span
                                                class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                        z-20 origin-left scale-0 px-3 w-fit rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                        group-hover:scale-100">Details
                                            </span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $placedOrders->links() }}

            </div>
            <div class="p-8 bg-black/40 mx-4 lg:mx-0 rounded-lg shadow col-span-1 md:col-span-2 lg:col-span-3 ">
                <h1 class="font-passero text-4xl text-center text-white m-4">
                    <span class="text-secondary">Recommended</span> Meals.
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-16 gap-4">
                    @foreach ($recommendedMeals as $meal)
                        <a href="{{ route('meals.show', $meal->id) }}" target="_blank"
                            class="m-2 group px-10 py-5 bg-white/10 rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-secondary z-20 shadow-lg after:-z-20 after:w-full after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden  after:-translate-y-full after:hover:translate-y-0 [&amp;_p]:delay-200 [&amp;_p]:transition-all">
                            <img src={{ asset('storage/uploads/meals/' . $meal->image) }} alt="{{ $meal->name }}">

                            <p class="cardtxt font-semibold text-gray-200 tracking-wider group-hover:text-gray-700 text-xl">
                                {{ $meal->name }}
                            </p>
                            <p class="blueberry font-semibold text-gray-400 group-hover:text-gray-600 text-xs">
                                {{ $meal->restaurant->name }}
                            </p>
                            <p class="ordernow-text text-secondary font-semibold group-hover:text-gray-800">
                                {{ $meal->price }} $
                            </p>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @foreach ($placedOrders as $order)
        <section id="details-{{$order->id}}" class=" relative hidden">
            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
                <div
                    class="absolute w-1/2  bg-black/50 backdrop-blur-xl border-2 border-primary rounded-lg overflow-scroll shadow">
                    <button id="details-{{$order->id}}" type="button" data-placed-id="{{ $order->id }}"
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
                            <p
                                class="mb-10 border-b border-dashed border-component pb-10 text-2xl font-semibold leading-10 text-white font-passero">
                                Order Details <br>
                                #{{ $order->id }}
                            </p>
                        </div>
                        @foreach ($order->meals as $meal)
                            <div class="flex justify-between">
                                <p class="text-2xl text-component leading-10 font-poppins"><span
                                        class="text-2xl text-component leading-10 font-poppins"> * </span> {{ $meal->name }}
                                </p>
                                <p class="text-2xl text-component leading-10 font-poppins"> {{ $meal->price }}</p>
                            </div>
                        @endforeach

                        <hr class="my-8">

                        <div class="flex justify-between">
                            <p class="text-2xl text-component leading-10 font-poppins"> Total Amount </p>
                            <p class="text-2xl text-component leading-10 font-poppins"> {{$order->total_price}} $</p>
                        </div>


                    </div>
                </div>
            </div>

        </section>
    @endforeach

@endsection
@section('scripts')
    <script src="{{ asset('assets/js/Navigator.js') }}"></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endsection
