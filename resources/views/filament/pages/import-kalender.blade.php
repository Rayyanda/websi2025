{{-- resources/views/filament/pages/import-kalender.blade.php
<x-filament::page>
    <form wire:submit.prevent="submit" class="space-y-4">

        <x-filament::file-upload wire:model="file" name="file" label="Upload Excel"
            accepted-file-types="['.xlsx', '.xls', '.csv']" />

        <x-filament::button type="submit">Import</x-filament::button>

        @if (session()->has('success'))
            <div class="text-green-600 font-semibold">{{ session('success') }}</div>
        @endif
    </form>
</x-filament::page> --}}

<x-filament::page>
    <form wire:submit.prevent="submit" class="space-y-4">
        {{-- Upload file dengan Livewire --}}
        <div class="space-y-2">
            <label for="file" class="block text-sm font-medium text-gray-700">Upload File Excel</label>
            <input type="file" wire:model="file" name="file" id="file" class="filament-input w-full max-w-md" accept=".xlsx,.xls,.csv">

            @error('file')
                <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>
        {{-- Upload file dengan Livewire --}}



        <x-filament::button type="submit">Import</x-filament::button>

        @if (session()->has('success'))
            <div class="text-green-600 font-semibold">{{ session('success') }}</div>
        @endif
    </form>
</x-filament::page>

