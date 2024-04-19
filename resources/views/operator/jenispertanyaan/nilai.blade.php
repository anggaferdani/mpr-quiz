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
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($team as $item)
                   <tr>
                       <td class="text-center fw-bold">{{$loop->iteration}}</td>
                       <td class="text-center fw-bold">{{$item->name}}</td>
                       <td class="text-center fw-bold">{{$item->participant()->whereDate('tanggal', '=', now())->where('sesi', 1)->sum('poin')}}</td>
                        <td class="text-center fw-bold">{{$item->participant()->whereDate('tanggal', '=', now())->where('sesi', 2)->sum('poin')}}</td>
                        <td class="text-center fw-bold">{{$item->participant()->whereDate('tanggal', '=', now())->sum('poin')}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nilaitim{{$item->id}}">
                                Tampilkan
                            </button>
                        </div>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="nilaitim{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Device</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @php
                                $result = $item->participant()
    ->leftJoin('teams', 'participants.id_team', '=', 'teams.id')
    ->select('teams.name','teams.id', DB::raw('COALESCE(sum(participants.poin), 0) as total_poin'))
    ->whereDate('tanggal', '=', now())
    ->groupBy('teams.name','teams.id')
    ->get();
    if ($result->isEmpty()) {
        $defaultResult = [
            ['name' => $item->name, 'id' => $item->id, 'total_poin' => 0]
        ];
        $result = collect($defaultResult);
    }
                                @endphp
                               <div class="d-flex justify-content-center gap-2">
                                <input type="hidden" id="vald1" value="{{$result}}">
                                <input type="hidden" id="vald2" value="{{$result}}">
                                <input type="hidden" id="vald3" value="{{$result}}">
                                <button id="bt1" data-team="{{$result}}" class="btn btn-success send-data1">Device 1</button>
                                <button id="bt2" data-team="{{$result}}" class="btn btn-success send-data2">Device 2</button>
                                <button id="bt3" data-team="{{$result}}" class="btn btn-success send-data3">Device 3</button>
                               </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

// Document 1
$(document).ready(function() {
    $(".send-data1").on("click", function() {
        let data = $(this).data('team');
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true, // Add this if you have encryption enabled on Pusher
        });
        $.ajax({
            url: "/post-device-1",
            type: "POST",
            data: { data: data }, // Mengirim nilai pertanyaan ke server
            success: function(response) {
                // Handle the response here
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle errors here
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

<script>
// Document 2
    $(document).ready(function() {
        $(".send-data2").on("click", function() {
            let data = $(this).data('team');
            const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
            const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
            const pusher = new Pusher(pusherKey, {
                cluster: pusherCluster,
                encrypted: true, // Add this if you have encryption enabled on Pusher
            });
            $.ajax({
                url: "/post-device-2",
                type: "POST",
                data: { data: data }, // Mengirim nilai pertanyaan ke server
                success: function(response) {
                    // Handle the response here
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
// Document 3
$(document).ready(function() {
    $(".send-data3").on("click", function() {
        let data = $(this).data('team');
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true, // Add this if you have encryption enabled on Pusher
        });
        $.ajax({
            url: "/post-device-3",
            type: "POST",
            data: { data: data }, // Mengirim nilai pertanyaan ke server
            success: function(response) {
                // Handle the response here
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle errors here
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
@endsection