{{-- Header --}}

<header class=" mx-auto max-w-screen-xl ">
    <nav class="fixed w-full max-w-screen-2xl ml-auto top-2 z-50 border-gray-700 backdrop-blur-sm bg-black/40 rounded-2xl lg:mx-auto "
        data-te-navbar-ref>
        <div class="flex w-full max-w-screen-xl mx-auto flex-wrap items-center h-20 justify-between px-3">
            <div>
                <a class="mx-2 my-1 flex items-center text-white hover:text-secondary lg:mb-0 lg:mt-0" href="/">
                    <img class="mr-2" src={{ asset('assets/images/logo.png') }} style="height: 40px" alt="QuickBite" />
                    <p class="font-passero text-3xl ">QuickBite</p>
                </a>
            </div>

            <!-- Hamburger button for mobile view -->
            <button id="Hamburger" data-drawer-target="sidebar-multi-level-sidebar"
                data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
                type="button"
                class="lg:hidden inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>

        </div>
    </nav>
</header>

{{-- Sidebar --}}


<aside id="sidebar-multi-level-sidebar"
    class="w-screen hidden top-20 mt-3 lg:mt-0 uppercase lg:block fixed bottom-2 lg:top-2 left-4  z-40 lg:w-72  transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div
        class="h-full  px-12 lg:px-3 py-4 flex w-full justify-center  overflow-y-auto border-gray-700 backdrop-blur-sm bg-black/40 rounded-2xl">
        <ul class="space-y-2 lg:w-full font-medium ">
            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Main Links</label>

            <li>
                <a href="{{ route('home') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 15 15"><path fill="currentColor" d="M7.825.12a.5.5 0 0 0-.65 0L0 6.27v7.23A1.5 1.5 0 0 0 1.5 15h4a.5.5 0 0 0 .5-.5v-3a1.5 1.5 0 0 1 3 0v3a.5.5 0 0 0 .5.5h4a1.5 1.5 0 0 0 1.5-1.5V6.27z"/></svg>
                    <span class="ms-3">Home</span>
                </a>
            </li>

            <li>
                <a href="{{ route('restaurants') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.8 11H7.225l-.275 2h10.1zM4 20l1.225-9H3q-.5 0-.788-.4t-.162-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.2 9h-2l-.675-5H6.675L6 20z" />
                    </svg>
                    <span class="ms-3">Restaurants</span>
                </a>
            </li>
            <li>
                <a href="{{ route('meals') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><path fill="currentColor" d="m445.588 56l-.026 384.352c6.881 11.323 14 15.677 19.97 15.648c5.924-.028 12.967-4.434 19.714-15.418L466.82 244.27l-.215-2.391l1.475-1.906c21.174-27.169 28.573-74.108 22.533-113.81c-3.02-19.852-9.342-37.82-18.195-50.522c-7.424-10.652-16.28-17.447-26.828-19.641zm-372.375.004l-.016 67.127l-12.56-.016V56.008H46.332l.002 67.11H33.756v-67.11h-14.57v103.228c-.001 11.417 6.23 17.748 16.04 21.662l4.06 1.622l-.09 4.37c-2 84.57-3.977 169.139-5.962 253.708C40.074 451.79 47.1 456.028 52.95 456s12.87-4.377 19.623-15.432q-3.474-126.821-6.941-253.644l-.12-4.4l4.073-1.606c10.324-4.106 17.039-11.074 17.039-21.676V56.004h-13.41zM256 95A161 161 0 0 0 95 256a161 161 0 0 0 161 161a161 161 0 0 0 161-161A161 161 0 0 0 256 95"/></svg>
                    <span class="ms-3">meals</span>
                </a>
            </li>
            @role('super-admin')
            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Admin</label>

            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button id="collapse_btn"
                    class="uppercase flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21.987 18.73a1.999 1.999 0 0 1-.34.85a1.9 1.9 0 0 1-1.56.8h-1.651a.741.741 0 0 1-.6-.31a.758.758 0 0 1-.11-.67c.37-1.18.29-2.51-3.061-4.64a.77.77 0 0 1-.32-.85a.76.76 0 0 1 .72-.54a7.614 7.614 0 0 1 6.792 4.39a2 2 0 0 1 .13.97M19.486 7.7a4.43 4.43 0 0 1-4.421 4.42a.761.761 0 0 1-.65-1.13a6.158 6.158 0 0 0 0-6.53a.75.75 0 0 1 .61-1.18a4.292 4.292 0 0 1 3.13 1.34a4.46 4.46 0 0 1 1.291 3.12z" />
                        <path fill="currentColor"
                            d="M16.675 18.7a2.649 2.649 0 0 1-1.26 2.48c-.418.257-.9.392-1.39.39H4.652a2.631 2.631 0 0 1-1.39-.39A2.62 2.62 0 0 1 2.01 18.7a2.62 2.62 0 0 1 .5-1.35a8.792 8.792 0 0 1 6.812-3.51a8.775 8.775 0 0 1 6.842 3.5a2.7 2.7 0 0 1 .51 1.36M14.245 7.32a4.92 4.92 0 0 1-4.902 4.91a4.903 4.903 0 0 1-4.797-5.858a4.9 4.9 0 0 1 6.678-3.57a4.902 4.902 0 0 1 3.03 4.518z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Users</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('usersManagement') }}#all"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">All
                            Users</a>
                    </li>
                    <li>
                        <a href="{{ route('usersManagement') }}#customers"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Customers</a>
                    </li>
                    <li>
                        <a href="{{ route('usersManagement') }}#restau_owners"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Restaurants
                            Owners</a>
                    </li>
                    <li>
                        <a href="{{ route('usersManagement') }}#delivery_boys"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Delivery
                            Guys</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('restaurantsManagement') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.8 11H7.225l-.275 2h10.1zM4 20l1.225-9H3q-.5 0-.788-.4t-.162-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.2 9h-2l-.675-5H6.675L6 20z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Restaurants</span>
                </a>
            </li>
            <li>
                <a href="{{ route('payments') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7 12c2.2 0 4-1.8 4-4S9.2 4 7 4S3 5.8 3 8s1.8 4 4 4m4 8v-5.3c-1.1-.4-2.5-.7-4-.7c-3.9 0-7 1.8-7 4v2zM22 4h-7c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m-4 14h-2V6h2z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Payments</span>
                </a>
            </li>
            <li>
                <a href="{{ route('mealsManagement') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><path fill="currentColor" d="m445.588 56l-.026 384.352c6.881 11.323 14 15.677 19.97 15.648c5.924-.028 12.967-4.434 19.714-15.418L466.82 244.27l-.215-2.391l1.475-1.906c21.174-27.169 28.573-74.108 22.533-113.81c-3.02-19.852-9.342-37.82-18.195-50.522c-7.424-10.652-16.28-17.447-26.828-19.641zm-372.375.004l-.016 67.127l-12.56-.016V56.008H46.332l.002 67.11H33.756v-67.11h-14.57v103.228c-.001 11.417 6.23 17.748 16.04 21.662l4.06 1.622l-.09 4.37c-2 84.57-3.977 169.139-5.962 253.708C40.074 451.79 47.1 456.028 52.95 456s12.87-4.377 19.623-15.432q-3.474-126.821-6.941-253.644l-.12-4.4l4.073-1.606c10.324-4.106 17.039-11.074 17.039-21.676V56.004h-13.41zM256 95A161 161 0 0 0 95 256a161 161 0 0 0 161 161a161 161 0 0 0 161-161A161 161 0 0 0 256 95"/></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Meals</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categories') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 32 32"><path fill="currentColor" d="m6.76 6l.45.89L7.76 8H12v5H4V6zm.62-2H3a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9l-.72-1.45a1 1 0 0 0-.9-.55m15.38 2l.45.89l.55 1.11H28v5h-8V6zm.62-2H19a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-4l-.72-1.45a1 1 0 0 0-.9-.55M6.76 19l.45.89l.55 1.11H12v5H4v-7zm.62-2H3a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1H9l-.72-1.45a1 1 0 0 0-.9-.55m15.38 2l.45.89l.55 1.11H28v5h-8v-7zm.62-2H19a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-4l-.72-1.45a1 1 0 0 0-.9-.55"/></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Categories</span>
                </a>
            </li>


            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Settings</label>
            <li>
                <a href="{{ route('settings') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37c1 .608 2.296.07 2.572-1.065" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('permissions') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 2048 2048"><path fill="currentColor" d="M2048 1573v475h-512v-256h-256v-256h-256v-207q-74 39-155 59t-165 20q-97 0-187-25t-168-71t-142-110t-111-143t-71-168T0 704q0-97 25-187t71-168t110-142T349 96t168-71T704 0q97 0 187 25t168 71t142 110t111 143t71 168t25 187q0 51-8 101t-23 98zM512 704q40 0 75-15t61-41t41-61t15-75t-15-75t-41-61t-61-41t-75-15t-75 15t-61 41t-41 61t-15 75t15 75t41 61t61 41t75 15"/></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Permissions</span>
                </a>
            </li>
            @endrole
            @role('restaurant-owner')
            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Restaurants Owners</label>
            <li>
                <a href="{{route('restaurantsManagement')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m21.96 9.73l-1.43-5a.996.996 0 0 0-.96-.73H4.43c-.45 0-.84.3-.96.73l-1.43 5c-.18.63.3 1.27.96 1.27h2.2L4 20h2l.67-5h10.67l.66 5h2l-1.2-9H21c.66 0 1.14-.64.96-1.27M6.93 13l.27-2h9.6l.27 2zm-2.6-4l.86-3h13.63l.86 3z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Restaurants</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('mealsManagement') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 512 512"><path fill="currentColor" d="m445.588 56l-.026 384.352c6.881 11.323 14 15.677 19.97 15.648c5.924-.028 12.967-4.434 19.714-15.418L466.82 244.27l-.215-2.391l1.475-1.906c21.174-27.169 28.573-74.108 22.533-113.81c-3.02-19.852-9.342-37.82-18.195-50.522c-7.424-10.652-16.28-17.447-26.828-19.641zm-372.375.004l-.016 67.127l-12.56-.016V56.008H46.332l.002 67.11H33.756v-67.11h-14.57v103.228c-.001 11.417 6.23 17.748 16.04 21.662l4.06 1.622l-.09 4.37c-2 84.57-3.977 169.139-5.962 253.708C40.074 451.79 47.1 456.028 52.95 456s12.87-4.377 19.623-15.432q-3.474-126.821-6.941-253.644l-.12-4.4l4.073-1.606c10.324-4.106 17.039-11.074 17.039-21.676V56.004h-13.41zM256 95A161 161 0 0 0 95 256a161 161 0 0 0 161 161a161 161 0 0 0 161-161A161 161 0 0 0 256 95"/></svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Meals</span>
                </a>
            </li>
            @endrole


            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Drivers</label>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" height="1em"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4 20V7.1L2.05 2.85L3.85 2L6.2 7.05h11.6L20.15 2l1.8.85L20 7.1V20zm6-7h4q.425 0 .713-.288T15 12t-.288-.712T14 11h-4q-.425 0-.712.288T9 12t.288.713T10 13m-4 5h12V9.05H6zm0 0V9.05z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-dasharray="28" stroke-dashoffset="28"
                            stroke-linecap="round" stroke-width="2">
                            <path d="M4 21V20C4 16.6863 6.68629 14 10 14H14C17.3137 14 20 16.6863 20 20V21">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s"
                                    values="28;0" />
                            </path>
                            <path
                                d="M12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7C16 9.20914 14.2091 11 12 11Z">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s"
                                    dur="0.4s" values="28;0" />
                            </path>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>


            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">User</label>
            <li>
                <a href="{{ route('profile') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-dasharray="28" stroke-dashoffset="28"
                            stroke-linecap="round" stroke-width="2">
                            <path d="M4 21V20C4 16.6863 6.68629 14 10 14H14C17.3137 14 20 16.6863 20 20V21">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s"
                                    values="28;0" />
                            </path>
                            <path
                                d="M12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7C16 9.20914 14.2091 11 12 11Z">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s"
                                    dur="0.4s" values="28;0" />
                            </path>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M9 2a4 4 0 1 0 0 8a4 4 0 0 0 0-8m-4.991 9A2 2 0 0 0 2 13c0 1.691.833 2.966 2.135 3.797C5.417 17.614 7.145 18 9 18q.617 0 1.21-.057A5.48 5.48 0 0 1 9 14.5c0-1.33.472-2.55 1.257-3.5zm6.626 2.92a2 2 0 0 0 1.43-2.478l-.155-.557q.382-.293.821-.497l.338.358a2 2 0 0 0 2.91.001l.324-.344q.448.212.835.518l-.126.423a2 2 0 0 0 1.456 2.519l.349.082a4.7 4.7 0 0 1 .01 1.017l-.46.117a2 2 0 0 0-1.431 2.479l.156.556q-.383.294-.822.498l-.338-.358a2 2 0 0 0-2.909-.002l-.325.344a4.3 4.3 0 0 1-.835-.518l.127-.422a2 2 0 0 0-1.456-2.52l-.35-.082a4.7 4.7 0 0 1-.01-1.016zm4.865.58a1 1 0 1 0-2 0a1 1 0 0 0 2 0" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                            <path stroke-dasharray="32" stroke-dashoffset="32"
                                d="M12 4H5C4.44772 4 4 4.44772 4 5V19C4 19.5523 4.44772 20 5 20H12">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s"
                                    values="32;0" />
                            </path>
                            <path stroke-dasharray="12" stroke-dashoffset="12" d="M9 12h11.5" opacity="0">
                                <set attributeName="opacity" begin="0.5s" to="1" />
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s"
                                    dur="0.2s" values="12;0" />
                            </path>
                            <path stroke-dasharray="6" stroke-dashoffset="6" d="M20.5 12l-3.5 -3.5M20.5 12l-3.5 3.5"
                                opacity="0">
                                <set attributeName="opacity" begin="0.7s" to="1" />
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s"
                                    dur="0.2s" values="6;0" />
                            </path>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</aside>


{{-- Main Content --}}
<main class="w-full max-w-screen-2xl ml-auto my-24">

    @yield('content')

</main>

{{-- Footer --}}
<footer class=" mx-auto max-w-screen-xl">
    <nav class="fixed w-full max-w-screen-2xl ml-auto bottom-2 z-50 border-gray-700 backdrop-blur-sm bg-black/40 rounded-2xl"
        data-te-navbar-ref>
        <div class="flex w-full max-w-screen-xl mx-auto flex-wrap items-center h-20 justify-between px-3">
            <div class="text-center w-full">
                <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">© 2024 All rights reserved. Designed by
                    <a href="https://vlpha.netlify.app" class="hover:underline">Zaiid Moumnii</a>
                </p>
            </div>
        </div>
    </nav>
</footer>

<script>
    document.getElementById('Hamburger').addEventListener('click', () => {
        document.getElementById('sidebar-multi-level-sidebar').classList.toggle('hidden')
    })
    document.getElementById('collapse_btn').addEventListener('click', () => {
        document.getElementById('dropdown-example').classList.toggle('hidden')
    })
</script>

@yield('scripts')