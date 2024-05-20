<x-app-layout>
    {{-- Hero Section --}}
    <section class="bg-blue-200 w-full min-w-[100vh] px-4 md:px-10 mx-auto mb-16">
        <div class="max-w-7xl mx-auto grid grid-cols-2 gap-4 items-center justify-between h-full py-24">
            {{-- Hero Text --}}
            <div
                class="w-full max-w-sm sm:max-w-2xl lg:max-w-full h-full flex flex-col justify-between col-span-2 lg:col-span-1">
                <div>
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-950 md:text-5xl lg:text-6xl">
                        Raih <span class="text-blue-700 ">Karir Impianmu</span> Dengan Sentuhan Jari
                    </h1>
                    <p class="mb-8 text-lg font-normal text-slate-950 lg:text-xl px-1 pt-1">
                        Temukan pekerjaan impianmu dari berbagai lowongan yang tersedia oleh beberapa perusahaan
                        ternama.
                    </p>
                </div>

                {{-- Search --}}
                <form class="w-full md:max-w-md max-w-xs mb-1">
                    {{-- Label Posisi --}}
                    <label for="posisi"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Posisi</label>

                    {{-- Input Field --}}
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 mb-1 pointer-events-none text-slate-400">
                            <svg xmlns="http://www.w3.org/1000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                            </svg>
                        </div>
                        <input type="posisi" id="posisi"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Posisi" />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>
            </div>

            {{-- Image --}}
            <div class="relative hidden lg:block -ml-4 col-span-2 md:col-span-1">
                <img src="{{ asset('image/hero-image.png') }}" alt="hero image" class="w-full h-full">
            </div>
        </div>
    </section>

    {{-- Loker Urgent --}}
    <section class="mb-16 px-4 md:px-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-4 gap-8">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 4; $i++)
                    <div>
                        <a href="#"
                            class="block max-w-sm p-6 bg-white border border-gray-100 rounded-xl  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <h5
                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white uppercase">
                                    PT Blues
                                </h5>

                                <span
                                    class="bg-blue-100 text-blue-800 text-sm font-bold px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    18 Lowongan
                                </span>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Loker Terbaru --}}
    <section class="px-4 md:px-10 mb-16">
        <div class="max-w-7xl mx-auto">
            {{-- Header --}}
            <h3 class="text-3xl font-semibold text-slate-800 dark:text-white mb-8">Loker Terbaru</h3>

            {{-- Grid Loker Terbaru --}}
            <div class="grid grid-rows-5 gap-6 mb-8">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 5; $i++)
                    <div>
                        <a href="#"
                            class="block w-full px-6 py-4 hover:drop-shadow shadow-sm drop-shadow-sm bg-white border border-gray-100 rounded-xl  hover:ring-1 hover:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex flex-wrap gap-4 items-center justify-between">
                                <div class="flex flex-wrap gap-4 items-center">
                                    {{-- Logo Kategory --}}
                                    <img src="{{ asset('Image/hero-image.png') }}" alt="category loker"
                                        class="max-h-8" />

                                    <div class="flex flex-col justify-start items-start">
                                        {{-- Job Position --}}
                                        <h5 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                                            Designer
                                        </h5>

                                        {{-- Job Description --}}
                                        <p class="font-normal text-slate-500 dark:text-slate-400 ml-0.5"
                                            style="max-width: 50ch; text-align: start; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                                            A designer's job involves creating visual concepts and designs for various
                                            projects. It could include graphics, websites, products, or other creative
                                            works. While design can be rewarding, it's not necessarily easy.
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="flex gap-4 lg:gap-10 items-center flex-wrap justify-between lg:justify-end ml-auto mr-0 w-full lg:w-auto">
                                    {{-- Pendidikan dan Status Kerja --}}
                                    <div class="flex gap-3 justify-center items-center">
                                        <label
                                            class="bg-green-100 text-green-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor"
                                                class="w-[18px] h-[18px] inline-block mb-0.5 mr-0.5 text-green-500">
                                                <path fill-rule="evenodd"
                                                    d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            SMK/SMA
                                        </label>

                                        <label
                                            class="bg-indigo-100 text-indigo-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor"
                                                class="w-[18px] h-[18px] inline-block mb-0.5 mr-0.5 text-indigo-500">
                                                <path fill-rule="evenodd"
                                                    d="M6 3.75A2.75 2.75 0 0 1 8.75 1h2.5A2.75 2.75 0 0 1 14 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 0 1 6 4.193V3.75Zm6.5 0v.325a41.622 41.622 0 0 0-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25ZM10 10a1 1 0 0 0-1 1v.01a1 1 0 0 0 1 1h.01a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1H10Z"
                                                    clip-rule="evenodd" />
                                                <path
                                                    d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 0 1-9.274 0C3.985 17.585 3 16.402 3 15.055Z" />
                                            </svg>

                                            Full Time
                                        </label>
                                    </div>

                                    <div class="flex justify-between gap-4 items-center w-full md:w-fit">
                                        <label
                                            class="bg-red-100 text-red-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                            <p class="text-center">
                                                <span class="font-normal text-red-900">Tenggat Waktu</span>
                                                <br>
                                                24 Mei 2024
                                            </p>
                                        </label>
                                        <label
                                            class="bg-slate-100 text-slate-800 text-xs font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-slate-900 dark:text-slate-300">
                                            <p class="text-center">
                                                <span class="font-normal text-slate-900">Tanggal Posting</span>
                                                <br>
                                                01 Mei 2024
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>

            {{-- Button Lihat Semua --}}
            <div class="text-center">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Lihat Semua
                </button>
            </div>
        </div>
    </section>

    {{-- Category Loker --}}
    <section class="px-4 md:px-10 mb-16">
        <div class="max-w-7xl mx-auto">
            {{-- Header --}}
            <h3 class="text-3xl font-semibold text-slate-800 dark:text-white mb-8">Kategori Loker</h3>

            {{-- Grid Kategori Loker --}}
            <div class="grid grid-cols-4 gap-8">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 8; $i++)
                    <div>
                        <a href="#"
                            class="block max-w-sm p-6 bg-white border border-gray-100 rounded-xl  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex gap-4 items-center">

                                {{-- Logo Kategory --}}
                                <img src="{{ asset('Image/hero-image.png') }}" alt="category loker" class="max-h-8" />

                                {{-- Nama Kategori --}}
                                <div class="flex flex-col justify-start items-center">
                                    {{-- Job Ti --}}
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                                        Designer
                                    </h5>
                                    <span
                                        class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300 block -ml-2">
                                        23 Loker
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>

            {{-- Button Lihat Semua --}}
            <div class="text-center mt-8">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Lihat Semua
                </button>
            </div>
        </div>
    </section>

    {{-- Tips & Trick --}}
    <section class="px-4 md:px-10 mb-16">
        <div class="max-w-7xl mx-auto">
            {{-- Header --}}
            <h3 class="text-3xl font-semibold text-slate-800 dark:text-white mb-8">Tips & Trick</h3>

            {{-- Grid Kategori Loker --}}
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> --}}
            <div class="flex flex-wrap justify-center gap-4">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 3; $i++)
                    <div
                        class="max-w-sm flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('Image/hero-image.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Tips & Trik CV</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas beatae eaque magni ratione excepturi maiores.
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Baca Artikel
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
    </section>

    {{-- Company Profile Section --}}
    <section class="mb-16 px-4 md:px-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-4 gap-8">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 4; $i++)
                    <div>
                        <a href="#"
                            class="block max-w-sm p-6 bg-white border border-gray-100 rounded-xl  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex flex-col gap-2 justify-center items-center">
                                <h5
                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white uppercase">
                                    PT Blues
                                </h5>

                                <span
                                    class="bg-blue-100 text-blue-800 text-sm font-bold px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    18 Lowongan
                                </span>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>
</x-app-layout>
