<?php

namespace App\Exports;

use App\Models\Rab;
use Maatwebsite\Excel\Concerns\FromCollection;

class Rabexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rab::all();
    }
}
