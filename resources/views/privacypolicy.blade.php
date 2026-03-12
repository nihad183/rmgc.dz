@extends('layouts.app')

@section('title', 'Privacy Policy – RMGC Holding')
@section('meta_description', 'RMGC Holding vous informe sur la gestion de vos données personnelles et votre vie privée sur notre site.')
@section('meta_keywords', 'RMGC Holding, Privacy Policy, vie privée, données personnelles, sécurité, conformité')

@section('og_url', 'https://www.rmgc.dz/privacy-policy')
@section('og_title', 'Privacy Policy – RMGC Holding')
@section('og_description', 'Découvrez notre politique de confidentialité et la manière dont RMGC Holding protège vos données.')
@section('og_image', asset('images/RMGC-Holding.png'))
@section('og_image_alt', 'Logo RMGC Holding')

@section('twitter_title', 'Privacy Policy – RMGC Holding')
@section('twitter_description', 'Découvrez notre politique de confidentialité et la manière dont RMGC Holding protège vos données.')
@section('twitter_image', asset('images/RMGC-Holding.png'))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/privacypolicy.css') }}">
@endpush

@section('content')

<section class="privacy-policy">
    <div class="container-full">
        <h1>POLITIQUE DE CONFIDENTIALITÉ</h1>
        <h2> RMGC Holding et ses filiales </h2>
        <h3>1. Introduction</h3>
        <p>RMGC Holding et ses filiales (ci-après « le Groupe RMGC ») accordent une importance particulière à la protection 
            des données à caractère personnel.La présente politique a pour objet d’informer les utilisateurs du site sur 
            la manière dont leurs données sont collectées, utilisées et protégées, conformément à:
            <ul>
                <li>la loi n°18-07 du 10 juin 2018 relative à la protection des données à caractère personnel,
                    telle que modifiée et complétée par la loi n°25-11 du 24 juillet 2025. 
                </li>
            </ul>
        </p>

        <h3>2. Données collectées</h3>
        <p>
            Le Groupe RMGC peut collecter les catégories suivantes de données :
            <ul>
                <li>Données d’identification : nom, prénom, adresse e-mail, numéro de téléphone</li>
                <li>Données professionnelles : fonction, société, secteur d’activité </li>
                <li> Données techniques : adresse IP, informations de navigation, cookies</li>
                <li>Informations liées aux demandes d’investissement ou de partenariat, lorsque vous nous contactez</li>
            </ul>
        </p>

        <h3>3. Finalités du traitement</h3>
        <p> Les données collectées sont utilisées pour :
            <ul>
               <li>Répondre à vos demandes d’information</li>
               <li> Gérer les relations avec clients, partenaires et investisseurs</li>
               <li> Fournir nos services et analyser les projets soumis</li>
               <li> Respecter nos obligations légales et réglementaires</li>
               <li> Améliorer le fonctionnement du site</li>
            </ul>
        </p>

        <h3>4. Base légale du traitement</h3>
        <p>Les traitements reposent sur : 
            <ul>
              <li>Votre consentement (notamment pour les communications)</li> 
              <li>L’exécution de mesures précontractuelles ou contractuelles</li>
              <li>Le respect d’obligations légales</li>
              <li>L’intérêt légitime du Groupe RMGC</li>
            </ul>
        </p>

        <h3>5. Durée de conservation</h3>
        <p>Les données sont conservées pour la durée nécessaire aux finalités pour lesquelles elles ont 
            été collectées et conformément aux obligations légales applicables.
        </p>
        <h3>6. Partage des données </h3>
        <p>
            Les données peuvent être partagés:
            <ul>
                <li>Entre RMGC Holding et ses filiales, lorsque nécessaire.</li>
                <li>Avec des prestataires techniques ou conseils professionnels.</li>
                <li>Avec les autorités compétentes en cas d’obligation légale.</li>
                <li>Le Group RMGC ne vend ni ne loue aucune dennée personnelle.</li>
            </ul>
        </p>
        <h3>7. Sécurité des données</h3>
        <p>
            Le Groupe RMGC met en œuvre des mesures techniques et organisationnelles
            appropriées afin d’assurer la confidentialité et la sécurité des données.
        </p>
        <h3>8. Vos droits</h3>
        <p>
            Conformément à la législation en vigueur, vous disposez notamment :
            <ul>
                <li>D’un droit d’accès à vos données</li>
                <li>D’un droit de rectification</li>
                <li>D’un droit d’opposition</li>
                <li>D’un droit de suppression, dans les limites légales</li>
                <li>Du droit de retirer votre consentement à tout moment</li>
            </ul>
            <span>Toute demande peut être adressée à : <a href="mailto:info@rmgc.dz">info@rmgc.dz</a></span>
        </p>
        <h3>9. Cookies</h3>
        <p>
           * Le site peut utiliser des cookies à des fins techniques et statistiques.<br>
           * Vous pouvez configurer votre navigateur pour les refuser.
        </p>
        <h3>10. Mise à jour</h3>
        <p>
            la présente politique peut être modifiée à tout moment afin de tenir compte des évalutions légales ou organisationnelles .<br>
             <span class="misjour">Derniére mise à jour : 2025</span>
        </p>
    </div>
</section>

@endsection