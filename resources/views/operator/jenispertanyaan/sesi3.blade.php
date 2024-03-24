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
                       <td class="text-center fw-bold" id="points{{$item->id}}">
                        @if ($item->sesi3->isNotEmpty())
                            @foreach($item->sesi3 as $sesi3)
                                {{ $sesi3->poin }}
                            @endforeach
                        @else
                            0
                        @endif</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-success increment-points" data-team-id="{{ $item->id }}">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                                <button class="btn btn-danger decrement-points" data-team-id="{{ $item->id }}" {{ $item->sesi3->isEmpty() || !$item->sesi3->contains('poin', '>', 0) ? 'disabled' : '' }}>
                                    <i class="bi bi-x"></i>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('.increment-points').click(function() {
            var teamId = $(this).data('team-id');
            $.ajax({
                type: 'POST',
                url: '{{ route("setpoin") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    team_id: teamId
                },
                success: function(response) {
                    $('#points' + teamId).text(response.points);
                    if (response.points == 0) {
                        $('.decrement-points[data-team-id=' + teamId + ']').prop('disabled', true);
                    }else{
                        $('.decrement-points[data-team-id=' + teamId + ']').prop('disabled', false);
                    }
                }
            });
        });

        $('.decrement-points').click(function() {
            var teamId = $(this).data('team-id');
            $.ajax({
                type: 'POST',
                url: '{{ route("minpoin") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    team_id: teamId
                },
                success: function(response) {
                    $('#points' + teamId).text(response.points);
                    if (response.points == 0) {
                        $('.decrement-points[data-team-id=' + teamId + ']').prop('disabled', true);
                    }else{
                        $('.decrement-points[data-team-id=' + teamId + ']').prop('disabled', false);
                    }
                }
            });
        });
    });
</script>
@endsection