@php
    $formId = $data['form_id'];
    $limit = $data['limit'] ?? 5;

    $submissions = \App\Models\FormSubmission::where('form_id','=', $formId)
                    ->latest()

                    ->get();
@endphp

<div class="space-y-4">
    @foreach($submissions as $submission)
        <div class="p-4 border rounded bg-gray-50">
            <h4 class="font-semibold text-gray-700">Submitted at: {{ $submission->created_at->format('d M Y H:i') }}</h4>
            <ul class="mt-2 text-sm text-gray-600 list-disc pl-5">
                @foreach($submission->data as $key => $value)
                    <li><strong>{{ ucfirst(str_replace('_',' ',$key)) }}:</strong> {{ is_array($value) ? json_encode($value) : $value }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>

