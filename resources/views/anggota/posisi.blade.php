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
                                <h4 class="card-title">List Posisi</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddposisi">
                                    <i class="fa fa-plus"></i>
                                    Input Posisi
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Posisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                   <tbody>
                                        @php
                                         $no =1;   
                                        @endphp
                                        @foreach ($posisi as $row)
                                            
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->nama_posisi}}</td>
                                            <td>
                                            <a href="#modalEditposisi{{$row->id}}" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="#modalHapusposisi{{$row->id}}" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
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
        </div>
    </div>
    
</div>


<div class="modal fade" id="modalAddposisi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Input Posisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/posisicrud/store" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Posisi</label>
                    <input type="text" name="nama_posisi" class="form-control" placeholder="Nama Posisi..." required>
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

@foreach($posisi as $d)
<div class="modal fade" id="modalEditposisi{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Posisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/posisicrud/{{$d->id}}/update" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">

                <input type="hidden" value="{{$d->id}}" name="id" required>

                <div class="form-group">
                    <label>Nama Posisi</label>
                    <input type="text" value="{{$d->namaposisi_edit}}" name="namaposisi_edit" class="form-control" placeholder="Nama Posisi..." required>
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

@foreach($posisi as $g)
<div class="modal fade" id="modalHapusposisi{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Posisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/posisicrud/{{$g->id}}/destroy" enctype="multipart/form-data" method="GET">
                @csrf 
            <div class="modal-body">

                <input type="hidden" value="{{$g->id}}" name="id" required>

                <div class="form-group">
                    <h4>Apakah Anda Ingin Menghapus Data ini?</h4>
                </div>

               
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
                </div>

            </form>
            </div>
        </div>
    </div>

</div>
@endforeach 

@endsection
