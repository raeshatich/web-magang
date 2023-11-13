<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Daftar;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $unit = DB::table('units')
        ->get();
        
        return view('home', compact('unit'));
    }
    public function crud()
    {
        $daftar = Daftar::all();

        
        return view('daftar', compact('daftar'));
    }
    public function store(Request $request)
    {
        $file = $request->file('cv');
        $namafile = $file->getClientOriginalName();
        $file->storeAs('post-file', $namafile);
        
            Daftar::create([
                'nama_daftar' => $request->nama_daftar,
                'nik' => $request->nik,
                'jk' => $request->jk,
                'notel' => $request->notel,
                'email' => $request->email,
                'univ' => $request->univ,
                'ps' => $request->ps,
                'ipk' => $request->ipk,
                'cv' => $namafile,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ]);
            return redirect('/home')->with('success','Data Berhasil Disimpan');
    }
}
