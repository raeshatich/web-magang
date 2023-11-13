<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Unit;
use App\Models\Posisi;
use App\Http\Requests\StoreAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota  = Anggota::join('units', 'units.id', '=', 'anggotas.unit_id')
        ->join('posisis','posisis.id','=','anggotas.posisi_id')
        ->get();

        $unit = Unit::all();

        $posisi = Posisi::all();
        return view('anggota.index',
        compact('anggota','unit','posisi'));
        // $anggota = Anggota::all();
        // return view('anggota.index', compact(
        //     'anggota'
        // ));
        // $anggota = DB::table('anggotas')
        // ->select('unit_id', 'nama_anggota', 'posisi_id')
        // ->get();
        
        // return view('anggota.index', [
            
        //     'anggota' => $anggota
        // ]);
    }
    public function crud()
    {
       
        $anggota  = Anggota::join('units', 'units.id', '=', 'anggotas.unit_id')
        ->join('posisis','posisis.id','=','anggotas.posisi_id')
        ->get();

        $unit = Unit::all();

        $posisi = Posisi::all();
        return view('anggota.crud',
        compact('anggota','unit','posisi'));
       
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $anggota  = Anggota::join('units', 'units.id', '=', 'anggotas.unit_id')
        //             ->join('posisis','posisis.id','=','anggotas.posisi_id')
        //             ->select('anggotas.*','units.nama_unit',  'posisis.nama_posisi')
        //             ->get();
    
        // $unit = Unit::all();
    
        // $posisi = Posisi::all();
        // return view('anggota.crud',
        // compact('anggota','unit','posisi'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnggotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Anggota::create([
            'unit_id'=>$request->unit_id,
            'nama_anggota'=> $request->nama_anggota,
            'posisi_id'=>$request->posisi_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')

        ]);

        return redirect('/anggotacrud')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnggotaRequest  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);
        $anggota-> unit_id               = $request->unit_id;
        $anggota-> nama_anggota           = $request->nama_anggota;
        $anggota-> posisi_id              = $request->posisi_id;
        $anggota-> updated_at            = date('Y-m-d H:i:s');

        $anggota->save();
        return redirect('/anggotacrud')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();

        return redirect('/anggotacrud')->with('success','Data Berhasil Dihapus');
    }
}
