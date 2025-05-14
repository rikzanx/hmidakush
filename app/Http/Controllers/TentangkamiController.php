<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepengurusan;

class TentangkamiController extends Controller
{
    public function index()
    {
        return view('frontend.tentang kami');
    }

    public function struktur()
    {
        $kepengurusan = Kepengurusan::first();
        return view('frontend.struktur-kepengurusan',[
            'kepengurusan' => $kepengurusan
        ]);
    }

    
}
