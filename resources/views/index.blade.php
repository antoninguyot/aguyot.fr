@extends('partials.app')

@section('body')
    <div style="position: fixed; top: 15px; right: 15px;">
        @if(app('translator')->getLocale() == 'en')
            <a href="?l=fr" style="font-size: 26px">🇫🇷</a>
        @else
            <a href="?l=en" style="font-size: 26px">🇬🇧</a>
        @endif
    </div>

    <header>
        <h1 style="">Antonin Guyot</h1>
        <div style="display: block">
            <img src="/images/me.jpg" style="margin: 20px; max-width: 150px; float: right;">
        </div>
    </header>

    <h2>👨‍💻 {{ __("À propos") }}</h2>

    <p>
        {{ __("Étudiant de :age ans en Génie Informatique à", ['age' => \Carbon\Carbon::parse('2000-09-19')->age]) }}
        <a href="https://utc.fr" target="_blank">{{ __("l'UTC") }}</a>.
    </p>
    <p>
        {{ __("En cas de besoin, vous pouvez télecharger mon") }} <a
            href="https://static.ateros.fr/IEU83axJDLtVvqgSZzFRTuN9PWfMXK.pdf">{{ __("CV") }}</a>.
    </p>
    <p>
        {!! __("Je programme principalement en PHP (avec le framework :laravel), mais j'ai des compétences dans l'administration système plus généralement.", ['laravel' => '<a href="https://laravel.com">Laravel</a>']) !!}
    </p>

    <hr>
    <h2>💻 {{ __("Projets récents") }}</h2>
    <ul>
        <li>
            <a href="https://cl-doc.aguyot.fr/"
               target="_blank">CL-doc</a>, {{ __("un site moderne contenant la documentation officielle de Common Lisp.") }}
        </li>
        <li>
            <a href="https://legiscan.aguyot.fr"
               target="_blank">Légiscan</a>, {{ __("un service permettant de surligner les références dans des textes juridiques.") }}
        </li>
        <li>
            <a href="https://ateros.fr/services/pay" target="_blank">Ateros
                Pay</a>, {{ __("une gateway de paiement abstrayant les APIs de Stripe et PayPal.") }}
        </li>
        <li>
            <a href="https://ateros.fr/services/analytics" target="_blank">Ateros
                Analytics</a>, {{ __("un service d'analytics traitant de gros volumes de données.") }}
        </li>
        <li>
            <a href="https://github.com/anto2oo/telegram-sh"
               target="_blank">telegram-sh</a>, {{ __("une petite librairie pour shell POSIX permettant de scripter simplements des bots Telegram.") }}
        </li>
    </ul>
    <p>{{ __("Mes autres projets sont disponibles sur") }} <a
            href="https://github.com/anto2oo">{{ __("ma page Github") }}</a></p>
    <hr>
    <h2>💼 {{ __("Expériences professionnelles") }}</h2>
    <ul>
        <li><b>2018
                - {{ __("maintenant") }}</b>: {{ __("Je crée des sites et des applications web pour des professionnels en tant qu'indépendant.") }}
        </li>
        <li><b>2014</b> : {{ __("Stage d'une semaine dans l'entreprise de communication") }} <a
                href="https://www.natevacommunication.fr/">Nateva</a>, {{ __("ce qui m'a permis d'acquérir les premières notions de relation client.") }}
        </li>
    </ul>
    <hr>
    <h2>📫 {{ __("Contact") }}</h2>
    <ul>
        <li>Mail : <a href="mailto:antonin.guyot@icloud.com">antonin.guyot@icloud.com</a>.</li>
        <li>Twitter : <a href="https://twitter.com/baccaloreal">@baccaloreal</a></li>
        <li>Telegram : <a href="https://t.me/antnin">@antnin</a></li>
    </ul>
    <hr>
    <div class="center">
        <i><small>The code of this site is open-source and available on <a href="https://github.com/anto2oo/aguyot.fr">Github</a></small></i>
    </div>
@endsection
