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
        <section class="py-2">
            <div class="container">
                <div class="row">
                    <div class="d-flex align-items-center gap-1">
                        <p class="fs-16 fw-400 me-2">
                            Filtrando por
                        </p>
                        <button class="btn btn-primary">
                            Tudo
                        </button>
                        <button class="btn btn-outline-primary">
                            Notícias
                        </button>
                        <button class="btn btn-outline-primary">
                            Artigos
                        </button>
                    </div>
                </div>
            </div>
        </section>
<section class="py-lg-2">
    <div class="container">
        <div class="row">
            @foreach (range(0,4) as $image)
            <a href="{{ route_lang('blog-details') }}" class="col-lg-3 col-md-4 col-6 mb-2 swiper-slide position-relative">
                <div class="ratio ratio-1x1">
                    <div class="z-index-2 start-0 top-0" style="left: 3%; top:3%;">
                        <button class="btn-orange btn btn-imovel fs-12 fw-400 rounded-5">Notícias</button>
                    </div>
                    <img class="w-100 h-100 object-fit-cover rounded-5" src="{{ asset("front/images/backgrounds/casa-home.png") }}" alt="" title="">
                </div>
                <p class="text-secondary mt-2 fs-14 fw-400 mb-0">Postado há 2 semanas</p>
                <p class="fs-16 fw-700">Dicas para escolher o imóvel dos seus sonhos</p>
                <p class="text-secondary fs-16 fw-400">
                    Quer obter o melhor valor pelo seu imóvel? Descubra estratégias eficazes para valorizá-lo antes de colocá-lo à venda e conquiste negociações vantajosas!
                </p>
                <button class="btn btn-primary rounded-5">
                    Leia mais
                    <svg class="ms-0-50" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 5.5L5 5.5M-9.53674e-07 5.5L5 5.5M5 5.5L5 0.500001M5 5.5L5 10.5" stroke="white" stroke-linejoin="round"/>
                    </svg>                                                                                                  
                </button>
            </a>
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
