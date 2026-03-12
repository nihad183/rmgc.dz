<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion- RMGC Holding</title>
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }
        .login-card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 350px;
        }
        .login-card h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-card input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .login-card button {
            width: 100%;
            padding: 12px;
            background-color: #1b345c;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
        }
        .login-card button:hover {
            background-color: #2b5392;
        }
        .error {
            color: #ff0000;
            font-size: 0.9rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Connexion</h2>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
