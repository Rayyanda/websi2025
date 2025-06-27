<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $form->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
</head>

<body class="bg-gradient-to-br from-primary-100 to-secondary-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <h3 class="text-center">{{ $form->title }}</h3>

            <form method="POST" action="{{ route('form.submit', $form->slug) }}"
                class="max-w-xl mx-auto space-y-4 mt-10 p-5">
                @csrf
                @foreach ($form->fields as $field)
                    @if ($field['type'] === 'text')
                        <div>
                            <label>{{ $field['label'] }}</label>
                            <input type="text" name="{{ $field['name'] }}" class="w-full border p-2 rounded"
                                {{ $field['required'] ? 'required' : '' }}>
                        </div>
                    @elseif($field['type'] === 'select')
                        <div>
                            <label>{{ $field['label'] }}</label>
                            <select name="{{ $field['name'] }}" class="w-full border p-2 rounded">
                                @foreach ($field['options'] as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                @endforeach
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Kirim</button>
            </form>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ session('success') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

</body>

</html>
