<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    
    public function index(){
        $dataguru = Guru::all();
        return view('admin.guru.view_guru', ['dataguru' => $dataguru]);
    }

    public function add(){
        $dataguru = Guru::all();
        return view('admin.guru.add_guru', compact('dataguru'));
    }

    public function store(Request $request){
        $dataguru = new Guru();
        $dataguru->id = $request->id;
        $dataguru->nama = $request->nama;
        $dataguru->jabatan = $request->jabatan;
        $dataguru->nip = $request->nip;
        $dataguru->alamat = $request->alamat;
        $dataguru->save();
        return redirect()->route('guru.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $editguru = Guru::find($id);
        return view('admin.guru.edit_guru', compact('editguru'));
    }

    public function update(Request $request, $id){
        $dataguru = Guru::find($id);
        $dataguru->nama = $request->nama;
        $dataguru->jabatan = $request->jabatan;
        $dataguru->nip = $request->nip;
        $dataguru->alamat = $request->alamat;
        $dataguru->update();
        return redirect()->route('guru.view')->with('message', 'data guru berhasil diubah!');
    }

    public function delete($id){
        $dataguru = Guru::find($id);
        $dataguru->delete();
        return redirect()->route('guru.view')->with('message', 'data guru berhasil dihapus!');
    }
}
