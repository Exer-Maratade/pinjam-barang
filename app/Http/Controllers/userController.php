<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
     public function index()
    {
        $user = User::all();
        return view('layouts.tambahUser', [
        'user' => $user,
        'title' => 'tambah user',
        'active' => 'tamah user'
    ]);
    }

    public function store (Request $request) {
        
        $validatedData = $request->validate([
            'name'=> 'required | max:355',
            'nrp'=> ['required', 'min:8', 'max:8', 'unique:users'],
            'pangkat'=> 'required',
            'jabatan'=> 'required',
            'email'=> ['required', 'email:dns','unique:users'],
            'level' => 'required',
            'password' => ['required', 'min:8', 'max:16']
         ]);

         
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

// $request->session()->flash('success', 'Registrasi Berhasil, Silahkan Login');


        return redirect('/tambahUser')->with('berhasil', 'Tambah User berhasil');
        
    }


    public function hapus(Request $request, $id){
        $user = User::find($id);
        $user -> delete($request->all());

        if($request){
            return redirect('/tambahUser')->with('hapus', 'data berhasil dihapus');
        }
    }
    
}
