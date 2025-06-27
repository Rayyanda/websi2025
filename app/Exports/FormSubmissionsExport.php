<?php

namespace App\Exports;

use App\Models\FormSubmission;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormSubmissionsExport implements FromCollection
{

    protected $formId;
    protected $headings = [];

    public function __construct($formId = null)
    {
        $this->formId = $formId;

        // Ambil satu contoh record untuk dapat field dynamic
        $example = FormSubmission::where('form_id', '=',$formId)->first();

        if ($example && is_array($example->data)) {
            $this->headings = array_keys($example->data);
        }
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = FormSubmission::query();

        if ($this->formId) {
            $query->where('form_id','=', $this->formId);
        }

        return $query->get()->map(function ($submission) {
            $data = $submission->data;

            // Pastikan semua heading ada meski data kosong
            $row = [
                'Form Title' => $submission->form->title,
                'Submitted At' => $submission->created_at->toDateTimeString(),
            ];

            foreach ($this->headings as $field) {
                $row[$field] = $data[$field] ?? null;
            }

            return $row;
        });
    }

    public function headings(): array
    {
        return array_merge(['Form Title', 'Submitted At'], $this->headings);
    }
}
