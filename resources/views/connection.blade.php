<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
    <link rel="icon" type="images/ico" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style_connexion.css') }}" >
</head>
<body class="body">
    <form action="" method="POST">
        @csrf
            <fieldset class="forme">
                <div class="left">
                    <div class="content">
                        <h1 style="color: white;"><strong>WELCOME BACK</strong></h1>
                        <p style="color: white;">nice for see you again</p>
                    </div>
                </div>
                <div class="rigth">
                    <div>
                        <h1 style="color: rgb(0, 140, 255);">Login Account</h1>
                        <p>Log in to your account to automatically</p> 
                        <p>receive your personal data securely.</p>
                        <br>
                        <br>
                        <input class="input" type="email" name="email" placeholder="Email ID" required>
                        <br>
                        <br>
                        <input class="input" type="password" name="password" placeholder="Password" required>
                        <br>
                        <br>
                        <button class="button" type="submit">connection</button>
                        <hr>
                        <a href="{{route('inscription')}}">inscrivez vous</a>
                    </div>
                </div>
            </fieldset>
    </form>
</body>
</html>