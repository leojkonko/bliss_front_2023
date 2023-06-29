@extends('front.layout.app')

@section('content')

    <main id="produto" class="" style=";overflow-x:hidden;">

        <section class="py-lg-4 py-2 overflow-hidden">
            <div class="container">
                <div class="row">
                    @foreach (range(0,4) as $image)
                        <div class="block swiper-slide overflow-hidden col-lg-4 mb-2" data-aos="zoom-out-up">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{ route_lang('products-details') }}">
                                        <div class="ratio ratio-16x9 h-100">
                                            <img class="w-100 h-100 object-fit-cover rounded-20-top" src="{{ asset("front/images/backgrounds/mobiliados.png") }}" alt="" title="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="bg-cinza rounded-20-bottom h-100 p-1 p-sm-2">
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
            </div>
        </section>

        <section class="pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination pt-1">
                              <li class="page-item">
                                <a class="page-link" href="#">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13L0.999998 7L7 1" stroke="#454545" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>                                         
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7L0.999998 13" stroke="#454545" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>                                        
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
