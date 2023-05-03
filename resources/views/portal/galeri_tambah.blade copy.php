@extends('layouts.portal')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-white">{{ __('Galeri Management') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-body">
            <a href="/galeri" class="btn btn-success">Kembali</a>
            <br />
            <br />

            <form method="post" action="{{ route('portal.galeri.store')}}" enctype="multipart/form-data">

                {{ csrf_field() }}
                @if(session()->has('danger'))
                <div class="text-danger">
                    {{ session()->get("danger")}}
                </div>
                @endif
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group">
                    <label>Judul Gambar</label>
                    <input type="text" name="judul" class="form-control" placeholder="Isi Judul Artikel ..">
                </div>
                <div class="form-group">
                    <label for="kategori_galeri_id">Kategori Divisi :</label>
                    <select id="kategori_galeri_id" name="kategori_galeri_id" class="form-control">
                        @foreach ($kategorigaleri as $p)
                        <option value="{{ $p->id}}">{{$p->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" name="gambar" id="formFileMultiple" multiple>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>


@endsection