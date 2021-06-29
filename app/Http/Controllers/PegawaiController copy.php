<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_pegawai = \App\Models\Pegawai::all();
        return view('pegawai.index',['data_pegawai' => $data_pegawai]);
    }
    public function create(Request $request)
    {
        \App\Models\Pegawai::create($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil di input');
    }
    public function edit($id)
    {
        $data_pegawai = \App\Models\Pegawai::find($id);
        return view('pegawai.edit',['pegawai' => $data_pegawai]);
    }
    public function update(Request $request, $id)
    {
        $data_pegawai = \App\Models\Pegawai::find($id);
        $data_pegawai->update($request->all());
        return redirect('pegawai')->with('Sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $data_pegawai = \App\Models\Pegawai::find($id);
        $data_pegawai->delete();
        return redirect('/pegawai')->with('Sukses','Data berhasil dihapus');
    }
}
