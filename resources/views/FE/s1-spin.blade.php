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
    .spinwheel{
        margin-top: -2.5%;
    }
</style>

@section('content')
    <div class="container">
        <div class="top-content d-flex align-items-center justify-content-between my-2">
            <h2>SESI 1</h2>
            <div class="d-flex align-items-center gap-4 logo-top">
                {{-- <img src="../images/mpr.png" alt="">
                <img src="../images/kemendikbud.png" alt=""> --}}
            </div>
        </div>
    </div>

    <div class="spinwheel d-flex align-items-center justify-content-center">
        <canvas id="canvas" width="650px" height="650px" style="z-index: 999"></canvas>
        <img src="../images/panah.png" alt="">
    </div>
        
        <script type="text/javascript" src="{{asset('spinner/src/rouletteWheel.js')}}"></script>
        <script type="text/javascript">
           $(function() {
            var item = [
                @foreach ($tema as $t)
                    { id: '{{ $t->id }}' ,name: '{{ $t->tema }}' },
                @endforeach
            ];
            console.log('item', item)

    // Simpan data ke local storage jika belum ada
    if (!localStorage.getItem('wheelItem')) {
        var saveToLocal = JSON.stringify(item);
        localStorage.setItem('wheelItem', saveToLocal);
    }

    // Inisialisasi spinwheel dan ambil data dari local storage
    initSpinwheel();

    // Fungsi untuk inisialisasi spinwheel dan ambil data dari local storage
    function initSpinwheel() {
        // Ambil data dari local storage
        var itemJSON = localStorage.getItem('wheelItem');
        var itemsFromLocal = JSON.parse(itemJSON);

        // Inisialisasi spinwheel dengan item yang ada di local storage
        $('#canvas').rouletteWheel({
            items: itemsFromLocal,
            selected: function(key, value) {
                // Simpan nama item yang dipilih ke dalam variabel selectedName
                var selectedName = value.name;
                var selectedid = value.id;

                // Hapus item yang memiliki nama yang sesuai dari local storage
                deleteSelectedItem(selectedName);

                // Tampilkan informasi item yang dipilih
                Swal.fire({
                    title: selectedName,
                    id : selectedid,
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
                    // Redirect ke halaman quiz jika tombol OK diklik
                    if (result.isConfirmed) {
                        window.location.href = "/sesi1-quiz/" + selectedid;
                    }
                });

                // Simpan data terbaru ke local storage
                localStorage.setItem('wheelItem', JSON.stringify(itemsFromLocal));
            },
            spinText: '',
        });
    }

    // Fungsi untuk mencari dan menghapus item yang memiliki nama yang sesuai
    function deleteSelectedItem(selectedName) {
        // Ambil data dari local storage
        var itemJSON = localStorage.getItem('wheelItem');
        var itemsFromLocal = JSON.parse(itemJSON);

        // Filter item yang memiliki nama yang sesuai
        itemsFromLocal = itemsFromLocal.filter(function(item) {
            return item.name !== selectedName;
        });

        // Simpan kembali data yang telah dihapus ke local storage
        localStorage.setItem('wheelItem', JSON.stringify(itemsFromLocal));
    }

    // Fungsi untuk mengembalikan data local storage ke nilai awalnya
    function resetLocalStorage() {
        var item = [
            @foreach ($tema as $t)
                { id: '{{ $t->id }}' ,name: '{{ $t->tema }}' },
            @endforeach
        ];
        var saveToLocal = JSON.stringify(item);
        localStorage.setItem('wheelItem', saveToLocal);
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
@endsection 
