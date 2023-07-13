@inject('site', 'App\\Services\\SiteService')

@if (Route::is('products') || Route::is('solutions'))
<section class="position-relative py-4" style="border-top: 1px solid #808080;" data-aos="fade-left">
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="" style="">
            <div class="position-breadcrumb">
                <div class="container"> 
                    <nav aria-label="breadcrumb" class=" flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                        @if ($site->getBreadTitle())
                            <h1 class="fs-48 fs-lora mb-0 w-100 text-center text-lg-start text-white">
                                {{ $site->getBreadTitle() }}
                            </h1>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-lg-start justify-content-center align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active text-orange" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none text-orange" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                                    </li>
                                @endif
                            @endforeach
                            @if (Route::is('solutions'))
                            <div class="row">
                                <div class="col-lg-8 d-flex align-items-center">
                                    <p class="fs-16 fw-400 text-lg-start text-center text-white mt-1 text-bread-solutions">
                                        O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.
                                    </p>
                                </div>
                                
                                <div class="col-lg-4 d-flex align-items-center">
                                    <img class="img-selo" width="180px" src="{{ asset("front/images/backgrounds/selo.png") }}" alt="" title="">
                                </div>                                
                            </div>
                            @endif
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
<section class="pt-1 products-breadcrumb" style="" data-aos="zoom-out-up" style="background-image: url({{ asset("front/images/backgrounds/bg-solutions.png") }});background-size: cover;">
    <div class="container position-relative">
        <div class="row bg-cinza rounded-5-top m-auto p-1 d-lg-none select-products" style="background-image: url({{ asset("front/images/backgrounds/bg-solutions.png") }});background-size: cover;">
            <div class="col-lg-12 m-auto pt-1">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Tipo do imóvel"
                            name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Condição do imóvel"
                            name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Cidade"
                            name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Bairro"
                            name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Área aproximada"
                            name="states[]" multiple="multiple" data-placeholder="Status do imóvel">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100">
                            <input type="text" class="form-control form-select-mobile" placeholder="Valor mín.">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                       <div class="w-100">
                        <input type="text" class="form-control form-select-mobile" placeholder="Valor máx.">
                       </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                            multiple="multiple" data-placeholder="Quartos">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                            multiple="multiple" data-placeholder="Banheiros">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6 d-flex justify-content-center m-auto p-0-50 mt-0-50">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                            multiple="multiple" data-placeholder="Vagas">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-12 mt-2 d-lg-none">
                <input type="text" class="form-control form-control-breadcrumb" placeholder="Nome ou código (ex: A001) do imóvel">
            </div>
                <div class="col-12 align-items-center d-flex gap-2 mt-1 justify-content-center justify-content-lg-around">
                    <button class="btn btn-orange rounded-5 my-1" style="">
                        Buscar imóvel
                    </button>
                </div>
        </div>
        <div class="row bg-cinza rounded-5-top m-auto p-1 d-none d-lg-block select-products" style="background-image: url({{ asset("front/images/backgrounds/bg-solutions.png") }});background-size: cover;">
            <div class="col-lg-12 m-auto pt-1">
                <div class="row m-auto">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Tipo do imóvel"
                            name="states[]" multiple="multiple">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Condição do imóvel"
                            name="states[]" multiple="multiple">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Cidade"
                            name="states[]" multiple="multiple">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Bairro"
                            name="states[]" multiple="multiple">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" data-placeholder="Área aproximada"
                            name="states[]" multiple="multiple">
                                <option value="sd">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-lg-12 m-auto">
                <div class="row m-auto pt-1">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <input type="text" class="form-control form-select-mobile" placeholder="Valor mín.">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                       <div class="w-100">
                        <input type="text" class="form-control form-select-mobile" placeholder="Valor máx.">
                       </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                            multiple="multiple" data-placeholder="Quartos">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                            multiple="multiple" data-placeholder="Banheiros">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center m-auto p-0">
                        <div class="w-100">
                            <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" 
                            multiple="multiple" data-placeholder="Vagas">
                                <option value="">Selecione um status</option>
                            </select>
                        </div>
                    </div>
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
</section>
@else
<section class="position-relative py-3" style="border-top: 1px solid #808080;" data-aos="fade-left">
    <div class="col-lg-12 position-relative end-0 top-0 d-lg-block" >
        <div class="" style="">
            <div class="position-breadcrumb">
                <div class="container"> 
                    <nav aria-label="breadcrumb" class=" flex-column flex-sm-row gap-0-50 align-items-center justify-content-between position-relative z-index-1">
                        @if ($site->getBreadTitle())
                            <h1 class="fs-48 fs-lora mb-0 w-100 text-center text-lg-start text-white">
                                {{ $site->getBreadTitle() }}
                            </h1>
                        @endif
                        <ol class="breadcrumb d-flex justify-content-lg-start justify-content-center align-items-center">
                            @foreach ($site->getBreadCrumbs() as $bread)
                                @if ($loop->last)
                                    <li class="breadcrumb-item active text-orange" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none text-orange" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
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
