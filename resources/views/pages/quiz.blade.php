@extends('templates.pages')
@section('title')
@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">
        <div id="pertanyaan1" class="card">
          <div class="card-header">
            <h4 class="card-title">Pertanyaan 1</h4>
          </div>
          <div class="card-body">
            <h2>Sebutkan pecahan uang kertas dan uang koin TE (Tahun Emisi) 2022!</h2>
            <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 100.000</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 50.000</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 20.000</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 10.000</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 5.000</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 2.000</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Rp 1.000</div>
                </div>
              </label>
            </div>
          </div>
          <div class="card-footer text-end">
            <div class="d-flex justify-content-between">
              <button disabled class="btn btn-secondary" id="backButton1">Back</button>
              <button class="btn btn-danger">Salah</button>
              <button type="button" class="btn btn-primary" id="nextButton1">Next</button>
            </div>
          </div>
        </div>
        <div id="pertanyaan2" class="card" style="display: none;">
          <div class="card-header">
            <h4 class="card-title">Pertanyaan 2</h4>
          </div>
          <div class="card-body">
            <h2>Mata uang apa saja yang ada di Benua Amerika Selatan?</h2>
            <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Argentina: Peso Argentina</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Bolivia: Boliviano</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Brasil: Real Brazil</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Chili: Peso Chile</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Kolombia: Peso Kolombia</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Ekuador: Dolar AS (US$)/USD</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Guyana: Dolar Guyana</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Guyana: Cayenne</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Paraguay: Asuncion Guarani Paraguay</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Uruguay: Peso Uruguay</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Peru: Nuevo Sol</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Venezuela: Bolívar Venezuela</div>
                </div>
              </label>
              <label class="form-selectgroup-item flex-fill">
                <input type="checkbox" name="form-project-manager[]" value="1" class="form-selectgroup-input">
                <div class="form-selectgroup-label d-flex align-items-center p-3">
                  <div class="me-3">
                    <button type="button" class="btn btn-primary">Benar</button>
                  </div>
                  <div class="form-selectgroup-label-content d-flex align-items-center">Suriname: Dolar Suriname</div>
                </div>
              </label>
            </div>
          </div>
          <div class="card-footer text-end">
            <div class="d-flex justify-content-between">
              <button class="btn btn-secondary" id="backButton2">Back</button>
              <button class="btn btn-danger">Salah</button>
              <button disabled type="button" class="btn btn-primary" id="nextButton2">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script>
  // Get references to the buttons and cards
  const nextButton1 = document.getElementById('nextButton1');
  const nextButton2 = document.getElementById('nextButton2');
  const backButton1 = document.getElementById('backButton1');
  const backButton2 = document.getElementById('backButton2');
  const pertanyaan1 = document.getElementById('pertanyaan1');
  const pertanyaan2 = document.getElementById('pertanyaan2');

  // Event listener for Next button on pertanyaan1
  nextButton1.addEventListener('click', function() {
    pertanyaan1.style.display = 'none';
    pertanyaan2.style.display = 'block';
    backButton1.style.display = 'block';
  });

  // Event listener for Next button on pertanyaan2
  nextButton2.addEventListener('click', function() {
    // Code for what happens when you click Next on pertanyaan2 (if needed)
  });

  // Event listener for Back button on pertanyaan2
  backButton2.addEventListener('click', function() {
    pertanyaan1.style.display = 'block';
    pertanyaan2.style.display = 'none';
  });
</script>
@endpush