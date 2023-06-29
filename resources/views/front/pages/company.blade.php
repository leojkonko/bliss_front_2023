@extends('front.layout.app')

@section('content')

    <main id="empresa" class="row gx-0 gy-2 gy-lg-4 overflow-hidden">
        <section>
            <div class="container container-start">
                <div class="row">
                    <div class="col-lg-"></div>
                </div>
            </div>
        </section>
        <section class="mt-0 bg-cinza">
            <div class="container container-start">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 d-flex align-items-center" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class=" p-xxl-0 py-2 py-lg-4">
                            <h2 class="fs-20 fw-700 w-100 text-lg-start text-center">Nossa história</h2>
                                <div class="text-center text-lg-start text-company">
                                    
                                    <p class="fs-16 fw-400">
O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                                    </p>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6" style="" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="ratio ratio-lg-16x9 ratio-1x1 h-100">
                        <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/company.png") }}" alt="Icone">
                    </div>
                        {{--<di class="empresa-swiper swiper h-100">
                            <div class="swiper-wrapper">
                        
                                @foreach (range(0,2) as $image)
                                    <div class="d-block swiper-slide">
                                        <a href="{{ url("/front/images/backgrounds/company.png") }}" data-fancybox="gallery" class="d-block video-slide swiper-slide">
                                            <div class="ratio ratio-21x9 h-100">
                                                <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/company.png") }}" alt="Icone">
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                        
                            </div> 
                            <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;">
                                <div class=" w-100 h-100 position-absolute" style="margin-top: -5rem;">
                                    <div class="swiper-button-prev">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 10L4 10M4 10L10 16M4 10L10 4" stroke="white" stroke-linejoin="round"/>
                                        </svg>                                                                                                                   
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7L12 7M12 7L6 1M12 7L6 13" stroke="white" stroke-linejoin="round"/>
                                        </svg>                                                                                                                                                                                      
                                    </div>
                                    <div class="swiper-pagination mb-2"></div>
                                </div>
                            </div>
                        </di>--}}
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-orange py-lg-4 py-2 mt-0 position-relative z-index-1">
            <div class="container">
                <div class="row">
                    @php
                        $texts = [
                            'missao' => [
                                //'image' => $page->icon_mission->first()->url(),
                                'title' => 'Missão',
                                //'description' => $page->text_mission,
                            ],
                            'visao' => [
                                //'image' => $page->icon_vision->first()->url(),
                                'title' => 'Visão',
                                //'description' => $page->text_vision,
                            ],
                            'valores' => [
                                //'image' => $page->icon_values->first()->url(),
                                'title' => 'Valores',
                                //'description' => $page->text_values,
                            ],
                        ];
                        $opa = 0
                    @endphp
                    @foreach ($texts as $text)
                    @php
                    $opa++
                    @endphp
                        <div class="col-lg-4 {{ $opa >= 2 ? 'pe-1 mt-1 mt-lg-0' : '' }}">
                            <div class=" bg-primary rounded-20 d-flex justify-content-center align-items-start">
                                <div class="px-2 text-center text-lg-start py-2">
                                    <h2 class="fs-20 text-white fw-600 text-center text-lg-start w-100 mt-1 mt-lg-0">
                                        {{ __($text['title']) }}
                                    </h2>
                                    <p class="p text-center text-lg-start px-1">
                                        @if ($text['title'] == "Missão")
                                            <p class="fs-16 fw-400 text-white" data-aos="zoom-out-down">
                                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.
                                            </p>
                                            @elseif($text['title'] == "Visão")
                                            <p class="fs-16 fw-400 text-white" data-aos="zoom-out-down">
                                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.  
                                            </p>
                                            @elseif($text['title'] == "Valores")
                                            <p class="fs-16 fw-400 text-white" data-aos="zoom-out-down">
                                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.  
                                            </p>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mt-0 bg-cinza">
            <div class="container container-end">
                <div class="row">
                    <div class="col-xl-5 col-lg-6" style="" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="ratio ratio-lg-16x9 ratio-1x1 h-100">
                            <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/company.png") }}" alt="Icone">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-flex align-items-center" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="py-2 ps-lg-4 py-2 py-lg-3">
                            <h2 class="fs-20 fw-700 w-100 text-lg-start text-center">Nossa história</h2>
                                <div class="text-center text-lg-start text-company">
                                    
                                    <p class="fs-16 fw-400">
O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                                    </p>
                                    <p class="fs-16 fw-400">
O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. nte com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-lg-4 pb-2 position-relative">
            <h6 class="fs-16 lt text-orange w-100 text-center">EQUIPE</h6>
            <h2 class="fs-32 fw-700 w-100 text-center mb-2">Conheça nosso time</span></h2>                          
            <div class="container">
                <div class="row">
                    <div class="equipe-swiper swiper">
                        <div class="swiper-wrapper"> 
                    
                            @foreach (range(0,4) as $image)
                                <div class="d-block swiper-slide" data-aos="zoom-out-up">
                                    <div class="d-block card bg-cinza rounded-20 p-2">
                                        <div class="ratio ratio-1x1 overflow-hidden" style="">
                                            <img class="w-100 h-100 object-fit-cover p-1" src="{{ url("/front/images/backgrounds/equipe.png") }}" alt="Icone">
                                        </div>
                                        <div class="z-index-2 text-center mt-1" style="">
                                                <p class="fs-20 fw-700 text mb-0">Felipe Camargo</p>
                                                <p class="fs-16 fw-400 text-secondary">
                                                    Corretor<br>
                                                    CRECI/RS: 00000-0
                                                </p>
                                                <div class="d-flex gap-1 justify-content-center">
                                                    <a target="_blank" href="" class="shadow-lg fs-16 fw-400 text-decoration-none text-white svg-footer bg-white rounded-circle" style="padding: 16px;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0869 2.90667C15.2062 1.03333 12.7059 0.000833333 10.0423 0C4.55348 0 0.0862466 4.445 0.0837346 9.91C0.0828972 11.6567 0.541762 13.3617 1.41344 14.865L0 20L5.27863 18.6217C6.73309 19.4117 8.37094 19.8275 10.0373 19.8283H10.0414C15.5294 19.8283 19.9975 15.3825 20 9.9175C20.0017 7.27 18.9667 4.77917 17.0869 2.90667ZM10.0423 18.1542H10.0389C8.55348 18.1542 7.09734 17.7567 5.82625 17.0058L5.52397 16.8275L2.39146 17.645L3.22797 14.605L3.03119 14.2933C2.20222 12.9817 1.76512 11.4658 1.76596 9.91C1.76764 5.36833 5.48126 1.67333 10.0465 1.67333C12.2571 1.67333 14.3354 2.53167 15.8978 4.08833C17.4603 5.64583 18.3203 7.715 18.3194 9.91583C18.3169 14.4592 14.6041 18.1542 10.0423 18.1542ZM14.5824 11.985C14.3337 11.8608 13.1103 11.2617 12.8817 11.1792C12.654 11.0967 12.4882 11.055 12.3215 11.3025C12.1549 11.55 11.6793 12.1083 11.5336 12.2742C11.3887 12.4392 11.243 12.46 10.9943 12.3358C10.7457 12.2117 9.94348 11.9508 8.99309 11.1067C8.25371 10.45 7.75382 9.63917 7.60896 9.39083C7.4641 9.1425 7.59389 9.00917 7.71781 8.88583C7.83002 8.775 7.96651 8.59667 8.09127 8.45167C8.21687 8.30833 8.2579 8.205 8.34164 8.03917C8.42453 7.87417 8.3835 7.72917 8.3207 7.605C8.2579 7.48167 7.76052 6.2625 7.55369 5.76667C7.35189 5.28333 7.14674 5.34917 6.99351 5.34167C6.84865 5.33417 6.68285 5.33333 6.51622 5.33333C6.35043 5.33333 6.0808 5.395 5.85304 5.64333C5.62529 5.89167 4.98221 6.49083 4.98221 7.70917C4.98221 8.92833 5.87398 10.1058 5.99791 10.2708C6.12183 10.4358 7.75214 12.9375 10.2483 14.01C10.8419 14.265 11.3058 14.4175 11.6667 14.5317C12.2629 14.72 12.8055 14.6933 13.2342 14.63C13.7124 14.5592 14.7063 14.0308 14.914 13.4525C15.1216 12.8742 15.1216 12.3775 15.0588 12.275C14.9969 12.1708 14.8311 12.1092 14.5824 11.985Z" fill="#3B3A79"/>
                                                        </svg>                                                                                                                                                        
                                                    </a>
                                                    <a target="_blank" href="" class="shadow-lg fs-16 fw-400 text-decoration-none text-white svg-footer bg-white rounded-circle" style="padding: 5px;">
                                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="44" height="44" rx="22" fill="white"/>
                                                            <path d="M29.0413 29.0421H26.0778V24.4009C26.0778 23.2941 26.0581 21.8699 24.5363 21.8699C22.993 21.8699 22.7564 23.0753 22.7564 24.3211V29.0421H19.7938V19.4976H22.6391V20.8015H22.6786C23.2591 19.81 24.3373 19.2177 25.4854 19.26C28.4894 19.26 29.0423 21.2362 29.0423 23.8056L29.0413 29.0421ZM16.4498 18.1926C15.4997 18.1926 14.73 17.4229 14.73 16.4728C14.73 15.5227 15.4997 14.7529 16.4498 14.7529C17.3999 14.7529 18.1696 15.5227 18.1696 16.4728C18.1696 17.4229 17.3999 18.1926 16.4498 18.1926ZM17.9311 29.0421H14.9646V19.4976H17.9311V29.0421ZM30.5187 12.0011H13.4754C12.6702 11.9922 12.0099 12.6378 12 13.4431V30.557C12.0099 31.3632 12.6702 32.0088 13.4754 31.9999H30.5187C31.3259 32.0097 31.9892 31.3642 32 30.557V13.4421C31.9882 12.6349 31.3249 11.9893 30.5187 12.0001" fill="#3B3A79"/>
                                                        </svg>                                                                                                                                                                                                                 
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    
                        </div>
                        <div class="w-100 m-auto position-relative z-index-1 controle-banner" style="width: 200px; height: 100px;width: 200px;
                        margin-top: -4rem;
                        margin-bottom: 3rem;">
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

    </main>
@endsection
