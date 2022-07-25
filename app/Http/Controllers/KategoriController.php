<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $ktgr= Kategori::all();
        return view('layouts.kategori', [
            'ktgr' => $ktgr
        ]);
    }

    public function store(Request $request){
        $validasi = $request -> validate ([
            'kat' => ['required', 'max:20', 'unique:kategori'],
        ]);
        kategori::create($validasi);

        if($request){
            return redirect('/kategori')->with('berhasil', 'data berhasil ditambahkan');
        }else{
            return redirect('/kategori')->with('gagal', 'data gagal ditambahkan');

        }

        // Kategori::create([
        //     'kat' => $request -> kat,
        //    ]);


        //     if($request){
        //         return redirect('/kategori')->with('berhasil', 'data berhasil ditambahkan');
        //     }else{
        //         return redirect('/kategori')->with('gagal', 'data gagal ditambahkan');
        //     }
    }

    public function hapusKategori(Request $request, $id){
        $ktgr = Kategori::findorfail($id);
        $ktgr->delete();

        if($request){
            return redirect('/kategori')->with('hapus', 'data berhasil dihapus');
        }
    }
}
