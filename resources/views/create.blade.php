@extends('layout.main')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
            <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Tambah User</h3>
                            </div>

                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="InputEmail1">Email</label>
                                        <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="Enter email">
                                        @error('email')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="InputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="InputEmail1" placeholder="Enter Name">
                                        @error('name')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="InputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
                                        @error('password')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>                                   
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
