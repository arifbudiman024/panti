@extends('admin.app')

@section('title')
    Profil Panti
@endsection

@section('add_css')
    
@endsection

@section('nav_profil')
    active
@endsection

{{-- @section('coll_data')
    show
@endsection

@section('side_asn')
    active
@endsection --}}

@section('content')
    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800">Profi Panti</h1>
    @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}">{{ Session::get('message') }}</div>
    @endif
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/admin/visimisi">Visi dan Misi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/sejarah">Sejarah Panti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/dasarhukum">Dasar Hukum Panti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/admin/pelayanan">Pelayanan Panti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/fasilitas">Fasilitas Panti</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
    </ul>

    <div class="card shadow mb-4">
        <div class="card-body">
            @foreach($data as $p)
            <form action="{{route('pelayanan.update',$p->id_profil)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <input type="hidden" name="id_profil" value="{{$p->id_profil}}">
                <input type="hidden" name="nama_profil" value="{{$p->nama_profil}}">
                <textarea class="form-control" rows="13" name="deskripsi">{{$p->deskripsi}}</textarea>
        </div>
        <div class="card-footer py-4">
            <button type="submit" class="btn btn-primary">Update</button>
            {{-- <a href="{{route('visimisi.index')}}" class=" btn btn-danger">Batal</a>     --}}
            </form>
            @endforeach
        </div>
    </div>

@endsection

@section('add_js')
    
@endsection