<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguimiento del Reclamo</title>
</head>
<body>

    <style>
        .main-image{
            position: relative;
            background: url("https://www.cablevisionperu.pe/wp-content/uploads/vector-reclamos.jpg") no-repeat center;
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

        .contact{
            margin-top: 50px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 80px;
        }

        .contact .contact__main{
            width: 100%;
            max-width: 500px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            row-gap: 14px;
            background-color: #fff;
            border-radius: 24px;
            box-shadow: 0px 16px 60px rgba(6, 28, 61, 0.2);
        }

        .contact .contact__main .contact__main__description{
            display: flex;
            flex-direction: column;
            row-gap: 10px;
            color: var(--secondary-color);
        }

        .contact .contact__main .contact__main__description .contact__main__description__title{
            font-size: 22px;
            line-height: 32px;
        }

        .contact .contact__main .contact__main__description .contact__main__description__paragraph{
            font-size: 12px;
            line-height: 24px;
            color: #42526B;
        }

        .contact .contact__main .contact__main__form, .contact .contact__main .contact__main__form .contact__main__form__group{
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact .contact__main .contact__main__form .contact__main__form__field{
            display: flex;
            flex-direction: column;
            row-gap: 6px;
        }

        .contact .contact__main .contact__main__form .contact__main__form__field .contact__main__form__field__label{
            font-size: 14px;
            line-height: 20px; 
        }

        .contact .contact__main .contact__main__form .contact__main__form__field .contact__main__form__field__input{
            background-color: #fff;
            border:  1px solid;
            border-radius: 5px;
            padding: 12px 18px;
            font-size: 14px;
        }

        .contact .contact__main .contact__main__form .contact__main__form__submit{
            width: 100%;
            max-width: 200px;
            display: flex;
            justify-content: center;
            justify-content: center;
            align-items: center;
            gap: 12px; 
            background-color: #0B63E5;
            color: #fff;
            border: none;
            border-radius: 7px;
            font-weight: bold;
            font-size: 14px;
            line-height: 42px;
            cursor: pointer;
            transition: .3s all;
        }

        .contact .contact__main .contact__main__form .contact__main__form__submit:focus{
            transition: scale(1.05);
            background-color: aqua;
        }

        .contact .contact__main .contact__main__form .contact__main__form__submit ion-icon{
            font-size: 20px;
        }

        
        .tbl{
            width: 100%;
            border-collapse: collapse;
        }

        .table thead{
            background: #424949;
            color: #fff;
        }

        .tbl thead tr th{
            font-size: 0.9rem;
            padding: 0.8rem;
            letter-spacing: 0.2rem;
            vertical-align: top;
            border: 1px solid #aab7b8;
        }

        .tbl tbody tr td{
            font-size: 1rem;
            letter-spacing: 0.2rem;
            font-weight: normal;
            text-align: normal;
            border: 1px solid #aab7b8;
            padding: 0.8rem;
        }

        .tbl tr:nth-child(even) {
            background: #ccc;
        }

        .tbl tr:hover td{
            background: #839192;
            color: black;
            transition: all 0.3s ease-in;
            cursor: pointer;
        }

        .tbl button{
            display: inline-block;
            border: none;
            margin: 0 auto;
            padding: 0.4rem;
            border-radius: 1px;
            outline: none;
            cursor: pointer;
        }

        .btn_trash{
            background: #e74c3c;
            color: #fff;
        }

        .container{
            max-width: 1440px;
            margin-left: 250px;
            margin-right: 150px;
            margin-top: 50px;
            background: #fff;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .container h2{
            padding: 2rem 1rem;
            font-size: 2.5rem;
             }
    </style>

    @include('layouts.nav')

    <div class="main-image">
        <div class="container1">
            <h1><span>Sistema de Gestión de Reclamos</span></h1>
        </div>
    </div>

    <div class="container">
        <div class="tbl_container">
            <h2>Seguimiento de Reclamos</h2>
            <table class="tbl">
                <thead>
                    <tr>
                        <th>Fecha del Reclamo</th>
                        <th>Propietario Infractor</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($reclamos as $item)
                    <tr>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->propietario_id}}</td>
                        <td>
                            <button  class="btn_trash"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <section class="contact">
        <div class="contact__main">
            <div class="contact__main__description">
                <h3 class="contact__main__description__title">Registrar Usuario</h3>
                <p class="contact__main__description__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </div>
            <form action="{{route('quejas.createa')}}" method="POST" class="contact__main__form">
                @csrf
                <div class="contact__main__form__group">
                    <div class="contact__main__form__field">
                        <label for="nombre" class="contact__main__form__field__label">Fecha del Reclamo</label>
                        <input type="date" class="contact__main__form__field__input" name="fecha">
                    </div>

                    <div class="contact__main__form__group">
                        <div class="contact__main__form__field">
                            <label for="nombre" class="contact__main__form__field__label">Reclamo a realizar</label>
                            <select name="queja_id" class="contact__main__form__field__input" id="">
                                    @foreach ($quejas as $item)
                                        <option value="{{$item->id}}">{{$item->titulo}}</option>
                                    @endforeach   
                            </select>
                        </div>

                             <div class="contact__main__form__group">
                                <div class="contact__main__form__field">
                                    <label for="nombre" class="contact__main__form__field__label">Propietario Infractor</label>
                                     <select name="propietario_id" class="contact__main__form__field__input" id="">
                                        @foreach ($propietarios as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                    @endforeach 
                                     </select>
                                 </div> 


                             <button type="submit" class="contact__main__form__submit">Registrar Propietario <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>