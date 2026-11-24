<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <h1>Connexion à votre compte</h1>
    @if ($errors->any())
    <div style="color: red;">
        {{ $errors->first() }}
    </div>
@endif

    <form action="{{ route('login.store') }}" method="POST">

        @csrf

        <div>
            <label>Adresse email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Se connecter</button>

    </form>

</body>
</html>