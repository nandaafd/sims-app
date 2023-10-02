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
    {{-- {{$produk->links()}} --}}
    @endisset 