@extends('layouts.admin')

@section('title', 'Ajouter un News')

@section('content')
<style>
.main-content {
    display: flex;
    justify-content: center;
    padding: 50px 20px 100px 20px;
    background-color: #f0f2f7;
}
.card {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 500px;
    padding: 30px;
}
.card h2 {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
    color: #222;
}
.form-group {
    margin-bottom: 20px;
}
.form-label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
}
.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 0.95rem;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.form-control:focus {
    border-color: #1b345c;
    box-shadow: 0 0 6px rgba(26, 50, 185, 0.3);
}
textarea.form-control {
    resize: none;
}
.btn-primary {
    background-color: #1b345c;
    color: #fff;
    border: none;
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    font-size: 1.1rem;
    transition: background-color 0.3s, transform 0.2s;
    cursor: pointer;
}
.btn-primary:hover {
    background-color: #2b5392;
    transform: scale(1.03);
}
.alert-danger {
    border-radius: 10px;
    background-color: #ffe6e6;
    border: 1px solid #ff4d4d;
    color: #990000;
    margin-bottom: 20px;
}
</style>

<div class="card">
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title" class="form-label">Titre <span class="text-danger">*</span></label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Titre du news..." required>
        </div>

        <div class="form-group">
            <label for="content" class="form-label">Contenu <span class="text-danger">*</span></label>
            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Écrivez le contenu..." required></textarea>
        </div>

        <div class="form-group">
            <label for="subtext" class="form-label">Texte complémentaire</label>
            <textarea name="subtext" id="subtext" class="form-control" rows="2"></textarea>
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image<span class="text-danger">*</span> </label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="published_at" class="form-label">Date de publication <span class="text-danger">*</span></label>
            <input type="date" name="published_at" id="published_at" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gallery" class="form-label">Galerie d’images (plusieurs)</label>
            <input type="file" name="gallery[]" id="gallery" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Publier</button>
    </form>
</div>
@endsection
