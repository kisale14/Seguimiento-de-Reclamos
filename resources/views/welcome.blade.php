<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>

    <style>
        .main-image{
            position: relative;
            background: url("https://www.mexicanconsulting.com/wp-content/uploads/2018/12/Tipos-de-condominio.jpg") no-repeat center;
            margin-left: 150px;
            margin-right: 150px;
            margin-top: 50px;
            background-size: cover; 
            height: 500px;
            border-radius: 25px;
            overflow: hidden;
            z-index: 1;
        }

        .container1{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: black;
            font-weight: 700;
            text-transform: uppercase;
        }

        .container1 h1{
            margin: 0;
            font-size: 70px;
        }

        .container1 h1 span{
            border: 6px solid black;
            padding: 6px 14px;
            display: inline-block;
        }
    </style>

    @include('layouts.nav')

    <div class="main-image">
        <div class="container1">
            <h1><span>Sistema de Gestión de Reclamos</span></h1>
        </div>
    </div>
    
</body>
</html>