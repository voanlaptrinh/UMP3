
@extends('index')
@section('content')

<section class="gradient-background">

    <section class=" ">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 pt-5 d-flex flex-column justify-content-center">
                    <h2 class="text-center" style="font-weight: 900; font-size:40px">  @lang('home.h1') </h2>
                    <div class="text-center pt-3 pb-5">
                        <h4>@lang('home.h1sub')</h4>
                    </div>
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative search-form" action="" method="GET" id="form-search">
                                @csrf
                                <input class="form-control p-4 input-search search-input" type="search" value=""
                                    name="search" aria-label="Search" autocomplete="off">
                                <button
                                    class="text-white pt-3 pb-3 me-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover btn btn-blue"
                                    type="submit"  id="btn-submit"> 
                                   @lang('main.download') <i class="bi bi-arrow-right ps-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
        <div class="mb-5 dowload" id="result-search">
           
            

        </div>
        </div>
        <div class="mt-5">
            <img style="max-width:100%" src="{{asset('/image/SKY_1.svg')}}" alt="">
        </div>
    </section>
</section>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 pt-5 d-flex flex-column justify-content-center">

            <h2 class="text-center">@lang('home.h2')</h2>
        </div>
    </div>

    <p class="text-center pt-5 pb-5">@lang('home.h2sub')</p>

    <div class="row justify-content-center">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h2 class="text-center">
              @lang('home.howto')
            </h2>
        </div>
    </div>
    <div class="container px-4 text-center pt-2">
        <div class="row g-3 pt-3">
            <div class="col-lg-4">
                <div class="d-flex pe-3 ps-3 pt-2 pb-2" style="border: 2px solid #16A7EB; border-radius: 10px">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/image/Copy_icon.svg') }}" alt="">
                        <span class="pe-2 ps-2 fw-bold text-uppercase" style="font-size: 15px;">@lang('home.howto1')</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex pe-3 ps-3 pt-2 pb-2" style="border: 2px solid #16A7EB; border-radius: 10px">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/image/Paste_Icon.svg') }}" alt="">
                        <span class="pe-2 ps-2 fw-bold text-uppercase" style="font-size: 15px;">@lang('home.howto2')</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex pe-3 ps-3 pt-2 pb-2" style="border: 2px solid #16A7EB; border-radius: 10px">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/image/Download_Icon.svg') }}" alt="">
                        <span class="pe-2 ps-2 fw-bold text-uppercase" style="font-size: 15px;">@lang('home.howto3')</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section style="background: #16A7EB">
    <div class="mb-5">
        <img src="{{asset('/image/SKY_2.svg')}}" style="max-width:100%" alt="">
    </div>

    <div class="container pt-5 pb-5">
        <h2 class="text-center text-white">@lang('home.ft')</h2>


        <div class="row g-5 pt-5">
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="pe-4 ps-3">
                        <img src="{{ asset('/image/material-symbols_task-alt-rounded.svg') }}" alt="">
                    </div>
                    <div class="text-white">
                        <h4>@lang('home.ft1')</h4>
                        <p>@lang('home.ft1_detail_1')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="pe-4 ps-3">
                        <img src="{{ asset('/image/material-symbols_task-alt-rounded.svg') }}" alt="">
                    </div>
                    <div class="text-white">
                        <h4>@lang('home.ft2')</h4>
                        <p>@lang('home.ft2_detail1')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="pe-4 ps-3">
                        <img src="{{ asset('/image/material-symbols_task-alt-rounded.svg') }}" alt="">
                    </div>
                    <div class="text-white">
                        <h4>@lang('home.ft3')</h4>
                        <p>@lang('home.ft3_detail1')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="pe-4 ps-3">
                        <img src="{{ asset('/image/material-symbols_task-alt-rounded.svg') }}" alt="">
                    </div>
                    <div class="text-white">
                        <h4>@lang('home.ft4')</h4>
                        <p>@lang('home.ft4_detail1')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="pe-4 ps-3">
                        <img src="{{ asset('/image/material-symbols_task-alt-rounded.svg') }}" alt="">
                    </div>
                    <div class="text-white">
                        <h4>@lang('home.ft5')</h4>
                        <p>@lang('home.ft5_detail1')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="pe-4 ps-3">
                        <img src="{{ asset('/image/material-symbols_task-alt-rounded.svg') }}" alt="">
                    </div>
                    <div class="text-white">
                        <h4>@lang('home.ft6')</h4>
                        <p>@lang('home.ft6_detail1')</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-5">
        <img src="{{asset('/image/SKY_1.svg')}}" style="max-width:100%" alt="">
    </div>
</section>
<section>
    <div class="container">
        <h2 class="text-center">@lang('home.qa')</h2>

        <style>
            .accordion-button::after {
                display: none;
            }

            .accordion-button.collapsed .bi-plus {
                display: block;
            }

            .accordion-button.collapsed .bi-dash {
                display: none;
            }

            .accordion-button .bi-plus {
                display: none;
            }

            .accordion-button .bi-dash {
                display: block;
            }

            .accordion-button i {
                margin-left: 0;
             
            }

            .accordion-button:not(.collapsed) {
                color: unset !important;
                background-color: unset !important;
                box-shadow: none !important;
            }
        </style>

        <div class="row g-3 pb-5 ">

            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa1')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa1_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTrue" aria-expanded="true"
                                aria-controls="collapseTrue">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa2')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTrue" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa2_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                aria-controls="collapseThree">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa3')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa3_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsefor" aria-expanded="true"
                                aria-controls="collapsefor">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa4')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapsefor" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa4_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsefire" aria-expanded="true"
                                aria-controls="collapsefire">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa5')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapsefire" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa5_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                aria-controls="collapseSix">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa6')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa6_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseServer" aria-expanded="true"
                                aria-controls="collapseServer">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa7')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseServer" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa7_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="accordionExample">
                    <div class=" mt-3 border-none">
                        <h2 class="accordion-header">
                            <button class="accordion-button background-ca fw-bolder collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="true"
                                aria-controls="collapseeight">
                                <div class="col-12 d-flex  align-items-start justify-content-start">
                                    <div
                                        style="background: #3FB5ED; border-radius: 50%; margin-right: 10px; color:#fff; font-weight: 900">
                                        <i class="bi bi-plus p-1"></i>
                                        <i class="bi bi-dash p-1"></i>
                                    </div>
                                    <div>
                                        @lang('home.qa8')
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseeight" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="ps-5">
                                @lang('home.qa8_detail1')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection