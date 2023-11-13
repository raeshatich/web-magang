@extends('layout.content')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success col-md-8 offset-md-2 alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container">
    <div class="row">

       <div class="col-md-8 offset-md-2">
          <div class="full text_align_center">
            <h3>Menu Informasi</h3>
                    <p>Informasi dokumen tentang Magang di KPK</p>
                 </div>
                 <div class="full">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Daftar Dokumen</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddinformasi">
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
                                            <th>Nama Informasi</th>
                                            <th>Format</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                      
                                     <tbody>
                                        @php
                                         $no =1;   
                                        @endphp
                                        @foreach ($informasi as $row)
                                            
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->nama_informasi}}</td>
                                            <td> <a href="{{ Storage::url('post-file/'.$row->format) }}">{{$row->format}}</a> </td>
                                            <td>
                                            <a href="#modalEditinformasi{{$row->id}}" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="#modalHapusinformasi{{$row->id}}" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
                                            </td>

                                        @endforeach
                                    </tbody>
                                </table>
            </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalAddinformasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/infocrud/store" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Informasi</label>
                    <input type="text" name="name_dokumen" class="form-control" placeholder="Nama Informasi..." required>
                </div>

                <div class="mb-3">
                    <label for="format" class="form-label">Format</label>
                    <input class="form-control" name="format" type="file" id="format" placeholder="File Informasi..." required>
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

 @foreach($informasi as $d)
<div class="modal fade" id="modalEditinformasi{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/infocrud/{{$d->id}}/update" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">

                <input type="hidden" value="{{$d->id}}" name="id" required>

                <div class="form-group">
                    <label>Nama informasi</label>
                    <input type="text" value="{{$d->name_dokumen}}" name="name_dokumen" class="form-control" placeholder="Nama Posisi..." required>
                </div>
                <div class="mb-3">
                    <label for="format" class="form-label">Format</label>
                    <input class="form-control" name="format" type="file" id="format" placeholder="File informasi..." required>
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

@foreach($informasi as $g)
<div class="modal fade" id="modalHapusinformasi{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/infocrud/{{$g->id}}/destroy" enctype="multipart/form-data" method="GET">
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
