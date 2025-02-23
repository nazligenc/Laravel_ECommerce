@php use App\Http\Controllers\AdminPanel\CategoryController; @endphp
@extends('layouts.adminbase')
@section('title','Product List')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="{{route('admin.product.create')}}" class="btn btn-block btn-primary" style="width: 150px">Add
                Product</a>
            <br>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Product List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Product List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->quantity}}</td>


                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height:60px;width:50px">
                                    @endif

                                </td>
                                <td>
                                    <img src="{{asset('assets')}}/img/image_gallery.png">
                                </td>

                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"
                                       class="btn btn-block btn-info btn-sm">Edit</a></td>
                                <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}"
                                       class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}"
                                       class="btn btn-block btn-success btn-sm">Show</a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
