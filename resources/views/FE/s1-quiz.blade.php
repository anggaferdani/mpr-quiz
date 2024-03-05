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
    .countdown{
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
    .jawaban-benar{
        background: rgb(232,55,45);
        background: linear-gradient(0deg, rgba(232,55,45,1) 13%, rgba(255,127,35,1) 59%);
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
            <div class="countdown px-3 py-2">
                <h1>10</h1>
            </div>
        </div>

        <div class="soal d-flex justify-content-center mt-5">
            <h4>Sebutkan pecahan uang kertas dan uang koin TE (Tahun Emisi) 2022!</h4>
        </div>

        <div class="jawaban ">

            <div class="list-jawaban jawaban-benar d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">1.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">2.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">3.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">4.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">5.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">6.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>
            <div class="list-jawaban d-flex align-items-center gap-3 px-5 py-3 my-2">
                <h5 class="mb-0">7.</h5>
                <h5 class="mb-0 text-center w-100">Jawaban</h5>
            </div>

        </div>
    </div>
@endsection
