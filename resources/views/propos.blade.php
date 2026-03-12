@extends('layouts.app')

@section('title', 'À propos – RMGC Holding')
@section('meta_description', 'Découvrez RMGC Holding, sa vision, sa gouvernance et son équipe dirigeante.')
@section('meta_keywords', 'RMGC Holding, holding algérienne, gouvernance, équipe dirigeante, filiales, vision stratégique')

{{-- Open Graph --}}
@section('og_url', 'https://www.rmgc.dz/a-propos')
@section('og_title', 'À propos – RMGC Holding')
@section('og_description', 'Découvrez RMGC Holding, sa vision, sa gouvernance et son équipe dirigeante.')
@section('og_image', asset('images/RMGC-Holding.png'))
@section('og_image_alt', 'Logo RMGC Holding')

{{-- Twitter --}}
@section('twitter_title', 'À propos – RMGC Holding')
@section('twitter_description', 'Découvrez RMGC Holding, sa vision, sa gouvernance et son équipe dirigeante.')
@section('twitter_image', asset('images/RMGC-Holding.png'))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/propos.css') }}">
@endpush


@section('content')
<!-- ================= HERO ================= -->
<section class="hero-about">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>À PROPOS </h1>
    </div>
</section>

<!-- =================  ABOUT INTRO (SECTION 1) ================= -->
<section class="about-intro">
    <div class="about-container">
        <div class="about-text">
            <span class="about-subtitle reveal-left">Société Holding</span>
            <h2 class="about-title reveal-right">RMGC HOLDING SPA </h2>
            <p class="about-description reveal">
                RMGC Spa Holding est une société holding dont l’objet principal est la détention, 
                la gestion et le contrôle des participations au sein de ses filiales.
                Elle assure la coordination stratégique, financière et organisationnelle des entités 
                qu’elle contrôle, veille à la bonne gouvernance du groupe et accompagne le développement et 
                la performance globale de ses filiales dans une logique de création de valeur durable. 
            </p>
        </div>
        <div class="about-big-title reveal-right">
            <h2>Qui<br><span>sommes-</span>nous ?</h2>
        </div>

    </div>
</section>

<!-- ================= HISTORY TIMELINE ================= -->
<section class="history-horizontal">
    <div class="history-header">
      <span class="history-subtitle">Notre parcours</span>
      <h2 class="history-title">RMGC Holding SPA</h2>
    </div>
  <div class="timeline-wrapper">

  <div class="timeline-row top-row">

    <div class="timeline-card" id="card1" role="article">

      <img src="images/rmgcadvice.png" alt="1996 RMGC Advice" class="timeline-img">
      <span class="date">2010</span>
      <h4>Création de RMGC Holiding</h4>
      <p>Expertise en ingénierie financière, solutions sur mesure pour optimiser le capital et réaliser des opérations complexes avec succès.</p>
    </div>

    <div class="timeline-card"id="card2" role="article">
      <img src="images/atic.png" alt="2022 Invest market" class="timeline-img">
      <span class="date">2022</span>
      <h4>Création de ATIC</h4>
      <p>ATIC Spa est une société spécialisée dans la gestion hôtelière</p>
    </div>

  </div>

        <div class="timeline-line">
            <div class="timeline-progress"></div>
            <span class="timeline-dot" style="left:5%"></span>
            <span class="timeline-dot" style="left:40%"></span>
            <span class="timeline-dot" style="left:70%"></span>
            <span class="timeline-dot" style="left:100%"></span>
        </div>


  <div class="timeline-row bottom-row">

     <div class="timeline-card" id="card3" role="article">
       <img src="images/invest.png" alt="2022 Invest market" class="timeline-img">
       <span class="date">2022</span>
      <h4>Création de Invest Market</h4>
      <p>Invest Market, filiale de RMGC Spa Holding, est un Intermédiaire en Opérations de Bourse (IOB) agréé par la Commission d’Organisation et de Surveillance des Opérations de Bourse (COSOB)</p>
     </div>

     <div class="timeline-card" id="card4" role="article">
       <img src="images/img.png" alt="2024 COSOB" class="timeline-img">
       <span class="date">2026</span>
       <h4>Création de IMG (institut de management et de gestion) </h4>
       <p> IMG SPA est un établissement privé de la formation professionnelle agréé par l'état </p>
     </div>

  </div>

  </div>
</section>

<!-- ================= TEAM ================= 
<section class="team">
  <div class="container">

    <div class="team-header">
      <span class="team-subtitle">Notre Équipe</span>
      <h2 class="team-title">L’Équipe de RMGC Holding SPA</h2>
    </div>

    <div class="team-view active" id="team-cards">
      <div class="team-grid">
        <div class="team-card" data-dept="hr">Human Resources</div>
        <div class="team-card" data-dept="finance">Finance</div>
        <div class="team-card" data-dept="marketing">Communication & Marketing</div>
        <div class="team-card" data-dept="operation">Operation</div>
        <div class="team-card" data-dept="it">IT</div>
      </div>
    </div>

    <div class="team-view" id="team-members">
      <h3 class="team-dept-title">
        <span class="back-arrow" id="backArrow">←</span>
        <span id="deptTitle"></span>
      </h3>

      <div class="team-members" id="membersContent"></div>
    </div>

  </div>
</section>-->

<!--============= About team ===============-->
<section class="about-team">
    <div class="overlay"></div>
    <div class="container">
        <div class="about-content">
           <h2>A Propos de notre équipe</h2>
           <p>
             Chez RMGC HOLDING, notre priorité est la qualité et l’excellence. 
             Notre équipe dirigeante s’engage à accompagner nos filiales et clients 
             dans le développement durable et la performance globale, 
             en s’appuyant sur :
           </p>

        </div>

        <div class="cards-row">
            <div class="about-card">
                <i class="fa-solid fa-user-tie fa-2x" aria-hidden="true"></i>
                <h4>Expertise et Leadership</h4>
                <p>Notre équipe est composée d'experts chevronnés, prêts à répondre à vos besoins les plus spécifiques.</p>
            </div>
            <div class="about-card">
                <i class="fa-solid fa-handshake fa-2x" aria-hidden="true"></i>
                <h4>Transparence et Conformité</h4>
                <p>Vous pouvez compter sur nous pour une communication claire et honnête à chaque étape de notre collaboration.</p>
            </div>
            <div class="about-card">
                <i class="fa-solid fa-shield fa-2x" aria-hidden="true"></i>
                <h4>Sécurité Financière et Confidentialité</h4>
                <p>Vos finances et informations sont traitées avec la plus grande confidentialité et sécurité.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= Retour en haut ================= -->
<button id="backToTop" title="Retour en haut" aria-label="Retour en haut">
    <i class="fa fa-arrow-up"></i>
    <span class="ripple"></span>
</button>

<script src="{{ asset('js/propos.js') }}"></script>

@endsection