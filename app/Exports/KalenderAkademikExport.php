<?php

namespace App\Exports;

use App\Models\KalenderAkademik;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KalenderAkademikExport implements FromView
{
    /**
    *
    */
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function view(): View
    {
        return view('export.kalender-akademik', [
            'kalender' => $this->query->get(),
        ]);
    }
}
