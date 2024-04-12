@extends('layouts.noFooterMaster')

@section('title', 'QuickBite | Register')

@section('content')
    <section class="overflow-hidden h-screen relative font-poppins ">
        {{-- <img class="w-full h-full relative" src="{{ asset('assets/images/background.jpg') }}" alt="Cover"> --}}
        <div class="min-h-screen bg-component flex justify-center items-center">
            <div class="absolute w-60 h-60 rounded-xl bg-secondary -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
            </div>
            <div class="absolute w-48 h-48 rounded-xl bg-secondary -bottom-6 -right-10 transform rotate-12 hidden md:block">
            </div>
            {{-- Modal --}}
            <div
                class="p-12 w-full max-w-lg text-center max-h-full bg-primary border-2 border-secondary rounded-2xl shadow-xl z-20">
                <div>
                    <h1 class="text-3xl text-white font-passero font-bold text-center tracking-wider mb-4 ">
                        Get Started Now !</h1>
                    <p class="text-center text-sm mb-8 font-semibold text-gray-500 tracking-wide">Your journey with Quick
                        Bite begins now!</p>
                </div>
                {{--  Form --}}
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
                <form id="registrationForm" action="{{ route('register.store') }}" method="POST"
                    class="flex text-start flex-col gap-4">
                    @csrf
                    <div class="flex  flex-col gap-2">
                        <label class="text-white" for="username">Your Username</label>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 16">
                                        <path
                                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                        <path
                                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                    </svg>
                                </div>
                                <input type="text" name="username" id="username"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="Quickbiter">
                            </div>
                        </div>
                    </div>

                    <div class="flex  flex-col gap-2">
                        <label class="text-white" for="email">Your Email</label>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 16">
                                        <path
                                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                        <path
                                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                    </svg>
                                </div>
                                <input type="email" name="email" id="email"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="email@quickbite.com">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between">
                            <label class="text-white" for="password">Password</label>
                        </div>

                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70 text-gray-300">
                                        <path fill-rule="evenodd"
                                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" name = "password" id="password"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="********">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between">
                            <label class="text-white" for="password_confirmation">Confirm Your Password</label>
                        </div>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70 text-gray-300">
                                        <path fill-rule="evenodd"
                                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" name = "password_confirmation" id="password_confirmation"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="********">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-white" for="user_type">Select User Type</label>
                        <select onchange="showExtraInputs()" name="user_type" id="user_type"
                            class="text-white bg-component text-sm rounded-lg block w-full p-2.5">
                            <option selected>select account type</option>
                            <option value="customer">Customer</option>
                            <option value="restaurant-owner">Restaurant Owner</option>
                            <option value="driver">Delivery Guy</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2" id="extraInputs">
                        <!-- Extra inputs will be displayed here based on user selection -->
                    </div>

                    <button type="submit"
                        class="self-center w-1/2 py-2 text-xl text-white bg-primary border-2 border-secondary rounded-xl hover:text-black hover:bg-secondary hover:border-component transition-all">Submit</button>

                </form>
                <div class="text-center mt-6">
                    <p class="mt-4 text-sm text-white">Already have an account ? <a href="/login"
                            class="underline text-secondary cursor-pointer"> Login</a>
                    </p>
                </div>
            </div>
            <div class="w-40 h-40 absolute bg-secondary rounded-full top-0 right-12 hidden md:block"></div>
            <div
                class="w-20 h-40 absolute bg-secondary rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
            </div>
        </div>

    </section>
@endsection
@section('scripts')
    <script>
        function showExtraInputs() {
            var userType = document.getElementById('user_type').value;
            var extraInputsDiv = document.getElementById('extraInputs');

            // Clear previous extra inputs if any
            extraInputsDiv.innerHTML = '';

            // Depending on the selected user type, display the corresponding extra inputs
            if (userType === 'customer') {
                // Populate extra inputs for customer
                extraInputsDiv.innerHTML = `
                <div class="flex  flex-col gap-2">
                        <label class="text-white" for="address">Your Address</label>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="text-white absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7"/></svg>
                                </div>
                                <input type="text" name="address" id="address"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="21 Street .. Somewhere on Planet Earth">
                            </div>
                        </div>
                    </div>
                <div class="flex  flex-col gap-2">
                        <label class="text-white" for="phone">Your Phone</label>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="text-white absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.045 15.045 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2.001 2.001 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98"/></svg>
                                </div>
                                <input type="text" name="phone" id="phone"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="0600000000">
                            </div>
                        </div>
                    </div>
                `;
            } else if (userType === 'restaurant-owner') {
                extraInputsDiv.innerHTML = `
                <div class="flex  flex-col gap-2">
                        <label class="text-white" for="legal_name">Legal Name</label>
                        <div class="flex w-full">
                            <div class="relative w-full">
                                <div class="text-white absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 26 26"><path fill="currentColor" d="M16.563 15.9c-.159-.052-1.164-.505-.536-2.414h-.009c1.637-1.686 2.888-4.399 2.888-7.07c0-4.107-2.731-6.26-5.905-6.26c-3.176 0-5.892 2.152-5.892 6.26c0 2.682 1.244 5.406 2.891 7.088c.642 1.684-.506 2.309-.746 2.397c-3.324 1.202-7.224 3.393-7.224 5.556v.811c0 2.947 5.714 3.617 11.002 3.617c5.296 0 10.938-.67 10.938-3.617v-.811c0-2.228-3.919-4.402-7.407-5.557"/></svg>
                                </div>
                                <input type="text" name="legal_name" id="legal_name"
                                    class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5 "
                                    placeholder="Please Provide Your Legal Name">
                            </div>
                        </div>
                    </div>
                `;
            } else if (userType === 'driver') {
                extraInputsDiv.innerHTML = `
                <div class="flex flex-col gap-2">
                        <label class="text-white text-sm font-bold" for="type">Vehicle Type</label>
                        <select name="vehicle" id="vehicle"
                            class="text-white bg-component text-sm rounded-lg block w-full p-2.5">
                            <option selected>select vehicle type</option>
                            <option value="foot">Foot</option>
                            <option value="bike">Bicycle</option>
                            <option value="bike">Motorcycle</option>
                            <option value="car">Car</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-white" for="vehicle_registration">Registration Number</label>
                        <div class="relative w-full">
                                <div class="text-white absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M2 5.25A2.25 2.25 0 0 1 4.25 3h10a2.25 2.25 0 0 1 2.25 2.25V6h1.55c.87 0 1.662.501 2.034 1.287l1.7 3.587c.142.301.216.63.216.963v5.413a2.25 2.25 0 0 1-2.25 2.25h-1.791a3 3 0 0 1-5.917 0H9.958a3 3 0 0 1-5.92-.01A2.25 2.25 0 0 1 2 17.25zM20.5 15.5h-1.25a.75.75 0 1 0 0 1.5h1.25zm-.317-4.5L18.73 7.929a.75.75 0 0 0-.678-.429H16.5V11zM7 20.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3m9.5-1.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0"/></svg>
                                </div>
                                <input type="text" name="vehicle_registration" id="vehicle_registration"
                            class="text-white bg-component text-sm rounded-lg block w-full ps-10 p-2.5"
                            placeholder="Vehicle Registration Number">
                            </div>
                        
                    </div>
                `;
            } else {
                // If the user type is not selected, hide the extra inputs
                extraInputsDiv.style.display = 'none';

            }

            // Show the extra inputs
            extraInputsDiv.style.display = 'block';
        }
    </script>
@endsection
