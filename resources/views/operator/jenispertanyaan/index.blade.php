@extends('operator.layout')
@section('title', 'Tema Pertanyaan')
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
            <input type="hidden" name="sesi" value="1">
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
    <h3>Tema Pertanyaan</h3>
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
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach($tema as $item)
<!-- Modal for selecting questions -->
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Pertanyaan</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($item->pertanyaan as $tanya)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$tanya->pertanyaan}}</td>
                                <td class="text-center"> 
                                    <div class="d-flex justify-content-center">
                                        <button onclick="simpanIsiPertanyaan('{{$tanya->pertanyaan}}')" type="button" data-bs-toggle="modal" data-bs-target="#jawaban{{$tanya->id}}" class="btn btn-primary btn-icon-text">Pilih</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach --}}
                            @foreach($item->pertanyaan as $tanya)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-center">{{$tanya->pertanyaan}}</td>
                                    <td class="text-center"> 
                                        <div class="d-flex justify-content-center">
                                            <button data-pertanyaan="{{ $tanya->pertanyaan }}" data-bs-toggle="modal" data-bs-target="#jawaban{{$tanya->id}}" type="button" class="btn btn-primary btn-icon-text button-pertanyaan">Pilih</button>
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
@foreach($item->pertanyaan as $tanya)
<div class="modal fade" id="jawaban{{$tanya->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{url('/op/savepoin')}}" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">List Jawaban</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" value="1" name="sesi">
                    <input type="hidden" value="{{$tanya->id}}" name="id_pertanyaan">
                    <input type="hidden" id="Tim" name="id_team">
                    <input type="hidden"  value="0" name="poin" id="poin{{$tanya->id}}"> <!-- Unique ID for each hidden input field -->
                    @foreach($tanya->jawaban as $jwb)
                    <label class="form-selectgroup-item flex-fill">
                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                            <div class="me-3">
                                <!-- Pass the ID of the hidden input field to the addPoints function -->
                                <button type="button" class="btn btn-primary" onclick="addPoints(this, 'poin{{$tanya->id}}')">Benar</button>
                            </div>
                            {{-- <div class="form-selectgroup-label-content d-flex align-items-center">{{$jwb->id_pertanyaan}}</div> --}}
                            <div class="form-selectgroup-label-content d-flex align-items-center">{{$jwb->jawaban}}</div>
                        </div>
                    </label>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Poin</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach
<!-- Modal for entering answers -->
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
@endforeach

        </div>
        <h5>Pilih Team</h5>
        <div class="d-flex gap-2">
            @foreach($team as $item)
            <div class="form-check">
                <input class="form-check-input id_tim" type="radio" name="idtim" id="team{{$item->id}}" value="{{$item->id}}">
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
    var radioButtons = document.querySelectorAll('input[name="idtim"]');
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

<script>
    // Object to store click counts for each button
    var clickCounts = {};

    // Function to add points
    function addPoints(button, inputId) {
        // Get the click count for this button
        var clickCount = clickCounts[inputId] || 0;

        // Exit function if maximum clicks reached
        if (clickCount >= 10) {
            return;
        }

        // Get the hidden input field corresponding to this button
        var poinInput = document.getElementById(inputId);

        // Get the current points and parse it as an integer
        var currentPoints = parseInt(poinInput.value) || 0;

        // Add 10 points
        var newPoints = currentPoints + 10;

        // Set the new value to the hidden input field
        poinInput.value = newPoints;

        // Update button text and classes
        button.textContent = '10 poin';
        button.classList.remove('btn-primary');
        button.classList.add('btn-success');
        button.disabled = true;

        // Update click count for this button
        clickCounts[inputId] = clickCount + 1;
    }
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
<script>
   // Variabel global untuk menyimpan pertanyaan
    // let selectedQuestions = [];
    // Menambahkan event onclick untuk memanggil fungsi kirimPertanyaan
    // $("#btnKirimPertanyaan").click(function() {
    //     var pertanyaan = $(this).data('value');
    //     console.log('pertanyaan', pertanyaan);
    //     kirimPertanyaan(pertanyaan);

    // });

    // $(document).ready(function() {
    //     // Ketika tombol Pilih diklik
    //     $('button[data-bs-toggle="modal"]').on('click', function() {
    //         // Ambil nilai pertanyaan dari kolom kedua
    //         var pertanyaan = $(this).closest('tr').find('td:nth-child(2)').text().trim();
    //         console.log('pertanyaan',pertanyaan)
    //         // Kirim pertanyaan ke route lain melalui AJAX
    //         $.ajax({
    //             url: 'api/pusher', // Ganti dengan URL tujuan route Anda
    //             type: 'POST', // Atur metode HTTP yang sesuai
    //             data: {
    //                 pertanyaan: pertanyaan // Kirim nilai pertanyaan
    //             },
    //             success: function(response) {
    //                 // Tanggapan berhasil dari server
    //                 console.log(response);
    //                 // Lakukan tindakan lain jika diperlukan
    //             },
    //             error: function(xhr, status, error) {
    //                 // Tanggapan gagal dari server
    //                 console.error(xhr.responseText);
    //                 // Tampilkan pesan kesalahan jika diperlukan
    //             }
    //         });
    //     });
    // });

    // Membuat variabel global untuk menyimpan data
//     var selectedQuestion = "";

// // Menambahkan event listener saat dokumen siap
// document.addEventListener("DOMContentLoaded", function() {
//     var buttons = document.querySelectorAll('.btnKirimPertanyaan');

//     buttons.forEach(function(button) {
//         button.addEventListener('click', function() {
//             selectedQuestion = this.getAttribute('data-value');
//         });
//     });
// });
//     // Fungsi untuk menambahkan pertanyaan ke variabel global
//     function kirimPertanyaan(pertanyaan) {
//         // Mengirim data ke server menggunakan Ajax
//         console.log('pertanyaan', pertanyaan)
//         $.ajax({
//             url: '/api/pusher', // Ganti '/route/laravel' dengan URL yang sesuai
//             method: 'POST', // Anda dapat menggunakan metode POST atau metode yang sesuai
//             data: pertanyaan
//             success: function(response) {
//                 console.log('Data berhasil dikirim');
//             },
//             error: function(xhr, status, error) {
//                 console.error('Terjadi kesalahan:', error);
//                 // Tangani kesalahan jika diperlukan
//             }
//         });
//     }

</script>

<script>
    $(document).ready(function(){
    $(".button-pertanyaan").click(function(){
        var pertanyaan = $(this).data("pertanyaan"); // Mengambil nilai atribut data-pertanyaan dari tombol
        console.log('pertanyaan', pertanyaan)
        $.ajax({
            url: "/kirim-pertanyaan",
            type: "POST",
            data: { pertanyaan: pertanyaan }, // Mengirim nilai pertanyaan ke server
            success: function(response){
                // Handle the response here
                console.log(response);
            },
            error: function(xhr, status, error){
                // Handle errors here
                console.error(xhr.responseText);
            }
        });
    });
});

</script>

<script>
    // Use jQuery to update the hidden input field with the selected team value
    $('.id_tim').change(function() {
        var selectedTeam = $('.id_tim:checked').val();
        // alert(selectedTeam);
        console.log('test', selectedTeam);
        $('#Tim').val(selectedTeam);
    });
</script>

{{-- KIRIM PARAMETER SOAL KE FILE FRONTEND --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}



@endsection