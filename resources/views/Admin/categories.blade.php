@extends('layouts.admin')

@section('title', 'Admin | Categories')

@section('content')
    <section id="all" class="lg:mx-auto overflow-hidden mx-4 lg:pr-16 mt-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Categories
        </h1>

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

        @if (session('success'))
            <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative "
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative " role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="group relative w-fit mb-4 flex justify-center items-center text-zinc-600 text-sm font-bold">
            <button onclick="displayCreateModal()"
                class="shadow-md text-white flex items-center group-hover:gap-2 bg-gradient-to-br from-black/40 to-secondary p-3 rounded-full cursor-pointer duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                </svg>
                <span class="text-[0px] group-hover:text-sm duration-300">Create a Category</span>
            </button>
        </div>


        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Category
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            No Of Meals
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $category->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $category->meals->count() }}</td>
                            </td>
                            <td class="px-4 py-4 flex justify-evenly items-center text-sm whitespace-nowrap">
                                <div class="group relative w-fit">
                                    <button data-meal-id="{{ $category->id }}" class="text-secondary update-meal">
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
                                    <form action="{{ route('categories.kill', $category) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 20 20">
                                                <path fill="currentColor"
                                                    d="m9.129 0l1.974.005c.778.094 1.46.46 2.022 1.078c.459.504.7 1.09.714 1.728h5.475a.69.69 0 0 1 .686.693a.689.689 0 0 1-.686.692l-1.836-.001v11.627c0 2.543-.949 4.178-3.041 4.178H5.419c-2.092 0-3.026-1.626-3.026-4.178V4.195H.686A.689.689 0 0 1 0 3.505c0-.383.307-.692.686-.692h5.47c.014-.514.205-1.035.554-1.55C7.23.495 8.042.074 9.129 0m6.977 4.195H3.764v11.627c0 1.888.52 2.794 1.655 2.794h9.018c1.139 0 1.67-.914 1.67-2.794zM6.716 6.34c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.726 0c.38 0 .686.31.686.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.728 0c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.685.692a.689.689 0 0 1-.686-.692v-8.05a.69.69 0 0 1 .686-.692M9.176 1.382c-.642.045-1.065.264-1.334.662c-.198.291-.297.543-.313.768l4.938-.001c-.014-.291-.129-.547-.352-.792c-.346-.38-.73-.586-1.093-.635z" />
                                            </svg>
                                        </button>
                                    </form>

                                    <span
                                        class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                group-hover:scale-100">Delete
                                    </span>
                                </div>
                            </td>

                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </section>
@endsection
