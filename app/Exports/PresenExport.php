<?php

namespace App\Exports;

use App\Models\Presen;
use Maatwebsite\Excel\Concerns\FromCollection;

class PresenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Presen::all();
    }
}
