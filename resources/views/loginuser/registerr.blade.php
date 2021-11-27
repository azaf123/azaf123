@extends('templatefrontend.master')
@section('title','Register')

@section('content')
<!-- Awal Riwayat Transaksi -->
<section id="Halaman-Register">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Halaman <span>Register</span></h1>
            </div>
        </div>
        <form action="{{url('/registeruser')}}" method="POST">
            @csrf
            <div class="bg-register mt-3">
                <div class="row">
                    <div class="col-lg-6 mt-3">
                        <img src="./assets/Login.png" alt="Register">
                    </div>
                    <div class="col-lg-6 mt-3 login">
                        <div class="form-group row nama">
                            <div class="col-lg-10">
                                <label">Nama</label>
                                    <input type="text" name="fullname" value="{{old('fullname')}}" class="form-control @error('fullname') is-invalid @enderror" placeholder="Masukkan nama anda">
                                    @error('fullname')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row email">
                            <div class="col-lg-10">
                                <label">Email Address</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row notelp">
                            <div class="col-lg-10">
                                <label">Nomor Telpon</label>
                                    <input type="number" name="phonenumber" value="{{old('phonenumber')}}" class="form-control @error('phonenumber') is-invalid @enderror" placeholder="Masukkan no telpon aktif">
                                    @error('phonenumber')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row password">
                            <div class="col-lg-10">
                                <label">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row password">
                            <div class="col-lg-10">
                                <label">Confirm Password</label>
                                    <input type="password" name="retypepassword" class="form-control @error('retypepassword') is-invalid @enderror" placeholder="Masukkan password">
                                    @error('retypepassword')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row nama">
                            <div class="col-lg-10">
                                <label">Tanggal lahir</label>
                                    <input type="date" name="birthday" value="{{old('birthday')}}" class="form-control @error('birthday') is-invalid @enderror" placeholder="Masukkan nama anda">
                                    @error('birthday')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row nama">
                            <div class="col-lg-10">
                                <label">Alamat</label>
                                    <input type="text" name="address" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror" placeholder="Masukkan nama anda">
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row nama">
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-lg-2">
                            <div class="col-lg-10 mb-5 text-center">
                                <a href="Login.html">
                                    <button type="submit" class="btn btn-warning">Registrasi <i class="fa fa-long-arrow-right"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Akhir Riwayat Transaksi -->
@endsection