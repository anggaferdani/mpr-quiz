@extends('operator.layout')
@section('title', 'Sesi 2')
@section('layout')
<div id="pertanyaan1" class="card">
    <div class="card-header">
    <h4 class="card-title">Sesi 2</h4>
    </div>
    <div class="card-body">
    <h2>{{$pertanyaan->pertanyaan}}</h2>
    <div class="text-center"><h4>Poin Poin</h4></div>
    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
        @foreach($jawaban as $jw)
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="form-selectgroup-label-content d-flex align-items-center">{{$jw->jawaban}}</div>
        </div>
        </label>
        @endforeach
    </div>
    </div>
    <div class="card-footer text-end">
    <div class="d-flex justify-content-between">
        <a href="{{url('/op/sesi-2')}}" class="btn btn-warning btn-sm-lg text-white">Home</a>
        <button class="btn btn-danger">Salah</button>
        <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm-lg text-white">Done</a>
    </div>
    </div>
</div>
@endsection