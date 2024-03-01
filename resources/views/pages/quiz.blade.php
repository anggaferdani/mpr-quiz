@extends('templates.pages')
@section('title')
@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">

        <form action="" method="post" class="card">
          <div class="card-header">
            <h4 class="card-title">Pertanyaan 1</h4>
          </div>
          <div class="card-body">
            <h5>Lorem ipsum dolor sit amet consectetur adipiscing elit rutrum, mattis sem nisi nascetur magnis est proin, auctor primis nec commodo tristique tempor</h5>
          </div>
          <div class="card-footer text-end">
            <div class="d-flex">
              <a href="#" class="btn btn-link">Cancel</a>
              <button type="submit" class="btn btn-primary ms-auto" fdprocessedid="v8ek95">Send data</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection