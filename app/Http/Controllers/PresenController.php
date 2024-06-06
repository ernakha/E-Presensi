<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Presen;
use Illuminate\Http\Request;

class PresenController extends Controller
{
    
    public function index(){
        $datapresen = Presen::all();
        return view('admin.presen.view_presen', ['datapresen' => $datapresen]);
    }

    public function add(){
        $datapresen = Presen::all();
        $dataguru = Guru::all();
        return view('admin.presen.add_presen', compact('datapresen', 'dataguru'));
    }

    public function store(Request $request){
        $datapresen = new Presen();
        $datapresen->id = $request->id;
        $datapresen->guru_id = $request->guru_id;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->save();
        return redirect()->route('presen.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editpresen = Presen::find($id);
        $dataguru = Guru::all();
        return view('admin.presen.edit_presen', compact('editpresen', 'dataguru'));
    }

    public function update(Request $request, $id){
        $datapresen = Presen::find($id);
        $datapresen->guru_id = $request->guru_id;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->update();
        return redirect()->route('presen.view')->with('message', 'data presen berhasil diubah!');
    }

    public function delete($id){
        $datapresen = Presen::find($id);
        $datapresen->delete();
        return redirect()->route('presen.view')->with('message', 'data presen berhasil dihapus!');
    }
    
    // public function export(){
    //     return Excel::download(new Exportpresen, 'Pemesanan.xlsx');
    // }

}
