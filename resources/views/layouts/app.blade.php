<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Roboto&display=swap" rel="stylesheet">


    <title>Outright Foods</title>
    <!-- Styles -->
    <style>
        html {
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
    
        }

        .intro {
            background-color: #414858;
            color: gainsboro;
            border: 1px solid white;
        }

        .price {
            background-color: #414858;
            color: gainsboro;
            border: 1px solid white;
        }

        .menu {
            background-color: #414858;
            color: gainsboro;
            border: 1px solid white;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        h1,a {
            font-family: 'Handlee', cursive;
            font-weight: bold;

        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }

        #photos {

            line-height: 0;

            -webkit-column-count: 5;
            -webkit-column-gap: 0px;
            -moz-column-count: 5;
            -moz-column-gap: 0px;
            column-count: 5;
            column-gap: 0px;
        }

        #photos img {
            width: 100% !important;
            border: 2px solid white;
            height: auto !important;
        }

        @media (max-width: 1200px) {
            #photos {
                -moz-column-count: 4;
                -webkit-column-count: 4;
                column-count: 4;
            }
        }

        @media (max-width: 1000px) {
            #photos {
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        @media (max-width: 800px) {
            #photos {
                -moz-column-count: 2;
                -webkit-column-count: 2;
                column-count: 2;
            }
        }

        @media (max-width: 400px) {
            #photos {
                -moz-column-count: 1;
                -webkit-column-count: 1;
                column-count: 1;
            }
    </style>
</head>

<body>
    <main class="text-center">
        @yield('content')
    </main>
    @extends('sections.footer')
</body>

</html>