@extends('layout.content')
@section('content')
<section class="layout_padding what_we_do">
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="full text_align_center">
                <div class="card-body">
                <h2>PENGUMUMAN HASIL AKHIR SELEKSI PROGRAM MAGANG KOMISI PEMBERANTASAN KORUPSI</h2>
                <h1>Sehubungan telah selesainya seluruh rangkaian seleksi, berikut disampaikan nama-nama peserta yang dinyatakan terpilih dalam Program Magang KPK T.A 2022:</h1>
            
                <div class="table-responsive">
               
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Unit</th>
                                <th>Posisi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                             $no =1;   
                            @endphp
                            @foreach ($anggota as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->nama_anggota}}</td>
                                <td>{{$row->nama_unit}} </td>
                                <td>{{$row->nama_posisi}}</td>
                                
            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

    </div>
  </div>
</section>

 
@endsection