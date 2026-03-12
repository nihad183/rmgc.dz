<!DOCTYPE html>
<html lang="fr-DZ" itemscope itemtype="https://schema.org/Organization">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content=" Zair nihad hanane - Web Developer  ">

<!-- ===== Title ===== -->
<title>@yield('title', 'RMGC Spa Holding')</title>

<!-- ===== SEO Meta ===== -->
<meta name="description"
      content="@yield('meta_description', 'RMGC Spa Holding, holding algérienne de premier plan, gère et coordonne ses filiales avec expertise stratégique, financière et organisationnelle, favorisant le développement durable et la création de valeur.')">

<meta name="author" content="RMGC Holding">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">

<!-- Geo Targeting (Local SEO) -->
<meta name="geo.region" content="DZ-31">
<meta name="geo.placename" content="Oran">

<!-- Canonical -->
<link rel="canonical" href="@yield('canonical', url()->current())">

<!-- Hreflang -->
<link rel="alternate" hreflang="fr-dz" href="{{ url()->current() }}">
<link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">

<!-- ===== Open Graph ===== -->
<meta property="og:type" content="@yield('og_type', 'website')">
<meta property="og:url" content="@yield('og_url', url()->current())">
<meta property="og:title" content="@yield('og_title', 'RMGC Spa Holding – Gestion et Développement de Filiales')">
<meta property="og:description" content="@yield('og_description', 'RMGC Spa Holding, holding algérienne de premier plan, gère et coordonne ses filiales avec expertise stratégique, financière et organisationnelle, favorisant le développement durable et la création de valeur.')">
<meta property="og:image" content="@yield('og_image', asset('images/RMGC-Holding.png'))">
<meta property="og:image:alt" content="@yield('og_image_alt', 'Logo de RMGC Spa Holding – Gestion et Développement de Filiales')">
<meta property="og:locale" content="@yield('og_locale', 'fr_FR')">
<meta property="og:site_name" content="@yield('og_site_name', 'RMGC Spa Holding')">

<!-- ===== Twitter Card ===== -->
<meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')">
<meta name="twitter:title" content="@yield('twitter_title', 'RMGC Spa Holding – Gestion et Développement de Filiales')">
<meta name="twitter:description" content="@yield('twitter_description', 'RMGC Spa Holding, holding algérienne de premier plan, gère et coordonne ses filiales avec expertise stratégique, financière et organisationnelle, favorisant le développement durable et la création de valeur.')">
<meta name="twitter:image" content="@yield('twitter_image', asset('images/RMGC-Holding.png'))">

<!-- ===== Security ===== -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-Content-Type-Options" content="nosniff">
<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
<meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
<meta http-equiv="Permissions-Policy" content="geolocation=(), camera=(), microphone=()">

<!-- ===== Performance ===== -->
<link rel="preload" as="image" href="{{ asset('images/RMGC-Holding.png') }}">
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="//unpkg.com">

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stack('styles')

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      crossorigin="anonymous">

<!-- Favicon -->
<link rel="icon" href="{{ asset('images/RMGC-Holding.png') }}" type="image/png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon.png">
<link rel="icon" type="image/png" sizes="48x48" href="/favicon.png">

<!-- ===== Structured Data ===== -->
@verbatim
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Organization",
 "name": "RMGC Holding",
 "url": "https://rmgc.dz",
 "logo": "https://rmgc.dz/images/RMGC-Holding.png",
 "sameAs": [
   "https://facebook.com/",
   "https://linkedin.com/"
 ]
}
</script>
@endverbatim

</head>

<body>

<!-- ===== TOP BAR ===== -->
<header class="top-bar">
    <div class="top-logo">
        <img src="{{ asset('images/RMGC-Holding.png') }}" alt="Logo RMGC Holding" loading="lazy">
    </div>

    <div class="top-info">
        <a href="mailto:info@rmgc.dz">
            <i class="fa fa-envelope"></i> info@rmgc.dz
        </a>
        <span><i class="fa fa-location-dot"></i> 01, Rue d'Igli- Oran Centre ( en face du consulat de France)</span>
    </div>

</header>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" role="navigation" aria-label="Main Navigation">
    <div class="logo-mobile">
        <img src="{{ asset('images/RMGC-Holding.png') }}" alt="RMGC" loading="lazy">
    </div>

    <div class="hamburger" onclick="toggleMenu()" aria-label="Menu">
        <i class="fa fa-bars"></i>
    </div>

    <ul class="nav-links">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li><a href="{{ url('/propos') }}">À propos</a></li>
        <li><a href="{{ url('/actualites') }}">Actualités</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>

<div class="overlay" onclick="closeMenu()"></div>

<!-- ===== PAGE CONTENT ===== -->
<main id="main-content">
    @yield('content')
</main>

<!-- ===== FOOTER ===== -->
<footer> 
    <div class="footer">
        <div class="footer-col logo-col">
           <img src="{{ asset('images/RMGC-Holding.png') }}" alt="RMGC Holding" loading="lazy">
    
           <p class="company-description">
              RMGC Spa Holding est une société holding spécialisée dans la détention,
              la gestion et le contrôle des participations de ses filiales. 
              Elle assure la coordination stratégique et financière du groupe 
              dans une logique de création de valeur durable.
           </p>
        </div>

        <div class="divider"></div>

        <div class="footer-col links-col">
            <h4>Liens</h4>
            <a href="{{ url('/') }}">Accueil</a>
            <a href="{{ url('/propos') }}">À propos</a>
            <a href="{{ url('/actualites') }}">Actualités</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ url('/privacypolicy')}}">Privacy Policy</a>
        </div>

        <div class="divider"></div>

        <div class="footer-col contact-col">
            <h4>Contact</h4>
            <p><i class="fa fa-location-dot"></i> 01, Rue d'Igli- Oran Centre ( en face du consulat de France)</p>
            <p>
                <a href="mailto:info@rmgc.dz">
                    <i class="fa fa-envelope"></i> info@rmgc.dz
                </a>
            </p>
            <!--<p><i class="fa fa-phone"></i> </p>-->

            <div class="social-icons">
                <a href="https://web.facebook.com/sparmgcholding/?_rdc=1&_rdr#" aria-label="Facebook RMGC Holding"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram RMGC Holding"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/spa-rmgc-holding/posts/?feedView=all" aria-label="LinkedIn RMGC Holding"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

<div class="footer-bottom">
    <span class="copyright">© Copyright 2026 RMGC HOLDING</span>
    <span class="developer">développé par [ZAIR NIHAD]</span>
</div>
</footer>

<!-- ===== JS ===== -->
<script src="{{ asset('js/app.js') }}" defer></script>
@stack('scripts')

@endif

</body>
</html>
