<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'telp',
        'hp',
        'email',
        'kontak',
        'tipe_pelanggan',
        'due',
        'jenis_kontrak_x',
        'nama_tagihan',
        'alamat_tagihan',
        'telp_tagihan',
        'npwp_tagihan',
        'pic_tagihan',
        'deleted',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
