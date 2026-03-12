<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">

    <style>
        /* =============================
   Reset & General
============================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f7f8fc;
    color: #333;
}
.navbar {
    background: #ffffff;
    padding: 18px 60px;
    display: flex;
    justify-content: center; 
    align-items: center;
    border-bottom: 1px solid #948f8f;
    position: relative;
}

.navbar-left {
    flex: 1;
}

.logo {
    height: 80px;
    width: auto;
}

.navbar-center {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}

.navbar-title {
    color: #1b345c;
    font-size: 1.5rem;
    font-weight: 600;
}

/* =============================
   Main Content
============================= */
.main-content {
    padding: 30px 20px;
}

    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar-left">
                <img src="{{ asset('images/RMGC-Holding.png') }}" alt="Logo" class="logo">
            </div>
            <div class="navbar-center">
                <h1 class="navbar-title">@yield('title', 'Admin Dashboard')</h1>
            </div>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>
</body>
</html>
