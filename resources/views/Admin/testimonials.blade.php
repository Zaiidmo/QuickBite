@extends('layouts.admin')

@section('title', 'QuickBite | Testimonials')

@section('content')
<section id="all" class="mx-auto overflow-hidden sm:mx-4 lg:pr-16">
    <h1 class=" text-center font-passero text-6xl text-white mb-12">
        Testimonials Management
    </h1>
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
    <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
        <table class="w-full divide-y divide-gray-400 text-center">
            <thead class="text-center">
                <tr>
                    <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Writer
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                        Message
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                        To
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                        Date
                    </th>

                    <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $testimonial->user->username }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $testimonial->message }} </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $testimonial->inFavourOf }} </td>
                        
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
@endsection