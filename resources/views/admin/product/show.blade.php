@extends('layouts.adminbase')
@section('title','Show Product : '.$data->title)

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
            {{$data->title}}
            </h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Show Product</li>

                </ol>

            </section>
        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">

                    <h3 class="box-title">Detail Data</h3>
                </div><!-- /.box-header -->

                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                        <th style="width:10px">Id</th>
                        <th> {{$data->id}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Category</th>
                            <th> {{$data->category_id}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Title</th>
                            <th> {{$data->title}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Keywords</th>
                            <th> {{$data->keywords}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Description</th>
                            <th> {{$data->description}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Price</th>
                            <th> {{$data->price}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Quantity</th>
                            <th> {{$data->quantity}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Minimum Quantity</th>
                            <th> {{$data->minquantity}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Tax</th>
                            <th> {{$data->tax}}</th>
                        </tr>

                        <tr>
                            <th style="width:10px">Detail</th>
                            <th> {{$data->detail}}</th>
                        </tr>

                        <tr>
                            <th>Image</th>
                            <td>
                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" style="height:60px;width:50px">
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width:10px">Status</th>
                            <th> {{$data->status}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Created Date</th>
                            <th> {{$data->created_at}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Updated Date</th>
                            <th> {{$data->updated_at}}</th>
                        </tr>
                        <div class="col-sm-2">
                            <td><a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-block btn-info btn-sm" style="width: 200px">Edit</a></td>
                        </div>
                        <div class="col-sm-2">
                            <td><a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-block btn-danger btn-sm" style="width: 200px">Delete</a></td>
                        </div>

                       </table>
                </div><!-- /.box-body -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
