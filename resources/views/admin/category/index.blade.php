@extends('layouts.adminbase')
@section('title','Category List')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/admin/category/create" class="btn btn-block btn-primary" style="width: 150px">Add Category</a>
            <br>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Category List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Category List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody><tr>
                            <th style="width: 10px">Id</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                            <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-block btn-danger btn-sm">Delete</a></td>
                            <td><a href="/admin/category/show/{{$rs->id}}"class="btn btn-block btn-success btn-sm">Show</a></td>
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
