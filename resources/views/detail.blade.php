@extends('layout.content')
@section('content')

<section class="layout_padding what_we_do">
<div class="container">
    <div class="row">

       
          <div class="full text_align_center">
            <h3>Detail Unit</h3>
                    
                 </div>
                 <div class="full">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Detail</h4>
                                
                            </div>
                        </div>
                       
                        <div class="card-body">
        
                            <div class="table-responsive">
                           
                                {{$unit->nama_unit}}<br>
                                {{$unit->deskripsi}}
            </div>
            </div>
    </div>
</div>
</section>


@endsection
