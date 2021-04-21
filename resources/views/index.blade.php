@extends('partials.app')

@section('body')
    <div class="flag">
        @if(app('translator')->getLocale() == 'en')
            <a href="{{ url('locale/fr') }}">🇫🇷</a>
        @else
            <a href="{{ url('locale/en') }}">🇬🇧</a>
        @endif
    </div>

    <header>
        <h1 style="">Antonin Guyot</h1>
        <img src="{{ url('images/me.jpg') }}" style="margin: 20px; max-width: 150px; float: right;"
             alt="Portrait Antonin Guyot">
    </header>

    <section>
        <h2>👨‍💻 {{ __("À propos") }}</h2>
        <p>
            {{ __("Étudiant de :age ans en Génie Informatique à", ['age' => \Carbon\Carbon::parse('2000-09-19')->age]) }}
            <a href="https://utc.fr" target="_blank" rel="noreferrer">{{ __("l'UTC") }}</a>.
        </p>
        <p>
            {{ __("En cas de besoin, vous pouvez télecharger mon") }} <a href="{{ url('cv') }}">{{ __("CV") }}</a>.
        </p>
        <p>
            {!! __("Je programme principalement en PHP (avec le framework :laravel), mais j'ai des compétences dans l'administration système plus généralement.", ['laravel' => '<a href="https://laravel.com">Laravel</a>']) !!}
        </p>
    </section>

    <section>
        <h2>💻 {{ __("Projets récents") }}</h2>
        <ul>
            <li>
                <a href="https://cl-doc.aguyot.fr/"
                   target="_blank"
                   rel="noreferrer">CL-doc</a>, {{ __("un site moderne contenant la documentation officielle de Common Lisp.") }}
            </li>
            <li>
                <a href="https://legiscan.aguyot.fr"
                   target="_blank"
                   rel="noreferrer">Légiscan</a>, {{ __("un service permettant de surligner les références dans des textes juridiques.") }}
            </li>
            <li>
                <a href="https://ateros.fr/services/pay" target="_blank" rel="noreferrer">Ateros
                    Pay</a>, {{ __("une gateway de paiement abstrayant les APIs de Stripe et PayPal.") }}
            </li>
            <li>
                <a href="https://ateros.fr/services/analytics" target="_blank" rel="noreferrer">Ateros
                    Analytics</a>, {{ __("un service d'analytics traitant de gros volumes de données.") }}
            </li>
            <li>
                <a href="https://github.com/anto2oo/telegram-sh"
                   target="_blank"
                   rel="noreferrer">telegram-sh</a>, {{ __("une petite librairie pour shell POSIX permettant de scripter simplements des bots Telegram.") }}
            </li>
        </ul>
        <p>
            {{ __("Mes autres projets sont disponibles sur") }}
            <a href="https://github.com/anto2oo">{{ __("ma page Github") }}</a>
        </p>
    </section>

    <section>
        <h2>💼 {{ __("Expériences professionnelles") }}</h2>
        <i>{{ __("Déplacé dans") }} <a href="{{ url('cv') }}">{{ __("CV") }}</a></i>
        <hr>
        <h2>📫 {{ __("Contact") }}</h2>
        <ul>
            <li>Mail : <a href="mailto:antonin.guyot@icloud.com">antonin.guyot@icloud.com</a>.</li>
            <li>Twitter : <a href="https://twitter.com/baccaloreal">@baccaloreal</a></li>
            <li>Telegram : <a href="https://t.me/antnin">@antnin</a></li>
        </ul>
    </section>
@endsection
