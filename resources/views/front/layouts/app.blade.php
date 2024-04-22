<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>

</head>
<body class="bg-slate-50">

  @include('front.layouts.navbar')
  
  <div class="sm:container lg:px-40 lg:py-20 md:px-30 md:py-20 sm:px-20 sm:py-20 max-[600px]:px-10 max-[600px]:py-10">
      @yield('content')
  </div>



  @include('front.layouts.footer')

  <script>
            function closeNotification(element) {
                element.parentNode.style.display = 'none';
            }

            // Memilih input nomor HP
            const nomorHpInput = document.getElementById('nomor_hp');

            // Menambahkan event listener untuk membatasi input hanya menerima angka
            nomorHpInput.addEventListener('input', function() {
              // Menghapus karakter selain angka menggunakan regular expression
              this.value = this.value.replace(/\D/g, '');
            });

            const nik = document.getElementById('nik');

            nik.addEventListener('input', function() {
              this.value = this.value.replace(/\D/g, '');
            });

  </script>
</body>
</html>