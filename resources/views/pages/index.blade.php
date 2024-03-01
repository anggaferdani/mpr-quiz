@extends('templates.pages')
@section('title')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Quiz</h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <button type="button" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#createModal">Create</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">

        @if(Session::get('success'))
          <div class="alert alert-important alert-primary">
            {{ Session::get('success') }}
          </div>
        @endif

        @if(Session::get('error'))
          <div class="alert alert-important alert-danger">
            {{ Session::get('error') }}
          </div>
        @endif

        <div class="card">
          <div class="table-responsive">
            <table class="table table-vcenter card-table datatable">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Pertanyaan</th>
                  <th>Jawaban</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($quizzes as $quiz)
                  <tr>
                    <td>{{ $quizzes->firstItem() + $loop->index }}</td>
                    <td class="small">{{ $quiz->pertanyaan }}</td>
                    <td class="small">{{ $quiz->jawaban }}</td>
                    <td>
                      <form action="{{ route('quiz.destroy', $quiz->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#editModal{{ $quiz->id }}">Edit</button>
                        <button type="submit" class="btn btn-danger d-none d-sm-inline-block">Danger</button>
                      </form>
                    </td>
                  </tr>
                @empty
                <tr>
                  <td class="text-center" colspan="4">No records found</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            <ul class="pagination m-0 ms-auto">
              @if($quizzes->hasPages())
                {{ $quizzes->links() }}
              @else
                <li class="page-item">No more records</li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="createModal" class="modal modal-blur fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="{{ route('quiz.store') }}" method="POST" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Pertanyaan</label>
          <textarea class="form-control" name="pertanyaan" rows="3" placeholder="Pertanyaan"></textarea>
          @error('pertanyaan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan A</label>
          <input type="text" class="form-control" name="pilihan_a" placeholder="">
          @error('pilihan_a')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan B</label>
          <input type="text" class="form-control" name="pilihan_b" placeholder="">
          @error('pilihan_b')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan C</label>
          <input type="text" class="form-control" name="pilihan_c" placeholder="">
          @error('pilihan_c')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan D</label>
          <input type="text" class="form-control" name="pilihan_d" placeholder="">
          @error('pilihan_d')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jawaban</label>
          <input type="text" class="form-control" name="jawaban" placeholder="Jawaban">
          @error('jawaban')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan"></textarea>
          @error('keterangan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Submit</button>
      </div>
    </form>
  </div>
</div>

@foreach($quizzes as $quiz)
<div id="editModal{{ $quiz->id }}" class="modal modal-blur fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="{{ route('quiz.update', $quiz->id) }}" method="POST" class="modal-content">
      @csrf
      @method('PUT')
      <div class="modal-header">
        <h5 class="modal-title">Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Pertanyaan</label>
          <textarea class="form-control" name="pertanyaan" rows="3" placeholder="Pertanyaan">{{ $quiz->pertanyaan }}</textarea>
          @error('pertanyaan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan A</label>
          <input type="text" class="form-control" name="pilihan_a" value="{{ $quiz->pilihan_a }}" placeholder="">
          @error('pilihan_a')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan B</label>
          <input type="text" class="form-control" name="pilihan_b" value="{{ $quiz->pilihan_b }}" placeholder="">
          @error('pilihan_b')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan C</label>
          <input type="text" class="form-control" name="pilihan_c" value="{{ $quiz->pilihan_c }}" placeholder="">
          @error('pilihan_c')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pilihan D</label>
          <input type="text" class="form-control" name="pilihan_d" value="{{ $quiz->pilihan_d }}" placeholder="">
          @error('pilihan_d')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jawaban</label>
          <input type="text" class="form-control" name="jawaban" value="{{ $quiz->jawaban }}" placeholder="Jawaban">
          @error('jawaban')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Keterangan</label>
          <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan">{{ $quiz->keterangan }}</textarea>
          @error('keterangan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Submit</button>
      </div>
    </form>
  </div>
</div>
@endforeach
@endsection