<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPR Quiz | Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- PUSHER --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    @vite(['resources/css/app.css' , 'resources/js/app.js'])

    <style>
        /* body{
            height: 100vh;
        }  */
        /* CSS */
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

        .bg-gif{
            width: 100%;
            height: 100vh;
            object-fit: cover;
            position: relative;
        }
        .div-wrap{
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .container{
            font-family: "Poppins", sans-serif;
        }
        .top-content h2{
            font-family: 'Press Start 2P', system-ui;
            color: #5785DD;
        }
        .logo-top{
            width: 25%;
        }
        .wrap-countdown{
            position: absolute;
            bottom: 7.5%;
            width: 100%;
            height: max-content;
        }
        .countdown{
            width: 15vw;
            /* height: 15vw; */
            /* border: 1px solid red; */
            /* border-radius: 10px; */
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
        #countdown-div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vw;
            height: 100vh;
        }
        .background-waktu-habis{
            position: relative;
            background-color: red;
            opacity: 50%;
            width: 100%;
            height: 100%;
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

        .soal h1{
            font-weight: 600;
            width: 100%;
            text-align: center;
        }
        .animate-text {
            overflow: hidden; /* Membuat teks terpotong dan tidak terlihat */
            animation: revealText .0005s steps(20, end); /* Menggunakan animasi dengan 20 langkah untuk mengungkapkan teks */
        }

        @keyframes revealText {
            from { width: 0; }
            to { width: 100%; }
        }

        .jawaban{
            width: 75%;
            margin: 0 auto;
        }
        .list-jawaban{
            border-radius: 50px;
            background: rgb(60,60,60);
            background: linear-gradient(0deg, rgba(60,60,60,1) 19%, rgba(145,145,145,1) 100%);
            color: white;
        }
        .list-jawaban h5:nth-child(2){
            display: none;
        }
        .jawaban-benar h5:nth-child(2){
            display: block !important;
        animation: slideRight 1s ease forwards;

        }
        @keyframes slideRight {
            0% {
                transform: translateX(-40%);
            }
            100% {
                transform: translateX(0);
            }
        }
        .jawaban-benar {
            background: rgb(232, 55, 45);
            background: linear-gradient(0deg, rgba(232, 55, 45, 1) 13%, rgba(255, 127, 35, 1) 59%);
        }
        .salah-jawaban{
            position: absolute !important;
            height: 100%;
            width: 100%;
            z-index: 99;
            background-color: red;
            opacity: .5;
            display: none;
        }
        .popup {
                backdrop-filter: blur(5px);
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 99999999;
                border: none !important;
                outline: none !important;
            }
            .wrap-count-point{
                width: max-content;
                border-radius: 20px;
                padding: 5rem;
                background: rgb(232, 55, 45);
                background: linear-gradient(0deg, rgba(232, 55, 45, 1) 13%, rgba(255, 127, 35, 1) 59%);
                color: white;
                border: none !important;
                outline: none !important;
            }
            .wrap-count-point h1{
                font-family: "Poppins", sans-serif;
                font-weight: bold;
            }
    </style>

    {{-- Pusher script --}}
    <script>
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

        var channel = pusher.subscribe('my-channel');

        channel.bind('my-event', function(data) {
            // Update question container with received question
            console.log('data', data);
            document.getElementById('question-container').innerHTML = data.message;

            // You can also use data.message to further process the received question
            // For example, if you want to log it or use it in some other way:
            var pertanyaan = data.message;
            console.log("Pertanyaan received:", pertanyaan);

            // Now you can use the pertanyaan variable to handle the received question further
        });

        // PUSHER PINDAH HALAMAN KE SESI 2
        var channel7 = pusher.subscribe('channel-move-sesi');

        channel7.bind('event-move-sesi', function(data) {
            console.log('event-move-sesi', data.message);
            if (data.message.capecape === "sesi-2") {
                window.location.href = "/sesi2";
            }
        });
    </script>
    {{-- /Pusher script --}}

  </head>
  <body>
    <img class="bg-gif" src="../images/sesi-1-quiz.gif" alt="">
    <div class="wrap-countdown d-flex justify-content-center">
        <div class="countdown px-3 py-2 d-flex align-items-start justify-content-center">
            <h3 id="countdown" class="mb-0">30.</h3>
            <h5 id="countdown-milidetik">00</h5>
        </div>
    </div>
    <div class="div-wrap">
        <div class="salah-jawaban"></div>
        <div class="container">
            <div id="countdown-div" style="display: none;">
                <div class="background-waktu-habis"></div>
                <h1>Waktu Habis!</h1>
            </div>

            <div class="top-content d-flex align-items-center justify-content-between my-2">
                {{-- <h2>SESI 1</h2> --}}
                <div class="d-flex align-items-center gap-4 logo-top">
                    {{-- <img src="../images/mpr.png" alt="">
                    <img src="../images/kemendikbud.png" alt=""> --}}
                </div>
                {{-- <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
                    <h1 id="countdown" class="mb-0">30</h1>
                </div> --}}
            </div>

            <div class="soal">
                <h1 class="animate-text">{{ $quiz->pertanyaan}}</h1>
            </div>



            {{-- <div class="jawaban ">
                @foreach($jawaban as $jw)
                <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="{{$loop->iteration}}">
                    <h5 class="mb-0">{{$loop->iteration}}.</h5>
                    <h5 class="mb-0 text-center w-100">{{$jw->jawaban}}</h5>
                </div>
                @endforeach
            </div> --}}


        </div>

    </div>

    {{-- ANIMASI TEXT --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var text = document.querySelector('.animate-text');
            var textContent = text.textContent;
            text.innerHTML = '';

            for (var i = 0; i < textContent.length; i++) {
                (function(i) {
                    setTimeout(function() {
                        var span = document.createElement('span');
                        span.textContent = textContent[i];
                        span.classList.add('fade-in');
                        text.appendChild(span);
                    }, 75 * i); // Ubah 100 sesuai dengan kecepatan yang Anda inginkan
                })(i);
            }
        });
    </script>

    {{-- COUNTDOWN --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var countdownSeconds = 30; // Ubah kembali ke 20 jika menggunakan detik
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
                    pesan: 'StartCountdownSesi1',
                },
                success: function(response) {
                    console.log('Question successfully sent to Pusher.');
                },
                error: function(xhr, status, error) {
                    console.error('Failed to send question to Pusher:', error);
                }
            });
        }

        // Inisialisasi audio di luar fungsi startCountdown
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

                // Memperbarui tampilan detik dan milidetik
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

                document.addEventListener('keydown', function(event) {
                    if (event.key === '') {
                        clearInterval(countdownInterval);
                    var countdownDiv = document.getElementById('countdown-div');
                    countdownDiv.style.display = 'block';
                    // Tambahkan event listener untuk menangani tombol Enter
                    document.addEventListener('keydown', handleEnterKey);
                    }
                });

                // Menghentikan countdown dan menampilkan elemen countdown-div saat hitung mundur selesai
                if (seconds === 0) {
                    clearInterval(countdownInterval);
                    var countdownDiv = document.getElementById('countdown-div');
                    countdownDiv.style.display = 'block';
                    // Tambahkan event listener untuk menangani tombol Enter
                    document.addEventListener('keydown', handleEnterKey);
                } else {
                    // Update setiap 10 milidetik
                    countdownInterval = setTimeout(updateCountdown, 10);
                }

                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Shift') {
                        clearInterval(countdownInterval);
                        var countdownDiv = document.getElementById('countdown-div');
                        countdownDiv.style.display = 'block';
                        // Tambahkan event listener untuk menangani tombol Enter
                        document.addEventListener('keydown', handleEnterKey);
                    }
                });

            }, 7.5);
        }


        function handleEnterKey(event) {
            if (event.key === 'Enter') {
                window.location.href = '/sesi1-nilai';
            }
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === ' ') {
                startCountdown();
                kirimCountdown();
            }
        });
    });
</script>


    {{-- SHORTCUT --}}
    <script>
        document.addEventListener('keydown', function(event) {
            // Mendapatkan kode tombol yang ditekan
            var key = event.key;
            // Mendapatkan elemen dengan id sesuai dengan angka yang ditekan
            var element = document.getElementById(key);
            // Memeriksa apakah elemen ditemukan dan apakah itu belum memiliki kelas "jawaban-benar"
            if (element && !element.classList.contains('jawaban-benar')) {
                // Menambahkan kelas "jawaban-benar" ke elemen
                element.classList.add('jawaban-benar');
            }
        });

        // Membuat elemen audio
        var audio = new Audio('../images/salah.mp3');

        document.addEventListener('keydown', function(event) {
        // Mendapatkan huruf tombol yang ditekan
        var key = event.key;
        // Memeriksa jika huruf tombol adalah "x"
        if (key === 'x') {
            // Memainkan suara
            audio.play();
            // Menunda penambahan gaya CSS ke elemen dengan kelas "salah-jawaban" selama satu detik
                var jawabanSalahElements = document.getElementsByClassName('salah-jawaban');
                for (var i = 0; i < jawabanSalahElements.length; i++) {
                    jawabanSalahElements[i].style.display = 'block';
                }
                // Mengubah kembali properti display menjadi none setelah satu detik
                setTimeout(function() {
                    for (var i = 0; i < jawabanSalahElements.length; i++) {
                        jawabanSalahElements[i].style.display = 'none';
                    }
                }, 2000); // Waktu penundaan dalam milidetik (1 detik = 1000 milidetik)
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'F2') {
                // Arahkan pengguna ke route sesi2
                window.location.href = "/sesi2";
            }
        });
    </script>

    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
