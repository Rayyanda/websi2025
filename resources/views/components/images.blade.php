@props(['dataImage','id'])
@php
    $images = $dataImage['src'] ?? [];
    if (!is_array($images)) {
        $images = [$images];
    }
    $carouselId = $id ?? 'carousel-' . Str::uuid();
@endphp
<div id="{{ $carouselId }}" class="mt-10 mb-10 md:mt-0 md:w-1/2 mx-auto relative fade-in fade-in-delay-3">
    <div class="carousel" data-interval="5000">
        {{-- Navigation Buttons --}}
        <button class="carousel-button prev" aria-label="Previous Slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button class="carousel-button next" aria-label="Next Slide">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        {{-- Carousel Slides --}}
        @foreach ($images as $image)
            <div class="carousel-slide {{ $loop->index === 0 ? 'active' : '' }}" aria-hidden="{{ $loop->index === 0 ? 'false' : 'true' }}">
                <div class="rounded overflow-hidden shadow-md">
                    <img src="{{ asset('storage/' . $image) }}" alt="Image {{ $loop->iteration }}">
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    (() => {
        const wrapper = document.getElementById('{{ $carouselId }}');
        const carousel = wrapper.querySelector('.carousel');
        const slides = carousel.querySelectorAll(".carousel-slide");
        const prevBtn = carousel.querySelector(".carousel-button.prev");
        const nextBtn = carousel.querySelector(".carousel-button.next");
        const intervalTime = parseInt(carousel.dataset.interval, 10) || 5000;

        let currentIndex = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
                slide.setAttribute("aria-hidden", i === index ? "false" : "true");
            });
            currentIndex = index;
        }

        function showNext() {
            showSlide((currentIndex + 1) % slides.length);
        }

        function showPrev() {
            showSlide((currentIndex - 1 + slides.length) % slides.length);
        }

        function startInterval() {
            slideInterval = setInterval(showNext, intervalTime);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        nextBtn.addEventListener("click", () => { showNext(); resetInterval(); });
        prevBtn.addEventListener("click", () => { showPrev(); resetInterval(); });

        showSlide(currentIndex);
        startInterval();
    })();
</script>

