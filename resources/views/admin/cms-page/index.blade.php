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
                            <div class="card-header">
                                <h3 class="card-title">CMS Pages</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="cmsPages" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Url</th>
                                            <th>Created On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cmsPageData as $data)
                                            <tr>
                                                <td>{{ @$data->id }}</td>
                                                <td>{{ @$data->title }}</td>
                                                {{-- <td>{{ @$data->url }}</td> --}}
                                                <td>{{ @$data->created_at }}</td>
                                                <td>
                                                    @if ($data->status == 1)
                                                        <a href="javascript:void(0)" class="cmsPageStatus"
                                                           id="page-{{ $data->id }}" page_id="{{ $data->id }}">
                                                           <i class="fas fa-toggle-on" status="Active"></i>
                                                        </a>
                                                    @else
                                                        <a href="javascript:void(0)" class="cmsPageStatus"
                                                           id="page-{{ $data->id }}" page_id="{{ $data->id }}">
                                                           <i class="fas fa-toggle-off" style="color:grey;" status="Inactive"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
