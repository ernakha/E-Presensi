<?php

namespace App\Http\Controllers;

use App\Models\Presen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    
    public function index(){
        return view('guru.index');
    }
    
    public function guru(){
        $datapresen = Presen::all();
        return view('guru.presen.view_presen', ['datapresen' => $datapresen]);
    }

    public function guruadd(){
        $datapresen = Presen::all();
        return view('guru.presen.add_presen', compact('datapresen'));
    }

    public function gurustore(Request $request){
        $datapresen = new Presen();
        $datapresen->id = $request->id;
        $datapresen->guru = $request->guru;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->save();
        return redirect()->route('gurupresen.view')->with('message', 'Data berhasil ditambahkan!');
    }
}
