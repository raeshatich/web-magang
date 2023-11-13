<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::all();
        return view('unit.index', compact('unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Unit::all();
        return view('anggota.unit', compact('unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Unit::create([
            'nama_unit' =>$request->nama_unit,
            'deskripsi' =>$request->deskripsi,
            'created_at' => date('Y-m-d H:i:s'),
             'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect('/unitcrud')->with('succes', 'data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUnitRequest  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unit = Unit::find($id);
 
         $unit->nama_unit        = $request->namaunit_edit;
         $unit->deskripsi        = $request->deskripsi_edit;
         $unit->updated_at            = date('Y-m-d H:i:s');
 
         $unit->save();
         return redirect('/unitcrud')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
         $unit->delete();
 
         return redirect('/unitcrud')->with('success','Data Berhasil Dihapus');
    }
}
