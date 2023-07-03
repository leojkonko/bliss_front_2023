@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto mt-lg-4 mt-2">
                    <div class="ratio ratio-21x9">
                        <img class="w-100 h-100 object-fit-cover rounded-20" src="{{ asset("front/images/backgrounds/blog-details.png") }}" alt="">
                    </div>
                </div>
                <div class="col-lg-10 m-auto position-relative end-0 top-0 d-lg-block" >
                        <div class="pe-lg-4">
                            <h2 class="fs-32 fs-lora fw-700 w-100 text-lg-start text-center mt-4">Por que imóveis mobiliados estão tão em alta?</h2>
                            <h2 class="fs-16 fw-700 w-100 text-lg-start text-center mt-1">O que é o Lorem Ipsum?</h2>
                            <p class="fs-16 fw-400 text-lg-start text-center">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                            </p>
                            <h2 class="fs-16 fw-700 w-100 text-lg-start text-center mt-1">O que é o Lorem Ipsum?</h2>
                            <p class="fs-16 fw-400 text-lg-start text-center">
                                É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto legível. Muitas ferramentas de publicação electrónica e editores de páginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissão, e uma pesquisa por "lorem ipsum" irá encontrar muitos websites ainda na sua infância. Várias versões têm evoluído ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).
                            </p>
                        </div>
                        <div class="mt-2 pb-2 pb-lg-4">
                            <div class="d-flex gap-1 gap-lg-3 align-items-center flex-wrap flex-column-reverse flex-lg-row">
                                <a href="{{ route_lang('blog') }}" class="rounded-0 btn btn-orange rounded-5 w-max mt-1 mt-sm-0">Voltar</a>
                                <div class="d-flex flex-column flex-lg-row gap-0-50 align-items-center flex-wrap">
                                    <span class="fw-700">
                                        Compartilhar:
                                    </span>
                                    <div class="d-flex gap-0-50 align-items-center">
                                        <a class="d-flex rounded-circle p-0-50" title="Compartilhe no WhatsApp" href="https://api.whatsapp.com/send?text=" target="_blank" aria-label="Whatsapp">
                                            <svg class="shadow-lg rounded-circle" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="22" fill="#25D366"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0869 14.9067C27.2062 13.0333 24.7059 12.0008 22.0423 12C16.5535 12 12.0862 16.445 12.0837 21.91C12.0829 23.6567 12.5418 25.3617 13.4134 26.865L12 32L17.2786 30.6217C18.7331 31.4117 20.3709 31.8275 22.0373 31.8283H22.0414C27.5294 31.8283 31.9975 27.3825 32 21.9175C32.0017 19.27 30.9667 16.7792 29.0869 14.9067ZM22.0423 30.1542H22.0389C20.5535 30.1542 19.0973 29.7567 17.8262 29.0058L17.524 28.8275L14.3915 29.645L15.228 26.605L15.0312 26.2933C14.2022 24.9817 13.7651 23.4658 13.766 21.91C13.7676 17.3683 17.4813 13.6733 22.0465 13.6733C24.2571 13.6733 26.3354 14.5317 27.8978 16.0883C29.4603 17.6458 30.3203 19.715 30.3194 21.9158C30.3169 26.4592 26.6041 30.1542 22.0423 30.1542ZM26.5824 23.985C26.3337 23.8608 25.1103 23.2617 24.8817 23.1792C24.654 23.0967 24.4882 23.055 24.3215 23.3025C24.1549 23.55 23.6793 24.1083 23.5336 24.2742C23.3887 24.4392 23.243 24.46 22.9943 24.3358C22.7457 24.2117 21.9435 23.9508 20.9931 23.1067C20.2537 22.45 19.7538 21.6392 19.609 21.3908C19.4641 21.1425 19.5939 21.0092 19.7178 20.8858C19.83 20.775 19.9665 20.5967 20.0913 20.4517C20.2169 20.3083 20.2579 20.205 20.3416 20.0392C20.4245 19.8742 20.3835 19.7292 20.3207 19.605C20.2579 19.4817 19.7605 18.2625 19.5537 17.7667C19.3519 17.2833 19.1467 17.3492 18.9935 17.3417C18.8486 17.3342 18.6829 17.3333 18.5162 17.3333C18.3504 17.3333 18.0808 17.395 17.853 17.6433C17.6253 17.8917 16.9822 18.4908 16.9822 19.7092C16.9822 20.9283 17.874 22.1058 17.9979 22.2708C18.1218 22.4358 19.7521 24.9375 22.2483 26.01C22.8419 26.265 23.3058 26.4175 23.6667 26.5317C24.2629 26.72 24.8055 26.6933 25.2342 26.63C25.7124 26.5592 26.7063 26.0308 26.914 25.4525C27.1216 24.8742 27.1216 24.3775 27.0588 24.275C26.9969 24.1708 26.8311 24.1092 26.5824 23.985Z" fill="white"/>
                                            </svg>                                                
                                        </a>
                                        <a class="d-flex rounded-circle p-0-50" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" aria-label="Facebook">
                                            <svg class="shadow-lg rounded-circle" width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect y="0.00012207" width="44" height="44" rx="22" fill="white"/>
                                                <path d="M32 22.0609C32 27.0821 28.3383 31.2447 23.5583 32.0001V24.9886H25.8825L26.325 22.0877H23.5583V20.2055C23.5583 19.4116 23.945 18.6386 25.1833 18.6386H26.4408V16.1686C26.4408 16.1686 25.2992 15.9725 24.2083 15.9725C21.93 15.9725 20.4417 17.3617 20.4417 19.876V22.0869H17.9092V24.9878H20.4417V31.9993C15.6625 31.243 12 27.0812 12 22.0609C12 16.5048 16.4775 12.0001 22 12.0001C27.5225 12.0001 32 16.504 32 22.0609Z" fill="#3B3A79"/>
                                            </svg>                                                
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>     
        </section>
    </main>
@endsection
