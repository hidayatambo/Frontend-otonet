<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeModel extends Model
{
    use HasFactory;
    protected $table = 'tipe';
    protected $fillable = [
        'nama_tipe',
        'id_merk',
        'deleted',
        'created_by',
        'created_at',
        'updated_by'
    ];
    public function merk()
    {
        return $this->belongsTo(MerkModel::class, 'id_merk');
    }
}
