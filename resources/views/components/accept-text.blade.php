@inject('site', 'App\\Services\\SiteService')

@if ($site->hasPrivacy())
    <p class="">
        Li e aceito a <a href="{{ route_lang('privacy') }}" target="_blank">política de privacidade</a> da {{ env('APP_NAME') }}
    </p>
@else
    <p class="">
        Aceito com a utilização de meus dados pela {{ env('APP_NAME') }}
    </p>
@endif