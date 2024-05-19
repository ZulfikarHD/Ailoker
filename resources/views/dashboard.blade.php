<x-app-layout>
    {{-- Hero Section --}}
    <section class="bg-blue-200 w-full min-w-[100vh] px-10 mx-auto mb-16">
        {{-- Hero Section --}}
        <div class="max-w-7xl mx-auto flex items-center justify-between h-full py-24 lg:py-56">
            <div class="max-w-[46%]">
                {{-- Hero Text --}}
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-950 md:text-5xl lg:text-6xl">
                    Raih <span class="text-blue-700 ">Karir Impianmu</span> Dengan Sentuhan Jari
                </h1>
                <p class="mb-8 text-lg font-normal text-slate-950 lg:text-xl px-1 pt-1">
                    Temukan pekerjaan impianmu dari berbagai lowongan yang tersedia oleh beberapa perusahaan ternama.
                </p>

                {{-- Search --}}
                <form class="w-full max-w-md">
                    {{-- Label Posisi --}}
                    <label for="posisi"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Posisi</label>

                    {{-- Input Field --}}
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 mb-1 pointer-events-none text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                            </svg>
                        </div>
                        <input type="posisi" id="posisi"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Posisi" />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>
            </div>

            {{-- Image --}}
            <div class="max-w-[46%] absolute right-28 -mt-10 hidden md:block">
                <img src="{{ asset('image/hero-image.png') }}" alt="hero image" class="w-full h-full">
            </div>
        </div>
    </section>

    {{-- Company Profile Section --}}
    <section class="mb-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-4 gap-8">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 4; $i++)
                    <div>
                        <a href="#"
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
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

    {{-- Category Loker --}}
    <section>
        <div class="max-w-7xl mx-auto mb-16">
            {{-- Header --}}
            <h3 class="text-3xl font-semibold text-slate-800 dark:text-white mb-8">Kategori Loker</h3>

            {{-- Grid Kategori Loker --}}
            <div class="grid grid-cols-4 gap-8">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 8; $i++)
                    <div>
                        <a href="#"
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex gap-4 items-center">

                                {{-- Logo Kategory --}}
                                <img src="{{ asset('Image/hero-image.png') }}" alt="category loker" class="max-h-8" />

                                {{-- Nama Kategori --}}
                                <div class="flex flex-col justify-start items-center">
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
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Lihat Semua
                </button>
            </div>
        </div>
    </section>


    {{-- Loker Terbaru --}}
    <section>
        <div class="max-w-7xl mx-auto">
            {{-- Header --}}
            <h3 class="text-3xl font-semibold text-slate-800 dark:text-white mb-8">Loker Terbaru</h3>

            {{-- Grid Loker Terbaru --}}
            <div class="grid grid-rows-6 gap-6">
                {{-- Loop untuk tiap card yang ada di carousel --}}
                @for ($i = 0; $i < 5; $i++)
                    <div>
                        <a href="#"
                            class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <div class="flex gap-4 items-center">
                                {{-- Logo Kategory --}}
                                <img src="{{ asset('Image/hero-image.png') }}" alt="category loker" class="max-h-8" />

                                {{-- Nama Kategori --}}
                                <div class="flex flex-col justify-start items-start">
                                    <h5 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white text-s">
                                        Designer
                                    </h5>

                                    <p class="font-normal text-gray-700 dark:text-gray-400" style="max-width: 50ch; text-align: start; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        A designer's job involves creating visual concepts and designs for various
                                        projects. It could include graphics, websites, products, or other creative
                                        works. While design can be rewarding, it's not necessarily easy.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>

</x-app-layout>
