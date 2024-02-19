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
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="hidden">
                    <div class="py-1" role="none">
                        <a href="/logout" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-300" role="menuitem" tabindex="-1"
                            id="menu-item-0">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentBar">
            <div class="ml-72 mt-9 mr-7 py-5 shadow-lg font-poppins bg-white">
                <p class="ml-5 text-xl text-slate-600 font-bold">{{ auth()->user()->role }}</p>
            </div>
        </div>
    </header>
</div>
<script>
    const menuButton = document.getElementById('menu-button');
    const hidden = document.getElementById('hidden');
    menuButton.addEventListener('click', () => {
        hidden.classList.toggle('hidden');
    });
</script>
@endsection