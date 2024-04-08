{{-- Header --}}

<header class=" mx-auto max-w-screen-xl ">
    <nav class="fixed w-full max-w-screen-2xl ml-auto top-2 z-50 border-gray-700 backdrop-blur-sm bg-black/40 rounded-2xl mx-auto "
        data-te-navbar-ref>
        <div class="flex w-full max-w-screen-xl mx-auto flex-wrap items-center h-20 justify-between px-3">
            <div>
                <a class="mx-2 my-1 flex items-center text-white hover:text-white focus:text-white lg:mb-0 lg:mt-0"
                    href="/">
                    <img class="mr-2" src={{ asset('assets/images/logo.png') }} style="height: 40px" alt="QuickBite" />
                </a>
            </div>

            <!-- Hamburger button for mobile view -->
            <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
                aria-controls="sidebar-multi-level-sidebar" type="button"
                class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>

            <!-- Collapsible navbar container -->
            <div class="!visible hidden flex-grow  items-center lg:mt-0 lg:!flex lg:basis-auto"
                id="navbarSupportedContent4" data-te-collapse-item>
                <!-- Left links -->
                <ul class="list-style-none mr-auto flex flex-col pl-0 my-2 lg:flex-row" data-te-navbar-nav-ref>
                    <!-- Home link -->
                    <li class="pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                        <a class="text-white hover:text-secondary " aria-current="page" href="/"
                            data-te-nav-link-ref>
                            <div>
                                <p class="font-passero text-3xl ">QuickBite</p>
                                {{-- <span>Delivering Delight, One Bite at a Time!</span> --}}
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="flex items-center">
                    <button type="button" data-te-ripple-init data-te-ripple-color="light"
                        class="mr-3 inline-block rounded-full border-4 border-secondary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-200 hover:text-white focus:text-white focus:outline-none focus:ring-0 active:text-white motion-reduce:transition-none">
                        Login
                    </button>
                    {{-- <button type="button" data-te-ripple-init data-te-ripple-color="light"
                        class="mr-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Sign up for free
                    </button>
                    <button type="button" data-te-ripple-init data-te-ripple-color="light"
                        class="mr-3 inline-block rounded px-3 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg motion-reduce:transition-none"
                        style="background-color: #333">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </button> --}}
                </div>
            </div>
        </div>
    </nav>
</header>

{{-- Sidebar --}}



<aside id="sidebar-multi-level-sidebar"
    class="hidden uppercase lg:block fixed bottom-2 top-2 left-4  z-40 w-72  transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto border-gray-700 backdrop-blur-sm bg-black/40 rounded-2xl">
        <ul class="space-y-2 font-medium">
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24">
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
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.8 11H7.225l-.275 2h10.1zM4 20l1.225-9H3q-.5 0-.788-.4t-.162-.875l1.425-5q.1-.325.35-.525t.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875T21 11h-2.2l1.2 9h-2l-.675-5H6.675L6 20z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Restaurants</span>
                </a>
            </li>
            <li>
                <a href="{{ route('payments') }}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7 12c2.2 0 4-1.8 4-4S9.2 4 7 4S3 5.8 3 8s1.8 4 4 4m4 8v-5.3c-1.1-.4-2.5-.7-4-.7c-3.9 0-7 1.8-7 4v2zM22 4h-7c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m-4 14h-2V6h2z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Payments</span>
                </a>
            </li>
            <li>
                <a href="{{route('mealsManagement')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Meals</span>
                </a>
            </li>


            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Settings</label>
            <li>
                <a href="{{route('settings')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24">
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


            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">User</label>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24">
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
                    <span class="flex-1 ms-3 whitespace-nowrap">Account</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24">
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
                    <a href="#" class="hover:underline">Zaiid Moumnii</a>
                </p>
            </div>
        </div>
    </nav>
</footer>
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
    var restaurantData = {
        labels: ['Restaurant A', 'Restaurant B', 'Restaurant C', 'Restaurant D', 'Restaurant E', 'Restaurant F',
            'Restaurant G'
        ],
        datasets: [{
            // label: 'Restaurants Statistics',
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
                text: 'Most Seller Restaurants', // Your personalized title
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
</script>
