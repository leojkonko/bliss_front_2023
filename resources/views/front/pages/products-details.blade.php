@extends('front.layout.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div>
    <main id="produto" class="overflow-hidden">
        <div class="position-absolute top-0 start-0" id="infos"></div>
        <section class="produto-detalhe py-2">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="produtos-detalhes-swiper swiper">
                            <div class="swiper-wrapper">
                        
                                @foreach (range(0,4) as $image)
                                    <div class="block swiper-slide overflow-hidden" data-aos="zoom-out-up">
                                        <div class="ratio ratio-16x9 h-100">
                                            <div class="bottom-0 text-white z-index-2 m-2 bg-dark text-center p-0-50 d-flex align-items-center justify-content-center rounded-1" 
                                            style="top: initial;width: 80px; height: 30px;opacity: 0.8;"> <span class="opacity: 1;">1 de 6</span> </div>
                                            <a href="{{ asset("front/images/backgrounds/produto-detalhe.png") }}" data-fancybox="gallery">
                                                <img class="w-100 h-100 object-fit-cover rounded-20" src="{{ asset("front/images/backgrounds/produto-detalhe.png") }}" alt="" title="">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                        
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn bg-white rounded-circle" style="padding: 4px 12px;">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 1L1 8L8 15" stroke="#00277A" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>
                                </button>                                                                            
                            </div>
                            <div class="swiper-button-next">
                                <button class="btn bg-white rounded-circle" style="padding: 4px 12px;">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 15L8 8L1 1" stroke="#00277A" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>
                                </button>                                                                                                                                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right">
                        <div class="bg-cinza rounded-20 h-100 shadow-lg d-flex align-items-center">
                            <div class="p-2">
                                <div class="d-flex gap-0-50">
                                    @foreach (range(0,1) as $o)
                                        <button class="btn-imoveis btn-imoveis-cinza fs-14 fw-600">
                                            Casa
                                        </button>
                                    @endforeach
                                    <button class="btn-imoveis-secondary">
                                        #AA001
                                    </button>
                                </div>
                                <h2 class="mt-1 fs-26 fw-700 w-100 text-lg-start text-center">Casa mobiliada no Jardim América</h2>
                                <div class="mt-1">
                                    <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                                        <p class="fs-16 fw-400 text-secondary m-0">
                                            <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                            </svg>
                                            Jardim América 
                                        </p>                                                     
                                        <p class="fs-16 fw-400 text-secondary m-0">
                                            <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                            </svg>
                                            Jardim América 
                                        </p>                                                     
                                    </div>
                                    <div class="d-flex gap-1 mt-0-50 justify-content-center justify-content-lg-start">
                                        @foreach (range(0,3) as $e)
                                        <p class="fs-16 fw-400 text-secondary m-0">
                                            <svg class="me-0-25 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                            </svg>
                                            2
                                        </p> 
                                        @endforeach  
                                    </div>
                                    <div class="d-flex">
                                        <div class="d-flex w-100 justify-content-start">
                                            <h2 class="fs-26 fw-700 text-primary mt-3 mt-sm-2 w-100 text-lg-start text-center me-auto">R$ 7.200/mês</h2>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 justify-content-end align-items-center">
                                         <button class="btn btn-orange text-primary mt-2 w-100" style="border-radius:40px;padding: 12px 25px;
                                         color: white !important;">
                                                 
                                            Tenho interesse
                                         </button>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-0 py-lg-4 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out-up">
                        <p class="fs-16 fw-400 text-lg-start text-center">
                            Uma residência exclusiva, meticulosamente projetada para oferecer o máximo em luxo e conforto. Essa casa de tirar o fôlego possui uma decoração sofisticada, móveis e acabamentos de alta qualidade, além de uma ampla variedade de comodidades e tecnologias modernas. Experimente o requinte e o estilo de vida excepcional neste oásis residencial, projetado para encantar os gostos mais exigentes.
                        </p>
                    </div>
                    <h2 class="fs-20 fw-700 mt-2 mb-1">Características</h2>
                    <div class="d-flex gap-1 col-lg-6" >
                        
                        <div class="col-lg-6 d-flex align-items-start" data-aos="fade-left">
                            <ul class="">
                                <li class="fs-16 fw-400 mt-0">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400 mt-1">Totalmente mobiliado e equipado</li>
                                <li class="fs-16 fw-400 mt-1">São 106 m² privativos</li>
                                <li class="fs-16 fw-400 mt-1">3 dormitórios sendo</li>
                                <li class="fs-16 fw-400 mt-1">1 suíte com mega closet.</li>
                                <li class="fs-16 fw-400 mt-1">Estar e jantar integrados.</li>
                                <li class="fs-16 fw-400 mt-1">Amplo, novo e moderno</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-flex align-items-start" data-aos="fade-right">
                            <ul class="">
                                <li class="fs-16 fw-400 mt-0">Amplo, novo e moderno</li>
                                <li class="fs-16 fw-400 mt-1">Totalmente mobiliado e equipado</li>
                                <li class="fs-16 fw-400 mt-1">São 106 m² privativos</li>
                                <li class="fs-16 fw-400 mt-1">3 dormitórios sendo</li>
                                <li class="fs-16 fw-400 mt-1">1 suíte com mega closet.</li>
                                <li class="fs-16 fw-400 mt-1">Estar e jantar integrados.</li>
                                <li class="fs-16 fw-400 mt-1">Amplo, novo e moderno</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="bg-cinza">
    <div class="container">
        <div class="row">
            <div class="mobiliados-detalhes-swiper swiper p-1">
                <div class="swiper-wrapper mb-4">
            
                    @foreach (range(0,4) as $image)
                    <div class="block swiper-slide col-lg-4 mb-2" data-aos="zoom-out-up">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ratio ratio-16x9 h-100">
                                    <img class="w-100 h-100 object-fit-cover rounded-20-top" src="{{ asset("front/images/backgrounds/mobiliados.png") }}" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="bg-white rounded-20-bottom h-100 p-1 p-sm-2">
                                    <div class="d-flex gap-0-50">
                                        @foreach (range(0,1) as $o)
                                            <button class="btn-imoveis btn-imoveis-white fs-14 fw-600">
                                                Casa
                                            </button>
                                        @endforeach
                                        <button class="btn-imoveis-secondary btn-imoveis-secondary-white">
                                            #AA001
                                        </button>
                                    </div>
                                    <h2 class="mt-1 fs-26 fw-700 w-100 text-lg-start text-center">Casa mobiliada no Jardim América</h2>
                                    <div class="mt-1">
                                        <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                                            <p class="fs-16 fw-400 text-secondary m-0">
                                                <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                </svg>
                                                Jardim América 
                                            </p>                                                     
                                            <p class="fs-16 fw-400 text-secondary m-0">
                                                <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                </svg>
                                                Jardim América 
                                            </p>                                                     
                                        </div>
                                        <div class="d-flex gap-1 mt-0-50 justify-content-center justify-content-lg-start">
                                            @foreach (range(0,3) as $e)
                                            <p class="fs-16 fw-400 text-secondary m-0">
                                                <svg class="me-0-25 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                </svg>
                                                2
                                            </p> 
                                            @endforeach  
                                        </div>
                                        <div class="d-flex">
                                            <div class="d-flex w-100 justify-content-start">
                                                <h2 class="fs-26 fw-700 text-primary mt-3 mt-sm-2 w-100 text-lg-start text-center me-auto">R$ 7.200/mês</h2>
                                            </div>
                                            <div class="d-flex w-100 justify-content-end align-items-center">
                                               <a href="{{ route_lang('products-details') }}">
                                                <button class="btn btn-outline-orange text-primary mt-2" style="border-radius:40px;padding: 12px 25px;color: #3B3A79 !important;">
                                                    <svg class="mb-0-25 me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="7" cy="7.5" r="6.5" stroke="#3B3A79"/>
                                                        <path d="M7 4.5V10.5M4 7.5H10" stroke="#3B3A79" stroke-linecap="round"/>
                                                    </svg>       
                                                    Detalhes    
                                                </button>
                                               </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            
                </div>
                <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;margin-top: -10rem;margin-bottom: 7rem;">
                    <div class=" w-100 h-100 position-absolute">
                        <div class="swiper-button-prev">
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 1L1 6L6 11" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                            </svg>                                                                         
                        </div>
                        <div class="swiper-button-next">
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L6 6L1 1" stroke="#454545" stroke-width="2" stroke-linejoin="round"/>
                            </svg>                                                                                                                                           
                        </div>
                        <div class="swiper-pagination mb-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
        {{--
             <section class="imovel">
        <div class="container"> 
            <div class="row my-2 px-1 mx-md-0">
                <div class="col-lg-8 ps-0 p-0">
                    <div class="swiper h-100 detalhes-swiper" data-aos="flip-left">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,5) as $i) : ?>
                                <div class="swiper-slide flex-column d-flex  pe-md-3, pe-lg-0">
                                    <div class="ratio ratio-16x9 h-100 w-100">
                                        <img class="w-100 h-100 object-fit-cover rounded-36-left rounded-36-top" src="<?= asset('images/banners/apto1.png') ?>" alt="">
                                            <div class="conteudo-img">
                                                <div class="position-absolute bottom-0 m-2">
                                                    <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                    1 de 6
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>    
                            <!--<div class="swiper-pagination color-warning"></div>-->
                            <div class="swiper-button-next arrows"></div>
                            <div class="swiper-button-prev arrows"></div>
                        </div>
                    </div>
                <div class="col-lg-4 bg-secondary rounded-36-right rounded-36-bottom px-lg-3 px-2 text-center text-sm-start">
                        <div class="d-inline-block  gap-1 mt-3 pt-sm-0">
                            <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-primary">ENTREGA EM JUNHO</button>
                            <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-primary">ÚLTIMAS UNIDADES</button>
                        </div>
                    <div class="mt-2">
                        <h2 class="p-700 h2-32 text-dark mt-2">
                        Zarah Ian Residence
                        </h2>
                            <ul class="m-0 list-unstyled text-cinza-texto mt-3">
                                <li class="mb-0-25">
                                    <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"/>
                                    </svg>
                                    Caxias do Sul
                                </li>
                                <li class="mb-0-25">
                                    <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"/>
                                    </svg>
                                    Rio Branco
                                </li>
                                <li class="mb-0-25">
                                    <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                    </svg>
                                    2
                                </li>
                                <li class="mb-0-25">
                                    <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>
                                    2
                                </li>
                                <li class="mb-0-25">
                                    <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                    </svg>
                                    2 e 1
                                </li>
                                <li class="mb-0-25">
                                    <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                    </svg>
                                    59 e 56m²
                                </li>
                            </ul>
                        <a href="#personalizar" onclick="alterarInput()">
                            <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2 mb-3 p-1248">
                            Tenho interesse
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    </main>
@endsection
