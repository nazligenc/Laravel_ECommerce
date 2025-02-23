@php use App\Http\Controllers\AdminPanel\CategoryController; @endphp
@extends('layouts.adminbase')
@section('title','Add Category')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Category

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Category</li>

            </ol>
        </section>


        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <div class="box box-primary">
                        <div class="box-header">

                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('admin.category.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="parent_id">
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($data as $rs)
                                            <option
                                                value="{{$rs->id}}">{{CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description"
                                           placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <input type="file" class="custom-file-input" name="image">
                                </div>

                                <!-- /.box-body -->
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>

                                    </select>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


                <!-- /.content -->
            </div><!-- /.content-wrapper -->
@endsection
