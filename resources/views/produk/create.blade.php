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
                        <select name="kategori" class="form-select form-select @error('kategori') is-invalid @enderror" aria-label="Default select example">
                            <option selected><i class="bi bi-box-seam"></i> Pilh kategori</option>
                            @foreach ($kategori as $data)
                                <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="nama_produk" class="mb-2">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{old('nama_produk')}}" id="" placeholder="Masukkan nama produk">
                        @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="harga_beli" class="mb-2">Harga Beli</label>
                        <input type="text" name="harga_beli" class="form-control @error('harga_beli') is-invalid @enderror" value="{{old('harga_beli')}}" placeholder="Masukkan harga beli">
                        @error('harga_beli')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="stok" class="mb-2">Stok</label>
                        <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{old('stok')}}" placeholder="Masukkan stok produk">
                        @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="drop-area @error('file') is-invalid @enderror" id="drop-area">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <p id="drop-tittle">Drop file disini atau tekan untuk upload</p>
                </div>
                @error('file')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <input type="file" id="file-input" name="file" multiple hidden>
                <div class="mt-3">
                    <button type="submit" class="btn btn-danger"><i class="bi bi-plus-circle me-2"></i>Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection