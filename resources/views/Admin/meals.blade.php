@extends('layouts.admin')

@section('title', 'Admin | Payments')

@section('content')

    <section id="all" class="mx-auto overflow-hidden pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Meals Management
        </h1>
        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Ref
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Order N
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Made By
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Made On
                        </th>

                        {{-- <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th> --}}

                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap uppercase text-sm text-white">#ref23khn50</td>
                        <td class="px-6 py-4 whitespace-nowrap uppercase text-sm text-white">#20039</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">47 $</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">Neil Sims</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">18-12-2022</td>


                    </tr>

                </tbody>
            </table>
        </div>
    </section>
@endsection
