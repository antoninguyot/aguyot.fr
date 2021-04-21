@extends('partials.app')

@section('body')
    <header>
        <h1 style="">Antonin Guyot - CV</h1>
        <a href="{{ url('pdf/CV_Antonin_Guyot.pdf') }}">📄 Version PDF</a>
        <img src="{{ url('images/me.jpg') }}" style="margin: 25px; max-width: 150px; float: right;">
    </header>

    <section>
        <h2>À propos</h2>
        <p><b>Étudiant en génie informatique à l'UTC.</b></p>
        <p>
            24 rue Sibuet,<br/>
            75012 Paris,<br/>
            France
        </p>
        <p>
            <a href="mailto:antonin.guyot@icloud.com">antonin.guyot@icloud.com</a>
            <br>
            <a href="tel:+33631616085">0631616085</a>
            <br>
            <a href="https://aguyot.fr">🌐 aguyot.fr</a>
        </p>
    </section>
    <section>
        <h2>Formation</h2>
        <x-cv-entry title="Génie Informatique" subtitle="Université de Technologie de Compiègne">
            2020 -, Génie Informatique
        </x-cv-entry>
        <x-cv-entry title="Cisco Certified Network Associate" subtitle="Université Sorbonne Paris Nord">
            2020
        </x-cv-entry>
        <x-cv-entry title="DUT Réseaux & Télécoms" subtitle="Université Sorbonne Paris Nord">
            2018-2020, major de la promotion
        </x-cv-entry>

        <x-cv-entry title="Bac Scientifique (S)" subtitle="Lycée Dorian">
            2018. mention très bien
        </x-cv-entry>
    </section>

    <section>
        <h2>Compétences</h2>
        <x-cv-entry title="Programmation">
            PHP : Laravel, Python, LISP, C. Javascript : Vue, React, jQuery. Développement d'applications mobiles en
            React Native. <br/>
            Plusieurs de mes projets sont disponibles sur <a href="https://github.com/anto2oo">github.com/anto2oo</a>
        </x-cv-entry>
        <x-cv-entry title="Administration système">
            Scripting shell, bonne connaissance de Linux, Docker, virtualisation (Proxmox), configuration & maintenance
            du stack LAMP. <br/>
            Maîtrise des services serverless d'AWS, Cloudflare…
        </x-cv-entry>
        <x-cv-entry title="Autres">
            Routage, bases de données SQL (MySQL, Postgres...) et NoSQL (MongoDB), téléphonie d’entreprise (IPBX),
            Google Ads.
        </x-cv-entry>
        <x-cv-entry title="Langues">
            Bon niveau d'anglais (C1), allemand scolaire, français (langue maternelle).
        </x-cv-entry>
    </section>

    <section>
        <h2>Expériences professionnelles</h2>
        <x-cv-entry title="Ateros" subtitle="Auto-entreprise">
            Cette entreprise m’a permis de mettre un pied dans le monde professionnel et de mettre en pratique mes
            connaissances. Voir plus sur <a href="https://ateros.fr" target="_blank">ateros.fr</a>
        </x-cv-entry>
        <x-cv-entry title="Nateva Communication" subtitle="Stage d'observation">
            Stage d'une semaine dans l'entreprise de communication
            <a href="http://natevacommunication.fr" target="_blank">Nateva</a>, qui m'a permis
            d'acquérir les premières notions de relation client.
        </x-cv-entry>
    </section>

    <section>
        <h2>Centres d'intérêt</h2>
        <x-cv-entry title="Sport">
            Je pratique le ski depuis 10 ans et plus récemment l'équitation au centre équestre de Compiègne.
        </x-cv-entry>
        <x-cv-entry title="Musique">
            J'aime la musique et j'ai fait de la flûte traversière pendant 8 ans au conservatoire Paul Dukas (Paris
            XII), ainsi que dans un orchestre harmonique.
        </x-cv-entry>
    </section>
@endsection
