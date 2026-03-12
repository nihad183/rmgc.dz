@extends('layouts.admin')

@section('title', 'Liste des News')

@section('content')
<style>

body {
    background-color: #f7f8fc;
    font-family: 'Poppins', sans-serif;
    color: #333;
}
h1, h3 {
    color: #222;
}
.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}
.header-container h1 {
    font-size: 1.8rem;
    font-weight: 600;
}
.add-new s-btn {
    background-color: #1b345c;
    color: #fff;
    font-size: 1.1rem;
    padding: 10px 20px;
    border-radius: 8px;
    transition: background-color 0.3s, transform 0.2s;
    text-decoration: none;
}
.add-news-btn:hover {
    background-color: #3c70c2;
    transform: scale(1.05);
}
.news-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 25px;
}
.card {
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    height: 100%;
    min-height: 500px; /* البطاقة أكبر */
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}
.card-img-top {
    height: 220px;
    object-fit: cover;
}
.card-body {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.card-title {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 12px;
}
.card-text {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
    line-height: 1.5;
}
.card-date {
    font-size: 0.9rem;
    color: #888;
    margin-top: auto;
}
</style>

<div class="container py-4">
    <!-- Header -->
<div class="header-container">
    <a href="{{ route('admin.news.create') }}" class="add-news-btn">Ajouter un News</a>
    <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="add-news-btn" style="background-color:#d9534f; margin-left:10px;">
            Déconnexion
        </button>
    </form>
</div>

    @if($news->count() > 0)
        <div class="news-row">
            @foreach($news as $item)
                <div class="card">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>

                        <p class="card-text"><strong>Contenu:</strong> {!! Str::limit($item->content, 300) !!}</p>

                        @if($item->subtext)
                            <p class="card-text"><strong>Texte complémentaire:</strong> {{ $item->subtext }}</p>
                        @endif

                        <p class="card-date"><strong>Date de publication:</strong> {{ \Carbon\Carbon::parse($item->published_at)->format('d/m/Y') }}</p>

                        @if($item->gallery && is_array($item->gallery))
                            <div class="mt-2">
                                <strong>Galerie:</strong>
                                <div style="display:flex; gap:5px; flex-wrap:wrap;">
                                    @foreach($item->gallery as $img)
                                        <img src="{{ asset('storage/'.$img) }}" alt="Gallery" style="width:70px; height:70px; object-fit:cover; border-radius:4px;">
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $news->links() }}
        </div>
    @else
        <p class="text-center text-muted">Aucun news disponible pour le moment.</p>
    @endif
</div>
@endsection
