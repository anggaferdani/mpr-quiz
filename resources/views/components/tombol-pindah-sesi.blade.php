<button class="flex align-items-center gap-3 btn btn-primary" onclick="pindahSesi('{{ $sesiTujuan }}')">
    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-desktop"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10z" /><path d="M7 20h10" /><path d="M9 16v4" /><path d="M15 16v4" /></svg>
    <span>{{ $text }}</span>
</button>

<script>
    function pindahSesi(sessionId) {
        $.ajax({
            method: 'POST',
            url: '/op/pindah-sesi',
            data: {
                _token: '{{ csrf_token() }}',
                sesi: sessionId,
            },
            success: function(response) {
                console.log('Push peserta ke halaman selanjutnya.', sessionId);
            },
            error: function(xhr, status, error) {
                console.error('Failed to send question to Pusher:', error);
            }
        });
    }
</script>
