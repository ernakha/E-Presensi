<?php

namespace App\Http\Controllers;

use App\Exports\PresenExport;
use App\Models\Guru;
use App\Models\Presen;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PresenController extends Controller
{
    
    public function index(){
        $datapresen = Presen::all();
        return view('admin.presen.view_presen', ['datapresen' => $datapresen]);
    }

    public function add(){
        $datapresen = Presen::all();
        return view('admin.presen.add_presen', compact('datapresen'));
    }

    public function store(Request $request){
        $datapresen = new Presen();
        $datapresen->id = $request->id;
        $datapresen->guru = $request->guru;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->save();
        return redirect()->route('presen.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editpresen = Presen::find($id);
        return view('admin.presen.edit_presen', compact('editpresen'));
    }

    public function update(Request $request, $id){
        $datapresen = Presen::find($id);
        $datapresen->guru = $request->guru;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->update();
        return redirect()->route('presen.view')->with('message', 'data presen berhasil diubah!');
    }

    public function delete($id){
        $datapresen = Presen::find($id);
        $datapresen->delete();
        return redirect()->route('presen.view')->with('message', 'data presen berhasil dihapus!');
    }
    
    public function export(){
        return Excel::download(new PresenExport, 'Presensi.xlsx');
    }

}
