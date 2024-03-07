@extends('operator.layout')
@section('title', 'Jenis Pertanyaan')
@section('layout')
<div class="page-heading">
    <h3>Jenis Pertanyaan</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">
        <div class="card-title d-flex justify-content-end mb-5">
            <!-- <a href="/start" class="btn btn-primary btn-lg btn-icon-text">
                <i class="mdi mdi-upload btn-icon-prepend"></i>
                Start
            </a> -->
        </div>

        <div class="table-responsive">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Jenis Pertanyaan</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                       <td class="text-center">1</td>
                       <td class="text-center">NKRI</td>
                       <td class="text-center"> <a href="{{url('/pilih-pertanyaan-sesi-2-nkri')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                   </tr>
                   <tr>
                       <td class="text-center">2</td>
                       <td class="text-center">Pancasila</td>
                       <td class="text-center"> <a href="{{url('/pilih-pertanyaan-sesi-2-pancasila')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                   </tr>
                   <tr>
                       <td class="text-center">3</td>
                       <td class="text-center">Bhineka Tunggal Ika</td>
                       <td class="text-center"> <a href="{{url('/pilih-pertanyaan-sesi-2-bti')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                   </tr>
                   <tr>
                       <td class="text-center">4</td>
                       <td class="text-center">UUD 1945</td>
                       <td class="text-center"> <a href="{{url('/pilih-pertanyaan-sesi-2-uud')}}" class="btn btn-primary btn-sm-lg text-white">Mulai</a></td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection