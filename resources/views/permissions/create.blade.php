@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Permissions') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <form method="POST" class="form-horizontal" action="">
                                @csrf

                                <div class="form-group row">
                                    <label for="InputName" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" required placeholder="artikel-list">
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Guard Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="guard_name" required placeholder="Web">
                                </div>
                                </div>
                                
                                <div class="card-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="{{ route('permissions.index') }}" class="btn btn-default float-right">Kembali</a>
                                </div>
                                
                                </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
