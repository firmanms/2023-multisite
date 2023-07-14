@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Roles') }}</h1>
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
                                    <input type="text" class="form-control" name="name" readonly required value="{{ $role->name }}" placeholder="Admin Perangkat">
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Permissions</label>
                                <div class="col-sm-10">
                                    <table class="table table-striped">
                                        <thead>
                                            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                            <th scope="col" width="20%">Name</th>
                                            <th scope="col" width="1%">Guard</th>
                                        </thead>

                                        @foreach($permission as $permissions)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"
                                                    name="permission[{{ $permissions->name }}]"
                                                    value="{{ $permissions->name }}"
                                                    onclick="return false;"
                                                    class='permission'
                                                    {{ in_array($permissions->id, $rolePermissions)
                                                        ? 'checked'
                                                        : '' }}>
                                                </td>
                                                <td>{{ $permissions->name }}</td>
                                                <td>{{ $permissions->guard_name }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                </div>

                                <div class="card-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="{{ route('roles.index') }}" class="btn btn-default float-right">Kembali</a>
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
