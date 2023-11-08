<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTO</title>
    <link rel="icon" type="images/ico" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style_message.css') }}">
</head>
<body>
    </head>
    <body style="background-image: url(../images/campus_2.jpg);">
        <header class="color_text">
            <h1> universite de douala </h1>
            <h2> ecole nationale superieur polytechnique de douala</h2>
            <h3> bienvenue sur le site </h3>
        </header>
        <nav>
            <div>
                <ul>
                    <li class= "class1">
                        <a class="for_nav" href= ""> ACCUEIL </a>
                    </li>
                    <li class="class2">
                        <a class="for_nav" href = "{{route('message')}}"> MESSAGERIE </a>
                    </li>
                </ul> 
            </div>
        </nav>
    
</body>
</html>