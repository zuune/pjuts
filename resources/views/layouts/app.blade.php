<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- {{ config('app.name', 'Monitoring') }} --}}
        <title>Monitoring Pemeliharaan PJUTS</title>
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Icons --}}
        <script src="https://unpkg.com/feather-icons"></script>
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- DataTables --}}
        <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
        <!-- Scripts -->

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/v/dt/dt-2.0.5/datatables.min.js"></script>
        
        <script>
            let table = new DataTable('#myTable');

            function showConfirmation(id) {
                document.getElementById('confirmationModal').classList.remove('hidden');
                // Simpan ID formulir yang akan di-submit ketika konfirmasi "Ya" ditekan
                document.getElementById('deleteButton').onclick = function () {
                    document.getElementById('deleteForm_' + id).submit();
                };
            }

            function closeConfirmation() {
                document.getElementById('confirmationModal').classList.add('hidden');
            }
        </script>

        <script>
            feather.replace();
        </script>
    </body>
</html>
