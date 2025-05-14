<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sambutan;
use Validator;

class AdminSambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutan = Sambutan::first();
        return view('admin.sambutan',[
            'sambutan' => $sambutan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "jabatan" => "required",
            "isi" => "required",
        ]);
        if ($validator->fails()) {
            return redirect()->route("admin.sambutan.index")->with('danger', $validator->errors()->first());
        }
        $sambutan = Sambutan::first();
        if($request->hasFile('gambar')) {
            $uploadFolder = "img/";
            $image = $request->konten;
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path($uploadFolder), $imageName);
            $image_link = $uploadFolder . $imageName;
            $sambutan->gambar = $image_link;
        }
        $sambutan->nama = $request->nama;
        $sambutan->jabatan = $request->jabatan;
        $sambutan->isi = $request->isi;
        $sambutan->save();

        return redirect()->route("admin.sambutan.index")->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
