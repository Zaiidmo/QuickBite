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

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">
                        <button type="submit">Upload</button>
                </form>
            </div>
        </div>
    </section>
@endsection
