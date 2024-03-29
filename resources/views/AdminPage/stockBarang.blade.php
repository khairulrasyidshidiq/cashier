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
                    <p class="ml-5 text-xl text-slate-600 font-bold">Stock Barang</p>
                </div>
            </div>
            <div class="contentBody">
                <div class="flex mt-8 ml-72">
                    <div class="headName">
                        <p class="text-2xl text-slate-600 font-bold uppercase font-poppins">Item List</p>
                    </div>
                    <div class="createButton">
                        <a href="/admin/create-barang" class="ml-[47em] bg-zinc-200 hover:bg-zinc-400 p-2.5 border border-gray-300 hover:border-zinc-400 rounded-lg font-poppins font-semibold  text-gray-700 duration-200">Add Item</a>
                    </div>
                </div>
                <div class="tableAccount">
                    <div class="relative ml-72 mr-7 py-5 overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-zinc-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Item Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stockBarang as $barang)
                                    <tr class="bg-neutral-50 border-b">
                                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $barang->itemName }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $barang->quantity }} 
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. {{ number_format($barang->price, '0', ',' , '.') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Nigga
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        {{-- <div class="mt-2 itemLinks">
                            {{ $stockBarang->links() }}
                        </div> --}}
                    </div>
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
