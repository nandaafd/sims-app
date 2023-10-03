<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportProduk implements FromView
{
    public function view():View
    {
        $item = Produk::all();
        return view('produk.table', ['item'=>$item]);   
    }
}
