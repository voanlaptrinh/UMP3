<header class="container">
    <nav class="navbar navbar-expand-lg container pt-4 pb-4">
        <div class="container-fluid">
            <div>
                <a href="/">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo" width="50px" height="50px" class="logo">
                </a>
                <span class="logo-text ps-3 pt-2" style="font-size: 20px">Downloader</span>
               
            </div>
            {{-- <a class="navbar-brand" href="/">Navbar scroll</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="    background-color: #d9d9d9;border: 1px solid #919191;" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse pt-3" id="navbarSupportedContent">
                <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">


                    <?php if(isset($controller->supportedLanguages)){ ?>
                        <li class="nav-item dropdown ">
                            <a class="btn btn-light dropdown-toggle text-black drop-hover w-100 text-uppercase" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ app()->getLocale() }}
                            </a>
                            <ul class="dropdown-menu show-lang">
                                <?php foreach ($controller->supportedLanguages as $hl_code) {
                                    $hl_txt = @$controller::$fullLanguages[$hl_code];
                                    echo '<li> <a class="dropdown-item text-black" href="' . $controller->createUrl(Request::route()->getName(), ['hl' => $hl_code]) . '">' . $hl_txt . '</a></li>';
                                } ?>
                            </ul>
                        </li>
                    <?php } ?>


                </ul>
            </div>
        </div>
    </nav>
</header>