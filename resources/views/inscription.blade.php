<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion et creation d'un compte </title>
    <link rel="icon" type="images/ico" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{asset('css/style_inscription.css')}}">
</head>
<body class="body">
    <img class="image" src="images/logo.png">
    <div class="div">
        <h1 style="color: rgb(0, 102, 255);;"><strong>Auto</strong></h1>
        <h2 style="color: white;">connectez vous au programme auto pour recevoir vos donnees</h2>
        <h2 style="color: white;">automatiquement et de facon securisee</h2>
    </div>
    <div>
        <form action="" method="POST">
            @csrf
            <fieldset class="fieldset">
                <h1 class="text"><strong>CREER UN COMPTE</strong></h1>
                <hr>
                <input  class="input" name="email" type="email" placeholder="entrer votre adresse email" required>
                <br>
                <br>
                <input class="input" name="name" type="name" placeholder="entrer votre nom et prenom" required>
                <br>
                <br>
                <input class="input" name="matricule" type="name" placeholder="entrer votre matricule" required>
                <br>
                <br>
                <input class="input" name="password" type="password" placeholder="entrer votre mot de passe" required>
                <br>
                <br>
                <button class="button" type="submit"><strong>creer un compte</strong></button>
            </fieldset>
        </form>
    </div>
</body>
</html>