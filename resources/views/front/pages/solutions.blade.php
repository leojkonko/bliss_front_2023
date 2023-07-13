@extends('front.layout.app')

@section('content')
    <main id="empresa" class="row gx-0 gy-2 gy-lg-4 py-lg-4 py-2 overflow-hidden" style="background: #f5f5f5">
        <section class="overflow-hidden">
            <div class="container">
                <div class="row">
                    @foreach (range(0,4) as $image)
                    <div class="d-block swiper-slide" data-aos="zoom-out-up">
                        <div class="row mt-lg-4 mt-2">
                            @foreach (range(0,7) as $r)
                                <div class="d-block swiper-slide col-md-6 col-12 mb-2" data-aos="fade-left">
                                    <div class="swiper imoveis-internos-swiper">
                                        <div class="swiper-wrapper">
                                            @foreach (range(0,4) as $product)
                                                <div class="swiper-slide h-100">
                                                    <div class="ratio ratio-16x9">
                                                        <a href="{{ asset("front/images/backgrounds/selo.png") }}" class="z-index-3" data-fancybox="gallery"></a>
                                                        <div class="bottom-0 start-0 z-index-1" id="fundo_img"></div>
                                                        <div class="z-index-1 start-0 top-0" style="left: 3%; top:3%;">
                                                            <button class="btn-orange btn fs-12 fw-400 rounded-5 btn-imovel">A001</button>
                                                            <button class="btn-dark btn fs-12 fw-400 rounded-5 btn-imovel">Bliss Select
                                                                <img class="ms-0-50" width="15px" src="{{ asset("front/images/backgrounds/selo.png") }}" alt="" title="">
                                                            </button>
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
                                    <div class="">
                                        <div class="position-relative z-index-3" id="fundo_black">
                                            <div class="bg-white rounded-5 p-2 d-flex" style="box-shadow: 0px 0px 24px rgba(0, 0, 0, 0.15);
                                                background-image: url({{ asset("front/images/backgrounds/bg-solutions.png") }});background-size: cover;">
                                                <div class="col-6 col-lg-8 d-flex align-items-center" style="">
                                                    <div>
                                                        <div class="d-block d-xl-flex gap-2 gap-xl-1 gap-xxl-2">
                                                            <p class="fs-16 fw-400 d-flex">
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
                                                                <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 7H15M14 8.5V8.57143C14 9.49873 13.6992 10.401 13.1429 11.1429V11.1429C12.7382 11.6824 12.1031 12 11.4286 12H4.57143C3.89695 12 3.26183 11.6824 2.85714 11.1429V11.1429C2.30076 10.401 2 9.49873 2 8.57143V8.5" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                    <path d="M3 15V15C3 14.3871 3.34626 13.8269 3.89443 13.5528L4 13.5M12 13.5L12.1056 13.5528C12.6537 13.8269 13 14.3871 13 15V15" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                    <path d="M3 5.5V2.25C3 1.55964 3.55964 1 4.25 1V1C4.94036 1 5.5 1.55964 5.5 2.25V3" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                </svg>                                                                                                                                                                                              
                                                                1
                                                            </p>
                                                            <p class="fs-16 fw-400 d-flex">
                                                                <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1.27472 7.96152L1.79278 9.77472C1.91544 10.204 2.30782 10.5 2.7543 10.5H12.8406C13.2406 10.5 13.6022 10.2616 13.7597 9.89392L14.6286 7.86667C14.8371 7.38 14.6302 6.81511 14.1566 6.57832L13.3705 6.18524C13.1333 6.06663 12.9529 5.85865 12.869 5.60704L12.4558 4.36754C12.1836 3.55086 11.4193 3 10.5585 3H7.93675C7.34319 3 6.7803 3.26365 6.40031 3.71963L4.69725 5.7633C4.56873 5.91752 4.39677 6.02949 4.20375 6.08464L1.96152 6.72528C1.43049 6.877 1.123 7.43049 1.27472 7.96152Z" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                    <path d="M6.5 6.5L11.5 6.5" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                    <path d="M4 12C4 12.3333 4.2 13 5 13C5.8 13 6 12.3333 6 12M10 12C10 12.3333 10.2 13 11 13C11.8 13 12 12.3333 12 12" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                </svg>                                                                                                                                                                                                                                                                  
                                                                1
                                                            </p>
                                                            <p class="fs-16 fw-400 d-flex">
                                                                <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14 9L8 13L2 9M8 3L2 7L8 11L14 7L8 3Z" stroke="#E67F4E" stroke-linejoin="round"/>
                                                                </svg>                                                                                                                                                                                                                                                                                                                                      
                                                                1m³
                                                            </p>
                                                        </div>
                                                        <p class="fs-16 fw-700">R$ 1.500.000,00</p>
                                                        <div class="d-flex gap-1 mt-2">
                                                            <a href="{{ route_lang('products-details') }}">
                                                                <button class="btn btn-primary fs-16 fw-400 rounded-0">
                                                                    Detalhes 
                                                                    <svg class="ms-0-50" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10 5.50012L5 5.50012M-9.53674e-07 5.50012L5 5.50012M5 5.50012L5 0.500123M5 5.50012L5 10.5001" stroke="white" stroke-linejoin="round"/>
                                                                    </svg>                                                                    
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 d-flex align-items-center justify-content-lg-end justify-content-center">
                                                    <div>
                                                        <p class="text-secondary fs-12 text-center" style="">Corretor responsável</p>
                                                        <div class="ratio ratio-1x1 m-auto" style="width: 100px; height: 100px">
                                                            <img class="w-100 h-100 object-fit-cover rounded-circle" src="{{ asset("front/images/backgrounds/equipe.png") }}" alt="" title="">
                                                        </div>
                                                        <p class="fs-20 fw-700 text-center" style="">Alex</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection