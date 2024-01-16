<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;
use App\Services\OtonetBackendServices\Supplier as SupplierService;
use App\Models\Master\PelangganModel;

class Pelanggan extends Controller
{
    public function datatable()
    {
        $data = PelangganModel::select('*');
        return Datatables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}
