<?php

namespace App\Http\Controllers;

use App\Exports\ExportProduk;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(){
         return Excel::download(new ExportProduk, 'produk.xlsx');
    }
   
}
