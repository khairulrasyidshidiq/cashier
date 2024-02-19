@extends('Layouts.page')
@section('content')
    <div
        class="h-screen flex items-center justify-center bg-[url(https://i.gifer.com/ZXuY.gif)] bg-no-repeat bg-cover bg-center bg-fixed">
        <div class="grid gap-3 grid-cols-2 card m-5 w-4/5 h-5/6">
            <div class="image">
                <img class="h-[450px] w-full object-contain" src="https://wallpapercave.com/wp/wp9680237.jpg" alt="">
            </div>
            <form action="/loginPost" method="POST">
                @csrf
                <div class="form h-full flex flex-col justify-center">
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-700 sm:max-w-md">
                                <input type="text" name="email" id="email"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan Email">
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-2">
                        <label for="username" class="block text-sm font-medium leading-6 text-white">Password</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-700 sm:max-w-md">
                                <input type="password" name="password" id="password"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan Password">
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 mt-2 flex justify-end">
                        <button type="submit"
                            class="py-2.5 px-5 me-2 mb-2 mt-5 text-sm font-medium  focus:outline-none text-white bg-gray-600/90 rounded-lg border border-white hover:bg-gray-100/90 hover:text-black focus:z-10 focus:ring-2 focus:ring-gray-200 ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
