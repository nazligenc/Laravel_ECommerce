@extends('layouts.adminbase')
@section('title','Show Category : '.$data->title)

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            {{$data->title}}
            </h1>
                <ol class="breadcrumb">
                    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><a href="#">Show Category</a></li>

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
                            <th style="width:10px">Title</th>
                            <th> {{$data->title}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Keywords</th>
                            <th> {{$data->keywords}}</th>
                        </tr>
                        <tr>
                            <th style="width:10px">Image</th>
                            <th> {{$data->image}}</th>
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

                       </table>
                </div><!-- /.box-body -->
            </div>
            <div class="col-sm-2">
                <td><a href="/admin/category/edit/{{$data->id}}" class="btn btn-block btn-info btn-sm" style="width: 200px">Edit</a></td>
            </div>
            <div class="col-sm-2">
            <td><a href="/admin/category/delete/{{$data->id}}" class="btn btn-block btn-danger btn-sm" style="width: 200px">Delete</a></td>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
