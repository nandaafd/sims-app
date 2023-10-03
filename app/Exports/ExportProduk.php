<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportProduk implements FromView
{
    protected $filter1;
    protected $filter2;

    public function __construct($filter1, $filter2)
    {
        $this->filter1 = $filter1;
        $this->filter2 = $filter2;
    }

    public function view(): View
    {
        // Menggunakan kedua filter dalam query
        $item = Produk::where('kategori_id', $this->filter1)
                       ->where('nama_produk', $this->filter2)
                       ->get();
                       return view('produk.table', ['item' => $item]);
    }  
}
