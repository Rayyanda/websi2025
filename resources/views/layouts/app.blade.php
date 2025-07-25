<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Program Studi Sistem Informasi</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <!-- Tailwind CSS CDN -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
    @yield('page-style')
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-indigo-600 text-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex flex-row items-start justify-start">
                <img src="{{ asset('images/logo.png') }}" width="60" alt="">
                <div class="flex ml-1 flex-col justify-start items-start">
                    <h1 class="text-2xl font-bold mb-0 tracking-wide">Sistem Informasi</h1>
                    <h4 class="text-xl font-normal tracking-wide">Universitas Darma Persada</h4>
                </div>
            </div>
            <!-- Desktop nav -->
            <nav class="hidden md:flex md:flex-wrap space-x-4 space-y-2 items-center justify-end-safe relative">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-indigo-300 transition">

                    Beranda
                </a>
                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="tentangKamiDropdown">
                        Tentang Kami
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="tentangKamiDropdown">
                        <a href="{{ route('pages', 'sejarah-program-studi') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Sejarah Prodi</a>
                        <a href="{{ route('pages', 'visi-misi-tujuan-strategi') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Visi, Misi, Tujuan,
                            dan Strategi</a>
                        <a href="{{ route('pages', 'keunggulan') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Keunggulan</a>
                        <a href="{{ route('pages', 'akreditasi') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Akreditasi</a>

                        <div class="relative group/calendar">
                            <a href="#"
                                class="flex justify-between items-center px-4 py-2 hover:bg-indigo-100 transition w-full">
                                Kegiatan Mahasiswa
                                <svg class="ml-2 w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path d="M7.168 14.445L11.724 10 7.168 5.555l1.11-1.11L14.945 10l-6.667 5.555z" />
                                </svg>
                            </a>

                            <!-- Sub-menu -->
                            <div
                                class="absolute top-0 left-full ml-1 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover/calendar:opacity-100 group-hover/calendar:visible transition-opacity duration-200 z-30">
                                <a href="{{ route('pages', 'kunjungan-industri') }}" wire:navigate
                                    class="block px-4 py-2 hover:bg-indigo-100 transition">Kunjungan Industri</a>
                                <a href="{{ route('pages', 'seminar') }}" wire:navigate
                                    class="block px-4 py-2 hover:bg-indigo-100 transition">Seminar</a>
                            </div>
                        </div>
                        {{-- <a href="{{ route('pages', 'kegiatan-mahasiswa') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Kegiatan
                            Mahasiswa</a> --}}

                        <a href="{{ route('pages', 'beasiswa') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Beasiswa</a>
                        <a href="{{ route('pages', 'belajar-di-jepang') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Belajar di Jepang</a>
                        <a href="{{ route('pages', 'prospek-karir') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Prospek Karir</a>
                    </div>
                </div>
                {{-- dropdown end --}}

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="mahasiwaDropdownBtn">
                        Mahasiswa
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>

                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="mahasiwaDropdownBtn">

                        <!-- Kalender Akademik with sub-dropdown -->
                        <div class="relative group/calendar">
                            <a href="#"
                                class="flex justify-between items-center px-4 py-2 hover:bg-indigo-100 transition w-full">
                                Kalender Akademik
                                <svg class="ml-2 w-3 h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path d="M7.168 14.445L11.724 10 7.168 5.555l1.11-1.11L14.945 10l-6.667 5.555z" />
                                </svg>
                            </a>

                            <!-- Sub-menu -->
                            <div
                                class="absolute top-0 left-full ml-1 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover/calendar:opacity-100 group-hover/calendar:visible transition-opacity duration-200 z-30">
                                @foreach ($kalender as $item)
                                <a href="{{ route('pages', $item->slug) }}" wire:navigate
                                    class="block px-4 py-2 hover:bg-indigo-100 transition">{{ Str::title(str_replace('-', ' ', $item->slug)) }}</a>
                                @endforeach
                                {{-- <a href="{{ route('pages', 'kalender-akademik-2023-2024') }}" wire:navigate
                                    class="block px-4 py-2 hover:bg-indigo-100 transition">TA 2023/2024</a>
                                <a href="{{ route('pages', 'kalender-akademik-2024-2025') }}" wire:navigate
                                    class="block px-4 py-2 hover:bg-indigo-100 transition">TA 2024/2025</a> --}}
                            </div>
                        </div>

                        <!-- Other menu items -->
                        <a href="{{ route('pages', 'jadwal-kuliah') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Jadwal Kuliah</a>
                        <a href="{{ route('pages', 'hmsi') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Himpunan
                            Mahasiswa</a>
                        <a href="{{ route('pages', 'mahasiswa-berprestasi') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Mahasiswa
                            Berprestasi</a>
                        <a href="{{ route('pages', 'magang') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Magang</a>
                    </div>
                </div>


                {{-- dropdown end --}}

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="programDropdownBtn">
                        Dosen & Staff
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="programDropdownBtn">
                        <a href="{{ route('pages', 'daftar-dosen') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Daftar Dosen</a>
                        <a href="{{ route('pages','daftar-tenaga-kependidikan') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Daftar Tenaga Kependidikan</a>
                        <a href="{{ route('pages','daftar-laboran') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Daftar Laboran</a>
                    </div>
                </div>
                {{-- dropdown end --}}

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="alumniDropdownBtn">
                        Alumni
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="alumniDropdownBtn">
                        <a href="{{ route('pages', 'ikatan-alumni-sistem-informasi') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">ILUSI (Ikatan
                            Alumni Sistem Informasi)</a>
                        <a href="{{ route('pages','lowongan-kerja') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Lowongan Kerja</a>
                        <a href="{{ route('pages','alumni-berprestasi') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Alumni Berprestasi</a>
                        <a href="{{ route('pages','tracer-studi-alumni') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Tracer Studi Alumni SI</a>
                        <a href="{{ route('pages','kegiatan-alumni') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Kegiatan Alumni</a>
                    </div>
                </div>
                {{-- dropdown end --}}

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="akademikDropdownBtn">
                        Akademik
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="akademikDropdownBtn">
                        <a href="{{ route('pages', 'distribusi-mata-kuliah-kkni-2017') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Distribusi Mata
                            Kuliah Kurikulum KKNI 2017</a>
                        <a href="{{ route('pages','distribusi-mata-kuliah-kurikulum-obe-mbkm-2022') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Distribusi Mata Kuliah Kurikulum OBE MBKM 2022</a>
                        <a href="{{ route('pages','pengumuman') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Pengumuman</a>
                        <a href="{{ route('pages','peraturan-dan-informasi') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Peraturan & Informasi</a>
                        <a href="{{ route('pages','skripsi') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Skripsi</a>
                        <a href="{{ route('pages','kerja-praktik') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Kerja Praktik</a>
                    </div>
                </div>
                {{-- dropdown end --}}

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="fasilitasDropdownBtn">
                        Fasilitas
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="fasilitasDropdownBtn">
                        <a href="{{ route('pages', 'fasilitas-akademik') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" role="menuitem">Fasilitas
                            Akademik</a>
                        <a href="{{ route('pages','fasilitas-non-akademik') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Fasilitas Non-Akademik</a>
                    </div>
                </div>
                {{-- dropdown end --}}

                <a href="{{ route('pages','hmsi') }}" wire:navigate class="hover:text-indigo-300 transition">HMSI</a>

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center hover:text-indigo-300 transition focus:outline-none"
                        aria-haspopup="true" aria-expanded="false" id="risetDropdownBtn">
                        Riset & Kolaborasi
                        <svg class="ml-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white text-indigo-900 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 z-20"
                        role="menu" aria-labelledby="risetDropdownBtn">
                        <a href="{{ route('pages', 'penelitian-dan-pengabdian') }}" wire:navigate
                            class="block px-4 py-2 hover:bg-indigo-100 transition" wire:navigate role="menuitem">Penelitian &
                            Pengabdian</a>
                        <a href="{{ route('pages','publikasi-ilmiah') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Publikasi Ilmiah</a>
                        <a href="{{ route('pages','kerjasama') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Kerjasama</a>
                        <a href="{{ route('pages','penghargaan') }}" wire:navigate class="block px-4 py-2 hover:bg-indigo-100 transition"
                            role="menuitem">Penghargaan</a>
                    </div>
                </div>
                {{-- dropdown end --}}



                <a href="{{ route('pages','lowongan-kerja') }}" wire:navigate class="hover:text-indigo-300 transition">Lowongan Kerja</a>
                <a href="/admin" wire:navigate class="hover:text-indigo-300 transition">Admin</a>
            </nav>


            <!-- Mobile menu button -->
            <button id="menu-btn" class="block md:hidden focus:outline-none" aria-expanded="false"
                aria-controls="menu" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>


        <!-- Mobile menu -->
        <nav id="menu" class="hidden md:hidden bg-indigo-700">
            <a href="{{ route('home') }}"
                class="block px-6 py-3 text-white hover:bg-indigo-500 transition">Beranda</a>
            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <button data-target="tentangDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Tentang Kami</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>
                </button>
                <div id="tentangDropdownMobile" class="hidden bg-indigo-600">
                    <a href="{{ route('pages', 'sejarah-program-studi') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Sejarah Prodi</a>
                    <a href="{{ route('pages', 'visi-misi-tujuan-strategi') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Visi, Misi, Tujuan,
                        Strategi</a>
                    <a href="{{ route('pages', 'keunggulan') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Keunggulan</a>
                    <a href="{{ route('pages', 'akreditasi') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Akreditasi</a>
                    <a href="{{ route('pages', 'kegiatan-mahasiswa') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Kegiatan Mahasiswa</a>
                    <a href="{{ route('pages', 'beasiswa') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Beasiswa</a>
                    <a href="{{ route('pages', 'belajar-di-jepang') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Belajar di Jepang</a>
                    <a href="{{ route('pages', 'prospek-karir') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Prospek Karir</a>
                </div>
            </div>
            {{-- End Mobile Dropdown --}}

            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <!-- Toggle utama -->
                <button data-target="mahasiswaDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Mahasiswa</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>
                </button>

                <!-- Menu utama Mahasiswa -->
                <div id="mahasiswaDropdownMobile" class="hidden bg-indigo-600">
                    <!-- Kalender Akademik dengan submenu -->
                    <div class="border-t border-indigo-500">
                        <button data-target="kalenderDropdownMobile"
                            class="w-full dropdown-btn flex items-center justify-between px-10 py-2 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">
                            <span>Kalender Akademik</span>
                            <svg class="w-4 h-4 ml-2 fill-current transform transition-transform duration-200"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                            </svg>
                        </button>
                        <div id="kalenderDropdownMobile" class="hidden bg-indigo-700">
                            @foreach ($kalender as $item)
                                <a href="{{ route('pages',$item->slug) }}" wire:navigate
                                        class="block px-14 py-2 text-white hover:bg-indigo-600 transition">{{ Str::title(str_replace('-', ' ', $item->slug)) }}</a>
                            @endforeach

                        </div>
                    </div>

                    <!-- Item lainnya -->
                    <a href="{{ route('pages','jadwal-kuliah') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Jadwal
                        Kuliah</a>
                    <a href="{{ route('pages', 'hmsi') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Himpunan
                        Mahasiswa</a>
                    <a href="{{ route('pages','mahasiswa-berprestasi') }}" class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Mahasiswa
                        Berprestasi</a>
                    <a href="{{ route('pages','magang') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Magang</a>
                </div>
            </div>

            {{-- End Mobile Dropdown --}}

            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <button data-target="dosenStaffDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Dosen & Staff</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>
                </button>
                <div id="dosenStaffDropdownMobile" class="hidden bg-indigo-600">
                    <a href="{{ route('pages','daftar-dosen') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Daftar
                        Dosen</a>
                    <a href="{{ route('pages','daftar-tenaga-kependidikan') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Daftar
                        Tenaga Kependidikan</a>
                    <a href="{{ route('pages','daftar-laboran') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Daftar
                        Laboran</a>
                </div>
            </div>
            {{-- End Mobile Dropdown --}}

            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <button data-target="alumniDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Alumni</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>
                </button>
                <div id="alumniDropdownMobile" class="hidden bg-indigo-600">
                    <a href="{{ route('pages','ikatan-alumni') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">ILUSI
                        (Ikatan Alumni Sistem Informasi)</a>
                    <a href="{{ route('pages','lowongan-kerja') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Lowongan
                        Kerja</a>
                    <a href="{{ route('pages','alumni-berprestasi') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Alumni
                        Berprestasi</a>
                    <a href="{{ route('pages','tracer-studi-alumni') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Tracer Studi
                        Alumni</a>
                    <a href="{{ route('pages','kegiatan-alumni') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Kegiatan
                        Alumni</a>
                </div>
            </div>
            {{-- End Mobile Dropdown --}}

            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <button data-target="akademikDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Akademik</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>
                </button>
                <div id="akademikDropdownMobile" class="hidden bg-indigo-600">
                    <a href="{{ route('pages','distribusi-mata-kuliah-kurikulum-kkni-2017') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Distribusi
                        Mata Kuliah Kurikulum KKNI 2017</a>
                    <a href="{{ route('pages','distribusi-mata-kuliah-kurikulum-obe-mbkm-2022') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Distribusi
                        Mata Kuliah Kurikulum OBE MBKM 2022</a>
                    <a href="{{ route('pages','pengumuman') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Pengumuman</a>
                    <a href="{{ route('pages','peraturan-dan-informasi') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Peraturan &
                        Informasi</a>
                    <a href="{{ route('pages','skripsi') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Skripsi</a>
                    <a href="{{ route('pages','kerja-praktik') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Kerja
                        Praktik</a>
                </div>
            </div>
            {{-- End Mobile Dropdown --}}

            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <button data-target="fasilitasDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Fasilitas</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>

                <div id="fasilitasDropdownMobile" class="hidden bg-indigo-600">
                    <a href="{{ route('pages','fasilitas-akademik') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Fasilitas
                        Akademik</a>
                    <a href="{{ route('pages','fasilitas-non-akademik') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Fasilitas
                        Non-Akademik</a>
                </div>
            </div>
            {{-- End Mobile Dropdown --}}

            <a href="{{ route('pages','hmsi') }}"
                class="block px-6 py-3 text-white hover:bg-indigo-500 transition border-t border-indigo-600">HSMI</a>

            <!-- Mobile dropdown -->
            <div class="border-t border-indigo-600">
                <button data-target="risetDropdownMobile"
                    class="w-full dropdown-btn flex items-center justify-between px-6 py-3 text-white hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Riset & Kolaborasi</span>
                    <svg class="w-4 h-4 ml-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5.555 7.168L10 11.724l4.445-4.556 1.11 1.11L10 14.945 4.445 8.277z" />
                    </svg>
                </button>
                <div id="risetDropdownMobile" class="hidden bg-indigo-600">
                    <a href="{{ route('pages','penelitian-dan-pengabdian') }}" wire:navigate class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Penelitian &
                        Pengabdian</a>
                    <a href="{{ route('pages','publikasi') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Publikasi</a>
                    <a href="{{ route('pages','kerjasama') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Kerjasama</a>
                    <a href="{{ route('pages','penghargaan') }}" wire:navigate
                        class="block px-10 py-2 text-white hover:bg-indigo-500 transition">Penghargaan</a>
                </div>
            </div>
            {{-- End Mobile Dropdown --}}

            <a href="{{ route('pages','lowongan-kerja') }}" wire:navigate
                class="block px-6 py-3 text-white hover:bg-indigo-500 transition border-t border-indigo-600">Lowongan
                Kerja</a>
            <a href="/admin" wire:navigate
                class="block px-6 py-3 text-white hover:bg-indigo-500 transition border-t border-indigo-600">Admin</a>
        </nav>
    </header>


    <!-- Hero Section -->
    <div class="min-h-full">
        @yield('content')
        <div class="bg-gradient-to-tr from-blue-100 via-white to-green-100 py-20 flex items-center justify-center px-4">
            <div class="bg-white/90 backdrop-blur-lg rounded-xl shadow-lg max-w-lg w-full p-8">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6 text-center">Hubungi Kami</h2>
                <form class="space-y-6" action="{{ route('comment.new') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700">Nama Anda</label>
                        <input type="text" id="name" name="author_name" required
                            placeholder="Masukkan nama Anda"
                            class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm py-2 px-3 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 transition" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required placeholder="email@example.com"
                            class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm py-2 px-3 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 transition" />
                    </div>
                    <div>
                        <label for="comment" class="block text-sm font-semibold text-gray-700">Pesan</label>
                        <textarea id="comment" name="content" rows="5" required
                            placeholder="Tulis komentar atau saran Anda di sini..."
                            class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm py-2 px-3 resize-none focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 transition"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-white font-bold text-lg hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-300 transition">
                            Kirim
                        </button>
                    </div>
                </form>
                @session('success')
                <p>{{ session('success') }}</p>
                @endsession
            </div>
        </div>
           
    </div>


    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 w-full">
        <div class="container mx-auto px-6 text-center text-sm">
            &copy; 2024 Program Studi Sistem Informasi. Semua hak cipta dilindungi.
        </div>
    </footer>
    <script src="{{ asset('js/mobile.js') }}"></script>
    @livewireScripts
    @yield('page-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const visitStart = Date.now();

        window.addEventListener('beforeunload', function () {
            const duration = Math.floor((Date.now() - visitStart) / 1000); // in seconds
            console.log(`Visit duration: ${duration} seconds`);
            $.ajax({
                url: "/visit-duration",
                method: "POST",
                data: {
                    duration: duration,
                    ip_address: "{{ request()->ip() }}",
                    _token: '{{ csrf_token() }}' // penting!
                }
            });
        });
    </script>
</body>

</html>
