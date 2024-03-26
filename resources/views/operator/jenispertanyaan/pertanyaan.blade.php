@extends('operator.layout')
@section('title', 'Pertanyaan')
@section('layout')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Pertanyaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/op/pilih-pertanyaan') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id_tema" value="{{$tema->id}}">
            <div class="form-group">
                <label for="exampleInputUsername1" class="fw-bold">Pertanyaan<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="{{ old('pertanyaan') }}" id="exampleInputUsername1" placeholder="Input Pertanyaan..." name="pertanyaan">
                @error('pertanyaan')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group" id="jawaban">
                <label for="exampleInputUsername1" class="fw-bold">Poin Poin<span class="text-danger">*</span></label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="jawaban[]" placeholder="Input Jawaban...">
                    </div>
                    <div class="col-auto">
                        <button type="button" class="d-block mb-2 btn btn-icon btn-primary add"><i class="bi bi-plus"></i></button>
                    </div>
                </div>
                <div class="jawaban"></div>
            </div>
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
    <h3>Pertanyaan</h3>
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
                        <th style="text-align: center;">Pertanyaan</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as $item)
                   <tr>
                       <td class="text-center">{{$loop->iteration}}</td>
                       <td class="text-center">{{$item->pertanyaan}}</td>
                       {{-- <td class="text-center"> <a href="{{url('/op/list-jawaban/'.$item->id)}}" class="btn btn-primary btn-sm-lg text-white">Pilih</a></td> --}}
                       <td class="text-center">
                        <button onclick="getPertanyaan({{ $item->id }})" class="btn btn-primary btn-sm-lg text-white">Pilih</button>
                        </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.add').on('click', function(){
        add();
    });

    function add(){
      var jenis_tiket =
        '<div><div class="form-row row mb-2"><div class="col"><input type="text" class="form-control" name="jawaban[]" placeholder="Input Jawaban..."></div><div class="col-auto my-auto"><a href="javascript:void(0)" class="delete2 btn btn-danger" style="text-decoration: none;"><i class="bi bi-trash-fill"></i></a></div></div></div>';
      $('.jawaban').append(jenis_tiket);
    };

    $("body").on("click",".delete2",function(){ 
        $(this).parents(".form-row").remove();
    });
</script>

{{-- KIRIM PARAMETER ID SOAL --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function getPertanyaan(id) {
        // Kirim permintaan AJAX
        $.ajax({
            url: '/op/get-pertanyaan/' + id,
            type: 'GET',
            success: function(response) {
                // Tangani data yang diterima
                var pertanyaan = response.pertanyaan;
                // Lakukan sesuatu dengan data pertanyaan, misalnya, cetak ke konsol
                console.log(pertanyaan);
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika ada
                console.error(error);
            }
        });
    }
</script>

{{-- ----------------------------------------------- --}}

@endsection