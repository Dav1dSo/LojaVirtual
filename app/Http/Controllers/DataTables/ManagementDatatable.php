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
                    // $actionBtn = 
                    //     '<a href="javascript:void(0)" name="edit" id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info text-white">Editar</a> 
                    //      <a href="javascript:void(0)" class="btn btn-danger">Excluir</a>
                    //     ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
} 