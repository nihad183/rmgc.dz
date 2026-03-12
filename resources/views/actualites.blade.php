@extends('layouts.app')

@section('title', 'Actualités – RMGC Spa Holding')
@section('meta_description', 'Découvrez les dernières actualités et communiqués officiels de RMGC Spa Holding, accompagnant ses filiales dans le développement durable et la création de valeur.')
@section('meta_keywords', 'RMGC Holding, actualités, communiqués officiels, filiales, développement durable, création de valeur')

{{-- OG tags spécifiques --}}
@section('og_url', 'https://www.rmgc.dz/actualites')
@section('og_title', 'Actualités – RMGC Spa Holding')
@section('og_description', 'Découvrez toutes les actualités de RMGC Spa Holding et suivez nos projets de gestion stratégique et développement durable.')
@section('og_image', asset('images/RMGC-Holding.png'))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/actualites.css') }}">
@endpush


@section('content')

<!-- ================= HERO ================= -->
<section class="hero">
    <h1 class="rmgc">
        <span>R</span>
        <span>M</span>
        <span>G</span>
        <span>C</span>
    </h1>
    <h3 class="newsroom">NEWSROOM</h3>
</section>

<!-- ================= NEWS GRID ================= 
<section class="news-grid">
    @foreach($news as $item)
        <a href="{{ route('news.show', $item->slug) }}" class="card">
            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}">
            <h3>{{ $item->title }}</h3>
            <span class="date">
                {{ \Carbon\Carbon::parse($item->published_at)->format('F d, Y') }}
            </span>
        </a>
    @endforeach
</section>-->

<!-- ================= PAGINATION ================= 
<div class="pagination-wrapper">
    {{ $news->links() }}
</div>-->

<!-- ================= BACK TO TOP ================= -->
<button id="backToTop" aria-label="Retour en haut">
    <i class="fa fa-arrow-up"></i>
    <span class="ripple"></span>
</button>

<script>
const backToTopButton = document.getElementById("backToTop");
window.addEventListener("scroll", () => {
    backToTopButton.style.display =
        document.documentElement.scrollTop > 200 ? "flex" : "none";
});
backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
</script>

@endsection
