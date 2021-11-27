@extends('template.master')
@section('title','Add Cart')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Cart</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Cart</li>
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
                        <h3 class="card-title">Cart</h3>
                    </div>
                    <form method="POST" action="{{url('/cart')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="productid">Product</label>
                                <select class="form-control" id="productid" name="productid">
                                    <!-- using FOREIGN ID -->
                                @foreach ($product as $item)
                                    <option value="{{$item->id}}">{{$item->product_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="productqty">Product Quantity</label>
                                <input type="number" class="form-control @error('productqty') is-invalid @enderror" name="productqty" id="productqty" placeholder="Enter Product Quantity" min="0" max="100">
                                @error('productqty')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="totalprice">Total Price</label>
                                <input type="number" class="form-control @error('totalprice') is-invalid @enderror" id="totalprice" name="totalprice" placeholder="Enter Total Price">
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