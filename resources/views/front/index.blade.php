@extends('front.layouts.app')
@section('content')


<form method="POST" action="{{ route('feedback.store') }}" enctype="multipart/form-data">
  @csrf
    <div class="flex space-y-12 justify-between align-top flex-wrap">



      <div class="border-gray-900/10 pb-12">
        <h2 class="text-2xl mb-2 font-semibold leading-9" style="color: #e28d26;">PT. Gerbang Multindo Nusantara</h2>
        <p class="mt-1 text-md leading-6 text-gray-900 sm:max-w-md">Terima Kasih telah menghubungi Layanan Contact Center (CS) PJUTS Indonesia 2 TA 2023. Silahkan beritahu kami kendala yang terjadi.</p>
        <p class="mt-2 text-sm leading-6 text-gray-500">* Indicates required field</p>
        @if(session('success'))
            <div style="background-color: #e28d26;" class="text-white py-4 px-6 rounded-md mb-4 flex mt-4 justify-between items-center">
                <span>{{ session('success') }}</span>
                <button class="text-white hover:text-gray-200" onclick="closeNotification(this)">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 8.586l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div style="background-color: #e28d26;" class="bg-red-500 text-white py-4 px-6 rounded-md mb-4 flex mt-4 justify-between items-center">
                <span>{{ session('error') }}</span>
                <button class="text-white hover:text-gray-200" onclick="closeNotification(this)">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 8.586l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif

        <div class="form-group">
          <h2 class="title -mb-5 mt-4 text-lg font-semibold" style="color: #e28d26;">Informasi Tiang</h2>

          <div class="mt-5 grid grid-cols-1  gap-y-8 ">
            <div class="sm:col-span-full md:col-span-4">
              <div class="mt-4">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                  <input type="text" name="titik" id="titik" autocomplete="titik" class="block flex-1 bord er-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Titik No Berapa*" required>
                </div>
              </div>

              <div class="mt-4">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                    <input type="text" name="desa" id="desa" autocomplete="desa" class="block flex-1 bord er-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Desa/Kelurahan*" required>
                  </div>
              </div>

              <div class="mt-4">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                    <input type="text" name="kecamatan" id="kecamatan" autocomplete="kecamatan" class="block flex-1 bord er-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Kecamatan*" required>
                  </div>
              </div>

              <div class="mt-4">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                    <input type="text" name="kota" id="kota" autocomplete="kota" class="block flex-1 bord er-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Kabupaten/Kota*" required>
                  </div>
              </div>

              <div class="mt-4">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                  <input type="text" name="provinsi" id="provinsi" autocomplete="provinsi" class="block flex-1 bord er-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Provinsi*" required>
                </div>
              </div>
            </div>

            

              <div class="-mt-2">
                <h2 class="title text-lg font-semibold mb-4" style="color: #e28d26;">Foto Tiang</h2>

                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-slate-600 sm:max-w-md">
                  {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Foto Selfie*</span> --}}
       
                  <input type="file" name="foto_tiang" id="foto_tiang" autocomplete="foto_tiang" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6 w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  file:bg-slate-50 file:text-slate-700
                  hover:file:bg-slate-100" accept="image/*" required> 
                </div>
              </div>

          </div>
        </div>
  
        <div class="mt-5 grid grid-cols-1  gap-y-8 ">

          <h2 class="title -mb-5 mt-4 text-lg font-semibold" style="color: #e28d26;">Pelapor</h2>

          <div class="sm:col-span-full md:col-span-4">
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 bord er-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Nama Pelapor*" required>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <div class="-mt-4">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                <input type="email" name="email" id="email" autocomplete="email" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Alamat Email*" required>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <div class="-mt-4">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                <input type="text" name="nomor_hp" pattern="[0-9]+" id="nomor_hp" autocomplete="nomor_hp" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Nomor HP*" required>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <div class="-mt-4">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                <input type="text" name="nik" id="nik" autocomplete="nik" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="NIK / Identitas KTP*" required>
              </div>
            </div>
          </div>

          <h2 class="title text-lg font-semibold" style="color: #e28d26;">Foto Selfie</h2>


          <div class="sm:col-span-4">
            <div class="-mt-4">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-slate-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Foto Selfie*</span> --}}
     
                <input type="file" name="foto" id="foto" autocomplete="foto" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6 w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-slate-50 file:text-slate-700
                hover:file:bg-slate-100" placeholder="Foto Selfie*" accept="image/*" required> 
              </div>
            </div>
          </div>

          <div class="sm:col-span-4 mt-5">
            <div class="-mt-4">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> --}}
                <input type="text" name="subject" id="subject" autocomplete="subject" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Subjek*" required>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <div class="-mt-4">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                <select name="feedback_type" id="feedback_type" class="block flex-1 border-0 bg-transparent py-3 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" required>
                        <option selected hidden disabled>Tipe Feedback*</option>
                        <option disabled >Pilih Tipe Feedback</option>
                        <option value="Performance">Performance</option>
                        <option value="Report">Report</option>
                        <option value="Request">Request</option>
                        <option value="Problems">Problems</option>
                </select>
                
              </div>
            </div>
          </div>
  
          <div class="sm:col-span-4 -mb-5">
            <div class="-mt-4">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <textarea id="comments" name="comments" rows="3" class="block flex-1 border-0 bg-transparent py-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-md sm:leading-6" placeholder="Komentar*" required></textarea>
                </div>
            </div>
          </div>

          <div class="sm:col-span-4"> <!-- Mengatur letak dan lebar tombol submit -->
            <hr class="border-t border-gray-200 mb-4 sm:max-w-md"> <!-- Garis pemisah -->
            
            <div class="sm:max-w-md mb-4">
              <p class="mt-1 text-sm leading-6 text-gray-600">Silahkan isi data diatas untuk kami tindak lanjuti. Terima kasih.</p>
            </div>

            <div class="flex rounded-md sm:max-w-md ">

                <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-cyan-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-cyan-700 transition ease-out delay-75 focus:outline-none focus:border-cyan-500 focus:ring-cyan-500 sm:text-sm sm:leading-5">Submit Feedback</button>
            </div>
          </div>



        </div>
      </div>

    
      {{-- <div class="card border-gray-900/10 md:w-96 sm:max-w-md lg:absolute max-[1220px]:hidden lg:top-32 lg:bottom-0 lg:right-40">

        <img src="{{ asset('/images/panels.PNG') }}" class="h-full w-full rounded-2xl" alt="">
        
      </div> --}}

  

    </div>

    
  </form>



  
@endsection
        {{-- <div class="mx-auto sm:max-w-md rounded-3xl ring-1 ring-gray-200 lg:mx-0 lg:flex lg:max-w-none">
          <div class="p-8 sm:p-10 lg:flex-auto">
            <h3 class="text-2xl font-semibold tracking-tight" style="color: #e28d26;">Informasi Kontak</h3>
            <p class="mt-6 text-base leading-7 text-gray-600">Apakah anda mengalami kendala atau memerlukan bantuan tambahan? Kami tersedia untuk menjawab pertanyaan.</p>
            <div class="mt-10 flex items-center gap-x-4">
              <h4 class="flex-none text-sm  leading-6" style="color: #e28d26;">Kontak kami</h4>
              <div class="h-px flex-auto bg-gray-100"></div>
            </div>
            <ul role="list" class="mt-8 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
              <a href="#" class="block w-full rounded-md px-3 bg-cyan-500 hover:bg-cyan-600 py-2 text-center text-sm font-semibold  text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Disini</a>
            </ul>
          </div> 
        </div> --}}