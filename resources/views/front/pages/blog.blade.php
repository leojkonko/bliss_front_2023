@extends('front.layout.app')

@section('content')
 
    <main id="blog" class="overflow-hidden pb-2 position-relative">  
        <div class="text-center justify-content-center d-flex w-100 d-lg-none">
            <div>
                {{--<button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample2" aria-controls="offcanvasExample2">
                    <svg class="me-0-50" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 6L0 6" stroke="#454545" stroke-linejoin="round"/>
                        <rect width="14" height="1" fill="#454545"/>
                        <path d="M0 11H6V12H0V11Z" fill="#454545"/>
                    </svg>                                    
                    Ordenar listagem
                </button>--}}
            </div>
        </div> 
          
          
          
        {{--<section class="py-2 position-relative z-index-3">
            <div class="container">
                <div class="row">
                    <div class="d-md-flex d-inline-block gap-1 align-items-center" data-aos="fade-left">
                        <p class="fs-16 fw-400 m-0 me-1 mb-1 mb-md-0">Filtrando por:</p>
                        <button class="btn btn-dark rounded-0">Todos</button>
                        <button class="btn btn-outline-dark rounded-0">Notícias</button>
                        <button class="btn btn-outline-dark rounded-0">Artigos</button>
                    </div>
                </div>
            </div>
        </section>--}}
        {{--<section class="busca">
            <div class="container">
                <div class="row g-2">

                    @if (count($categories))
                        <div class="col-12">
                            <button class="btn btn-primary d-flex align-items-center gap-0-50" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias">
                                <svg class="w-1-25 h-1-25" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z" />
                                </svg>
                                Categorias
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCategorias" aria-labelledby="offcanvasCategoriasLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasCategoriasLabel">Categorias</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <p>Selecione uma categoria:</p>
                                    <ul class="list-unstyled mb-0 p-0">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route_lang('blog', ['categoria' => $category->slug]) }}" class="@if (route_lang('blog', ['categoria' => $category->slug]) === Request::fullUrl()) active @endif">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a href="{{ route_lang('blog') }}" class="fw-bold">Ver todos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class="col-6 col-lg-4 col-xl-3">
                                <x-blog-card :post="$post" />
                            </div>
                        @endforeach
                    @else
                        <p>
                            Nenhum artigo encontrado.
                        </p>
                    @endif
                </div>
            </div>
            @if ($posts->total() > $posts->perPage())
                <div class="row py-2">
                    <div class="col-12 d-flex justify-content-center">
                        <x-pagination :list="$posts" />
                    </div>
                </div>
            @endif
        </section>--}}
<section class="py-lg-2">
    <div class="container">
        <div class="row">
            @foreach (range(0,4) as $image)
            <div class="swiper-slide position-relative col-lg-4 mt-2">
              <a href="{{ route_lang('blog-details') }}">            
                    <div class="ratio ratio-1x1">
                        <div class="z-index-1 rounded-20" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);transform: rotate(-180deg);"></div>
                        <img class="w-100 h-100 object-fit-cover rounded-20" src="{{ asset("front/images/backgrounds/blog.png") }}" alt="">
                        <div class="bottom-0 z-index-2" style="top: initial !important;">
                            <div class="position-absolute bottom-0 start-0 p-1 p-lg-1 p-xl-2 p-xxl-3">
                                <button class="mb-lg-0-50 mb-xl-0 btn rounded-36 py-0-25 px-0-50 fs-12 p-700 border-2 btn-orange text-white" >DICAS</button>
                                <p class="text-white fs-32 fw-700 mt-1 m-0">5 dicas para você encontrar o imóvel perfeito!</p>
                                <p class="text-white fs-16 fw-400 mt-1">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. [...]</p>
                            </div>
                        </div>
                    </div>
                </a>  
             </div>
            @endforeach
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#">
                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 7L1 7M1 7L7 13M1 7L7 0.999999" stroke="#808080" stroke-linejoin="round"/>
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
                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 7L12 7M12 7L6 1M12 7L6 13" stroke="#808080" stroke-linejoin="round"/>
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
