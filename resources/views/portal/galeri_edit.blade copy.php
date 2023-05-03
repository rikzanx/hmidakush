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
<div class="card">
    <div class="row gx-1">
        <div class="cols-lg-4 col-md-auto my-sm-4 ms-sm-auto me-sm-0 mx-auto mt-0 ">
            <span class="ms-3 text-lg">Galeri Dari Tiap Divisi :</span>
        </div>
        <div class="col-lg-4 col-md-5 my-sm-auto ms-sm-0 me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                            data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                            <i class="ni ni-app"></i>
                            <span class="ms-2">Kaderisasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                            data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                            <i class="ni ni-email-83"></i>
                            <span class="ms-2">Humas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                            data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                            <i class="ni ni-settings-gear-65"></i>
                            <span class="ms-2">Kominfo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table align-middle text-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Judul Gambar</th>
                    <th scope="col" class="sort" data-sort="name">Action</th>

                </tr>
            </thead>
            <tbody class="list">
                <tr>
                    <th scope="row">
                        <div class="media align-middle text-center">
                            <a href="#" class="avatar rounded-circle ">
                                <img src="../assets/img/theme/angular.jpg" class="avatar avatar-lg">
                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm">Argon Design System</span>
                            </div>
                        </div>
                    </th>
                    {{-- <td class="align-middle">
                        <a href="{{ route('portal.publikasi.edit',$p)}}" class="btn btn-icon btn-2 btn-info">
                            <i class="ni ni-ruler-pencil"></i>
                        </a>
                        <form action="{{ route('portal.publikasi.destroy',$p)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon btn-2 btn-danger">Hapus</button>
                        </form>
                    </td> --}}
                </tr>
            </tbody>
        </table>
    </div>

    <div class="card-footer py-4">
        <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                        <i class="fas fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
</div>


@endsection