@extends('layouts.app')

@section('title', 'Accueil – RMGC Holding')
@section('meta_description', 'RMGC Holding accompagne les entreprises algériennes dans la gouvernance, la gestion stratégique et le développement durable de ses filiales.')
@section('meta_keywords', 'RMGC Holding, holding algérienne, filiales, gouvernance, investissement stratégique, développement durable, création de valeur')

{{-- ================= OPEN GRAPH ================= --}}
@section('og_url', 'https://www.rmgc.dz')
@section('og_title', 'Accueil – RMGC Holding')
@section('og_description', 'RMGC Holding accompagne ses filiales dans la gouvernance, la gestion stratégique et le développement durable.')
@section('og_image', asset('images/RMGC-Holding.png'))
@section('og_image_alt', 'Logo RMGC Holding')

{{-- ================= TWITTER ================= --}}
@section('twitter_title', 'Accueil – RMGC Holding')
@section('twitter_description', 'RMGC Holding accompagne ses filiales dans la gouvernance et le développement durable.')
@section('twitter_image', asset('images/RMGC-Holding.png'))

{{-- ================= STYLES ================= --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<!-- ================= HERO ================= -->
<section class="hero" role="banner">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>RMGC <span>HOLDING SPA</span></h1>

        <div class="hero-buttons">
            <a href="#filiale" class="btn-primary">Notre Groupe en Bref</a>
        </div>
    </div>
</section>

<!-- ================= QUI SOMMES-NOUS ================= -->
<section class="intro reveal">
    <div class="container reveal">
        <h2>RMGC Holding : Gouvernance, Vision et Création de Valeur</h2>
        <p>
           RMGC Spa Holding est une société holding qui détient, gère et contrôle ses filiales, en assurant leur coordination stratégique,
            financière et organisationnelle, tout en veillant à leur performance et à la création de valeur durable.
        </p>
        <a href="{{ route('view.propos') }}" class="link-more">
            En savoir plus <i class="fa fa-arrow-right reveal"></i>
        </a>
    </div>
</section>

<!-- ================= FILIALES ================= -->
<section id="filiale" class="filiales reveal">
    <h2>Les filiales du Groupe</h2>
    <div class="filiales-logos">
        <a href="https://investmarket-dz.com" target="_blank">
          <img src="images/invest.png" alt="Invest - filiale RMGC Holding">
        </a>
        <a href="#" target="_blank">
            <img src="images/protorn.png" alt="Protorn - filiale RMGC Holding">
        </a>
        <a href="#" target="_blank">
            <img src="images/rmgcadvice.png" alt="Advice Solution - filiale RMGC Holding">
        </a>
        <a href="#" target="_blank">
            <img src="images/atic.png" alt="ATIC - filiale RMGC Holding">
        </a>
         <a href="#" target="_blank">
            <img src="images/img.png" alt="IMG - filiale RMGC Holding">
        </a>
    </div>
</section>

<!-- ================= CHIFFRES CLES ================= -->
<section class="stats reveal">
    <div class="stat">
        <h3 data-target="16">0</h3>
        <p>Années d’expérience</p>
    </div>
    <div class="stat">
        <h3 data-target="5">0</h3>
        <p>Filiales</p>
    </div>
    <div class="stat">
        <h3 data-target="40">0</h3>
        <p>Collaborateur</p>
    </div>
</section>


<!-- ================= ACTUALITES ================= -->
<section class="news reveal">
    <h2>Actualités</h2>

    <div class="news-grid">
        @foreach($latestNews as $news)
            <article>
                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}">
                @endif
                <h4>{{ $news->title }}</h4>
                <p>{{ Str::limit(strip_tags($news->content), 150) }}</p>
                <span>{{ \Carbon\Carbon::parse($news->published_at)->format('F Y') }}</span>
            </article>
        @endforeach
    </div>

    <div class="news-more">
        <a href="{{ route('news.index') }}" class="link-more">
            Voir toutes les actualités <i class="fa fa-arrow-right"></i>
        </a>
    </div>
</section>



<!-- ================= Retour en haut ================= -->
<button id="backToTop" title="Retour en haut" aria-label="Retour en haut">
    <i class="fa fa-arrow-up"></i>
    <span class="ripple"></span>
</button>

<script src="{{ asset('js/script.js') }}"></script>

<!-- ScrollReveal CDN -->
<script src="https://unpkg.com/scrollreveal"></script>
<script>
  ScrollReveal().reveal('.reveal', {
    origin: 'bottom',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out',
    reset: true
  });
  ScrollReveal().reveal('.revealleft', {
    origin: 'left',
    distance: '40px',
    duration: 1200,
    interval: 200,
    easing: 'ease-in-out',
    reset: true
  });
  ScrollReveal().reveal('.revealright', {
    origin: 'right',
    distance: '40px',
    duration: 1200,
    interval: 200,
    easing: 'ease-in-out',
    reset: true
  });
</script>

@endsection
