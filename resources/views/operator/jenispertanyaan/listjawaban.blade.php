@extends('operator.layout')
@section('title', 'Sesi 1')
@section('layout')
<div id="pertanyaan1" class="card">
    <div class="card-header">
    <h4 class="card-title">Sesi 1</h4>
    </div>
    <div class="card-body">
    <h2>{{$pertanyaan->pertanyaan}}</h2>
    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
        @foreach($jawaban as $jw)
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
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

<script>
        function check(button) {
            var hasSuccessClass = button.classList.contains('btn-success');

            // Toggle the btn-success class
            if (hasSuccessClass) {
                button.classList.remove('btn-success');
                button.innerHTML = 'Benar';
            } else {
                button.classList.add('btn-success');
                button.innerHTML = '10 Poin';
            }
        }
    </script>
@endsection