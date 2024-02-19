@extends('Layouts.page')
@extends('Layouts.sidebar')
@section('content')
    <div class="container flex flex-col">
        <header class="bg-slate-600 h-28">
            <div class="flex justify-end mr-2 mt-2">
                <div class="relative inline-block text-left font-poppins">
                    <div>
                        <button type="button"
                            class="inline-flex w-full justify-center gap-x-1.5 rounded-full px-3 py-2 text-sm font-semibold text-gray-900 duration-300 hover:bg-gray-50"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Hi, {{ auth()->user()->name }}
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                        id="hidden">
                        <div class="py-1" role="none">
                            <a href="/logout" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-300"
                                role="menuitem" tabindex="-1" id="menu-item-0">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentBar">
                <div class="ml-72 mt-9 mr-7 py-5 shadow-lg font-poppins bg-white">
                    <p class="ml-5 text-xl text-slate-600 font-bold">Create Account Operator</p>
                </div>
            </div>
        </header>
        <div class="form ml-72 mr-7">
            <div class="cardForm bg-white shadow-2xl rounded-2xl mt-16 py-8">
                <p class="font-poppins text-slate-600 text-center font-bold">Form Create</p>
                <form class="max-w-md mx-auto" method="POST" action="/admin/createOperatorPost">
                    @csrf
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" id="email" autocomplete="off"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                            address</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name" id="name" autocomplete="off"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name
                        </label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="username" id="username" autocomplete="off"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username
                        </label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="password" id="password" autocomplete="off"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script>
        const menuButton = document.getElementById('menu-button');
        const hidden = document.getElementById('hidden');
        menuButton.addEventListener('click', () => {
            hidden.classList.toggle('hidden');
        });
    </script>
@endsection
