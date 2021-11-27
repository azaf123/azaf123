@extends('template.master')
@section('title','Courier')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Courier</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ url('/courier/create')}}" class="btn btn-primary" role="button">
                    Add New Courier
                </a>
            </div>
            
            <div class="row">
                <div class="col">
                    <!-- status  -->
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Courier</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Courier Name</td>
                                        <td>Total Ongkir</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courier as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->courier_name}}</td>
                                            <td>{{$item->total_ongkir}}</td>
                                            <td>
                                                <a href="{{url('/courier/'.$item->id).'/edit'}}" class="btn btn-info">Edit</a>
                                                <form method="POST" action="{{url('/courier/'.$item->id)}}">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
             
            </div>
            <!-- /.col -->
        </div>
    </section>
</div>
@endsection