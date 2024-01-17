<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;
use App\Services\OtonetBackendServices\Supplier as SupplierService;
use App\Models\Master\MerkModel;

class Merk extends Controller
{
    public function datatable()
    {
        $data = MerkModel::select('*');
        return Datatables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}
