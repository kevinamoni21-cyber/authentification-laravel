<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon tableau de bord</title>
</head>
<body>

    <h1>Bienvenue dans votre espace personnel !</h1>

    <p>Vous êtes connecté à votre compte.</p>

    <a href="{{ route('profile') }}">Voir mon profil</a>
    
    <form action="{{ route('logout') }}" method="POST">
    @csrf

    <button type="submit">Se déconnecter</button>
</form>
</body>
</html>