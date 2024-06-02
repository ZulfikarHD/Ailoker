<x-app-layout>
    {{-- This is the main layout component for the application --}}

    {{-- Search Section --}}
    <div class="bg-blue-200 w-full min-w-[100vh] px-4 md:px-10 mx-auto mb-16">
        <div class="max-w-sm md:max-w-2xl md:mx-auto py-24 flex flex-col md:flex-row items-center gap-4">
            <div
                class="flex flex-col w-full px-4 md:flex-row items-center space-x-0 md:space-x-2 bg-white p-2 rounded-lg shadow-md focus-within:ring-2 focus-within:ring-blue-500">

                {{-- Search By Lokasi --}}
                <div class="flex items-center mb-2 md:mb-0  w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="h-5 w-5 text-slate-600">
                        <path fill-rule="evenodd"
                            d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z"
                            clip-rule="evenodd" />
                    </svg>

                    <select class="bg-transparent border-none focus:ring-0 flex-grow">
                        <option>All</option>
                    </select>
                </div>

                {{-- Search By Posisi --}}
                <div class="flex items-center mb-2 md:mb-0 w-full">
                    <svg xmlns="http://www.w3.org/1000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5 text-slate-600">
                        <path fill-rule="evenodd"
                            d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                        <path
                            d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                    </svg>
                    <select class="bg-transparent border-none focus:ring-0 flex-grow">
                        <option>All</option>
                    </select>
                </div>

                {{-- Search By Keyword --}}
                <div class="flex-grow mb-2 md:mb-0 w-full">
                    <input type="text" placeholder="Contoh. Qa,Operator Produksi"
                        class="w-full bg-transparent border-none focus:ring-0">
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg w-full md:w-fit">Cari</button>
            </div>

            {{-- Filter Button --}}
            <button class="mt-2 md:mt-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="h-8 w-8 text-slate-600">
                    <path
                        d="M10 3.75a2 2 0 1 0-4 0 2 2 0 0 0 4 0ZM17.25 4.5a.75.75 0 0 0 0-1.5h-5.5a.75.75 0 0 0 0 1.5h5.5ZM5 3.75a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 .75.75ZM4.25 17a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5h1.5ZM17.25 17 a.75.75 0 0 0 0-1.5h-5.5a.75.75 0 0 0 0 1.5h5.5ZM9 10a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1 0-1.5h5.5A.75.75 0 0 1 9 10ZM17.25 10.75a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5h1.5ZM14 10a2 2 0 1 0-4 0 2 2 0 0 0 4 0ZM10 16.25a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
                </svg>
            </button>

        </div>
    </div>

    {{-- List Loker --}}
    <section class="max-w-7xl mx-auto px-4 md:px-10 mb-16">
        {{-- Header --}}
        <h3 class="text-3xl font-semibold text-slate-800 dark:text-white mb-8">Lowongan Terkait</h3>

        {{-- Card Loker --}}
        <div class="flex flex-wrap gap-6">
            {{-- Loop untuk tiap card yang ada di carousel --}}
            @for ($i = 0; $i < 5; $i++)
                <div class="w-full">
                    <a href="#"
                        class="p-4 mb-4 flex items-center hover:drop-shadow shadow-sm drop-shadow-sm bg-white border border-gray-100 rounded-xl  hover:ring-1 hover:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0 self-start">
                            <img src="{{ asset('image/hero-image.png') }}" alt="Company Logo"
                                class="max-w-12 rounded-full">
                        </div>
                        <div class="ml-4 flex-grow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold">PT WHITE</h3>
                                    <p class="text-sm text-gray-500">Jawa Barat, Indonesia</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    {{-- Share Button --}}
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold mt-3">Senior Consultant - SAP</h4>
                            <p class="text-gray-600 max-w-[60ch]">This consulting role aims to design, implement and
                                deliver
                                strategies
                                to increase the efficiency and value delivered by the enterprise IT function</p>
                            <div class="flex items-center justify-between gap-2 flex-wrap mt-4">
                                <div class="flex gap-2">
                                    {{-- Durasi Kontrak --}}
                                    <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">FULL
                                        TIME</span>

                                    {{-- Pendidikan Tag --}}
                                    <span
                                        class="bg-gray-200 text-gray-800 text-xs font-semibold px-2 py-1 rounded">SMK</span>
                                </div>

                                <div class="flex gap-2">
                                    {{-- Akhir Pendaftaran --}}
                                    <span class="bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded">
                                        Penutupan:
                                        01 Juni 2024</span>

                                    {{-- Tanggal ditambah --}}
                                    <span class="bg-gray-200 text-gray-800 text-xs font-semibold px-2 py-1 rounded">
                                        Posting:
                                        01 Mei 2024</span>
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
                Muat Lebih Banyak
            </button>
        </div>
    </section>
</x-app-layout>
