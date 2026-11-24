<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon profil</title>
</head>
<body>

    <h1>Mon profil utilisateur</h1>

    <p>Nom : {{ Auth::user()->name }}</p>

    <p>Email : {{ Auth::user()->email }}</p>

    <a href="{{ route('dashboard') }}">Retour au tableau de bord</a>

</body>
</html>