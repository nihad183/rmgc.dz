@extends('layouts.app')

@section('title', 'Contact – RMGC Holding')
@section('meta_description', 'Contactez RMGC Holding pour toute demande d’information ou collaboration avec nos filiales.')
@section('meta_keywords', 'RMGC Holding, contact, filiales, demande d’information, collaboration')

@section('og_url', 'https://www.rmgc.dz/contact')
@section('og_title', 'Contact – RMGC Holding')
@section('og_description', 'Contactez RMGC Holding pour toute demande d’information ou collaboration avec nos filiales.')
@section('og_image', asset('images/RMGC-Holding.png'))
@section('og_image_alt', 'Logo RMGC Holding')

@section('twitter_title', 'Contact – RMGC Holding')
@section('twitter_description', 'Contactez RMGC Holding pour toute demande d’information ou collaboration avec nos filiales.')
@section('twitter_image', asset('images/RMGC-Holding.png'))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<!-- ================= HERO ================= -->
<section class="contact-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Contactez-nous</h1>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section class="contact-section">
    <div class="contact-box">

<div class="contact-cards">

    <!--<div class="card">
        <a href="tel:+213XXXXXXXXX" style="text-decoration:none; color: inherit;">
            <i class="fas fa-phone"></i>
            <h3>Téléphone</h3>
            <p>Contactez-nous directement par téléphone.</p>
            <strong></strong>
        </a>
    </div>-->

    <div class="card">
        <a href="mailto:info@rmgc-holding.dz" style="text-decoration:none; color: inherit;">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>Écrivez-nous pour toute demande d’information.</p>
            <strong>info@rmgc-holding.dz</strong>
        </a>
    </div>

    <div class="card">
        <i class="fas fa-location-dot"></i>
        <h3>Adresse</h3>
        <p>Siège social RMGC Holding</p>
        <strong>01, Rue d'Igli- Oran Centre ( en face du consulat de France)</strong>
    </div>

</div>

        

       <div class="map-box">
    <h2>Notre localisation</h2>

    <a href="https://www.google.com/maps/place/Rue+Aïmeur+Brahim,+Oran/@35.7071598,-0.6437989,2356m/data=!3m1!1e3!4m15!1m8!3m7!1s0xd7e88fa24254ac7:0x8a942d50240cf516!2sRue+Aïmeur+Brahim,+Oran!3b1!8m2!3d35.704372!4d-0.6444855!16s%2Fg%2F1wc499t_!3m5!1s0xd7e88fa24254ac7:0x8a942d50240cf516!8m2!3d35.704372!4d-0.6444855!16s%2Fg%2F1wc499t_!5m1!1e1?authuser=0&entry=ttu&g_ep=EgoyMDI2MDIxNi4wIKXMDSoASAFQAw%3D%3D"
       target="_blank"
       class="map-link">

        <picture>
            <source media="(max-width: 768px)" srcset="images/map-static.png">
            <img src="images/map-static.png" alt="Localisation RMGC Holding">
        </picture>

    </a>
</div>

    </div>
</section>


<script>
    function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    const overlay = document.querySelector('.overlay');
    if(navLinks.style.right === "0px"){
        navLinks.style.right = "-300px";
        overlay.classList.remove("active");
    } else {
        navLinks.style.right = "0px";
        overlay.classList.add("active");
    }
}

function closeMenu() {
    document.querySelector('.nav-links').style.right = "-300px";
    document.querySelector('.overlay').classList.remove("active");
}

</script>

@endsection
