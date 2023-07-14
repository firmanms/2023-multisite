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

                    {{-- <div class="alert alert-info">
                        Sample table page
                    </div> --}}

                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-success mb-2">Tambah Data</a>
                            <div class="table-responsive">
                                <table id="tbl_list"  class="table-striped display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Guard Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
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
@push('scriptss')
<script type="text/javascript">
    $(document).ready( function () {
    $.noConflict();
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#tbl_list').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ url('permissions') }}",
    columns: [
        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
        { data: 'name', name: 'name' },
        { data: 'guard_name', name: 'guard_name' },
        { data: 'action', name: 'action', orderable: false, searchable: false},
    ],
    order: [[0, 'desc']]
    });
    $('body').on('click', '.delete', function () {
    if (confirm("Delete Record?") == true) {
    var id = $(this).data('id');
    // ajax
    $.ajax({
    url: "{{ url('permissions-delete') }}",
    type:"POST",
    data: { id: id},
    dataType: 'json',
    success: function(res){
    var oTable = $('#tbl_list').dataTable();
    oTable.fnDraw(false);
    }
    });
    }
    });
    });
    </script>
{{-- <script type="text/javascript">
$(document).ready(function () {
    $.noConflict();
   $('#tbl_list').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: '{{ url()->current() }}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'guard_name', name: 'guard_name' },
            { data: 'action', name: 'action', orderable: false},

        ]
    });
 });
</script> --}}
@endpush
