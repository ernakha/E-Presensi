<?php

namespace App\Http\Controllers;

use App\Exports\PresenExport;
use App\Models\Guru;
use App\Models\Presen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PresenController extends Controller
{
    
    public function index(){
        $datapresen = Presen::all();
        // return view('admin.presen.view_presen', compact('datapresen'));
        if ($user = Auth::user()) {
            if (Auth::user()->id == '1') {
                return view('admin.presen.view_presen', compact('datapresen'));
            } else {
                $user = Auth::user()->id;
                $data = Presen::where('users_id', $user)->get();
                return view('guru.index', compact('datapresen'));
            }
        }
    }

    public function add(){
        $datapresen = Presen::all();
        $data = DB::table('users')->get();
        return view('admin.presen.add_presen', compact('datapresen', 'data'));
    }

    public function store(Request $request){
        $datapresen = new Presen();
        $datapresen->id = $request->id;
        $datapresen->users_id = $request->users_id;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->save();
        return redirect()->route('presen.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editpresen = Presen::find($id);
        $data = DB::table('users')->get();
        return view('admin.presen.edit_presen', compact('editpresen', 'data'));
    }

    public function update(Request $request, $id){
        $datapresen = Presen::find($id);
        $datapresen->users_id = $request->users_id;
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
        return Excel::download(new PresenExport, 'Presensi-Guru Nusa.xlsx');
    }

}
