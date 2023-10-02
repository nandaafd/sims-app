<?php

namespace App\Http\Controllers;

use App\Exports\ExportProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(){
        
         return Excel::download(new ExportProduk, 'produk.xlsx');
    }
}
