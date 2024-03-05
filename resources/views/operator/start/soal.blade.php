@extends('operator.template')
@section('title', 'Sesi 1')
@section('template')
<div id="pertanyaan1" class="card">
    <div class="card-header">
    <h4 class="card-title">Sesi 1</h4>
    </div>
    <div class="card-body">
    <h2>Sebutkan pecahan uang kertas dan uang koin TE (Tahun Emisi) 2022!</h2>
    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 100.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 50.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 20.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 10.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 5.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 2.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 1.000</div>
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