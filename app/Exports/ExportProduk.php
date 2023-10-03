<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportProduk implements FromView
{
    protected $filter;

    public function __construct($filter)
    {
        $this->filter = $filter;
    }
    public function view():View
    {
        $item = Produk::where('kategori_id', $this->filter)->get();
        return view('produk.table', ['item'=>$item]);   
    }
}
