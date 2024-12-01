@extends('operator.layout')
@section('title', 'Perolehan Poin')
@section('layout')
<div class="page-heading">
    <h3>Perolehan Poin</h3>
</div>

<div class="d-flex jusi">
    <button class="btn btn-primary mb-3" id="refresh-juri-poin">Refresh Point</button>
{{--    <button class="btn btn-primary mb-3" id="refresh-juri-poin">Set Run</button>--}}
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
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
                            <th style="text-align: center;">Sesi</th>
                            <th style="text-align: center;" colspan="2">Aksi</th>
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
                            <td class="text-center fw-bold">{{$item->run}}</td>
                            <td class="text-center">
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nilaitim{{$item->id}}">
                                        Tampilkan
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#round{{$item->id}}">
                                        Set Run
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#gantinilai{{$item->id}}">
                                        Change Poin
                                    </button>
                                </div>
                            </td>
                        <!-- Modal -->
                           <div class="modal fade" id="nilaitim{{$item->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Device</h1>
                                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                   aria-label="Close"></button>
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
                                               <button id="bt1" data-team="{{$result}}" class="btn btn-success send-data1">
                                                   Device 1
                                               </button>
                                               <button id="bt2" data-team="{{$result}}" class="btn btn-success send-data2">
                                                   Device 2
                                               </button>
                                               <button id="bt3" data-team="{{$result}}" class="btn btn-success send-data3">
                                                   Device 3
                                               </button>
                                           </div>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="modal fade" id="round{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h1 class="modal-title fs-5" id="exampleModalLabel">Set Run</h1>
                                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                   aria-label="Close"></button>
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
                                           <form action="{{route('set-run')}}" method="post" >
                                               @csrf
                                               <div class="d-flex justify-content-center gap-2">
                                                   <input type="hidden" name="team_id" value="{{$item->id}}" >
                                                   <input type="number" class="form-control" value="{{$item->run}}" name="run">
                                                   <button type="submit" class="btn btn-primary">Save</button>
                                               </div>
                                           </form>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="modal fade" id="gantinilai{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h1 class="modal-title fs-5" id="exampleModalLabel">Ganti Nilai</h1>
                                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                   aria-label="Close"></button>
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
                                           <form action="{{route('refresh-point')}}" method="get" >
                                               @csrf
                                               <div class="d-flex justify-content-center gap-2">
                                                   <button class="btn btn-primary">Refresh</button>
{{--                                                   <input type="hidden" name="team_id" value="{{$item->id}}" >--}}
{{--                                                   <input type="number" class="form-control" value="{{$item->run}}" name="run">--}}
{{--                                                   <button type="submit" class="btn btn-primary">Save</button>--}}
                                               </div>
                                           </form>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                           </button>
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

    $("#refresh-juri-poin").on("click", function () {
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true, // Add this if you have encryption enabled on Pusher
        });
        $.ajax({
            url: "/juri-refresh-trigger",
            type: "POST",
            success: function (response) {
                // Handle the response here
                console.log(response);
            },
            error: function (xhr, status, error) {
                // Handle errors here
                console.error(xhr.responseText);
            }
        });
    });


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
