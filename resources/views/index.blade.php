<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if (app()->isLocale('ar')) dir="rtl" @endif>
@php
    $languages = config('app.available_locales');
    $currentUrl = request()->url();
    $language = app()->getLocale();

    $cleanUrl = preg_replace('/\/' . $language . '\b/', '', $currentUrl);
    $controller = request()->route()->controller;

@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <title>Laravel</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    /* @font-face {
        font-family: 'Roboto';
        src: url('{{ asset('fonts/Roboto-Black.ttf') }}') format('truetype');
    } */

    body {
        font-family: 'Roboto', sans-serif;

    }

    .gradient-background {
        background: linear-gradient(to bottom, white, #16A7EB);
    }

    .btn-blue {
        background: #65C4F1;
        border-radius: 15px
    }

    .input-search {
        border-radius: 19px;
        background: #CDF1FF;
        filter: drop-shadow(2px 8px 4px #bbbbc0)
    }

    .btn-a:not(.active) {
        background-color: #65C4F1;
        color: #ffffff;
        border-radius: 10px;
        padding-bottom: 15px !important;
        justify-content: center
    }

    .nav-tabs .nav-link.active {
        background-color: #16A7EB;
        border-color: #16A7EB;
        border-radius: 10px;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    }

    .pa-left {
        padding-left: 20px;
    }

    .pa-right {
        padding-right: 20px;
    }


    .loader {
        width: 50px;
        height: 50px;
        background-color: #16A7EB;
        border-radius: 50%;
        position: relative;
        box-shadow: 0 0 30px 4px rgba(0, 0, 0, 0.5) inset,
            0 5px 12px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    }

    .loader:before,
    .loader:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 45%;
        top: -40%;
        background-color: #fff;
        animation: wave 5s linear infinite;
    }

    .loader:before {
        border-radius: 30%;
        background: rgba(255, 255, 255, 0.4);
        animation: wave 5s linear infinite;
    }

    @keyframes wave {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .a-none {
        color: #fff;
        text-decoration: none
    }
    .textt-box {
    position: relative;
    width: 100%; 
}

.stretched-link {
    display: inline-block;
    max-width: 100%;
    white-space: nowrap; 
    overflow: hidden;
    text-overflow: ellipsis;
    color: black; 
    text-decoration: none; 
}


</style>

<body>
  @include('header')
   
    @yield('content')



    @include('footer')

  
    <div class="modal fade ppdowload" id="popupDowload" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#16A7EB">
                <h5 class="modal-title text-white" id="exampleModalLabel">@lang('main.convert')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body text-center model_co" id="model">

                   
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script>
    var base_url = '{{ URL::to('/') }}';
    var download = '@lang('main.download')';
    var convert = '@lang('main.convert')';
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

</html>
