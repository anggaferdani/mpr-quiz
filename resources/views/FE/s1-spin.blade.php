@extends('FE.templateSesi1')
@section('title', 'Spin Sesi 1')

<style type="text/css">
    div:where(.swal2-container) h2:where(.swal2-title){
        color: #000 !important;
        font-size: 82px;
        padding: 0 !important;
    }
    swal2-popup swal2-modal swal2-show{
        padding: 1.5em 3em !important;
    }
    #canvas{
        transform: translateY(-17.5%);
    }
</style>
<style>
    .top-content h2{
        font-family: 'Press Start 2P', system-ui;
        color: #5785DD;
    }
    .logo-top img{
        width: 100%;
        height: auto;
        object-fit: contain;
    }
</style>

@section('content')
    <div class="container">
        <div class="top-content d-flex align-items-center justify-content-between my-2">
            <h2>SESI 1</h2>
            <div class="d-flex align-items-center gap-4 logo-top">
                <img src="../images/mpr.png" alt="">
                <img src="../images/kemendikbud.png" alt="">
            </div>
        </div>
    </div>
    <center>
        <canvas id="canvas" width="650px" height="650px" style="z-index: 999"></canvas>
        </center>
        
        <script type="text/javascript" src="{{asset('spinner/src/rouletteWheel.js')}}"></script>
        <script type="text/javascript">
            $(function(){
    
                // var items = ["NKRI", "Sejarah", "Ekonomi", "Pendidikan", "Pemerintahan","Pengetahuan Umum"];
                var items = [
                        { name: 'NKRI', color: '#F7F6BB' },
                        { name: 'Sejarah', color: '#C5EBAA' },
                        { name: 'Ekonomi', color: '#ababab' },
                        { name: 'Pendidikan', color: '#9AD0C2' },
                        { name: 'Pemerintahan', color: '#ECB159' },
                        { name: 'Pengetahuan Umum', color: '#FFEECC' },
                    ];
    
              $('#canvas').rouletteWheel({
                items : items,
                selected : function(key, value){
                      Swal.fire({
                      title: value.name,
                      width: 600,
                      padding: "3em",
                      color: "#0000",
                      background: "#fff url(/images/trees.png)",
                      backdrop: `
                        rgba(0,0,123,0.4)
                        url("/images/nyan-cat.gif")
                        left top
                        no-repeat
                      `
                    }).then((result) => {
                    // Check if the user clicked "OK"
                    if (result.isConfirmed) {
                        // Use Laravel's route function to generate the URL
                        window.location.href = '{{ url("/pilih-pertanyaan") }}';
                    }
                });
                },
                spinText : '',
              });
    
            });
        </script>
@endsection