<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto</title>
    <link rel="icon" type="images/ico" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style_message.css') }}">
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
                    <a class="for_nav" href= "{{route('accueil')}}"> ACCUEIL </a>
                </li>
                <li class="class2">
                    <a class="for_nav" href = ""> MESSAGERIE </a>
                </li>
            </ul> 
        </div>
    </nav>

    <div class="principale">
        <div class="menu">
            <ul>
                <br>
                <hr>
                <li><a href="">accueil</a></li>
                <hr>
                <li><img src="../images/message (1).JPG"><a href="">messages</a></li>
                <hr>
                <li><img src="../images/compte.JPG"><a href="">mon compte</a></li>
                <hr>
                <li><img src="../images/setting.JPG"><a href="">parametres</a></li>
                <hr>
            </ul>
        </div>
        <fieldset class="fieldset1">
            @foreach($data as $data1)
                <div class="boite">
                    <fieldset class="bordure">
                        <img class ="img1" src="../images/excel_file.PNG">
                        <p class="text"><strong>resultat semestre 1</strong></p>
                        <a href="http://127.0.0.1/download"><img class ="img2" src="../images/upload.PNG"></a>
                    </fieldset>
                </div>
            @endforeach
        </fieldset>
    </div>
</body>
</html>