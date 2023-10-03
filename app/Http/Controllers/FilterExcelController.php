<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class FilterExcelController extends Controller
{
    public function index() {
        $kategori = Kategori::all();
        return view('produk.excel',compact('kategori'));
    }
}
