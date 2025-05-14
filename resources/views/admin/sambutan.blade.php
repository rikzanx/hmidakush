@extends('layouts.admin')

@section('row-content')

<div class="container-fluid">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        Sambutan
      </div>
      <div class="card-body">

            <form method="post" action="{{ route('admin.sambutan.store') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                @if(session()->has('danger'))
                <div class="text-danger">
                    {{ session()->get("danger")}}
                </div>
                @endif
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $sambutan->nama }}" class="form-control" placeholder="Isi Nama">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" value="{{ $sambutan->jabatan }}" class="form-control" placeholder="Isi Jabatan">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Isi Sambutan</label>
                    <textarea class="form-control" id="editor" name="isi"
                        placeholder="Isi Sambutan .." rows="5">{{ $sambutan->isi }}</textarea>
                </div>
                <img src="{{ asset($sambutan->gambar) }}" class="img-fluid" alt="">
                <br>
                <div class="form-group">
                    <label>Foto (kosongi foto jika tidak ingin diganti)</label>
                    <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

    </div>
    </div>
  
  </div>
    
@endsection

@section('script')
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
    ClassicEditor.create( document.querySelector( '#editor' ), {
            ckfinder: {
                uploadUrl: '{{ route('upload.foto.berita').'?_token='.csrf_token() }}',
            }
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]

		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
@endsection