<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request){
        // $items= barang::all();
        // $ktgr = kategori::find();
        $kats = Barang::with('kategori')->where('tersedia', 1)->latest()->paginate();
        $pagination = 5;
        return view('layouts.barang', compact('kats'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
    
    public function terpakai(Request $request){
        // $items= barang::all();
        // $ktgr = kategori::find();
        $kats = Barang::with('kategori')->where('tersedia', 0)->latest()->paginate();
        $pagination = 5;
        return view('layouts.terpakai', compact('kats'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create(){
        $ktgr = Kategori::all();
        return view('modals.inputBarang', compact('ktgr'));
    }

    public function store(Request $request){

       Barang::create([
        'jenis_barang' => $request -> jenis_barang,
        'nama_barang' => $request -> nama_barang,
        'kategori_id' => $request -> kategori_id,
        'deskripsi' => $request -> deskripsi,
        'kondisi_barang' => $request -> kondisi_barang,
       ]);


        if($request){
            return redirect('/barang')->with('berhasil', 'data berhasil ditambahkan');
        }else{
            return redirect('/barang')->with('gagal', 'data gagal ditambahkan');

        }
    }

    public function update(Request $request, $id){

        $item = Barang::with('kategori')->find($id);
        $item -> update($request->all());


        if($request){
            return redirect('/barang')->with('update', 'data berhasil diedit');
        }
    }
    public function hapus(Request $request, $id){
        $items = Barang::find($id);
        $items -> delete($request->all());

        if($request){
            return redirect('/barang')->with('hapus', 'data berhasil dihapus');
        }
    }
}
