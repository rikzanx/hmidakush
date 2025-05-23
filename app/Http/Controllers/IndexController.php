<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publikasi;
use App\Berita;
use App\Galeri;
use App\Sambutan;

class IndexController extends Controller
{
    public function index()
    {
        $publikasi_list = Publikasi::with('kategori',"komentar")->orderBy('tanggal_rilis', 'DESC')->limit(4)->get();
        $berita_list = Berita::with('kategori',"komentar")->orderBy('tanggal_rilis', 'DESC')->limit(4)->get();
        $galeri_list = Galeri::orderBy('created_at', 'DESC')->limit(3)->get();
        $sambutan = Sambutan::first();
        return view('index', [
            'publikasi_list' => $publikasi_list,
            'berita_list' => $berita_list,
            'galeri_list' => $galeri_list,
            'sambutan' => $sambutan
        ]);
    }
}
