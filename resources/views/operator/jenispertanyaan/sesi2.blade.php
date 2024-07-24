@extends('operator.layout')

@section('title', 'Pro & Kontra')

@section('layout')

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Tema</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputUsername1" class="fw-bold">Pernyataan<span class="text-danger">*</span></label>
                            {{-- <input type="text" class="form-control" value="{{ old('pernyataan') }}" id="exampleInputUsername1" placeholder="Pernyataan..." name="pernyataan" required> --}}
                            <textarea class="form-control mt-2" name="pernyataan" rows="4" placeholder="Pernyataan anda.."></textarea>
                            @error('pernyataan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputUsername1" class="fw-bold">Pointer PRO<span class="text-danger">*</span></label>
                            <div class="kontra-input d-flex justify-content-center items-align-center gap-4">
                                <input type="text" class="form-control mt-2" value="" placeholder="Pointer pro..." name="pro[]" required>
                                {{-- <button class="btn btn-primary" onclick="tambahInputPro()">Tambah</button> --}}
                                {{-- <button class="btn btn-danger">Delete</button> --}}
                            </div>
                            <div id="inputs-pro"> </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputUsername1" class="fw-bold">Pointer KONTRA<span class="text-danger">*</span></label>
                            <div class="kontra-input d-flex justify-content-center items-align-center gap-4">
                                <input type="text" class="form-control mt-2" value="" placeholder="Pointer kontra..." name="kontra[]" required>
                                {{-- <button class="btn btn-primary">Tambah</button> --}}
                                {{-- <button class="btn btn-danger">Delete</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ url('/op/sesi-2') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="sesi" value="2">

                    <div class="modal-footer gap-1">
                        <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
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
    <h3>Pernyataan</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">
        <div class="card-title d-flex justify-content-between mb-5">
            <x-tombol-pindah-sesi text="Arahkan ke sesi 2" sesi-tujuan="2"/>

            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-lg btn-icon-text">
                <i class="mdi mdi-upload btn-icon-prepend"></i>
                +
            </a>
        </div>

        {{-- ! Table by pernyataan --}}
        <div class="table-responsive">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Pernyataan</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pernyataans as $pernyataan)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="text-center">{{$pernyataan->pernyataan}}</td>
                        <td class="">
                            <div class="d-flex justify-content-center">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#pernyataan-{{ $pernyataan->id }}-modal" class="btn btn-primary btn-icon-text d-flex justify-conten" disabled> Mulai </button>
                            </div>

                            <div class="modal fade" id="pernyataan-{{ $pernyataan->id }}-modal" data-modal-id="pernyataan-{{ $pernyataan->id }}-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Poin Poin - <span class="textteam"></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{url('/op/savepoin')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-body">

                                                @foreach($pernyataan->pointers as $pointer)
                                                    <p class="fw-bold">{{$pointer->penjelasan}}</p><br>
                                                @endforeach

                                                <input type="hidden" value="2" name="sesi">
                                                <input type="hidden" value="{{ null }}" name="id_pertanyaan">
                                                <input type="hidden" class="teamteam" name="id_team">
                                                <label for="">Input Poin<span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="poin">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Poin</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- ! /Table by pernyataan --}}

        <h5 class="mt-4">Pilih Grup</h5>
        <div class="team-selection d-flex gap-4">
            @foreach($team as $item)
                @php
                    $selectedTeam = $item->participant()->whereDate('tanggal', '=', now())->where('sesi', 2)->first();
                @endphp
                <div class="form-check">
                    @if($selectedTeam)
                        <input class="pernyataan-radios form-check-input" type="checkbox" checked disabled>
                    @else
                        <input class="pernyataan-radios form-check-input id_tim" type="radio" name="idtim" data-team-name="{{$item->name}}" id="team{{$item->id}}" value="{{$item->id}}">
                    @endif

                    <label class="form-check-label" for="team{{$item->id}}">
                        {{$item->name}}
                    </label>
                </div>
            @endforeach
        </div>

        <h5 class="mt-4">Pilih Sisi</h5>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input type="radio" class="pernyataan-radios form-check-input" name="sisi_pernyataan" id="pro" value="pro">
                <label class="form-check-label text-success font-weight-bold" for="pro">
                    PRO
                </label>
            </div>

            <div class="form-check">
                <input type="radio" class="pernyataan-radios form-check-input" name="sisi_pernyataan" id="kontra" value="kontra">
                <label class="form-check-label text-danger font-weight-bold" for="kontra">
                    KONTRA
                </label>
            </div>
        </div>
    </div>
</div>

<script>
// Add event listener to check if any radio button is selected
document.addEventListener('DOMContentLoaded', function() {
    var radioButtons = document.querySelectorAll('.pernyataan-radios');

    var startButtons = document.querySelectorAll('.btn.btn-primary.btn-icon-text');

    radioButtons.forEach(function(radioButton) {

        radioButton.addEventListener('change', function() {
            const groupNameRadio = document.querySelector('.pernyataan-radios[name="idtim"]:checked');
            const sisiPernyataanRadio = document.querySelector('.pernyataan-radios[name="sisi_pernyataan"]:checked');

            const areBothChecked = groupNameRadio && sisiPernyataanRadio;

            if (areBothChecked) {
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
    function tambahInputPro() {
        const inputProContainer = document.getElementById('inputs-pro');

        const newInput =
            '<div class="kontra-input d-flex justify-content-center items-align-center gap-4">' +
            '<input type="text" class="form-control mt-2" value="" placeholder="Pointer pro..." name="pro[]" required>' +
            '<button class="btn btn-danger" onclick="deletePro()">Delete</button>' +
            '</div>'
        ;

        inputProContainer.innerHTML(newInput);
    }

    function deletePro() {

    }
</script>

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
    // Initialize Pusher with Pusher app key from .env
    const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
    const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
    const pusher = new Pusher(pusherKey, {
        cluster: pusherCluster,
        encrypted: true, // Add this if you have encryption enabled on Pusher
    });

    // Function to send a question
    function pilihPertanyaan(id, pertanyaan, jawabanArray) {
        let berita = 'move_to_Sesi2';
        $.ajax({
            method: 'GET',
            url: '/sesi2',
            data: {
                _token: '{{ csrf_token() }}',
                berita: 'movesesi2',
                id: id,
                pertanyaan: pertanyaan,
                jawabanArray: JSON.stringify(jawabanArray),
            },
            success: function(response) {
                console.log('Question successfully sent to Pusher.');
            },
            error: function(xhr, status, error) {
                console.error('Failed to send question to Pusher:', error);
            }
        });
    }
</script>

@endsection
