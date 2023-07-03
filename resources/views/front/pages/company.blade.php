@extends('front.layout.app')

@section('content')

    <main id="empresa" class="row gx-0 gy-2 gy-lg-4 overflow-hidden">
        <section class="mt-lg-4 mt-2 bg-cinza">
            <div class="">
                <div class="row g-0 position-relative">
                    <div class="position-absolute z-index-2 top-50 translate-middle-y d-none d-lg-block">
                        <div class="container">
                            <div class="col-lg-6">
                                <div class="bg-white rounded-5 p-2 p-xl-4 p-2">
                                    <h2 class="fs-48 fs-lora text-center text-lg-start">Conheça a Bliss</h2>
                                    <p class="fs-16 fw-400 text-center text-lg-start">
                                        O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                        <div class="ratio ratio-sm-70 ratio-6x9 h-100">
                            <img class="object-fit-cover"src="{{ asset('front/images/backgrounds/company-bg.png') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                            <div class="position-absolute z-index-2 translate-middle d-lg-none ratio-unstyled" style="top: 50% !important; left: 50% !important;width: 100% !important">
                                <div class="container">
                                    <div class="col-12">
                                        <div class="bg-white rounded-5 p-2 p-xl-4 p-2">
                                            <h2 class="fs-48 fs-lora text-center text-lg-start">Conheça a Bliss</h2>
                                            <p class="fs-16 fw-400 text-center text-lg-start">
                                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" style="">
                        <div class="ratio ratio-xxl-16x9 ratio-lg-70 ratio-1x1 h-100">                            
                            <a href="{{ url("/front/images/backgrounds/company.png") }}" data-fancybox="gallery">
                                <div class="ratio-unstyled ratio-styled position-absolute z-index-3">
                                    <svg class="z-index-1" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.9" fill-rule="evenodd" clip-rule="evenodd" d="M80 160C124.183 160 160 124.183 160 80C160 35.8172 124.183 0 80 0C35.8172 0 0 35.8172 0 80C0 124.183 35.8172 160 80 160ZM63 112.909L117 81.732C118.333 80.9622 118.333 79.0377 117 78.2679L63 47.091C61.6667 46.3212 60 47.2835 60 48.8231L60 111.177C60 112.717 61.6667 113.679 63 112.909Z" fill="white"/>
                                    </svg>
                                </div>
                                <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/company.png") }}" alt="Icone">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-0">
            <div class="">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="ratio ratio-21x9">
                            <div class="empresa-swiper swiper h-100">
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
                    <div class="col-lg-7">
                        <div class="bg-cinza w-100 h-100 p-lg-4 p-2 d-flex align-items-center" style="background: #f5f5f5">
                            <p class="fs-16 fw-400 text-center text-lg-start">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-2">
            <div class="container">
                <div class="row">
                    <div class="equipe-swiper swiper h-100">
                        <div class="swiper-wrapper">
                     
                            @foreach (range(0,4) as $image)
                                <div class="d-block swiper-slide card-equipe" style="background-image: url({{ url("/front/images/backgrounds/equipe-bg.png") }});">
                                    <div class="ratio ratio-1x1 ratio-card">
                                        <a href="{{ url("/front/images/backgrounds/equipe.png") }}" data-fancybox="gallery" class="d-block video-slide swiper-slide">
                                            <div class="ratio ratio-21x9 h-100">
                                                <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/equipe.png") }}" alt="Icone">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-conteudo">
                                        <div class="p-2">
                                            <h2 class="fs-20 fs-lora text-cinza">Carine Almeida</h2>
                                            <p class="text-secondary fs-16">Corretor e Financeiro <br> CRECI/RS: 00000-0 </p>
                                            <p class="text-cinza fs-16 text-mistery d-none ">
                                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos.
                                            </p>
                                            <div class="d-flex gap-1 text-mistery-icons d-none">
                                                <a href="" class="border border-light p-0-50 d-flex">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59652 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04296 4.61333C5.88151 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79832 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="white"/>
                                                    </svg>                                                        
                                                </a>
                                                <a href="" class="border border-light p-0-50 d-flex">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.6331 13.6337H11.2622V9.92074C11.2622 9.03528 11.2464 7.89593 10.0291 7.89593C8.79436 7.89593 8.60514 8.86024 8.60514 9.85688V13.6337H6.23506V5.99806H8.51131V7.04122H8.54285C9.00724 6.24801 9.86981 5.77414 10.7884 5.80804C13.1915 5.80804 13.6339 7.38894 13.6339 9.4445L13.6331 13.6337ZM3.55985 4.95412C2.79978 4.95412 2.184 4.33832 2.184 3.57822C2.184 2.81813 2.79978 2.20233 3.55985 2.20233C4.31991 2.20233 4.93569 2.81813 4.93569 3.57822C4.93569 4.33832 4.31991 4.95412 3.55985 4.95412ZM4.74489 13.6337H2.37166V5.99806H4.74489V13.6337ZM14.815 0.000896178H1.18031C0.536146 -0.00620013 0.00788449 0.510253 0 1.15444V14.8456C0.00788449 15.4906 0.536146 16.007 1.18031 15.9999H14.815C15.4607 16.0078 15.9913 15.4913 16 14.8456V1.15365C15.9905 0.507888 15.4599 -0.0085656 14.815 0.000107663" fill="white"/>
                                                    </svg>                                                                                                             
                                                </a>
                                                <div class="ms-auto d-sm-none d-md-none d-md-flex">
                                                    <button class="btn btn-orange fs-12">
                                                        Assista ao meu vídeo
                                                        <svg class="ms-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM5.5 9.59808L10 7L5.5 4.40192L5.5 9.59808Z" fill="white"/>
                                                        </svg>                                                                                                                                                                                  
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 d-none d-sm-flex d-md-flex d-lg-none mt-1">
                                                <button class="btn btn-orange fs-12">
                                                    Assista ao meu vídeo
                                                    <svg class="ms-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM5.5 9.59808L10 7L5.5 4.40192L5.5 9.59808Z" fill="white"/>
                                                    </svg>                                                                                                                                                                                  
                                                </button>
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
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-cinza py-4" style="background-image: url({{ url("/front/images/backgrounds/depoimentos.png") }});background-size: cover;">
            <div class="container">
                <div class="row">
                    <h2 class="w-100 text-center fs-lora fs-48 text-primary">Depoimentos dos clientes</h2>
                    <p class="fs-16 text-center">Entenda a partir dos nossos clientes, o porquê a Bliss é a melhor no ramo imobiliário de alto padrão.</p>
                    <div class="col-lg-10 m-auto col-12">
                        <div class="depoimentos-swiper swiper h-100 p-lg-3" style=""> 
                            <div class="swiper-wrapper">
                         
                                @foreach (range(0,4) as $image)
                                    <div class="d-flex swiper-slide row g-0">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <div class="bg-white position-relative rounded-5 p-lg-4 p-2 h-100">
                                                <svg class="position-absolute z-index-1 d-none d-lg-block" style="left: -5%; top: -5%" width="109" height="88" viewBox="0 0 109 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.7688 46.002C15.3888 44.4347 15.1935 42.6588 15.1935 40.6667C15.1935 34.5012 17.5639 28.3842 22.4198 22.2991C27.5155 16.1966 33.4804 11.7458 40.317 8.92438C40.5748 8.81799 40.7764 8.60879 40.8733 8.34727C40.9701 8.08575 40.9533 7.79567 40.827 7.54705L37.7786 1.54704C37.5347 1.06697 36.9545 0.866234 36.466 1.09297C24.3685 6.70879 15.3945 14.0437 9.62359 23.1306C3.87304 32.1854 1 42.2614 1 53.3333C1 56.0749 1.3473 59.5777 2.02876 63.8251C2.72962 68.1934 4.36551 72.2193 6.9294 75.8933C9.03927 79.1192 11.7367 81.7718 15.0137 83.8451C18.3795 85.9744 22.6455 87 27.7419 87C33.8658 87 39.1902 84.9042 43.6658 80.7314C48.1724 76.5297 50.4194 71.1473 50.4194 64.6667C50.4194 57.7654 48.1872 52.2493 43.6447 48.2495C39.1665 44.3062 33.849 42.3333 27.7419 42.3333C23.2869 42.3333 19.2861 43.5565 15.7688 46.002ZM73.3494 46.002C72.9694 44.4346 72.7742 42.6588 72.7742 40.6667C72.7742 34.5012 75.1446 28.3843 80.0004 22.2993C85.0961 16.1967 91.061 11.7459 97.8976 8.92438C98.1554 8.81799 98.3571 8.60879 98.4539 8.34727C98.5507 8.08575 98.534 7.79567 98.4077 7.54704L95.3593 1.54704C95.1154 1.06697 94.5351 0.866234 94.0467 1.09297C81.9491 6.70879 72.9752 14.0437 67.2042 23.1306C61.4537 32.1854 58.5806 42.2614 58.5806 53.3333C58.5806 56.0749 58.9279 59.5777 59.6094 63.8251C60.3103 68.1934 61.9462 72.2193 64.51 75.8933C66.6199 79.1192 69.3173 81.7718 72.5944 83.8451C75.9601 85.9744 80.2262 87 85.3226 87C91.4464 87 96.7708 84.9042 101.246 80.7314C105.753 76.5297 108 71.1473 108 64.6667C108 57.7654 105.768 52.2493 101.225 48.2495C96.7471 44.3062 91.4296 42.3333 85.3226 42.3333C80.8675 42.3333 76.8667 43.5565 73.3494 46.002Z" stroke="#E67F4E" stroke-width="2" stroke-linejoin="round"/>
                                                </svg>          
                                                <svg class="position-absolute z-index-1" style="right: 5%; bottom: -5%" width="109" height="88" viewBox="0 0 109 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M93.2312 41.998C93.6112 43.5653 93.8065 45.3412 93.8065 47.3333C93.8065 53.4988 91.4361 59.6158 86.5802 65.7008C81.4845 71.8034 75.5196 76.2542 68.683 79.0756C68.4252 79.182 68.2236 79.3912 68.1267 79.6527C68.0299 79.9142 68.0467 80.2043 68.173 80.453L71.2214 86.453C71.4653 86.933 72.0455 87.1338 72.534 86.907C84.6315 81.2912 93.6055 73.9563 99.3764 64.8694C105.127 55.8146 108 45.7386 108 34.6667C108 31.9251 107.653 28.4223 106.971 24.1749C106.27 19.8066 104.634 15.7807 102.071 12.1067C99.9607 8.88077 97.2633 6.22818 93.9863 4.15492C90.6205 2.02558 86.3545 0.999998 81.2581 0.999998C75.1342 0.999997 69.8098 3.09581 65.3342 7.26858C60.8276 11.4703 58.5806 16.8527 58.5806 23.3333C58.5806 30.2346 60.8128 35.7507 65.3553 39.7505C69.8335 43.6938 75.151 45.6667 81.2581 45.6667C85.7131 45.6667 89.7139 44.4435 93.2312 41.998ZM35.6506 41.998C36.0306 43.5653 36.2258 45.3412 36.2258 47.3333C36.2258 53.4988 33.8554 59.6157 28.9996 65.7007C23.9039 71.8033 17.939 76.2541 11.1024 79.0756C10.8446 79.182 10.6429 79.3912 10.5461 79.6527C10.4493 79.9142 10.466 80.2043 10.5923 80.4529L13.6407 86.4529C13.8846 86.933 14.4649 87.1338 14.9533 86.907C27.0509 81.2912 36.0248 73.9563 41.7958 64.8694C47.5463 55.8146 50.4194 45.7386 50.4194 34.6667C50.4194 31.9251 50.0721 28.4223 49.3906 24.1749C48.6897 19.8066 47.0538 15.7807 44.49 12.1067C42.3801 8.88076 39.6827 6.22817 36.4056 4.15492C33.0399 2.02557 28.7738 0.999993 23.6774 0.999993C17.5536 0.999992 12.2292 3.09581 7.75356 7.26858C3.24693 11.4703 0.999998 16.8527 0.999998 23.3333C0.999997 30.2346 3.23211 35.7507 7.77463 39.7505C12.2529 43.6938 17.5704 45.6667 23.6774 45.6667C28.1325 45.6667 32.1333 44.4435 35.6506 41.998Z" stroke="#E67F4E" stroke-width="2" stroke-linejoin="round"/>
                                                </svg>                                                                                              
                                                <p class="fs-16 m-0 text-center text-lg-start">
                                                    O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada.
                                                </p>
                                                <p class="fw-600 fs-22 mt-1 mb-0 text-orange">
                                                    Márcia Ferreira
                                                </p>
                                                <p class="fs-16 fw-400 m-0">
                                                    Médica
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="ratio ratio-1x1 h-100">
                                                <img class="w-100 h-100 object-fit-cover" src="{{ url("/front/images/backgrounds/depoimentos2.png") }}" alt="Icone">
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
            </div>
        </section>

    </main>
@endsection
