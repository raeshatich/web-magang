@extends('layout.content')
@section('content')

<section class="layout_padding what_we_do">
    <div class="container">
        <div class="row">
        <div class="full text_align_center">
            <h3>Nama Pendaftar Magang di KPK</h3>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="table-responsive-xxl">
            <table id="add-row" class="display table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Universitas</th>
                        <th>Program Studi</th>
                        <th>IPK</th>
                        <th>Dokumen</th>
                                                    
                        </tr>
                    </thead>
        
                    <tbody>
                        @php
                        $no =1;   
                        @endphp
                        @foreach ($daftar as $row)
                                                    
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->nama_daftar}}</td>
                                <td>{{ $row->nik }}
                                <td>{{ $row->jk }}
                                <td>{{ $row->notel }}
                                <td>{{ $row->email }}
                                <td>{{ $row->univ }}
                                <td>{{ $row->ps }}
                                <td>{{ $row->ipk }}
                                <td><a href="{{ Storage::url('post-file/'.$row->cv) }}">{{$row->cv}}</a></td>        
                            </tr>
        
                        @endforeach        
                    </tbody>              
            </table>
            </div>
        </div>
    </div>
</section>

@endsection