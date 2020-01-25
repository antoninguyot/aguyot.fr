@extends('partials.app')

@section('body')
    <header>
        <h1 style="display: inline;">Antonin Guyot
            <a href="/en">
                <img src="/images/en.png" style="max-width: 30px" alt="English language">
            </a>
        </h1>
        <img src="/images/me.jpg" style="display: inline; max-width: 150px; float: right">

    </header>
    <h2>À propos</h2>
    <p>
        Étudiant de {{ \Carbon\Carbon::parse('2000-09-19')->age }} ans en deuxième année de DUT Réseaux & Télécoms à
        l'<a href="https://www.univ-paris13.fr">Université Sorbonne Paris Nord</a>.
    </p>
    <p>
        En cas de besoin, vous pouvez télecharger mon <a href="/pdf/CV_Antonin_Guyot.pdf">CV</a>.
    </p>
    <p>
        Je programme principalement en PHP (avec le framework <a href="https://laravel.com">Laravel</a>), mais j'ai des
        compétences dans l'administration système plus généralement.
    </p>

    <hr>
    <h2>Projets récents</h2>
    <ul>
        <li><a href="https://github.com/anto2oo/furnace">furnace</a>, une collection de scripts bash permettant
            d'installer et de gérer le stack LAMP sur Centos 7.
        </li>
        <li><a href="https://github.com/anto2oo/telegram-sh">telegram-sh</a>, une petite librairie pour shell POSIX
            permettant de scripter simplements des bots Telegram.
        </li>
        <li><a href="https://github.com/anto2oo/xiropht-rpc-php">xiropht-rpc-php</a>, un paquet composer permettant
            d'interagir avec la cryptomonnaie Xiropht en PHP orienté-objet.
        </li>
    </ul>
    <p>Tous mes autres projets sont disponibles sur <a href="https://github.com/anto2oo">ma page Github</a></p>
    <hr>
    <h2>Expériences professionnelles</h2>
    <ul>
        <li><b>2018 - maintenant</b>: Je crée des sites et des applications web pour des professionnels en tant
            qu'indépendant.
        </li>
        <li><b>2014</b> : Stage d'une semaine dans l'entreprise de communication <a
                href="https://www.natevacommunication.fr/">Nateva</a>, ce qui m'a permis d'acquérir les premières
            notions de
            relation client.
        </li>
    </ul>
    <hr>
    <h2>Contact</h2>
    <ul>
        <li><a href="https://www.linkedin.com/in/antonin-guyot-86715917a/">Linkedin</a>, pour les demandes
            professionelles.
        </li>
        <li><a href="https://t.me/antnin">Telegram</a>, pour un contact rapide.
        </li>
        <li><a href="mailto:antonin.guyot@icloud.com">Par mail</a>.
        </li>
    </ul>
    <hr>
@endsection
