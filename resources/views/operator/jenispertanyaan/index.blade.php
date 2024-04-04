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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Pertanyaan <span class="textteam"></span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <button type="button" data-bs-toggle="modal" data-bs-target="#tanya{{$item->id}}" class="btn d-block btn-primary btn-icon-text">Buat Pertanyaan</button>
                <div class="table-responsive">
                <input type="text" id="searchInput" class="mt-2 mb-1 border border-1 rounded filterPertanyaan" data-modalid="{{$item->id}}" placeholder="Search Pertanyaan">
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
                                @php
                                    $participant = $tanya->participant()->whereDate('tanggal', '=', now())->where('sesi', 1)->first();
                                @endphp
                                <tr class="filterPertanyaan{{$item->id}}">
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-center">{{$tanya->pertanyaan}}</td>
                                    <td class="text-center"> 
                                        <div class="d-flex justify-content-center">
                                        @if($participant)
                                            <button type="button" class="btn btn-success btn-icon-text" disabled><i class="bi bi-check-all"></i></button>
                                        @else
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#jawaban{{$tanya->id}}" class="btn btn-primary btn-icon-text">Pilih</button>
                                        @endif
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
<div class="modal fade" id="jawaban{{$tanya->id}}" data-modal-id="{{$tanya->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{url('/op/savepoin')}}" method="post">x
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">List Jawaban - <span class="textteam"></span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" value="1" name="sesi">
                    <input type="hidden" value="{{$tanya->id}}" name="id_pertanyaan">
                    <input type="hidden" class="teamteam" name="id_team">
                    <input type="hidden"  value="0" name="poin" id="poin{{$tanya->id}}"> <!-- Unique ID for each hidden input field -->
                    @foreach($tanya->jawaban as $jwb)
                    <label class="form-selectgroup-item flex-fill my-2 d-flex gap-2 justify-content-between">
                        <!-- Pass the ID of the hidden input field to the addPoints function -->
                        <button type="button" class="btn btn-primary benar" onclick="addPoints(this, 'poin{{$tanya->id}}', '{{$jwb->jawaban}}')">Benar</button>
                        <div class="form-selectgroup-label-content d-flex align-items-center">{{$jwb->jawaban}}</div>
                        <button type="button" class="btn btn-danger batal" onclick="cancelPoints(this, 'poin{{$tanya->id}}')"><i class="bi bi-x"></i></button>
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
            @php
                $selectedTeam = $item->participant()->whereDate('tanggal', '=', now())->where('sesi', 1)->first();
            @endphp
            <div class="form-check">
            @if($selectedTeam)
                <input class="form-check-input" type="checkbox" checked disabled>
            @else
                <input class="form-check-input id_tim" type="radio" name="idtim" data-team-name="{{$item->name}}" id="team{{$item->id}}" value="{{$item->id}}">
            @endif
            <label class="form-check-label" for="team{{$item->name}}">
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
    function addPoints(button, inputId, jawaban) {
        // Get the click count for this button
        var clickCount = clickCounts[inputId] || 0;
        // console.log('inputId', inputId)

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

        var cancelButton = button.nextElementSibling; // Assuming the cancelPoints button is located immediately after the addPoints button
        cancelButton.disabled = false;
        // Update click count for this button
        clickCounts[inputId] = clickCount + 1;

         // Initialize Pusher with Pusher app key from .env
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true, // Add this if you have encryption enabled on Pusher
        });
            $.ajax({
                method: 'GET',
                url: '/sesi1-juri',
                data: {
                    _token: '{{ csrf_token() }}',
                    // status: 'Benar',
                    jawaban: jawaban,
                },
                success: function(response) {
                    console.log('Data jawaban successfully sent to Pusher.');
                    console.log('jawaban', jawaban)
                },
                error: function(xhr, status, error) {
                    console.error('Failed to send Data jawaban to Pusher:', error);
                }
            });
    }
    
    function cancelPoints(button, inputId) {
        // Get the hidden input field corresponding to this button
        var poinInput = document.getElementById(inputId);

        // Set the points to 0
        poinInput.value = 0;

        // Update button text and classes
        var addButton = button.previousElementSibling.previousElementSibling; // Assuming the addPoints button is located before the cancelPoints button
        addButton.textContent = 'Benar';
        addButton.classList.remove('btn-success');
        addButton.classList.add('btn-primary');
        addButton.disabled = false;
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    // Script untuk filter input pada saat modal muncul
    $('input[data-modalid]').on('input', function () {
        // Mendapatkan nilai ID modal yang terkait dari atribut data
        var modalId = $(this).data('modalid');

        // Membuat ID input sesuai dengan ID modal yang terkait
        var inputId = 'searchInput' + modalId;

        // Lakukan filter atau manipulasi sesuai kebutuhan Anda
        var inputValue = $(this).val(); 
        console.log('Input value for modal ' + modalId + ': ' + inputValue);
        // Lakukan sesuatu dengan nilai input ...
    });

    // Script untuk filter tabel
    $('.filterPertanyaan').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        var modalId = $(this).data('modalid');
        // Menggunakan selektor yang tepat untuk mencari elemen yang perlu difilter
        $('table tr.filterPertanyaan'+modalId).filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

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
    $(document).ready(function() {
     // Additional code for setting the value from the foreach loop
     var teamName = $('[name="idtim"]:checked').data('team-name');
     var selectedTeamId = $('input[name="idtim"]:checked').val();
     console.log("Selected Team Name: " + teamName);
 
     // Iterate over each modal to set input field values
     $('.modal').each(function() {
         var modalId = $(this).data('modal-id');
         var inputValue = selectedTeamId;
         // Set the value of the input field
         $('#jawaban' + modalId).find('input[name="id_team"]').val(inputValue);
         $('#jawaban' + modalId).find('.textteam').text(teamName);
     });
 
     // Handle change event for .id_tim elements
     $(document).on('change', '.id_tim', function() {
         // Get the value of the selected team ID
         var selectedTeamId = $(this).val();
         var teamName = $('[name="idtim"]:checked').data('team-name');
         console.log("Selected Team ID: " + selectedTeamId);
 
         // Set the value of the hidden input field
         $('.teamteam').val(selectedTeamId);
         $('.textteam').text(teamName);
     });
 });
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