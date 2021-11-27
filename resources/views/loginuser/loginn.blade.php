@extends('templatefrontend.master')
@section('title','Login')

@section('content')
<!-- Awal Login -->
<section id="Halaman-Login">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Login <span>Account</span></h1>
            </div>
        </div>
        <form action="{{url('/loginuser')}}" method="post">
            @csrf
            <div class="bg-login mt-3 mb-5">
                <div class="row">
                    <div class="col-lg-6 pt-5">
                        <img src="./assets/Login.png" alt="login">
                    </div>
                    <div class="col-lg-6 login">
                        <div class="form-group row email">
                            <div class="col-lg-10">
                                <label">Username/Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan username/email" value="{{old('email')}}">
                            </div>
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row password">
                            <div class="col-lg-10">
                                <label">Password</label>
                                    <input type="password" name="password" class="form-control @error('password')  is-invalid @enderror" placeholder="Masukkan password" value="{{old('password')}}">
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-10 text-right lp-password">
                                <label for="">Lupa Password?</label>
                            </div>
                        </div>
                        <div class="row mt-lg-2">
                            <div class="col-lg-10 mb-5 text-center">
                                <a href="index.html">
                                    <button type="submit" class="btn btn-warning">Login <i class="fa fa-long-arrow-right"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Akhir Login -->
@endsection