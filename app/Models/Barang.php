<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    // protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $fillable = ['id_barang','kategori_id','jenis_barang', 'nama_barang', 'kategori', 'deskripsi', 'kondisi_barang'];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id_barang', 'id');
    }

    public function sedangMeminjam()
    {
        $transaksi = Transaksi::where('id_user', auth()->user()->id)->where('id_barang', $this->id)->get()->last();
        if ($transaksi && $transaksi->status == 1) {
            return true;
        } else {
            return false;
        }
        
    }
}
