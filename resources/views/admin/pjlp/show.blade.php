@extends('admin.app')

@section('title')
    Data ASN
@endsection

@section('add_css')

@endsection

@section('nav_data')
    active
@endsection

@section('coll_data')
    show
@endsection

@section('side_pjlp')
    active
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href='/admin/pjlp'>Data PJLP </a> | Detail Data</h1>
    <div class="card shadow mb-4">
        @foreach($data as $p)
        <div class="card-header border-0">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('pjlp.index')}}"><button class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                    <h3 class="mb-0"></h3>
                </div>
                <div class="col-md-6">
                    <form action="{{route('asn.destroy',$p->id_pjlp)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-sm btn-outline-danger float-right" title="Hapus"><i class="fa fa-trash"></i></button>
                    </form>
                    <a href="{{route('pjlp.edit',$p->id_pjlp)}}"><button class="btn btn-sm btn-outline-warning float-right" title="Edit"><i class="fa fa-pen"></i></button></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header border-0 py-3">
                            <div class="row">
                                <h6 class="m-0 font-weight-bold text-primary">Data Diri PJLP</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pjlp.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input type="text" name="nik" class="form-control" value="{{$p->nik}}" disabled>
                                </div>                                  
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$p->nama}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="{{$p->jabatan}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="No HP">No. HP</label>
                                    <input type="text" name="no_hp" class="form-control" value="{{$p->no_hp}}" disabled>
                                </div>							

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow mb-4">
                        <div class="card-header border-0 py-3">
                            <div class="row">
                                <h6 class="m-0 font-weight-bold text-primary">Photo</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                @if($p->photo)
                                    <img src="{{url('/assets-admin/img/asn/'.$p->photo)}}" style="border:5px" width="250" />
                                @else
                                    <img src="{{url('/assets-admin/img/asn/default.jpg')}}" style="border:5px" width="250" />
                                @endif 
                                {{-- <img style="border:5px" width="250" height=""/>
                                <input type="file" name="photo" class="uploads"> --}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer py-4">
            {{-- <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{route('pjlp.index')}}" class=" btn btn-danger">Batal</a> --}}
        </form>                
        </div>
        @endforeach 
    </div>

@endsection

@section('add_js')
<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $(".uploads").change(readURL)
        $("#f").submit(function(){
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })
</script>

@endsection