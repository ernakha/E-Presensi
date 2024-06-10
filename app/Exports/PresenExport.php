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
    public function model(array $row)
    {
        return new Presen([
            'guru_nama' => 2,
            
        ]);
    }
}
