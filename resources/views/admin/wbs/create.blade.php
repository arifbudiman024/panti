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

@section('side_wbs')
    active
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href='/admin/pjlp'>Data WBS </a> | Tambah Data</h1>
    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('wbs.index')}}"><button class="btn btn-md btn-success"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                    <h3 class="mb-0"></h3>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header border-0 py-3">
                            <div class="row">
                                <h6 class="m-0 font-weight-bold text-primary">Data Diri WBS</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('wbs.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                                  
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Tempat Lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal Lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Agama">Agama</label>
                                    <input type="text" name="agama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <textarea class="form-control" rows="5" name="alamat"></textarea>
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
                                <img style="border:5px" width="250" height=""/>
                                <input type="file" name="photo" class="uploads">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer py-4">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{route('wbs.index')}}" class=" btn btn-danger">Batal</a>
        </form>                 
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