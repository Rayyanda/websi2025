@php
    $isPositive = $change >= 0;
    $changeFormatted = number_format(abs($change), 1);
@endphp
<div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
    <div class="flex items-center">
        <div class="p-3 rounded-lg bg-indigo-100 text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>
        <div class="ml-4">
            <p class="text-sm text-gray-500">Total Pengunjung</p>
            <h3 class="text-2xl font-semibold text-gray-800">{{ number_format($totalVisitors) }}</h3>
        </div>
    </div>
    <div class="mt-4 flex items-center text-sm text-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
        <span class="ml-1">12.3% dari bulan lalu</span>
    </div>
</div>
