<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorsController extends Controller
{
    public function index(){
        $vendor = DB::table('vendor')
            ->select('*')
            ->get();
        return view('vendors.index', compact('vendor'));
    }
}
