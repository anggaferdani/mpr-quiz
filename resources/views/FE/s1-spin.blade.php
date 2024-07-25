<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPR Quiz | Spinner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script type="text/javascript" src="{{asset('spinner/src/jquery.1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('spinner/jquery-ui.min.js')}}"></script>

	<script src="{{asset('spinner/src/swal2.min.js')}}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    {{-- Pusher script --}}
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>
        console.log('Action keys');

        console.table({
            'Reload spinner data': 'r',
            'Spin the wheel': '[space]',
            'open selected sub tema': '[enter]',
            'To `sesi 2` page': '[F2]'
        });

        // Initiate pusher
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });


        // Pindah sesi by operator
        const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');

        ankorPindahSesi.bind('event-pindah-sesi', function(data) {
            const sesi = data.message.sesi;

            if (sesi != 1) { window.location.href = `/sesi${sesi}`; }
        });

        var spinTrigger = pusher.subscribe('spin');
        spinTrigger.bind("spin-trigger", function (data) {

            // console.log("data")
            $('#canvas').rouletteWheel('spin');
        });

    </script>
    {{-- /Pusher script --}}

    <style>
        body{
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background-image: url('../images/gif-s1-spin.gif'); /* Set the URL of your GIF */
                background-size: cover; /* Set the size */
                background-repeat: no-repeat; /* Set the repeat behavior */
                background-position: center; /* Set the position */
        }
        div:where(.swal2-container) h2:where(.swal2-title){
            color: #ffff !important;
            font-size: 82px;
            padding: 0 !important;
        }
        swal2-popup swal2-modal swal2-show{
            padding: 1.5em 3em !important;
        }

        .swal2-show{
            width: max-content !important;
            padding: 5rem !important;
            border-radius: 25px !important;
            /* color: white !important; */
            background: #E48F45 !important;
            display: grid;

        }
        .swal2-confirm{
            position: absolute;
            left: -100vw;
        }
        .top-content h2{
            font-family: 'Press Start 2P', system-ui;
            color: #5785DD;
        }
        .logo-top img{
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        .spinwheel{
            height: 100vh;
            margin-top: -2.5%;
        }

        @media only screen and (max-width: 700px) {
            .spinwheel {
            /* #canvas { */
                scale: 60%;
            }
        }
    </style>

  </head>
  <body>

    <div class="spinwheel d-flex align-items-center justify-content-center">
        <canvas id="canvas" width="650px" height="650px" style="z-index: 999;"></canvas>
        <img src="../images/panah.png" alt="">
    </div>

    <div class="modal fade modal-xl" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
         data-bs-backdrop="static"
         tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
                <div class="modal-body text-center">
                    <p id="modal-text" class="py-4 font-weight-bold" style="font-size: 70px; font-weight: 800"></p>
                </div>
{{--                <div class="modal-footer">--}}
{{--                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"--}}
{{--                            data-bs-dismiss="modal">Back to first--}}
{{--                    </button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    {{--    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>--}}
    <script type="text/javascript" src="{{asset('spinner/src/rouletteWheel.js')}}"></script>

    <script type="text/javascript">
        let quizId = 0

        var item = [
            @foreach ($tema as $t)
            {
                id: '{{ $t->id }}',
                name: '{{$t->tema}}',
                color: @if ($t->id % 2 !== 0) '#FFBB70' @else '#ffffff' @endif
            },
            @endforeach
        ];

        // Simpan data ke local storage jika belum ada
        if (!localStorage.getItem('wheelItem2')) {
            var saveToLocal = JSON.stringify(item);
            localStorage.setItem('wheelItem2', saveToLocal);
        }

        $(function() {
            // Inisialisasi spinwheel dan ambil data dari local storage
            initSpinwheel();

            // Fungsi untuk inisialisasi spinwheel dan ambil data dari local storage
            function initSpinwheel() {

            // Ambil data dari local storage
            var itemJSON = localStorage.getItem('wheelItem2');
            var itemsFromLocal = JSON.parse(itemJSON);
            // console.log(itemsFromLocal);

                var myModal = new bootstrap.Modal(document.getElementById('exampleModalToggle2'), {
                    keyboard: false
                })


                // Inisialisasi spinwheel dengan item yang ada di local storage
                $(document).on('keypress', function (e) {
                    if (e.which == 13) {


                        if(quizId !== 0){
                            window.location.href = "/sesi1-quiz/" + quizId;
                        }

                        // myModal.hide()
                    }
                });

                $('#canvas').rouletteWheel({
                items: itemsFromLocal,
                selected: function (key, item) {
                    // Simpan nama item yang dipilih ke dalam variabel selectedName
                    var selectedName = item.name;
                    var words = selectedName.split(" ");
                    var selectedId = item.id;
                    var selectedColor = item.color;

                    // Hapus item yang memiliki nama yang sesuai dari local storage
                    deleteSelectedItem(selectedName);

                    // Tampilkan informasi item yang dipilih
                    // Swal.fire({
                    //     title: selectedName,
                    //     id : selectedId,
                    //     color : selectedColor,
                    //     width: 600,
                    //     padding: "3em",
                    //     // color: "#000",
                    //     // background: "#fff url(/images/trees.png)",
                    //     background: selectedColor,
                    //     backdrop: `
                    //         rgba(0,0,123,0.4)
                    //         url("/images/nyan-cat.gif")
                    //         left top
                    //         no-repeat
                    //     `
                    // }).then((result) => {
                    //     // Redirect ke halaman quiz jika tombol OK diklik
                    //     if (result.isConfirmed) {
                    //         // window.location.href = "/sesi1-quiz/";
                    //         window.location.href = "/sesi1-quiz/" + selectedId;
                    //     }
                    // });

                    quizId = selectedId

                    $("#modal-text").text(selectedName)
                    // selectedColor

                    let textColor = selectedColor != "#ffffff" ? "#ffffff": "#000000"
                    console.log(textColor);
                    $(".modal-content").css("background-color",selectedColor );
                    $(".modal-content").css("color",textColor );
                    myModal.show()

                    // Simpan data terbaru ke local storage
                    localStorage.setItem('wheelItem2', JSON.stringify(itemsFromLocal));
                },
                spinText: '',
                onItemRender: function (item, elem) {
                    // Berikan warna acak untuk setiap elemen spinner
                    elem.css('background-color', getRandomColor());
                }
            });

            // Fungsi untuk menghasilkan warna acak
            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
        }

            // Fungsi untuk mencari dan menghapus item yang memiliki nama yang sesuai
            function deleteSelectedItem(selectedName) {
                // Ambil data dari local storage
                var itemJSON = localStorage.getItem('wheelItem2');
                var itemsFromLocal = JSON.parse(itemJSON);

                // Filter item yang memiliki nama yang sesuai
                itemsFromLocal = itemsFromLocal.filter(function(item) {
                    return item.name !== selectedName;
                });

                // Simpan kembali data yang telah dihapus ke local storage
                localStorage.setItem('wheelItem2', JSON.stringify(itemsFromLocal));
            }

            // Fungsi untuk mengembalikan data local storage ke nilai awalnya
            function resetLocalStorage() {
                // var item = [
                //     @foreach ($tema as $t)
                //         { id: '{{ $t->id }}' ,name: '{{ $t->tema }}' },
                //     @endforeach
                // ];
                var saveToLocal = JSON.stringify(item);
                localStorage.setItem('wheelItem2', saveToLocal);
            }

            // Membersihkan event handler ketika meninggalkan halaman
            $(window).on('unload', function() {
                $(document).off('keydown');
            });

            $(document).keydown(function(event) {
                // Pastikan tombol yang ditekan adalah spasi (keyCode 32)
                if (event.keyCode === 32) {
                    // Panggil metode untuk memutar spinwheel
                    $('#canvas').rouletteWheel('spin');
                }
            });




            document.addEventListener('keydown', function(event) {
                if (event.key === 'r') {
                    // Reset data local storage ke nilai awalnya
                    resetLocalStorage();
                    // Inisialisasi ulang spinwheel
                    initSpinwheel();
                    console.log('Local storage berhasil dikembalikan ke nilai awal.');

                    location.reload();

                }
            });
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'F2') {
                // Arahkan pengguna ke route sesi2
                window.location.href = "/sesi2";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
