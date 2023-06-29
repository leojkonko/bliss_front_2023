<section class="pt-lg-4 pt-2 bg-cinza">
    <div class="container">
        <div class="row">
            <h6 class="fs-16 lt text-orange w-100 text-center">DESTAQUES EM</h6>
            <h2 class="fs-32 fw-700 w-100 text-center mb-2">Mobiliados</span></h2>
            {{--<x-destaques />--}}
            <div class="mobiliados-swiper swiper p-1">
                <div class="swiper-wrapper mb-4">
            
                    @foreach (range(0,4) as $image)
                        <div class="block swiper-slide overflow-hidden" data-aos="zoom-out-up">
                            <div class="d-lg-flex">
                                <div class="col-lg-6">
                                    <div class="bg-white rounded-20-left h-100 p-1 p-sm-2">
                                        <div class="d-flex gap-0-50 justify-content-center justify-content-lg-start">
                                            @foreach (range(0,2) as $o)
                                                <button class="btn-imoveis fs-14 fw-600">
                                                    Casa
                                                </button>
                                            @endforeach
                                        </div>
                                        <h2 class="mt-1 fs-32 fw-700 w-100 text-lg-start text-center">Casa mobiliada no Jardim América</h2>
                                        <div class="mt-1">
                                            <div class="d-flex gap-2 justify-content-center justify-content-lg-start">
                                                <p class="fs-16 fw-400 text-secondary text-lg-start text-center m-0">
                                                    <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                    </svg>
                                                    Jardim América 
                                                </p>                                                     
                                                <p class="fs-16 fw-400 text-secondary text-lg-start text-center m-0 d-lg-none d-xxl-block">
                                                    <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                    </svg>
                                                    Jardim América 
                                                </p>                                                     
                                            </div>
                                            <p class="fs-16 fw-400 text-secondary text-lg-start text-center m-0 d-lg-block d-xxl-none d-none">
                                                <svg class="me-0-50 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                </svg>
                                                Jardim América 
                                            </p>
                                            <div class="d-flex gap-1 mt-0-50 justify-content-center justify-content-lg-start mt-1">
                                                @foreach (range(0,3) as $e)
                                                <p class="fs-16 fw-400 text-secondary m-0">
                                                    <svg class="me-0-25 mb-0-25" width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1C3.23935 1 1 3.26405 1 6.05514C1 10.5313 6 15 6 15C6 15 11 10.5313 11 6.05514C11 3.26405 8.76065 1 6 1ZM6 8.23012C4.81057 8.23012 3.84875 7.25769 3.84875 6.05514C3.84875 4.8526 4.81057 3.88017 6 3.88017C7.18943 3.88017 8.15125 4.8526 8.15125 6.05514C8.15125 7.25769 7.18943 8.23012 6 8.23012Z" stroke="#3B3A79" stroke-linejoin="round"/>
                                                    </svg>
                                                    2
                                                </p> 
                                                @endforeach  
                                            </div>
                                            <h2 class="fs-32 fw-700 text-primary mt-2 w-100 text-lg-start text-center">R$ 7.200/mês</h2>
                                            <div class="d-flex justify-content-center justify-content-lg-start">
                                                <button class="btn btn-outline-orange text-primary mt-2" style="border-radius:40px;padding: 12px 25px;color: #3B3A79 !important;">
                                                    <svg class="mb-0-25 me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="7" cy="7.5" r="6.5" stroke="#3B3A79"/>
                                                        <path d="M7 4.5V10.5M4 7.5H10" stroke="#3B3A79" stroke-linecap="round"/>
                                                    </svg>       
                                                    Detalhes    
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ratio ratio-1x1 h-100">
                                        <img class="w-100 h-100 object-fit-cover rounded-20-right" src="{{ asset("front/images/backgrounds/mobiliados.png") }}" alt="" title="">
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