@extends('admin.layout.layout')
@section('content')
    <style>
        .readonly {
            background-color: #7d7a7a !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard v2</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Password</h3>
                            </div>
                            <form action="{{ route('admin.cms-page.store') }}" method="POST">
                                @csrf
                                <div class="card-body row">
                                    <div class="form-group col-6">
                                        <label for="title">Title</label>
                                        <input type="title" name="title" id="title" class="form-control"
                                            placeholder="Enter title">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="url">Url</label>
                                        <input type="text" name="url" id="url" class="form-control"
                                            placeholder="Enter url">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="meta_title" name="meta_title" id="meta_title" class="form-control"
                                            placeholder="Enter meta title">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="meta_keyword">Meta Keyword</label>
                                        <input type="meta_keyword" name="meta_keyword" id="meta_keyword"
                                            class="form-control" placeholder="Enter meta title">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea name="meta_description" id="meta_description" cols="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-12 mx-1">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" value="1">
                                            <label class="custom-control-label" for="customSwitch1">Status</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
