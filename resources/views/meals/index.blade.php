@extends('layouts.app')

@section('title', 'QuickBite | Meals')

@section('content')
    <section class="w-screen h-1/2 top-1">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img src="{{ asset('assets/images/meals-index.png') }}" alt="hero" class="w-full object-cover" />
            <div class="absolute flex flex-col items-center  ">
                <div class=" flex flex-col items-center">
                    <h1 class="text-8xl font-bold font-passero text-center mb-4 text-white ">Don't Eat <span
                            class="text-secondary">Less. </span>Just eat <span class="text-secondary">Real</span></h1>
                    <p class="text-lg max-w-4xl font-poppins text-center text-neutral-700 dark:text-neutral-300">where flavour
                        Fun. Fast. Tasty. Delicious.</p>
                </div>
                <form action="" class="w-full mt-12">
                    <div class="relative flex gap-4 p-1 rounded-full bg-component border-3 border-secondary shadow-md md:p-2">
                        <select class="hidden p-3 rounded-full border border-secondary text-white bg-transparent md:block md:p-3 md:px-8" name="domain" id="domain">
                            <option value="design">FastFood</option>
                            <option value="development">Restaurant</option>
                            <option value="marketing">Marketing</option>
                        </select>
                        <input placeholder="Looking For Something Special ... ? " class="w-full p-2 rounded-full placeholder:text-secondary bg-component " type="text">
                        <button type="button" title="Start buying" class="py-3 rounded-full text-center bg-primary border-2 border-secondary md:px-12">
                            <span class="hidden text-white font-semibold md:block">
Search
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-yellow-900 md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="text-center pb-12 border-b">
        <h1 class="my-8 font-passero text-7xl text-white">Here are our <br><span class="text-secondary">Delightful</span> menus !</h1>
    </section>
    <section class="max-w-screen-xl  mx-auto gap-4 mt-8 text-center grid grid-cols-1 md:grid-cols-3  lg:grid-cols-4">
        <div class="rounded-2xl bg-component h-fit  col-span-1 ">
            <h1 class="my-8 font-passero text-7xl text-white">Here are our <br><span class="text-secondary">Delightful</span> menus !</h1>
        </div>
        <!-- component -->
        <div class="col-span-3 pt-12 p-4">
            <div class="grid gap-14 md:grid-cols-3 md:gap-4 md:gap-y-12">
              <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                <div
                  class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                  <img src={{ asset('assets/images/Pizza.jpg')}} class="w-full h-full rounded-full" alt="Pizza">
                </div>
                <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                <div class="flex justify-between mt-8">
                    <p class="px-4 font-bold text-secondary">22.00 $</p>
                    <button class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z"/></svg>
                    </button>
                </div>
              </div>
              <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                <div
                  class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                  <img src={{ asset('assets/images/Pizza.jpg')}} class="w-full h-full rounded-full" alt="Pizza">
                </div>
                <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                <div class="flex justify-between mt-8">
                    <p class="px-4 font-bold text-secondary">22.00 $</p>
                    <button class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z"/></svg>
                    </button>
                </div>
              </div>
              <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                <div
                  class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                  <img src={{ asset('assets/images/Pizza.jpg')}} class="w-full h-full rounded-full" alt="Pizza">
                </div>
                <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                <div class="flex justify-between mt-8">
                    <p class="px-4 font-bold text-secondary">22.00 $</p>
                    <button class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z"/></svg>
                    </button>
                </div>
              </div>
              <div class="rounded-xl bg-gradient-to-t from-black to-secondary p-6 text-center shadow-xl">
                <div
                  class="mx-auto flex h-48 w-48 -translate-y-24 transform items-center justify-center rounded-full shadow-lg shadow-teal-500/40">
                  <img src={{ asset('assets/images/Pizza.jpg')}} class="w-full h-full rounded-full" alt="Pizza">
                </div>
                <h1 class="text-secondary mb-3 text-xl font-medium lg:px-14 ">Pizza</h1>
                <p class="px-4 text-gray-500">By: <span class="text-gray-300">Kh'oukha</span></p>
                <div class="flex justify-between mt-8">
                    <p class="px-4 font-bold text-secondary">22.00 $</p>
                    <button class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9 20c0 1.1-.9 2-2 2s-1.99-.9-1.99-2S5.9 18 7 18s2 .9 2 2m8-2c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2m.396-5a2 2 0 0 0 1.952-1.566L21 5H7V4a2 2 0 0 0-2-2H3v2h2v11a2 2 0 0 0 2 2h12a2 2 0 0 0-2-2H7v-2z"/></svg>
                    </button>
                </div>
              </div>
              
            </div>
          
          </div>
    </section>
@endsection
