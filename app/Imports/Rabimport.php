<?php

namespace App\Imports;

use App\Models\Rab;
use Maatwebsite\Excel\Concerns\ToModel;

class Rabimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rab([
            'no'=> $row[1],
            'uraian_pekerjaan'=> $row[2],
            'satuan'=> $row[3],
            'volume'=> $row[4],
            'harga_satuan'=> $row[5],
            'jumlah'=> $row[6],
        ]);
    }
}
