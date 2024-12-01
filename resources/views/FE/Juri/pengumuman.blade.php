<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perlombaan Babak Penyisihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .greeting {
            font-weight: bold;
        }

        .winner-list {
            list-style-type: none;
            padding: 0;
        }

        .winner-item {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <p class="greeting">Assalamu’alaikum Warahmatullahi Wabarakatuh,</p>
    <p>Salam Sejahtera Untuk Kita Sekalian,</p>
    <p>Berdasarkan perolehan nilai pada Sesi Pertama: Wawasan Empat Pilar MPR, Sesi Kedua: Sesi Tematik Empat Pilar MPR,
        dan Sesi Ketiga: Rebutan Satu Lawan Satu, hasil perlombaan
        Babak {{$setting->run == 4 ? "Final" :"Penyisihan ". $setting->run }}
        Lomba Cerdas Cermat Empat
        Pilar MPR RI Tahun 2024 di Provinsi Aceh adalah sebagai berikut:</p>

    <ul class="winner-list">
        <li class="winner-item">
            <strong>Juara Ketiga:</strong><br>
            Regu <b>{{$teams[2]->name}}</b><br>
            Dari <b>{{$teams[2]->school}}</b>.<br>
            Dengan nilai <b> {{$teams[2]->participant_sum_poin}}</b>.
        </li>
        <li class="winner-item">
            <strong>Juara Kedua:</strong><br>
            Regu <b>{{$teams[1]->name}}</b><br>
            Dari <b>{{$teams[1]->school}}</b>.<br>
            Dengan nilai <b>{{$teams[1]->participant_sum_poin}}</b>.
        </li>
        <li class="winner-item">
            <strong>Juara Pertama:</strong><br>
            Regu <b>{{$teams[0]->name}}</b><br>
            Dari <b>{{$teams[0]->school}}</b>.<br>
            Dengan nilai <b>{{$teams[0]->participant_sum_poin}}</b>.<br>
            <br>
            Dengan demikian,<b> {{$teams[0]->name}}</b>. Dari <b>{{$teams[0]->school}}</b>. sebagai Juara pada Babak
            {{$setting->run == 4 ? "Final Lomba Cerdas Cermat Empat Pilar MPR RI Tahun 2024 di Provinsi Aceh." : "Penyisihan ". $setting->run ." dan berhak melanjutkan ke Babak Final." }}
        </li>
    </ul>

    <p>Demikian hasil perlombaan pada kali ini dan kami ucapkan selamat kepada seluruh peserta.</p>
    <p class="greeting">Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
</div>
</body>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });
    const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');
    ankorPindahSesi.bind('event-pindah-sesi', function (data) {
        const sesi = data.message.sesi;
        if (sesi == 1) {
            window.location.href = `/sesi${sesi}-juri`;
        }

    });
</script>
</html>
