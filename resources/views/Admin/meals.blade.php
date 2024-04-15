@extends('layouts.admin')

@section('title', 'Admin | Payments')

@section('content')
    @role('super-admin')
        <section id="all" class="lg:mx-auto overflow-hidden mx-4 lg:pr-16">
            <h1 class=" text-center font-passero text-6xl text-white mb-12">
                Meals Management
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

            <form class="max-w-sm mr-auto mb-4">
                <select id="restaurants"
                    class="backdrop-blur-xl  bg-black/40 border border-gray-300 text-sm rounded-lg block w-full p-2.5 placeholder-gray-400 text-white font-poppins">
                    <option selected>Choose a restaurant</option>
                    @foreach ($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endforeach
                </select>
            </form>

            <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
                <table class="w-full divide-y divide-gray-400 text-center">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Meal Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Restaurant Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Sold ~ times
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                                Action
                            </th>

                            {{-- <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th> --}}

                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($meals as $meal)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $meal->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                    {{ $meal->restaurant->name }} <br> {{ $meal->restaurant->user->username }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $meal->price }} $</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $meal->name }} </td>
                                <td class="px-4 py-4  text-sm whitespace-nowrap">
                                    <div class="flex justify-evenly ">
                                        <button class="text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 20 20">
                                                <path fill="currentColor"
                                                    d="m9.129 0l1.974.005c.778.094 1.46.46 2.022 1.078c.459.504.7 1.09.714 1.728h5.475a.69.69 0 0 1 .686.693a.689.689 0 0 1-.686.692l-1.836-.001v11.627c0 2.543-.949 4.178-3.041 4.178H5.419c-2.092 0-3.026-1.626-3.026-4.178V4.195H.686A.689.689 0 0 1 0 3.505c0-.383.307-.692.686-.692h5.47c.014-.514.205-1.035.554-1.55C7.23.495 8.042.074 9.129 0m6.977 4.195H3.764v11.627c0 1.888.52 2.794 1.655 2.794h9.018c1.139 0 1.67-.914 1.67-2.794zM6.716 6.34c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.726 0c.38 0 .686.31.686.692v8.05a.689.689 0 0 1-.686.692a.689.689 0 0 1-.685-.692v-8.05c0-.382.307-.692.685-.692m2.728 0c.378 0 .685.31.685.692v8.05a.689.689 0 0 1-.685.692a.689.689 0 0 1-.686-.692v-8.05a.69.69 0 0 1 .686-.692M9.176 1.382c-.642.045-1.065.264-1.334.662c-.198.291-.297.543-.313.768l4.938-.001c-.014-.291-.129-.547-.352-.792c-.346-.38-.73-.586-1.093-.635z" />
                                            </svg>
                                        </button>
                                        <button class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg"class="w-6 h-6" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 17q.425 0 .713-.288T13 16t-.288-.712T12 15t-.712.288T11 16t.288.713T12 17m-1-4h2V7h-2zm-2.75 8L3 15.75v-7.5L8.25 3h7.5L21 8.25v7.5L15.75 21z" />
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
    @endrole

    <section id="all" class="lg:mx-auto overflow-hidden mx-4 lg:pr-16 mt-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            My Meals
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
                <span class="text-[0px] group-hover:text-sm duration-300">Create a Meal</span>
            </button>
        </div>


        <div class="w-full backdrop-blur-xl bg-black/40 rounded-lg border-2 border-secondary">
            <table class="w-full divide-y divide-gray-400 text-center">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs  font-extrabold text-gray-400 uppercase">Meal Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Restaurant
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Sold ~ times
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th>

                        {{-- <th scope="col" class="px-6 py-3 text-xs font-extrabold text-gray-400 uppercase">
                            Action
                        </th> --}}

                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($ownedMeals as $ownedMeal)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $ownedMeal->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $ownedMeal->restaurant->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $ownedMeal->price }} $</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white">{{ $ownedMeal->name }} </td>
                            <td class="px-4 py-4  text-sm whitespace-nowrap">
                                <div class="group relative w-fit">
                                        <form action="{{ route('meals.kill', $ownedMeal) }}" method="POST">
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

    {{-- CreateModal --}}
    <section id="createModal" class=" relative  hidden">
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 overflow-auto">
            <div class="absolute bg-black/50 backdrop-blur-xl border-2 border-primary rounded-lg overflow-scroll shadow">
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
                            Create a New Meal
                        </p>
                    </div>

                    <form class="mx-8 4 lg:mx-0 font-poppins font-semibold tracking-wide"
                        action="{{ route('meals.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="flex flex-row justify-between mt-8 gap-8">
                            <div class="w-full">
                                <label for="Event Title" class="block text-sm text-gray-500 dark:text-gray-300">
                                    Name</label>
                                <input type="text" placeholder="Pizza's House" name="name"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-5 py-2.5 text-white " />
                            </div>
                        </div>

                        <div class="mt-8">
                            <label for="description" class="block text-sm text-gray-500 dark:text-gray-300">
                                Description</label>
                            <textarea id="description" name="description" placeholder="Describe it here "
                                class="block mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 text-xs px-5 py-2.5 text-white "></textarea>
                        </div>

                        <div class="flex flex-row justify-between mt-8 gap-8">
                            <div class="w-full">
                                <label for="price" class="block text-sm text-white dark:text-gray-300">Price</label>
                                <input type="text" name="price"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-white"
                                    placeholder="$" />
                            </div>
                            <div class="w-full">
                                <label for="restaurant_id" class="block text-sm text-gray-300">Restaurant</label>
                                <select name="restaurant_id" id="restaurants"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-gray-300 focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 ">
                                    <option selected>Choose a restaurant</option>
                                    @foreach ($ownedRestaurants as $ownedRestaurant)
                                        <option value="{{ $ownedRestaurant->id }}">{{ $ownedRestaurant->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full">
                                <label for="category_id" class="block text-sm text-gray-300">Category</label>
                                <select name="category_id" id="categories"
                                    class="block text-xs mt-2 w-full placeholder-gray-300 rounded-lg border border-gray-200 bg-secondary/60 px-2 py-2.5 text-gray-300 focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 ">
                                    <option selected>Choose a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="mt-8 w-full">
                            <label
                                class="flex flex-col items-center w-full p-5 mt-2 text-center bg-secondary/60 border-2 border-gray-200 border-dashed cursor-pointer rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>

                                <h2 class="mt-1 font-medium tracking-wide text-gray-300">Upload a image</h2>

                                <p class="mt-2 text-xs tracking-wide text-gray-300">Upload or darg & drop your
                                    file JPG, JPEG, PNG. </p>
                                <input name="image" id="image" type="file" class="hidden" />
                            </label>
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
@endsection
