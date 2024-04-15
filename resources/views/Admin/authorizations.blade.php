@extends('layouts.admin')

@section('title', 'Admin | Users Management')

@section('content')

    <section class="lg:mx-auto overflow-hidden mx-4 lg:pr-16 grid grid-cols-1 md:grid-cols-2 ">
        <div class="col-span-1 md:col-span-2">
            <h1 class=" text-center font-passero text-6xl text-white mb-12">
                Roles $ Permissions
            </h1>

            <div class="group relative w-fit mb-4 flex justify-center items-center text-zinc-600 text-sm font-bold">
                <button onclick="displayCreateModal()"
                    class="shadow-md text-white flex items-center group-hover:gap-2 bg-gradient-to-br from-black/40 to-secondary p-3 rounded-full cursor-pointer duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                    </svg>
                    <span class="text-[0px] group-hover:text-sm duration-300">Create a Role</span>
                </button>
            </div>


            <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
                <table class="w-full overflow-auto divide-y divide-gray-400 text-center table-auto">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">
                                Role</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Permissions
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-x divide-gray-200 dark:divide-gray-700">
                        @foreach ($roles as $role)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $role->name }}</td>
                                <td class="px-6 py-4 text-sm whitespace-wrap">
                                    @foreach ($role->permissions as $rolePermission)
                                        <span
                                            class="px-2 py-1 rounded-full bg-secondary text-black border-2 border-black inline-block mb-1">{{ $rolePermission->name }}</span>
                                    @endforeach
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <button class="text-purple-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 20 20">
                                                <path fill="currentColor"
                                                    d="m9.129 0l1.974.005c.778.094 1.46.46 2.022 1.078c.459.504.7 1.09.714 1.728h5.475a.69.69 0 0 1 .686.693a.689.689 0 0 1-.686.692l-1.836-.001v11.627c0 2.543-.949 4.178-3.041 4.178H5.419c-2.092 0-3.026-1.626-3.026-4.178V4.195H.686A.689.689 0 0 1 0 3.505c0-.383.307-.692.686-.692h5.47c.014-.514.205-1.035.554-1.55C7.23.495 8.042.074 9.129 0m6.977 4.195H3.764v11.627c0 1.888.52 2.794 1.655 2.794h9.018c1.139 0 1.67-.914 1.67-2.794zM6.716 6.34c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.726 0c.38 0 .686.31.686.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.728 0c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.685.692a.689.689 0 0 1-.686-.692v-8.05a.69.69 0 0 1 .686-.692M9.176 1.382c-.642.045-1.065.264-1.334.662c-.198.291-.297.543-.313.768l4.938-.001c-.014-.291-.129-.547-.352-.792c-.346-.38-.73-.586-1.093-.635z" />
                                            </svg>
                                        </button>
                                        <button class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M21.5 9h-5l1.86-1.86A7.99 7.99 0 0 0 12 4c-4.42 0-8 3.58-8 8c0 1.83.61 3.5 1.64 4.85c1.22-1.4 3.51-2.35 6.36-2.35s5.15.95 6.36 2.35A7.95 7.95 0 0 0 20 12h2c0 5.5-4.5 10-10 10S2 17.5 2 12S6.5 2 12 2c3.14 0 5.95 1.45 7.78 3.72L21.5 4zM12 7c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <br>


            <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
                <table class="w-full overflow-auto divide-y divide-gray-400 text-center table-auto">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">
                                User</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Role</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Special
                                Permissions</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-x divide-gray-200 dark:divide-gray-700">
                        @foreach ($users as $user)
                            <username>
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full border-2 border-secondary"
                                        src={{ asset('assets/images/avatar.jpg') }} alt="Jese image">
                                    <div class="ps-3 text-left">
                                        <div class="text-base font-semibold">{{ $user->username }}</div>
                                        <div class="font-normal text-gray-500">{{ $user->email }}</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4 text-sm whitespace-wrap">
                                    @foreach ($user->roles as $roles)
                                        <span
                                            class="px-2 py-1 rounded-full bg-secondary text-black border-2 border-black inline-block mb-1">{{ $roles->name }}</span>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 text-sm whitespace-wrap">
                                    @if ($user->permissions->count() > 0)
                                        @foreach ($user->permissions as $permissions)
                                            <span
                                                class="px-2 py-1 rounded-full bg-secondary text-black border-2 border-black inline-block mb-1">{{ $permissions->name }}</span>
                                        @endforeach
                                    @else
                                        <span
                                            class="px-2 py-1 rounded-full bg-component text-white border-2 border-black inline-block mb-1">No
                                            Special Permissions</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex justify-evenly">
                                        <div class="group relative w-fit">
                                            <button class="text-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M21.5 9h-5l1.86-1.86A7.99 7.99 0 0 0 12 4c-4.42 0-8 3.58-8 8c0 1.83.61 3.5 1.64 4.85c1.22-1.4 3.51-2.35 6.36-2.35s5.15.95 6.36 2.35A7.95 7.95 0 0 0 20 12h2c0 5.5-4.5 10-10 10S2 17.5 2 12S6.5 2 12 2c3.14 0 5.95 1.45 7.78 3.72L21.5 4zM12 7c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3" />
                                            </svg>
                                            </button>
                                            <span
                                                class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                        z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                        group-hover:scale-100">Manage
                                            </span>
                                        </div>
    
                                    </div>
                                </td>

                            </username>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
@section('scripts')

@endsection