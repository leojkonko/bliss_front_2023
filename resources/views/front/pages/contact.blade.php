@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato" class="position-relative z-index-3 overflow-hidden">
        <div class="position-absolute top-0 start-0" id="infos"></div>
        <section class="bg-orange py-2 py-lg-4 overflow-hidden">
            <div class="container">
                <ul class="mb-0 list-unstyled p-0 row g-1 contacts">
                        <li class="col-lg-4 address" data-aos="zoom-out-up">
                            <div class="card text-white justify-content-lg-start justify-content-center">
                                <svg width="3em" class="h-100 flex-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="fs-20 fw-600 text-orange">Visite-nos</span>
                                    <a href="" target="_blank" class="fs-16 fw-400 text-white mt-0-50 text-decoration-none">
                                        Rua Sinimbu, 2630, Conjuntos
1 e 2 Bairro São Pelegrino
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="col-lg-4" data-aos="zoom-out-up">
                            <div class="card text-white justify-content-lg-start justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="3em" class="h-100 flex-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="fs-20 fw-600 text-orange">Envie-nos um e-mail</span>
                                    <a href="" target="_blank" class="fs-16 fw-400 text-white mt-0-50 text-decoration-none">
                                        email@adicaimoveis.com.br
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="col-lg-4" data-aos="zoom-out-up" >
                            <div class="card text-white justify-content-lg-start justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="3em" class="h-100 flex-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="fs-20 fw-600 text-orange">Ligue para a gente</span>
                                    <div class="d-flex">
                                        <a href="" target="_blank" class="fs-16 fw-400 text-white mt-0-50 text-decoration-none">
                                            (54) 99999-9999 | 
                                        </a>
                                        <a href="" target="_blank" class="fs-16 fw-400 text-white mt-0-50 text-decoration-none">
                                             (54) 3333-3333
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                </ul>

            </div>
        </section>
        <section class="form-wrapper py-2 py-lg-4 overflow-hidden position-relative z-index-1">
            <div class="container">
                <div class="row justify-content-center gy-2 gy-lg-0 gx-lg-3">
                    <div class="col-lg-7">
                        <div class="formulario bg-white shadow-lg rounded-3 p-2">
                            <h2 class="h1 text-primary fw-bold text-center">Entre em contato</h2>
                            <p class="text-center mb-2">Preencha o formulário e nossa equipe vai retornar o quanto antes.</p>
                            <livewire:form-contact />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom: -7px;margin-top: -8rem;" data-aos="zoom-out-up">
            <iframe style="" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d223290.74738263275!2d-51.23905242540883!3d-29.019419540571572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRua%20J%C3%BAlio%20de%20Castilhos%2C%201481%20-%20Cri%C3%BAva%2C%20Caxias%20do%20Sul%20-%20RS!5e0!3m2!1spt-BR!2sbr!4v1687436398882!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
@endsection
