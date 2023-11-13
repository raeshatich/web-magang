@extends('layout.home')
@section('container')
      <section class="layout_padding what_we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full text_align_center">
                    <h1> Program Magang</h1><br>
                     <p>Komisi Pemberantasan Korupsi membuka kesempatan kepada Warga Negara Indonesia yang berstatus 
                        mahasiswa tingkat akhir atau lulusan baru Perguruan Tinggi serta memiliki integritas dan komitmen yang tinggi
                         untuk mengikuti program magang. Bagi peserta yang memenuhi persyaratan dan lulus seleksi, akan diberikan 
                        kesempatan pembelajaran melalui pelibatan pelaksaan tugas dan fungsi pencegahan dan pemberantasan tindak pidana korupsi.
                        </p>
                        <hr/>
                        <p>Silakan pilih salah satu unit kerja yang sesuai dengan kompetensi dan peminatan sebagai berikut:</p>
                  </div>
               </div>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
              @foreach($unit as $row)
               <div class="col">
                 <div class="card h-100">
               <a href="{{route('detail',$row->id)}}">
                   <div class="card-body">
                   <div class="full text_align_center">
                     <h5 class="card-title">{{$row->nama_unit}}</h5>
                     
                   </div>
                   </div>
                   
                  </div>
                </div>
                  </a>
                @endforeach
      
             </div>
               </div>
            
         </div>
      </section>
      
@endsection