<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;
;

class ExportProduk implements FromCollection
{
    public function collection()
    {
        $data = Produk::paginate(10);

        return $data;
    }
}
