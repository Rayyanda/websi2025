@extends('layouts.app')

@section('content')
    <header id="home" class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h1>Discover the Future with Information Systems</h1>
                <p>Join our cutting-edge study program that empowers you with tech skills, business acumen, and an
                    innovation mindset.</p>
                <button class="btn btn-cta"
                    onclick="document.getElementById('apply-section').scrollIntoView({behavior:'smooth'})">Apply Now</button>
            </div>
        </div>
    </header>
    <main class="container">
        <section id="about-section" class="info-section">
            <h2>Our Vision</h2>
            <p>Becoming a leading Information Systems Study Program in Indonesia in the field of manufacturing information
                systems and system analysis in 2027.</p>
        </section>
        <h3 class="text-center">Our Mission</h3>
        <section id="features-section" class="row g-4 mb-5">
            <!-- Carousel Wrapper -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="feature-card mx-auto p-4 shadow rounded w-50">
                            <h3>Hands-On Learning</h3>
                            <p>Memiliki kompetensi dalam bidang sistem informasi terutama pada analisa bisnis proses, perancangan dan pengembangan sistem informasi dan teknologi informasi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card inactive p-4 shadow rounded w-50">
                            <h3>Hands-On Learning</h3>
                            <p>Memiliki kompetensi dalam bidang sistem informasi terutama pada analisa bisnis proses,
                                perancangan dan
                                pengembangan sistem informasi dan teknologi informasi</p>
                        </div>
                        <div class="feature-card mx-auto p-4 shadow rounded w-50">
                            <h3>Industry Connections</h3>
                            <p>Menyelenggarakan pendidikan yang berkualitas untuk menghasilkan lulusan Program Studi
                                Informasi yang
                                mampu bekerja sama dalam tim, komunikator yang lebih efektif serta memiliki keinginan
                            pembelajaran sepanjang hidup yang berlandaskan etika dan moral.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card mx-auto p-4 shadow rounded w-50">
                            <h3>Future-Focused Skills</h3>
                            <p>Berperan aktif dalam kegiatan penelitian dan pengabdian masyarakat di bidang keilmuwan Sistem
                                Informasi
                                yang memberikan kontribusi kepada masyarakat.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card mx-auto p-4 shadow rounded w-50">
                            <h3>Global Partnerships</h3>
                            <p>Berperan aktif dalam kemitraan dalam mendukung kegiatan tridarma dan memberikan layanan
                                akademik dan non
                                akademik baik pada tingkat nasional maupun internasional.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel indicators -->
                <div class="carousel-indicators mt-3">
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
            </div>

            {{-- <div class="col-12 col-md-6 col-lg-3">

            </div>
            <div class="col-12 col-md-6 col-lg-3">

            </div>
            <div class="col-12 col-md-6 col-lg-3">

            </div>
            <div class="col-12 col-md-6 col-lg-3 mx-lg-0 mx-md-auto">

            </div> --}}
        </section>
        <section id="apply-section" class="info-section">
            <h2>Get Started Today</h2>
            <p>Ready to take the next step? Apply now to become part of a vibrant community shaping the future of
                information
                systems. Embark on an exciting journey of learning, innovation, and success.</p>
            <button class="btn btn-cta" onclick="alert('Thank you for your interest! Application form coming soon.')">Apply
                Now</button>
        </section>
    </main>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endpush
