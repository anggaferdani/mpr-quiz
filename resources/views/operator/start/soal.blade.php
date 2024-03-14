@extends('operator.template')
@section('title', 'Sesi 1')
@section('template')
<div class="modal fade" id="automaticModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Automatic Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        This modal will appear automatically when the page loads.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="pertanyaan1" class="card">
    <div class="card-header">
    <h4 class="card-title">Sesi 1</h4>
    </div>
    <div class="card-body">
    <h2>Sebutkan pecahan uang kertas dan uang koin TE (Tahun Emisi) 2022!</h2>
    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 100.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 50.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 20.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 10.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 5.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 2.000</div>
        </div>
        </label>
        <label class="form-selectgroup-item flex-fill">
        <div class="form-selectgroup-label d-flex align-items-center p-3">
            <div class="me-3">
            <button type="button" class="btn btn-primary" id="check" onclick="check(this)">Benar</button>
            </div>
            <div class="form-selectgroup-label-content d-flex align-items-center">Rp 1.000</div>
        </div>
        </label>
    </div>
    </div>
    <div class="card-footer text-end">
    <div class="d-flex justify-content-between">
        <a href="{{url('/op/sesi-1')}}" class="btn btn-warning btn-sm-lg text-white">Home</a>
        <button class="btn btn-danger">Salah</button>
        <a href="{{url('/op/sesi-2')}}" class="btn btn-primary btn-sm-lg text-white">Done</a>
    </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
        function check(button) {
            var hasSuccessClass = button.classList.contains('btn-success');

            // Change the button content to the check button
            button.innerHTML = '<i class="bi bi-check-all"></i>';

            // Toggle the btn-success class
            if (hasSuccessClass) {
                button.classList.remove('btn-success');
            } else {
                button.classList.add('btn-success');
            }
        }
    </script>
    <script>
    $(document).ready(function(){
        $('#automaticModal').modal('show');
    });
</script>
@endsection