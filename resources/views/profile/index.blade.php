@extends('layout.main')
@section('content')
<h4 id="path" class="mt-5">{{ Breadcrumbs::render('produk') }}</h4>
    <div class="container">
        <div class="row">
            <div class="col mx-auto mt-5 text-center img-fluid" id="avatar-card">
                @foreach ($user as $data)          
                <div class="mt-3">
                    @if ($data->image == null)
                    <img src="{{asset('images/ppp.png')}}" id="avatar" alt="" srcset="">
                @else
                    <img src="{{asset('storage/'.$data->image)}}" id="avatar" alt="" srcset="">
                @endif
                </div>
                <ul class="mt-3">
                    <li>Nama  : {{$data->nama}}</li>
                    <li>Posisi  : {{$data->posisi}}</li>
                    <li>Email  : {{$data->email}}</li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection