@extends('layouts.app')

@section('title')
    Resultados
@endsection

@section('content')
    <div class="my-8 md:mx-32 sm:mx-10 mx-5">
        <div class="mb-5 border-b-2">
            <p class="text-2xl">Busqueda: <span class="font-semibold">oxford learn</span></p>
            <p class="py-2">103 resultados</p>
        </div>

        <div class="">
            <ul class="flex justify-start items-baseline flex-wrap gap-y-4 bg-gray-200 py-4 px-2">

                <li class="md:w-1/5 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/5 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/5 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/5 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/5 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="md:w-1/5 sm:w-1/2 w-full min-w-[200px]">
                    <div class="border-2 border-gray-200 bg-white rounded-xl shadow sm:mx-2 mx-0 hover:shadow-xl">
                        <a href="{{ route('item') }}" class="block p-3 cursor-pointer">
                            <div class="flex flex-col justify-center items-center text-center ">
                                <div class="w-full h-44 flex justify-center items-center">
                                    <img src="https://picsum.photos/80/100" alt="imagen item" class="object-contain h-full">
                                </div>

                                <div class="w-full text-start">
                                    <p class="text-sm font-semibold pt-5  text-sky-900 h-24 hover:underline cursor-pointer">
                                        English File Fourth Edition Student Book Pack Intermediate Plus
                                    </p>
                                    <p class="block text-start text-xs font-semibold mb-2 text-gray-600 cursor-pointer">
                                        ISBN: <span class="font-normal">9780194720168</span>
                                    </p>
                                    <p class="text-2xl font-semibold text-gray-800 cursor-pointer">
                                        S/ 48
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

            </ul>

            <nav aria-label="Page navigation example" class="my-8">
                <ul class="list-style-none flex justify-center">
                    <li>
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li>
                        <a class="bg-sky-700 text-white relative block rounded bg-transparent px-3 py-1.5 text-lg  transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#">1</a>
                    </li>
                    <li aria-current="page">
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#">2</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#">3</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-transparent px-3 py-1.5 text-lg text-neutral-600 transition-all duration-300 hover:bg-sky-300 border-2 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                            href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
