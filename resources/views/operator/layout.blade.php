<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('dist/assets/extensions/choices.js/public/assets/styles/choices.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark')}}.css">

    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <link rel="stylesheet" href="{{asset('dist/assets/extensions/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/pages/simple-datatables.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/shared/iconly.css')}}')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/extensions/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/extensions/toastify-js/src/toastify.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/pages/filepond.css')}}">

    @stack('header.javascript')
</head>

<style>
    .sidebar-wrapper .sidebar-header img{
        height: auto!important;
    }

    @media only screen and (max-width: 700px) {
        .team-selection {
            flex-direction: column;
        }
    }
</style>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="#"><img src="{{asset('tabler/static/logo.svg')}}" width="90" alt="Logo" srcset=""></a>
                {{-- <a href="#"><img src="{{asset('frontend/assets/img/logo.png')}}" width="90" alt="Logo" srcset=""></a> --}}
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            <li class="sidebar-item {{ (request()->is('op/sesi-1')) ? 'active' :  '' }}" onclick="movesesimen('sesi-1')">
                <a href="/op/sesi-1" class='sidebar-link' id="sesi-1-link" >
                <i class="bi bi-1-square"></i>
                    <span>Sesi 1</span>
                </a>
            </li>
            <li class="sidebar-item {{ (request()->is('op/sesi-2')) ? 'active' :  '' }}" >
                <a href="/op/sesi-2" class='sidebar-link' id="sesi-2-link" >
                <i class="bi bi-2-square"></i>
                    <span>Sesi 2</span>
                </a>
            </li>
            <li class="sidebar-item {{ (request()->is('op/perolehan-nilai')) ? 'active' :  '' }}">
                <a href="/op/perolehan-nilai" class='sidebar-link'>
                <i class="bi bi-check-circle"></i>
                <span>Perolehan Nilai</span>
                </a>
            </li>
            @php
                use App\Models\Wilayah;
                $wilayahs = Wilayah::where('status', 1)->get()
            @endphp
            <li class="sidebar-item {{ Route::is('operator.sesi3*') ? 'active' : '' }} has-sub">
                <a href="#" class="sidebar-link"><i class="bi bi-stack"></i><span>Sesi 3</span>
                </a>
                <ul class="submenu {{ Route::is('operator.sesi3*') ? 'active' : '' }} submenu-closed" style="--submenu-height: 774px;">
                    @foreach ($wilayahs as $wilayah)
                        <li class="submenu-item {{ Route::is('operator.sesi3*') ? 'active' : '' }}">
                            <a href="{{ route('operator.sesi3', ['wilayah_id' => $wilayah->id]) }}" class="submenu-link">{{ $wilayah->nama_wilayah }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="sidebar-item ">
                <a href="{{ Route('operator.logout') }}" class='sidebar-link text-danger'>
                <i class="bi bi-box-arrow-left text-danger"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="main-content">
                @yield('layout')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('dist/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('dist/assets/js/app.js')}}"></script>

<!-- Need: Apexcharts -->

<script src="{{asset('dist/assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('dist/assets/js/pages/simple-datatables.js')}}"></script>
<script src="{{asset('dist/assets/extensions/filepond/filepond.js')}}"></script>
<script src="{{asset('dist/assets/extensions/toastify-js/src/toastify.js')}}"></script>
<script src="{{asset('dist/assets/js/pages/filepond.js')}}"></script>
<script src="{{asset('dist/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('dist/assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('dist/assets/extensions/choices.js/public/assets/scripts/choices.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('dist/assets/js/pages/form-element-select.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.5/sweetalert2.all.js" integrity="sha512-AINSNy+d2WG9ts1uJvi8LZS42S8DT52ceWey5shLQ9ArCmIFVi84nXNrvWyJ6bJ+qIb1MnXR46+A4ic/AUcizQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="{{asset('image-uploader/dist/image-uploader.min.js')}}"></script>
@stack('scripts')

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>


{{-- PUSHER --}}

<script>
    // Function to send a question
    function movesesimen(sessionId) {
        // Peserta's view
        $.ajax({
            method: 'GET',
            url: '/sesi1',
            data: {
                _token: '{{ csrf_token() }}',
                capecape: sessionId,
            },
            success: function(response) {
                console.log('Push peserta ke halaman selanjutnya.', sessionId);
            },
            error: function(xhr, status, error) {
                console.error('Failed to send question to Pusher:', error);
            }
        });

        // Juri's view
        $.ajax({
            method: 'GET',
            url: '/sesi1-juri',
            data: {
                _token: '{{ csrf_token() }}',
                capecape: sessionId,
            },
            success: function(response) {
                console.log('Push juri ke halaman selanjutnya.', sessionId);
            },
            error: function(xhr, status, error) {
                console.error('Failed to send question to Pusher:', error);
            }
        });
    }
</script>

<!-- Page Specific JS File -->
<script type="text/javascript">
    $('.delete').click(function(){
      Swal.fire({
        title: "Are you sure?",
        text: "Are you sure?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it",
        closeOnConfirm: false
      }).then((result) => {
        if(result.isConfirmed){
          $(this).closest("form").submit();
          Swal.fire(
            'Deleted',
            'You have successfully deleted',
            'success',
          );
        }
      });
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>

</html>
