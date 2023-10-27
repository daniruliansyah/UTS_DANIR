<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{
    public function index(){
        $satuan = DB::table('satuan')
            ->select('*')
            ->orderBy('status', 'desc')
            ->get();
        return view('satuan.index', compact('satuan'));
    }
}
