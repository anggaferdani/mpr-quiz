@extends('FE.templateSesi1')
@section('title', 'Quiz Sesi 1')

<style>
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
        bottom: 20px;
        width: 100%;
    }
    .countdown{
        width: 15vw;
        height: 15vw;
        border: 1px solid red;
        border-radius: 10px;
    }
    .countdown h1{
        color: red;
        font-weight: bold;
        margin-bottom: 0 !important;
        font-size: 8vw;
    }

    .soal h2{
        font-weight: 600;
        width: 75%;
        text-align: center;
    }
    .animate-text {
    overflow: hidden; /* Membuat teks terpotong dan tidak terlihat */
    animation: revealText .01s steps(20, end); /* Menggunakan animasi dengan 20 langkah untuk mengungkapkan teks */
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

@section('content')
<div class="salah-jawaban"></div>
    <div class="container">
        <div id="countdown-div" style="display: none;">
            Waktu Habis!
        </div>

        <div class="top-content d-flex align-items-center justify-content-between my-2">
            <h2>SESI 1</h2>
            <div class="d-flex align-items-center gap-4 logo-top">
                {{-- <img src="../images/mpr.png" alt="">
                <img src="../images/kemendikbud.png" alt=""> --}}
            </div>
            {{-- <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
                <h1 id="countdown" class="mb-0">30</h1>
            </div> --}}
        </div>

        <div class="soal d-flex justify-content-center mt-5">
            <h2 class="animate-text">{{ $quiz->pertanyaan }}</h2>
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
    <div class="wrap-countdown d-flex justify-content-center">
        <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
            <h1 id="countdown" class="mb-0">30</h1>
        </div>
    </div>

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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var countdownSeconds = 30; // Ubah kembali ke 20 jika menggunakan detik
        var countdownInterval;

        function startCountdown() {
            countdownInterval = setInterval(function () {
                var countdownElement = document.getElementById('countdown');
                countdownSeconds--;
                countdownElement.innerText = countdownSeconds;

                if (countdownSeconds <= 0) {
                    clearInterval(countdownInterval);
                    var countdownDiv = document.getElementById('countdown-div');
                    countdownDiv.style.display = 'block';
                    // Tambahkan event listener untuk menangani tombol Enter
                    document.addEventListener('keydown', handleEnterKey);
                }
            }, 1000);
        }

        function handleEnterKey(event) {
            if (event.key === 'Enter') {
                window.location.href = '/sesi1-nilai';
            }
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === ' ') {
                startCountdown();
            }
        });
    });
</script>



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
    
@endsection
