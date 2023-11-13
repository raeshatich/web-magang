@extends('layout.content')
@section('content')

<section class="layout_padding what_we_do">
<div class="container">
   <div class="row">
   <h3>Persyaratan dan Tata Cara Pendaftaran</h3>

   </div>

   <div class="container">
      <div class="row">
         <h3>Persyaratan Umum</h3>
         <p>Persyaratan untuk mengikuti magang di KPK </p>
      </div>

      <div class="row">
         @php
            $no = 1;
            @endphp
            @foreach($syarat as $p)
           
               <h5 class="card-title"><span class="badge bg-warning rounded-pill">{{ $no++ }}</span>
               <span class="card-text">{{ $p->nama_syarat }}</span>
               </h5>
               
               @endforeach  
      </div>
      <hr/>

      <h3>Tata Cara Pendaftaran</h3>
      <p>Tata Cara untuk mendaftar Magang di KPK :</p>
      </div>
      <div class="full">
         <div class="row g-3">
            <div class="col-md-12">
                  
               @php
               $no = 1;
               @endphp
               @foreach($tata as $p)
               <div class="card">
                  <div class="card-body">
                     <h1>{{ $no++ }}. {{ $p->nama_tata }}</h1>
                     </div>
                     </div>
                     @endforeach                           
                  </div>
            </div>
         </div>
      </div>
   </div>
</div>
</section>

   
 
@endsection