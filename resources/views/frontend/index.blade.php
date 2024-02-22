@extends('frontend.layout.app')

@section('title', 'Pengaduan Sekolah | SMK Telkom Jakarta')

@section('content')
    <!-- hero section -->
    <section class="py-20 bg-gray-50">
        <div class="container mt-10 items-center max-w-10xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2
                            class="mb-4 text-2xl  font-bold leading-tight tracking-tight   lg:text-left md:text-center font-heading">
                            Selamat Datang di Sistem Layanan Pengaduan & Aspirasi SMK Telkom Jakarta</h2>
                        <p class="mb-4 font-medium tracking-tight text-gray-400 lg:text-left md:text-center  xl:mb-6">
                            Laporkan
                            kepada kami jika ada
                            Pengaduan atau pun Aspirasi yang dapat menjadi langkah awal untuk kita menjadi lebih baik lagi.
                        </p>
                        <div class="relative flex flex-col sm:flex-row  sm:space-x-4">
                            <a href="#"
                                class="flex items-center px-6 py-3  text-md mt-2 text-gray-500 bg-gray-200 rounded-md hover:bg-gray-200 hover:text-gray-600">
                                Pelajari Selengkapnya
                            </a>
                            <a href="{{ url('site/buat-pengaduan') }}"
                                class="flex items-center w-full  px-6 py-3 mt-2 mb-3 text-md text-white bg-red-600 rounded-md sm:mb-0 hover:bg-red-700 sm:w-auto">
                                Buat Pengaduan
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full" src="{{ asset('assets/feature-graphic.gif') }}"
                        alt="feature image"></div>
            </div>
        </div>
    </section>
    <!-- end hero section -->

    <!-- about -->
    <section class="relative py-20 bg-white min-w-screen animation-fade animation-delay" id="about">
        <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
            <p
                class="text-xs font-bold md:mt-10 text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
                Selayang Pandang</p>
            <h4
                class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
                Sekilas Mengenai Aplikasi Pengaduan SMK Telkom Jakarta</h4>

            <div
                class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
                <h3 class="text-lg font-bold text-red-500 sm:text-xl md:text-2xl">Untuk Apa sistem ini di buat?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">ini dibuat untuk menampung pengaduan &
                    aspirasi dari semua warga SMK Telkom Jakarta. Diharapkan dengan sistem ini semua warga sekolah dapat
                    lebih mudah untuk melaporkan pengaduan & aspirasi untuk sekolah.
                </p>
            </div>
        </div>
    </section>
    <!-- end about -->
    <!-- Flow content -->
    <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay" id="flow">
        <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
            <p
                class="text-xs font-bold  md:mt-20 text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
                Alur Pengaduan</p>
            <h4
                class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
                Bagaimana Alur Pengaduan </h4>

            <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

                <div
                    class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                            <circle cx="6" cy="14" r="3" />
                            <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">1. Masuk/Login</h4>
                    <p class="text-base text-center text-gray-500">Masuk ke sistem ini dengan email dan password yang sudah
                        terdaftar. </p>
                </div>

                <div
                    class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 8a3 3 0 0 1 0 6" />
                            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                            <path
                                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">2. Buat Pengaduan</h4>
                    <p class="text-base text-center text-gray-500">Klik tombol "Buat Pengaduan" yang tersedia di halaman
                        ini.</p>
                </div>

                <div
                    class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 8a3 3 0 0 1 0 6" />
                            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                            <path
                                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">3. Lengkapi Form </h4>
                    <p class="text-base text-center text-gray-500">Isi semua form sesuai tempat yang sudah disediakan dengan
                        data yang benar.</p>
                </div>

                <div
                    class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 8a3 3 0 0 1 0 6" />
                            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                            <path
                                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                        </svg>
                    </div>
                    <h4 class="text-xl text-center font-medium text-gray-700">4. Tambahkan Berkas Pendukung (Jika Ada)</h4>
                    <p class="text-base text-center text-gray-500">Tambahkan berkas pendukung jika perlu, agar laporan bisa
                        lebih jelas dan mudah dipahami.</p>
                </div>

                <div
                    class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 8a3 3 0 0 1 0 6" />
                            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                            <path
                                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Kirim Pengaduan</h4>
                    <p class="text-base text-center text-gray-500">Kirim pengaduan agar nantinya bisa dicek oleh petugas
                        dari sekolah.</p>
                </div>

                <div
                    class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 8a3 3 0 0 1 0 6" />
                            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                            <path
                                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Tunggu Konfirmasi</h4>
                    <p class="text-base text-center text-gray-500">Jika laporan sudah diterima dan ditanggapi,
                        pemberitahuan akan dikirimkan melalui email yang digunakan.</p>
                </div>

            </div>
        </div>
    </section>



    <section class="p-20 text-gray-400 bg-white body-font">
        <p
            class="text-xs font-bold  md:mt-20 text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
            Alur Pengaduan</p>
        <h4
            class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
            Bagaimana Alur Pengaduan </h4>
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap w-full">
                <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">

                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-500 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-red-600 inline-flex items-center justify-center text-white relative z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                                <circle cx="6" cy="14" r="3" />
                                <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-black mb-1 tracking-wider">1. Masuk/Login</h2>
                            <p class="leading-relaxed">Masuk ke sistem ini dengan email dan password yang sudah
                                terdaftar.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-500 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-black relative z-10">
                            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-black mb-1 tracking-wider">STEP 2</h2>
                            <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken
                                slow-carb health goth, vape typewriter.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-500 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-black relative z-10">
                            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="12" cy="5" r="3"></circle>
                                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-black mb-1 tracking-wider">STEP 3</h2>
                            <p class="leading-relaxed">Coloring book nar whal glossier master cleanse umami. Salvia +1
                                master cleanse blog taiyaki.</p>
                        </div>
                    </div>
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-500 pointer-events-none"></div>
                        </div>
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-black relative z-10">
                            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-black mb-1 tracking-wider">STEP 4</h2>
                            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk
                                bespoke try-hard cliche palo santo offal.</p>
                        </div>
                    </div>
                    <div class="flex relative">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-black relative z-10">
                            <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-black mb-1 tracking-wider">FINISH</h2>
                            <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever
                                cold-pressed retro.</p>
                        </div>
                    </div>
                </div>
                <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
                    src="https://dummyimage.com/1200x500" alt="step">
            </div>
        </div>
    </section>

    <style>
        @keyframes wave {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>

    <section class="relative py-16 bg-gray-100 min-w-screen animation-fade animation-delay" id="faq">
        <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
            <p
                class="text-xs md:mt-10 font-bold text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
                FAQ
            </p>
            <h4
                class="mt-1 text-md font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-md lg:text-mdl sm:text-center sm:mx-0">
                Pertanyaan yang sering muncul
            </h4>

            <div class="grid grid-cols-2 gap-6 mt-5">
                @foreach ($faqs as $index => $faq)
                    <div x-data="{ openTab: null, isTransitioning: false }"
                        class="w-full bg-white border border-gray-200 rounded-lg sm:shadow sm:px-6 md:px-8 sm:py-5">
                        <h3 x-on:click="isTransitioning = true; setTimeout(() => { openTab = (openTab === {{ $index }}) ? null : {{ $index }}; isTransitioning = false; }, 300)"
                            class="flex items-center justify-between text-base font-bold text-red-500 cursor-pointer transition-all duration-300 hover:opacity-70 focus:opacity-70">
                            <span>{{ $faq['question'] }}</span>
                            <span
                                :class="{
                                    'transform rotate-90': openTab ===
                                        {{ $index }},
                                    'ml-2 transition-transform duration-300': true
                                }">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </h3>
                        <p x-show="openTab === {{ $index }}"
                            x-transition:enter="transition ease-in-out duration-50 transform opacity-0"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300 transform opacity-0"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            :class="{ 'opacity-0 transform scale-95': isTransitioning }"
                            class="mt-2 text-sm text-gray-600 sm:text-base md:text-normal">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end FAQ -->
@endsection
