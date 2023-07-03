@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
<main id="contato" class="position-relative z-index-3">
    <div class="position-absolute top-0 start-0" id="infos"></div>
    <section class="py-2 py-lg-4" style="
    background-image: url({{ asset("front/images/backgrounds/bg-solutions.png") }});background-size: cover;">
        <div class="container">
            <ul class="mb-0 list-unstyled p-0 row g-1 contacts">
                    <li class="col-lg-4 address" data-aos="zoom-out-up">
                        <div class="card shadow-lg bg-white text-orange justify-content-lg-start justify-content-center">
                            <img class="" width="56px" src="{{ asset("front/images/icons/map-location.svg") }}" alt="" title="">
                                
                            <div class="d-flex flex-column justify-content-center">
                                <span class="fs-20 fw-600 text-orange">Visite-nos</span>
                                <a href="" target="_blank" class="fs-16 fw-400 mt-0-50 text-decoration-none">
                                    Av. Júlio de Castilhos, 1481,
                                    Caxias do Sul
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="col-lg-4" data-aos="zoom-out-up">
                        <div class="card shadow-lg bg-white text-orange justify-content-lg-start justify-content-center">
                            <img class="" width="56px" src="{{ asset("front/images/icons/email.svg") }}" alt="" title="">
                            <div class="d-flex flex-column justify-content-center">
                                <span class="fs-20 fw-600 text-orange">Envie-nos um e-mail</span>
                                <a href="" target="_blank" class="fs-16 fw-400 mt-0-50 text-decoration-none">
                                    contato@quattroimob.com.br
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="col-lg-4" data-aos="zoom-out-up" >
                        <div class="card shadow-lg bg-white text-orange justify-content-lg-start justify-content-center">
                            <img class="" width="56px" src="{{ asset("front/images/icons/phone-call.svg") }}" alt="" title="">
                            <div class="d-flex flex-column justify-content-center">
                                <span class="fs-20 fw-600 text-orange">Ligue para a gente</span>
                                <a href="" target="_blank" class="fs-16 fw-400 mt-0-50 text-decoration-none">
                                    (54) 99950-8776
                                </a>
                            </div>
                        </div>
                    </li>

            </ul>

        </div>
    </section>

    <section class="form-wrapper overflow-hidden py-lg-4">
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

    <section class="z-index-background position-relative" style="margin-bottom: -7px;margin-top: -6rem;" data-aos="zoom-out-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7693276.046248589!2d-64.42102151279926!3d-19.69207402468304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPl%C3%A1cido%20de%20Castro%2C%20N%C2%BA%201063%2C%20sala%20501%2C%20Ed.%20Vint%20Offices%20-%20Caxias%20do%20Sul-RS!5e0!3m2!1spt-BR!2sbr!4v1688382856039!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    </section>
</main>
@endsection
