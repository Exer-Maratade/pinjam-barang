<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function store(Request $request, $id)
    {
        $transaksi = Transaksi::create([
            'id_user' => Auth::user()->id,
            'id_barang' => $id,
        ]);
        
        return redirect()->back()->with('berhasil', 'Permintaan peminjaman berhasil dikirim');
    }

    public function permintaan()
    {
        $items = Transaksi::where('status', 1)->get();
        // dd($items);
        return view('layouts.permintaan', [
            'items' => $items,
        ]);
    }
    
    public function pengembalian()
    {
        $items = Transaksi::where('status', 3)->get();
        // dd($items);
        return view('layouts.pengembalian', [
            'items' => $items,
        ]);
    }

    public function approve($id)
    {
        $item = Transaksi::find($id);
        $item->status = 2;
        $item->save();

        $barang = Barang::find($item->id_barang);
        $barang->tersedia = false;
        $barang->save();
        
        return redirect()->back()->with('berhasil', 'Peminjaman disetujui');
    }

    public function approvePengembalian($id)
    {
        $item = Transaksi::find($id);
        $item->status = 4;
        $item->save();

        $barang = Barang::find($item->id_barang);
        $barang->tersedia = true;
        $barang->save();
        
        return redirect()->back()->with('berhasil', 'Pengembalian disetujui');
    }

    public function pinjamanSaya()
    {
        $items = Transaksi::where('id_user', Auth::user()->id)->where('status', 2)->orWhere('status', 3)->get();
        return view('layouts.pinjaman-saya', [
            'items' => $items,
        ]);
    }

    public function kembalikan($id)
    {
        $item = Transaksi::find($id);
        $item->status = 3;
        $item->save();

        // $barang = Barang::find($id);
        // $barang->tersedia = true;
        // $barang->save();
        
        return redirect()->back()->with('berhasil', 'Menunggu persetujuan pengembalian');
    }
}
