@extends('layout.content')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md2">
            <div class="full text_align_center">
                <h3> Menu Anggota Magang</h3>
                <p> Daftar menu anggota magang</p>
            </div>
            <div class="full">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Daftar Dokumen</h4>
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddanggota">
                                        <i class="fa fa-plus"></i>
                                        Tambah Informasi
                                    </button>
                                </div>
                            </div>
                           
    
                            <div class="card-body">
            
                                <div class="table-responsive">
                               
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Anggota</th>
                                                <th>Unit</th>
                                                <th>Posisi</th>
                                                <th>Action</th>
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
                                                <td>
                                                    <a href="#modalEditanggota{{$row->id}}" data-toggle="modal" class="btn btn-primary btn-xs"></i>Edit</a>
                                                    <a href="#modalHapusanggota{{$row->id}}" data-toggle="modal" class="btn btn-danger btn-xs"></i>Hapus</a>
                                                </td>
                            
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalAddanggota" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/anggotacrud/store" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota..." required>
                </div>
                <div class="form-group">
                    <label>Unit</label>
                    <select name="unit_id" class="form-control" required>
                        @foreach ($unit as $p)
                        <option value="" hidden="">--Pilih Unit--</option>
                        <option value="{{$p->id}}">{{$p->nama_unit}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label>Posisi</label>
                    <select name="posisi_id"  class="form-control" required>
                        @foreach ($posisi as $p)  
                        <option value="" hidden="">--Pilih Posisi--</option>  
                        <option value="{{$p->id}}">{{$p->nama_posisi}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>
            </div>
        </div>
    </div>

</div>

 @foreach($anggota as $d)
<div class="modal fade" id="modalEditanggota{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/anggotacrud/{{$d->id}}/update" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">

                <input type="hidden" value="{{$d->id}}" name="id" required>

                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" value="{{$d->nama_anggota}}" name="nama_anggota" class="form-control" placeholder="Nama Anggota..." required value="{{ old('nama_anggota') }}">
                </div>
                <div class="form-group">
                    <label>Unit</label>
                    <select name="unit_id" class="form-control" required>
                        @foreach ($unit as $p)
                        <option value="" hidden="">--Pilih Unit--</option>
                        <option value="{{$p->id}}">{{$p->nama_unit}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label>Posisi</label>
                    <select name="posisi_id"  class="form-control" required>
                        @foreach ($posisi as $p)  
                        <option value="" hidden="">--Pilih Posisi--</option>  
                        <option value="{{$p->id}}">{{$p->nama_posisi}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>
            </div>
        </div>
    </div>

    </div>
@endforeach

@foreach($anggota as $g)
<div class="modal fade" id="modalHapusanggota{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/anggotacrud/{{$g->id}}/destroy" enctype="multipart/form-data" method="GET">
                @csrf 
            <div class="modal-body">

                <input type="hidden" value="{{$g->id}}" name="id" required>

                <div class="form-group">
                    <h4>Apakah Anda Ingin Menghapus Data ini?</h4>
                </div>

               
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>
            </div>
        </div>
    </div>

</div> 
 @endforeach 
 
@endsection