
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-lg-49 ratio-xxl-49 overflow-hidden">
        <div class="">
            <div class="swiper-wrapper">
                @foreach (range(0,2) as $banner)
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{--<div class="w-100 h-100 position-absolute" style="
                                background: linear-gradient(90deg, #202020 0%, rgba(32, 32, 32, 0) 100%);
                                opacity: 0.6;"></div>
                            <div class="w-100 h-100 position-absolute z-index-1" style="background: #202020; opacity: 0.4;"></div>
                            <video class="object-fit-cover w-100 h-100 d-none d-lg-block" src="{{ asset("front/images/backgrounds/banner.mp4") }}" 
                                type="video/mp4" muted="" playsinline="" autoplay="" loop="" media="(min-width: 767px)">
                                    Seu navegador não suporta a tag de vídeo.
                                </video>--}}
                                <div class="position-absolute w-100 h-100 z-index-1" style="opacity: 0.6000000238418579;
                                background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, #000 100%);"></div>
                                <img class="object-fit-cover w-100 h-100  efeito-img" id="" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="" media="(min-width: 767px)">
                             
                            {{-- Desktop
                            <source srcset="{{ $banner->getImagemDesktop()->url() }}" media="(min-width: 767px)">
                                --}}
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                        </picture>
                        <div class="position-absolute z-index-3 w-100 start-0 translate-middle-y top-custom-banner banner-position" >
                            <div class="container" data-aos="fade-right">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-6 xol-xxl-4 text-lg-start text-center">
                                        <h2 class="fs-lora fs-64 fw-400 text-white text-lg-start text-center w-100">Viva a experiência.</h2>
                                        <p class="fs-16 fw-400 text-white">Conheça a seleção de imóveis exclusivos da Bliss.</p>
                                        <a href="{{ route_lang('company') }}">
                                            <button class="btn btn-orange rounded-5">
                                                Saiba mais
                                                <svg class="ms-0-50" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 13.5L14 8.5M14 8.5L9 3.5M14 8.5L2 8.5" stroke="white" stroke-linejoin="round"/>
                                                </svg>                                                    
                                            </button>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                            <div class="mt-4 d-none d-lg-block">
                                <div class="container position-relative">
                                    <div class="z-index-background position-absolute w-100 h-100 rounded-5" style="opacity: 0.800000011920929;
                            background: #808080;"></div>
                                    <div class="ps-lg-3">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center align-items-center mb-2 mt-1">
                                                <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" 
                                                data-placeholder="Tipo do imóvel">
                                                    <option value="asda1">Selecione um status</option>
                                                    <option value="asda2">Selecione um status</option>
                                                    <option value="asda3">Selecione um status</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center align-items-center mb-2 mt-1">
                                                <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" 
                                                data-placeholder="Cidade">
                                                    <option value="asda1">Selecione um status</option>
                                                    <option value="asda2">Selecione um status</option>
                                                    <option value="asda3">Selecione um status</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center align-items-center mb-2 mt-1">
                                                <select name="" id="" class="form-select form-select-white my-1 js-example-basic-multiple" name="states[]" multiple="multiple" 
                                                data-placeholder="Bairro">
                                                    <option value="asda1">Selecione um status</option>
                                                    <option value="asda2">Selecione um status</option>
                                                    <option value="asda3">Selecione um status</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex justify-content-center align-items-center mb-2 mt-1">
                                                <input type="text" class="form-control form-control-select" placeholder="Valor mín.">
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 position-relative d-flex justify-content-center align-items-center mb-2 mt-1">
                                                <input type="text" class="form-control form-control-select" placeholder="Valor máx.">
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex justify-content-center">
                                                <button class="btn btn-orange rounded-5 my-2" style="padding: 8px 26px;">
                                                    Buscar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div> 
    
            
            {{--<div class="swiper-button-prev" style="z-index: 13;width: 40px; height: 40px;left: 6%;">
                <button class="rounded-circle" style="width: 40px; height: 40px;background: rgba(0, 0, 0, 0.25); border: none;">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1L1 8L8 15" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </button>                                          
            </div>
            <div class="swiper-button-next" style="z-index: 13;width: 40px; height: 40px;right: 6%">
                <button class="rounded-circle" style="width: 40px; height: 40px;background: rgba(0, 0, 0, 0.25); border: none;">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 15L8 8L1 1" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </button>                                                                                                                 
            </div>--}}
        </div>
    </section>

