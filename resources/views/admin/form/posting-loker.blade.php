<x-app-layout>
    <section class="mb-16 px-4 md:px-10">
        <form method="post" action="{{ route('admin.posting-loker.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="max-w-7xl px-4 py-8 lg:px-10 mx-auto">
                {{-- Section Company Profile --}}
                <div class="flex flex-col gap-4 rounded-lg bg-white px-8 py-4 shadow-md shadow-slate-300 drop-shadow">
                    {{-- Header --}}
                    <h1 class="mb-3 border-b-2 pb-3 text-xl font-semibold text-slate-800 dark:text-white">{{ __('Profil Perusahaan') }}
                    </h1>

                    {{-- Nama Perusahaan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="namaPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Nama Perusahaan') }}</label>
                        <input id="namaPT" name="namaPt" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Perusahaan Sejahtera">
                    </div>

                    {{-- Industri Perusahaan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="industriPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Industri Perusahaan') }}</label>
                        <input id="industriPT" name="industriPT" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Pertambangan,Pertanian,Manufaktur">
                    </div>

                    {{-- Email Perusahaan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="emailPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Email Perusahaan') }}</label>
                        <input id="emailPT" name="emailPT" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="eg. cs.kita@sejahtera.id">
                    </div>

                    {{-- Website --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="webPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Website Perusahaan') }}</label>
                        <input id="webPT" name="webPT" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="eg. www.sejahtera.co.id">
                    </div>

                    {{-- Alamat Perusahaan --}}
                    <div class="flex flex-wrap items-baseline gap-3">
                        <label for="alamatPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Alamat Perusahaan') }}</label>
                        <textarea id="alamatPT" name="alamatPT" class="rounded-md border border-slate-200 px-4 py-2"
                         placeholder="eg. Gajah mada,Jakarta"></textarea>
                    </div>

                    {{-- Profile Perusahaan --}}
                    <div class="flex flex-wrap items-baseline gap-3">
                        <label for="profilePT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Profile Perusahaan') }}</label>
                        <textarea id="profilePT" name="profilePT" class="block flex-1 rounded-md border border-slate-200 px-4 py-2"></textarea>
                    </div>
                </div>

                {{-- Section Lowongan --}}
                <div class="mt-8 flex flex-col gap-4 rounded-lg bg-white px-8 py-4 shadow-md drop-shadow">
                    {{-- Header --}}
                    <h1 class="mb-3 border-b-2 pb-3 text-xl font-semibold text-slate-800 dark:text-white">{{ __('Lowongan Pekerjaan') }}
                    </h1>

                    {{-- Title Pekerjaan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="judulLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Judul') }}</label>
                        <input id="judulLoker" name="judulLoker" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Quality Control Specialist">
                    </div>

                    {{-- Deskripsi Pekerjaan --}}
                    <div class="flex flex-wrap items-baseline gap-3">
                        <label for="deskripsiLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Deskripsi') }}</label>
                        <textarea id="deskripsiLoker" name="deskripsiLoker" class="block flex-1 rounded-md border border-slate-200 px-4 py-2"></textarea>
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="jenisKelamin" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Jenis Kelamin') }}</label>
                        <select id="jenisKelamin" name="jenisKelamin" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2">
                            <option value="">{{ __('Laki - Laki') }}</option>
                            <option value="">{{ __('Perempuan') }}</option>
                            <option value="">{{ __('Laki - Laki / Perempuan') }}</option>
                        </select>
                    </div>

                    {{-- Pendidikan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="pendidikan" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Pendidikan') }}</label>
                        <select id="pendidikan" name="pendidikan" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2">
                            <option value="">{{ __('-') }}</option>
                            <option value="1">{{ __('SD') }}</option>
                            <option value="2">{{ __('SMP Sederajat') }}</option>
                            <option value="3">{{ __('SMA / SMK Sederajat') }}</option>
                            <option value="4">{{ __('D1') }}</option>
                            <option value="5">{{ __('D2') }}</option>
                            <option value="6">{{ __('D3') }}</option>
                            <option value="7">{{ __('S1') }}</option>
                            <option value="8">{{ __('S2') }}</option>
                            <option value="9">{{ __('S3') }}</option>
                        </select>
                    </div>

                    {{-- Jenis Kontrak --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="jenisKontrak" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Jenis Kontrak') }}</label>
                        <select id="jenisKontrak" name="jenisKontrak" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2">
                            <option selected>{{ __('-') }}</option>
                            @foreach ($contracts as $contract)
                                <option value="{{ $contract->id }}">{{ __($contract->duration) }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Skills --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="skills" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Skills') }}</label>
                        <input id="skills" name="skills" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Autocad,PHP,Golang">
                    </div>

                    {{-- Alamat Penempatan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="alamatLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Alamat Penempatan') }}</label>
                        <input id="alamatLoker" name="alamatLoker" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Marauke">
                    </div>

                    {{-- Batas Akhir Lamaran --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="batasAkhir"
                            class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Batas Akhir Lowongan') }}</label>
                        <input id="batasAkhir" name="batasAkhir" type="date"
                            class="rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Marauke">
                    </div>
                </div>

                {{-- Section Cara Daftar --}}
                <div class="mt-8 flex flex-col gap-4 rounded-lg bg-white px-8 py-4 shadow-md drop-shadow">
                    {{-- Header --}}
                    <h1 class="mb-3 border-b-2 pb-3 text-xl font-semibold text-slate-800 dark:text-white">{{ __('Cara Daftar') }}
                    </h1>

                    {{-- Walkin Interview --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="regWalkin" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Walkin Interview') }}</label>
                        <input id="regWalkin" name="regWalkin" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Perusahaan Makmur Sejahter,Indonesia">
                    </div>

                    {{-- Pos --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="regPos" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Pos') }}</label>
                        <input id="regPos" name="regPos" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. Perusahaan Makmur Sejahter,Indonesia">
                    </div>

                    {{-- Email Perusahaan --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="regEmail" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Email Perusahaan') }}</label>
                        <input id="regEmail" name="regEmail" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. perusahaan@mail.com">
                    </div>

                    {{-- Linkedin --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="regLinkedin" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Linkedin') }}</label>
                        <input id="regLinkedin" name="regLinkedin" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. https://www.linkedin.com/in/nama-perusahaan">
                    </div>

                    {{-- Instagram --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="regInstagram" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Instagram') }}</label>
                        <input id="regInstagram" name="regInstagram" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. https://www.instagram.com/nama-perusahaan">
                    </div>

                    {{-- Jobstreet --}}
                    <div class="flex flex-wrap items-center gap-3">
                        <label for="regJobstreet" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Jobstreet') }}</label>
                        <input id="regJobstreet" name="regJobstreet" type="text"
                            class="flex-1 rounded-md border border-slate-200 px-4 py-2"
                            placeholder="Eg. https://www.jobstreet.com/id/company/nama-perusahaan">
                    </div>
                </div>
                {{-- Submit Button --}}
                <div class="mt-4 w-full">
                    <button type="submit"
                        class="rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 float-end">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </section>
</x-app-layout>


<script>
	window.addEventListener('DOMContentLoaded', () => {
		tinymce.init({
			selector: '#profilePT',
			plugins: 'lists',

			/* TinyMCE configuration options */
			toolbar: 'undo redo styles bold italic alignLeft alignCenter alignRight alignJustify align numlist bullist',
			width: 800,
			min_height: 400,
			skin: false,
			content_css: false
		});
		tinymce.init({
			selector: '#deskripsiLoker',
			plugins: 'lists',

			/* TinyMCE configuration options */
			toolbar: 'undo redo styles bold italic alignLeft alignCenter alignRight alignJustify align numlist bullist',
			width: 800,
			min_height: 400,
			skin: false,
			content_css: false
		});
	});
</script>
