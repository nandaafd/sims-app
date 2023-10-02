@extends('layout.main')
@section('content')
<div class="mt-4">
    <h4 id="path">{{ Breadcrumbs::render('produk') }}</h4>
</div>
<div class="row mt-4">
    <div class="col-9">
        <div class="row">
            <form action="" method="get" class="row row-cols-sm-auto g-1 mb-4">
                <div class="col-3">
                    <input type="text" name="cari_produk" id="" placeholder="cari produk" class="form-control form-control-sm">
                </div>
                <div class="col-3">
                    <select name="kategori" class="form-select form-select-sm" aria-label="Default select example">
                        <option selected value=""><i class="bi bi-box-seam"></i> Semua</option>
                        @foreach ($kategori as $data)
                            <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-danger mx-1 btn-sm">Search</button>
                    <button class="btn btn-light btn-sm">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3">
        <a href="{{url('download')}}" class="btn btn-success btn-sm"><i class="bi bi-filetype-xlsx"></i> Export excel</a>
        <a href="{{url('produk/create')}}" class="btn btn-danger btn-sm"><i class="bi bi-plus-circle"></i> Tambah data</a>
    </div>
</div>
<div class="mx-2">
    @include('produk.table',$produk)
</div>
  
@endsection