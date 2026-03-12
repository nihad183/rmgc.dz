@extends('layouts.app')

@section('title', $newsItem->title . ' - RMGC Holding')
@section('meta_description', Str::limit(strip_tags($newsItem->content), 150))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/news-show.css') }}">
@endpush

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #fff;
    color: #111;
}
/* ====== HERO ====== */
.hero-news {
    text-align: center;
    padding: 60px 20px 20px;
}

.hero-news h1 {
    font-size: 2.8rem;
    margin-bottom: 10px;
    font-weight: bold;
}

.hero-news .date {
    color: #777;
    font-size: 0.9rem;
}

/* ====== IMAGE + TEXT ====== */
.news-main {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    max-width: 1200px;
    margin: 40px auto;
}

.news-main img {
    flex: 1 1 40%;
    max-width: 40%;
    object-fit: cover;
    border-radius: 8px;
}

.news-text {
    flex: 1 1 55%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    gap: 20px;
}

.news-text p {
    font-size: 1.1rem;
    line-height: 1.8;
}

/* ====== FULL WIDTH TEXT ====== */
.news-fulltext {
    max-width: 1000px;
    margin: 40px auto;
    text-align: center;
    font-size: 1.1rem;
    line-height: 1.8;
}

/* ====== GRID IMAGES ====== */
.news-grid-images {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    max-width: 1200px;
    margin: 40px auto;
}

.news-grid-images img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}

/* ====== BACK BUTTON ====== */
.btn-back {
    display: inline-block;
    margin: 40px auto 80px;
    padding: 12px 25px;
    background-color: #1b345c;
    color: white;
    border-radius: 5px;
    text-decoration: none;
}
</style>

@section('content')

<!-- ================= HERO ================= -->
<section class="hero-news">
    <h1>{{ $newsItem->title }}</h1>
    <span class="date">
        {{ \Carbon\Carbon::parse($newsItem->published_at)->format('F d, Y') }}
    </span>
</section>

<!-- ================= IMAGE + TEXT ================= -->
<section class="news-main">
    <img src="{{ asset('storage/'.$newsItem->image) }}" alt="{{ $newsItem->title }}">
    <div class="news-text">
        <!-- Contenu à côté de l'image -->
        <p>{!! $newsItem->content !!}</p>

        <!-- Texte complémentaire sous le contenu -->
        @if($newsItem->subtext)
            <p>{{ $newsItem->subtext }}</p>
        @endif
    </div>
</section>

<!-- ================= GRID IMAGES ================= -->
@if($newsItem->gallery)
<section class="news-grid-images">
    @foreach($newsItem->gallery as $image)
        <img src="{{ asset('storage/'.$image) }}" alt="Gallery Image">
    @endforeach
</section>
@endif

<!-- ================= BACK TO NEWS ================= -->
<a href="{{ route('news.index') }}" class="btn-back">
    <i class="fas fa-arrow-left"></i> Retour aux Actualités
</a>


@endsection
