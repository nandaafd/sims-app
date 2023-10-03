@extends('layout.main')
@section('content')
<div class="mt-4">
    <h4 id="path">{{ Breadcrumbs::render('produk') }}</h4>
</div>
<div class="row mt-4">
    <div class="col-8">
        <div class="row">
            <form action="" method="get" class="row row-cols-sm-auto g-1 mb-4">
                <div class="col">
                    <input type="text" name="cari_produk" id="" placeholder="cari produk" class="form-control form-control-sm">
                </div>
                <div class="col">
                    <select name="kategori" class="form-select form-select-sm" aria-label="Default select example">
                        <option selected value=""><i class="bi bi-box-seam"></i> Semua</option>
                        @foreach ($kategori as $data)
                            <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-danger mx-1 btn-sm" id="btn-filter">Search</button>
                    <button class="btn btn-light btn-sm" id="btn-reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                <a href="{{url('setting-excel')}}" class="btn btn-success btn-sm"><i class="bi bi-filetype-xlsx"></i> Export excel</a>
            </div>
            <div class="col-6">
                <a href="{{url('produk/create')}}" class="btn btn-danger btn-sm"><i class="bi bi-plus-circle"></i> Tambah data produk</a>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mx-auto" id="alert" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mx-auto" id="alert" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="mx-2">
      
@isset($produk)
<table class="table table-hover text-center">
    <thead class="table-secondary">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga Beli (Rp)</th>
            <th>Harga Jual (Rp)</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{asset('storage/'.$data->image)}}" alt="" srcset="" style="max-width: 30px" class=""></td>
            <td>{{$data->nama_produk}}</td>
            <td>{{$data->kategori->nama_kategori}}</td>
            <td>{{$data->harga_beli}}</td>
            <td>{{$data->harga_jual}}</td>
            <td>{{$data->stok}}</td>
            <td>
                <a href="{{route('produk.edit',$data->id)}}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
            </td>
            <td>
                <form action="{{ route('produk.destroy',$data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" title="Hapus data" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>
        </tr>             
        @endforeach
    </tbody>
</table>
{{$produk->links('layout.pagination')}}
@endisset 

</div>
  
@endsection