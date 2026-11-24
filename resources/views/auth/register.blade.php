<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

    <h1>Créer un compte</h1>
    @if ($errors->any())
    <div style="color: red; background: #ffe5e5; padding: 10px; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('register.store') }}" method="POST">

        @csrf

        <div>
            <label>Nom</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Mot de passe</label>
            <input type="password" name="password" required>

            @error('password')
    <p style="color: red;">{{ $message }}</p>
@enderror
        </div>

        <div>
            <label>Confirmation du mot de passe</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">S'inscrire</button>

    </form>

</body>
</html>