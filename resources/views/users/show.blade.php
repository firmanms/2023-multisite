@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
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
                            <form method="POST" class="form-horizontal" action="{{ route('users.update', $user->id) }}">
                                @method('patch')
                                @csrf

                                <div class="form-group row">
                                    <label for="InputPerangkat_id" class="col-sm-2 col-form-label">Perangkat ID</label>
                                <div class="col-sm-10">
                                   {{ $user->perangkat_id }}
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    {{ $user->name }}
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    {{ $user->email }}
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="InputRole" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">

                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            {{ $v }}
                                        @endforeach
                                    @endif


                                </div>
                                </div>

                                <div class="card-footer">
                                {{-- <button type="submit" class="btn btn-success">Simpan</button> --}}
                                <a href="{{ route('users.index') }}" class="btn btn-default float-right">Kembali</a>
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
