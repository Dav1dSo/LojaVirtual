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
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="btn btn-info text-white">Edit</a> <a href="javascript:void(0)" class="btn btn-danger">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
} 