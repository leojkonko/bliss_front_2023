<footer id="footer" class="overflow-hidden position-relative">   
    <div class="row g-0 z-index-1 position-absolute top-0 start-0 w-100 h-100">
        <div class="col-lg-3 col-xl-3 col-xxl-3 ">
            <div class="ratio ratio-16x9 h-100">
                <img class="object-fit-cover h-100 w-100" src="{{ asset('front/images/backgrounds/footer.png') }}">
            </div>
        </div>    
        <div class="col-lg-9 col-xl-9 col-xxl-9 d-none d-lg-block">
            <div class="ratio ratio-16x9 h-100">
                <img class="object-fit-cover h-100 w-100" src="{{ asset('front/images/backgrounds/footer2.png') }}">
            </div>
        </div>    
    </div> 
    <div class="container position-relative z-index-1">
        <div class="row gy-2 gy-lg-0 text-center text-lg-start align-items-center justify-content-between pt-2 pt-lg-4 position-relative">
            <div class="col-lg-3 d-flex justify-content-start pt-3 pt-lg-0" data-aos="fade-left">
                <a href="{{ route_lang('home') }}" class="d-block m-auto m-lg-0">
                    <img class="logo-footer" src="{{ asset('front/images/logos/logo-footer.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
            {{--
                #3b3a79
                #2c2b5b;
                --}}
            <div class="col-lg-2 d-flex justify-content-center mt-2 mt-lg-0" data-aos="fade-left">
                <div>
                    <h2 class="fs-22 fs-lora fw-600 text-lg-primary w-100 text-lg-start text-center mt-2 mt-lg-0">Menus</h2>
                    <nav class="menu">
                        <ul class="mb-0 list-unstyled">
                            <li class="mt-0-50">
                                <a href="" class="@if (Route::is('products')) active @endif fs-15 fw-400 text-decoration-none text-lg-dark ">
                                    Imóveis      
                                </a>
                            </li>
                            <li class="mt-0-50">
                                <a href="{{ route_lang('company') }}" title="Empresa" class="@if (Route::is('company')) active @endif fs-15 fw-400 text-decoration-none text-lg-dark ">A empresa</a>
                            </li>
                            <li class="mt-0-50">
                                <a href="" title="solutions" class="@if (Route::is('solutions')) active @endif fs-15 fw-400 text-decoration-none text-lg-dark ">Comparar</a>
                            </li>
                            <li class="mt-0-50">
                                <a href="{{ route_lang('blog') }}" title="Blog" class="@if (Route::is('blog')) active @endif fs-15 fw-400 text-decoration-none text-lg-dark ">Blog</a>
                            </li>
                            <li class="mt-0-50">
                                <a href="{{ route_lang('contact') }}" title="Contato" class="@if (Route::is('contact')) active @endif fs-15 fw-400 text-decoration-none text-lg-dark ">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center mt-2 mt-lg-0" data-aos="fade-right">
                <div> 
                    <h2 class="fs-22 fs-lora fw-600 text-lg-primary w-100 text-lg-start text-center">Contato</h2>
                    <ul class="list-unstyled">
                        <li class="mt-0-50">
                            <a target="_blank" href="" class="fs-15 fw-400 text-decoration-none text-lg-dark">(54) 3419 9357</a> <span class="">|</span>
                            <a target="_blank" href="" class="fs-15 fw-400 text-decoration-none text-lg-dark">(54) 9 9902 1188</a>
                        </li>
                        <li class="mt-0-50">
                            <a target="_blank" href="" class="fs-15 fw-400 text-decoration-none text-lg-dark">                                  
                                contato@imoveisbliss.com.br</a>
                        </li>
                    </ul>
                    <h2 class="fs-22 fs-lora fw-600 text-lg-primary w-100 text-lg-start text-center mt-lg-2 mt-2 mt-lg-2">Endereço</h2>
                    <ul class="list-unstyled">
                        <li class="mt-0-50">
                            <a target="_blank" href="" class="fs-15 fw-400 text-decoration-none text-lg-dark">
                                Plácido de Castro, Nº 1063, sala 501, <br> Ed. Vint Offices - Caxias do Sul-RS
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3 d-flex justify-content-center" data-aos="fade-right">
                <div>
                    <div class="border border-secondary rounded-5 p-2 p-lg-1 p-xl-2">
                        <h2 class="fs-22 fs-lora fw-600 text-lg-primary w-100 text-lg-start text-center">Newsletter!</h2>
                        <p class="fs-14 fw-400 d-lg-none d-xl-block text-lg-dark">
                            Assine nossa newsletter e fique por dentro de notícias e novidades!
                        </p>
                        <div class="d-flex mt-1 position-relative">
                            <input type="text" placeholder="Digite seu e-mail" class="input-footer form-control">
                            <button class="btn btn-white position-absolute rounded-circle" style="right: -2px">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 13L14 8M14 8L9 3M14 8L2 8" stroke="#404040" stroke-linejoin="round"/>
                                </svg>                                                                    
                            </button>
                        </div>
                        <div class="d-flex mt-1">
                            <input type="checkbox" id="meuCheckbox-footer" class="checkbox-input-footer d-none" checked>
                            <label for="meuCheckbox-footer" class="checkbox-estilizado-footer me-0-50 mt-0-25"></label>
                            
                            <p class="w-100 fs-14 text-lg-dark">
                                Li e aceito a <a class="fs-15 text-decoration-underline text-lg-dark fw-700" href="{{ route_lang('privacy') }}" target="_blank">política de privacidade</a> da {{ env('APP_NAME') }}
                            </p>
                        </div>
                        <div class="justify-content-center justify-content-lg-start d-flex">
                            <button class="btn btn-orange fs-15">
                                Enviar
                            </button>
                        </div>
                    </div>
                    <div class="d-flex gap-1 mt-1 justify-content-center d-xxl-none">
                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer p-1 bg-white" style="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_10_2144)">
                                <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="#002C33"/>
                                <path d="M12 5.838C8.597 5.838 5.838 8.597 5.838 12C5.838 15.403 8.597 18.162 12 18.162C15.403 18.162 18.162 15.403 18.162 12C18.162 8.597 15.403 5.838 12 5.838ZM12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16Z" fill="#002C33"/>
                                <path d="M18.406 7.034C19.2013 7.034 19.846 6.38929 19.846 5.594C19.846 4.79871 19.2013 4.154 18.406 4.154C17.6107 4.154 16.966 4.79871 16.966 5.594C16.966 6.38929 17.6107 7.034 18.406 7.034Z" fill="#002C33"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_10_2144">
                                <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                                </clipPath>
                                </defs>
                                </svg>                                                                                                                                         
                        </a>
                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer p-1 bg-white" style="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_10_2161)">
                                <path d="M24 12.0729C24 18.0983 19.606 23.0935 13.87 24V15.5862H16.659L17.19 12.1051H13.87V9.84649C13.87 8.89373 14.334 7.96613 15.82 7.96613H17.329V5.00222C17.329 5.00222 15.959 4.7668 14.65 4.7668C11.916 4.7668 10.13 6.43387 10.13 9.4511V12.1041H7.091V15.5852H10.13V23.999C4.395 23.0915 0 18.0973 0 12.0729C0 5.40566 5.373 0 12 0C18.627 0 24 5.40465 24 12.0729Z" fill="#002C33"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_10_2161">
                                <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                                                                                                                                       
                        </a>
                        <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer p-1 bg-white" style="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_18_10404)">
                                <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35259V8.9971H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19968 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.2272 4.19968 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.2272 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.9971H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761832 23.1899 -0.0128484 22.2224 0.000161495" fill="#002C33"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_18_10404">
                                <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                                </clipPath>
                                </defs>
                            </svg>                                                                                                                                                                       
                        </a>
                    </div>  
                </div>
            </div>
            <div class="d-none d-xxl-flex col-lg-1 justify-content-center">
                <div class="gap-1 mt-1 justify-content-center" style="display: grid">
                    <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer p-1 bg-white" style="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_10_2144)">
                            <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="#002C33"/>
                            <path d="M12 5.838C8.597 5.838 5.838 8.597 5.838 12C5.838 15.403 8.597 18.162 12 18.162C15.403 18.162 18.162 15.403 18.162 12C18.162 8.597 15.403 5.838 12 5.838ZM12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16Z" fill="#002C33"/>
                            <path d="M18.406 7.034C19.2013 7.034 19.846 6.38929 19.846 5.594C19.846 4.79871 19.2013 4.154 18.406 4.154C17.6107 4.154 16.966 4.79871 16.966 5.594C16.966 6.38929 17.6107 7.034 18.406 7.034Z" fill="#002C33"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_10_2144">
                            <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                            </clipPath>
                            </defs>
                            </svg>                                                                                                                                         
                    </a>
                    <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer p-1 bg-white" style="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_10_2161)">
                            <path d="M24 12.0729C24 18.0983 19.606 23.0935 13.87 24V15.5862H16.659L17.19 12.1051H13.87V9.84649C13.87 8.89373 14.334 7.96613 15.82 7.96613H17.329V5.00222C17.329 5.00222 15.959 4.7668 14.65 4.7668C11.916 4.7668 10.13 6.43387 10.13 9.4511V12.1041H7.091V15.5852H10.13V23.999C4.395 23.0915 0 18.0973 0 12.0729C0 5.40566 5.373 0 12 0C18.627 0 24 5.40465 24 12.0729Z" fill="#002C33"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_10_2161">
                            <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                            </clipPath>
                            </defs>
                        </svg>                                                                                                                                                                       
                    </a>
                    <a target="_blank" href="" class="fs-16 fw-400 text-decoration-none svg-footer p-1 bg-white" style="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_18_10404)">
                            <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35259V8.9971H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19968 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.2272 4.19968 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.2272 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.9971H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761832 23.1899 -0.0128484 22.2224 0.000161495" fill="#002C33"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_18_10404">
                            <rect width="24" height="24" fill="white" transform="matrix(1 0 0 -1 0 24)"/>
                            </clipPath>
                            </defs>
                        </svg>                                                                                                                                                                       
                    </a>
                </div>  
            </div>
        </div>
    </div>
    <div class="py-0-50 copyright position-relative z-index-3 mt-2 mt-lg-4">
        <div class="px-lg-2 ">   
            <div class="row">
                <div class="col-lg-3 d-flex justify-content-center d-none d-lg-flex">
                    <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                        <a href="{{ route_lang('home') }}" class="d-block m-auto m-lg-0">
                            <img class="" width="80px" src="{{ asset('front/images/logos/logo-ellite.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                        </a>
                    </div>  
                    <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                        @inject('site', 'App\\Services\\SiteService')
                            <a href="{{ route_lang('privacy') }}" style="white-space: initial;" class="small text-muted text-decoration-none my-2 my-lg-0 fs-14" title="Política de privacidade">Política de privacidade</a>
                    </div>     
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center d-lg-none">
                    <a href="{{ route_lang('home') }}" class="d-block m-auto m-lg-0">
                        <img class="" width="80px" src="{{ asset('front/images/logos/logo-ellite.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>  
                <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center d-lg-none">
                    @inject('site', 'App\\Services\\SiteService')
                        <a href="{{ route_lang('privacy') }}" style="white-space: initial;" class="small text-muted text-decoration-none my-2 my-lg-0 fs-14" title="Política de privacidade">Política de privacidade</a>
                </div> 
                <div class="col-lg-9 d-flex justify-content-center d-none d-lg-flex">
                    <div class="col-lg-6 col-12 d-flex justify-content-start align-items-center">
                        <small class="text-muted small text-center text-lg-start px-1 px-lg-0 ps-lg-4">
                            <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 7V7C3.89543 7 3 7.89543 3 9V12C3 13.1046 3.89543 14 5 14H11C12.1046 14 13 13.1046 13 12V9C13 7.89543 12.1046 7 11 7V7M5 7V5C5 3.34315 6.34315 2 8 2V2C9.65685 2 11 3.34315 11 5V7M5 7H11M8 9.5V11.5" stroke="#808080" stroke-linejoin="round"/>
                            </svg>                                
                            Area restita</small>
                        
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                        <p class="text-muted small text-center text-lg-start m-0">Copyright © Bliss Imóveis. CRECI/RS: 00000</p> 
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center d-lg-none">
                    <small class="text-muted small text-center text-lg-start px-1 px-lg-0">
                        <svg class="me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 7V7C3.89543 7 3 7.89543 3 9V12C3 13.1046 3.89543 14 5 14H11C12.1046 14 13 13.1046 13 12V9C13 7.89543 12.1046 7 11 7V7M5 7V5C5 3.34315 6.34315 2 8 2V2C9.65685 2 11 3.34315 11 5V7M5 7H11M8 9.5V11.5" stroke="#808080" stroke-linejoin="round"/>
                        </svg>                                
                        Area restita</small>
                    
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center d-lg-none mt-2 mb-1">
                    <p class="text-muted small text-center text-lg-start m-0">Copyright © Bliss Imóveis. CRECI/RS: 00000</p> 
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Whatsapp fixed button --}}
<x-whatsapp-fixed />

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Swiper.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

{{-- GSAP (caso necessário) --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- Front js --}}
@vite(['resources/front/js/vendors/bootstrap.bundle.min.js', 'resources/front/js/main.js'])
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@livewireScripts
<script>
  </script>
  <script>
    var botaoComprar = document.querySelectorAll("#comprar");
    var divCompra = document.querySelectorAll("#compra");
    var divFundoImg = document.getElementById("fundo_img");
    var divBlack = document.getElementById("fundo_black");
  
    for (var i = 0; i < botaoComprar.length; i++) {
      botaoComprar[i].addEventListener("click", function(event) {
        event.stopPropagation();
  
        var compraIndex = Array.prototype.indexOf.call(botaoComprar, this);
        var compraElement = divCompra[compraIndex];
  
        if (compraElement.classList.contains("show")) {
          compraElement.classList.remove("show");
          compraElement.innerHTML = "";
          divFundoImg.classList.remove("fundo-img");
          divBlack.classList.remove("fundo-black");
        } else {
          compraElement.classList.add("show");
          compraElement.innerHTML = "1";
          divFundoImg.classList.add("fundo-img");
          divBlack.classList.add("fundo-black");
        }
      });
  
      document.addEventListener("click", function(event) {
        for (var j = 0; j < divCompra.length; j++) {
          if (!divCompra[j].contains(event.target) && !botaoComprar[j].contains(event.target)) {
            divCompra[j].classList.remove("show");
            divCompra[j].innerHTML = "";
            divFundoImg.classList.remove("fundo-img");
            divBlack.classList.remove("fundo-black");
          }
        }
      });
    }
  </script>

  <script>
const imagemEffectList = document.querySelectorAll('.imagem-effect');

imagemEffectList.forEach(function(element) {
    element.addEventListener('mouseover', function() {
        addImgEffect(this);
    });

    element.addEventListener('mouseout', function() {
        removeImgEffect(this);
    });
});

function addImgEffect(element) {
    element.classList.add('img-effect');
    element.nextElementSibling.classList.add('img-effect');
    //console.log('Mouse sobre o elemento');
}

function removeImgEffect(element) {
    element.classList.remove('img-effect');
    element.nextElementSibling.classList.remove('img-effect');
    //console.log('Mouse fora do elemento');
}


  </script>
   <script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
   </script>
   <script>

    window.addEventListener('DOMContentLoaded', function() {
      var header = document.getElementById('infos');
    var hederBody = document.getElementById('headerBody');
      // Função para calcular a distância entre o elemento e o topo da página
      function calcularDistanciaAoTopo() {
        var rect = header.getBoundingClientRect();
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        console.log(rect);
        console.log(scrollTop);
        return rect.top + scrollTop;
      }
   
      var headerTop = calcularDistanciaAoTopo();
    
      window.addEventListener('scroll', function() {
        var currentScroll = window.pageYOffset;
    
        console.log(currentScroll);
        console.log(headerTop + 'dist topo');
    
        if (currentScroll > headerTop) {
          hederBody.classList.add('position-fixed');
          hederBody.classList.add('bg-header');
          hederBody.classList.remove('position-absolute');
        } else {
          hederBody.classList.remove('bg-header');
          hederBody.classList.remove('position-fixed');
          hederBody.classList.add('position-absolute');
        }
      });
    });

    

    
      </script>
      <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
      </script>
      <script>
        AOS.init();
      </script>
</body>

</html>
