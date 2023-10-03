@extends('layout.main')
@section('content')
<div class="mx-auto mt-5 text-center" style="width: 50%">
    <h5>Masukkan pengaturan untuk cetak data ke Excel</h5>
    <form action="{{route('export')}}" method="get" class=text-center mx-auto">
        <div class="row mb-3">
            <input type="text" name="cari_produk" id="" placeholder="cari produk" class="form-control">
        </div>
        <div class="row mb-3">
            <select name="kategori" class="form-select" aria-label="Default select example">
                <option selected value=""><i class="bi bi-box-seam"></i> Semua</option>
                @foreach ($kategori as $data)
                    <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                @endforeach
            </select>
        </div>
        <div class="row mb-3">
            <button type="submit" class="btn btn-success mx-1" id="btn-filter">Download</button>
        </div>
    </div>
    </form>
</div>

@endsection