@extends('admin.layout.layout')
@section('content')
    <style>
        .readonly{
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
                    <div class="col-md-6 mx-auto">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Password</h3>
                            </div>
                            <form action="{{ route('admin.updatedetails') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="admin_email">Name</label>
                                        <input type="text" name="admin_name" class="form-control" placeholder="Enter Name" value="{{ Auth::guard('admin')->user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="admin_email">Email address</label>
                                        <input type="email" name="admin_email" id="admin_email" class="form-control" placeholder="Enter email" value="{{ Auth::guard('admin')->user()->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="admin_email">Contact Number</label>
                                        <input type="number" name="admin_number" class="form-control" placeholder="Enter Number" value="{{ Auth::guard('admin')->user()->mobile }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="admin_email">Profile Image</label>
                                        <input type="file" name="image" class="form-control" accept=".jpg, .jpeg, .png">
                                    </div>
                                    {{-- @dd(Auth::guard('admin')->user()) --}}
                                    <div>
                                        <img src="{{ asset('admin/images/'.Auth::guard('admin')->user()->image) }}" alt="Admin Image">
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
