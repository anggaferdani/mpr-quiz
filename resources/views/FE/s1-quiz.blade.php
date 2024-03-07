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
    .countdown{
        width: 5rem;
        height: 5rem;
        border: 1px solid red;
        border-radius: 10px;
    }
    .countdown h1{
        color: red;
        font-weight: bold;
        margin-bottom: 0 !important;
    }

    .soal h4{
        font-weight: 600;
        width: 75%;
        text-align: center;
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
        <div class="top-content d-flex align-items-center justify-content-between mb-2">
            <h2>SESI 1</h2>
            <div class="d-flex align-items-center gap-4 logo-top">
                <img src="../images/mpr.png" alt="">
                <img src="../images/kemendikbud.png" alt="">
            </div>
            <div class="countdown px-3 py-2 d-flex align-items-center">
                <h1 id="countdown" class="mb-0">60</h1>
            </div>
        </div>

        <div class="soal d-flex justify-content-center mt-5">
            <h4>Sebutkan pecahan uang kertas dan uang koin TE (Tahun Emisi) 2022!</h4>
        </div>

        <div class="jawaban ">

            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="1">
                <h5 class="mb-0">1.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="2">
                <h5 class="mb-0">2.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="3">
                <h5 class="mb-0">3.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="4">
                <h5 class="mb-0">4.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="5">
                <h5 class="mb-0">5.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="6">
                <h5 class="mb-0">6.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2" id="7">
                <h5 class="mb-0">7.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>

        </div>
    </div>

    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Waktu awal hitungan mundur (dalam detik)
            var countdownSeconds = 30;
    
            // Update elemen dengan ID 'countdown' setiap detik
            var countdownInterval = setInterval(function () {
                // Mendapatkan elemen dengan ID 'countdown'
                var countdownElement = document.getElementById('countdown');
    
                // Mengurangi waktu hitungan mundur setiap detik
                countdownSeconds--;
    
                // Menetapkan teks hitungan mundur ke elemen
                countdownElement.innerText = countdownSeconds;
    
                // Menghentikan hitungan mundur jika sudah mencapai 0
                if (countdownSeconds <= 0) {
                    clearInterval(countdownInterval);
                    // Tampilkan popup
                    var popup = document.createElement('div');
                    popup.classList.add('popup'); // Tambahkan kelas 'popup' untuk gaya CSS
                    popup.innerHTML = '<div class="wrap-count-point"><h1>80 POINT</h1></div>';
                    popup.setAttribute('tabindex', '1'); // Tambahkan atribut tabindex
                    document.body.appendChild(popup);
                    // Fokuskan popup agar pengguna dapat menekan Enter
                    popup.focus();
                    // Tambahkan event listener untuk menangani tombol Enter
                    popup.addEventListener('keydown', function(event) {
                        if (event.key === 'Enter') {
                            window.location.href = '/sesi1-spin'; // Arahkan ke rute sesi1-spin
                        }
                    });

                }
            }, 1000); // Memperbarui setiap 1 detik (1000 milidetik)
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




    </script>
    
@endsection
