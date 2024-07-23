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

    <style>
        body {
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background-image: url('../images/gif-s1-spin.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .swal2-container h2,
        .swal2-title {
            color: #fff !important;
            font-size: 82px;
            padding: 0 !important;
        }

        .swal2-popup {
            padding: 1.5em 3em !important;
        }

        .swal2-show {
            width: max-content !important;
            padding: 5rem !important;
            border-radius: 25px !important;
            background: #E48F45 !important;
            display: grid;
        }

        .swal2-confirm {
            position: absolute;
            left: -100vw;
        }

        .top-content h2 {
            font-family: 'Press Start 2P', system-ui;
            color: #5785DD;
        }

        .logo-top img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .spinwheel {
            height: 100vh;
            margin-top: -2.5%;
        }

        @media only screen and (max-width: 700px) {
            .spinwheel {
                scale: 60%;
            }
        }

        #randomPernyataan {
            text-align: center;
            font-size: 28px;
            font-weight: 800;
            transition: transform 0.1s ease;
        }

        #randomSisi {
            font-size: 40px;
            font-weight: 800;
            transition: transform 0.1s ease;
        }

        .animate {
            animation: bounce 0.5s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="spinwheel d-flex flex-column align-items-center justify-content-center">
        <div id="randomPernyataan">-</div>
        <div class=" mt-5" id="randomSisi">-</div>
    </div>
</div>

<script>
    // Daftar pernyataan dan sisi
    const choices =<?php echo json_encode($pernyataan->toArray()); ?>;
    // const choices = [
    //     {
    //         pernyataan: 'Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!',
    //         sisi: 'Pro'
    //     },
    //     {
    //         pernyataan: 'BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 ',
    //         sisi: 'Kontra'
    //     }
    // ];

    $(document).on('keypress', function (e) {
        if (e.which == 32) {
            startRandom();
        }
    });

    function startRandom() {
        const intervalTime = 100; // Interval waktu dalam milidetik
        const duration = 3000; // Durasi animasi dalam milidetik

        const pernyataanElement = document.getElementById('randomPernyataan');
        const sisiElement = document.getElementById('randomSisi');
        let interval;

        const startAnimation = () => {
            pernyataanElement.classList.add('animate');
            sisiElement.classList.add('animate');
            interval = setInterval(() => {
                const randomIndex = Math.floor(Math.random() * choices.length);
                const choice = choices[randomIndex];
                pernyataanElement.textContent = choice.pernyataan;
                sisiElement.textContent = choice.sisi;

                // Ubah warna berdasarkan pilihan selama animasi
                // if (choice.sisi === 'Pro') {
                //     sisiElement.style.backgroundColor = 'lightgreen';
                // } else if (choice.sisi === 'Kontra') {
                //     sisiElement.style.backgroundColor = 'lightcoral';
                // }
            }, intervalTime);
        };

        const stopAnimation = () => {
            clearInterval(interval);
            pernyataanElement.classList.remove('animate');
            sisiElement.classList.remove('animate');
            const finalIndex = Math.floor(Math.random() * choices.length);
            const choice = choices[finalIndex];
            pernyataanElement.textContent = choice.pernyataan;
            sisiElement.textContent = choice.sisi;

            // Ubah warna berdasarkan pilihan akhir
            // if (choice.sisi === 'Pro') {
            //     sisiElement.style.backgroundColor = 'lightgreen';
            // } else if (choice.sisi === 'Kontra') {
            //     sisiElement.style.backgroundColor = 'lightcoral';
            // }

            console.log(choice); // Hasilnya
        };

        startAnimation();
        setTimeout(stopAnimation, duration);
    }
</script>
</body>
</html>
