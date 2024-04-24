<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="lg:text-2xl md:text-xl font-semibold">Aplikasi Monitoring Pemeliharaan PJUTS Wilayah Indonesia 2 Tahun Anggaran 2023</h1>

                    <div class="overflow-auto mt-5">
                        <table class="border-collapse border border-cyan-700 text-left w-full whitespace-nowrap" id="myTable">
                            <thead class="bg-cyan-700 text-white">
                                <tr>
                                    <th class="px-6 py-3">No</th>
                                    <th class="px-6 py-3">Name</th>
                                    {{-- <th class="px-6 py-3">Email Address</th> --}}
                                    <th class="px-6 py-3">Foto Selfie</th>
                                    <th class="px-6 py-3">Foto Tiang</th>
                                    <th class="px-6 py-3">Titik</th>
                                    <th class="px-6 py-3">Desa</th>
                                    <th class="px-6 py-3">Kecamatan</th>
                                    <th class="px-6 py-3">Kota</th>
                                    <th class="px-6 py-3">Provinsi</th>
                                    <th class="px-6 py-3">Nomor HP</th>
                                    {{-- <th class="px-6 py-3">NIK</th> --}}
                                    <th class="px-6 py-3">Subject</th>
                                    <th class="px-6 py-3">Feedback Type</th>
                                    <th class="px-6 py-3">Comments</th>
                                    <th class="px-6 py-3">More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $f)
                                    <tr>
                                        <td class="border px-6 py-4">{{ $loop->iteration }}</td>
                                        <td class="border px-6 py-4">{{ $f->name }}</td>
                                        <td class="border px-6 py-4">
                                            <a href="/public/{{ $f->foto }}" download="foto-selfie_{{ $f->name }}.png" class="underline text-amber-500 hover:text-amber-600">
                                                <img src="/public/{{ $f->foto }}" class="w-full">
                                            </a>
                                        </td>
                                        <td class="border px-6 py-4">
                                            <a href="/public/{{ $f->foto_tiang }}" download="foto-tiang_{{ $f->name }}.png" class="underline text-amber-500 hover:text-amber-600">
                                                <img src="/public/{{ $f->foto }}" class="w-full">
                                            </a>
                                        </td>
                                        <td class="border px-6 py-4">{{ $f->titik }}</td>
                                        <td class="border px-6 py-4">{{ $f->desa }}</td>
                                        <td class="border px-6 py-4">{{ $f->kecamatan }}</td>
                                        <td class="border px-6 py-4">{{ $f->kota }}</td>
                                        <td class="border px-6 py-4">{{ $f->provinsi }}</td>
                                        <td class="border px-6 py-4">{{ $f->nomor_hp }}</td>
                                        <td class="border px-6 py-4">{{ $f->subject }}</td>
                                        <td class="border px-6 py-4">{{ $f->feedback_type }}</td>
                                        <td class="border px-6 py-4">{{ $f->comments }}</td>
                                        <td class="border px-6 py-4 text-center text-red-600 cursor-pointer">
                                            <form id="deleteForm_{{ $f->id }}" action="{{ route('feedback.destroy', $f->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="showConfirmation('{{ $f->id }}')" class="delete-feedback-btn">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </form>
                                        </td>   
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Konfirmasi -->
<div id="confirmationModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-middle bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: exclamation -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 3h13.856c1.54 0 2.783-1.243 2.783-2.783V9.783C21.701 8.243 20.458 7 18.918 7H5.082C3.542 7 2.299 8.243 2.299 9.783v10.434c0 1.54 1.243 2.783 2.783 2.783z"/>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Hapus Feedback
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                Apakah Anda yakin ingin menghapus feedback ini?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button onclick="deleteFeedback()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" id="deleteButton">
                    Ya, Hapus
                </button>
                <button onclick="closeConfirmation()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
