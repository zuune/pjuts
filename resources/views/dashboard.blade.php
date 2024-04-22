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
                    <h1 class="text-2xl">Customer Feedback</h1>

                    <div class="overflow-x-auto mt-5">
                        <table class="border-collapse border border-cyan-700 text-left w-full whitespace-nowrap">
                            <thead class="bg-cyan-700 text-white">
                                <tr>
                                    <th class="px-6 py-3">No</th>
                                    <th class="px-6 py-3">Name</th>
                                    <th class="px-6 py-3">Email Address</th>
                                    <th class="px-6 py-3">Foto Selfie</th>
                                    <th class="px-6 py-3">Foto Tiang</th>
                                    <th class="px-6 py-3">Titik</th>
                                    <th class="px-6 py-3">Desa</th>
                                    <th class="px-6 py-3">Kecamatan</th>
                                    <th class="px-6 py-3">Kota</th>
                                    <th class="px-6 py-3">Provinsi</th>
                                    <th class="px-6 py-3">Nomor HP</th>
                                    <th class="px-6 py-3">NIK</th>
                                    <th class="px-6 py-3">Subject</th>
                                    <th class="px-6 py-3">Feedback Type</th>
                                    <th class="px-6 py-3">Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedback as $f)
                                    <tr>
                                        <td class="border px-6 py-4">{{ $loop->iteration }}</td>
                                        <td class="border px-6 py-4">{{ $f->name }}</td>
                                        <td class="border px-6 py-4">{{ $f->email }}</td>
                                        <td class="border px-6 py-4">
                                            <a href="/public/{{ $f->foto }}" download="foto-selfie_{{ $f->name }}.png" class="underline text-amber-500 hover:text-amber-600">
                                                download
                                            </a>
                                        </td>
                                        <td class="border px-6 py-4">
                                            <a href="/public/{{ $f->foto_tiang }}" download="foto-tiang_{{ $f->name }}.png" class="underline text-amber-500 hover:text-amber-600">
                                                download
                                            </a>
                                        </td>
                                        <td class="border px-6 py-4">{{ $f->titik }}</td>
                                        <td class="border px-6 py-4">{{ $f->desa }}</td>
                                        <td class="border px-6 py-4">{{ $f->kecamatan }}</td>
                                        <td class="border px-6 py-4">{{ $f->kota }}</td>
                                        <td class="border px-6 py-4">{{ $f->provinsi }}</td>
                                        <td class="border px-6 py-4">{{ $f->nomor_hp }}</td>
                                        <td class="border px-6 py-4">{{ $f->nik }}</td>
                                        <td class="border px-6 py-4">{{ $f->subject }}</td>
                                        <td class="border px-6 py-4">{{ $f->feedback_type }}</td>
                                        <td class="border px-6 py-4">{{ $f->comments }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
