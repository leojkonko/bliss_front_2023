<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <x-custom-code type="head" />
    <x-lgpd-head-script />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agência Ellite Digital">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- Fonte temporária --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Swiper.js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.css" integrity="sha512-Ja1oxinMmERBeokXx+nbQVVXeNX771tnUSWWOK4mGIbDAvMrWcRsiteRyTP2rgdmF8bwjLdEJADIwdMXQA5ccg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
    {{--  --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Front css --}}
    @vite(['resources/front/sass/vendors/bootstrap/bootstrap.scss', 'resources/front/sass/main.scss'])

    <x-head-tags />
    @livewireStyles
</head>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="position-absolute bg-dark rounded-circle d-flex p-0-50 start-50 translate-middle-x align-items-center justify-content-center" style="bottom: -50px;background: #808080;">
    <button type="button" class="btn-close text-reset btn-close text-reset bg-btn-offcanvas rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class=" p-0">
    <div class="offcanvas-body row bg-cinza m-auto p-1 d-none d-lg-block select-products" style="background-image: url({{ asset("front/images/backgrounds/breadcrumb.png") }});background-size: cover;">
        <div class="col-lg-12 m-auto pt-1">
            <div class="row m-auto">
                @foreach (range(0,4) as $banner)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Tipo do imóvel"
                            name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>  
        <div class="col-lg-12 m-auto">
            <div class="row m-auto pt-1">
                @foreach (range(0,4) as $banner)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                    <div class="w-100">
                        <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                        multiple="multiple" data-placeholder="Status do imóvel">
                            <option value="">Selecione um status</option>
                        </select>
                    </div>
                </div>
                @endforeach
            </div>
        </div>  
            <div class="col-12 align-items-center ps-2 d-flex gap-2 mt-1">
                <div class="d-flex gap-0-50 justify-content-around ms-auto w-100">
                        <input type="text" class="form-control form-control-breadcrumb" placeholder="Nome ou código (ex: A001) do imóvel">
                </div>
                <button class="btn btn-orange me-2 rounded-5 my-1" style="    margin-right: 20px;">
                    Buscar imóvel
                </button>
            </div>
    </div>
  </div>
</div>
 {{-- blog--}}

  {{--end blog--}}
<div class="offcanvas offcanvas-end" style="background-image: url({{ asset('front/images/backgrounds/bliss-select2.png') }})" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset bg-btn-offcanvas rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
      </button>
    </div>
    <div class="offcanvas-body position-relative">
      <div class="d-flex justify-content-center mt-4">
        <x-site-menu />
      </div>
      <div class="position-absolute start-50 translate-middle-x" style="bottom: 5%;">
        <a href="">
            <img class="" width="130px" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
        </a>
        <div class="d-flex gap-2 mt-2">
            <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer " style="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_170)">
                    <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="white" fill-opacity="0.5"/>
                    <path d="M12 5.83801C8.597 5.83801 5.838 8.59701 5.838 12C5.838 15.403 8.597 18.162 12 18.162C15.403 18.162 18.162 15.403 18.162 12C18.162 8.59701 15.403 5.83801 12 5.83801ZM12 16C9.791 16 8 14.209 8 12C8 9.79101 9.791 8.00001 12 8.00001C14.209 8.00001 16 9.79101 16 12C16 14.209 14.209 16 12 16Z" fill="white" fill-opacity="0.5"/>
                    <path d="M18.406 7.03399C19.2013 7.03399 19.846 6.38928 19.846 5.59399C19.846 4.7987 19.2013 4.15399 18.406 4.15399C17.6107 4.15399 16.966 4.7987 16.966 5.59399C16.966 6.38928 17.6107 7.03399 18.406 7.03399Z" fill="white" fill-opacity="0.5"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_31_170">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>                                                                                  
            </a>
            <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer " style="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_175)">
                    <path d="M24 12.073C24 18.062 19.606 23.027 13.87 23.928V15.565H16.659L17.19 12.105H13.87V9.86C13.87 8.913 14.334 7.991 15.82 7.991H17.329V5.045C17.329 5.045 15.959 4.811 14.65 4.811C11.916 4.811 10.13 6.468 10.13 9.467V12.104H7.091V15.564H10.13V23.927C4.395 23.025 0 18.061 0 12.073C0 5.446 5.373 0.072998 12 0.072998C18.627 0.072998 24 5.445 24 12.073Z" fill="white" fill-opacity="0.5"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_31_175">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>                                                                                                  
            </a>
            <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer " style="">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_181)">
                    <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35258V8.99709H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19967 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.22719 4.19967 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.22719 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.99709H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761831 23.1899 -0.0128484 22.2224 0.000161495" fill="white" fill-opacity="0.5"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_31_181">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>                                                                                                     
            </a>
        </div>
      </div>
    </div>
  </div>
{{----}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-image: url({{ asset("front/images/backgrounds/company-bg.png") }});background-size: cover;">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset bg-dark p-1 rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        <div class="col-12">
            <input type="text" class="form-control form-offcanvas" placeholder="Busque por código" name="" id="">
        </div>
        <div class="col-12 mt-2">
              <div class="offcanvas-start-mobile">
                <div >
                    <div class="col-12">
                        <h4 class="fs-16 fw-700">Tipo do imóvel</h4>
                        <select name="" id="" class="form-select form-select-cinza">
                            <option value="">Selecione um tipo</option>
                        </select>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="fs-16 fw-700">Localização</h4>
                        <div class="d-flex gap-0-50">
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">Cidade</option>
                            </select>
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">Bairro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="fs-16 fw-700">Área aproximada</h4>
                        <select name="" id="" class="form-select form-select-cinza">
                            <option value="">Selecione uma área</option>
                        </select>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="fs-16 fw-700">Valores</h4>
                        <div class="d-flex gap-0-50">
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">Mín.</option>
                            </select>
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">Máx.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="fs-16 fw-700">Valores</h4>
                        <div class="d-flex gap-0-50">
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">1</option>
                            </select>
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">1</option>
                            </select>
                            <select name="" id="" class="form-select-cinza form-select">
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="d-flex gap-0-50 justify-content-around">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="meuCheckbox" class="checkbox-input d-none" checked>
                            <label for="meuCheckbox" class="checkbox-estilizado me-0-50"></label>
                            Mobiliado
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="meuCheckbox2" class="checkbox-input d-none" >
                            <label for="meuCheckbox2" class="checkbox-estilizado me-0-50"></label>
                            Semi-mobiliado
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-orange w-100">
                            Buscar imóvel
                        </button>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            </div>
        </div>
      </div>
    </div>
  </div>
<body>
    <x-custom-code type="body" />

    <header class="header w-100  isolation-isolate position-relative w-100 top-0 start-0 w-100 {{ Route::is('home') ? "position-absolute" : "" }}" 
    data-aos="zoom-out-up"
            @if (!Route::is('home'))
            style="background-image: url({{ asset('front/images/backgrounds/breadcrumb.png') }}); background-repeat: no-repeat; background-size: cover;"
            @endif>
        <div class="container header-container">
            <div class="row align-items-center py-2 py-lg-2 px-2"
            @if (Route::is('home'))
            style="background-image: url({{ asset('front/images/backgrounds/header.png') }})"
            @endif
            >
                <div class="col-lg-2 col-6">
                    <a class="header-logo" href="{{ route('home') }}" title="Página principal">
                        <img class="" width="216px" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>
                    <div class="col-lg-6 col-6 ms-auto d-flex align-items-center justify-content-end">
                        <div class="d-flex gap-lg-1 gap-0-25">
                            <button class="btn btn-outline-light rounded-5 d-none d-lg-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                Filtro de busca avançado
                                <svg class="ms-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.89445 9.89445L15 15M11.4228 6.21142C11.4228 9.0896 9.0896 11.4228 6.21142 11.4228C3.33323 11.4228 1 9.0896 1 6.21142C1 3.33323 3.33323 1 6.21142 1C9.0896 1 11.4228 3.33323 11.4228 6.21142Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>                                    
                            </button>
                            <button class="btn btn-outline-light rounded-5 p-1 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <svg class="mx-0-25" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.89445 9.89445L15 15M11.4228 6.21142C11.4228 9.0896 9.0896 11.4228 6.21142 11.4228C3.33323 11.4228 1 9.0896 1 6.21142C1 3.33323 3.33323 1 6.21142 1C9.0896 1 11.4228 3.33323 11.4228 6.21142Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>                                    
                            </button>
                            <button class="btn btn-outline-light rounded-5 text-white" style="padding: 5px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="17.5" width="18" height="1" rx="0.5" fill="white"/>
                                    <rect x="24" y="23.5" width="9" height="1" rx="0.5" fill="white"/>
                                    <rect x="20" y="29.5" width="13" height="1" rx="0.5" fill="white"/>
                                </svg>
                            </button> 
                        </div>                              
                    </div>
                </div>
            </div>
        </div>    
        @if (!Route::is('home'))
        <x-breadcrumbs />
    @endif       
    </header>

    
