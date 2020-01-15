@extends('admin.app')

@section('title')
    Laporan Shalat
@endsection

@section('add_css')
    <link href="/assets-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('nav_laporan')
    active
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800">Data Laporan Shalat</h1>

    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('laporan.create')}}"><button class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Data</button></a>
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
                            <th>Nama PJLP</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $l)
                            <td>{{$l->nama_pjlp}}</td>
                            <td>{{$l->tanggal}}</td>
                            <td>{{$l->keterangan}}</td>
                            <td>
                                <form action="{{route('laporan.destroy',$l->id_lap)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{route('laporan.show',$l->id_lap)}}" class="btn btn-sm btn-outline-info" title="detail"><i class="fa fa-info-circle"></i></a>
                                    <a href="{{route('laporan.edit',$l->id_lap)}}" class="btn btn-sm btn-outline-warning" title="edit"><i class="fa fa-pen"></i></a>
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')" title="hapus"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        @endforeach
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