<?php

namespace App\Exports;

use App\Models\Apply;
use Maatwebsite\Excel\Concerns\FromCollection;

class ApplyExport implements FromCollection
{
    public function collection()
    {
        return Apply::all();
    }
}
