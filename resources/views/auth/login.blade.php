@extends('layout.auth')
@section('content')
    <div class="row">
        <div class="col-sm-6 py-auto text-center" id="left">
            <div class="">
                <h1 class="mt-5 pt-3"><i class="bi bi-handbag mx-2"></i><span>SIMS</span> Web App</h1>
                <h2 class="mt-5">Halo, Selamat Datang!</h2>
                <p class="mb-3">Masuk atau buat akun untuk memulai</p>

                <div class="text-center">
                    <form action="{{url('/auth')}}" method="post">
                        @csrf @method('post')
                        <div class="form-group has-icon-left mb-3">
                            <div class="position-relative">
                                <input type="email" class="form-control mx-auto" placeholder="Masukkan email anda" id="input" name="email" >
                                <div class="form-control-icon">
                                    <i class="bi bi-person" id="icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-icon-left mb-3">
                            <div class="position-relative">
                                <input type="password" class="form-control mx-auto" placeholder="Masukkan password anda" id="input" name="password" >
                                <div class="form-control-icon">
                                    <i class="bi bi-lock" id="icon"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger mt-3" id="btn-login">Masuk</button>
                        <p class="mx-5 mt-1">Belum punya akun? <a href="{{url('/register')}}">Daftar</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 text-center" id="right">
            <img src="{{asset('images/person.png')}}" alt="" class="img-fluid py-5 mx-auto my-auto" srcset="">
        </div>
    </div>
@endsection