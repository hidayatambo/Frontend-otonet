<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;
use App\Services\OtonetBackendServices\Supplier as SupplierService;
use App\Models\Master\TipeModel;

class Tipe extends Controller
{
    public function datatable()
    {
        $data = TipeModel::select('tipe.*', 'merk.nama_merk')
        ->join('merk', 'tipe.id_merk', '=', 'merk.id');
        return Datatables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}
