@extends('operator.layout')
@section('title', 'Perolehan Poin')
@section('layout')
<div class="page-heading">
    <h3>Perolehan Poin</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">

        <div class="table-responsive">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Team</th>
                        <th style="text-align: center;">Sesi 1</th>
                        <th style="text-align: center;">Sesi 2</th>
                        <th style="text-align: center;">Total Keseluruhan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($participants as $item)
                   <tr>
                       <td class="text-center fw-bold">{{$loop->iteration}}</td>
                       <td class="text-center fw-bold">{{$item->team->name}}</td>
                       <td class="text-center fw-bold">{{$item->poin_sesi_1}}</td>
                        <td class="text-center fw-bold">{{$item->poin_sesi_2}}</td>
                        <td class="text-center fw-bold">{{$item->poin_sesi_1 + $item->poin_sesi_2}}</td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection