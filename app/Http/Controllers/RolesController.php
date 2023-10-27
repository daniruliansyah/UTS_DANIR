<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    public function index(){
        $role = DB::table('role')->get();
        return view('roles.index', compact('role'));
    }

    public function create(){
        return view('roles.create');
    }

    public function store(Request $request){
        DB::table('role')->insert([
            'id_role' => $request->id,
            'nama_role' => $request->nama,
        ]);
        return redirect('roles');
    }

    public function edit($id){
        $role =  DB::table('role')
                ->where('id_role', $id)
                ->first();
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id) {
        DB::table('role')->where('id_role', $id)->update([
            'nama_role' => $request->nama,
        ]);
        return redirect('roles');
    }
}