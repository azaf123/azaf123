@extends('templatefrontend.master')
@section('title'.'Pembayaran')
@section('content')
<!-- Awala Metode Pembayaran -->
<section id="Metode-Pembayaran">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Metode <span>Pembayaran</span></h1>
            </div>
        </div>
        <div class="bg-pembayaran mt-lg-3">
            <div class="row form-group">
                <div class="col-lg-3 label">
                    <input class="form-control" type="text" placeholder="Batas waktu pembayaran">
                </div>
                <div class="col-lg-9 isi">
                    <input class="form-control" type="text" placeholder="12.00 WIB 24/07/2021">
                </div>
            </div>
        </div>
        <div class="bg-pembayaran mt-lg-3">
            <div class="row form-group">
                <div class="col-lg-3 label">
                    <input class="form-control" type="text" placeholder="Indomaret">
                </div>
                <div class="col-lg-8 isi">
                    <input class="form-control" type="text" placeholder="SHP854DEWZZ7TP">
                </div>
                <div class="col-lg-1 salin">
                    <div class="btn btn-outline-warning">
                        Salin
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pembayaran mt-lg-3">
            <div class="row form-group">
                <div class="col-lg-3 label">
                    <input class="form-control" type="text" placeholder="Total Pembayaran">
                </div>
                <div class="col-lg-8 isi">
                    <input class="form-control" type="text" placeholder="Rp 95.000">
                </div>
                <div class="col-lg-1">
                    <div class="btn btn-outline-warning">
                        Salin
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2 pt-3">
            <div class="col-lg-6 mb-5 text-center">
                <a href="index.html">
                    <div class="btn
                                btn-warning">Back to Home
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5 text-center">
                <a href="History-Transaksi.html">
                    <div class="btn
                                btn-warning">Cek History Belanja <i class="fa fa-long-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Metode Pembayaran -->
@endsection