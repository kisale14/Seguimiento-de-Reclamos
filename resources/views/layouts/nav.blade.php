<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        *{
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body{
            background-color: #dfe9f5
        }

        nav{
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            background: #fff;
            width: 90px;
            overflow: hidden;
            transition: width 0.2s linear;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
            z-index: 20;
        }

        .logo{
            text-align: center;
            display: flex;
            transition: all 0.5s ease;
            margin: 10px 0 0 10px;
        }

        .logo img{
            width: 45px;
            height: 45px;
            border-radius: 50%; 
        }

        .logo span{
            font-weight: bold;
            padding-left: 15px;
            font-size: 18px;
            text-transform: uppercase;
        }

        a{
            position: relative;
            color: rgb(85, 83, 83);
            font-size: 14px;
            display: table;
            width: 300px;
            padding: 10px;
        }

        .fas{
            position: relative;
            width: 70px;
            height: 40px;
            top: 14px;
            font-size: 20px;
            text-align: center;
        }

        .fa-solid{
            position: relative;
            width: 70px;
            height: 40px;
            top: 14px;
            font-size: 20px;
            text-align: center;
        }

        .nav-item{
            position: relative;
            top: 12px;
            margin-left: 10px;
        }

        a:hover{
            background: #eee;
        }

        nav:hover{
            width: 280px;
            transition: all 0.5s ease;
            z-index: 20;
        }
    </style>

    <nav>
        <ul>
            <li>
                <a href="" class="logo">
                    <img src="https://w7.pngwing.com/pngs/343/484/png-transparent-computer-icons-encapsulated-postscript-complaint-text-logo-record-thumbnail.png" alt="">
                    <span class="nav-item">Code Info</span>
                </a>
            </li>
            <li><a href="/">
                <i class="fas fa-home"></i>
                <span class="nav-item">Inicio</span>
            </a></li>
            <li><a href="{{route('propietario.index')}}">
                <i class="fas fa-user"></i>
                <span class="nav-item">Propietarios y Aptos</span>
            </a></li>
            <li><a href="{{route('norma.index')}}">
                <i class="fa-solid fa-book"></i>
                <span class="nav-item">Normas</span>
            </a></li>
            <li><a href="{{route('reclamo.index')}}">
                <i class="fa-solid fa-file-circle-exclamation"></i>
                <span class="nav-item">Reclamos</span>
            </a></li>
            <li><a href="{{route('quejas.index')}}">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Seguimiento de Reclamos</span>
            </a></li>
        </ul>
    </nav>
    <script src="https://kit.fontawesome.com/3e68567d0b.js" crossorigin="anonymous"></script>
</body>
</html>