@extends('layouts.app')

@section('content')
  <section class="bg-indigo-600 text-white">
    <div class="container mx-auto px-6 py-20 text-center md:text-left md:flex md:items-center md:justify-between">
      <div class="md:w-1/2 space-y-6">
        <h2 class="text-4xl md:text-5xl font-extrabold fade-in fade-in-delay-1">Jadilah Ahli Sistem Informasi Masa Depan</h2>
        <p class="text-lg md:text-xl fade-in fade-in-delay-2">Program studi terdepan yang menggabungkan ilmu teknologi dengan manajemen bisnis.</p>
        <a href="#program" class="bg-white text-indigo-600 font-semibold px-8 py-3 rounded shadow hover:bg-indigo-50 transition fade-in fade-in-delay-3 inline-block">Pelajari Program Kami</a>
      </div>
      <div class="mt-10 md:mt-0 md:w-1/2 relative fade-in fade-in-delay-3">
        <div class="carousel">
          <button class="carousel-button prev" aria-label="Previous Slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <button class="carousel-button next" aria-label="Next Slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </button>

          <div class="carousel-slide active" aria-hidden="false">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" alt="Sistem Informasi 1" />
          </div>
          <div class="carousel-slide" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Sistem Informasi 2" />
          </div>
          <div class="carousel-slide" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=600&q=80" alt="Sistem Informasi 3" />
          </div>
          <div class="carousel-slide" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Sistem Informasi 4" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="container mx-auto px-6 py-16">
    <h3 class="text-center text-3xl font-bold mb-8 text-indigo-700">Tentang Program Studi Sistem Informasi</h3>
    <p class="max-w-4xl mx-auto text-center text-gray-700 text-lg leading-relaxed">
      Program Studi Sistem Informasi bertujuan menghasilkan lulusan yang mampu merancang, mengelola,
      dan mengembangkan sistem informasi untuk mendukung kebutuhan organisasi dan bisnis di era digital
      dengan pendekatan teknologi dan manajemen yang efektif.
    </p>
  </section>

  <!-- Programs Section -->
  {{-- <section id="program" class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
      <h3 class="text-center text-3xl font-bold text-indigo-700 mb-12">Program Studi Kami</h3>
      <div class="grid gap-10 md:grid-cols-3 max-w-6xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Manajemen Sistem Informasi</h4>
          <p class="text-gray-600 mb-4">Pelajari cara mengelola proyek TI dan sumber daya untuk memenuhi kebutuhan bisnis secara maksimal.</p>
          <a href="#contact" class="text-indigo-600 font-semibold hover:underline">Daftar Sekarang &rarr;</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Pengembangan Aplikasi</h4>
          <p class="text-gray-600 mb-4">Kuasai teknik dan metodologi dalam merancang dan membangun aplikasi bisnis yang modern dan responsif.</p>
          <a href="#contact" class="text-indigo-600 font-semibold hover:underline">Daftar Sekarang &rarr;</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Analisis Data dan Sistem</h4>
          <p class="text-gray-600 mb-4">Tingkatkan kemampuan menganalisis data dan sistem informasi untuk pengambilan keputusan yang tepat.</p>
          <a href="#contact" class="text-indigo-600 font-semibold hover:underline">Daftar Sekarang &rarr;</a>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- VMTS --}}
  <section id="program" class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
      <h3 class="text-center text-3xl font-bold text-indigo-700 mb-12">Visi, Misi, Tujuan & Strategis</h3>
      <div class="grid gap-10 md:grid-cols-4 max-w-6xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Visi</h4>
          <p class="text-gray-600 mb-4">
            Menjadi Program Studi Sistem Informasi unggul di Indonesia di bidang sistem informasi manufaktur dan analisis sistem pada tahun 2027
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Pengembangan Aplikasi</h4>
          <p class="text-gray-600 mb-4">Kuasai teknik dan metodologi dalam merancang dan membangun aplikasi bisnis yang modern dan responsif.</p>
          <a href="#contact" class="text-indigo-600 font-semibold hover:underline">Daftar Sekarang &rarr;</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Analisis Data dan Sistem</h4>
          <p class="text-gray-600 mb-4">Tingkatkan kemampuan menganalisis data dan sistem informasi untuk pengambilan keputusan yang tepat.</p>
          <a href="#contact" class="text-indigo-600 font-semibold hover:underline">Daftar Sekarang &rarr;</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1">
          <h4 class="text-xl font-semibold mb-3">Analisis Data dan Sistem</h4>
          <p class="text-gray-600 mb-4">Tingkatkan kemampuan menganalisis data dan sistem informasi untuk pengambilan keputusan yang tepat.</p>
          <a href="#contact" class="text-indigo-600 font-semibold hover:underline">Daftar Sekarang &rarr;</a>
        </div>
      </div>
    </div>
  </section>


  <!-- Facilities Section -->
  <section id="facilities" class="container mx-auto px-6 py-16">
    <h3 class="text-center text-3xl font-bold mb-12 text-indigo-700">Fasilitas Pendukung</h3>
    <div class="grid gap-10 md:grid-cols-3 max-w-6xl mx-auto text-center">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.34 6.242c-.44 1.31-1.676 2.278-3.03 2.278-1.354 0-2.59-.968-3.03-2.278a12.083 12.083 0 01.34-6.242L12 14z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14L6 19l6 5 6-5-6-5z" />
        </svg>
        <h4 class="font-semibold text-lg mb-2">Laboratorium Komputer Modern</h4>
        <p class="text-gray-600">Fasilitas komputer lengkap dengan jaringan dan software terbaru untuk mendukung proses belajar.</p>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M10 12h4m1 4H9a4 4 0 01-4-4v-1a4 4 0 014-4h6a4 4 0 014 4v1a4 4 0 01-4 4z" />
        </svg>
        <h4 class="font-semibold text-lg mb-2">Perpustakaan Digital</h4>
        <p class="text-gray-600">Akses berbagai referensi dan jurnal ilmiah secara online kapan saja dan dari mana saja.</p>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m-2 4h.01M21 12h.01M3 12h.01" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M2 20h20M12 4v16" />
        </svg>
        <h4 class="font-semibold text-lg mb-2">Ruangan Kreatif dan Diskusi</h4>
        <p class="text-gray-600">Ruang khusus untuk brainstorming dan kolaborasi antar mahasiswa dan dosen.</p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-indigo-600 text-white py-16">
    <div class="container mx-auto px-6 max-w-4xl">
      <h3 class="text-3xl font-bold mb-8 text-center">Hubungi Kami</h3>
      <form class="max-w-2xl mx-auto space-y-6 bg-indigo-700 rounded-lg p-8 shadow-lg" onsubmit="event.preventDefault(); alert('Terima kasih atas pesan Anda!'); this.reset();">
        <div>
          <label for="name" class="block mb-2 font-semibold">Nama</label>
          <input type="text" id="name" name="name" placeholder="Nama Anda" required
            class="w-full rounded-md px-4 py-2 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
        </div>
        <div>
          <label for="email" class="block mb-2 font-semibold">Email</label>
          <input type="email" id="email" name="email" placeholder="Email Anda" required
            class="w-full rounded-md px-4 py-2 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
        </div>
        <div>
          <label for="message" class="block mb-2 font-semibold">Pesan</label>
          <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini..."
            class="w-full rounded-md px-4 py-2 resize-none text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-400" required></textarea>
        </div>
        <button type="submit"
          class="w-full bg-white text-indigo-600 font-semibold py-3 rounded hover:bg-indigo-50 transition">Kirim Pesan</button>
      </form>
    </div>
  </section>

@endsection
