@extends('admin.app')

@section('title')
    Data ASN
@endsection

@section('add_css')
    <link href="/assets-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('nav_data')
    active
@endsection

@section('coll_data')
    show
@endsection

@section('side_asn')
    active
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800">Data ASN</h1>
    @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}">{{ Session::get('message') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('asn.create')}}"><button class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Data</button></a>
                    <h3 class="mb-0"></h3>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                {{-- <table class="table table-striped table-bordered" id="table"> --}}
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $a)
                        <tr>
                            <td></td>
                            <td class="py-1">
                                @if($a->photo)
                                    <img src="{{url('/assets-admin/img/asn/'.$a->photo)}}" alt="image" width="50px;" />
                                @else
                                    <img src="{{url('/assets-admin/img/asn/default.jpg')}}" alt="image" width="50px;" />
                                @endif    
                                <a href="{{route('asn.show',$a->id_asn)}}">{{$a->nama}}</a>
                            </td>
                            <td>{{$a->nip}}</td>
                            <td>{{$a->jabatan}}</td>
                            <td>{{$a->golongan}}</td>
                            <td> 
                                <form action="{{route('asn.destroy',$a->id_asn)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{route('asn.show',$a->id_asn)}}" class="btn btn-sm btn-outline-info" title="detail"><i class="fa fa-info-circle"></i></a>
                                    <a href="{{route('asn.edit',$a->id_asn)}}" class="btn btn-sm btn-outline-warning" title="edit"><i class="fa fa-pen"></i></a>
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')" title="hapus"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
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