@extends('operator.layout')
@section('title', 'Jenis Pertanyaan')
@section('layout')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Tema</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/op/sesi-1') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputUsername1" class="fw-bold">Tema Pertanyaan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="{{ old('tema') }}" id="exampleInputUsername1" placeholder="Input Tema Pertanyaan..." name="tema">
                @error('tema')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <input type="hidden" name="sesi" value="2">
            <div class="modal-footer gap-1">
            <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                    Submit
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="page-heading">
    <h3>Jenis Pertanyaan</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">
    <div class="card-title d-flex justify-content-end mb-5">
            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-lg btn-icon-text">
                <i class="mdi mdi-upload btn-icon-prepend"></i>
                +
            </a>
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
                    @foreach($tema as $item)
                   <tr>
                       <td class="text-center">{{$loop->iteration}}</td>
                       <td class="text-center">{{$item->tema}}</td>
                       <td class="text-center"> <a data-bs-toggle="modal" data-bs-target="#Backdrop{{$item->id}}" class="btn btn-primary btn-lg btn-icon-text">Mulai</a></td>
<div class="modal fade" id="Backdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="row justify-content-center gap-2">
                @foreach($team as $tim)
                <div class="col-3">
                <a href="{{url('/op/pilih-pertanyaan/'.$item->id)}}" class="btn btn-primary btn-sm-lg text-white px-4">{{$tim->name}}</a>
                </div>
                @endforeach
            </div>
      </div>
    </div>
  </div>
</div>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection