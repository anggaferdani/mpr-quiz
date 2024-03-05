@extends('operator.template')
@section('title', 'Pilih Pertanyaan')
@section('template')
<div class="page-heading">
    <h3>Pilih Pertanyaan</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body p-5">
    
            <div class="table-responsive table-based">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: left;">Pertanyaan</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                           <td class="text-start">Contoh Pertanyaan 1</td>
                           <td class="text-center"> <a href="{{url('/soal')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                       </tr>
                       <tr>
                           <td class="text-start">Contoh Pertanyaan 2</td>
                           <td class="text-center"> <a href="{{url('/soal')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                       </tr>
                       <tr>
                           <td class="text-start">Contoh Pertanyaan 3</td>
                           <td class="text-center"> <a href="{{url('/soal')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection