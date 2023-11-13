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
                                <h4 class="card-title">List Unit</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddunit">
                                    <i class="fa fa-plus"></i>
                                    Input Unit
                                </button>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Unit</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                   <tbody>
                                        @php
                                         $no =1;   
                                        @endphp
                                        @foreach ($unit as $row)
                                            
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->nama_unit}}</td>
                                            <td>{{$row->deskripsi}}</td>
                                            <td>
                                            <a href="#modalEditunit{{$row->id}}" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="#modalHapusunit{{$row->id}}" data-toggle="modal" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Hapus</a>
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
            
<div class="modal fade" id="modalAddunit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Input Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/unitcrud/store" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Unit</label>
                    <input type="text" name="nama_unit" class="form-control" placeholder="Nama Unit..." required>
                </div>
                <div class="form-group">
                    <label for="floatingTextarea2">Deskripsi</label>
                    <textarea class="form-control" placeholder="Deskripsi..." name="deskripsi" id="deskripsi" style="height: 100px"></textarea>
                  </div>
                
                {{-- <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi..." required>
                </div> --}}
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

@foreach($unit as $d)
<div class="modal fade" id="modalEditunit{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/unitcrud/{{$d->id}}/update" enctype="multipart/form-data" method="POST">
                @csrf 
            <div class="modal-body">

                <input type="hidden" value="{{$d->id}}" name="id" required>

                <div class="form-group">
                    <label>Nama Unit</label>
                    <input type="text" value="{{$d->namaunit_edit}}" name="namaunit_edit" class="form-control" placeholder="Nama unit..." required>
                </div>
                <div class="form-group">
                    <label for="floatingTextarea2">Deskripsi</label>
                    <textarea class="form-control" placeholder="Deskripsi..." name="deskripsi_edit" id="deskripsi_edit" style="height: 100px"></textarea>
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

@foreach($unit as $g)
<div class="modal fade" id="modalHapusunit{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  

            <form action="/unitcrud/{{$g->id}}/destroy" enctype="multipart/form-data" method="GET">
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
