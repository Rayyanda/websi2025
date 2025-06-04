<div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1 fade-in fade-in-delay-{{ $iteration }}">
    @if (!empty($data['image']))
        <img src="{{ asset('storage/' . $data['image']) }}" alt="{{ $data['title'] ?? '' }}"
            class="w-full h-48 object-cover">
    @endif
    <div class="p-4">
        <h3 class="text-lg font-semibold">{{ $data['title'] ?? 'No Title' }}</h3>
        <p class="text-gray-600">{{ $data['desc'] ?? '' }}</p>
    </div>
</div>
