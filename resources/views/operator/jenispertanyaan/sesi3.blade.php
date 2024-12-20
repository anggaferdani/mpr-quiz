@extends('operator.layout')
@section('title', 'Sesi 3')
@section('layout')
<div class="page-heading">
    <h3>Sesi 3 : {{ $wilayah->nama_wilayah }}</h3>
</div>

@if(Session::get('success'))
  <div class="alert alert-important alert-success" role="alert">
    {{ Session::get('success') }}
  </div>
@endif

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-title d-flex justify-content-between mb-3">
        <x-tombol-pindah-sesi text="Arahkan ke sesi 3" sesi-tujuan="3"/>
        <x-tombol-pindah-sesi text="Arahkan ke Pengumuman" sesi-tujuan="4"/>

        <a data-bs-toggle="modal" data-bs-target="#modalTambahPertanyaan" class="btn btn-primary btn-lg btn-icon-text">
            <i class="mdi mdi-upload btn-icon-prepend"></i>
            +
        </a>
    </div>

    <div class="card">
        <div class="card-body">
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
                      @foreach($pertanyaanSesi3s as $pertanyaanSesi3)
                      <tr>
                          <td class="text-center fw-bold">{{$loop->iteration}}</td>
                          <td class="fw-bold">{{$pertanyaanSesi3->pertanyaan}}</td>
                          <td>
                              <div class="d-flex justify-content-center gap-2">
                                <button
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalTambahPoin{{ $pertanyaanSesi3->id }}"
                                    data-id-pertanyaan="{{ $pertanyaanSesi3->id }}"
                                    data-pertanyaan="{{ $pertanyaanSesi3->pertanyaan }}"
                                    data-jawaban="{{ $pertanyaanSesi3->jawaban }}"
                                    onclick="sendPusherData('{{ $pertanyaanSesi3->id }}', '{{ $pertanyaanSesi3->pertanyaan }}', '{{ $pertanyaanSesi3->jawaban }}')"
                                    @if($pertanyaanSesi3->status_pertanyaan == 0) @disabled(true) @endif
                                    >
                                    Pilih
                                </button>
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

<div class="modal fade" id="modalTambahPertanyaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Tambah Pertanyaann</h1>
          <button type="button" class="btn-close text-light" style="text-color:white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('operator.post.sesi3') }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <input type="hidden" class="form-control" name="wilayah_id" value="{{ $wilayah->id }}">
            </div>
            <div class="mb-3">
              <label class="form-label">Pertanyaan<span class="text-danger">*</span></label>
              <textarea class="form-control" name="pertanyaan" placeholder="Input Pertanyaan" cols="7" rows="">{{ old('pertanyaan') }}</textarea>
              @error('pertanyaan')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Jawaban<span class="text-danger">*</span></label>
              <textarea class="form-control" name="jawaban" placeholder="Input Jawaban" cols="7" rows="">{{ old('jawaban') }}</textarea>
              @error('jawaban')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

@foreach ($pertanyaanSesi3s as $pertanyaanSesi3)
<div class="modal fade" id="modalTambahPoin{{ $pertanyaanSesi3->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Pilih</h1>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="poinForm{{ $pertanyaanSesi3->id }}" action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div>{{ $pertanyaanSesi3->pertanyaan }}</div>
                        <div class="">Jawaban : <span class="fw-bold text-danger">{{ $pertanyaanSesi3->jawaban }}</span></div>
                    </div>
                    @foreach ($teams as $team)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_team" id="" checked="" value="{{ $team->id }}">
                        <label class="form-check-label" for="">
                            {{ $team->name }}
                        </label>
                    </div>
                    @endforeach
                    {{-- <div class="mb-3">
                        <label class="form-label">Pilih grup<span class="text-danger">*</span></label>
                        <select class="form-control" name="id_team" id="" required>
                            <option value="" disabled selected>Select</option>
                            @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                        @error('jawaban')<p class="text-danger">{{ $message }}</p>@enderror
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary w-100" id="btnTidakMenjawab{{ $pertanyaanSesi3->id }}">Tidak Menjawab</button>
                    <button type="button" class="btn btn-danger w-100" id="btnSalah{{ $pertanyaanSesi3->id }}">Salah</button>
                    <button type="button" class="btn btn-primary w-100" id="btnBenar{{ $pertanyaanSesi3->id }}">Benar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@push('scripts')
<script>
    function sendPusherData(id, pertanyaan, jawaban) {
        $.ajax({
            url: '/sesi-3/pusher/kirim-pertanyaan-sesi3',
            method: 'POST',
            data: {
                id: id,
                pertanyaan: pertanyaan,
                jawaban: jawaban,
                _token: $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(data) {
                console.log(data);
                $('[data-id-pertanyaan="' + id + '"]').prop('disabled', true);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
</script>
<script>
  $(document).ready(function() {
      $('[id^=modalTambahPoin]').each(function() {
          const formId = $(this).attr('id').replace('modalTambahPoin', '');
          const form = $('#poinForm' + formId);
          const btnBenar = $('#btnBenar' + formId);
          const btnSalah = $('#btnSalah' + formId);
          const btnTidakMenjawab = $('#btnTidakMenjawab' + formId);

          function submitForm(action) {
              $.ajax({
                  url: action,
                  type: 'POST',
                  data: form.serialize(),
                  success: function(response) {
                      alert('Berhasil menambahkan poin');
                      console.log(response);
                  },
                  error: function(error) {
                      console.error(error);
                      alert(error);
                  }
              });
          }

          btnBenar.on('click', function () {
              submitForm('{{ route('operator.sesi3.setpoin') }}');
          });

          btnSalah.on('click', function () {
              submitForm('{{ route('operator.sesi3.minpoin') }}');
          });

          btnTidakMenjawab.on('click', function () {
              submitForm('{{ route('operator.sesi3.minpoin') }}');
          });
      });
  });
</script>
@endpush
