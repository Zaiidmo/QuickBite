@extends('layouts.admin')

@section('title', 'Admin | Users Management')

@section('content')

    <section id="all" class="mx-auto overflow-hidden pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Users Management
        </h1>
        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">User
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Registered At
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Position
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full border-2 border-secondary"
                                src={{ asset('assets/images/avatar.jpg') }} alt="Jese image">
                            <div class="ps-3 text-left">
                                <div class="text-base font-semibold">Neil Sims</div>
                                <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">12-12-2021</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">Customer</td>
                        
                        <td class="px-4 py-4  text-sm whitespace-nowrap">
                            <div class="flex justify-evenly ">
                                <button class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 2048 2048">
                                        <path fill="currentColor"
                                            d="M1600 1152q93 0 174 35t143 96t96 142t35 175q0 93-35 174t-96 143t-142 96t-175 35q-93 0-174-35t-143-96t-96-142t-35-175q0-93 35-174t96-143t142-96t175-35m0 768q66 0 124-25t101-68t69-102t26-125t-25-124t-69-101t-102-69t-124-26t-124 25t-102 69t-69 102t-25 124t25 124t68 102t102 69t125 25m-192-384h384v128h-384zm-352 384q25 36 54 68t63 60H256V896h256V522q0-108 39-203t108-166T821 41t203-41q109 0 202 41t163 112t108 166t39 203v374h256v128H384v896zM640 896h768V522q0-81-29-152t-80-126t-122-85t-153-31q-82 0-152 31t-122 85t-81 125t-29 153z" />
                                    </svg>
                                </button>
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

                </tbody>
            </table>
        </div>
    </section>

    <section id="customers" class="mx-auto mt-12 overflow-hidden pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Customers
        </h1>
        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">User
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Registered At
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Ordered
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Total $
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full border-2 border-secondary"
                                src={{ asset('assets/images/avatar.jpg') }} alt="Jese image">
                            <div class="ps-3 text-left">
                                <div class="text-base font-semibold">Neil Sims</div>
                                <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">12-12-2021</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">2000 $</td>
                        
                        <td class="px-4 py-4  text-sm whitespace-nowrap">
                            <div class="flex justify-evenly ">
                                <button class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 2048 2048">
                                        <path fill="currentColor"
                                            d="M1600 1152q93 0 174 35t143 96t96 142t35 175q0 93-35 174t-96 143t-142 96t-175 35q-93 0-174-35t-143-96t-96-142t-35-175q0-93 35-174t96-143t142-96t175-35m0 768q66 0 124-25t101-68t69-102t26-125t-25-124t-69-101t-102-69t-124-26t-124 25t-102 69t-69 102t-25 124t25 124t68 102t102 69t125 25m-192-384h384v128h-384zm-352 384q25 36 54 68t63 60H256V896h256V522q0-108 39-203t108-166T821 41t203-41q109 0 202 41t163 112t108 166t39 203v374h256v128H384v896zM640 896h768V522q0-81-29-152t-80-126t-122-85t-153-31q-82 0-152 31t-122 85t-81 125t-29 153z" />
                                    </svg>
                                </button>
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

                </tbody>
            </table>
        </div>
    </section>

    <section id="restau-owners" class="mx-auto mt-12 overflow-hidden pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Restaurants Owners
        </h1>
        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">User
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Registered At
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Ownes
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Published
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full border-2 border-secondary"
                                src={{ asset('assets/images/avatar.jpg') }} alt="Jese image">
                            <div class="ps-3 text-left">
                                <div class="text-base font-semibold">Neil Sims</div>
                                <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">12-12-2021</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">3 Restaurants</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">200 meal</td>
                        
                        <td class="px-4 py-4  text-sm whitespace-nowrap">
                            <div class="flex justify-evenly ">
                                <button class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 2048 2048">
                                        <path fill="currentColor"
                                            d="M1600 1152q93 0 174 35t143 96t96 142t35 175q0 93-35 174t-96 143t-142 96t-175 35q-93 0-174-35t-143-96t-96-142t-35-175q0-93 35-174t96-143t142-96t175-35m0 768q66 0 124-25t101-68t69-102t26-125t-25-124t-69-101t-102-69t-124-26t-124 25t-102 69t-69 102t-25 124t25 124t68 102t102 69t125 25m-192-384h384v128h-384zm-352 384q25 36 54 68t63 60H256V896h256V522q0-108 39-203t108-166T821 41t203-41q109 0 202 41t163 112t108 166t39 203v374h256v128H384v896zM640 896h768V522q0-81-29-152t-80-126t-122-85t-153-31q-82 0-152 31t-122 85t-81 125t-29 153z" />
                                    </svg>
                                </button>
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

                </tbody>
            </table>
        </div>
    </section>

    <section id="delivery_boys" class="mx-auto mt-12 overflow-hidden pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Delivery Guys
        </h1>
        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs text-start font-extrabold text-gray-400 uppercase">User
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Registered At
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Shipped 
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Avg Review 
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr>
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full border-2 border-secondary"
                                src={{ asset('assets/images/avatar.jpg') }} alt="Jese image">
                            <div class="ps-3 text-left">
                                <div class="text-base font-semibold">Neil Sims</div>
                                <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">12-12-2021</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">40 Order</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">4.7/5</td>
                        
                        <td class="px-4 py-4  text-sm whitespace-nowrap">
                            <div class="flex justify-evenly ">
                                <button class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 2048 2048">
                                        <path fill="currentColor"
                                            d="M1600 1152q93 0 174 35t143 96t96 142t35 175q0 93-35 174t-96 143t-142 96t-175 35q-93 0-174-35t-143-96t-96-142t-35-175q0-93 35-174t96-143t142-96t175-35m0 768q66 0 124-25t101-68t69-102t26-125t-25-124t-69-101t-102-69t-124-26t-124 25t-102 69t-69 102t-25 124t25 124t68 102t102 69t125 25m-192-384h384v128h-384zm-352 384q25 36 54 68t63 60H256V896h256V522q0-108 39-203t108-166T821 41t203-41q109 0 202 41t163 112t108 166t39 203v374h256v128H384v896zM640 896h768V522q0-81-29-152t-80-126t-122-85t-153-31q-82 0-152 31t-122 85t-81 125t-29 153z" />
                                    </svg>
                                </button>
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

                </tbody>
            </table>
        </div>
    </section>

@endsection
