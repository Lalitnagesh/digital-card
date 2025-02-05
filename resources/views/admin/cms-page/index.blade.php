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
                        <h1 class="m-0">CMS Pages</h1>
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
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="col-6">
                                    <h3 class="card-title">CMS Pages</h3>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <a href="{{ route('admin.cms-page.create') }}" class="btn btn-primary btn-sm">Add <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('admin.cms-page.tabel')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
