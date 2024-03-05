@extends('operator.template')
@section('title', 'Sesi 2')
@section('template')
<div id="pertanyaan1" class="card">
    <div class="card-header">
    <h4 class="card-title">Sesi 2</h4>
    </div>
    <div class="card-body">
    <h4>Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!</h4><br></br>
    <h5 class="text-center">Poin Poin</h5>
    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Penyelidikan usaha-usaha kemerdekaan Indonesia
            </div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Mempersiapkan kemerdekaan</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Merumuskan dasar negara</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Penyusunan naskah konstitusi
</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Menyelidiki situasi politik dan sosial</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Merumuskan tujuan dan cita-cita kemerdekaan
</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Konsultasi dengan berbagai pihak
</div>
        </div>
        </label>
    </div>
    </div>
    <div class="card-footer text-end">
    <div class="d-flex justify-content-between">
        <a href="{{url('/jenis-pertanyaan')}}" class="btn btn-warning btn-sm-lg text-white">Home</a>
        <button class="btn btn-danger">Salah</button>
        <a href="{{url('/sesi-2')}}" class="btn btn-primary btn-sm-lg text-white">Done</a>
    </div>
    </div>
</div>
@endsection