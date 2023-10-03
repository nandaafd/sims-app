<?php

namespace App\Http\Controllers;

use App\Exports\ExportProduk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(Request $request){
        $filter = $request->input('kategori');

        // Buat instance dari InvoicesExport dengan filter
        $export = new ExportProduk($filter);

        // Ekspor data ke Excel
        return Excel::download($export, 'produk.xlsx');
    }
    
   
}
