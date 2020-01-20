<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
                color:gainsboro; 
                border:1px solid white;
            }
            .price {
                background-color: #414858;
                color:gainsboro; 
                border:1px solid white;
            }
            .menu {
                background-color: #414858;
                color:gainsboro; 
                border:1px solid white;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            h1{
                font-family: 'Handlee', cursive;
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
        </style>
    </head>
    <body>
    @include('intro')
    
    @include('sections.carousel')

    @include('price')

    @include('aboutus')

        @include('sections.footer')
    </body>
</html>
