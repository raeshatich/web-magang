<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $informasi = Informasi::all();
        $ketentuan = DB::table('ketentuans')
        ->select('nama_ketentuan')
        ->get();


        return view('informasi.index', [
            'informasi' => $informasi,
            'ketentuan' => $ketentuan
        ]);  

        // $informasi = Informasi::all();
        // return view('informasi.index', compact('informasi'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $informasi = Informasi::all();
        return view('informasi.crud', compact('informasi')
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInformasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('format')->store('post-file');
        // if($file = $request->file('format')){
        //     $file = $request->file('format')->store('post-file');
            
        // }
        $file = $request->file('format');
        $namafile = $file->getClientOriginalName();
        $file->storeAs('post-file', $namafile);
        
        Informasi::create([
                'nama_informasi'=> $request->name_dokumen,
                'format' => $namafile,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
            
            ]);
        return redirect('/infocrud')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInformasiRequest  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $informasi = Informasi::find($id);
        $informasi-> nama_informasi      = $request->name_dokumen;
        $informasi-> format            = $request->format;
        $informasi-> updated_at           = date('Y-m-d H:i:s');

        $informasi->save();
        return redirect('/infocrud')->with('success', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        $informasi->delete();

        return redirect('/infocrud')->with('success', 'Data berhasil dihapus');
    }
}
