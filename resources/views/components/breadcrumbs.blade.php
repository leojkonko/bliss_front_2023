@inject('site', 'App\\Services\\SiteService')

@if (Route::is('products'))
<section class="py-2 products-breadcrumb" style="" data-aos="zoom-out-up">
    <div class="container position-relative">
        <div class="row d-lg-none bg-cinza rounded-20 p-2">
            @foreach (range(0,4) as $banner)
                <div class="col-md-3 col-sm-4 col-6 d-flex justify-content-center mt-1">
                    <div class="w-100">
                        <p class="fs-16 fw-400 mb-0-50">Status do imóvel</p>
                        <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                            <option value="">Selecione um status</option>
                        </select>
                    </div>
                </div>
            @endforeach
            @foreach (range(0,4) as $banner)
                    <div class="col-md-3 col-sm-4 col-6 d-flex justify-content-center mt-1">
                        <div class="w-100">
                            <p class="fs-16 fw-400 mb-0-50">Status do imóvel</p>
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="opa">Selecione um status</option>
                            </select>
                        </div>
                    </div>
            @endforeach
            <div class="col-12 mt-1">
                <div class="row">
                    <div class="col-12 col-sm-6 justify-content-center ps-2 d-flex gap-2 align-items-center justify-content-sm-end">
                        <div class="d-flex gap-0-50 justify-content-around">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="meuCheckbox" class="checkbox-input d-none" checked>
                            <label for="meuCheckbox" class="checkbox-estilizado me-0-50"></label>
                            Mobiliado
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" id="meuCheckbox" class="checkbox-input d-none" >
                            <label for="meuCheckbox" class="checkbox-estilizado me-0-50"></label>
                            Semi-mobiliado
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 justify-content-sm-end justify-content-center me-2 d-flex">
                        <button class="btn btn-orange rounded-5 my-1">
                            Buscar imóvel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-cinza rounded-20 m-auto p-1 d-none d-lg-block">
            <div class="col-lg-12 m-auto pt-1">
                <div class="row m-auto">
                    @foreach (range(0,4) as $banner)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                            <div class="w-100">
                                <p class="fs-16 fw-400 mb-0-50">Status do imóvel</p>
                                <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                    <option value="">Selecione um status</option>
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
                            <p class="fs-16 fw-400 mb-0-50">Status do imóvel</p>
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>  
                <div class="col-12 align-items-center ps-2 d-flex gap-2">
                    <div class="d-flex gap-0-50 justify-content-around">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="meuCheckbox3" class="checkbox-input d-none" checked>
                            <label for="meuCheckbox3" class="checkbox-estilizado me-0-50"></label>
                            Mobiliado
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="meuCheckbox4" class="checkbox-input d-none" >
                            <label for="meuCheckbox4" class="checkbox-estilizado me-0-50"></label>
                            Semi-mobiliado
                        </div>
                    </div>
                    <button class="btn btn-orange ms-auto me-2 rounded-5 my-1" style="    margin-right: 20px;">
                        Buscar imóvel
                    </button>
                </div>
        </div>
    </div>
</section>
<section class="position-relative bg-white" style="z-index: 4;" data-aos="fade-left">
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="mt-1" style="">
            <div class="">
                <div class="container">
                    <div class="row">
                        <nav aria-label="breadcrumb" class="col-6 flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                            <div>
                                @if ($site->getBreadTitle())
                                    <h1 class="fs-32 fw-700 text-dark mb-0">
                                        {{ $site->getBreadTitle() }}
                                    </h1>
                                @endif
                                <ol class="breadcrumb d-flex justify-content-start align-items-center">
                                    @foreach ($site->getBreadCrumbs() as $bread)
                                        @if ($loop->last)
                                            <li class="breadcrumb-item active text-secondary" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                        @else
                                            <li class="breadcrumb-item">
                                                <a class="text-decoration-none text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </div>
                            </ol>
                        </nav>
                        @if (Route::is('products'))
                        <div class="col-6 d-flex justify-content-end">
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg class="me-0-50" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6L0 6" stroke="#454545" stroke-linejoin="round"/>
                                            <rect width="14" height="1" fill="#454545"/>
                                            <path d="M0 11H6V12H0V11Z" fill="#454545"/>
                                        </svg>                                    
                                        Ordenar listagem
                                        <span class="fw-700"> Menor Valor - Maior Valor</span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#">Menor Valor - Maior Valor</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="position-relative bg-white" style="" data-aos="fade-left">
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="" style="">
            <div class="position-breadcrumb">
                <div class="container"> 
                    <nav aria-label="breadcrumb" class=" flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                        @if ($site->getBreadTitle())
                            <h1 class="fs-32 fw-700 text-dark mb-0 w-100 text-center text-lg-start">
                                {{ $site->getBreadTitle() }}
                            </h1>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-lg-start justify-content-center align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active text-secondary" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                    </li>
                                @endif
                            @endforeach
                            @if (Route::is('blog'))
                                <div class="ms-auto d-flex d-none d-lg-flex">
                                    <div>
                                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample2" aria-controls="offcanvasExample2">
                                            <svg class="me-0-50" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 6L0 6" stroke="#454545" stroke-linejoin="round"/>
                                                <rect width="14" height="1" fill="#454545"/>
                                                <path d="M0 11H6V12H0V11Z" fill="#454545"/>
                                            </svg>                                    
                                            Ordenar listagem
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
