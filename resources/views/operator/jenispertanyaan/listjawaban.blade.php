@extends('operator.layout')
@section('title', 'Sesi 1')
@section('layout')
<div id="pertanyaan1" class="card">
    <div class="card-header">
    <h4 class="card-title">Sesi 1</h4>
    </div>
    <div class="card-body">
    <h2>{{$pertanyaan->pertanyaan}}</h2>
    <form action="{{url('/op/savepoin')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id_tema" value="$tema->id">
        <input type="hidden" name="id_pertanyaan" value="$pertanyaan->id">
        <input type="hidden" name="sesi" value="$tema->sesi">

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
        <div class="modal fade" id="static" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticLabel">Pilih Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach($team as $tim)
            <button class="btn btn-primary mx-2 my-2">{{$tim->name}}</button>
        @endforeach
      </div>
        <div class="modal-footer gap-1">
            <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                    Submit
                </button>
        </div>
    </div>
  </div>
</div>
    </form>
    </div>
    <div class="card-footer text-end">
    <div class="d-flex justify-content-between">
        <a href="{{url('/op/sesi-2')}}" class="btn btn-warning btn-sm-lg text-white">Home</a>
        <button class="btn btn-danger">Salah</button>
        <a data-bs-toggle="modal" data-bs-target="#static" class="btn btn-primary btn-sm-lg text-white">Done</a>
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