<?php

namespace App\Exports;

use App\Models\Venus;
use Maatwebsite\Excel\Concerns\FromCollection;

class Lampuexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Venus::all();
    }
}
