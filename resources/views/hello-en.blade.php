@extends('partials.app')

@section('body')
    <header>
        <h1 style="display: inline;">Antonin Guyot
            <a href="/fr">
                <img src="/images/fr.png" style="max-width: 30px">
            </a>
        </h1>
        <img src="/images/me.jpg" style="display: inline; max-width: 150px; float: right">

    </header>
    <h2>About</h2>
    <p>
        I'm an {{ \Carbon\Carbon::parse('2000-09-19')->age }} years old student at the Networks & Telecommunications Dpt. of the <a
            href="https://www.univ-paris13.fr">Université Sorbonne Paris Nord</a>.
    </p>
    <p>I'm currently look for an internship of 10 weeks in networks & telecoms. In case you need it, <a
            href="/pdf/Antonin_Guyot_Résumé.pdf">here is my résumé</a>.</p>
    <p>
        I mainly write PHP to develop my web-based applications and I'm used to use the <a href="https://laravel.com">Laravel</a>
        framework.
    </p>
    <hr>
    <h2>Projects</h2>
    <ul>
        <li><a href="https://github.com/anto2oo/furnace">furnace</a>, a bash script collection that helps install and
            manage the LAMP stack on Centos 7.
        </li>
        <li><a href="https://github.com/anto2oo/telegram-sh">telegram-sh</a>, a small POSIX shell library to write
            simple
            and lightweight Telegram bots in shells scripts
        </li>
        <li><a href="https://github.com/anto2oo/xiropht-rpc-php">xiropht-rpc-php</a>, a composer package wrapper for
            interacting with the <a href="https://xiropht.com">Xiropht</a> cryptocurrency, in an OOP way.
        </li>
    </ul>
    <p>You can find most of my others projects on <a href="https://github.com/anto2oo">my Github page</a></p>
    <hr>
    <h2>Experiences</h2>
    <ul>
        <li><b>2018 - now</b>: I create websites using <a href="https://laravel.com">Laravel</a> as an independant</li>
        <li><b>2014</b> : I was on an internship of two weeks in a communication company called <a
                href="https://www.natevacommunication.fr/">Nateva</a></li>
    </ul>
    <hr>
    <h2>Contact</h2>
    <ul>
        <li><a href="https://www.linkedin.com/in/antonin-guyot-86715917a/">Linkedin</a>, for professional inquiries.
        </li>
        <li><a href="https://t.me/antnin">Telegram</a>, for chatting.
        </li>
        <li><a href="mailto:antonin.guyot@icloud.com">Via email</a>.
        </li>
    </ul>
    <hr>
@endsection
