@extends('template.master')
@section('title','Edit Cart')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Cart</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Cart</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- /.col -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Cart</h3>
                    </div>
                    <form method="POST" action="{{url('/cart/'.$cart->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="productid">Product Name</label>
                                <select class="form-control" id="productid" name="productid">
                                    <!-- using FOREIGN ID -->
                                    @foreach ($product as $item)
                                    @if($item->id == $cart->product_id)
                                    <option value="{{$item->id}}" selected >{{$item->product_name}}</option>
                                    @else 
                                    <option value="{{$item->id}}">{{$item->product_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="productqty">Product Quantity</label>
                                <input type="text" class="form-control  @error('productqty') is-invalid @enderror" name="productqty" id="productqty" placeholder="Enter Product quantity" value="{{$cart->product_qty}}">
                                @error('productqty')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="totalprice">Product Stock</label>
                                <input type="number" class="form-control @error('totalprice') is-invalid @enderror" name="totalprice" id="totalprice" placeholder="Enter Product Stock" value="{{$cart->total_price}}">
                                @error('totalprice')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- /.col -->
        </div>
    </section>
</div>
@endsection