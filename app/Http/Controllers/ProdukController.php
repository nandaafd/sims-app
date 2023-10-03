<?php

namespace App\Http\Controllers;

use App\Exports\ExportProduk;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpKernel\HttpCache\Store;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $cariKategori = $request->kategori;
        $cariProduk = $request->cari_produk;
        $kategori = Kategori::all();
        $queryProduk = Produk::query();
        if ($cariKategori) {
            $queryProduk->where('kategori_id',$cariKategori);
        }
        if ($cariProduk) {
            $queryProduk->where('nama_produk',$cariProduk);
        }
        $produk = $queryProduk->paginate(10);
        return view('produk.index', compact('kategori', 'produk'));
    }
    public function data(){
        $item = Produk::paginate(10);
        return view('produk.table', compact('item'));
    }
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori'=>'required',
            'nama_produk'=>'required|unique:produk,nama_produk',
            'harga_beli'=>'required|numeric',
            'stok'=>'required|numeric',
            'file' => 'required|file|mimes:jpeg,png|max:100',
        ]);
        $path = $request->file('file')->store('foto_produk');
        $harga_beli = $request->harga_beli;
        $harga_jual = $harga_beli + ($harga_beli * 0.3);

        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori_id = $request->kategori;
        $produk->harga_beli = $request->harga_beli;
        $produk->harga_jual = $harga_jual;
        $produk->stok = $request->stok;
        $produk->image = $path;
        $produk->save();

        return redirect('produk')->with('success','Produk berhasil ditambah');
    }

    public function edit(string $id)
    {
        $produk = Produk::where('id',$id)->get();
        $kategori = Kategori::all();
        return view('produk.edit', compact('produk','kategori'));
    }

    public function update(Request $request, string $id)
    {   
        $old_file = $request->old_file;
        $validatedData = $request->validate([
            'kategori'=>'required',
            'nama_produk'=>'required',
            'harga_beli'=>'required|numeric',
            'stok'=>'required|numeric',
            'file' => 'file|mimes:jpeg,png|max:100',
        ]);
        
        if ($request->hasFile('file')) {
            if ($request->old_file) {
                Storage::delete($request->old_file);
            }
            $path = $request->file('file')->store('foto_produk');
        }else{
            $path = $old_file;
        }

        $harga_beli = $request->harga_beli;
        $harga_jual = $harga_beli + ($harga_beli * 0.3);

        $produk = Produk::find($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori_id = $request->kategori;
        $produk->harga_beli = $request->harga_beli;
        $produk->harga_jual = $harga_jual;
        $produk->stok = $request->stok;
        $produk->image = $path;
        $produk->save();

        return redirect('produk')->with('success','Data berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        Produk::where('id',$id)->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
