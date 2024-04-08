@extends('layouts.admin')

@section('title', 'QuickBite | Settings')

@section('content')

    <section id="all" class="mx-auto overflow-hidden pr-16">
        <h1 class=" text-center font-passero text-6xl text-white mb-12">
            Application <span class="text-secondary">Settings</span>
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="col-span-1 rounded-lg border border-secondary backdrop-blur-xl bg-black/40 p-8">
                <h1 class="font-passero text-2xl text-white mb-4">
                    Edit <span class="text-secondary">Favicon</span>
                </h1>
                <form action="">

                    <div class="mt-8 w-full">
                        <label for="poster"
                            class="flex flex-col items-center w-full p-5 mt-2 text-center bg-component border-2 border-secondary border-dashed cursor-pointer rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                            </svg>
    
                            <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload a poster</h2>
    
                            <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg & drop your
                                file JPG, JPEG, PNG. </p> <input description="poster" id="poster" type="file" class="hidden" />
                        </label>
                    </div>
                </form>
            </div>
        
            <div class="col-span-1 rounded-lg border border-secondary backdrop-blur-xl bg-black/40 p-8">
                <h1 class="font-passero text-2xl text-white mb-4">
                    Edit <span class="text-secondary">Site </span>Data
                </h1>
                <form action="" method="" class="grid gap-4 mb-6 grid-cols-1">

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-white">Site Title</label>
                        <input type="text" id="name" class=" border border-gray-300 text-sm rounded-lg block w-full p-2.5 bg-component placeholder-gray-400 text-white" placeholder="QuickBite"  />
                    </div>  

                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-white">Site Description</label>
                        <input type="text" id="description" class=" border border-gray-300 text-sm rounded-lg block w-full p-2.5 bg-component placeholder-gray-400 text-white" placeholder="Something bla bla"  />
                    </div> 
                    
                    <button type="submit" class="text-white bg-primary hover:bg-secondary border-2 border-secondary hover:border-primary font-medium rounded-3xl text-sm w-1/3  px-5 py-2.5 text-center ">Apply</button>
                </form>
            </div>
        </div>
    </section>
@endsection
