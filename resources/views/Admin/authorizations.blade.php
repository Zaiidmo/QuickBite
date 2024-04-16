@extends('layouts.admin')

@section('title', 'Admin | Users Management')

@section('content')
    <section class="lg:mx-auto overflow-hidden mx-4 lg:pr-16 grid grid-cols-1 md:grid-cols-2 ">
        <div class="col-span-1 md:col-span-2">
            <h1 class=" text-center font-passero text-6xl text-white mb-12">
                Roles $ Permissions
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
                <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative "
                    role="alert">
                    {{ session('error') }}
                </div>
            @endif

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
                                    <div class="flex justify-evenly gap-4 items-center">
                                        <div class="flex justify-evenly">
                                            <div class="group relative w-fit">
                                                <form action="{{ route('permissions.kill', $role) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 20 20">
                                                            <path fill="currentColor"
                                                                d="m9.129 0l1.974.005c.778.094 1.46.46 2.022 1.078c.459.504.7 1.09.714 1.728h5.475a.69.69 0 0 1 .686.693a.689.689 0 0 1-.686.692l-1.836-.001v11.627c0 2.543-.949 4.178-3.041 4.178H5.419c-2.092 0-3.026-1.626-3.026-4.178V4.195H.686A.689.689 0 0 1 0 3.505c0-.383.307-.692.686-.692h5.47c.014-.514.205-1.035.554-1.55C7.23.495 8.042.074 9.129 0m6.977 4.195H3.764v11.627c0 1.888.52 2.794 1.655 2.794h9.018c1.139 0 1.67-.914 1.67-2.794zM6.716 6.34c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.726 0c.38 0 .686.31.686.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.728 0c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.685.692a.689.689 0 0 1-.686-.692v-8.05a.69.69 0 0 1 .686-.692M9.176 1.382c-.642.045-1.065.264-1.334.662c-.198.291-.297.543-.313.768l4.938-.001c-.014-.291-.129-.547-.352-.792c-.346-.38-.73-.586-1.093-.635z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                <span
                                                    class="absolute -top-14 left-[50%] -translate-x-[50%] 
                                            z-20 origin-left scale-0 px-3 rounded-lg border border-gray-300 bg-white py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out 
                                            group-hover:scale-100">Remove
                                                </span>
                                            </div>

                                        </div>
                                        <div class="flex justify-evenly">
                                            <div class="group relative w-fit">
                                                <button data-role-id="{{ $role->id }}"
                                                    class="text-secondary update-role">
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
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Modal To Update a Role --}}

            @foreach ($roles as $role)
                <section id="updatePopup-{{ $role->id }}" class=" relative hidden">
                    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
                        <div
                            class="absolute bg-black/50 backdrop-blur-xl border-2 border-primary rounded-lg overflow-scroll shadow">
                            <button data-role-id="{{ $role->id }}" id="updatePopup-close-{{ $role->id }}"
                                onclick="closeUpdatePopup({{ $role->id }})" type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close">
                                <svg aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        cliprule="evenodd"></path>
                                </svg>
                            </button>

                            <div class="p-5">

                                <div class="text-center">
                                    <p class="mb-1 text-2xl font-semibold leading-10 text-white font-passero">
                                        Edit role Details
                                    </p>
                                    <p class="mb-1 text-xl font-semibold leading-10 text-white font-passero">
                                        {{ $role->name }}
                                    </p>
                                </div>

                                <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide"
                                    action="{{ route('permissions.update', $role) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-row justify-between mt-8 gap-8">
                                        <div class="w-full">
                                            <label for="Role Name"
                                                class="block text-sm text-gray-500 dark:text-gray-300">Role
                                                Name</label>
                                            <input type="text" value="{{ $role->name }}" name="name"
                                                class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white " />
                                        </div>
                                    </div>

                                    <div class="flex flex-row justify-between mt-8 gap-8">
                                        <div class="w-full">
                                            <label for="Role slug"
                                                class="block text-sm text-gray-500 dark:text-gray-300">Role-Slug(attached)</label>
                                            <input type="text" value={{ $role->slug }} name="slug"
                                                class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white " />
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <label for="permission_id" class="block text-sm text-gray-300">Permissions</label>
                                        <select multiple placeholder="Choose Permissions" name="permission_id[]"
                                            id="permissions"
                                            class="permissions block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-gray-300 focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 ">
                                            @foreach ($role->permissions as $existed)
                                                <option selected value="{{ $existed->id }}" selected>
                                                    {{ $existed->name }}</option>
                                            @endforeach
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit"
                                        class="mt-8 py-2.5 w-full bg-primary border-2 text-white border-secondary hover:bg-secondary hover:border-primary hover:text-black text-lg font-poppins tracking-widest font-extrabold rounded-full">
                                        U P D A T E
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach

            <br>


            <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
                <table class="w-full overflow-auto divide-y divide-gray-400 text-center table-auto">
                    <thead class="text-center">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">
                                User</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Role</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Special
                                Permissions</th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">Action
                            </th>
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

            {{-- Modal To Create a Role --}}

            <section id="createModal" class=" relative  hidden">
                <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
                    <div
                        class="absolute bg-black/50 backdrop-blur-xl border-2 border-primary rounded-lg overflow-scroll shadow">
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
                                    Create a role
                                </p>
                            </div>

                            <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide"
                                action="{{ route('permissions.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="flex flex-row justify-between mt-8 gap-8">
                                    <div class="w-full">
                                        <label for="Role name" class="block text-sm text-gray-500 dark:text-gray-300">Role
                                            Name</label>
                                        <input type="text" placeholder="Role" name="name"
                                            class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white " />
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between mt-8 gap-8">
                                    <div class="w-full">
                                        <label for="Role slug"
                                            class="block text-sm text-gray-500 dark:text-gray-300">Role-Slug(attached)</label>
                                        <input type="text" placeholder="Slug" name="slug"
                                            class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white " />
                                    </div>
                                </div>

                                <div class="w-full">
                                    <label for="permission_id" class="block text-sm text-gray-300">Permissions</label>
                                    <select multiple placeholder="Choose Permissions" name="permission_id[]"
                                        id="permissions"
                                        class="permissions block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-gray-300 focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 ">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
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
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        document.querySelectorAll('.permissions').forEach(permissions => {
            var settings = {};
            new TomSelect(permissions, settings);
        });
    </script>
    <script src="{{asset('assets/js/authorization.js')}}"></script>
@endsection
