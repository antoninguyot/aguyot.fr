@extends('partials.app')

@section('body')
    <header>
        <h1 style="display: inline;">Antonin Guyot
            @if(app('translator')->getLocale() == 'en')
                <a href="/fr">
                    <img src="/images/fr.png" style="max-width: 30px" alt="Langage français">
                </a>
            @else
                <a href="/en">
                    <img src="/images/en.png" style="max-width: 30px" alt="English language">
                </a>
            @endif
        </h1>
        <img src="/images/me.jpg" style="display: inline; max-width: 150px; float: right">

    </header>
    <h2>{{ __("À propos") }}</h2>
    <p>
        {{ __("Étudiant de :age ans en deuxième année de DUT Réseaux & Télécoms à", ['age' => \Carbon\Carbon::parse('2000-09-19')->age]) }}
        <a href="https://www.univ-paris13.fr">{{ __("l'Université Sorbonne Paris Nord") }}</a>.
    </p>
    <p>
        {{ __("En cas de besoin, vous pouvez télecharger mon") }} <a href="https://static.ateros.fr/IEU83axJDLtVvqgSZzFRTuN9PWfMXK.pdf">{{ __("CV") }}</a>.
    </p>
    <p>
        {!! __("Je programme principalement en PHP (avec le framework :laravel), mais j'ai des compétences dans l'administration système plus généralement.", ['laravel' => '<a href="https://laravel.com">Laravel</a>']) !!}
    </p>

    <hr>
    <h2>{{ __("Projets récents") }}</h2>
    <ul>
        <li>
            <a href="https://github.com/anto2oo/furnace">furnace</a>, {{ __("une collection de scripts bash permettant d'installer et de gérer le stack LAMP sur Centos 7.") }}
        </li>
        <li>
            <a href="https://github.com/anto2oo/telegram-sh">telegram-sh</a>, {{ __("une petite librairie pour shell POSIX permettant de scripter simplements des bots Telegram.") }}
        </li>
        <li>
            <a href="https://github.com/anto2oo/xiropht-rpc-php">xiropht-rpc-php</a>, {{ __("un paquet composer permettant d'interagir avec la cryptomonnaie Xiropht en PHP orienté-objet.") }}
        </li>
    </ul>
    <p>{{ __("Tous mes autres projets sont disponibles sur") }} <a
            href="https://github.com/anto2oo">{{ __("ma page Github") }}</a></p>
    <hr>
    <h2>{{ __("Expériences professionnelles") }}</h2>
    <ul>
        <li><b>2018
                - {{ __("maintenant") }}</b>: {{ __("Je crée des sites et des applications web pour des professionnels en tant qu'indépendant.") }}
        </li>
        <li><b>2014</b> : {{ __("Stage d'une semaine dans l'entreprise de communication") }} <a
                href="https://www.natevacommunication.fr/">Nateva</a>, {{ __("ce qui m'a permis d'acquérir les premières notions de relation client.") }}
        </li>
    </ul>
    <hr>
    <h2>{{ __("Contact") }}</h2>
    <ul>
        <li>
            <a href="https://www.linkedin.com/in/antonin-guyot-86715917a/">Linkedin</a>, {{ __("pour les demandes professionelles.") }}
        </li>
        <li><a href="https://t.me/antnin">Telegram</a>, {{ __("pour un contact rapide.") }}
        </li>
        <li><a href="mailto:antonin.guyot@icloud.com">{{ __("Par mail") }}</a>.
        </li>
    </ul>
    <hr>
    <div class="center">
        <i><small>The code of this site is open-source and available on <a href="https://github.com/anto2oo/aguyot.fr">Github</a></small></i>
    </div>
@endsection
