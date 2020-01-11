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

@section('side_asn')
    active
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href='/admin/asn'>Data ASN </a> | Detail Data</h1>
    <div class="card shadow mb-4">
        @foreach($data as $a)
        <div class="card-header border-0">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('asn.index')}}"><button class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                    <h3 class="mb-0"></h3>
                </div>
                <div class="col-md-6">
                    <form action="{{route('asn.destroy',$a->id_asn)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-sm btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
                    </form>
                    <a href="{{route('asn.edit',$a->id_asn)}}"><button class="btn btn-sm btn-outline-warning float-right"><i class="fa fa-pen"></i></button></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header border-0 py-3">
                            <div class="row">
                                <h6 class="m-0 font-weight-bold text-primary">Data Diri ASN</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="NIP">NIP</label>
                                    <input type="text" name="nip" class="form-control" value="{{$a->nip}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="NRK">NRK</label>
                                    <input type="text" name="nrk" class="form-control" value="{{$a->nrk}}" disabled>
                                </div>                                   
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$a->nama}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="{{$a->jabatan}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Golongan">Golongan</label>
                                    <input type="text" name="golongan" class="form-control" value="{{$a->golongan}}" disabled>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header border-0 py-3">
                            <div class="row">
                                <h6 class="m-0 font-weight-bold text-primary">Photo</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <img src="{{url('/assets-admin/img/asn/'.$a->photo)}}" style="border:5px" width="250" height=""/>
                            </div>
                        </form> 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
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