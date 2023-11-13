<?php

namespace App\Http\Controllers;

use App\Models\Syarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Requests\StoreSyaratRequest;
use App\Http\Requests\UpdateSyaratRequest;

class SyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syarat = DB::table('syarats')
        ->select('nama_syarat')
        ->get();
        $tata = DB::table('tatas')
        ->select('nama_tata')
        ->get();


        return view('syarat.index', [
            'syarat' => $syarat,
            'tata' => $tata
        ]);
    }
    public function crud()
    {
        $syarat = Syarat::all();
        return view('syarat.crud', compact('syarat'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSyaratRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Syarat::create([
            'nama_syarat' => $request->nama_syarat,            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
        return redirect('/crud')->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function show(Syarat $syarat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function edit(Syarat $syarat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSyaratRequest  $request
     * @param  \App\Models\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $syarat = Syarat::find($id);
        $syarat->nama_syarat    =$request->namasyarat_edit;
        $syarat->updated_at     = date('Y-m-d H:i:s');

        $syarat->save();
        return redirect('/crud')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $syarat = Syarat::find($id);
        $syarat->delete();

        return redirect('/crud')->with('success', 'Data berhasil dihapus');
    }
}
