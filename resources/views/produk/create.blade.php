@extends('layout.main')
@section('content')
<div class="mt-4">
    <h4 id="path">{{ Breadcrumbs::render('create') }}</h4>
</div>
    <div class="row mx-4">
        <div class="col mt-3">
            <form action="{{route('produk.store')}}" method="post" class="" enctype="multipart/form-data">
                @csrf @method('post')
                <div class="row mb-3">
                    <div class="col">
                        <label for="kategori" class="mb-2">Kategori</label>
                        <select name="kategori" class="form-select form-select" aria-label="Default select example">
                            <option selected><i class="bi bi-box-seam"></i> Semua</option>
                            @foreach ($kategori as $data)
                                <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="nama_produk" class="mb-2">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" id="" placeholder="Masukkan nama produk">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="harga_beli" class="mb-2">Harga Beli</label>
                        <input type="text" name="harga_beli" class="form-control" id="" placeholder="Masukkan harga beli">
                    </div>
                    <div class="col">
                        <label for="stok" class="mb-2">Stok</label>
                        <input type="text" name="stok" class="form-control" id="" placeholder="Masukkan stok produk">
                    </div>
                </div>
                <div class="drop-area" id="drop-area">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <p id="drop-tittle">Drop file disini atau tekan untuk upload</p>
                </div>
                <input type="file" id="file-input" name="file" multiple hidden>
                <div class="mt-3">
                    <button type="submit" class="btn btn-danger"><i class="bi bi-plus-circle me-2"></i>Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection