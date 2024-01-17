<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkModel extends Model
{
    use HasFactory;
    protected $table = 'merk';
    protected $fillable = [
        'nama_merk',
        'deleted',
        'created_by',
        'created_at',
        'updated_by'
    ];
    public function tipes()
    {
        return $this->hasMany(TipeModel::class, 'id_merk');
    }
}
