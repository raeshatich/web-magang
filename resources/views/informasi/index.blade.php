@extends('layout.content')
@section('content')

<section class="layout_padding what_we_do">
    <div class="container">
        <div class="row">
            <h3>Menu Informasi</h3>
        </div>

        <div class="container">
            <div class="row">
            <h3>Informasi</h3>
            <p>Informasi tentang Magang di KPK</p>

            </div>
            <div class="row g-5">
                @php
                $no=1;
                @endphp
                @foreach ($informasi as $row)
                <div class="col-md-6">
                    <ul class="icon-list">
                    <li> <a href="{{ Storage::url('post-file/'.$row->format) }}">{{$row->format}}"></a></li>
                            @endforeach  
                    </ul>
                </div>
            </div>
            <hr/>
            <div class="container">
                <h3>Ketentuan</h3>
                <p>Ketentuan lain-lain</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ketentuan</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                     $no =1;   
                    @endphp
                    @foreach ($ketentuan as $row)
                        
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_ketentuan}}</td>
                        
                    </tr>

                    @endforeach        
                </tbody>              
            </table>
                </div>
            </div>

            </div>

        </div>
    </div>

</section>


@endsection
