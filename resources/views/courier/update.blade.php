@extends('template.master')
@section('title','Edit Courier')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Courier</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Courier</li>
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
                        <h3 class="card-title">Edit Courier</h3>
                    </div>
                    <form method="POST" action="{{url('/courier/'.$courier->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="couriername">Courier Name</label>
                                <input type="text" class="form-control" name="couriername" id="couriername" placeholder="Enter Courier Name" value="{{$courier->courier_name}}">
                            </div>
                            <div class="form-group">
                                <label for="totalongkir">Total ongkir</label>
                                <input type="number" class="form-control" name="totalongkir" id="totalongkir" placeholder="Enter Total Ongkir " value="{{$courier->total_ongkir}}">
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