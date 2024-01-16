<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'telp',
        'kontak',
        'npwp', 
        'no_rekening', 
        'nama_bank',
        'deleted',
        'created_by',
        'created_at',
        'updated_by'
    ];
}
