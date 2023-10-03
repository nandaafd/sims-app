

<table class="table table-hover text-center">
    <thead class="table-secondary">
        <tr>
            <th>No</th>
            {{-- <th>Gambar</th> --}}
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga Beli (Rp)</th>
            <th>Harga Jual (Rp)</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($item as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            {{-- <td><img src="{{asset('storage/'.$data->image)}}" alt="" srcset="" style="max-width: 30px" class=""></td> --}}
            <td>{{$data->nama_produk}}</td>
            <td>{{$data->kategori->nama_kategori}}</td>
            <td>{{$data->harga_beli}}</td>
            <td>{{$data->harga_jual}}</td>
            <td>{{$data->stok}}</td>
        </tr>             
        @endforeach
    </tbody>
</table>
 
