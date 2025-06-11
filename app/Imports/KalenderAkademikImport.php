<?php

namespace App\Imports;

use App\Models\KalenderAkademik;
use Maatwebsite\Excel\Concerns\ToModel;

class KalenderAkademikImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KalenderAkademik([
            //
            'tgl_mulai' => $row[0],
            'tgl_selesai' => $row[1],
            'kegiatan' => $row[2],
            'keterangan' => $row[3],
            'tahun_ajaran_id' => $row[4],
            'semester' => $row[5]
        ]);
    }
}
