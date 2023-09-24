<?php

namespace App\Http\Controllers\DataTables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produtcs;
use Illuminate\Support\Facades\DB;
use DataTables;

class ManagementDatatable extends Controller
{
    public function GetProducts(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('products')->get();
            return dataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $actionBtn = view('components.buttonsActions', ['id' => $data->id]);
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
} 