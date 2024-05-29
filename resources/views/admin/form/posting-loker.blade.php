<x-app-layout>
	<form method="post" action="{{ route('admin.posting-loker.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="max-w-6xl px-4 py-8 lg:px-10">
			{{-- Section Company Profile --}}
			<div class="flex flex-col gap-4 rounded-lg bg-white px-8 py-4 shadow-md shadow-slate-300 drop-shadow">
				{{-- Header --}}
				<h1 class="mb-3 border-b-2 pb-3 text-xl font-semibold text-slate-800 dark:text-white">Company Profile</h1>

				{{-- Nama PT --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="namaPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Nama PT') }}</label>
					<input id="namaPT" name="namaPt" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="Eg. PT Sejahtera">
				</div>

				{{-- Industri PT --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="industriPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Industri PT') }}</label>
					<input id="industriPT" name="industriPT" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="Eg. Pertambangan,Pertanian,Manufaktur">
				</div>

				{{-- Email PT --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="emailPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Email PT') }}</label>
					<input id="emailPT" name="emailPT" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="eg. cs.kita@sejahtera.id">
				</div>

				{{-- Website --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="webPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Website PT') }}</label>
					<input id="webPT" name="webPT" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="eg. www.sejahtera.co.id">
				</div>

				{{-- Alamat PT --}}
				<div class="flex flex-wrap items-baseline gap-3">
					<label for="alamatPT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Alamat PT') }}</label>
					<textarea id="alamatPT" name="alamatPT" class="rounded-md border border-slate-200 px-4 py-2"
					 placeholder="eg. Gajah mada,Jakarta"></textarea>
				</div>

				{{-- Profile PT --}}
				<div class="flex flex-wrap items-baseline gap-3">
					<label for="profilePT" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Profile PT') }}</label>
					<textarea id="profilePT" name="profilePT" class="block flex-1 rounded-md border border-slate-200 px-4 py-2"></textarea>
				</div>
			</div>


			{{-- Section Lowongan --}}
			<div class="flex flex-col gap-4 rounded-lg bg-white px-8 py-4 shadow-md drop-shadow mt-8">
				{{-- Header --}}
				<h1 class="mb-3 border-b-2 pb-3 text-xl font-semibold text-slate-800 dark:text-white">{{ __('Lowongan Pekerjaan') }}</h1>

				{{-- Title Pekerjaan --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="judulLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Judul') }}</label>
					<input id="judulLoker" name="judulLoker" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="Eg. Quality Control Specialist">
				</div>

				{{-- Alamat Test Atau Loker --}}
				<div class="flex flex-wrap items-center gap-3">
					<label for="alamatLoker" class="ml-1 w-[15ch] font-medium text-slate-600">{{ __('Alamat') }}</label>
					<input id="alamatLoker" name="alamatLoker" type="text" class="flex-1 rounded-md border border-slate-200 px-4 py-2"
						placeholder="Eg. Quality Control Specialist">
				</div>
            </div>

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
	});
</script>
