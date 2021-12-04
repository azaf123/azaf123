@extends('templatefrontend.master')
@section('title'.'Keranjang')
@section('content')
<!-- Awal Keranjang -->
<section id="Keranjang">
    <div class="container">
        <div class="col keranjang mt-2">
            <h1>Keranjang</h1>
        </div>
        <div class="row mt-4">
            <!-- <div class="col-lg-1 radio">
                            <form>
                                <input type="radio">
                            </form>
                        </div> -->
            @foreach($cart as $item)
            <div class="col-lg-12">
                <div class="bg-keranjang">
                    <div class="container">
                        <div class="row mt-4 pt-3 text-center judul">
                            <div class="col-lg-2">
                                <h6>Gambar</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6>Nama barang</h6>
                            </div>
                            <div class="col-lg-4">
                                <h6>Quantity</h6>
                            </div>
                            <div class="col-lg-2">
                                <h6>Action</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row aksi">
                            <div class="col-lg-2">
                                <img src="{{asset('img/'. $item->product->image )}}" alt="">
                            </div>
                            <div class="col-lg-4">
                                <h5>{{$item->product->product_name}}</h5>
                                <div class="row mt-lg-5">
                                    <div class="col harga">
                                        <h5>IDR <span>{{$item->product->product_price}}</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h5>{{$item ->product_qty}}</h5>
                            </div>
                            <div class="col-lg-2 text-center">
                                <i class="fa fa-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
<!-- Akhir Keranjang -->

<!-- Awala Alamat -->
<section id="Alamat">
    <div class="container">
        <div class="col alamat mt-5">
            <h5>Alamat</h5>
        </div>
        <div class="row">
            <div class="col mt-lg-2">
                <input class="form-control" type="text" placeholder="Masukkan alamat">
            </div>
        </div>
    </div>
</section>
<!-- Akhir Alamat -->

<!-- Transaksi -->
<section id="Transaksi">
    <div class="container">
        <div class="bg-transaksi  mt-5">
            <div class="container">
               
                <div class="form-group row">
                    <label type="text" class="col-sm-2 col-form-label">Sub
                        Total</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="subtotal">
                    </div>
                </div>
                <div class="form-group row justify-content-between">
                    <label class="col-sm-2" for="exampleFormControlSelect1">Kurir</label>
                    <div class="col-lg-2">

                        <select class="form-control">
                        
                            @foreach($courier as $item)
                            <option>{{$item->courier_name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label type="text" class="col-sm-2
                                        col-form-label">Biaya Pengiriman</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" placeholder="Biaya Pengiriman">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row
                                    justify-content-between">
                            <label class="col-sm-2" for="exampleFormControlSelect1">Pembayaran</label>
                            <div class="col-lg-3">
                                <select class="form-control text-right" aria-placeholder="Metode
                                            Pembayaran">
                                            @foreach($paymentmethod as $item)
                                    <option>{{$item->bank_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label type="text" class="col-sm-2
                                        col-form-label">Total Belanja</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" placeholder="Total Belanja">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col mb-5 text-center">
                <a href="Metode-Pembayaran.html">
                    <div class="btn btn-warning">Pesan Sekarang <i class="fa fa-long-arrow-right"></i></div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Detail Alamat-->
@endsection