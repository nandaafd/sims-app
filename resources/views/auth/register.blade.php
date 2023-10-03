@extends('layout.auth')
@section('content')
    <div class="row">
        <div class="col-sm-6 py-auto text-center" id="left">
            <div class="">
                <h1 class="mt-5 pt-3"><i class="bi bi-handbag mx-2"></i><span>SIMS</span> Web App</h1>
                <h2 class="mt-5">Halo, Selamat Datang!</h2>
                <p class="mb-3">Buat akun dulu yuk untuk memulai</p>

                <div class="text-center">
                    <form action="{{url('/register/process')}}" method="post">
                        @csrf @method('post')
                        <div class="form-group has-icon-left mb-3">
                            <div class="position-relative">
                                <input type="text" class="form-control mx-auto @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" id="input" name="nama" value="{{old('nama')}}">
                                <div class="form-control-icon">
                                    <i class="bi bi-person" id="icon"></i>
                                </div>
                            </div>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group has-icon-left mb-3">
                            <div class="position-relative">
                                <input type="text" class="form-control mx-auto @error('posisi') is-invalid @enderror" placeholder="Posisi/Jabatan" id="input" name="posisi" value="{{old('posisi')}}">
                                <div class="form-control-icon">
                                    <i class="bi bi-voicemail" id="icon"></i>
                                </div>
                            </div>
                            @error('posisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group has-icon-left mb-3">
                            <div class="position-relative">
                                <input type="email" class="form-control mx-auto @error('email') is-invalid @enderror" placeholder="Email" id="input" name="email" value="{{old('email')}}">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope" id="icon"></i>
                                </div>
                            </div>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group has-icon-left mb-3">
                            <div class="position-relative">
                                <input type="password" class="form-control mx-auto @error('password') is-invalid @enderror" placeholder="Password" id="input" name="password" >
                                <div class="form-control-icon">
                                    <i class="bi bi-lock" id="icon"></i>
                                </div>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger mt-3" id="btn-login">Daftar</button>
                        <p class="mx-5 mt-1">Sudah punya akun? <a href="{{url('login')}}">Masuk</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 text-center" id="right">
            <img src="{{asset('images/person.png')}}" alt="" class="img-fluid py-5 mx-auto my-auto" srcset="">
        </div>
    </div>
@endsection