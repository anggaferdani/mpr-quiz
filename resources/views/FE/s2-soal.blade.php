<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">


    <style>
         @keyframes scale {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(2);
            }
        }

        .scale-animation {
            animation: scale .5s linear infinite alternate; /* Ganti 1s menjadi durasi yang Anda inginkan */
        }
        .bg-sesi2-soal{
            position: relative;
            height: 100vh; 
            width: 100%;
            background-image: url(../images/gif-sesi2.gif); 
            background-repeat: no-repeat; 
            object-fit: cover;  
        }
        #content-soal-sesi2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .top-content h2{
            font-family: 'Press Start 2P', system-ui;
            color: #5785DD;
        }
        .text-sesi h1{
            font-family: 'Press Start 2P', system-ui;
            font-size: 7.5vw;
            color: #00CED4;
        }
        .text-sesi h3{
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 3vw;
            color: #FF3421;
        }

        .tanya-sesi2{
            height: 100vh;
            width: 100%;
            object-fit: contain;
        }
        /* .countdown{
            position: absolute;
            left: 50%;
            width: 5rem;
            height: 5rem;
            border: 1px solid red;
            border-radius: 10px;
        }
    .countdown h1{
        color: red;
        font-weight: bold;
        margin-bottom: 0 !important;
    } */
        .wrap-countdown{
            position: absolute;
            bottom: 5%;
            width: 100%;
        }
        .countdown{
            width: 15vw;
            height: 15vw;
            /* border: 1px solid red; */
            /* border-radius: 10px; */
        }
        #countdown-div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vw;
            height: 100vh;
        }
        .countdown h3{
            /* color: rgb(117, 8, 8); */
            color: #FF3421;
            font-weight: bold;
            margin-bottom: 0 !important;
            font-size: 5vw;
        }
        .countdown h5{
            /* color: rgb(117, 8, 8); */
            color: #FF3421;
            font-weight: bold;
            /* margin-bottom: -10% !important; */
            font-size: 3vw;
        }
        #countdown-div h1{
            background-color: red;
            padding: 5rem;
            border-radius: 25px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 1;
            color: white;
            font-weight: bold;
        }

    </style>

  </head>
  <body>

    <img src="../images/gif-sesi2.gif" class="bg-sesi2-soal" alt="">
    
    <!-- {{-- <div class="d-flex justify-content-center">
        <div class="top-content d-flex align-items-center justify-content-between mb-2" style="position: absolute; top: 0; width: 85%">
            <h2>SESI 2</h2>
            <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
                <h1 id="countdown" class="mb-0">30</h1>
            </div>
        </div>
    </div> --}} -->

   <div class="container" id="content-soal-sesi2">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h2 class="fw-bolder text-center" id="showingDataPusher">{{ print_r($data, true) }}</h2>
            </div>
        </div>
    </div>
    <div class="wrap-countdown d-flex justify-content-center">
        <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
            <h3 id="countdown" class="mb-0">30.</h3>
            <h5 id="countdown-milidetik">00</h5>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    
    <script>
            var countdownSeconds = 12; // Ubah kembali ke 20 jika menggunakan detik
            var countdownMilliseconds = countdownSeconds * 1000; // Konversi detik ke milidetik
            var countdownInterval;

            const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
            const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
            const pusher = new Pusher(pusherKey, {
                cluster: pusherCluster,
                encrypted: true, // Add this if you have encryption enabled on Pusher
            });

            function kirimCountdown() {
                $.ajax({
                    method: 'GET',
                    url: '/sesi1-juri',
                    data: {
                        _token: '{{ csrf_token() }}',
                        pesan: 'StartCountdownSesi2',
                    },
                    success: function(response) {
                        console.log('Question successfully sent to Pusher.');
                    },
                    error: function(xhr, status, error) {
                        console.error('Failed to send question to Pusher:', error);
                    }
                });
            }

            var alarmCountdown = new Audio('../images/alarmCountdown2.mp3');

            function startCountdown() {
            countdownInterval = setTimeout(function updateCountdown() {
                var countdownElement = document.getElementById('countdown');
                var countdownElementMilidetik = document.getElementById('countdown-milidetik');
                countdownMilliseconds -= 10; // Kurangi 10 milidetik setiap kali update
                var seconds = Math.floor(countdownMilliseconds / 1000);
                var milliseconds = Math.floor((countdownMilliseconds % 1000) / 10); // Ambil bagian milidetik

                // Tambahkan kelas animasi skala jika detik berada di bawah 10
                if (seconds <= 10 && seconds !== 0) {
                    // Memutar audio jika detik kurang dari atau sama dengan 10
                    alarmCountdown.play();
                    countdownElement.classList.add('scale-animation');
                } else {
                    alarmCountdown.pause();
                    countdownElement.classList.remove('scale-animation');
                }

                if (seconds === 0) {
                    countdownElement.innerText = seconds;
                } else {
                    countdownElement.innerText = seconds + '.';
                }
                countdownElementMilidetik.innerText = milliseconds.toString().padStart(2, '0');

                // Periksa apakah nilai detik mencapai 0, jika ya, hilangkan elemen milidetik
                if (seconds === 0) {
                    countdownElementMilidetik.style.display = 'none';
                } else {
                    countdownElementMilidetik.style.display = 'inline'; // Tampilkan kembali elemen milidetik jika tidak di 0
                    countdownElementMilidetik.innerText = milliseconds.toString().padStart(2, '0');
                }

                if (seconds === 0) {
                    clearInterval(countdownInterval);
                    var countdownDiv = document.getElementById('countdown-div');
                    countdownDiv.style.display = 'block';
                    // Tambahkan event listener untuk menangani tombol Enter
                    document.addEventListener('keydown', handleEnterKey);
                } else {
                    countdownInterval = setTimeout(updateCountdown, 10); // Update setiap 10 milidetik
                    
                }
            }, 7.5);
        }

            document.addEventListener('keydown', function(event) {
                if (event.key === ' ') {
                    startCountdown();
                    kirimCountdown();
                }
            });
    </script>
    
    <script>
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true, // Add this if you have encryption enabled on Pusher
        });
        var channel = pusher.subscribe('channelKirimPertanyaanS2');
        channel.bind('eventKirimPertanyaanS2', function(data) {
            console.log(JSON.stringify(data));
            document.getElementById('showingDataPusher').innerText = data.message.pertanyaan;
        });
    </script>

  </body>
</html>