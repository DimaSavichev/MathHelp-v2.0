<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MathHelp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            html,body{
                margin:0;
                padding:0;
            }
            .head{
                background-color:green;
                color:white;
                margin-right:0;
            }
            .body{
                margin-top:20px;
                margin-right:0;
            }

            
        </style>
        
    </head>
    <body>
        <div class="row head">
            <h1 class="offset-1">MathHelp</h1>
        </div>
        <div class="row body align-items-center">
            <div class="card col-2 offset-1">
                <ul>
                    <li><a href="/triangle">Площадь треугольника</a></li>
                    <li><a href="/circle">Площадь круга</a></li>
                    <li><a href="/mediana">Формула медианы</a></li>
                </ul>
            </div>
            <div class="offset-1 col-8">
                <h2>@yield("heading")</h2>
                <p>@yield("description")</p>
                @yield("form")
                <p>@yield("answer")</p>
            </div>
        </div>
        <script>
            let links = document.getElementsByTagName('a');  
            for (let i=0;i<=2;i++){
                if (links[i].href == document.location.href){
                    links[i].style = "font-weight: bold;";
                } else {
                    links[i].style = "font-weight: normal;";
                }
            }
        </script>    
    </body>
</html>
