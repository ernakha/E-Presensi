<?php

namespace App\Http\Controllers;

use App\Models\Presen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    
    public function index(){
        return view('guru.index');
    }
    
    public function guru(){
        $datapresen = Presen::all();
        // return view('guru.presen.view_presen', compact('datapresen'));
        if ($user = Auth::user()) {
            if (Auth::user()->id == '1') {
                return view('admin.presen.view_presen', compact('datapresen'));
            } else {
                $user = Auth::user()->id;
                $data = Presen::where('users_id', $user)->get();
                return view('guru.presen.view_presen', compact('datapresen'));
            }
        }
    }

    public function guruadd(){
        $data = DB::table('users')->get();
        return view('guru.presen.add_presen', compact('data'));
    }

    public function gurustore(Request $request){
        $datapresen = new Presen();
        $datapresen->id = $request->id;
        $datapresen->users_id = $request->users_id;
        $datapresen->keterangan = $request->keterangan;
        $datapresen->save();
        return redirect()->route('gurupresen.view')->with('message', 'Data berhasil ditambahkan!');
    }
}
