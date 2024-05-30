<x-app-layout>
	<form method="post" action="{{ route('admin.posting-loker.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="max-w-6xl px-4 py-8 lg:px-10">
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
					<select id="skills" name="Skills" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2">
						<option value="">{{ __('Laki - Laki') }}</option>
						<option value="">{{ __('Perempuan') }}</option>
						<option value="">{{ __('Laki - Laki / Perempuan') }}</option>
					</select>
				</div>

				{{-- Pendidikan --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="pendidikan" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Pendidikan') }}</label>
					<select id="skills" name="Skills" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2">
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
					<input id="skills" name="Skills" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
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


			<div class="mt-8 flex flex-col gap-4 rounded-lg bg-white px-8 py-4 shadow-md drop-shadow">
				{{-- Header --}}
				<h1 class="mb-3 border-b-2 pb-3 text-xl font-semibold text-slate-800 dark:text-white">{{ __('Cara Daftar') }}
				</h1>

				{{-- Title Pekerjaan --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="judulLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Judul') }}</label>
					<input id="judulLoker" name="judulLoker" type="text"
						class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="Eg. Quality Control Specialist">
				</div>

				{{-- Deskripsi Pekerjaan --}}
				<div class="flex flex-wrap items-baseline gap-3">
					<label for="deskripsiLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Deskripsi') }}</label>
					<textarea id="deskripsiLoker" name="deskripsiLoker"
					 class="block flex-1 rounded-md border border-slate-200 px-4 py-2"></textarea>
				</div>

				{{-- Pendidikan --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="pendidikan" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Pendidikan') }}</label>
					<select id="skills" name="Skills" type="text"
						class="flex-1 rounded-md border border-slate-200 px-4 py-2">
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
					<input id="skills" name="Skills" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="Eg. Autocad,PHP,Golang">
				</div>

				{{--  --}}
				{{-- <div class="flex flex-wrap items-center gap-3">
                        <label for="isRemote" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Apakah Remote ?') }}</label>
                        <input id="isRemote" name="isRemote" type="checkbox" class="rounded-md border border-slate-200 shadow drop-shadow"
                            placeholder="Eg. Marauke">
                    </div> --}}

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
		</div>

		{{-- Section Cara Daftar --}}

		{{-- Submit Button --}}
		<div class="mt-4">
			<button type="submit"
				class="rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
				Submit
			</button>
		</div>
		</div>
	</form>
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
