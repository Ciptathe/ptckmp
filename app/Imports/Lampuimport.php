<?php

namespace App\Imports;

use App\Models\Venus;
use Maatwebsite\Excel\Concerns\ToModel;

class Lampuimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Venus([
            'instansi'=> $row[1],
            'lokasi'=> $row[2],
            'jumlah'=> $row[3],
            'keterangan'=> $row[4],
            'bayar'=> $row[5],
            'belumbayar'=> $row[6],
        ]);
    }
}
