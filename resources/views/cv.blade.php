@extends('partials.app')

@section('body')
    <header>
        <h1 style="">Antonin Guyot - CV</h1>
        <img src="/images/me.jpg" style="margin: 25px; max-width: 150px; float: right;">
    </header>

    <hr/>
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
            <a href="https://aguyot.fr">aguyot.fr</a>
        </p>
    </section>
    <hr/>
    <section>
        <h2>Formation</h2>
        <x-cv-entry title="Génie Informatique" subtitle="Université de Technologie de Compiègne">
            2020 -
        </x-cv-entry>
        <x-cv-entry title="Cisco Certified Network Associate" subtitle="Université Sorbonne Paris Nord">
            2020
        </x-cv-entry>
        <x-cv-entry title="DUT Réseaux & Télécoms" subtitle="Université Sorbonne Paris Nord">
            2018-2020
        </x-cv-entry>

        <x-cv-entry title="Bac Scientifique (S)" subtitle="Lycée Dorian">
            2018. Mention Très Bien
        </x-cv-entry>
    </section>

    <hr/>
    <section>
        <h2>Compétences</h2>
        <x-cv-entry title="Programmation">
            PHP, Laravel, Python, scripting bash, Javascript, jQuery, Vue.js. Plusieurs de mes projets sont disponibles
            sur ​github.com/anto2oo
        </x-cv-entry>
        <x-cv-entry title="Administration système">
            Scripting Bash, bonne connaissance du noyau Linux, Docker, virtualisation (Proxmox), installation &
            configuration du stack LAMP (ou LEMP). Maîtrise de services comme AWS, DigitalOcean, Cloudflare...
        </x-cv-entry>
        <x-cv-entry title="Autres">
            Routage, bases de données SQL (MySQL, Postgres...) et NoSQL (MongoDB), téléphonie d’entreprise (IPBX),
            Google Ads.
        </x-cv-entry>
        <x-cv-entry title="Langues">
            Bon niveau d’anglais. Allemand scolaire
        </x-cv-entry>
    </section>

    <hr/>
    <section>
        <h2>Expériences professionnelles</h2>
        <x-cv-entry title="Ateros" subtitle="Auto-entreprise">
            Je réalise depuis 2 ans des sites pour les indépendants et des services (facturation, statistiques...) en
            tant qu'auto-entrepreneur. Voir plus sur <a href="https://ateros.fr" target="_blank">ateros.fr</a>
        </x-cv-entry>
        <x-cv-entry title="Nateva Communication" subtitle="Stage d'observation">
            Stage d'une semaine dans l'entreprise de communication <a href="http://natevacommunication.fr"
                                                                      target="_blank">Nateva</a>,
            ce qui m'a permis d'acquérir les premières
            notions de relation client.
        </x-cv-entry>
    </section>

    <hr/>
    <section>
        <h2>Centres d'intérêt</h2>
        <x-cv-entry title="Musique">
            J'ai joué de la flûte traversière pendant 8 ans et fait partie de l'orchestre harmonique du conservatoire
            Paul Dukas.
        </x-cv-entry>
        <x-cv-entry title="Sport">
            Je pratique le ski depuis 10 ans, et plus récemment l'équitation au Centre Équestre de Compiègne.
        </x-cv-entry>

    </section>
    <hr/>
@endsection
