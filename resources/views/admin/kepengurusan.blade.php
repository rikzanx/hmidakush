@extends('layouts.admin')

@section('row-content')

<div class="container-fluid">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        Struktur Kepengurusan
      </div>
      <div class="card-body">

            <form method="post" action="{{ route('admin.kepengurusan.store') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                @if(session()->has('danger'))
                <div class="text-danger">
                    {{ session()->get("danger")}}
                </div>
                @endif
                <img src="{{ asset($kepengurusan->konten) }}" alt="">
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="konten" id="konten">
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
                uploadUrl: '{{ route('upload.foto.publikasi').'?_token='.csrf_token() }}',
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