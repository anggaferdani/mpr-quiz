@extends('operator.layout')
@section('title', 'Sesi 3')
@section('layout')
<div class="page-heading">
    <h3>Sesi 3</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">

        <div class="table-responsive">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Team</th>
                        <th style="text-align: center;">Poin</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($team as $item)
                   <tr>
                       <td class="text-center fw-bold">{{$loop->iteration}}</td>
                       <td class="text-center fw-bold">{{$item->name}}</td>
                       <td class="text-center fw-bold">
                        @if ($item->sesi3->isNotEmpty())
                            {{$item->sesi3->first()->poin}}
                        @else
                            0
                        @endif</td>
                        <td>
                            <button class="btn btn-success increment-points" data-team-id="{{ $item->id }}">
                                <i class="fa fa-check"></i>
                            </button>
                            <button class="btn btn-danger decrement-points" data-team-id="{{ $item->id }}" {{ $item->sesi3 && $item->sesi3->poin == 0 ? 'disabled' : '' }}>
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection