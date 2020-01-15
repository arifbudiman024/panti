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
    <h1 class="h5 mb-4 text-gray-800"><a href='/admin/pjlp'>Data WBS </a> | Edit Data</h1>
    <div class="card shadow mb-4">
        @foreach($data as $w)
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
                <div class="col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header border-0 py-3">
                            <div class="row">
                                <h6 class="m-0 font-weight-bold text-primary">Data Diri WBS</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('wbs.update',$w->id_wbs) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                <input type="text" name="id_wbs" class="form-control" value="{{$w->id_wbs}}">                                  
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$w->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="Tempat Lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{$w->tempat_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal Lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="{{$w->tanggal_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="Agama">Agama</label>
                                    <input type="text" name="agama" class="form-control" value="{{$w->agama}}">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <textarea class="form-control" rows="5" name="alamat">{{$w->nama}}</textarea>
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
                                @if($w->photo)
                                    <img src="{{url('/assets-admin/img/asn/'.$w->photo)}}" style="border:5px" width="250" />
                                @else
                                    <img src="{{url('/assets-admin/img/asn/default.jpg')}}" style="border:5px" width="250" />
                                @endif 
                                <input type="file" name="photo" class="uploads">
                                <input type="text" name="hidden_photo" class="form-control" value="{{$w->photo}}">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer py-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('wbs.index')}}" class=" btn btn-danger">Batal</a>
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