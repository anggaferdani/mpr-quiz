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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background-image: url('../images/NOMOR-SOAL.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .box-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .box {
            margin-left: 40px;
            margin-right: 40px;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            border: 2px solid #CFAA5A;
            background-color: white; /* Set default color to white */
        }

        .disabled {
            border: 2px solid rgba(180, 164, 128, 0.66);
            background-color: rgba(180, 164, 128, 0.66);
        !important;
            color: black !important;
        }

        .spinwheel {
            height: 100vh;
            margin-top: -2.5%;
        }
    </style>

</head>
<body>

<div class="spinwheel d-flex align-items-center justify-content-center">
    <div class="box" id="box1"><b style="font-size: 70px">1</b></div>
    <div class="box" id="box2"><b style="font-size: 70px">2</b></div>
    <div class="box" id="box3"><b style="font-size: 70px">3</b></div>
{{--    <div class="box" id="box4">4</div>--}}


</div>

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

<script>
    const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
    const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
    const pusher = new Pusher(pusherKey, {
        cluster: pusherCluster,
        encrypted: true,
    });

    const kirimPernyataanSesi2 = pusher.subscribe('channel-kirim-pernyataan-sesi-2');
    kirimPernyataanSesi2.bind('event-kirim-pernyataan-sesi-2', function (data) {
        // console.log(data.message);
        if (data.message.pernyataanId != null) {
            location.href = "/sesi2-soal/" + data.message.pernyataanId + "?no=" + data.message.no + "&selectedValue=" + data.message.selectedValue

        }

        // document.getElementById('pernyataanSesi2').innerText = data.message.pernyataan;
        // document.getElementById('sisiSesi2').innerText = data.message.selectedValue;
    });



    const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');
    ankorPindahSesi.bind('event-pindah-sesi', function(data) {
        const sesi = data.message.sesi;

        if (sesi == 3) { window.location.href = `/sesi${sesi}`; }
    });

</script>


<script>
    const boxes = document.querySelectorAll('.box');
    const colors = ['#CFAA5A']; // Warna yang akan digunakan
    let currentBoxIndex = 0;
    let interval;

    // Load status dari LocalStorage
    function loadDisabledBoxes() {
        boxes.forEach((box, index) => {
            if (localStorage.getItem(`box${index + 1}`) === 'disabled') {
                box.classList.add('disabled');
            }
        });
    }

    // Simpan status ke LocalStorage
    function saveDisabledBox(index) {
        localStorage.setItem(`box${index + 1}`, 'disabled');
    }

    function startColorChange() {
        interval = setInterval(() => {
            // Cari box yang tidak di-disable
            while (boxes[currentBoxIndex].classList.contains('disabled')) {
                currentBoxIndex = (currentBoxIndex + 1) % boxes.length;
            }

            // Reset semua box ke warna putih dan teks ke warna hitam
            boxes.forEach(box => {
                if (!box.classList.contains('disabled')) {
                    box.style.backgroundColor = 'white';
                    box.style.color = 'black';
                }
            });

            // Ubah warna box saat ini dan teks ke warna putih
            boxes[currentBoxIndex].style.backgroundColor = colors[0];
            boxes[currentBoxIndex].style.color = 'white';

            // Pindah ke box berikutnya
            currentBoxIndex = (currentBoxIndex + 1) % boxes.length;
        }, 500); // Warna berubah setiap 500ms
    }

    function stopColorChange() {
        clearInterval(interval);
        boxes.forEach((box, index) => {
            if (index === (currentBoxIndex - 1 + boxes.length) % boxes.length) {
                // Simpan box yang terpilih sebagai disabled di LocalStorage
                saveDisabledBox(index);
                // box.classList.add('disabled');
                box.style.backgroundColor = colors[0]; // Tetapkan warna yang sama
                box.style.color = 'white'; // Tetapkan warna teks yang sama
            } else {
                // Reset box yang tidak dinonaktifkan ke warna putih
                if (!box.classList.contains('disabled')) {
                    box.style.backgroundColor = 'white'; // Kembali ke warna putih
                    box.style.color = 'black'; // Kembali ke warna teks hitam
                }
            }
        });
    }

    // Load status saat halaman di-load
    document.addEventListener('DOMContentLoaded', loadDisabledBoxes);

    document.addEventListener('keypress', function (e) {
        if (e.which === 13) { // Jika tombol Enter ditekan
            startColorChange();

            // Tentukan waktu acak antara 5 dan 10 detik untuk menghentikan perubahan warna
            const randomTime = Math.floor(Math.random() * 5000) + 5000; // 5000ms hingga 10000ms
            setTimeout(stopColorChange, randomTime);
        }
    });

    const setpoin = pusher.subscribe('channel-spin-sesi-2');
    setpoin.bind('event-spin-sesi-2', function(data) {
        console.log(data)
            startColorChange();
            const randomTime = Math.floor(Math.random() * 5000) + 5000;
            setTimeout(stopColorChange, randomTime);
    });
</script>
</body>
</html>
