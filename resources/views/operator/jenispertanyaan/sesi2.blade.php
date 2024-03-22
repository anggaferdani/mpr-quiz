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
                        <th style="text-align: center;">Tema Pertanyaan</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tema as $item)
                   <tr>
                       <td class="text-center">{{$loop->iteration}}</td>
                       <td class="text-center">{{$item->tema}}</td>
                       <td class=""> 
                        <div class="d-flex justify-content-center">
                       <button type="button" data-bs-toggle="modal" data-bs-target="#Backdrop{{$item->id}}" class="btn btn-primary btn-icon-text d-flex justify-conten" disabled>Mulai</button>
                       </div>
                        <div class="modal fade" id="Backdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Pertanyaan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#tanya{{$item->id}}" class="btn d-block btn-primary btn-icon-text">Buat Pertanyaan</button>
                                <div class="table-responsive">
                                    <table id="table1" class="table">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Pertanyaan</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($item->pertanyaan as $tanya)
                                            <tr>
                                                <td class="text-center">{{$loop->iteration}}</td>
                                                <td class="text-center">{{$tanya->pertanyaan}}</td>
                                                <td class="text-center"> <div class="d-flex justify-content-center">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#jawaban{{$tanya->id}}" class="btn btn-primary btn-icon-text">Pilih</button>
                                                </div>
                                                
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="modal fade" id="jawaban{{$tanya->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">List Jawaban</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @foreach($tanya->jawaban as $jwb)
                                                        <p>{{$jwb->jawaban}}</p><br>
                                                        @endforeach
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save Poin</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                        <div class="modal fade" id="tanya{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tanyaLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Pertanyaan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/op/pilih-pertanyaan') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_tema" value="{{$item->id}}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1" class=" text-start fw-bold">Pertanyaan<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('pertanyaan') }}" id="exampleInputUsername1" placeholder="Input Pertanyaan..." name="pertanyaan">
                                            @error('pertanyaan')
                                                    <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group" id="jawaban">
                                            <label for="exampleInputUsername1" class=" text-start fw-bold">Poin Poin<span class="text-danger">*</span></label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" name="jawaban[]" placeholder="Input Jawaban...">
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="d-block mb-2 btn btn-icon btn-primary tambahjawaban"><i class="bi bi-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="jawab"></div>
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
                        </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <h5>Pilih Team</h5>
        <div class="d-flex gap-2">
            @foreach($team as $item)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="id_team" id="team{{$item->id}}" value="{{$item->id}}">
                <label class="form-check-label" for="team{{$item->id}}">
                {{$item->name}}
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
// Add event listener to check if any radio button is selected
document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('input[name="id_team"]');
    var startButtons = document.querySelectorAll('.btn.btn-primary.btn-icon-text');

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                startButtons.forEach(function(startButton) {
                    startButton.disabled = false; // Enable button if a radio button is selected
                });
            }
        });
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).on('click', '.tambahjawaban', function(){
    addInputField();
});

    function addInputField(){
      var inputField =
      '<div class="form-row row mb-2">' +
        '<div class="col">' +
        '<input type="text" class="form-control" name="jawaban[]" placeholder="Input Jawaban...">' +
        '</div>' +
        '<div class="col-auto my-auto">' +
        '<a href="javascript:void(0)" class="delete2 btn btn-danger" style="text-decoration: none;">' +
        '<i class="bi bi-trash-fill"></i>' +
        '</a>' +
        '</div>' +
        '</div>';
      $('.jawab').append(inputField);
    };

    $("body").on("click",".delete2",function(){ 
        $(this).parents(".form-row").remove();
    });
</script>
@endsection