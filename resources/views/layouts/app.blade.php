<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>@yield('title','Information Systems - Unsada')</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @livewireStyles
  @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <div class="navbar-brand d-flex align-items-center flex-row flex-nowrap justify-content-start">
        <img src="{{ asset('images/logo.png') }}" alt="Unsasda" width="45" height="45">
        <div class="mx-2">
            <h4 class="mb-0">Program Studi Sistem Informasi</h4>
            <h6 class="mb-0">Universitas Darma Persada</h6>
        </div>
    </div>
    {{-- <a class="navbar-brand" href="#home">
        Program Studi Sistem Informasi <br>
        Universitas Darma Persada
    </a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav d-flex flex-wrap justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="/" wire:navigate >Beranda</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1" >
                <li><a class="dropdown-item" href="{{ route('pages.tentang.index','sejarah-program-studi') }}" wire:navigate >Sejarah Prodi</a></li>
                <li><a class="dropdown-item" href="{{ route('pages.tentang.index','visi-dan-misi') }}" wire:navigate >Visi & Misi</a></li>
                <li><a class="dropdown-item" href="{{ route('pages.tentang.index','keunggulan') }}" wire:navigate >Keunggulan</a></li>
                <li><a class="dropdown-item" href="{{ route('pages.tentang.index','akreditasi') }}" wire:navigate >Akreditasi</a></li>
                <li><a class="dropdown-item" href="#">Kegiatan Mahasiswa</a></li>
                <li><a class="dropdown-item" href="#">Beasiswa</a></li>
                <li><a class="dropdown-item" href="#">Belajar di Jepang</a></li>
                <li><a class="dropdown-item" href="#">Prospek Karir</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mahasiswa
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2" >
                <li><a class="dropdown-item" href="#">Kalender Akademik</a></li>
                <li><a class="dropdown-item" href="#">Jadwal Kuliah</a></li>
                <li><a class="dropdown-item" href="{{ route('pages.tentang.index','hmsi') }}" wire:navigate >Himpunan Mahasiswa</a></li>
                <li><a class="dropdown-item" href="#">Mahasiswa Berprestasi</a></li>
                <li><a class="dropdown-item" href="#">Magang</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dosen & Staff
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3" >
                <li><a class="dropdown-item" href="#">Daftar Dosen</a></li>
                <li><a class="dropdown-item" href="#">Daftar Tenaga Kependidikan</a></li>
                <li><a class="dropdown-item" href="#">Daftar Laboran</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alumni
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4" >
                <li><a class="dropdown-item" href="#">ILUSI (Ikatan Alumni Sistem Informasi)</a></li>
                <li><a class="dropdown-item" href="#">Lowongan Kerja</a></li>
                <li><a class="dropdown-item" href="#">Alumni Berprestasi</a></li>
                <li><a class="dropdown-item" href="#">Tracer Studi Alumni SI</a></li>
                <li><a class="dropdown-item" href="#">Kegiatan Alumni</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akademik
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown5" >
                <li><a class="dropdown-item" href="#">Distribusi Mata Kuliah Kurikulum KKNI 2017</a></li>
                <li><a class="dropdown-item" href="{{ route('mk') }}" wire:navigate >Distribusi Mata Kuliah Kurikulum OBE MBKM 2022</a></li>
                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                <li><a class="dropdown-item" href="#">Peraturan & Informasi</a></li>
                <li><a class="dropdown-item" href="#">Skripsi</a></li>
                <li><a class="dropdown-item" href="#">Kerja Praktik</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fasilitas
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown6" >
                <li><a class="dropdown-item" href="#">Fasilitas Akademik</a></li>
                <li><a class="dropdown-item" href="#">Fasilitas Non-Akademik</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link">HMSI</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown7" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Riset & Kolaborasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown7" >
                <li><a class="dropdown-item" href="#">Penelitian & Pengabdian</a></li>
                <li><a class="dropdown-item" href="#">Publikasi Ilmiah</a></li>
                <li><a class="dropdown-item" href="#">Kerjasama</a></li>
                <li><a class="dropdown-item" href="#">Penghargaan</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" >Lowongan Kerja</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#about-section" onclick="scrollToSection(event, 'about-section')">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features-section" onclick="scrollToSection(event, 'features-section')">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#apply-section" onclick="scrollToSection(event, 'apply-section')">Apply</a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>

@yield('content')

<footer class="container" >
    <div class="row mb-3">
        <div class="col-md-4">
            <p class="text-white">
                Jl. Taman Malaka Selatan No.8, RW.6, Pd. Klp., Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450
            </p>
        </div>
        <div class="col-md-4">
            <a target="_blank" class="btn btn-sm btn-outline-danger m-1" href="https://www.instagram.com/si.unsada.official/">Instagram</a>
            <a target="_blank" class="btn btn-sm btn-outline-danger m-1" href="https://www.youtube.com/@SistemInformasiUnsada2023/">Youtube</a>
            <a target="_blank" class="btn btn-sm btn-outline-light m-1"  href="https://www.tiktok.com/@siunsada">Tiktok</a>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-column">
                <a href="https://unsada.ac.id">unsada.ac.id</a><br>
                <a href="https://pmb.unsada.ac.id">pmb.unsada.ac.id</a></p>
                <p><i class="fa fa-phone"></i> (021) 8649059</p>
            </div>
        </div>
    </div>
  &copy; 2025 InfoSys Study Program &sdot; Empowering Tomorrow's Innovators
</footer>
<!-- Bootstrap 5 JS Bundle CDN -->
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
{{-- <script src="{{ asset('js/jquery.js') }}"></script> --}}
<script>
  // Smooth scroll and close navbar on link click (Bootstrap collapse)
  function scrollToSection(event, sectionId) {
    event.preventDefault();
    const section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
      // Close navbar if open (for mobile)
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).toggle();
      }
      // Update active nav link
      document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
      });
      event.target.classList.add('active');
    }
  }
</script>
@livewireScripts
</body>
</html>
