@extends('admin.app')

@section('title')
    Bimbingan
@endsection

@section('add_css')
    <link href="/assets-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('nav_bimbingan')
    active
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800">Data Bimbingan</h1>

    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('bimbingan.create')}}"><button class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Data</button></a>
                    <h3 class="mb-0"></h3>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>tes</th>
                            <th>tes2</th>
                            <th>tes3</th>
                            <th>tes4</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
              </div>
        </div>
        <div class="card-footer py-4">
            
        </div>
    </div>

@endsection

@section('add_js')
    <script src="/assets-admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets-admin/js/demo/datatables-demo.js"></script>
@endsection