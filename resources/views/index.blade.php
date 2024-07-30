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
    <title>{{ $controller->metaTile }}</title>
    <meta name="description" content="{{ $controller->metaDescription }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <!-- Fonts -->
   <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/icon.png') }}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/image/favicon-16x16.png') }}">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/image/favicon-32x32.png') }}">
   <link rel="icon" type="image/png" sizes="144x144" href="{{ asset('/image/android-chrome-144x144.png') }}">
   <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/image/android-chrome-192x192.png') }}">

   <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/image/icons/apple-touch-icon-114x114.png') }}">
   <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/image/icons/apple-touch-icon-120x120.png') }}">
   <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/image/icons/apple-touch-icon-144x144.png') }}">
   <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/image/icons/apple-touch-icon-152x152.png') }}">
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/image/icons/apple-touch-icon.png') }}">
   <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/image/icons/apple-touch-icon-57x57.png') }}">
   <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/image/icons/apple-touch-icon-60x60.png') }}">
   <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/image/icons/apple-touch-icon-72x72.png') }}">
   <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/image/icons/apple-touch-icon-76x76.png') }}">
   <link rel="apple-touch-startup-image" href="{{ asset('/image/icons/apple-touch-icon-180x180.png') }}" />



   <meta property="og:type" content="website">
   <meta property="og:title" content="{{ $controller->metaTile }}">
   <meta property="og:description" content="{{ $controller->metaTile }}">
   <meta property="og:image" content="">
   <meta property="og:locale" content="{{ app()->getLocale() }}">

   <meta itemprop="image" content="">
   <?php
   if ($controller->alternate) {
       echo $controller->alternate;
   }
   ?>



</head>
<style>
    @font-face {
        font-family: 'Roboto';
        src: url('{{ asset('fonts/Roboto-Regular.ttf') }}') format('truetype');
    }

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
<script src="{{asset('/js/popper.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

</script>

</html>
