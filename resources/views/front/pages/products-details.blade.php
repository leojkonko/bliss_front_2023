@extends('front.layout.app')

@section('content')
<!-- Modal -->
{{--<di class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <section class="form-wrapper bg-cinza overflow-hidden">
                <div class="container container-start">
                    <div class="row justify-content-center g-0">
                        <div class="col-xl-7 col-lg-6">
                            <div class="formulario h-100 bg-cinza rounded-0 p-lg-3 p-2 d-flex align-items-center">
                                <div>
                                    <p class="fs-16 fw-400" data-bs-dismiss="modal" aria-label="Close">
                                        <svg class="me-0-50" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 10L4 10M4 10L10 16M4 10L10 4" stroke="#202020" stroke-linejoin="round"/>
                                        </svg>
                                        Voltar</p>
                                    <h2 class="fs-32 fw-600 text-dark w-100 mb-2 text-lg-start text-center">Entre em contato</h2>
                                    <livewire:form-contact />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="ratio ratio-1x1 h-100">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/contato.png") }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
  </di>--}}
    <main id="produto" class="overflow-hidden">
        <div class="position-absolute top-0 start-0" id="infos"></div>
        <section class="produto-detalhe mt-0">
            <div class="container container-start">
                <div class="row ">
                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right">
                        <div class=" h-100 d-flex align-items-center">
                            <div class="p-2">
                                <div class="d-flex gap-1 align-items-center">
                                    <button class="btn btn-orange btn-imovel fs-14">
                                        AA001
                                    </button>
                                    <p class="mb-0 fs-16">
                                        <svg class="me-0-25" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 7V7C3.89543 7 3 7.89543 3 9V12C3 13.1046 3.89543 14 5 14H11C12.1046 14 13 13.1046 13 12V9C13 7.89543 12.1046 7 11 7V7M5 7V5C5 3.34315 6.34315 2 8 2V2C9.65685 2 11 3.34315 11 5V7M5 7H11M8 9.5V11.5" stroke="#808080" stroke-linejoin="round"/>
                                        </svg>                                
                                        Area restita
                                    </p>
                                </div>
                                <h2 class="fs-32 fw-700 mb-2 mt-3">Apartamento novo no condomínio Symphony Towers</h2>
                                <p class="fs-16 fw-400">
                                    <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_78_5835)">
                                        <path d="M8 15.0001V9.00012C5.79086 9.00012 4 7.20926 4 5.00012C4 2.79098 5.79086 1.00012 8 1.00012C10.2091 1.00012 12 2.79098 12 5.00012C12 6.10469 11.5523 7.10469 10.8284 7.82855" stroke="#E67F4E" stroke-linejoin="round"/>
                                        <path d="M6 5.00012C6 3.89555 6.89543 3.00012 8 3.00012" stroke="#E67F4E"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_78_5835">
                                        <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    Exposição    
                                </p>
                                <div class="d-flex gap-2">
                                    <p class="fs-16 fw-400">
                                        <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_78_5919)">
                                            <path d="M1.00006 13.0001V11.5001M15.0001 13.0001V11.5001M2.00006 3.00012V4.50012M2.00006 7.00012V4.50012M14.0001 3.00012V4.50012M14.0001 7.00012V4.50012M14.0001 4.50012H10.6056C9.60255 4.50012 8.66586 5.00143 8.10946 5.83602L8.00006 6.00012L7.89066 5.83602C7.33426 5.00143 6.39757 4.50012 5.39451 4.50012H2.00006M1.00006 11.5001V10.0001C1.00006 8.89555 1.89549 8.00012 3.00006 8.00012H13.0001C14.1046 8.00012 15.0001 8.89555 15.0001 10.0001V11.5001M1.00006 11.5001H15.0001" stroke="#E67F4E" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_78_5919">
                                            <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>                                                                                                                           
                                        1
                                    </p>
                                    <p class="fs-16 fw-400">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 7H15M14 8.5V8.57143C14 9.49873 13.6992 10.401 13.1429 11.1429V11.1429C12.7382 11.6824 12.1031 12 11.4286 12H4.57143C3.89695 12 3.26183 11.6824 2.85714 11.1429V11.1429C2.30076 10.401 2 9.49873 2 8.57143V8.5" stroke="#E67F4E" stroke-linejoin="round"/>
                                            <path d="M3 15V15C3 14.3871 3.34626 13.8269 3.89443 13.5528L4 13.5M12 13.5L12.1056 13.5528C12.6537 13.8269 13 14.3871 13 15V15" stroke="#E67F4E" stroke-linejoin="round"/>
                                            <path d="M3 5.5V2.25C3 1.55964 3.55964 1 4.25 1V1C4.94036 1 5.5 1.55964 5.5 2.25V3" stroke="#E67F4E" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                                                                              
                                        1
                                    </p>
                                    <p class="fs-16 fw-400">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.27472 7.96152L1.79278 9.77472C1.91544 10.204 2.30782 10.5 2.7543 10.5H12.8406C13.2406 10.5 13.6022 10.2616 13.7597 9.89392L14.6286 7.86667C14.8371 7.38 14.6302 6.81511 14.1566 6.57832L13.3705 6.18524C13.1333 6.06663 12.9529 5.85865 12.869 5.60704L12.4558 4.36754C12.1836 3.55086 11.4193 3 10.5585 3H7.93675C7.34319 3 6.7803 3.26365 6.40031 3.71963L4.69725 5.7633C4.56873 5.91752 4.39677 6.02949 4.20375 6.08464L1.96152 6.72528C1.43049 6.877 1.123 7.43049 1.27472 7.96152Z" stroke="#E67F4E" stroke-linejoin="round"/>
                                            <path d="M6.5 6.5L11.5 6.5" stroke="#E67F4E" stroke-linejoin="round"/>
                                            <path d="M4 12C4 12.3333 4.2 13 5 13C5.8 13 6 12.3333 6 12M10 12C10 12.3333 10.2 13 11 13C11.8 13 12 12.3333 12 12" stroke="#E67F4E" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                                                                                                                                                  
                                        1
                                    </p>
                                    <p class="fs-16 fw-400">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 9L8 13L2 9M8 3L2 7L8 11L14 7L8 3Z" stroke="#E67F4E" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                                                                                                                                                                                                                      
                                        1m³
                                    </p>
                                </div>
                                <p class="fs-16 fw-700">R$ 1.500.000,00</p>
                                <div class="d-flex gap-1 mt-2">
                                    <a href="{{ route_lang('products') }}">
                                        <button class="btn btn-primary fs-16 fw-400 rounded-5">
                                            Detalhes 
                                            <svg class="ms-0-50" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 5.50012L5 5.50012M-9.53674e-07 5.50012L5 5.50012M5 5.50012L5 0.500123M5 5.50012L5 10.5001" stroke="white" stroke-linejoin="round"/>
                                            </svg>                                                                    
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="fade-left">
                        <div class="produtos-detalhes-swiper swiper h-100">
                            <div class="swiper-wrapper">
                        
                                @foreach (range(0,4) as $image)
                                    <div class="block swiper-slide overflow-hidden" data-aos="zoom-out-up">
                                        <div class="ratio ratio-16x9 h-100">                             
                                            <a href="{{ asset("front/images/backgrounds/produto-detalhe.png") }}" data-fancybox="gallery">
                                                <svg class="position-absolute top-50 start-50 translate-middle z-index-2" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.9" fill-rule="evenodd" clip-rule="evenodd" d="M80 160C124.183 160 160 124.183 160 80C160 35.8172 124.183 0 80 0C35.8172 0 0 35.8172 0 80C0 124.183 35.8172 160 80 160ZM63 112.909L117 81.732C118.333 80.9622 118.333 79.0377 117 78.2679L63 47.091C61.6667 46.3212 60 47.2835 60 48.8231L60 111.177C60 112.717 61.6667 113.679 63 112.909Z" fill="white"/>
                                                </svg>
                                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("front/images/backgrounds/produto-detalhe.png") }}" alt="" title="">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                        
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn bg-primary rounded-circle d-flex p-1">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 3L2 8M2 8L7 13M2 8L14 8" stroke="white" stroke-linejoin="round"/>
                                    </svg>                                        
                                </button>                                                                            
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn bg-primary rounded-circle d-flex p-1">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 13L14 8M14 8L9 3M14 8L2 8" stroke="white" stroke-linejoin="round"/>
                                    </svg>                                        
                                </button>                                                                                                                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-0 py-lg-4 py-2" style="background-image: url({{ asset("front/images/backgrounds/bg-solutions.png") }});background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <p class="fs-16 fw-400">
                                Uma residência exclusiva, meticulosamente projetada para oferecer o máximo em luxo e conforto. Essa casa de tirar o fôlego possui uma decoração sofisticada, móveis e acabamentos de alta qualidade, além de uma ampla variedade de comodidades e tecnologias modernas. Experimente o requinte e o estilo de vida excepcional neste oásis residencial, projetado para encantar os gostos mais exigentes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-0 py-lg-4 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="w-100 px-3 py-1 text-white d-flex align-items-center" style="background-image: url({{ asset("front/images/backgrounds/input-detalhe.png") }}) !important;background-size: cover;">
                            Detalhes do imóvel
                            <svg class="ms-auto" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 7L10 13L16 7" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                            </svg>                                
                        </div>
                    </div>
                    <div class="d-flex gap-1 col-lg-12 mt-1">
                        
                        <div class="col-lg-4 d-flex align-items-start" data-aos="fade-left">
                            <ul class="">
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400">Totalmente mobiliado e equipado</li>
                                <li class="fs-16 fw-400">São 106 m² privativos</li>
                                <li class="fs-16 fw-400">3 dormitórios sendo</li>
                                <li class="fs-16 fw-400">1 suíte com mega closet.</li>
                                <li class="fs-16 fw-400">Estar e jantar integrados.</li>
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 d-flex align-items-start" data-aos="fade-right">
                            <ul class="">
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400">Totalmente mobiliado e equipado</li>
                                <li class="fs-16 fw-400">São 106 m² privativos</li>
                                <li class="fs-16 fw-400">3 dormitórios sendo</li>
                                <li class="fs-16 fw-400">1 suíte com mega closet.</li>
                                <li class="fs-16 fw-400">Estar e jantar integrados.</li>
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 d-flex align-items-start d-none d-lg-block" data-aos="fade-right">
                            <ul class="">
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400">Totalmente mobiliado e equipado</li>
                                <li class="fs-16 fw-400">São 106 m² privativos</li>
                                <li class="fs-16 fw-400">3 dormitórios sendo</li>
                                <li class="fs-16 fw-400">1 suíte com mega closet.</li>
                                <li class="fs-16 fw-400">Estar e jantar integrados.</li>
                                <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-start justify-content-center d-sm-none" data-aos="fade-right">
                        <ul class="">
                            <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                            <li class="fs-16 fw-400">Totalmente mobiliado e equipado</li>
                            <li class="fs-16 fw-400">São 106 m² privativos</li>
                            <li class="fs-16 fw-400">3 dormitórios sendo</li>
                            <li class="fs-16 fw-400">1 suíte com mega closet.</li>
                            <li class="fs-16 fw-400">Estar e jantar integrados.</li>
                            <li class="fs-16 fw-400">Amplo, novo e moderno</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-wrapper overflow-hidden py-lg-4 pb-2">
            <div class="container">
                <div class="row shadow-lg justify-content-center g-0 rounded-5 ">
                    <div class="col-xl-5 col-lg-6" data-aos="fade-right">
                        <div class="ratio ratio-1x1 h-100">
                            <img class="w-100 h-100 object-fit-cover rounded-5-left" src="{{ asset("front/images/backgrounds/contato.png") }}" alt="" title="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 " data-aos="fade-left" >
                        
                        <div class="formulario h-100 rounded-5 p-lg-3 p-2 d-flex align-items-center bg-cinza">
                            <div class="position-absolute top-0 start-0 w-100 h-100 z-index-background" style="background-image: url({{ asset("front/images/backgrounds/bg-p.png") }});background-size: cover;"></div>
                            <div>
                                <h2 class="fs-32 fw-600 text-dark w-100 mb-2 text-lg-start text-center">Entre em contato</h2>
                                <livewire:form-contact />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="py-4 bg-cinza position-relative">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url({{ asset("front/images/backgrounds/bg-p.png") }});background-size: cover;"></div>
    <div class="container">
        <div class="row">
            <h2 class="fs-48 fs-lora fw-400 text-center h-100 mb-2">Imóveis Relacionados</h2>
            <div class="swiper relacionados-swiper">
                <div class="swiper-wrapper">
                    
                            @foreach (range(0,7) as $r)
                                <div class="d-block swiper-slide mb-2" data-aos="fade-left">
                                    <div class="swiper imoveis-internos-swiper">
                                        <div class="swiper-wrapper">
                                            @foreach (range(0,4) as $product)
                                                <div class="swiper-slide">
                                                    <div class="swiper imoveis-internos-swiper">
                                                        <div class="swiper-wrapper">
                                                            @foreach (range(0,4) as $product)
                                                                <div class="swiper-slide h-100">
                                                                    <div class="ratio ratio-1x1">
                                                                        
                                                                        <div class="bottom-0 start-0 z-index-1" id="fundo_img"></div>
                                                                        <div class="z-index-2 start-0 top-0" style="left: 3%; top:3%;">
                                                                            <button class="btn-orange btn fs-12 fw-400 rounded-5">A001</button>
                                                                        </div>
                                                                        <div class="z-index-2 start-0 bottom-0 ratio-unstyled p-1" style="">
                                                                            <p class="fs-16 fw-400 text-white mb-0">Casa nova, mobiliada e equipada</p>
                                                                        </div>
                                                                        <img class="w-100 h-100 object-fit-cover rounded-5" src="{{ asset("front/images/backgrounds/casa-home.png") }}" alt="" title="">
                                                                        <div class="z-index-1" style="opacity: 0.4000000059604645;
                                                                        background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, #000 100%);"></div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            
                                                        </div>
                                                        <div class="swiper-button-prev imoveis-internos-button opa">
                                                            <button class="bg-secondary rounded-circle">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 3.00012L2 8.00012M2 8.00012L7 13.0001M2 8.00012L14 8.00012" stroke="white" stroke-linejoin="round"/>
                                                                </svg>                                        
                                                            </button>                                 
                                                        </div>
                                                        <div class="swiper-button-next imoveis-internos-button2">
                                                            <button class="bg-secondary rounded-circle">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g id="seta 5">
                                                                    <path id="vetor" d="M9 13.0001L14 8.00012M14 8.00012L9 3.00012M14 8.00012L2 8.00012" stroke="white" stroke-linejoin="round"/>
                                                                    </g>
                                                                </svg>                                        
                                                            </button>      
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="position-relative z-index-3" id="fundo_black">
                                            <div class="bg-white rounded-5">
                                                <div class="p-2" style="box-shadow: 0px 0px 24px rgba(0, 0, 0, 0.15);">
                                                    <p class="fs-16 fw-400">
                                                        <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_78_5835)">
                                                            <path d="M8 15.0001V9.00012C5.79086 9.00012 4 7.20926 4 5.00012C4 2.79098 5.79086 1.00012 8 1.00012C10.2091 1.00012 12 2.79098 12 5.00012C12 6.10469 11.5523 7.10469 10.8284 7.82855" stroke="#E67F4E" stroke-linejoin="round"/>
                                                            <path d="M6 5.00012C6 3.89555 6.89543 3.00012 8 3.00012" stroke="#E67F4E"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_78_5835">
                                                            <rect width="16" height="16" fill="white"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                        Exposição    
                                                    </p>
                                                    <div class="d-flex gap-2 gap-lg-2 gap-xl-1 gap-xxl-2">
                                                        <p class="fs-16 fw-400 d-flex">
                                                            <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_78_5919)">
                                                                <path d="M1.00006 13.0001V11.5001M15.0001 13.0001V11.5001M2.00006 3.00012V4.50012M2.00006 7.00012V4.50012M14.0001 3.00012V4.50012M14.0001 7.00012V4.50012M14.0001 4.50012H10.6056C9.60255 4.50012 8.66586 5.00143 8.10946 5.83602L8.00006 6.00012L7.89066 5.83602C7.33426 5.00143 6.39757 4.50012 5.39451 4.50012H2.00006M1.00006 11.5001V10.0001C1.00006 8.89555 1.89549 8.00012 3.00006 8.00012H13.0001C14.1046 8.00012 15.0001 8.89555 15.0001 10.0001V11.5001M1.00006 11.5001H15.0001" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                </g>
                                                                <defs>
                                                                <clipPath id="clip0_78_5919">
                                                                <rect width="16" height="16" fill="white"/>
                                                                </clipPath>
                                                                </defs>
                                                            </svg>                                                                                                                           
                                                            1
                                                        </p>
                                                        <p class="fs-16 fw-400 d-flex">
                                                            <svg width="16" class="me-0-50" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1 7H15M14 8.5V8.57143C14 9.49873 13.6992 10.401 13.1429 11.1429V11.1429C12.7382 11.6824 12.1031 12 11.4286 12H4.57143C3.89695 12 3.26183 11.6824 2.85714 11.1429V11.1429C2.30076 10.401 2 9.49873 2 8.57143V8.5" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                <path d="M3 15V15C3 14.3871 3.34626 13.8269 3.89443 13.5528L4 13.5M12 13.5L12.1056 13.5528C12.6537 13.8269 13 14.3871 13 15V15" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                <path d="M3 5.5V2.25C3 1.55964 3.55964 1 4.25 1V1C4.94036 1 5.5 1.55964 5.5 2.25V3" stroke="#E67F4E" stroke-linejoin="round"/>
                                                            </svg>                                                                                                                                                                                              
                                                            1
                                                        </p>
                                                        <p class="fs-16 fw-400 d-flex">
                                                            <svg width="16" class="me-0-50" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.27472 7.96152L1.79278 9.77472C1.91544 10.204 2.30782 10.5 2.7543 10.5H12.8406C13.2406 10.5 13.6022 10.2616 13.7597 9.89392L14.6286 7.86667C14.8371 7.38 14.6302 6.81511 14.1566 6.57832L13.3705 6.18524C13.1333 6.06663 12.9529 5.85865 12.869 5.60704L12.4558 4.36754C12.1836 3.55086 11.4193 3 10.5585 3H7.93675C7.34319 3 6.7803 3.26365 6.40031 3.71963L4.69725 5.7633C4.56873 5.91752 4.39677 6.02949 4.20375 6.08464L1.96152 6.72528C1.43049 6.877 1.123 7.43049 1.27472 7.96152Z" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                <path d="M6.5 6.5L11.5 6.5" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                <path d="M4 12C4 12.3333 4.2 13 5 13C5.8 13 6 12.3333 6 12M10 12C10 12.3333 10.2 13 11 13C11.8 13 12 12.3333 12 12" stroke="#E67F4E" stroke-linejoin="round"/>
                                                            </svg>                                                                                                                                                                                                                                                                  
                                                            1
                                                        </p>
                                                        <p class="fs-16 fw-400 d-flex">
                                                            <svg width="16" class="me-0-50" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14 9L8 13L2 9M8 3L2 7L8 11L14 7L8 3Z" stroke="#E67F4E" stroke-linejoin="round"/>
                                                            </svg>                                                                                                                                                                                                                                                                                                                                      
                                                            1m³
                                                        </p>
                                                </div>
                                                    <p class="fs-16 fw-700">R$ 1.500.000,00</p>
                                                    <div class="d-flex gap-1 mt-2">
                                                        <a href="{{ route_lang('products-details') }}">
                                                            <button class="btn btn-primary fs-16 fw-400 rounded-5">
                                                                Detalhes 
                                                                <svg class="ms-0-50" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10 5.50012L5 5.50012M-9.53674e-07 5.50012L5 5.50012M5 5.50012L5 0.500123M5 5.50012L5 10.5001" stroke="white" stroke-linejoin="round"/>
                                                                </svg>                                                                    
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                </div>
                <div class="swiper-button-prev">
                    <button class="bg-primary rounded-circle">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 3.00012L2 8.00012M2 8.00012L7 13.0001M2 8.00012L14 8.00012" stroke="white" stroke-linejoin="round"/>
                        </svg>                                        
                    </button>                                                                       
                </div>
                <div class="swiper-button-next">
                    <button class="bg-primary rounded-circle">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="seta 5">
                            <path id="vetor" d="M9 13.0001L14 8.00012M14 8.00012L9 3.00012M14 8.00012L2 8.00012" stroke="white" stroke-linejoin="round"/>
                            </g>
                        </svg>                                        
                    </button>                                                                                                                                          
                </div>
            </div>
        </div>
    </div>
</section>
    </main>
@endsection
